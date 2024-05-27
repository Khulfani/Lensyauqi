<!-- Navbar -->
<div class="row justify-content-evenly py-2 m-0 color-admin">
    <!-- Sidebar -->
    <div class="col-5">
        <!-- Button Toggler -->
        <button class="btn btn-dark text-dark color-admin" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
        </button>
        <!-- Akhir Button Toggler -->

        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-start color-admin" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="d-flex justify-content-center">
                <div class="offcanvas-header">
                    <img src="assets/images/logo_full.png" width="250" class="offcanvas-title"
                        id="offcanvasScrollingLabel">
                    <button type="button" class="btn-close position-absolute" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
            <div class="offcanvas-body p-0">
                <hr class="border-white border-2">
                <div class="d-flex flex-column justify-content-between button-sidebar">
                    <!-- Section Atas -->
                    <div class="d-flex flex-column gap-2 mx-4">
                        <!-- Button Produk -->
                        <x-button-dashboard source="book" title="Blog" isArticle="true" />
                        <!-- Akhir Button Produk -->

                        <!-- Custom Dropdown -->
                        <div class="custom-dropdown">
                            <a href="article"
                                class="link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover text-dark">
                                <div class="row d-flex mb-2 mx-2">
                                    <div class="col-5 text-end pe-1">
                                        <img src="assets/svgs/radio.svg" alt="svg">
                                    </div>
                                    <div class="col text-start ps-1">
                                        <p class="my-auto">Artikel</p>
                                    </div>
                                </div>
                            </a>

                            <a href="input"
                                class="link-underline-dark link-underline-opacity-0 link-underline-opacity-75-hover text-dark">
                                <div class="row d-flex mx-2">
                                    <div class="col-5 text-end pe-1">
                                        <img src="assets/svgs/radio.svg" alt="svg">
                                    </div>
                                    <div class="col text-start ps-1">
                                        <p class="my-auto">Input</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Akhir Custom Dropdown -->
                    </div>
                    <!-- Akhir Section Atas -->

                    <!-- Section Bawah -->
                    <div class="d-flex flex-column gap-2 mx-4">
                        <!-- Button Pengaturan -->
                        <a href="setting" class="link-underline link-underline-opacity-0">
                            <x-button-dashboard source="setting" title="Pengaturan" />
                        </a>
                        <!-- Akhir Button Pengaturan -->

                        <!-- Button Log Out -->
                        <a href="logout" class="link-underline link-underline-opacity-0">
                            <x-button-dashboard source="logout" title="Logout" />
                        </a>
                        <!-- Akhir Button Log Out -->
                    </div>
                    <!-- Akhir Section Bawah -->
                </div>
            </div>
        </div>
        <!-- Akhir Offcanvas -->
    </div>
    <!-- Akhir Sidebar -->

    <!-- Profile -->
    <div class="col-5">
        <div class="d-flex justify-content-end gap-2">
            <img src="assets/svgs/circle_avatar.svg" class="rounded-all" height="50">
            <div class="d-none d-lg-flex flex-column justify-content-center">
                <p class="fw-bold m-0">Florita Cinta</p>
                <p class="m-0">florita@gmail.com</p>
            </div>
        </div>
    </div>
    <!-- Akhir Profile -->

</div>
<!-- Akhir Navbar -->
