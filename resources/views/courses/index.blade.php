<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Courses</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-teal-50">


    <div class="max-w-5xl mx-auto mt-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-medium">All Courses</h1>
            <a href="{{ route('courses.create') }}"
                class="bg-teal-600 text-white px-4 py-1 rounded shadow duration-200 hover:bg-teal-700">Add new
                Course</a>
        </div>

        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
            <table class="w-full text-sm text-left rtl:text-right text-body bg-white shadow">
                <thead
                    class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Instructor
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr class="bg-neutral-primary border-b border-default">
                            <td class="px-6 py-4">
                                {{ $course->id }}
                            </td>
                            <td class="px-6 py-4">
                                <img class="w-16" src="{{ asset($course->image) }}" alt="">
                            </td>
                            <td class="px-6 py-4">
                                {{ $course->title }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($course->sale_price)
                                    ${{ $course->sale_price }} <small
                                        class="text-gray-400"><del>${{ $course->price }}</del></small>
                                @else
                                    ${{ $course->price }}
                                @endif

                            </td>
                            <td class="px-6 py-4">
                                {{ $course->instructor }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="" class="bg-green-500 text-white px-2 text-xs p-1 rounded">Show</a>
                                <a href="" class="bg-blue-500 text-white px-2 text-xs p-1 rounded">Edit</a>
                                <a href="" class="bg-red-500 text-white px-2 text-xs p-1 rounded">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-neutral-primary border-b border-default">
                            <td class="px-6 py-4" colspan="10">
                                No Courses Found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>


</body>

</html>
