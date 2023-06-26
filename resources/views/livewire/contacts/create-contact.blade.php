<div>
    <button wire:click="$set('open', true)"
        class="ml-7 bg-green-600 text-white px-2 rounded-md cursor-pointer hover:cursor-pointer focus:border-green-300">
        <i class="fas fa-plus"></i>
        Nuevo</button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            <i class="fas fa-{{ $isEdit ? 'edit' : 'plus' }}"></i>
            {{ $isEdit ? 'Editar Cliente' : 'Crear Nuevo Cliente' }}
        </x-slot>

        <x-slot name="content">
            <div class="w-full flex flex-col gap-2">
               <div class="flex gap-2">
                    <div class="w-full">
                        <x-label value="Nombres"></x-label>
                        <x-input type="text" class="w-full capitalize" wire:model.defer="contact.names"></x-input>
                        @error('names')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <x-label value="Apellidos"></x-label>
                        <x-input type="text" class="w-full capitalize" wire:model.defer="contact.surnames"></x-input>
                        @error('surnames')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
               </div>

               <div class="flex gap-2">
                    <div class="w-1/4 ">
                        <x-label value="Codigo"></x-label>
                        <x-input type="text" class="w-full" value="+57"></x-input>
                        @error('phone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <x-label value="Telefono"></x-label>
                        <x-input type="text" class="w-full" wire:model.defer="contact.phone"></x-input>
                        @error('phone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
               </div>

                <div>
                    <x-label value="Correo electronico"></x-label>
                    <x-input type="text" class="w-full" wire:model.defer="contact.email"></x-input>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-2">
                    <div class="w-full">
                        <x-label value="Fecha de nacimiento"></x-label>
                        <x-input type="date" class="w-full"></x-input>
                        @error('email')<span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="w-full">
                        <x-label value="Estado"></x-label>
                        <select class="w-full rounded-md" wire:model.defer="contact.status">
                            <option value="1">UNO</option>
                            <option value="2">DOS</option>
                            <option value="3">TRES</option>
                        </select>
                        @error('status')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-label value="Descripción"></x-label>
                    <x-textarea type="text" class="w-full" wire:model.defer="contact.description"></x-textarea>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled" class="mr-2">
                Cancelar
            </x-secondary-button>

            <x-danger-button wire:click="store" wire:loading.attr="disabled" class="disabled:opacity-25">
                {{ $isEdit ? 'Editar Contacto' : 'Crear Contacto' }}
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>
</div>
