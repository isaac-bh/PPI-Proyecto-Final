<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{'Modificar ' . $board }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
            @livewire('board.edit', ['board_id' => $board_id])
        </div>
    </div>
    
</x-app-layout>

