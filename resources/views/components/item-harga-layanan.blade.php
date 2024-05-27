<div class="flex flex-col gap-3 px-0 py-4 text-center text-white bg-black col-12 lg:col-3 rounded-xl">
    <div class="flex flex-col">
        <h4 class="my-3 font-extrabold">{{ $title }}</h4>
        <p>Start From</p>
        <p>{{ $price }}</p>
    </div>
    <div class="border-b-2 border-white"></div>
    <div class="flex flex-col mx-3 leading-snug">
        {{ $slot }}
    </div>
</div>
