<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />

</head>

<body class="flex flex-col items-center justify-center p-2">
    <div class="bg-white flex flex-col gap-1 p-10 m-10 rounded-xl">
        <div class="flex flex-cols gap-5">
            <div class="p-2">
                <img src="uc_logo.png" alt="uc_logo" class="w-20" />
            </div>
            <div>
                <h2 class="text-lg font-bold">UNIVERSITY OF CEBU</h2>
                <h3 class="text-m">LAPU-LAPU & MANDAUE</h3>
                <p style="font-size: 9px;">
                    A.C. Cortes Ave,. Looc, Mandaue City, Philippines
                </p>
            </div>
        </div>

        <ul class="space-y-2 flex flex-col gap-3">
            <div class="flex flex-row items-center justify-center max-w-25">
                <?php
                if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
                    $uploadDir = "uploads/";
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    $fileName = basename($_FILES["file"]["name"]);
                    $targetPath = $uploadDir . $fileName;

                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                        echo "<img src='$targetPath' alt='profile-pic' class='w-25 h-30 border-4 border-black-500' />";
                    } else {
                        echo "<p>Failed to upload image.</p>";
                    }
                } else {
                    echo "<p>No image uploaded.</p>";
                }
                ?>
            </div>

            <li>School Id: <?php echo $_POST["idNumber"]; ?></li>
            <li>Name: <?php echo $_POST["fullname"]; ?></li>
            <li>Program: <?php echo $_POST["program"]; ?></li>
            
            <?php
                include "class.php"; 
                $student = new Student($targetPath, $_POST["fullname"], $_POST["idNumber"], $_POST["program"] );
                $service = new StudentService();
                $service->save_student($student->get_student());
            ?>
        </ul>
    </div>
    <div>
        <button onclick="home()">Ok</button>
    </div>
    <script>
        function home() {
            window.location.href = "index.php"
        }
    </script>
</body>

</html>