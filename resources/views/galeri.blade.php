<x-layout>
    <section class="bg-white py-20 fade-up animate">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- HEADER --}}
            <div class="max-w-2xl mb-12 fade-left animate stagger">
                <span>
                    <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">
                        Galeri Wisata <br> Desa Sebatu
                    </h2>
                </span>
                <span>
                    <p class="mt-4 text-gray-500">
                        Jelajahi koleksi foto-foto menakjubkan dari berbagai destinasi wisata desa Sebatu
                    </p>
                </span>
            </div>

            @php
                $galleries = [
                    [
                        'left' => ['kawi1.jpg', 'pesiraman1.jpg'],
                        'center' => 'kawi2.jpg',
                        'right' => ['kawi3.jpg', 'alam1.jpg'],
                        'anim' => 'fade-left'
                    ],
                    [
                        'left' => ['alam2.jpg', 'alam3.jpg'],
                        'center' => 'pesiraman1.jpg',
                        'right' => ['pesiraman2.jpg', 'pesiraman3.jpg'],
                        'anim' => 'fade-up'
                    ],
                    [
                        'left' => ['jasan1.jpg', 'jasan2.jpg'],
                        'center' => 'jasan3.jpg',
                        'right' => ['alam2.jpg', 'pesiraman3.jpg'],
                        'anim' => 'fade-right'
                    ],
                ];
            @endphp

            {{-- GALLERY --}}
            @foreach ($galleries as $gallery)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 {{ $gallery['anim'] }} animate">

                    {{-- LEFT --}}
                    <div class="space-y-6">
                        @foreach ($gallery['left'] as $img)
                            <img src="{{ asset('img/'.$img) }}"
                                class="w-full h-[260px] object-cover rounded-3xl fade-up animate">
                        @endforeach
                    </div>

                    {{-- CENTER --}}
                    <div>
                        <img src="{{ asset('img/'.$gallery['center']) }}"
                            class="w-full h-[550px] object-cover rounded-3xl fade-up animate">
                    </div>

                    {{-- RIGHT --}}
                    <div class="space-y-6">
                        @foreach ($gallery['right'] as $img)
                            <img src="{{ asset('img/'.$img) }}"
                                class="w-full h-[260px] object-cover rounded-3xl fade-up animate">
                        @endforeach
                    </div>

                </div>
            @endforeach

        </div>
    </section>

    {{-- footer --}}
    @include('components.footer')

    {{-- JS ANIMATION --}}
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
