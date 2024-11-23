<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $board }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
            @livewire('board.form', ['board_id' => $board_id])
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white h-fit shadow-xl sm:rounded-lg">
                @livewire('board.table', ['board_id' => $board_id])
            </div>
        </div>
    </div>
    
</x-app-layout>

