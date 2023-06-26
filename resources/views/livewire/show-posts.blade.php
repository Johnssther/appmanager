<div class="w-full flex justify-center">
    <div class="w-3/4">
        <div class="w-full flex justify-center mt-2">
            <div class="w-full flex flex-col-reverse justify-center bg-white p-3 mt-2 rounded-md">
                <div class="w-full flex justify-between">
                    <div class="w-full text-gray-200 flex gap-2">
                        <button wire:click="order('id')" class="{{$sord=='id'?'bg-green-600':'bg-slate-600'}} px-3 rounded-md cursor-pointer hover:bg-green-600">id</button>
                        <button wire:click="order('title')" class="{{$sord=='title'?'bg-green-600':'bg-slate-600'}} bg-slate-600 px-3 rounded-md cursor-pointer hover:bg-green-600">title</button>
                        <button wire:click="order('content')" class="{{$sord=='content'?'bg-green-600':'bg-slate-600'}} bg-slate-600 px-3 rounded-md cursor-pointer hover:bg-green-600">content</button>
                        
                        <button wire:click="direction('asc')" class="ml-7 {{$direction=='asc'?'bg-green-600':'bg-slate-600'}} px-3 rounded-md cursor-pointer hover:bg-green-600 focus:bg-green-600">
                            asc
                        </button>
                        <button wire:click="direction('desc')" class="{{$direction=='desc'?'bg-green-600':'bg-slate-600'}} px-3 rounded-md cursor-pointer hover:bg-green-600 focus:bg-green-600">
                            desc
                        </button>

                        @if ($direction == 'asc')
                            <i class="text-green-600 bi bi-arrow-up"></i>
                        @else
                            <i class="text-green-600 bi bi-arrow-down"></i>
                        @endif

                        <button wire:click="listgrid('1')" class="ml-7 {{$listgrid=='1'?'text-green-600':'text-slate-600'}} px-2 rounded-md cursor-pointer hover:text-green-600"><i class="text-md bi bi-card-text"></i></button>
                        <button wire:click="listgrid('3')" class="{{$listgrid=='3'?'text-green-600':'text-slate-600'}} px-2 rounded-md cursor-pointer hover:text-green-600"><i class="text-md bi bi-grid-3x3"></i></button>
                        
                        @livewire('create-post')
                    
                    </div>
                    <div class="w-28 flex justify-end">
                        <p class="text-xs text-green-700">{{count($data)}} resultados</p>
                    </div>
                </div>
                
                <div class="my-2 w-full">
                    <input type="text" wire:model="search" placeholder="Buscar" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </div>
        </div>
        <div class="w-full my-3">
            {{-- {{ $data->links() }} --}}
            
        </div>
        <div class="w-full h-full">
            <div wire:loading.remove class="w-full h-full grid grid-cols-{{$listgrid}} gap-5 mt-4">
                @foreach ($data as $key => $item)
                    <div class="bg-white p-2 rounded-md border hover:border-green-600 hover:bg-green-100 hover:cursor-pointer">
                        <div class="flex items-center mt-2 mb-3 border-green-300 border-b p-1">
                            <img class="w-12 h-12 rounded-full object-cover" src="{{ $uri }}" alt="{{ '' }}">
                            <div class="ml-4 leading-tight">
                                <div class="text-gray-900">John Alejandro Hernandez</div>
                                <div class="text-gray-400 text-sm">j.ahr@hotmail.com</div>
                            </div>
                        </div>
                        <p class="font-bold text-xl">{{$item->id}}. {{$item->title}}</p>
                        <span class="text-xs font-bold text-slate-500">{{$item->created_at}}</span>
                        <p class="mt-2 text-slate-600 text-base">{{$item->content}} </p>
                    </div>
                @endforeach
            </div>
            <div wire:loading.delay class="w-full h-full bg-white flex justify-center items-start pt-3 mt-4">
                <div role="status" class="top-2/4 left-1/2 flex justify-center items-center">
                     <svg aria-hidden="true" class="w-10 h-10 mr-2 text-gray-200 animate-spin dark:text-gray-200 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                     <span class="text-blue-500">Loading...</span>
                 </div>
             </div>
        </div>
        
    </div>
</div>

























