<x-layout>

    {{-- ================= HERO CAROUSEL ================= --}}
    <div id="carousel" class="relative h-screen overflow-hidden">

        {{-- Slides --}}
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-100"
            style="background-image: url('{{ asset('img/home1.jpg') }}')"></div>
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-0"
            style="background-image: url('{{ asset('img/home2.jpg') }}')"></div>
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-0"
            style="background-image: url('{{ asset('img/home3.jpg') }}')"></div>

        <div class="absolute inset-0 bg-black/30"></div>

        {{-- HERO TEXT (STAGGER) --}}
        <div id="heroText"
            class="absolute inset-0 flex flex-col justify-center text-white px-4 sm:px-10 md:px-20 stagger">
            <span class="text-base sm:text-lg font-bold">Sistem Informasi</span>
            <span class="text-4xl sm:text-5xl md:text-6xl font-bold">Desa Sebatu</span>
            <span class="mt-2 text-xs sm:text-sm md:text-base font-bold">
                Kecamatan Tegallalang, Kabupaten Gianyar
            </span>
            <span>
                <a href="/wisata"
                    class="mt-4 inline-block px-6 py-2 bg-[#543A14] text-white font-semibold rounded-xl hover:bg-[#2b1f0d]">
                    Explorasi Wisata
                </a>
            </span>
        </div>

        {{-- Indicators --}}
        <div class="absolute bottom-6 w-full flex justify-center space-x-3">
            <span class="dot w-3 h-3 rounded-full bg-white"></span>
            <span class="dot w-3 h-3 rounded-full bg-white/50"></span>
            <span class="dot w-3 h-3 rounded-full bg-white/50"></span>
        </div>
    </div>

    {{-- ================= ABOUT (FADE UP) ================= --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 fade-up animate">
            @include('home.about')
        </div>
    </section>

    {{-- ================= PROFILE (FADE LEFT) ================= --}}
    {{-- <section id="profile" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 fade-left animate">
            @include('home.profile')
        </div>
    </section> --}}

    {{-- ================= DESTINASI (FADE RIGHT) ================= --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 fade-right animate">
            @include('home.destinasi')
        </div>
    </section>

    {{-- ================= GALERI (FADE UP) ================= --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 fade-up animate">
            @include('home.galeri')
        </div>
    </section>

    {{-- ================= FOOTER ================= --}}
    @include('components.footer')

    {{-- ================= JS ================= --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            /* ===== HERO STAGGER ===== */
            setTimeout(() => {
                document.getElementById("heroText").classList.add("show");
            }, 300);

            /* ===== SECTION ANIMATION ===== */
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show");
                    }
                });
            }, { threshold: 0.2 });

            document.querySelectorAll(".animate").forEach(el => {
                observer.observe(el);
            });

            /* ===== CAROUSEL ===== */
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

</x-layout>
