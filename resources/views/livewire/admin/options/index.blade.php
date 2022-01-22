<div>
    <div class='p-5  grid grid-cols-12'>
        <div class="bg-white col-span-5 p-5 rounded-md">
            @livewire('admin.documents.index')
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

        </script>
    @endsection
</div>
