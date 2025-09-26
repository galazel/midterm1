<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-white flex flex-col gap-1 p-10 m-10 min-w-[50vw] max-h-[80vh] overflow-auto">
        <div class="flex flex-col items-center justify-center gap-5">
            <h1 class="font-bold text-4xl text-center">List of Students Registered</h1>
        </div>
        <hr class="text-blue-50 m-5" />
        <div id="student-list">
            <?php
            include "class.php";

            $studentService = new StudentService();
            $students = $studentService->read_students();

            foreach ($students as $line) {
                echo $line . "<br>";
            }
            ?>

        </div>
        <div id="clear">

        </div>
    </div>
    <script>
        const clear = document.getElementById("student-list")
        const clearBttn = document.getElementById('clear')

        function checkList() {
            if (clear.innerHTML.trim() === "")
            {
                clear.innerHTML = "There are no students registered."
                clearBttn.innerHTML = ""
            }
            else
                clearBttn.innerHTML = `<button class="bg-red-500 p-2 text-white" id="clear-bttn">Clear</button>`
        }
        checkList()
        document.getElementById("clear-bttn").addEventListener('click', () => {
            fetch("clear.php")
                .then(response => response.text)
                .then(data => {
                    console.log(data)
                    clear.innerHTML = ""
                    checkList()
                })
        })
    </script>
</body>

</html>