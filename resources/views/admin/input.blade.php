<x-base-html>
    <x-navbar-dashboard />

    <div class="container mb-20 font-inter">
        <h1 class="my-5 text-3xl font-extrabold">Input</h1>
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
        <form action="{{ Route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-12 shadow-md sm:rounded-lg">
                <div class="mb-3 space-y-2">
                    <label for="title" class="block text-sm font-medium text-black">Judul Artikel</label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-black text-sm rounded-lg focus:ring-violetBlue focus:border-violetBlue block w-full p-2.5"
                        id="title" name="title">
                </div>
                <div class="mb-3 space-y-2">
                    <label for="content" class="block text-sm font-medium text-black">Isi Artikel</label>
                    <textarea
                        class="bg-gray-50 border border-gray-300 text-gray-black text-sm rounded-lg focus:ring-violetBlue focus:border-violetBlue block w-full p-2.5"
                        id="content" name="content" rows="8"></textarea>
                </div>
                <div class="mb-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="image" name="image" type="file">
                </div>

                <button
                    class="block text-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-md px-10 py-2.5 ms-auto mb-2">
                    Input
                </button>

            </div>
        </form>
    </div>
</x-base-html>
