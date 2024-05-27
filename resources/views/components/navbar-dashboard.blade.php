<nav class="border-gray-200 bg-violetBlue">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <div class="text-center">
            <button
                class="text-white bg-white ring-black focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none "
                type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                aria-controls="drawer-navigation">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6 text-black"
                    fill="currentColor">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
            </button>
        </div>
        <div id="drawer-navigation"
            class="fixed top-0 left-0 z-40 flex flex-col w-64 h-screen gap-12 p-4 overflow-y-auto transition-transform -translate-x-full bg-violetBlue"
            tabindex="-1" aria-labelledby="drawer-navigation-label">
            <a href="/dashboard">
                <img src="assets/images/logo_full.png" alt="image">
            </a>
            <hr class="w-full h-2 border-white">

            <button id="dropdownRadioBgHoverButton" data-dropdown-toggle="dropdownRadioBgHover"
                class="bg-white hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center justify-center inline-flex items-center text-black w-3/4 mx-auto"
                type="button">Blog<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownRadioBgHover"
                class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownRadioBgHoverButton">
                    <li>
                        <a href="{{ Route('articles.article') }}"
                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            Artikel
                        </a>
                    </li>
                    <li>
                        <a href="input"
                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            Input
                        </a>
                    </li>

                </ul>
            </div>

        </div>
        <div class="flex items-center space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-10">
                    <path
                        d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                </svg>
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span
                        class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span>
                    <span
                        class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                </div>
                <form action="{{ Route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="block w-full px-4 py-2 text-sm text-gray-700 text-start hover:bg-gray-100 hover:rounded-b-lg dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</button>
                </form>
            </div>
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
    </div>
</nav>
