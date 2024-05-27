<x-base-html>
    <x-navbar />

    <div class="container my-5 font-roboto">
        @if ($errors->any())
            <div id="alert-danger"
                class="relative flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <span class="sr-only">Info</span>
                <div class="text-sm font-medium ms-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="list-disc">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700 absolute top-2 right-2"
                    data-dismiss-target="#alert-danger" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @elseif (session('message'))
            <div id="alert-success" class="relative flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 "
                role="alert">
                <span class="sr-only">Info</span>
                <p class="text-sm font-medium ms-3">{{ session('message') }}</p>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 absolute top-2 right-2"
                    data-dismiss-target="#alert-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif


        <h1 class="mb-6 text-3xl font-bold text-center lg:text-start">Customer Testimonials</h1>

        <form action="{{ route('review.store') }}" method="POST">
            @csrf
            <h2 class="mb-8 text-2xl font-semibold text-center">Nilai</h2>
            <div class="relative flex flex-col items-center p-2 mb-3 border border-black lg:flex-row">
                <h2 class="my-2 text-lg font-medium lg:ms-5 lg:absolute">KUALITAS PRODUK</h2>
                <div class="mx-auto rating-kualitas">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="text-3xl text-yellow-300 bi bi-star hover:cursor-pointer"></i>
                    @endfor
                    <input type="hidden" class="input-kualitas" name="kualitasProduk" required>
                </div>
            </div>

            <div class="relative flex flex-col items-center p-2 mb-3 border border-black lg:flex-row">
                <h2 class="my-2 text-lg font-medium lg:ms-5 lg:absolute">LAYANAN JASA</h2>
                <div class="mx-auto rating-layanan">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="text-3xl text-yellow-300 bi bi-star hover:cursor-pointer"></i>
                    @endfor
                    <input type="hidden" class="input-layanan" name="layananJasa" required>
                </div>
            </div>
            <h2 class="mt-8 text-2xl font-semibold text-center">Ulasan</h2>
            <div class="mb-3 space-y-2">
                <label for="nama" class="block text-sm font-medium text-black">Your Name</label>
                <input type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-black text-sm rounded-lg focus:ring-[#383866] focus:border-[#383866] block w-full p-2.5"
                    id="nama" name="nama" placeholder="Enter Your Name" required>
            </div>
            <div class="mb-3 space-y-2">
                <label for="pesan" class="block text-sm font-medium text-black">Message</label>
                <textarea
                    class="bg-gray-50 border border-gray-300 text-gray-black text-sm rounded-lg focus:ring-[#383866] focus:border-[#383866] block w-full p-2.5"
                    name="pesan" id="pesan" cols="30" rows="5" placeholder="Enter Your Message" required></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="block text-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-md px-5 py-2.5">Submit
                    Testimony</button>
            </div>
        </form>
        <div class="justify-around gap-3 mx-0 my-5 row">
            @foreach ($reviews as $review)
                <x-item-review :review="$review" />
            @endforeach
        </div>
    </div>

    <p class="my-16 text-lg text-center font-roboto">©2023 Lensyauqi Multimedia. All Rights Reserved.</p>

    <x-footer />
</x-base-html>
