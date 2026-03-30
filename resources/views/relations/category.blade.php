<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container my-5">
        <h1>{{ $category->title }} Courses</h1>

        <div class="row">
            @foreach ($category->courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $course->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ Str::words($course->content, 10, '...') }}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</body>

</html>
