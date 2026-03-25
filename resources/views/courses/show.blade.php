<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $course->title }} Course</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-teal-50 overflow-x-hidden">

    @if ($prev)
        <a href="{{ route('courses.show', $prev->id) }}"
            class="absolute flex items-center gap-3 bg-white p-2 rounded-tr-full rounded-br-full shadow top-1/2 -translate-y-1/2 -translate-x-5/6 duration-300 hover:translate-x-0">
            <span>
                {{ $prev->title }}
            </span>
            <img class="w-16 h-16 rounded-full object-cover" src="{{ asset($prev->image) }}" alt="">
        </a>
    @endif


    @if ($next)
        <a href="{{ route('courses.show', $next->id) }}"
            class="absolute flex items-center gap-3 bg-white p-2 rounded-tl-full rounded-bl-full shadow top-1/2 right-0 -translate-y-1/2 translate-x-5/6 duration-300 hover:translate-x-0">
            <img class="w-16 h-16 rounded-full object-cover" src="{{ asset($next->image) }}" alt="">
            <span>
                {{ $next->title }}
            </span>
        </a>
    @endif



    <div class="max-w-5xl mx-auto my-10">

        <h1 class="text-3xl text-center font-semibold mb-6">{{ $course->title }}</h1>
        <img class="max-w-2xl block mx-auto" src="{{ asset($course->image) }}" alt="">

        <div class="flex justify-center gap-6 my-4">
            <div>
                <i class="fas fa-user-tie"></i>
                {{ $course->instructor }}
            </div>
            <div>
                <i class="far fa-clock"></i>
                {{ $course->hours }}
            </div>
            <div>
                <i class="fas fa-dollar"></i>
                @if ($course->sale_price)
                    {{ $course->sale_price }}
                    <del>{{ $course->price }}</del>
                @else
                    {{ $course->price }}
                @endif

            </div>
        </div>

        <div>
            {{ $course->content }}
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
