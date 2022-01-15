<div>
    <div class="w-full bg-white p-2 rounded-md my-10 flex">
        <div class="w-[50%] border-r-2 p-2">
            <h5 class="font-bold text-xl">Crear nuevo operador</h5>
            <form wire:submit.prevent='create'>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Nombre del operador' wire:model.lazy='name'>
                </div>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Regional' wire:model.lazy='regional'>
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Centro Zonal' wire:model.lazy='zonalCenter'>
                </div>
                <div class="my-5 flex">
                    <select wire:model.lazy='municipality'
                        class="bg-white m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        style="width: 100%; ;">
                        <option value="">Municipio</option>
                        <option value="cartagena">Cartagena</option>
                    </select>
                </div>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Modalidad de atencion' wire:model.lazy='attentionModality'>
                </div>
                <div class="my-5 flex">
                    <textarea placeholder="Poblacion dirigida" wire:model.lazy='population'
                        class="m-2 w-full border-4 rounded-md border-third p-2 text-lg focus:outline-none" cols="30"
                        rows="3"></textarea>
                </div>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Numero de contrato' wire:model.lazy='contractNumber'>
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Institucion' wire:model.lazy='institution'>
                </div>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Sede' wire:model.lazy='campus'>
                    <input type="tel" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Telefono' wire:model.lazy='phone'>
                </div>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Direccion' wire:model.lazy='address'>
                </div>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Responsable del programa' wire:model.lazy='responsable'>
                </div>
                <div class="my-5 flex">
                    <input type="text" class="m-2 w-full border-b-4 border-third p-2 text-lg focus:outline-none"
                        placeholder='Correo electronico' wire:model.lazy='email'>
                </div>
                <div class="my-5 flex justify-end">
                    <button type="submit" class="bg-fourth text-lg text-white p-2 rounded-md font-semibold">Crear nuevo
                        operador</button>
                </div>
            </form>
        </div>
        <div class="w-full p-8">
            <h5 class="text-center text-2xl font-bold">Operadores</h5>
            <div class="w-full grid grid-cols-3 gap-3 my-5">
                @forelse ($operators as $operator)
                    <div class="w-full p-3">
                        <div>
                            <img class="w-full" src="{{ asset('images/campus.png') }}" alt="">
                        </div>
                        <h5 class="text-xl text-center font-bold mt-2">{{ $operator->name }}</h5>
                        <p class="text-lg text-center font-bold text-principal">{{ $operator->regional }}</p>
                        <div class="my-2">
                            <a href=""
                                class="p-3 bg-principal
                          text-white rounded-md font-bold">Ver
                                operador</a>
                            <button wire:click.prevent='$emit("deleteOperator", {{ $operator->id }})'
                                class="p-3 bg-secondary text-white rounded-md font-bold">Eliminar operador</button>
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
            Livewire.on('operatorCreated', message => {
                Swal.fire({
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                })
            })

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
