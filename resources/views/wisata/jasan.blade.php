<x-layout>

    {{-- BANNER --}}
    <div id="carousel" class="relative h-screen overflow-hidden">

        {{-- Slides --}}
        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-100"
            style="background-image: url('{{ asset('img/jasan1.jpg') }}')"></div>

        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-0"
            style="background-image: url('{{ asset('img/jasan2.jpg') }}')"></div>

        <div class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 opacity-0"
            style="background-image: url('{{ asset('img/jasan3.jpg') }}')"></div>

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black/30"></div>

        {{-- TEXT HERO (STAGGER) --}}
        <div class="absolute inset-0 flex flex-col justify-center text-white px-4 sm:px-10 md:px-20">
            <div class="stagger">
                <span>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold">
                        Jasan Waterfall
                    </h1>
                </span>
                <span>
                    <p class="mt-2 text-xs sm:text-sm md:text-base font-bold">
                        Destinasi wisata air terjun tersembunyi di tengah alam
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

    {{-- SECTION ABOUT JASAN --}}
    <section class="bg-white py-16 px-6 md:px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            {{-- TEXT --}}
            <div class="fade-left animate">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    Tentang Jasan Waterfall
                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Air Terjun Jasan merupakan destinasi wisata tersembunyi yang
                    menawarkan pengalaman alam yang masih asri dan menakjubkan.
                    Wisata alam ini memang tidak sehits air terjun lainnya,
                    namun tetap patut dieksplorasi.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Terletak di Jl. Br Jasan Desa Sebatu, Kecamatan Tegallalang,
                    Kabupaten Gianyar, Bali, tempat ini jauh dari keramaian.
                </p>
            </div>

            {{-- IMAGE --}}
            <div class="flex justify-center fade-right animate">
                <img src="{{ asset('img/jasan1.jpg') }}"
                     class="rounded-2xl shadow-lg w-full max-w-md object-cover">
            </div>
        </div>
    </section>

    {{-- SECTION JALAN MENUJU AIR TERJUN --}}
    <section class="bg-green-50 py-16 px-6 md:px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            {{-- IMAGE --}}
            <div class="flex justify-center fade-left animate">
                <img src="{{ asset('img/jasan2.jpg') }}"
                     class="rounded-2xl shadow-lg w-full max-w-md object-cover">
            </div>

            {{-- TEXT --}}
            <div class="fade-right animate">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    Sepanjang Jalan Menuju Air Terjun
                </h2>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Pengunjung harus berjalan kaki sekitar 15–20 menit.
                    Sepanjang jalan disuguhkan hutan bambu, sungai,
                    dan sawah terasering.
                </p>

                <p class="text-gray-700 font-semibold">
                    Sumbangan sukarela:
                    <span class="text-green-700">Rp. 20.000</span>
                </p>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    @include('components.footer')

    {{-- SCRIPT ANIMATION --}}
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
