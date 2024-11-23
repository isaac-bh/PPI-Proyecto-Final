<section class="flex justify-center">
    <div class="w-full">
        <div class="flex justify-between my-2 bg-white">
            <p class="w-full text-center textl-2xl py-2">Editar proyecto</p>
        </div>
            <x-form-section submit="editItem">
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
</section>