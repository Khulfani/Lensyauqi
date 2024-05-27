<x-base-html>
    <x-navbar />

    <x-jumbotron src="team/photographer.jpg" />

    <div class="container my-5 font-nunito">
        <div class="justify-center gap-3 row">
            <h1 class="py-2 text-3xl text-center border col-10 border-x-0">BERBAGAI LAYANAN JASA</h1>
            <p class="text-center">Di bawah ini beberapa pilihan layanan jasa yang dapat anda pilih
                untuk berbagai macam
                acara dan event</p>
            <div class="justify-between gap-8 row">
                <x-item-layanan title="Company Profile"
                    description="Dengan jasa pembuatan video profil kami, kami menggabungkan keahlian teknis yang tinggi dengan kreativitas yang tak terbatas untuk menciptakan video yang menginspirasi, memikat, dan membangkitkan minat."
                    src="companyProfile.png" />
                <x-item-layanan title="Event"
                    description="Dengan jasa dokumentasi event kami, kami tidak hanya sekadar merekam momen-momen tersebut, tetapi juga menciptakan narasi visual yang menggugah hati dan pikiran. Kami menghadirkan kreativitas, keahlian teknis, dan pengalaman yang luas untuk mengabadikan setiap detil, mulai dari sorotan utama hingga momen-momen tersembunyi yang memikat."
                    src="event.png" />
                <x-item-layanan title="Pra Wedding"
                    description="Dengan jasa dokumentasi wedding kami, kami bukan hanya sekadar menyediakan layanan fotografi dan videografi, tetapi juga menciptakan narasi visual yang menggugah perasaan dan mengabadikan setiap detil dari hari bahagia Anda."
                    src="praWedding.jpg" />
                <x-item-layanan title="Drone"
                    description="Dengan jasa dokumentasi drone kami, kami membawa Anda pada perjalanan visual yang luar biasa, mengabadikan momen-momen berharga dari ketinggian yang sebelumnya tidak terjangkau."
                    src="drone.png" />
                <x-item-layanan title="Wisuda"
                    description="Dengan jasa dokumentasi wisuda kami, kami tidak hanya sekadar merekam momen penting seperti penyerahan ijazah dan pengucapan sumpah, tetapi juga menciptakan rekaman yang mencerminkan kebanggaan, kebahagiaan, dan prestasi yang dirasakan oleh Anda dan keluarga Anda."
                    src="wisuda.jpg" />
                <x-item-layanan title="Kelola Media Sosial"
                    description="Dengan jasa kelola media sosial kami, kami tidak hanya sekadar menyediakan postingan reguler dan interaksi dengan audiens, tetapi juga mengembangkan strategi yang sesuai dengan tujuan dan target pasar Anda. Kami memahami bahwa media sosial bukan sekadar alat untuk berkomunikasi, tetapi juga platform yang kuat untuk membangun hubungan, merekam tren, dan mempengaruhi persepsi."
                    src="mediaSosial.png" />
                <x-item-layanan title="Live Streaming"
                    description="Dengan layanan live streaming kami, Anda dapat menghadirkan acara, pertunjukan, atau pesan langsung ke hadapan audiens Anda, tanpa batasan ruang dan waktu."
                    src="liveStreaming.png" />
                <x-item-layanan title="Live Recording"
                    description="Dengan jasa live record kami, kami tidak hanya menangkap momen-momen penting, tetapi juga menciptakan rekaman berkualitas tinggi yang setia mencerminkan atmosfer dan keindahan acara Anda. Dari suara yang jernih hingga visual yang tajam, kami memastikan bahwa setiap elemen direkam dengan presisi yang luar biasa."
                    src="liveRecord.png" />
            </div>
        </div>

    </div>

    <div class="container my-20">
        <div class="space-y-8">
            <h1 class="py-2 text-3xl text-center border border-x-0 font-poppins">HARGA LAYANAN JASA
            </h1>
            <p class="text-center font-nunito">Harga Layanan Jasa sangat beragam. Kisaran harga untuk jasa
                siaran langsung mulai antara satu juta hingga belasan juta. Ada berbagai macam
                harga sesuai acara apa yang ingin Anda selenggarakan semisal pernikahan anda bisa menggunakan Jasa Live
                Streaming Wedding Murah dengan
                kisaran harga 2 Jutaan sampai belasan juta.</p>
        </div>
        <div class="gap-6 px-4 mt-8 row justify-evenly">
            <x-item-harga-layanan title="Company Profile" price="Rp. 2.500.000">
                <x-offered-item offeredItem="2 Kamera Sony" />
                <x-offered-item offeredItem="Stabilizer Kamera" />
                <x-offered-item offeredItem="1 Tripod" />
                <x-offered-item offeredItem="1 Monopod" />
                <x-offered-item offeredItem="Video Teaser 30-60 Detik" />
            </x-item-harga-layanan>
            <x-item-harga-layanan title="Event" price="Rp. 1.500.000">
                <x-offered-item offeredItem="1 Kamera Video Sony" />
                <x-offered-item offeredItem="1 Kamera Foto Sony" />
                <x-offered-item offeredItem="Stabilizer Kamera" />
                <x-offered-item offeredItem="Dokumentasi Foto" />
                <x-offered-item offeredItem="Dokumentasi Video" />
            </x-item-harga-layanan>
            <x-item-harga-layanan title="Pra Wedding" price="Rp. 699.000">
                <x-offered-item offeredItem="1 Kamera Sony" />
                <x-offered-item offeredItem="1 Lokasi" />
                <x-offered-item offeredItem="Unlimited Shoot" />
                <x-offered-item offeredItem="6 Sesi Foto" />
                <x-offered-item offeredItem="50-100 Foto Edit" />
            </x-item-harga-layanan>
            <x-item-harga-layanan title="Wisuda" price="Rp. 60.000/Siswa">
                <x-offered-item offeredItem="1 Kamera Sony XDCAM" />
                <x-offered-item offeredItem="Foto Personal Cetak 10R (1 Foto)" />
                <x-offered-item offeredItem="Video Recap Reels" />
                <x-offered-item offeredItem="1 Album Foto Premium untuk Sekolah" />
                <x-offered-item offeredItem="1 Foto Bersama (12R) untuk Sekolah" />
            </x-item-harga-layanan>
            <x-item-harga-layanan title="Drone" price="Rp. 500.000">
                <x-offered-item offeredItem="1 DJI Mini 4 Pro" />
                <x-offered-item offeredItem="30 Menit Aerial Video" />
                <x-offered-item offeredItem="1 Pilot Drone" />
            </x-item-harga-layanan>
            <x-item-harga-layanan title="Kelola Media Sosial" price="Rp. 1.500.000">
                <x-offered-item offeredItem="Konten Grafik Desain 1 Bulan" />
                <x-offered-item offeredItem="Video Pendek/Reels" />
                <x-offered-item offeredItem="Analisis Konten" />
                <x-offered-item offeredItem="Konsep Konten" />
            </x-item-harga-layanan>
            <x-item-harga-layanan title="Live Streaming" price="Rp. 2.000.000">
                <x-offered-item offeredItem="2 Kamera HD Sony MC2500 & Tripod" />
                <x-offered-item offeredItem="2 Bafo HDMI Cable" />
                <x-offered-item offeredItem="2 1080p 120fps Video Capture" />
                <x-offered-item offeredItem="1 Yamaha MG1XU" />
                <x-offered-item offeredItem="1 PC Multimedia Streaming High Speed" />
            </x-item-harga-layanan>
            <x-item-harga-layanan title="Live Recording" price="Rp. 1.000.000">
                <x-offered-item offeredItem="1 Kamera Sony NX100 & Tripod" />
                <x-offered-item offeredItem="1 Zoom H1 Handy Recorder" />
                <x-offered-item offeredItem="1 Kabel 3.5mm to TRS" />
                <x-offered-item offeredItem="1 Sandisk Extreme Pro 256 GB" />
                <x-offered-item offeredItem="1 Sandisk Ultra 128 GB" />
            </x-item-harga-layanan>
        </div>
    </div>

    <p class="my-16 text-lg text-center font-roboto">©2023 Lensyauqi Multimedia. All Rights Reserved.</p>

    <x-footer />
</x-base-html>
