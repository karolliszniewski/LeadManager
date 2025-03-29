<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <nav class="bg-blue-600 text-white p-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="text-2xl font-bold">
                <a href="{{ route('welcome') }}" class="hover:text-blue-200">Brevo-Integrated Contact Form (Laravel)</a>
            </div>
            <div class="lg:flex hidden space-x-6">
                <a href="{{ route('welcome') }}" class="hover:text-blue-200">Contact Funnel</a>
                <a href="{{route('lead.index')}}" class="hover:text-blue-200">Admin Panel</a>
            </div>
            <div class="lg:hidden flex items-center">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu" class="lg:hidden bg-blue-600 text-white p-4 space-y-4 hidden">
        <a href="/admin" class="block hover:text-blue-200">Admin Panel</a>
        <a href="/contact" class="block hover:text-blue-200">Contact Form</a>
    </div>

    <main class="max-w-7xl mx-auto p-6 mt-8">
        @yield('content') 
    </main>




    <script>
        document.getElementById("menu-button").addEventListener("click", function() {
            const mobileMenu = document.getElementById("mobile-menu");
            mobileMenu.classList.toggle("hidden");
        });
    </script>

</body>
</html>
