<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="max-w-2xl mb-12">
            <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">
                Galeri Wisata <br> Desa Sebatu
            </h2>
            <p class="mt-4 text-gray-500">
                Jelajahi koleksi foto-foto menakjubkan dari berbagai destinasi wisata desa Sebatu
            </p>
        </div>

        {{-- GALLERY GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- LEFT COLUMN --}}
            <div class="space-y-6">
                <img src="{{ asset('img/kawi2.jpg') }}"
                    class="w-full h-[260px] object-cover rounded-3xl">

                <img src="{{ asset('img/pesiraman1.jpg') }}"
                    class="w-full h-[260px] object-cover rounded-3xl">
            </div>

            {{-- CENTER COLUMN --}}
            <div>
                <img src="{{ asset('img/kawi1.jpg') }}"
                    class="w-full h-[550px] object-cover rounded-3xl">
            </div>

            {{-- RIGHT COLUMN --}}
            <div class="space-y-6">
                <img src="{{ asset('img/alam2.jpg') }}"
                    class="w-full h-[260px] object-cover rounded-3xl">

                <img src="{{ asset('img/alam3.jpg') }}"
                    class="w-full h-[260px] object-cover rounded-3xl">
            </div>

            <a href="/media"
                class="inline-flex items-center text-gray-400 hover:text-gray-700 transition font-medium">
                Selengkapnya
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>

        </div>

    </div>
</section>
