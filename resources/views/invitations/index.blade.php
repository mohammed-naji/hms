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

    <noscript>
        <p>بالله عليك فعل الجافا سكربت</p>
    </noscript>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>
                المدعوين للافطار بمناسبة خطوبة غسان
            </h1>

            <div>
                <button class="btn btn-danger px-4 my-4 d-none delete-selected">حذف المحدد</button>
                <button class="btn btn-success px-4 my-4" data-bs-toggle="modal" data-bs-target="#addModal">إضافة
                    جديد</button>
            </div>
        </div>

        <table class="table table-bordered table-hover table-striped ">
            <thead class="table-dark">
                <tr>
                    <th style="width: 10%"><input type="checkbox" id="check_all"></th>
                    <th style="width: 40%">الاسم</th>
                    <th style="width: 30%">البريد الالكتروني</th>
                    <th style="width: 10%">وقت الارسال</th>
                    <th style="width: 10%">الاجراءات</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="text-end mt-4">
            <button data-link="{{ route('invitations') }}" class="btn btn-success btn-lg px-4 send-inv"> <i
                    class="far fa-paper-plane"></i> <span>إرسال
                    الدعوات</span>
            </button>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('invitations.js') }}"></script>
</body>

</html>
