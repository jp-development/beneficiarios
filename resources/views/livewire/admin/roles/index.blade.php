<div>
    <section class="w-full mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-7 flex">
            <button class="mx-5 bg-principal p-2 rounded-full w-20 h-20 shadow-lg flex items-center justify-center mb-10 text-lg font-bold"
                wire:click.prevent='$set("openModal", true)'><svg xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" viewBox="0 0 512 512">
                    <title>ionicons-v5-a</title>
                    <line x1="256" y1="112" x2="256" y2="400"
                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                    <line x1="400" y1="256" x2="112" y2="256"
                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                </svg></button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse ($roles as $role)
                <div class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center py-10">
                        <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('images/rol.png') }}"
                            alt="Bonnie image" />
                        <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $role->name }}</h3>
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            @foreach ($role->permissions->pluck('name') as $item)
                                <p class="text-base text-left">=> {{ $item }}</p>
                            @endforeach
                        </span>
                        <div class="flex mt-4 space-x-3 lg:mt-6">
                            <button wire:click.prevent='$emit("deleteRol", {{ $role->id }})'
                                class="inline-flex items-center py-2 px-4 text-sm text-center text-white font-bold bg-principal rounded-lg hover:bg-principal/70 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
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
                                </svg>Eliminar rol
                            </button>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </section>
    <x-jet-dialog-modal wire:model='openModal'>
        <x-slot name='title'>
            <p class="text-xl font-bold text-principal">Crear nuevo rol</p>
        </x-slot>

        <x-slot name='content'>
            <input wire:model.lazy='name' type="text" placeholder="Nombre del nuevo rol"
                class="w-full p-2 border-b-[3px] border-principal focus:outline-none">
            <div class="my-3 flex flex-col">
                <label class="text-xl font-bold text-principal">Permisos</label>
                @forelse ($getPermissions as $index => $permission)
                    <label for="">
                        <input type="checkbox" value="{{ $permission->id }}"
                            wire:model.lazy='permissions.{{ $index }}'>
                        {{ $permission->name }}
                    </label>
                @empty

                @endforelse
            </div>
        </x-slot>

        <x-slot name='footer'>
            <div class="w-full flex justify-end">
                <button
                    class="mx-2 bg-principal p-2 rounded-md text-white shadow-lg shadow-principal/50  text-lg font-bold"
                    wire:click.prevent='create'>Agregar nuevo rol</button>
                <button
                    class="mx-2 bg-secondary p-2 rounded-md text-white shadow-lg shadow-secondary/50  text-lg font-bold"
                    wire:click.prevent='$set("openModal", true)'>Cancelar</button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
    @section('js')
        <script>
            Livewire.on('rolCreated', message => {
                Swal.fire({
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                })
            })

            Livewire.on('deleteRol', id => {
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
                        Livewire.emitTo('admin.roles.index', 'delete', id)
                        Swal.fire(
                            'Eliminado!',
                            'El rol fue eliminado con exito',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endsection
</div>
