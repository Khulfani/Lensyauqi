<x-base-html>
    <x-navbar />

    <div class="relative flex flex-col font-roboto">
        <img src="assets/images/jumbotron.jpg" alt="img" class="h-[40vh] lg:h-[85vh] object-cover brightness-50">
        <div class="absolute flex flex-col -translate-x-1/2 -translate-y-1/2 start-1/2 top-1/2">
            <h1 class="text-5xl text-center text-white">PORTFOLIO</h1>
            <p class="text-center text-white">Explore our creative projects</p>
        </div>
    </div>

    <div class="container my-16 font-roboto">
        <div class="justify-between gap-16 row">
            <x-item-portfolio title="Live Record" src="https://www.youtube.com/embed/e-UqEaVCge0?si=YnrHDBJF5bnh9abk" />
            <x-item-portfolio title="Video Profile"
                src="https://www.youtube.com/embed/w-0os_zyoW0?si=Xd81Jt5y0xgA8OSv" />
            <x-item-portfolio title="Wisuda" src="https://www.youtube.com/embed/XklJoTAGFeg?si=Nytsx4IDqA1B3a7M" />
            <x-item-portfolio title="Event" src="https://www.youtube.com/embed/ZJLGMxksOuo?si=7CzYxgwrPX3XzYzv" />
            <x-item-portfolio title="Event" src="https://www.youtube.com/embed/p9Ea-c3utLk?si=U9Evh7K-G_EzhGhj" />
            <x-item-portfolio title="Wisuda" src="https://www.youtube.com/embed/l0dZIniGxoo?si=RWT-p2Nm4MjeXm_k" />
        </div>
    </div>
    <x-footer />
</x-base-html>
