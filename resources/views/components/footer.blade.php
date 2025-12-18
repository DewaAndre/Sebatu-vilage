<footer class=" bg-[#2b1f0d] pt-20 pb-10 text-gray-600">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">

            {{-- LEFT : LOGO & ADDRESS --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('img/logo1.png') }}" alt="Desa Wisata Sebatu"
                        class="h-12 w-auto">
                </div>

                <p class="leading-relaxed text-white">
                    Desa Sebatu,<br>
                    Kecamatan Tegallalang,<br>
                    Kabupaten Gianyar.
                </p>
            </div>

            {{-- CENTER : MENU --}}
            <div class="md:mx-auto">
                <h3 class="font-semibold text-white mb-5">
                    Tentang Kami
                </h3>

                <ul class="space-y-3">
                    <li>
                        <a href="/" class="text-white hover:text-gray-400 transition">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/wisata" class="text-white hover:text-gray-400 transition">
                            Wisata
                        </a>
                    </li>
                    <li>
                        <a href="/media" class="text-white hover:text-gray-400 transition">
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="/hubungi" class="text-white hover:text-gray-400 transition">
                            Hubungi Kami
                        </a>
                    </li>
                </ul>
            </div>

            {{-- RIGHT : SOCIAL MEDIA --}}
            <div class="md:ml-auto">
                <h3 class="font-semibold text-white mb-5">
                    Sosial Media
                </h3>

                <div class="flex items-center gap-4">
                    {{-- Facebook --}}
                    <a href="#" class="text-blue-600 text-2xl hover:scale-110 transition">
                        <i class="fab fa-facebook"></i>
                    </a>

                    {{-- Instagram --}}
                    <a href="#" class="text-pink-500 text-2xl hover:scale-110 transition">
                        <i class="fab fa-instagram"></i>
                    </a>

                    {{-- YouTube --}}
                    <a href="#" class="text-red-600 text-2xl hover:scale-110 transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

        </div>

        {{-- COPYRIGHT --}}
        <div class="text-center text-sm text-gray-400 border-t pt-6">
            Copyright © 2025 | Developed by
            <a href="#" class="text-blue-600 hover:underline">
                INSTIKI
            </a>
        </div>

    </div>
</footer>
