<div>
    <div class='flex flex-col justify-between'>
        <h5 class="text-principal text-2xl font-bold">Documentos</h5>
        <button class="bg-principal text-white text-base font-bold p-2 rounded-md mt-3"
            wire:click='$set("openModal","true")'>Agregar nuevo documento</button>
    </div>

    <div class='my-5'>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black tracking-wider">
                        Nombre del documento
                    </th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($documents as $document)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                                {{ $document->name }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-blue-900">
                                <button class="p-2 text-white font-bold bg-red-600 rounded hover:bg-red-500 w-full flex justify-center"
                                    wire:click.prevent='$emit("deleteDocument", {{ $document->id }})'> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                                    <path
                                        d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320"
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="80" y1="112" x2="432" y2="112"
                                        style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                                    <path d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="256" y1="176" x2="256" y2="400"
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="184" y1="176" x2="192" y2="400"
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="328" y1="176" x2="320" y2="400"
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                </svg>Eliminar documento</button>
                            </div>
                        </td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>

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
