<div>
    <h2 class="text-7xl md:text-3xl my-4 text-center">Mis tareas</h2>

    <section class="w-full grid grid-cols-3 gap-8 p-8">
        <div class="grid gap-2">
            <p class="text-center text-xl">Por hacer</p>
            @foreach ($todo as $item)
                <div class="flex flex-col border border-gray-300 rounded p-4">
                    <div class="w-full flex gap-2">
                        <p class="w-full font-bold text-truncate">{{ $item->name }}</p>
                        <button wire:click="deleteItem({{ $item->id }})" class="bg-red-100 text-red-600 px-4 py-2 rounded-full">
                            <svg data-testid="geist-icon" class="w-4" stroke-linejoin="round" viewBox="0 0 16 16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 2.75C6.75 2.05964 7.30964 1.5 8 1.5C8.69036 1.5 9.25 2.05964 9.25 2.75V3H6.75V2.75ZM5.25 3V2.75C5.25 1.23122 6.48122 0 8 0C9.51878 0 10.75 1.23122 10.75 2.75V3H12.9201H14.25H15V4.5H14.25H13.8846L13.1776 13.6917C13.0774 14.9942 11.9913 16 10.6849 16H5.31508C4.00874 16 2.92263 14.9942 2.82244 13.6917L2.11538 4.5H1.75H1V3H1.75H3.07988H5.25ZM4.31802 13.5767L3.61982 4.5H12.3802L11.682 13.5767C11.6419 14.0977 11.2075 14.5 10.6849 14.5H5.31508C4.79254 14.5 4.3581 14.0977 4.31802 13.5767Z" fill="currentColor"></path></svg>
                        </button>
                    </div>
                        <p class="text-gray-500">
                            @if ($item->description)
                                {{$item->description}}
                            @else
                                {{'Sin descripción...'}}
                            @endif
                        </p>
                </div>
            @endforeach
        </div>
        <div class="grid gap-2">
            <p class="text-center text-xl">En progreso</p>
            @foreach ($in_progress as $item)
                <div class="flex flex-col border border-gray-300 rounded p-4">
                    <div class="w-full flex gap-2">
                        <p class="w-full font-bold text-truncate">{{ $item->name }}</p>
                        <button wire:click="deleteItem({{ $item->id }})" class="bg-red-100 text-red-600 px-4 py-2 rounded-full">
                            <svg data-testid="geist-icon" class="w-4" stroke-linejoin="round" viewBox="0 0 16 16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 2.75C6.75 2.05964 7.30964 1.5 8 1.5C8.69036 1.5 9.25 2.05964 9.25 2.75V3H6.75V2.75ZM5.25 3V2.75C5.25 1.23122 6.48122 0 8 0C9.51878 0 10.75 1.23122 10.75 2.75V3H12.9201H14.25H15V4.5H14.25H13.8846L13.1776 13.6917C13.0774 14.9942 11.9913 16 10.6849 16H5.31508C4.00874 16 2.92263 14.9942 2.82244 13.6917L2.11538 4.5H1.75H1V3H1.75H3.07988H5.25ZM4.31802 13.5767L3.61982 4.5H12.3802L11.682 13.5767C11.6419 14.0977 11.2075 14.5 10.6849 14.5H5.31508C4.79254 14.5 4.3581 14.0977 4.31802 13.5767Z" fill="currentColor"></path></svg>
                        </button>
                    </div>
                        <p class="text-gray-500">
                            @if ($item->description)
                                {{$item->description}}
                            @else
                                {{'Sin descripción...'}}
                            @endif
                        </p>
                </div>
            @endforeach
        </div>
        <div class="grid gap-2">
            <p class="text-center text-xl">Completados</p>
            @foreach ($done as $item)
                <div class="flex flex-col border border-gray-300 rounded p-4">
                    <div class="w-full flex gap-2">
                        <p class="w-full font-bold text-truncate">{{ $item->name }}</p>
                        <button wire:click="deleteItem({{ $item->id }})" class="bg-red-100 text-red-600 px-4 py-2 rounded-full">
                            <svg data-testid="geist-icon" class="w-4" stroke-linejoin="round" viewBox="0 0 16 16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 2.75C6.75 2.05964 7.30964 1.5 8 1.5C8.69036 1.5 9.25 2.05964 9.25 2.75V3H6.75V2.75ZM5.25 3V2.75C5.25 1.23122 6.48122 0 8 0C9.51878 0 10.75 1.23122 10.75 2.75V3H12.9201H14.25H15V4.5H14.25H13.8846L13.1776 13.6917C13.0774 14.9942 11.9913 16 10.6849 16H5.31508C4.00874 16 2.92263 14.9942 2.82244 13.6917L2.11538 4.5H1.75H1V3H1.75H3.07988H5.25ZM4.31802 13.5767L3.61982 4.5H12.3802L11.682 13.5767C11.6419 14.0977 11.2075 14.5 10.6849 14.5H5.31508C4.79254 14.5 4.3581 14.0977 4.31802 13.5767Z" fill="currentColor"></path></svg>
                        </button>
                    </div>
                        <p class="text-gray-500">
                            @if ($item->description)
                                {{$item->description}}
                            @else
                                {{'Sin descripción...'}}
                            @endif
                        </p>
                </div>
            @endforeach
        </div>
    </section>

</div>