<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>

    <div class="container my-5">
        <h1>Upload File</h1>
        <form action="{{ route('forms.form3') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="images[]" type="file" multiple />
            <button class="btn btn-success px-4"><i class="fas fa-paper-plane"></i> Upload</button>
        </form>
    </div>

</body>

</html>
