const btn = document.querySelector(".btn-save");
const in_name = document.querySelector("[name=name]");
const in_email = document.querySelector("[name=email]");
const tbody = document.querySelector("table tbody");
const myModalElement = document.getElementById("addModal");
const myModal = new bootstrap.Modal(myModalElement);

let prev_name,
    prev_email = "";
let counter = 1;

btn.onclick = () => {
    if (in_name.value.length == 0) {
        in_name.classList.add("is-invalid");
    } else {
        in_name.classList.remove("is-invalid");
    }

    if (in_email.value.length == 0) {
        in_email.classList.add("is-invalid");
    } else {
        in_email.classList.remove("is-invalid");
    }

    if (in_name.value.length > 0 && in_email.value.length > 0) {
        let item = `<tr>
                    <td><input type="checkbox"> ${counter}</td>
                    <td>${in_name.value}</td>
                    <td>${in_email.value}</td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>`;

        tbody.insertAdjacentHTML("beforeend", item);
        // tbody.innerHTML += item;
        myModal.hide();
        flasher.success("تمت الاضافة بنجاح");
        in_name.value = "";
        in_email.value = "";
        counter++;

        saveData();
    }
};

// Edit Record
// const edit_btns = document.querySelectorAll('table .edit')
// console.log(edit_btns);
tbody.onclick = (e) => {
    // e.preventDefault();

    if (e.target.closest(".edit")) {
        e.preventDefault();
        let tr = e.target.closest("tr");

        if (e.target.closest(".edit").classList.contains("btn-primary")) {
            // Edit Mode
            tr.querySelector("td:nth-child(2)").contentEditable = true;
            tr.querySelector("td:nth-child(2)").focus();
            tr.querySelector("td:nth-child(3)").contentEditable = true;

            prev_name = tr.querySelector("td:nth-child(2)").textContent;
            prev_email = tr.querySelector("td:nth-child(3)").textContent;

            e.target
                .closest(".edit")
                .classList.replace("btn-primary", "btn-success");
            e.target
                .closest(".edit")
                .querySelector("i")
                .classList.replace("fa-edit", "fa-check");

            tr.querySelector(".delete i").classList.replace(
                "fa-trash",
                "fa-times",
            );
            tr.querySelector(".delete").classList.replace(
                "btn-danger",
                "btn-warning",
            );
            tr.querySelector(".delete").classList.replace("delete", "cancel");
            // tr.querySelector('.cancel').classList.remove('d-none')
        } else {
            e.preventDefault();
            // Save After Edit
            tr.querySelector("td:nth-child(2)").contentEditable = false;
            tr.querySelector("td:nth-child(3)").contentEditable = false;

            e.target
                .closest(".edit")
                .classList.replace("btn-success", "btn-primary");
            e.target
                .closest(".edit")
                .querySelector("i")
                .classList.replace("fa-check", "fa-edit");

            tr.querySelector(".cancel i").classList.replace(
                "fa-times",
                "fa-trash",
            );
            tr.querySelector(".cancel").classList.replace(
                "btn-warning",
                "btn-danger",
            );
            tr.querySelector(".cancel").classList.replace("cancel", "delete");

            // tr.querySelector('.delete').classList.remove('d-none')
            // tr.querySelector('.cancel').classList.add('d-none')

            saveData();
        }
    }

    if (e.target.closest(".delete")) {
        e.preventDefault();
        if (confirm("Are you sure?!")) {
            e.target.closest("tr").remove();
            saveData();
        }
    }

    if (e.target.closest(".cancel")) {
        e.preventDefault();
        let tr = e.target.closest("tr");

        tr.querySelector("td:nth-child(2)").contentEditable = false;
        tr.querySelector("td:nth-child(2)").focus();
        tr.querySelector("td:nth-child(3)").contentEditable = false;

        tr.querySelector("td:nth-child(2)").textContent = prev_name;
        tr.querySelector("td:nth-child(3)").textContent = prev_email;

        // tr.querySelector('.delete').classList.remove('d-none')
        // tr.querySelector('.cancel').classList.add('d-none')

        tr.querySelector(".cancel i").classList.replace("fa-times", "fa-trash");
        tr.querySelector(".cancel").classList.replace(
            "btn-warning",
            "btn-danger",
        );
        tr.querySelector(".cancel").classList.replace("cancel", "delete");

        tr.querySelector(".edit").classList.replace(
            "btn-success",
            "btn-primary",
        );
        tr.querySelector(".edit i").classList.replace("fa-check", "fa-edit");
    }
};

function saveData() {
    let users = [];

    tbody.querySelectorAll("tr").forEach((tr) => {
        users.push({
            name: tr.querySelector("td:nth-child(2)").textContent,
            email: tr.querySelector("td:nth-child(3)").textContent,
            sent_at: tr.querySelector("td:nth-child(4)").textContent,
        });
    });

    // localStorage.setItem('users', users)
    localStorage.setItem("users", JSON.stringify(users));
    // console.log(JSON.stringify(items));
}

loadData();

function loadData() {
    tbody.innerHTML = "";
    let users = JSON.parse(localStorage.getItem("users")) || [];
    users.forEach((user) => {
        let item = `<tr>
                    <td><input type="checkbox"> ${counter}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.sent_at ? user.sent_at : ""}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>`;

        tbody.insertAdjacentHTML("beforeend", item);
        counter++;
    });
}

// Send Ajax request
const send_btn = document.querySelector(".send-inv");

send_btn.onclick = () => {
    let users = JSON.parse(localStorage.getItem("users")) || [];

    users = users.filter((user) => user.sent_at.length == 0);

    if (users.length == 0) {
        flasher.warning("تم الارسال للجميع مسبقا");
        return;
    }

    send_btn.disabled = true;
    send_btn.classList.add("disabled");

    axios
        .post(send_btn.dataset.link, {
            users,
        })
        .then((res) => {
            if (res.data.status) {
                flasher.success(res.data.message);
                updateSentAt();
            } else {
                flasher.error(res.data.message);
            }
        })
        .catch((err) => {
            flasher.error(err);
        })
        .finally(() => {
            send_btn.disabled = false;
            send_btn.classList.remove("disabled");
        });
};

function updateSentAt() {
    let users = JSON.parse(localStorage.getItem("users")) || [];
    const date = new Date();
    const formatterUS = new Intl.DateTimeFormat("en-US", {
        dateStyle: "short",
        timeStyle: "short",
    });

    users = users.map((user) => {
        return {
            ...user,
            sent_at: user.sent_at ? user.sent_at : formatterUS.format(date),
        };
    });

    localStorage.setItem("users", JSON.stringify(users));

    counter = 1;
    loadData();
}

const all_checkboxes = document.querySelectorAll("tbody input[type=checkbox]");

all_checkboxes.forEach((el) => {
    el.onchange = () => {
        const anyChecked =
            document.querySelectorAll("tbody input[type=checkbox]:checked")
                .length > 0;

        if (anyChecked) {
            document
                .querySelector(".delete-selected")
                .classList.remove("d-none");
        } else {
            document.querySelector(".delete-selected").classList.add("d-none");
        }
    };
});

let all = document.querySelector("#check_all");
all.onclick = () => {
    if (all.checked) {
        all_checkboxes.forEach((el) => (el.checked = true));
        document.querySelector(".delete-selected").classList.remove("d-none");
    } else {
        all_checkboxes.forEach((el) => (el.checked = false));
        document.querySelector(".delete-selected").classList.add("d-none");
    }
};
