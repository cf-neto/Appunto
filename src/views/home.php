<?php
include_once('../includes/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/home.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body class="bg-color">
        <header class="w-full h-[10%] bg-black flex justify-between items-center px-8">
            <div class="flex items-center">
                <a class="text-white text-xl">Appunto</a>
            </div>
            <nav>
                <ul id="nav-list" class="relative flex gap-4 text-white text-lg">
                    <li><a href="#">Home</a></li>
                    <li><a href="#notes">Notes</a></li>
                    <li><a href="#">ToDo</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="flex items-center gap-4">
                <div id="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                
                <form action="../controllers/logout.php" method="POST" class="w-[50px] h-[50px] text-white flex justify-center items-center rounded-full gap-2
                hover:bg-white hover:text-black 
                transition-colors duration-300 ease-in-out">
                    <button class="w-full h-full rounded-full flex justify-center items-center cursor-pointer" type="submit">
                        <i class='bx bx-log-out text-2xl w-[30px]'></i> 
                    </button>
                </form>
            </div>
        </header>


        <main class="flex justify-center items-center flex-col">
            <section class="w-full h-[80dvh] flex justify-center items-center flex-row">
                <div class="w-[30%] flex justify-center items-center flex-col">
                    <p id="p-hello" class="opacity-20 text-[55px]">Hello</p>
                    <h1 id="p-name" class="text-black text-[60px]">Carlos Fernando</h1>
                </div>
                <div class="w-[30%] flex justify-center items-center flex-col">
                    <p id="p-today" class="opacity-20 text-[55px]">Today is</p>
                    <h1 id="p-date" class="text-black text-[60px]">14/01/2008</h1>
                </div>
            </section>
            <div class="w-full h-[10dvh] flex justify-center items-center">
                <div class="w-[50px] h-[50px] bg-black flex justify-center text-white items-center rounded-full cursor-pointer 
                hover:bg-white hover:text-black
                transition-colors duration-300 ease-in-out">
                    <a href="#notes"><i class='bx bxs-down-arrow-alt text-4xl'></i></a>
                </div>
            </div>


            <section id="notes" class="w-full h-[100dvh] flex flex-col items-center justify-center bg-black py-10">
                <div class="h-[20dvh] w-full flex justify-center items-center flex-col">
                    <h1 id="create-notes" class="text-white text-7xl font-bold">Create notes</h1>
                </div>

                <div class="flex w-[50%] h-[30dvh] justify-center items-center rounded-lg shadow-lg">
                    <form class="w-[80%] bg-black h-full flex flex-col justify-between p-4 gap-2">
                    <input 
                        class="w-full h-[15%] text-white mb-4 border border-gray-300 rounded focus:outline-none" 
                        name="title" 
                        placeholder="Title" 
                        required
                    >
                    <input 
                        class="w-full h-[15%] text-white mb-4 border border-gray-300 rounded outline-none" 
                        name="subtitle" 
                        placeholder="Subtitle" 
                        required
                    >
                    <textarea 
                        class="flex-grow rounded border border-gray-300 h-[30%] text-white resize-none focus:outline-none" 
                        placeholder="Write your note here..."
                        required
                    ></textarea>
                    <div id="buttons-notes" class="w-full h-[15%] flex flex-row justify-end items-center gap-5">
                        <button type="button">My Notes</button>
                        <button type="submit">Submit</button>
                    </div>
                    </form>
                </div>
                </section>


        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/utils.js"></script>
    <script>
        AOS.init();
    </script>
</html>