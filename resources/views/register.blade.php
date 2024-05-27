<x-base-html>
    <div class="h-screen m-0 bg-aliceBlue row font-inter">
        <div class="relative hidden lg:block col-6">
            <img src="assets/icons/t_quarter_pill_2.png" alt="icon" class="absolute top-0 -translate-x-1/2 start-1/2"
                width="300">
            <img src="assets/images/logo_full.png" alt="image" class="absolute -translate-x-1/2 top-28 start-1/2">
            <img src="assets/icons/computer.png" alt="icon" class="absolute bottom-0 end-12" width="350">
        </div>
        <div class="flex flex-col justify-center col-12 lg:col-6">
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
            @endif
            <form action="{{ Route('register') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-2 px-12 lg:px-24">
                    <h3 class="text-2xl font-bold text-center">Create Account</h3>
                    <div class="mb-3 space-y-2">
                        <label for="first_name" class="block text-sm font-medium text-black">Nama Depan</label>
                        <input
                            class="bg-transparent shadow border border-violetBlue text-gray-black text-sm rounded-full focus:ring-violetBlue focus:border-violetBlue block w-full py-2.5 px-5"
                            id="first_name" name="first_name">
                    </div>
                    <div class="mb-3 space-y-2">
                        <label for="last_name" class="block text-sm font-medium text-black">Nama Belakang</label>
                        <input
                            class="bg-transparent shadow border border-violetBlue text-gray-black text-sm rounded-full focus:ring-violetBlue focus:border-violetBlue block w-full py-2.5 px-5"
                            id="last_name" name="last_name">
                    </div>
                    <div class="mb-3 space-y-2">
                        <label for="email" class="block text-sm font-medium text-black">Email</label>
                        <input
                            class="bg-transparent shadow border border-violetBlue text-gray-black text-sm rounded-full focus:ring-violetBlue focus:border-violetBlue block w-full py-2.5 px-5"
                            id="email" name="email">
                    </div>
                    <div class="mb-3 space-y-2">
                        <label for="password" class="block text-sm font-medium text-black">Password</label>
                        <input
                            class="bg-transparent shadow border border-violetBlue text-gray-black text-sm rounded-full focus:ring-violetBlue focus:border-violetBlue block w-full py-2.5 px-5"
                            id="password" name="password" type="password">
                    </div>
                    <div class="mb-3 space-y-2">
                        <label for="password_confirmation" class="block text-sm font-medium text-black">Confirm
                            Password</label>
                        <input
                            class="bg-transparent shadow border border-violetBlue text-gray-black text-sm rounded-full focus:ring-violetBlue focus:border-violetBlue block w-full py-2.5 px-5"
                            id="password_confirmation" name="password_confirmation" type="password">
                    </div>
                    <button type="submit"
                        class="block text-center text-white bg-violetBlue hover:bg-violetBlue/90 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full px-5 py-2.5">Register</button>
                    <p class="mt-4 font-semibold text-center">Sudah Punya Akun? <a href="login"
                            class="text-vividCerulean">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-base-html>
