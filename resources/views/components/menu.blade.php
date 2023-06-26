<div x-data="data()" class="m-7 bg-white shadow rounded-2xl p-5 w-1/4 relative">

    <!-- <button x-on:click="isOpen()" class="px-5 py-1 bg-green-500 text-white rounded-md hover:bg-green-600 w-full">Menu</button> -->

    <div class="mt-1">
        <input type="text" x-on:click="isOpen()" placeholder="Barcos" id="first-name" autocomplete="off" class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <nav
        x-show="open"
        
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="bg-yellow-300 rounded-lg w-full mt-3 p-2 absolute">
        <ul>
            <li x-on:click="close()" class="flex justify-end cursor-pointer"><span class="w-7 h-7 flex justify-center items-center rounded-full p-1 bg-red-300">x</span></li>
            <li x-on:click="close()" class="bg-yellow-400 m-1 p-2 rounded-md text-yellow-950 cursor-pointer hover:bg-yellow-500">Item 1</li>
            <li x-on:click="close()" class="bg-yellow-400 m-1 p-2 rounded-md text-yellow-950 cursor-pointer hover:bg-yellow-500">Item 2</li>
            <li x-on:click="close()" class="bg-yellow-400 m-1 p-2 rounded-md text-yellow-950 cursor-pointer hover:bg-yellow-500">Item 3</li>
            <li x-on:click="close()" class="bg-yellow-400 m-1 p-2 rounded-md text-yellow-950 cursor-pointer hover:bg-yellow-500">Item 4</li>
        </ul>
    </nav>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero explicabo libero eius reiciendis, id dolore inventore suscipit sapiente fugiat nulla atque quod praesentium neque minima facere quam laudantium in quo!</p>
</div>

<script>
    function data() {
        return {
            open: false,
            isOpen() {
                this.open = true // !this.open
            },
            close() {
                this.open = false
            }
        }
    }
</script>