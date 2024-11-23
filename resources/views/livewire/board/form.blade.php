<section class="flex justify-center">
    @if ($isVisible)
    <div class="w-full">
        <div class="flex justify-between my-2 bg-white">
            <p class="w-full text-center textl-2xl py-2">Agregar nueva tarea</p>
            <button wire:click="toggle" class="bg-red-200 px-4 py-2 rounded text-red-600">X</button>
        </div>
            <x-form-section submit="createItem">
                <x-slot name="form">
                    <div class="col-span-1">
                        <x-label for="name" value="{{ __('Nombre de la tarea') }}" />
                        <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    <div class="col-span-1 row-span-2">
                        <x-label for="description" value="{{ __('Descripción de la tarea') }}" />
                        <x-input id="description" type="text" class="mt-1 w-full h-5/6" wire:model.defer="description"/>
                        <x-input-error for="description" class="mt-2" />
                    </div>
                    <div class="col-span-1">
                        <x-label for="status" value="{{ __('Estatus') }}" />
                        <select id="status" name="status" class="mt-1 block w-full border border-gray-300 rounded-md" wire:model="status">
                            <option value="todo" selected>Por hacer</option>
                            <option value="in-progress">En progreso</option>
                            <option value="done">Completado</option>
                        </select>
                        <x-input-error for="status" class="mt-2" />
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
       <button wire:click="toggle" class="bg-sky-500 hover:bg-sky-600 duration-300 text-white rounded px-4 py-2">Agregar Tarea</button> 
    @endif
</section>