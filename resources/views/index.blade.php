<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Ambrosia</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>

<body>

    <!-- Header -->
    <header class="fixed z-50 top-0 left-0 right-0 h-16 transition-all duration-500 bg-white/0" id="header">
        <div class="w-[90vw] h-full mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white" id="logo">Ambrosia</h1>

            <nav class="hidden md:flex text-white items-center space-x-8" id="nav">
                <a href="#" class="hover:text-amber-500 transition-colors">Home</a>
                <a href="#" class="hover:text-amber-500 transition-colors">Shop</a>
                <a href="#" class="hover:text-amber-500 transition-colors">About</a>
                <a href="#" class="hover:text-amber-500 transition-colors">Contact</a>
            </nav>

            <div class="hidden md:flex items-center text-white space-x-6" id="icons">
                <button class="hover:text-amber-500 transition-colors">
                    <i data-lucide="search" class="w-5 h-5"></i>
                </button>
                <button class="hover:text-amber-500 transition-colors">
                    <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                </button>
                <button class="hover:text-amber-500 transition-colors">
                    <i data-lucide="user" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Mobile Nav -->
            <button class="md:hidden text-white">
                <i data-lucide="menu" class="w-5 h-5"></i>
            </button>
        </div>
    </header>
    <!-- End Header -->

    <!-- Hero Image -->
    <div class="relative h-[500px] overflow-hidden">
        <img src="{{ asset('indexhero.jpeg')}}" alt="Hero image"
            class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
            style="object-position: center 30%">
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/40"></div>
        <div
            class="absolute top-1/2 left-1/2 md:left-80 text-center md:text-left transform -translate-x-1/2 -translate-y-1/2 z-10">
            <h1 class="text-white text-5xl md:text-7xl font-bold tracking-tight">Simple</h1>
            <h1 class="md:ml-16 mt-4 text-white text-5xl md:text-7xl font-bold tracking-tight opacity-90">Is More</h1>
            <p class="mt-6 text-white/80 text-lg md:text-xl max-w-md">Discover our collection of minimalist and elegant
                designs</p>
        </div>
        <button
            class="absolute bottom-12 right-12 text-white/80 hover:text-white hover:border-white transition-all duration-300 border-4 border-white/80 rounded-full p-2 hover:bg-white/10 cursor-pointer"
            onclick="window.scrollTo({top: window.innerHeight, behavior: 'smooth'})">
            <i data-lucide="chevron-down" class="w-8 h-8 animate-bounce"></i>
        </button>
    </div>
    <!-- End Hero Image -->

    <!-- Main -->
    <main class="min-h-screen">

    </main>
    <!-- End Main -->




    <script>
        lucide.createIcons();

        const header = document.getElementById('header');
        const logo = document.getElementById('logo');
        const nav = document.getElementById('nav');
        const icons = document.getElementById('icons');

        let scrollTimeout;

        window.addEventListener('scroll', () => {
            header.classList.add('bg-white/95');

            if (window.scrollY > window.innerHeight * 0.6) {
                nav.classList.remove('text-white');
                icons.classList.remove('text-white');
                logo.classList.remove('text-white');

                nav.classList.add('text-amber-700');
                icons.classList.add('text-amber-700');
                logo.classList.add('text-amber-800');
            } else {
                nav.classList.remove('text-amber-700');
                icons.classList.remove('text-amber-700');
                logo.classList.remove('text-amber-800');

                nav.classList.add('text-white');
                icons.classList.add('text-white');
                logo.classList.add('text-white');
            }

            clearTimeout(scrollTimeout);

            scrollTimeout = setTimeout(() => {
                header.classList.remove('bg-white/95');
            }, 150);
        });
    </script>


</body>

</html>