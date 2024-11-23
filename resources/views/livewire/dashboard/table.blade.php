<div class="py-12 max-w-7xl mx-auto adaptable-container content-start">
    @foreach ($boards as $board)
    <div>
        <a href="{{ route('board', ['id' => $board->id]) }}" class="p-4 bg-gray-200 border-x border-t border-gray-400 hover:bg-gray-300 duration-300 cursor-pointer grid grid-cols-3 gap-2">
            <p class="col-span-3 text-left text-xl font-bold py-2">{{$board->name}}</p>
            <div class="col-span-1 text-center border bg-black/10 border-gray-400 p-2 rounded">
                <p>Por hacer:</p>
                <p>{{$board->tasks_todo}}</p>
            </div>
            <div class="col-span-1 text-center border bg-black/10 border-gray-400 p-2 rounded">
                <p>En progreso:</p>
                <p>{{$board->tasks_in_progress}}</p>
            </div>
            <div class="col-span-1 text-center border bg-black/10 border-gray-400 p-2 rounded">
                <p>Finalizadas:</p>
                <p>{{$board->tasks_done}}</p>
            </div>
        </a>
        <button wire:click="deleteItem({{ $board->id }})" class="border border-gray-400 bg-red-100 w-full h-fit text-center text-red-600 px-4 py-2 flex justify-center gap-4 place-items-center">
            Eliminar <svg data-testid="geist-icon" class="w-4" stroke-linejoin="round" viewBox="0 0 16 16" style="color: currentcolor;"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 2.75C6.75 2.05964 7.30964 1.5 8 1.5C8.69036 1.5 9.25 2.05964 9.25 2.75V3H6.75V2.75ZM5.25 3V2.75C5.25 1.23122 6.48122 0 8 0C9.51878 0 10.75 1.23122 10.75 2.75V3H12.9201H14.25H15V4.5H14.25H13.8846L13.1776 13.6917C13.0774 14.9942 11.9913 16 10.6849 16H5.31508C4.00874 16 2.92263 14.9942 2.82244 13.6917L2.11538 4.5H1.75H1V3H1.75H3.07988H5.25ZM4.31802 13.5767L3.61982 4.5H12.3802L11.682 13.5767C11.6419 14.0977 11.2075 14.5 10.6849 14.5H5.31508C4.79254 14.5 4.3581 14.0977 4.31802 13.5767Z" fill="currentColor"></path></svg>
        </button>
    </div>
    @endforeach
</div>