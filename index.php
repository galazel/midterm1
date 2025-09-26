<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UCLM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class = "relative">
    <div class="absolute inset-0 z-0 bg-black opacity-20"></div>
    <div class = "flex flex-col gap-5 z-10  items-center p-5 w-[90vw]">
        <div class="flex flex-col gap-1 items-center border-b-2 mb-5 p-2">
            <h1 class = "text-[5rem] text-white">UNIVERSITY OF CEBU</h1>
            <h2 class="text-[1rem] text-white">LAPU-LAPU AND MANDAUE</h2>
        </div>
        <div class = "grid grid-cols-4 gap-5 mt-5">    
        </div>
        <p class = "text-[2rem] text-white">“Building Minds, Shaping Futures.”</p>
         <div class="flex justify-center">
            <a href="login.php" class="text-green-600 hover:text-red-600 cursor-pointer">Login as Administrator</a>
        </div>
    </div>
    <script>
        const universityOffers = [
            {
                department: "cba.jpg",
                title: "College of Business",
                programs: [
                    "Bachelor of Science in Business Administration",
                    "Bachelor of Science in Accountancy",
                    "Bachelor of Science in Hospitality Management",
                    "Bachelor of Science in Entrepreneurship"
                ]
            },
            {
                department: "ccs.jpg",
                title: "College of Computer",
                programs: [
                    "Bachelor of Science in Computer Science",
                    "Bachelor of Science in Information Technology",
                    "Bachelor of Science in Information Systems",
                    "Bachelor of Science in Software Engineering"
                ]
            },
            {
                department: "coe.jpg",
                title: "College of Engineering",
                programs: [
                    "Bachelor of Science in Civil Engineering",
                    "Bachelor of Science in Mechanical Engineering",
                    "Bachelor of Science in Electrical Engineering",
                    "Bachelor of Science in Electronics Engineering"
                ]
            },
            {
                department: "com.jpg",
                title: "College of Marine",
                programs: [
                    "Bachelor of Science in Marine Engineering",
                    "Bachelor of Science in Marine Transportation",
                    "Bachelor of Science in Maritime Safety",
                    "Bachelor of Science in Naval Architecture"
                ]
            }
        ];

        const grid = document.querySelector('.grid')
        universityOffers.forEach(element => 
        {    
            const div = document.createElement('div')
            div.className = 'w-full h-full object-cover relative transition-transform duration-300 ease-in-out hover:scale-105'

            const img = document.createElement('img')
            img.src = element.department
            img.alt =  element.title
            img.className = 'w-full h-full object-cover '

            const title = document.createElement('p')  
            title.innerHTML = element.title
            title.className = 'grid content-center justify-center absolute inset-0 opacity-0 hover:opacity-70 hover:bg-black text-white text-3xl p-2 cursor-pointer'

            div.appendChild(img)
            div.appendChild(title)
            
                title.addEventListener('click',async ()=>
                {  
                    // fetch('registration.php',
                    // {
                    //     method : 'POST',
                    //      headers: {
                    //         "Content-Type" : "application/json"
                    //     },
                    //     body: JSON.stringify(element.programs) 
                    // }).then(response => response.text())
                    // .then(data => console.log(data))
                    // .catch(error => console.log(error))
                    // window.location.href = 'registration.php'       
                    localStorage.setItem('programs',JSON.stringify(element.programs)) 
                    window.location.href = 'registration.php'                              
                })
            grid.appendChild(div)

        });
    </script>
</body>
</html>