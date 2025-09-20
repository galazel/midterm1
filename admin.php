<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="bg-white flex flex-col gap-1 p-10 m-10 rounded-xl">
        <div class="flex flex-col items-center justify-center gap-5">
            <h1 class="font-bold text-4xl text-center">List of Students Registered</h1>
        </div>
        <hr class="text-blue-50 m-5" />
        <div>
            <?php
            include "class.php";

            $service = new StudentService();
            echo $service->read_students();


            ?>
        </div>
    </div>
</body>

</html>