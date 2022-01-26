<div>
    <div class="w-full  p-2 rounded-md my-10 flex">
        <div class="w-full p-8">
            <h5 class="text-center text-4xl leading-7 font-bold">Operadores</h5>
            <div class="w-full grid grid-cols-3 gap-3 my-5">
                @forelse ($operators as $operator)
                    <div
                        class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col items-center py-10">
                            <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('images/campus.png') }}"
                                alt="Bonnie image" />
                            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $operator->name }}</h3>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $operator->address }}</span>
                            <div class="flex mt-4 space-x-3 lg:mt-6">
                                <button wire:click.prevent='$emit("deleteOperator", {{ $operator->id }})'
                                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-principal rounded-lg hover:bg-principal/70 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 512 512">
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
                                    </svg>Eliminar operador
                                </button>
                                <a href="#"
                                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M255.66,112c-77.94,0-157.89,45.11-220.83,135.33a16,16,0,0,0-.27,17.77C82.92,340.8,161.8,400,255.66,400,348.5,400,429,340.62,477.45,264.75a16.14,16.14,0,0,0,0-17.47C428.89,172.28,347.8,112,255.66,112Z"
                                            style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        <circle cx="256" cy="256" r="80"
                                            style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px" />
                                    </svg>Ver Operador</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full p-3">
                        <div>
                            <img class="w-full" src="{{ asset('images/campus.png') }}" alt="">
                        </div>
                        <h5 class="text-xl text-center font-bold mt-2">No existen operadores aun</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    @section('js')
        <script>
            Livewire.on('deleteOperator', id => {
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
                        Livewire.emitTo('admin.operators.index', 'delete', id)
                        Swal.fire(
                            'Eliminado!',
                            'El operador fue eliminado con exito',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endsection
</div>
