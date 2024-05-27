<x-base-html>
    <x-navbar />

    <div class="relative flex flex-col font-roboto">
        <img src="assets/images/jumbotron3.jpg" alt="img" class="object-cover h-[20vh] lg:h-[40vh] brightness-50">
        <div class="absolute flex flex-col items-center gap-5 text-white -translate-y-1/2 lg:flex-row ms-5 top-1/2">
            <div class="hidden p-2 bg-white rounded-full lg:inline-block">
                <img src="assets/images/logoBlack.png" alt="img" width="200">
            </div>
            <div class="flex flex-col gap-3">
                <h4 class="m-0">Lensyauqi Multimedia</h4>
                <div class="flex gap-2">
                    <div class="px-2 text-black bg-white opacity-50">Photographer</div>
                    <div class="px-2 text-black bg-white opacity-50">Creative Artist</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 font-roboto">
        <div class="flex flex-col items-center gap-2">
            <h1 class="py-2 text-3xl font-bold text-center border col-10 border-x-0">CONTACT US</h1>
            <p class="text-center">Have a question or want to collaborate? Fill out the form below
            </p>
            <div class="col-9 lg:col-6">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="mb-3 space-y-2">
                        <label for="nama" class="block text-sm font-medium text-black">Name</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-black text-sm rounded-lg focus:ring-[#383866] focus:border-[#383866] block w-full p-2.5"
                            id="nama" name="nama" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-3 space-y-2">
                        <label for="email" class="block text-sm font-medium text-black">Email</label>
                        <input type="email"
                            class="bg-gray-50 border border-gray-300 text-gray-black text-sm rounded-lg focus:ring-[#383866] focus:border-[#383866] block w-full p-2.5"
                            id="email" name="email" placeholder="Enter Your Email Address">
                    </div>
                    <div class="mb-3 space-y-2">
                        <label for="message" class="block text-sm font-medium text-black">Message</label>
                        <textarea
                            class="bg-gray-50 border border-gray-300 text-gray-black text-sm rounded-lg focus:ring-[#383866] focus:border-[#383866] block w-full p-2.5"
                            id="message" name="message" rows="4" placeholder="Type Your Message Here"></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="block text-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-md px-5 py-2.5">Send
                            Message</button>
                    </div>
                </form>
            </div>
            <div class="w-full my-20 border-b-2 border-black"></div>
        </div>

        <div class="justify-center gap-8 row font-roboto">
            <h1 class="text-3xl font-bold text-center">Maps</h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.04738219941493!2d110.36165613398589!3d-7.815409216780689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5796848142df%3A0x3f6b15b704f924e5!2sJl.%20Kumendaman%2C%20Suryodiningratan%2C%20Kec.%20Mantrijeron%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1714647134428!5m2!1sid!2sid"
                height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="col-11 lg:col-7"></iframe>
        </div>

        <p class="my-16 text-center">©2023 Lensyauqi Multimedia. All Rights Reserved.</p>
    </div>


    <x-footer />
</x-base-html>
