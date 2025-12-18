@php
$hero = [
    "title" => "Alam Bali Agrowisata",
    "subtitle" => "Rasakan Kopi Luwak Autentik di Alam Bali Agrowisata",
    "slides" => [
        "alam1.jpg",
        "alam2.jpg",
        "alam3.jpg",
    ]
];

$sections = [
    [
        "title" => "Tentang Alam Bali Agrowisata",
        "desc" => "Alam Bali Agrowisata merupakan destinasi wisata yang menawarkan pengalaman agrowisata khas Bali. Pengunjung dapat menikmati suasana alam yang asri, belajar tentang kopi, serta merasakan langsung hasil perkebunan lokal.",
        "img" => "alam3.jpg",
        "reverse" => false,
        "bg" => "white"
    ],
    [
        "title" => "Aktivitas Seru",
        "desc" => "Pengunjung dapat mengikuti tur kebun kopi, melihat proses pengolahan kopi luwak, serta menikmati pemandangan alam sekitar yang masih alami dan menenangkan.",
        "extra" => "Selain itu, tersedia berbagai aktivitas edukatif seperti mencicipi kopi, berfoto di area perkebunan, dan berbelanja produk lokal khas Desa Sebatu.",
        "img" => "alam2.jpg",
        "reverse" => true,
        "bg" => "green"
    ],
];
@endphp

<x-layout>

    {{-- HERO / CAROUSEL --}}
    <div id="carousel" class="relative h-screen overflow-hidden">

        {{-- SLIDES --}}
        @foreach ($hero['slides'] as $index => $slide)
            <div
                class="carousel-slide absolute inset-0 bg-cover bg-center transition-opacity duration-700 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}"
                style="background-image: url('{{ asset('img/' . $slide) }}')">
            </div>
        @endforeach

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-black/30"></div>

        {{-- TEXT HERO --}}
        <div class="absolute inset-0 flex flex-col justify-center text-white px-4 sm:px-10 md:px-20 stagger animate">
            <span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold">
                    {{ $hero['title'] }}
                </h1>
            </span>
            <span>
                <p class="mt-2 text-xs sm:text-sm md:text-base font-bold">
                    {{ $hero['subtitle'] }}
                </p>
            </span>
        </div>

        {{-- INDICATORS --}}
        <div class="absolute bottom-6 w-full flex justify-center space-x-3">
            @foreach ($hero['slides'] as $i => $slide)
                <span class="dot w-3 h-3 rounded-full {{ $i === 0 ? 'bg-white' : 'bg-white/50' }}"></span>
            @endforeach
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

    {{-- CONTENT SECTIONS --}}
    @foreach ($sections as $section)
        <section class="{{ $section['bg'] === 'green' ? 'bg-green-50' : 'bg-white' }} py-16 px-6 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                @if (!$section['reverse'])
                    {{-- TEXT --}}
                    <div class="fade-left animate stagger">
                        <span>
                            <h2 class="text-3xl font-bold text-gray-800 mb-6">
                                {{ $section['title'] }}
                            </h2>
                        </span>

                        <span>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                {{ $section['desc'] }}
                            </p>
                        </span>

                        @isset($section['extra'])
                            <span>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $section['extra'] }}
                                </p>
                            </span>
                        @endisset
                    </div>
                @endif

                {{-- IMAGE --}}
                <div class="flex justify-center fade-right animate">
                    <img src="{{ asset('img/' . $section['img']) }}"
                        class="rounded-2xl shadow-lg w-full max-w-md object-cover">
                </div>

                @if ($section['reverse'])
                    {{-- TEXT --}}
                    <div class="fade-right animate stagger">
                        <span>
                            <h2 class="text-3xl font-bold text-gray-800 mb-6">
                                {{ $section['title'] }}
                            </h2>
                        </span>

                        <span>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                {{ $section['desc'] }}
                            </p>
                        </span>

                        @isset($section['extra'])
                            <span>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $section['extra'] }}
                                </p>
                            </span>
                        @endisset
                    </div>
                @endif

            </div>
        </section>
    @endforeach

    {{-- FOOTER --}}
    @include('components.footer')

    {{-- JS SCROLL ANIMATION --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
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
