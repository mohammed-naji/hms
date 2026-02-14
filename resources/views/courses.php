<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
</head>

<body>

    <div class="max-w-6xl mx-auto my-6">
        <h1 class="text-4xl font-semibold">All Courses</h1>



        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default bg-cyan-700 text-white">
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
                    <?php
                    $i = 1;
                    foreach ($courses as $course): ?>
                        <tr class="bg-neutral-primary border-b border-default <?php echo $i == count($courses) ? 'bg-red-100' : '' ?>">
                            <td class="px-6 py-4">
                                <?php echo $course['id'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $course['name'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $course['hours'] ?>
                            </td>
                            <td class="px-6 py-4">
                                $<?php echo $course['price'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $course['instructor'] ?>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>



</body>

</html>