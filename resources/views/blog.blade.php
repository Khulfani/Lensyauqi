<x-base-html>
    <x-navbar />

    <div class="container flex flex-col gap-4 my-5">
        <h1 class="py-2 text-3xl font-bold text-center border text-body-secondary border-x-0 font-roboto">Blog</h1>
        <x-item-blog title="Mengabadikan Keindahan Dunia
        melalui Lensa Fotografi"
            src="images/team/photographer.jpg"
            description="Fotografi adalah seni yang memungkinkan kita mengabadikan momen yang berharga dan keindahan dunia dalam sebuah bingkai. Melalui lensa kamera, seorang fotografer memiliki kekuatan untuk menangkap ekspresi, gerakan, dan pemandangan yang memukau dengan cara yang unik dan bermakna. Setiap genre fotografi membuka jendela ke dunia yang berbeda, mulai dari potret yang intim, lanskap alam liar yang menakjubkan, hingga dunia mikroskopis yang menakjubkan melalui fotografi makro. Namun, fotografi tidak hanya terbatas pada keindahan visual semata, tetapi juga dapat digunakan sebagai alat untuk mengekspresikan emosi, menyuarakan pesan sosial, atau bahkan mendokumentasikan sejarah. Menjadi seorang fotografer yang handal membutuhkan keterampilan, kreativitas, dan ketekunan dalam menguasai teknik-teknik seperti komposisi, pencahayaan, dan eksposur. Namun, yang terpenting adalah kemampuan untuk melihat keindahan di sekitar kita dan mengabadikannya dengan cara yang bermakna. Fotografi adalah seni yang tak terbatas, dengan potensi untuk mengeksplorasi dan mengabadikan keindahan dunia. Setiap foto adalah sebuah momen yang dibekukan dalam waktu, sebuah kenangan yang dapat dibagikan dan dinikmati selama bertahun-tahun. Dengan mengangkat kamera, kita dapat menjelajahi dunia melalui lensa dan menciptakan karya seni abadi." />
        <x-item-blog title="Menangkap Momen Abadi dengan Fotografi" src="images/gallery/10.png"
            description="Fotografi adalah seni yang memungkinkan kita untuk menghentikan waktu dan mengabadikan momen yang berharga. Melalui lensa kamera, dunia terbuka dalam cara yang tak terduga, mengizinkan kita untuk menangkap keindahan alam, ekspresi wajah yang penuh emosi, dan gerakan yang luwes dalam sebuah bingkai. Setiap bidikan adalah kesempatan untuk membagikan sudut pandang unik dan menceritakan kisah yang tak terlupakan. Fotografi potret memungkinkan kita untuk menangkap kepribadian dan karakter seseorang dengan cara yang intim, sementara fotografi lanskap membawa kita ke alam liar yang menakjubkan, dengan pemandangan yang memukau. Fotografi makro bahkan membuka pintu ke dunia mikroskopis yang menakjubkan, memamerkan detail halus yang tersembunyi dari pandangan mata telanjang. Namun, fotografi tidak hanya terbatas pada mengabadikan keindahan visual semata. Ia juga dapat menjadi alat untuk mengekspresikan emosi, menyuarakan pesan sosial, atau bahkan mendokumentasikan sejarah. Sebuah foto yang kuat dapat memicu perubahan, membangkitkan kesadaran, dan menginspirasi tindakan. Untuk menjadi seorang fotografer yang handal, diperlukan keterampilan teknis seperti pemahaman tentang pencahayaan, komposisi, dan eksposur. Namun, yang terpenting adalah kemampuan untuk melihat keindahan di sekitar kita dan mengabadikannya dengan cara yang bermakna." />
    </div>

    <div class="container my-20">
        <h1 class="py-1 mt-5 text-3xl font-bold text-center border text-body-secondary border-x-0 font-roboto"
            id="gallery">Galeri
        </h1>
        <div class="grid grid-cols-2 gap-4 mt-4 lg:grid-cols-6">
            @for ($i = 1; $i <= 38; $i++)
                <img src="assets/images/gallery/{{ $i }}.png" alt="img" class="object-cover h-full">
            @endfor
        </div>
    </div>

    <x-footer />
</x-base-html>
