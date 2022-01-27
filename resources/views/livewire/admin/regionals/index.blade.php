<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-6 bg-white shadow-lg rounded-md p-5 row-span-1 ">
            <h5 class="text-lg font-bold text-principal">Regionales</h5>
            <div class="flex justify-center items-center w-full h-full">
                <form wire:submit.prevent='createRegional' class="w-full flex flex-col justify-center items-center">
                    <input type="text" class="border rounded-md shadow-sm w-full p-2 focus:outline-principal"
                        wire:model.lazy='nameRegional'>
                    <button type="submit" class="w-full mx-2 p-2 bg-principal rounded-lg text-white font-bold my-2">Crear
                        nuevo regional</button>
                </form>
            </div>
        </div>
        <div class="col-span-6 bg-white shadow-lg rounded-md p-5 row-span-1">
            <h5 class="text-lg font-bold text-principal">Centros Zonales</h5>
            <div class="flex justify-between items-center w-full">
                <form wire:submit.prevent='createZonalCenter' class="w-full flex flex-col justify-between items-start">
                    <input type="text" class="my-2 border rounded-md shadow-sm w-full p-2 focus:outline-principal">
                    <label class="text-base font-bold ">Regional perteneciente</label>
                    <select class="mb-2 border rounded-md shadow-sm w-full p-2 bg-white focus:outline-principal">
                        @forelse ($getRegionals as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option>No existen regionales aun creadas</option>
                        @endforelse
                    </select>
                    <button type="submit" class=" mx-2 p-2 bg-principal rounded-lg text-white font-bold w-full">Crear
                        nuevo
                        centro zonal</button>
                </form>
            </div>
        </div>

        <div class="col-span-6 bg-white shadow-lg rounded-md p-5">
            <h5 class="text-lg font-bold text-principal">Listado de regionales creados</h5>
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black tracking-wider">
                            Id
                        </th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black tracking-wider">
                            Regional
                        </th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($getRegionals as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    {{ $item->id }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    {{ $item->name }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">
                                    <button
                                        class="p-2 text-white font-bold bg-red-600 rounded hover:bg-red-500 w-full flex justify-center"
                                        wire:click.prevent='$emit("deleteRegional", {{ $item->id }})'> 
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                            <line x1="80" y1="112" x2="432" y2="112"
                                                style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                                            <path
                                                d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                            <line x1="256" y1="176" x2="256" y2="400"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                            <line x1="184" y1="176" x2="192" y2="400"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                            <line x1="328" y1="176" x2="320" y2="400"
                                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        </svg>Eliminar regional</button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        No hay regionales creados aun
                    @endforelse
                </tbody>
            </table>
        </div>


        <div class="col-span-6 bg-white shadow-lg rounded-md p-5">
            <h5 class="text-lg font-bold text-principal">Listado de centros zonales creados</h5>

        </div>
    </div>

    @section('js')
        <script>
            Livewire.on('regionalCreated', message => {
                Swal.fire({
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                })
            })

            Livewire.on('deleteRegional', id => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Esto no se podra revertir",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('admin.regionals.index', 'deleteRegionals', id)
                        Swal.fire(
                            'Eliminado!',
                            'La regional fue eliminada con exito',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endsection
</div>
