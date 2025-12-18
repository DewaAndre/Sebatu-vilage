<x-layout>
    {{-- BANNER --}}
    <div id="carousel" class="relative h-screen overflow-hidden">

        {{-- Slides --}}
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-100"
            style="background-image: url('{{ asset('img/pesiraman1.jpg') }}')"></div>

        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-0"
            style="background-image: url('{{ asset('img/pesiraman2.jpg') }}')"></div>

        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-0"
            style="background-image: url('{{ asset('img/pesiraman3.jpg') }}')"></div>

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black/30"></div>

        {{-- TEXT HERO (STAGGER) --}}
        <div class="absolute inset-0 flex flex-col justify-center text-white px-4 sm:px-10 md:px-20">
            <div class="stagger">
                <span>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold">
                        Pesiraman Dalem Pingit Sebatu
                    </h1>
                </span>
                <span>
                    <p class="mt-2 text-xs sm:text-sm md:text-base font-bold">
                        Ketenangan dan Kesucian
                    </p>
                </span>
            </div>
        </div>

        {{-- Indicators --}}
        <div class="absolute bottom-6 w-full flex justify-center space-x-3">
            <span class="dot w-3 h-3 rounded-full bg-white"></span>
            <span class="dot w-3 h-3 rounded-full bg-white/50"></span>
            <span class="dot w-3 h-3 rounded-full bg-white/50"></span>
        </div>
    </div>

    {{-- SCRIPT CAROUSEL --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const slides = document.querySelectorAll(".carousel-slide");
            const dots = document.querySelectorAll(".dot");
            let index = 0;

            function showSlide(i) {
                slides.forEach((slide, idx) => {
                    slide.style.opacity = idx === i ? "1" : "0";
                });

                dots.forEach((dot, idx) => {
                    dot.style.backgroundColor = idx === i ? "white" : "rgba(255,255,255,0.5)";
                });
            }

            setInterval(() => {
                index = (index + 1) % slides.length;
                showSlide(index);
            }, 4000);
        });
    </script>

    {{-- SECTION ABOUT --}}
    <section class="bg-white py-16 px-6 md:px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            {{-- TEXT --}}
            <div class="fade-left animate">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    Tentang Pesiraman Dalem Pingit Sebatu
                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Pesiraman Dalem Pingit Sebatu merupakan tempat suci
                    yang dipercaya memiliki nilai spiritual tinggi.
                    Suasana alam yang tenang menjadikan tempat ini
                    sebagai lokasi penyucian diri dan ketenangan batin.
                </p>
            </div>

            {{-- IMAGE --}}
            <div class="flex justify-center fade-right animate">
                <img src="{{ asset('img/pesiraman2.jpg') }}"
                     class="rounded-2xl shadow-lg w-full max-w-md object-cover">
            </div>
        </div>
    </section>

    {{-- SECTION SEJARAH --}}
    <section class="bg-green-50 py-16 px-6 md:px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            {{-- IMAGE --}}
            <div class="flex justify-center fade-left animate">
                <img src="{{ asset('img/pesiraman3.jpg') }}"
                     class="rounded-2xl shadow-lg w-full max-w-md object-cover">
            </div>

            {{-- TEXT --}}
            <div class="fade-right animate">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    Sejarah
                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Pesiraman ini telah digunakan secara turun-temurun
                    oleh masyarakat sebagai tempat ritual penyucian.
                    Keberadaannya menjadi bagian penting dari sejarah
                    spiritual Desa Sebatu.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Hingga kini, Pesiraman Dalem Pingit Sebatu tetap
                    dijaga kesuciannya dan menjadi tujuan wisata
                    spiritual bagi masyarakat lokal maupun wisatawan.
                </p>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    @include('components.footer')

    {{-- SCRIPT ANIMASI --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            // STAGGER HERO
            setTimeout(() => {
                document.querySelectorAll('.stagger').forEach(el => {
                    el.classList.add('show');
                });
            }, 300);

            // SCROLL ANIMATION
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    }
                });
            }, { threshold: 0.2 });

            document.querySelectorAll('.animate').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

</x-layout>
