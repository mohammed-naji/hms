<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Courses</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-teal-50">


    <div class="max-w-5xl mx-auto mt-10">
        {{-- @dump(session('msg'))
        @if (session('msg'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-3">
                {{ session('msg') }}
            </div>
        @endif --}}

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
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Updated At
                        </th>
                        <th scope="col" style="width: 15%" class="px-6 py-3 font-medium">
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
                                {{-- {{ $course->created_at->toDateString() }} --}}
                                {{-- 5 Mar, 2026 --}}
                                {{ $course->created_at->format('d F, Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $course->updated_at->diffForHumans() }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="" class="bg-green-500 text-white px-2 text-xs p-1 rounded"><i
                                        class="fas fa-eye"></i></a>
                                <a href="" class="bg-blue-500 text-white px-2 text-xs p-1 rounded"><i
                                        class="fas fa-edit"></i></a>
                                {{-- <a href="{{ route('courses.destroy', $course->id) }}"
                                    class="bg-red-500 text-white px-2 text-xs p-1 rounded"><i
                                        class="fas fa-trash"></i></a> --}}
                                <form class="inline" action="{{ route('courses.destroy', $course->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-500 text-white px-2 text-xs p-1 rounded btn-delete"><i
                                            class="fas fa-trash"></i></button>
                                    {{-- <button onclick="return confirm('Are you sure?!')"
                                        class="bg-red-500 text-white px-2 text-xs p-1 rounded"><i
                                            class="fas fa-trash"></i></button> --}}
                                </form>
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const delete_btns = document.querySelectorAll('.btn-delete')

        delete_btns.forEach(el => {
            el.onclick = (e) => {
                e.preventDefault();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        el.closest('form').submit()
                    }
                });


            }
        });
    </script>

</body>

</html>
