<div>
    {{-- <x-button type="button" wire:click="$set('open', true)">
        Crear nuevo post
    </x-button> --}}
    <button wire:click="$set('open', true)" class="ml-7 bg-green-600 text-white px-2 rounded-md cursor-pointer hover:cursor-pointer focus:border-green-300">Nuevo</button>


    <x-dialog-modal wire:model="open" >
        
        <x-slot name="title">
            Crear nuevo post
        </x-slot>


        <x-slot name="content">

            <x-label value="Titulo del post"></x-label>
            <x-input type="text" class="w-full" wire:model.defer="title"></x-input>
            @error('title')
                <span class="text-red-500">{{$message}}</span>
            @enderror

            <x-label value="Contenido del post" class="mt-6"></x-label>
            <textarea rows="6" wire:model.defer="content"
            class='w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'></textarea>
            @error('content')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('open')" wire:loading.attr="disabled" class="mr-2">
                Cancelar
            </x-secondary-button>
    
            <x-danger-button  wire:click="store" wire:loading.attr="disabled" class="disabled:opacity-25">
                Crear Post
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>
</div>
