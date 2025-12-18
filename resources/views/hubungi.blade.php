<x-layout>

    {{-- TITLE --}}
    <section class="py-20 text-center">
        <div class="stagger">
            <span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    Ada Pertanyaan?
                </h1>
            </span>
            <span>
                <span class="block text-green-600 mt-2 text-4xl md:text-5xl font-extrabold">
                    Hubungi Kami!
                </span>
            </span>
        </div>
    </section>

    {{-- MAP --}}
    <section class="max-w-6xl mx-auto px-6 mb-20 fade-up animate">
        <div class="rounded-2xl overflow-hidden shadow-lg">
            <iframe
                class="w-full h-[450px]"
                src="https://www.google.com/maps?q=Sebatu,Tegallalang,Gianyar,Bali&output=embed"
                loading="lazy">
            </iframe>
        </div>
    </section>

    {{-- FORM --}}
    <section class="max-w-5xl mx-auto px-6 pb-24 fade-up animate">
        <div class="bg-white rounded-3xl shadow-xl p-10">

            <h2 class="text-2xl font-bold text-gray-800 mb-8">
                Pertanyaan Atau Saran
            </h2>

            {{-- ALERT --}}
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('hubungi.kirim') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger animate">
                    <span>
                        <div>
                            <label class="font-semibold">Nama Depan <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_depan"
                                placeholder="Masukan nama depan"
                                class="w-full mt-2 p-4 rounded-xl bg-green-50 border focus:ring-2 focus:ring-green-500 outline-none"
                                required>
                        </div>
                    </span>

                    <span>
                        <div>
                            <label class="font-semibold">Nama Belakang <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_belakang"
                                placeholder="Masukan nama belakang"
                                class="w-full mt-2 p-4 rounded-xl bg-green-50 border focus:ring-2 focus:ring-green-500 outline-none"
                                required>
                        </div>
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger animate">
                    <span>
                        <div>
                            <label class="font-semibold">Alamat Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email"
                                placeholder="Masukan email"
                                class="w-full mt-2 p-4 rounded-xl bg-green-50 border focus:ring-2 focus:ring-green-500 outline-none"
                                required>
                        </div>
                    </span>

                    <span>
                        <div>
                            <label class="font-semibold">Subjek <span class="text-red-500">*</span></label>
                            <input type="text" name="subjek"
                                placeholder="Masukan subjek"
                                class="w-full mt-2 p-4 rounded-xl bg-green-50 border focus:ring-2 focus:ring-green-500 outline-none"
                                required>
                        </div>
                    </span>
                </div>

                <div class="fade-up animate">
                    <label class="font-semibold">Pertanyaan / Saran <span class="text-red-500">*</span></label>
                    <textarea name="pesan" rows="6"
                        placeholder="Masukan pertanyaan/saran"
                        class="w-full mt-2 p-4 rounded-xl bg-green-50 border focus:ring-2 focus:ring-green-500 outline-none"
                        required></textarea>
                </div>

                <div class="fade-up animate">
                    <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-10 py-4 rounded-xl transition">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>

    @include('components.footer')

    {{-- SCRIPT ANIMASI --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            // STAGGER TEXT
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
