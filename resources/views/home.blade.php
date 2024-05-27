<x-base-html>
    <x-navbar />
    <x-jumbotron src="jumbotron2.jpg" />

    <div class="flex flex-col gap-24 mx-0 my-16">
        <div class="container">
            <div class="row">
                <div class="flex flex-col justify-around text-justify lg:text-center lg:col-6">

                    <h3 class="py-2 text-3xl text-center border border-x-0 font-roboto">About Me</h3>

                    <img src="assets/images/owner.png" alt="img" class="block object-cover mx-auto lg:hidden">
                    <div class="text-lg font-nunito">
                        <p class="text-center">“Tentang kami”</p>
                        <p>
                            Berdiri sejak 2020, Lensyauqi adalah usaha yang bergerak sebagai penyedia jasa Multimedia
                            interaktif.
                            Menggunakan nama Lensyauqi yang berasal dari kata "Lens" yang berarti lensa dan "Syauqi"
                            yang
                            berarti
                            kerinduan, kami berharap dan siap membantu anda menangkap dan mengabadikan momen-momen
                            penting
                            dan
                            bahagia dalam hidup anda.</p>
                        <p>Lensyauqi siap melayani dan memberikan hasil foto dan video sesuai kebutuhan dan harapan
                            anda.
                        </p>
                        <p>DATA USAHA Nama : PT Lensyauqi Multimedia Kreatif <br>
                            Nomor : AHU-026516.AH.01.30.Tahun 2023 <br>
                            Bidang Usaha : Jasa multiamesia <br>
                            Jenis Produk/ Jasa : Dokumentasi Acara, Streaming, Live record dan drone <br>
                            Alamat Vendor : <br>
                            a. Jln. Pugeran Timur, Suryodiningratan, Kec. Mantrijeron, Kota Yogyakarta, DIY <br>
                            b. Gegulu, Gulurejo, Lendah, Kulon Progo, DIY</p>
                        <p>Nomor Telepon : 0857 0230 8954 <br>
                            Email : lensyauqi@gmail.com
                        </p>
                    </div>
                </div>
                <img src="assets/images/owner.png" alt="img" class="hidden lg:block col-6">
            </div>
            <h2 class="my-5 text-2xl font-bold text-center font-poppins">FOLLOW ME @Lensyauqi</h2>
        </div>

        <div class="container font-roboto">
            <h3 class="py-2 text-3xl text-center border border-x-0">Galeri</h3>
            <div class="gap-2 my-5 lg:gap-x-0 row">
                <img src="assets/images/galeri/0.png" alt="img" class="object-cover col lg:col-7 max-h-[300px]">
                <img src="assets/images/galeri/1.png" alt="img" class="object-cover col lg:col-3 max-h-[300px]">
                <img src="assets/images/galeri/2.png" alt="img" class="object-cover col lg:col-2 max-h-[300px]">
                <img src="assets/images/galeri/3.png" alt="img" class="object-cover col lg:col-3 max-h-[300px]">
                <img src="assets/images/galeri/4.png" alt="img" class="object-cover col lg:col-3 max-h-[300px]">
                <img src="assets/images/galeri/5.png" alt="img" class="object-cover col lg:col-3 max-h-[300px]">
                <img src="assets/images/galeri/6.png" alt="img" class="object-cover col lg:col-3 max-h-[300px]">
            </div>

            <div class="flex justify-center mb-5">
                <a href="blog#gallery"
                    class="block text-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-md text-2xl px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 w-[150px]">
                    More</a>
            </div>
        </div>

        <div class="container font-roboto">
            <h3 class="py-2 text-3xl text-center border border-x-0">Testimony</h3>
            @if (!count($reviews) == 0)
                <div class="flex flex-col gap-3 my-5 lg:flex-row justify-evenly">
                    @for ($i = 0; $i < (count($reviews) > 3 ? 3 : count($reviews)); $i++)
                        <x-item-review :review="$reviews[$i]" />
                    @endfor
                </div>
            @else
                <p class="my-3 text-center">Belum Ada Testimoni</p>
            @endif
            <a href="review"
                class="block text-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-md text-2xl px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 w-[150px] ms-auto">
                More</a>
        </div>

        <div class="container font-poppins">
            <h3 class="hidden text-3xl font-semibold lg:block">Tentang</h3>
            <h3 class="block py-2 mx-auto text-3xl text-center border col-8 border-x-0 lg:hidden">Tentang</h3>
            <div class="mt-4 row">
                <img src="assets/images/studioFoto.jpg" alt="img"
                    class="hidden rounded-t-[10%] lg:inline-block col-4">
                <div class="flex flex-col p-4 col">
                    <h4 class="my-4 text-2xl font-medium text-center lg:text-start my-lg-0">Studio Foto</h4>
                    <img src="assets/images/studioFoto.jpg" alt="img"
                        class="block mx-auto lg:hidden col-6 rounded-t-[10%]">
                    <p class="text-justify">Studio Foto adalah usaha yang bergerak dibidang media/studio foto yang
                        menyajikan
                        berbagai kebutuhan
                        untuk mengabadikan momen bersama keluarga, teman, dalam acara penting, atau kebutuhan konsumen.
                        dengan berbagai jenis foto yang menyesuaikan perubahan jaman digital, darri kegiatan outdor,
                        semi
                        outdor, indoor foto katalog, grup, keluarga, prewedding, wedding dll. potret dua sudut telah
                        bergerak dari tahun 2018 sampai saat ini.</p>
                </div>
            </div>
        </div>

        <div class="container font-poppins">
            <h3 class="text-3xl font-semibold text-center lg:text-start">Team</h3>
            <div class="gap-3 lg:justify-between row justify-evenly">
                <x-item-team title="Founder" src="team/owner.jpg" />
                <x-item-team title="Photographer" src="team/photographer.jpg" />
                <x-item-team title="Videographer" src="team/videographer.jpg" />
                <x-item-team title="CTO" src="team/cto.jpg" />
                <x-item-team title="Creative" src="team/creative.jpg" />
            </div>
        </div>

        <div class="container font-roboto">
            <div class="py-2 mx-auto my-5 mb-12 text-3xl font-bold text-center border col-8 border-x-0">CONTOH HASIL
                VIDEO
            </div>
            <div class="justify-between gap-3 row">
                <iframe height="315" src="https://www.youtube.com/embed/w-0os_zyoW0?si=Xd81Jt5y0xgA8OSv"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="lg:col-5"></iframe>
                <iframe height="315" src="https://www.youtube.com/embed/e-UqEaVCge0?si=YnrHDBJF5bnh9abk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="lg:col-5"></iframe>
            </div>
        </div>

        <p class="my-12 text-lg text-center font-roboto">© 2023 Lensyauqi Multimedia. All Rights Reserved.</p>
    </div>
    <x-footer />
</x-base-html>
