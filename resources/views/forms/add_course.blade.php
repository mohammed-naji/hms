<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>

    <div class="container my-5">
        <h1>Add Course</h1>

        <form action="{{ route('forms.add_course') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" label="Title" placeholder="Course title" />
            <x-form.input name="image" type="file" label="Image" />
            <x-form.textarea name="content" label="Content" placeholder="Course content" rows="6" />
            <x-form.input name="duration" label="Duration" placeholder="Course duration" type="number" />
            <x-form.input name="price" label="Price" placeholder="Course price" type="number" />
            <x-form.input name="sale_price" label="Sale Price" placeholder="Course sale price" type="number" />
            <x-form.select name="instructor" label="Instructor">
                <option value="1">Mohammed Naji</option>
                <option value="2">Zina Mohammed</option>
                <option value="3">Sama Mohammed</option>
            </x-form.select>

            <button class="btn btn-success px-4"><i class="fas fa-save"></i> Save</button>
        </form>
    </div>

</body>

</html>
