<div>
    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            <i class="fas fa-{{ $isEdit ? 'edit' : 'plus' }}"></i>
            {{ $isEdit ? 'Edit Category' : 'Create New Category' }}
        </x-slot>

        <x-slot name="content">
            <div class="w-full flex flex-col gap-2">
               <div class="flex gap-2">
                    <div class="w-full">
                        <x-label value="Nombre"></x-label>
                        <x-input type="text" class="w-full capitalize" wire:model.defer="category.name"></x-input>
                        @error('category.name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
               </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled" class="mr-2">
                Cancelar
            </x-secondary-button>

            <x-button wire:click="submit" wire:loading.attr="disabled" class="disabled:opacity-25">
                {{ $isEdit ? 'Edit Category' : 'Create Category' }}
            </x-button>
        </x-slot>

    </x-dialog-modal>
</div>
