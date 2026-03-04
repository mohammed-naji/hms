<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iftar Invitations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-CfCrinSRH2IR6a4e6fy2q6ioOX7O6Mtm1L9vRvFZ1trBncWmMePhzvafv7oIcWiW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flasher/flasher@2.2.0/dist/flasher.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap');

        body {
            font-family: "Cairo", sans-serif;
        }

        [contenteditable="true"] {
            background: #848484 !important;
            color: #fff !important;
        }
    </style>
</head>

<body>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>
                المدعوين للافطار بمناسبة خطوبة غسان
            </h1>

            <button class="btn btn-success px-4 my-4" data-bs-toggle="modal" data-bs-target="#addModal">إضافة
                جديد</button>
        </div>

        <table class="table table-bordered table-hover table-striped ">
            <thead class="table-dark">
                <tr>
                    <th style="width: 10%">#</th>
                    <th style="width: 40%">الاسم</th>
                    <th style="width: 40%">البريد الالكتروني</th>
                    <th style="width: 10%">الاجراءات</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">إضافة جديد</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <x-form.input name="name" label="الاسم" />
                        <x-form.input name="email" type="email" label="البريد الالكتروني" />
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-primary btn-save">حفظ</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@2.2.0/dist/flasher.min.js"></script>


    <script>
        const btn = document.querySelector('.btn-save')
        const in_name = document.querySelector('[name=name]')
        const in_email = document.querySelector('[name=email]')
        const tbody = document.querySelector('table tbody')
        const myModalElement = document.getElementById('addModal');
        const myModal = new bootstrap.Modal(myModalElement);

        let prev_name, prev_email = '';

        let counter = 1;
        btn.onclick = () => {
            if (in_name.value.length == 0) {
                in_name.classList.add('is-invalid')
            } else {
                in_name.classList.remove('is-invalid')
            }

            if (in_email.value.length == 0) {
                in_email.classList.add('is-invalid')
            } else {
                in_email.classList.remove('is-invalid')
            }

            if (in_name.value.length > 0 && in_email.value.length > 0) {
                let item = `<tr>
                    <td>${counter}</td>
                    <td>${in_name.value}</td>
                    <td>${in_email.value}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-warning cancel d-none"><i class="fas fa-times"></i></a>
                        <a href="#" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>`;

                tbody.insertAdjacentHTML('beforeend', item);
                // tbody.innerHTML += item;
                myModal.hide();
                flasher.success("تمت الاضافة بنجاح");
                in_name.value = '';
                in_email.value = '';
                counter++;
            }
        }

        // Edit Record
        // const edit_btns = document.querySelectorAll('table .edit')
        // console.log(edit_btns);
        tbody.onclick = (e) => {
            e.preventDefault();

            if (e.target.closest('.edit')) {
                let tr = e.target.closest('tr')

                if (e.target.closest('.edit').classList.contains('btn-primary')) {
                    tr.querySelector('td:nth-child(2)').contentEditable = true;
                    tr.querySelector('td:nth-child(2)').focus()
                    tr.querySelector('td:nth-child(3)').contentEditable = true;

                    prev_name = tr.querySelector('td:nth-child(2)').textContent;
                    prev_email = tr.querySelector('td:nth-child(3)').textContent;

                    e.target.closest('.edit').classList.replace('btn-primary', 'btn-success')
                    e.target.closest('.edit').querySelector('i').classList.replace('fa-edit', 'fa-check')

                    tr.querySelector('.delete').classList.add('d-none')
                    tr.querySelector('.cancel').classList.remove('d-none')
                } else {
                    tr.querySelector('td:nth-child(2)').contentEditable = false;
                    tr.querySelector('td:nth-child(3)').contentEditable = false;

                    e.target.closest('.edit').classList.replace('btn-success', 'btn-primary')
                    e.target.closest('.edit').querySelector('i').classList.replace('fa-check', 'fa-edit')

                    tr.querySelector('.delete').classList.remove('d-none')
                    tr.querySelector('.cancel').classList.add('d-none')
                }

            }

            if (e.target.closest('.delete')) {
                if (confirm('Are you sure?!')) {
                    e.target.closest('tr').remove()
                }
            }

            if (e.target.closest('.cancel')) {

                let tr = e.target.closest('tr')

                tr.querySelector('td:nth-child(2)').contentEditable = false;
                tr.querySelector('td:nth-child(2)').focus()
                tr.querySelector('td:nth-child(3)').contentEditable = false;


                tr.querySelector('td:nth-child(2)').textContent = prev_name;
                tr.querySelector('td:nth-child(3)').textContent = prev_email;

                tr.querySelector('.delete').classList.remove('d-none')
                tr.querySelector('.cancel').classList.add('d-none')

                tr.querySelector('.edit').classList.replace('btn-success', 'btn-primary')
                tr.querySelector('.edit i').classList.replace('fa-check', 'fa-edit')
            }
        }
    </script>
</body>

</html>
