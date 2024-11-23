<x-form-section submit="createItem">
        <x-slot name="form">
            <div class="col-span-1">
                <x-label for="name" value="{{ __('Nombre de la tarea') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>
            <div class="col-span-1 row-span-2">
                <x-label for="description" value="{{ __('Descripción de la tarea') }}" />
                <x-input id="description" type="text" class="mt-1 w-full h-5/6" wire:model.defer="description" autocomplete="description" />
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
                {{ __('Saved.') }}
            </x-action-message>
            
            <x-button>
                {{ __('Save') }}
            </x-button>
        </x-slot>
</x-form-section>