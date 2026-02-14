<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Form</title>
</head>

<body>

    <form action="{{ route('form1_data') }}" method="POST">
        <input type="text" value="{{ csrf_token() }}" name="_token">

        <input type="text" placeholder="Your name.." name="name">
        <button>Send</button>
    </form>

</body>

</html>
