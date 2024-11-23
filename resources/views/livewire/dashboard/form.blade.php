<section class="flex justify-center">
    @if ($isVisible)
    <div class="w-full h-fit">
        <div class="flex justify-between my-2 bg-white">
            <p class="w-full text-center textl-2xl py-2">Agregar nuevo proyecto</p>
            <button wire:click="toggle" class="bg-red-200 px-4 py-2 rounded text-red-600">X</button>
        </div>
            <x-form-section submit="createItem">
                <x-slot name="form">
                    <div class="col-span-2">
                        <x-label for="name" value="{{ __('Nombre del proyecto') }}" />
                        <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                </x-slot>
                <x-slot name="actions">
                    <x-action-message class="mr-3" on="saved">
                        {{ __('Guardado.') }}
                    </x-action-message>
                    
                    <x-button>
                        {{ __('Guardar') }}
                    </x-button>
                </x-slot>
                
            </x-form-section>
    </div>
    @else
       <button wire:click="toggle" class="bg-sky-500 hover:bg-sky-600 duration-300 text-white rounded px-4 py-2">Agregar Proyecto</button> 
    @endif
</section>