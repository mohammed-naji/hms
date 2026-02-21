<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container my-5">
        <h1>Full Register Form</h1>
        {{-- name, email, password, image, dob, education, gender, skills, bio --}}

        <form action="{{ route('forms.form2') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="name" label="Name" />
            <x-form.input name="email" type="email" label="Email" />
            <x-form.input name="password" type="password" label="Password" autocomplete="new-password" />
            <x-form.input name="password_confirm" type="password" label="Confirm Password"
                autocomplete="new-password" />
            <x-form.input name="image" type="file" label="Image" />

            <x-form.input name="dob" type="date" label="Date of Birth" />

            <x-form.select name="education" label="Education">
                <option value=""> --Select Education-- </option>
                @foreach ($educations as $id => $op)
                    <option value="{{ $id }}">{{ $op }}</option>
                @endforeach
            </x-form.select>

            <x-form.radio name="gender" label="Gender" :options="$genders" />

            <x-form.checkbox name="skills[]" label="Skills" :options="$skills" />

            <x-form.textarea name="bio" label="Bio" rows="3" />

            {{-- <select class="form-control multi-select" name="skills[]" multiple>
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
                <option>option 6</option>
                <option>option 7</option>
                <option>option 8</option>
                <option>option 9</option>
            </select> --}}

            <button class="btn btn-info px-5">Register</button>
        </form>

    </div>


    {{-- <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.multi-select').select2();
        });
    </script> --}}
</body>

</html>
