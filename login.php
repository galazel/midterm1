<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as Administrator</title>
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
            <h1 class="font-bold text-4xl text-center">Login</h1>
        </div>
        <hr class="text-blue-50 m-5" />
        <div>
            <form class="flex max-w-md flex-col gap-4" onsubmit="handleSubmit(event)">
                <div>
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="John Doe" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div>
                    <label for="idNumber" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" id="password" name="password" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none 
        focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Register
                    </button>
                </div>
            </form>

        </div>
    </div>
    <script>
        const handleSubmit = (e) => {
            e.preventDefault();
            const name = document.getElementById("fullname").value;
            const password = document.getElementById("password").value
            if (name === "admin" && password === "admin123")
                window.location.href = "admin.php"
            else
                alert("Invalid Credentials")
        }
    </script>
</body>

</html>