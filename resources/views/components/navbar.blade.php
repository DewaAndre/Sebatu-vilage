<nav id="navbar" class="fixed top-0 left-0 w-full bg-transparent transition duration-300 z-10">
    <div  class="container mx-auto px-6 sm:px-8 md:px-12 lg:px-20 flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img id="logo" src="{{ asset('img/logo1.png') }}" alt="Logo" class=" w-24 sm:w-28 md:w-32 h-auto">
        </div>

        <!-- Menu -->
        <ul id="menu" class="hidden md:flex space-x-8">
            <li>
                <a href="/" class="text-white hover:text-amber-500 transition duration-300 ease-in-out relative group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 text-amber-500 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
            </li>
            {{-- <li>
                <a href="/#profile" class="text-white hover:text-amber-500 transition duration-300 ease-in-out relative group">
                    Profil Desa
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 text-amber-500 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
            </li> --}}
            <li>
                <a href="/media" class="text-white hover:text-amber-500 transition duration-300 ease-in-out relative group">
                    Media
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 text-amber-500 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
            </li>
            <li>
                <a href="/wisata" class="text-white hover:text-amber-500 transition duration-300 ease-in-out relative group">
                    Wisata
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 text-amber-500 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
            </li>
            <li>
                <a href="/hubungi" class="text-white hover:text-amber-500 transition duration-300 ease-in-out relative group">
                    Hubungi kami
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 text-amber-500 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
            </li>
        </ul>

        <!-- Hamburger Menu -->
        <button id="hamburger" class="block md:hidden text-white hover:text-amber-500">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Responsive Menu -->
    <div id="responsiveMenu" class="hidden md:hidden bg-white shadow-md">
        <ul class="space-y-4 p-4 text-center">
            <li><a href="/" class="text-black hover:text-gray-200">Home</a></li>
            {{-- <li><a href="#profile" class="text-black hover:text-gray-200">Profil Desa</a></li> --}}
            <li><a href="/media" class="text-black hover:text-gray-200">Media</a></li>
            <li><a href="/wisata" class="text-black hover:text-gray-200">Wisata</a></li>
            <li><a href="/hubungi" class="text-black hover:text-gray-200">Hubungi kami</a></li>
        </ul>
    </div>
</nav>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.getElementById("navbar");
        const logo = document.getElementById("logo");
        const menuLinks = document.querySelectorAll("#menu a, #hamburger, .md\\:block a");

        function updateNavbarStyle() {
            if (window.location.pathname === "/") {
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-white", "shadow-md");
                logo.src = "{{ asset('img/logo1.png') }}";
                menuLinks.forEach(link => {
                    link.classList.remove("text-black", "hover:text-amber-500");
                    link.classList.add("text-white", "hover:text-amber-500");
                });
            } else {
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-white", "shadow-md");
                logo.src = "{{ asset('img/logo1.png') }}";
                menuLinks.forEach(link => {
                    link.classList.remove("text-white", "hover:text-amber-500");
                    link.classList.add("text-black", "hover:text-amber-500");
                });
            }
        }

        updateNavbarStyle();

        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-white", "shadow-md");
                logo.src = "{{ asset('img/logo1.png') }}";
                menuLinks.forEach(link => {
                    link.classList.remove("text-white", "hover:text-amber-500");
                    link.classList.add("text-black", "hover:text-amber-500");
                });
            } else if (window.location.pathname === "/") {
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-white", "shadow-md");
                logo.src = "{{ asset('img/logo1.png') }}";
                menuLinks.forEach(link => {
                    link.classList.remove("text-black", "hover:text-amber-500");
                    link.classList.add("text-white", "hover:text-amber-500");
                });
            }
        });

        const hamburger = document.getElementById("hamburger");
        const responsiveMenu = document.getElementById("responsiveMenu");

        hamburger.addEventListener("click", function () {
            responsiveMenu.classList.toggle("hidden");
        });
    });
</script>
