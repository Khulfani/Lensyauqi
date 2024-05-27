<x-base-html>
    <x-navbar-dashboard />

    <div class="container font-inter">
        <h1 class="my-5 text-3xl font-extrabold">Blog</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
                <thead class="text-xs text-white uppercase bg-violetBlue">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Isi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($articles); $i++)
                        <tr
                            class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $i + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $articles[$i]->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $articles[$i]->content }}
                            </td>
                            <td class="px-6 py-4">
                                <img src="storage/{{ $articles[$i]->image }}" alt="image">
                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
    </div>

</x-base-html>
