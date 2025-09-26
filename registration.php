<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-white flex flex-col gap-1 p-10 m-10 rounded-xl">
        <div class="flex flex-col items-center justify-center gap-5">
            <h1 class="font-bold text-4xl text-center">Registration Form</h1>
        </div>
        <hr class="text-blue-50 m-5" />
        <div>
            <form method="post" action="display.php " enctype="multipart/form-data">
                <div class="flex max-w-md flex-col gap-4" id="page1">
                    <div class="flex flex-col items-center justify-center gap-5">
                        <p>Personal Information</p>
                    </div>
                    <div>
                        <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="John Doe" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>

                    <div>
                        <label for="idNumber" class="block mb-2 text-sm font-medium text-gray-900">ID Number</label>
                        <input type="text" id="idNumber" name="idNumber" maxlength="8" placeholder="09653526485"
                            required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
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
                        <p class="mt-1 text-sm text-gray-500">This will be your profile for the rest of the school year
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <button id="next" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none 
        focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Next
                        </button>
                    </div>
                </div>
                <div class="flex max-w-md flex-col gap-4 hidden" id="page2">
                    <div class="flex flex-col items-center justify-center gap-5">
                        <p>Emergency Contact Information</p>
                    </div>
                    <div>
                        <label for="guardianFullname" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" id="guardianFullname" name="guardianFullname" placeholder="John Doe" required
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>
                    <div>
                        <label for="guardianAddress"
                            class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                        <input type="text" id="guardianAddress" name="guardianAddress" placeholder="John Doe" required
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>

                    <div>
                        <label for="guardianNumber" class="block mb-2 text-sm font-medium text-gray-900">Tel No.</label>
                        <input type="tel" id="guardianNumber" name="guardianNumber" maxlength="11"
                            placeholder="21225368" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>

                    <div>
                        <label for="studentBirth" class="block mb-2 text-sm font-medium text-gray-900">Select your
                            program</label>
                        <input type="date" name="studentBirth" id="studentBirth" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="flex justify-evenly">
                        <button id="previous" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none 
        focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Previous
                        </button>
                        <button id="register" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none 
        focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Register
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script>

        const page1 = document.getElementById('page1')
        const page2 = document.getElementById('page2')

        document.getElementById('next').addEventListener('click', (e) => {
            e.preventDefault()
            page1.classList.add('hidden')
            page2.classList.remove('hidden')

        })
        document.getElementById('previous').addEventListener('click', (e) => {
            e.preventDefault()
            page1.classList.remove('hidden')
            page2.classList.add('hidden')
        })
        const programs = document.getElementById("program")
        const listOfPrograms = JSON.parse(localStorage.getItem('programs'))
        listOfPrograms.forEach(element => {
            const option = document.createElement("option")
            option.value = element
            option.innerHTML = element
            programs.appendChild(option)
        });
        const handleSubmit = (e) => {
            e.preventDefault()
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