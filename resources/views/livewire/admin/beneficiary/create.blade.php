<div>
    <div class="md:grid md:grid-cols-3 md:gap-6 my-5">
        <div class="mt-5 md:mt-0 md:col-span-3">
            <form action="#" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 sm:col-span-4">
                                <label class="block text-base font-medium text-black">
                                    Nombre del beneficiario</label>
                                <input type="text" wire:model.lazy='name'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label class="block text-base font-medium text-black">
                                    Primer apellido del beneficiario</label>
                                <input type="text" wire:model.lazy='surname'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label class="block text-base font-medium text-black">
                                    Segundo apellido del beneficiario</label>
                                <input type="text" wire:model.lazy='secondSurname'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label for="country" class="block text-base font-medium text-black">Tipo de
                                    identificacion</label>
                                <select wire:model.lazy='typeId'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">
                                    <option value="Tarjeta de Identidad">Tarjeta de identidad</option>
                                    <option value="Registro Civil">Registro civil</option>
                                    <option value="Cedula de Ciudadania">Cedula de ciudadania</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Sin Documento">Sin Documento</option>
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label class="block text-base font-medium text-black">
                                    Numero de identidad</label>
                                <input type="text" wire:model.lazy='numberId'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label for="country" class="block text-base font-medium text-black">EPS</label>
                                <select wire:model.lazy='typeId'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">

                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label for="country" class="block text-base font-medium text-black">Vacuna</label>
                                <select wire:model.lazy='typeId'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">
                                    <option value="Pfizer">Pfizer</option>
                                    <option value="Moderna">Moderna</option>
                                    <option value="AstraZeneca">AstraZeneca</option>
                                    <option value="Jhonson & Jhonson">Jhonson & Jhonson</option>
                                    <option value="Janssen">Janssen</option>
                                    <option value="Sinovac">Sinovac</option>
                                    <option value="Sinopharm">Sinopharm</option>
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label class="block text-base font-medium text-black">
                                    Fecha de nacimiento</label>
                                <input type="date" wire:model.lazy='birth'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label for="country" class="block text-base font-medium text-black">Nacionalidad</label>
                                <select wire:model.lazy='nationality'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">

                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label for="country" class="block text-base font-medium text-black">Raza</label>
                                <select wire:model.lazy='race'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">
                                    <option value="Mestizo">Mestizo</option>
                                    <option value="Caucasico">Caucasico</option>
                                    <option value="Afrocolombiano">Afrocolombiano</option>
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label class="block text-base font-medium text-black">
                                    Fecha de ingreso</label>
                                <input type="date" wire:model.lazy='dateInput'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label class="block text-base font-medium text-black">
                                    Hora de ingreso</label>
                                <input type="time" wire:model.lazy='timeInput'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label class="block text-base font-medium text-black">
                                    Fecha de apertura PARD</label>
                                <input type="date" wire:model.lazy='datePard'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-3">
                                <label class="block text-base font-medium text-black">
                                    Numero de SIM</label>
                                <input type="text" wire:model.lazy='sim'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label for="country" class="block text-base font-medium text-black">Modalidad a la
                                    que ingresara</label>
                                <select wire:model.lazy='modality'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">
                                    @forelse ($sedes as $sede)
                                        <option value="{{ $sede->id }}">{{ $sede->name }}</option>
                                    @empty
                                        <option value="">No existen aun modalidades</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label for="country" class="block text-base font-medium text-black">Centro
                                    Zonal</label>
                                <select wire:model.lazy='zonalCenter'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">

                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label class="block text-base font-medium text-black">
                                    Autoridad Administrativa</label>
                                <input type="text" wire:model.lazy='admin'
                                    class="mt-1 focus:outline-principal  block w-full shadow-sm sm:text-sm  rounded-md p-2 border">
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="country" class="block text-base font-medium text-black">Regional</label>
                                <select wire:model.lazy='regional'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">
                                    <option value="Tarjeta de Identidad">Tarjeta de identidad</option>
                                    <option value="Registro Civil">Registro civil</option>
                                    <option value="Cedula de Ciudadania">Cedula de ciudadania</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Sin Documento">Sin Documento</option>
                                </select>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="country" class="block text-base font-medium text-black">Motivo de
                                    ingreso</label>
                                <select wire:model.lazy='reason'
                                    class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-principal sm:text-sm">

                                </select>
                            </div>

                            <fieldset class="col-span-6">
                                <div>
                                    <legend class="text-base font-medium text-black">Se realiza pre-evaluacion
                                    </legend>
                                    <p class="text-sm text-gray-500">Minimo 48 horas antes del ingreso a la
                                        modalidad
                                    </p>
                                </div>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input name="evaluation" type="radio" wire:model='evaluation' value="SI"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-everything"
                                            class="ml-3 block text-sm font-medium text-gray-700">
                                            SI
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="evaluation" type="radio" wire:model='evaluation' value="NO"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">
                                            NO
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="col-span-6">
                                <legend class="text-base font-medium text-black">Documentos de ingreso</legend>
                                <div class="mt-4 space-y-4  w-full">
                                    @forelse ($getDocuments as $document)
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input name="document" type="checkbox" wire:model.lazy='document'
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments"
                                                    class="font-medium text-gray-700">{{ $document->name }}</label>
                                            </div>
                                        </div>
                                    @empty
                                        No existen aun documentos de ingresos registrados
                                    @endforelse
                                </div>
                            </fieldset>

                            <div class="col-span-12">
                                <label for="about" class="block text-base font-medium text-black">
                                    Observaciones de ingreso
                                </label>
                                <div class="mt-1">
                                    <textarea rows="3" wire:model.lazy='observationsInput'
                                        class="shadow-sm focus:outline-principal p-2 mt-1 block w-full sm:text-sm border rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    En este campo se ingresara de forma textual las observaciones que se vieron del
                                    beneficiario al momento del ingreso
                                </p>
                            </div>

                            <fieldset class="col-span-6">
                                <div>
                                    <legend class="text-base font-medium text-black">Cuenta con informe de resultado
                                    </legend>
                                </div>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input name="result" type="radio" wire:model='result' value="SI"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-everything"
                                            class="ml-3 block text-sm font-medium text-gray-700">
                                            SI
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="result" type="radio" wire:model='result' value="NO"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">
                                            NO
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="result" type="radio" wire:model='result' value="NO APLICA  "
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">
                                            NO APLICA
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @section('js')

    @endsection
</div>
