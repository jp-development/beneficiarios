<div>
    <section class="w-full mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-7 flex">
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-white">
                Roles
            </h1>
            <button class="mx-5 bg-white p-2 rounded-md text-third shadow-lg shadow-fourth/50 mb-10 text-lg font-bold"
                wire:click.prevent='$set("openModal", true)'>Agregar nuevo rol</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse ($roles as $role)
                <div
                    class="w-full bg-white rounded-lg shadow-lg shadow-white/40 p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="{{ asset('images/rol.png') }}" alt="photo">
                    </div>
                    <div class="text-center w-full">
                        <p class="text-xl text-principal font-bold mb-2">{{ $role->name }}</p>
                        <div class="flex flex-col w-full">
                            @foreach ($role->permissions->pluck('name') as $item)
                                <p class="text-base text-left">=> {{ $item }}</p>
                            @endforeach
                        </div>
                    </div>
                    <button wire:click.prevent='$emit("deleteRol", {{ $role->id }})' class="mt-5 w-full bg-red-600 p-2 text-white font-bold rounded-md">Eliminar</button>
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
