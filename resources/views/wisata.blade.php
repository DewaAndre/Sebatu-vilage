@php
$wisata = [
    [
        "img" => "jasan1.jpg",
        "title" => "Jasan Waterfall",
        "desc" => "Air terjun ini menjadi destinasi yang menarik bagi para wisatawan yang ingin menikmati keindahan alam...",
        "link" => "/jasan",
        "highlight" => false
    ],
    [
        "img" => "kawi1.jpg",
        "title" => "Pura Gunung Kawi",
        "desc" => "Pura Gunung Kawi terletak di Banjar Sebatu, Desa Sebatu, Kecamatan Tegallalang, Gianyar...",
        "link" => "/kawi",
        "highlight" => true
    ],
    [
        "img" => "pesiraman1.jpg",
        "title" => "Pesiraman Dalem Pingit Sebatu",
        "desc" => "Mata air ini diyakini memiliki kekuatan penyembuhan dan sering digunakan untuk ritual...",
        "link" => "/pesiraman",
        "highlight" => false
    ],
    [
        "img" => "alam1.jpg",
        "title" => "Alam Bali Agrowisata",
        "desc" => "Alam Bali Agrowisata adalah destinasi wisata yang menawarkan pengalaman agrowisata...",
        "link" => "/alam",
        "highlight" => false
    ],
];
@endphp

<x-layout>

    {{-- WISATA DESA SEBATU --}}
    <section id="wisata" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            {{-- HEADER --}}
            <div class="text-center mb-16 fade-up stagger animate-on-scroll">
                <h1 class="text-3xl md:text-4xl font-extrabold text-black leading-tight">
                    <span>Destinasi Wisata</span>
                    <span>Desa Sebatu</span>
                </h1>

                <div class="mt-4 flex justify-center">
                    <span class="px-6 py-2 rounded-full bg-gray-100 text-gray-500 text-sm font-medium">
                        Berbagai Wisata Yang Dapat Anda Kunjungi
                    </span>
                </div>
            </div>


            {{-- CARD GRID --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                @foreach ($wisata as $index => $item)
                    <div class="group relative rounded-3xl overflow-hidden
                        {{ $item['highlight'] ? 'shadow-xl scale-105' : 'shadow-lg' }}
                        fade-up animate-on-scroll"
                        style="transition-delay: {{ $index * 120 }}ms">

                        <img src="{{ asset('img/' . $item['img']) }}"
                            class="w-full {{ $item['highlight'] ? 'h-[440px]' : 'h-[420px]' }}
                            object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                        <div class="absolute bottom-0 p-6 text-white">
                            <h3 class="text-xl font-bold mb-2">
                                {{ $item['title'] }}
                            </h3>

                            <p class="text-sm text-gray-200 mb-4 leading-relaxed">
                                {{ $item['desc'] }}
                            </p>

                            <a href="{{ $item['link'] }}"
                                class="inline-flex items-center px-4 py-2 border border-white rounded-full text-sm font-medium hover:bg-white hover:text-black transition">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    @include('components.footer')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".animate-on-scroll");

            const observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.15 }
            );

            elements.forEach(el => observer.observe(el));
        });
        </script>


</x-layout>
