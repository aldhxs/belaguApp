<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="/img/logo-footer.png">
    <title><?= $title; ?></title>
</head>

<body class="bg-bgColor2">
    <!-- Navbar Section -->
    <!-- SEARCH BOX -->
    <div id="search-box" class="hidden fixed top-0 left-0 w-screen h-screen bg-gray-900 z-50">
        <span class="cursor-pointer text-6xl text-white hover:text-amber-500 absolute right-5 top-5" onclick="closeSearchBox()" title="Close">&times;</span>
        <div class="w-full h-full flex justify-center items-center">
            <form action="">
                <input type="text" placeholder="What are you looking for?" name="search" class="w-96 px-3 py-2 rounded-tl-full rounded-bl-full border-0 focus:outline-0">
                <button type="submit" class="px-3 py-2 -ml-1.5 bg-green-500 hover:bg-green-600 text-white rounded-tr-full rounded-br-full">Search</button>
            </form>
        </div>
    </div>
    <!-- END SEARCH BOX -->

    <header id="navbar" class="sticky top-0 z-40">
        <div class="container mx-auto p-4 bg-bgColor2">
            <div class="navbar bg-comColor rounded-lg shadow-2xl" data-aos="fade-down" data-aos-duration="1000">
                <div class="navbar-start">
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </label>
                        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="/home">Home</a></li>
                            <li><a href="/rating">Rating</a></li>
                            <li><a href="/coming-up">Coming Up</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost normal-case text-xl" href="/home">BeLagu</a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="/home"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="/rating"><i class="fas fa-star"></i> Rating</a></li>
                        <li><a href="/coming-up"><i class="fas fa-fire"></i> Coming Up</a></li>
                    </ul>
                </div>
                <div class="navbar-end">
                    <button class="btn btn-ghost btn-circle" onclick="openSearchBox()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="indicator-item">
                                <span class="flex h-3 w-3">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                                </span>
                            </span>
                        </div>
                    </button>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="/img/profile.jpg" />
                            </div>
                        </label>
                        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li>
                                <a class="justify-between" href="/your-order">
                                    Transaction
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a href="/">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Navbar Section -->

    <!-- CONTENT -->
    <?= $this->renderSection('content'); ?>


    <!-- FOOTER -->
    <footer class="footer items-center p-4 bg-neutral text-neutral-content">
        <div class="items-center grid-flow-col">
            <figure><img src="/img/logo-footer.png" class="h-10"></figure>
            <p>Copyright © 2022 - All right reserved</p>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
        function generateBarCode() {
            var nric = $('#text').val();
            var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
            $('#barcode').attr('src', url);
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        var searchBox = document.getElementById("search-box");

        function openSearchBox() {
            searchBox.classList.remove("hidden");
        }

        function closeSearchBox() {
            searchBox.classList.add("hidden");
        }
    </script>
</body>

</html>