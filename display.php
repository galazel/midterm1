<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
</head>
<body>
    <div
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="w-full h-full">
            <?php
            if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
                $uploadDir = "uploads/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = basename($_FILES["file"]["name"]);
                $targetPath = $uploadDir . $fileName;

                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                    echo "<img src='$targetPath' alt='profile-pic' class='object-cover w-full h-full rounded-t-lg' />";
                } else {
                    echo "<p>Failed to upload image.</p>";
                }
            } else {
                echo "<p>No image uploaded.</p>";
            }
            ?>
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?php echo $_POST["program"]; ?>
            </h5>
            <ul>
                <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">PERSONAL INFORMATION</p>
                <li class="mb-3 font-normal text-gray-700 dark:text-gray-400 list-none">Name:
                    <?php echo $_POST["fullname"]; ?>
                </li>
                <li class="mb-3 font-normal text-gray-700 dark:text-gray-400 list-none">Identification No.:
                    <?php echo $_POST["idNumber"]; ?>
                </li>
                <li class="mb-3 font-normal text-gray-700 dark:text-gray-400 list-none">Birthdate:
                    <?php echo $_POST["studentBirth"]; ?>
                </li>
            </ul>
            <ul>
                <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">EMERGENCY CONTACT</p>
                <li class="mb-3 font-normal text-gray-700 dark:text-gray-400 list-none">Guardian's Name:
                    <?php echo $_POST["guardianFullname"]; ?>
                </li>
                <li class="mb-3 font-normal text-gray-700 dark:text-gray-400 list-none">Address:
                    <?php echo $_POST["guardianAddress"]; ?>
                </li>
                <li class="mb-3 font-normal text-gray-700 dark:text-gray-400 list-none">Contact Number:
                    <?php echo $_POST["guardianNumber"]; ?>
                </li>
            </ul>
            <div> <button id="register" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none 
        focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" onclick="home()">
                    Noted
                </button>
            </div>
        </div>
    </div>
    <?php
    include "class.php";
    $student = new Student($targetPath, $_POST["fullname"], $_POST["idNumber"], $_POST["program"], $_POST["guardianFullname"], $_POST["guardianAddress"], $_POST["guardianNumber"], $_POST["studentBirth"]);
    $service = new StudentService();
    $service->save_student($student->get_student());
    ?>

    <script>
        function home() {
            alert('Thank you!')
            window.location.href = "index.php"
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>

</html>