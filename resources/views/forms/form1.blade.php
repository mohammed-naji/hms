<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>

    <div class="container my-5">
        <h1>Basic Form</h1>
        <form action="{{ route('forms.form1') }}" method="POST">
            @csrf

            <x-form.input name="name" placeholder="Your nameeeeee" />
            <x-form.input name="email" label="Email" type="email" />
            <x-form.input name="age" placeholder="Agee" type="number" />


            {{-- <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Your name.." class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Your email.." class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label for="age">Age</label>
                <input type="number" id="age" placeholder="Your age.." class="form-control" name="age">
            </div> --}}
            <button class="btn btn-success px-4"><i class="fas fa-paper-plane"></i> Send</button>
        </form>
    </div>

</body>

</html>
