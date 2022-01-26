<div>
    <div class="md:grid md:grid-cols-3 md:gap-6 my-5">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-2xl font-bold leading-6 text-gray-900">Profile</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Este formulario permite la creacion de un nuevo operador que vaya a empezar en funcionamiento
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent='create'>
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="w-full gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-semibold text-gray-700">
                                    Nombre del operador
                                </label>
                                <input type="text" wire:model.lazy='name'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Regional</label>
                                <input type="text" wire:model.lazy='regional'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Centro Zonal</label>
                                <input type="text" wire:model.lazy='zonalCenter'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-semibold text-gray-700">Municipio</label>
                                <select id="country" name="country" autocomplete="country-name"
                                    wire:model.lazy='municipality'
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Modalidad de Atencion</label>
                                <input type="text" wire:model.lazy='attentionModality'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>

                            <div class='col-span-6 sm:col-span-6'>
                                <label for="about" class="block text-sm font-semibold text-gray-700">
                                    Poblacion dirigida
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" name="about" rows="3" wire:model.lazy='population'
                                        class="p-2 shadow-sm focus:outline-principal  mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                        placeholder="..."></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    A que tipo de poblacion va dirijida este nuevo operador
                                </p>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Numero de Contrato</label>
                                <input type="text" wire:model.lazy='contractNumber'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Institucion</label>
                                <input type="text" wire:model.lazy='institution'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Sede</label>
                                <input type="text" wire:model.lazy='campus'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Telefono</label>
                                <input type="text" wire:model.lazy='phone'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                            <div class="col-span-6 ">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Direccion</label>
                                <input type="text" wire:model.lazy='address'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                            <div class="col-span-6 ">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Responsable del Programa</label>
                                <input type="text" wire:model.lazy='responsable'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>
                            <div class="col-span-6 ">
                                <label for="first-name" class="block text-sm font-semibold text-gray-700">
                                    Correo Electronico</label>
                                <input type="text" wire:model.lazy='email'
                                    class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal w-full">
                            </div>




                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
            </form>
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
        </script>
    @endsection
</div>
