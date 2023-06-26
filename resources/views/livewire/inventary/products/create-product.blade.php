<div class="flex w-full gap-2 px-5">

    <div class="w-1/2 bg-white rounded-xl p-5 shadow-lg">
        <div class="w-full flex flex-col gap-2">
            <div class="flex gap-2">
                <div class="w-full">
                    <x-label value="Nombre"></x-label>
                    <x-input type="text" class="w-full capitalize" wire:model.defer="product.name"></x-input>
                    @error('product.name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/4">
                    <x-label value="Unidades"></x-label>
                    <x-input type="number" class="w-full capitalize" wire:model.defer="product.units"></x-input>
                    @error('product.units') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full">
                    <x-label value="Color"></x-label>
                    <x-input type="text" class="w-full capitalize" wire:model.defer="product.color"></x-input>
                    @error('product.color') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full">
                    <x-label value="Size"></x-label>
                    <div class="flex flex-col">
                        <select class="h-9 rounded-lg" wire:model='product.size'>
                            <option value="">Seleccionar...</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    @error('category.size') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex gap-2">
                <div class="w-full">
                    <x-label value="Category"></x-label>
                    <div class="flex flex-col">
                        <select class="h-9 rounded-lg" wire:model='product.category_id'>
                            <option value="">Seleccionar...</option>
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category.size') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            
            <div class="flex gap-2">
                <div class="w-full">
                    <x-label value="Price In"></x-label>
                    <x-input type="text" class="w-full capitalize" wire:model.defer="product.price_in"></x-input>
                    @error('product.price_in') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full">
                    <x-label value="Price Out"></x-label>
                    <x-input type="text" class="w-full capitalize" wire:model.defer="product.price_out"></x-input>
                    @error('product.price_out') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex gap-2">
                <div class="w-full">
                    <x-label value="SKU"></x-label>
                    <x-input type="text" class="w-full capitalize" wire:model.defer="product.sku"></x-input>
                    @error('product.sku') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex gap-2">
                <div class="w-full">
                    <x-label value="Description"></x-label>
                    <x-textarea type="text" class="w-full capitalize" wire:model.defer="product.description"></x-textarea>
                    @error('product.description') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex gap-2">
                <input id="checkbox-523323" aria-describedby="checkbox-1" type="checkbox" wire-model="product.isActive"
                    class="w-5 h-5 rounded border-gray-300 focus:ring-0 checked:bg-dark-900">
                <x-label value="Activo"></x-label>
            </div>

            <div class="flex gap-2">
                <x-button wire:click="submit">Guardar</x-button>
            </div>
        
        </div>
        
    </div>

    <div class="w-1/2 h-20 bg-white rounded-xl p-5 shadow-lg">
        <div class="w-full flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                {{-- content --}}
                dkelwjrk
            </div>
        </div>
    </div>

</div>