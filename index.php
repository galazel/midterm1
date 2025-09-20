<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="bg-white flex flex-col gap-1 p-10 m-10 rounded-xl">
        <div class="flex flex-col items-center justify-center gap-5">
            <h1 class="font-bold text-4xl text-center">Registration Form</h1>
            <p>Fill out the required details below</p>
        </div>
        <hr class="text-blue-50 m-5" />
        <div>
            <form class="flex max-w-md flex-col gap-4" method="post" action="display.php" enctype="multipart/form-data"
                onsubmit="handleSubmit">
                <div>
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="John Doe" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>

                <div>
                    <label for="idNumber" class="block mb-2 text-sm font-medium text-gray-900">ID Number</label>
                    <input type="text" id="idNumber" name="idNumber" maxlength="8" placeholder="21225368" required
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>

                <div>
                    <label for="program" class="block mb-2 text-sm font-medium text-gray-900">Select your
                        program</label>
                    <select id="program" name="program" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected disabled>Select Program</option>
                    </select>
                </div>

                <div>
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-900">Profile Picture</label>
                    <input type="file" id="file" name="file" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
        focus:outline-none file:bg-black file:text-white file:px-4 file:py-2 file:rounded-md file:border-0" />
                    <p class="mt-1 text-sm text-gray-500">This will be your profile for the rest of the school year</p>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none 
        focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Register
                    </button>
                </div>
            </form>

        </div>
        <div class="flex justify-center">
            <a href="login.php" class="text-green-600 hover:text-red-600 cursor-pointer">Login as Administrator</a>
        </div>
    </div>

    <script>
        const programs = document.getElementById("program")
        const listOfPrograms = [
            "Bachelor of Science in Information Technology",
            "Bachelor of Science in Computer Science",
            "Bachelor of Science in Electronics and Communications Engineering",
            "Bachelor of Science in Information Systems",
            "Bachelor of Science in Civil Engineering",
            "Bachelor of Science in Electrical Engineering",
            "Bachelor of Science in Mechanical Engineering",
            "Bachelor of Science in Nursing",
            "Bachelor of Secondary Education",
            "Bachelor of Elementary Education",
            "Bachelor of Science in Accountancy",
            "Bachelor of Science in Business Administration",
            "Bachelor of Science in Hospitality Management",
            "Bachelor of Science in Tourism Management"
        ];
        listOfPrograms.forEach(element => {
            const option = document.createElement("option")
            option.value = element
            option.innerHTML = element
            programs.appendChild(option)
        });
        const handleSubmit = () => {
            alert("You've successfully registered!")
            const fileInput = document.getElementById("file");
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                console.log(file.name);
            }
        }
        const handleLogin = () => {
            window.location.href = "login.php"
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
</body>

</html>