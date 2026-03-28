<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-teal-50">


    <div class="max-w-5xl mx-auto mt-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-medium">Add new Course</h1>
            <a href="{{ route('courses.index') }}"
                class="bg-teal-600 text-white px-4 py-1 rounded shadow duration-200 hover:bg-teal-700">All
                Courses</a>
        </div>

        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" label="Title" />
            <x-form.input name="image" label="Image" type="file" />
            <x-form.input name="instructor" label="Instructor" />
            <x-form.input name="price" label="Price" type="number" />
            <x-form.input name="sale_price" label="Sale Price" type="number" />
            <x-form.input name="hours" label="Hours" type="number" />
            <x-form.textarea name="content" label="Content" rows="7" />

            <button class="btn btn-success">Add Course</button>
        </form>

    </div>


</body>

</html>
