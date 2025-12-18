<section class="bg-[#f3fbf7] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- TITLE --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
                Destinasi Wisata <br> Desa Sebatu
            </h2>
            <p class="mt-3 text-gray-500">
                Pilihan destinasi wisata terbaik di desa sebatu dan nikmati pengalaman yang tak terlupakan
            </p>
        </div>

        {{-- CARD GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- CARD 1 --}}
            <div class="relative rounded-3xl overflow-hidden group">
                <img src="{{ asset('img/kawi1.jpg') }}"
                    class="w-full h-[420px] object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <h3 class="text-xl font-bold">Pura Gunung KAwi</h3>
                    <p class="text-sm mt-1">
                        Pura Gunung Kawi Sebatu, terletak di Kabupaten Gianya...
                    </p>
                    <a href="/kawi"
                        class="inline-block mt-4 px-5 py-2 border border-white rounded-full text-sm hover:bg-white hover:text-black transition">
                        Selengkapnya
                    </a>
                </div>
            </div>

            {{-- CARD 2 --}}
            <div class="relative rounded-3xl overflow-hidden group">
                <img src="{{ asset('img/pesiraman3.jpg') }}"
                    class="w-full h-[420px] object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <h3 class="text-xl font-bold">Pesiraman Dalem Pingit Sebatu</h3>
                    <p class="text-sm mt-1">
                        Mata air ini diyakini memiliki kekuatan penyembuhan dan...
                    </p>
                    <a href="/pesiraman"
                        class="inline-block mt-4 px-5 py-2 border border-white rounded-full text-sm hover:bg-white hover:text-black transition">
                        Selengkapnya
                    </a>
                </div>
            </div>

            {{-- CARD 3 --}}
            <div class="relative rounded-3xl overflow-hidden group">
                <img src="{{ asset('img/alam3.jpg') }}"
                    class="w-full h-[420px] object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <h3 class="text-xl font-bold">Alam Bali Agrowisata</h3>
                    <p class="text-sm mt-1">
                        Agrowisata ini menyuguhkan berbagai macam kopi khas Bali dan luwak...
                    </p>
                    <a href="/alam"
                        class="inline-block mt-4 px-5 py-2 border border-white rounded-full text-sm hover:bg-white hover:text-black transition">
                        Selengkapnya
                    </a>
                </div>
            </div>

        </div>

        {{-- SHOW MORE BUTTON --}}
        <div class="mt-12 text-center">
            <a href="/wisata"
                class="inline-flex items-center px-8 py-3 bg-[#543A14] text-white font-semibold rounded-full hover:bg-[#2b1f0d] transition">
                Show More
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

    </div>
</section>
