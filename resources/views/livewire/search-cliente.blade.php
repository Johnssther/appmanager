 <div x-data="data()" class="relative">
                        
    <div class="">
        <input type="text" x-on:click="isOpen()" wire:model="search" id="first-name" autocomplete="off" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <nav
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="bg-white shadow-lg border rounded-lg w-full mt-3 p-2 absolute z-40 overflow-y-scroll">
        <ul>
            <li class="flex justify-between items-center p-2 m-1 border-b border-gray-200">
                <span class="text-sm text-gray-500">Total: {{ count($clientes)}} datos de {{$totalClientes}}</span>
                <div class="flex gap-2">
                    <span x-on:click="close()" class="flex justify-center items-center text-gray-500 rounded-full p-1 text-sm hover:text-blue-500 cursor-pointer">Close</span>
                    <span x-on:click="reset()" class="flex justify-center items-center text-gray-500 rounded-full p-1 text-sm hover:text-blue-500 cursor-pointer">Reset</span>
                </div>
            </li>
            @foreach ($clientes as $item)
                {{-- <li x-on:click="close({{$item->id}})" class="bg-yellow-400 m-1 p-2 rounded-md text-yellow-950 cursor-pointer hover:bg-yellow-500">{{ $item->numero }} - {{ $item->nombre }} {{ $item->apellido }}</li> --}}
                <li x-on:click="selectClienterrr({{$item->id}}, '{{$item->nombre}}')" class="bg-white m-1 p-2 rounded-md cursor-pointer hover:bg-blue-500 hover:text-white">{{ $item->numero }} - {{ $item->nombre }} {{ $item->apellido }}</li>
            @endforeach
            @if (!count($clientes))
                <div class="w-full h-full flex justify-center items-center">Sin resultados</div>
            @endif
        </ul>
    </nav>
</div>

<script>
    function data() {
        return {
            open: false,
            isOpen() {
                this.open = true // !this.open
            },
            close(id) {
                this.open = false
            },
            selectClienterrr(id, nombre) {
                this.$wire.selectCliente(id, nombre);
                this.open = false;
            },
            reset(id) {
                this.$wire.set('itemSelected', null);
                this.$wire.set('search', '');
            },
        }
    }
</script>
