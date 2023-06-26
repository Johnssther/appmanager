<div class="w-full h-full text-slate-200 flex flex-col justify-center items-center p-2">
    <div class="w-full h-9 flex justify-end">
        @livewire('contacts.create-contact')
        @livewire('contacts.show-contact')
    </div>
    <div class="w-full grid md:grid-cols-3 sm:grid-cols-1 gap-2">
        @foreach ($contacts as $contact)
            <div class="bg-slate-800 w-min-52 h-min-20 rounded-lg" wire:key="{{$contact->id}}">
                <div class="full p-3 flex flex-col">
                    <div class="w-full flex flex-col justify-center items-center mb-4 bg-slate-700 rounded-md">
                        <p class="text-2xl">{{ $contact->names }}</p>
                        <p class="text-base">{{ $contact->surnames }}</p>
                    </div>
                    <div class="w-full flex gap-2">
                        <label class="font-bold text-yellow-500">{{ __('Code') }}:</label>
                        <p>{{ $contact->id }}</p>
                    </div>
                    <div class="w-full flex gap-2">
                        <label class="font-bold text-yellow-500">{{ __('Status') }}:</label>
                        @if ($contact->status == 1)
                            <span class="py-0.5 h-5 px-2 bg-emerald-400 text-emerald-950 text-xs rounded-md">Contacto reciente</span>
                        @endif
                        @if ($contact->status == 2)
                            <span class="py-0.5 h-5 px-2 bg-yellow-400 text-yellow-950 text-xs rounded-md">Contacto mas o menos</span>
                        @endif
                        @if ($contact->status == 3)
                            <span class="py-0.5 h-5 px-2 bg-red-400 text-red-950 text-xs rounded-md">Sin contacto</span>
                        @endif
                    </div>
                    <div class="w-full flex gap-2">
                        <label class="font-bold text-yellow-500">{{ __('Phone') }}:</label>
                        <p>{{ $contact->phone }}</p>
                    </div>
                    <div class="w-full flex gap-2">
                        <label class="font-bold text-yellow-500">{{ __('Email') }}:</label>
                        <p>{{ $contact->email }}</p>
                    </div>
                    <div class="w-full flex gap-2">
                        <label class="font-bold text-yellow-500">{{ __('Birthday') }}:</label>
                        <p>10 de Junio</p>
                        <p>(8 meses 23 dias)</p>
                    </div>
                    <div class="w-full flex gap-2">
                        <p><label class="font-bold text-yellow-500">{{ __('Description') }}:</label> {{ $contact->description }}</p>
                    </div>
                    <div class="w-full flex gap-2">
                        <label class="font-bold text-yellow-500">{{ __('Date') }}:</label>
                        <p>{{ $contact->created_at }}</p>
                    </div>
                    <div class="w-full flex gap-2">
                        <label class="font-bold text-yellow-500">{{ __('Last contact') }}:</label>
                        <p>{{ $contact->updated_at }}</p>
                    </div>

                    <div class="w-full flex gap-3 mt-3 justify-center items-center">
                        <button class="w-full hover:bg-slate-600 rounded-md py-2 bg-slate-700" wire:click="$emit('deleteContact', {{ $contact->id }})">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <button class="w-full hover:bg-slate-600 rounded-md py-2 bg-slate-700" wire:click="$emit('showContact', {{ $contact->id }})">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <button class="w-full hover:bg-slate-600 rounded-md py-2 bg-slate-700" wire:click="$emit('editContact', {{ $contact->id }})">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
        @if (!count($contacts))
            <div class="w-full h-full flex flex-col justify-center items-center bg-slate-600 p-5 rounded-md">
                <p>No existen datos</p>
            </div>         
        @endif
    </div>
</div>
