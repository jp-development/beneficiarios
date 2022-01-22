<div>
    <div class='flex justify-between'>
        <h5 class="text-third text-2xl font-bold">Documentos</h5>
        <button class="bg-principal text-white text-base font-bold p-2 rounded-md"
            wire:click='$set("openModal","true")'>Agregar nuevo documento</button>
    </div>

    <div class='my-5'>
        @forelse ($documents as $document)
            <div class="flex justify-between items-center my-3">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/documentos.png') }}" class="w-16" alt="">
                    <h5 class="text-2xl font-bold">{{ $document->name }}</h5>
                </div>
                <div>
                    <button wire:click.prevent='$emit("deleteDocument",{{ $document->id }})' class="bg-red-600 p-2 rounded-md text-white font-medium">Eliminar documento</button>
                </div>
            </div>
        @empty

        @endforelse
    </div>
    <x-jet-dialog-modal wire:model='openModal'>
        @slot('title')
            <h5 class="text-lg font-bold">Crear nuevo documento de ingreso</h5>
        @endslot

        @slot('content')
            <div class="w-full">
                <input wire:model.lazy='name' type="text" class="w-full border-b-[3px] border-third focus:outline-none p-2"
                    placeholder="Nombre del documento">
            </div>
            <p class="text-sm my-3 text-third/90">
                Estos documetos son los que se tienen en cuenta en el momento en el que un beneficiario sera ingresado en
                alguno de los operadores
            </p>
        @endslot

        @slot('footer')
            <div class="flex w-full justify-end gap-3">
                <button class="p-2 rounded-lg text-lg text-white bg-secondary font-bold" wire:click.prevent='closeModal'>
                    Cerrar
                </button>
                <button class="p-2 rounded-lg text-lg text-white bg-principal font-bold" wire:click.prevent='create'>
                    Agregar nuevo documento
                </button>
            </div>
        @endslot
    </x-jet-dialog-modal>
</div>
