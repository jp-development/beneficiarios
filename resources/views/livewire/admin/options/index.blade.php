<div>
    <div class='p-5  grid grid-cols-12 gap-4'>
        <div class="bg-white col-span-4 row-span-1 p-5 rounded-lg shadow-md">
            @livewire('admin.documents.index')
        </div>
        <div class="bg-white col-span-8 p-5 row-span-2 rounded-lg shadow-md">
            @livewire('admin.options.reasons.index')
        </div>
    </div>
    @section('js')
        <script>
            Livewire.on('documentCreated', message => {
                Swal.fire({
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                })
            })

            Livewire.on('reasonCreated', message => {
                Swal.fire({
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                })
            })

            Livewire.on('deleteDocument', id => {
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
                        Livewire.emitTo('admin.documents.index', 'delete', id)
                        Swal.fire(
                            'Eliminado!',
                            'El documento fue eliminado con exito',
                            'success'
                        )
                    }
                })
            })

            Livewire.on('deleteReason', id => {
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
                        Livewire.emitTo('admin.options.reasons.index', 'delete', id)
                        Swal.fire(
                            'Eliminado!',
                            'El motivo de ingreso fue eliminado con exito',
                            'success'
                        )
                    }
                })
            })

        </script>
    @endsection
</div>
