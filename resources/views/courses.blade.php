<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    {{-- <h2>New Content</h2>  --}}
    <div class="max-w-6xl mx-auto my-6">
        <h1 class="text-4xl font-semibold">All Courses</h1>
        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead
                    class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default bg-cyan-700 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Hours
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Instructor
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr class="bg-neutral-primary border-b border-default {{ $loop->odd ? 'bg-red-100' : '' }}">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $course['name'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $course['hours'] }}
                            </td>
                            <td class="px-6 py-4">
                                ${{ $course['price'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $course['instructor'] }}
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-neutral-primary border-b border-default">
                            <td class="px-6 py-4 text-center" colspan="20">
                                No Courses Founds
                            </td>
                        </tr>
                    @endforelse

                    {{-- @if (count($courses) > 0)
                        @foreach ($courses as $course)
                            <tr class="bg-neutral-primary border-b border-default {{ $loop->odd ? 'bg-red-100' : '' }}">
                                <td class="px-6 py-4">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $course['name'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $course['hours'] }}
                                </td>
                                <td class="px-6 py-4">
                                    ${{ $course['price'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $course['instructor'] }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="bg-neutral-primary border-b border-default">
                            <td class="px-6 py-4 text-center" colspan="20">
                                No Courses Founds
                            </td>
                        </tr>
                    @endif --}}
                </tbody>
            </table>
        </div>

    </div>



</body>

</html>
