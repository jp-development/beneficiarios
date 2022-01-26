<div>
    <div class="w-full my-10 p-14 rounded-xl shadow-xl bg-white">
        <p class="font-extrabold text-principal text-2xl mb-10">Datos del beneficiario</p>
        <form wire:submit.prevent='create'>
            <div class="w-full grid grid-cols-12 gap-5">
                <div class="col-span-6 w-full flex flex-col">
                    <label class=" text-base font-semibold text-black ">SIM</label>
                    <input type="text" wire:model.lazy='sim'
                        class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Centro zonal</label>
                    <input type="text" wire:model.lazy='zonalCenter'
                        class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">

                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Nombres</label>
                    <input type="text" wire:model.lazy='name'
                        class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Primer apellido</label>
                    <input type="text" wire:model.lazy='surname'
                        class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-black font-semibold">Segundo apellido</label>
                    <input type="text" wire:model.lazy='secondSurname'
                        class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-black font-semibold">Tipo de identificacion</label>
                    <select wire:model.lazy='idType' class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal bg-transparent "
                        placeholder='Tipo de identificacion'>
                        <option value=""></option>
                        <option value="Registro Civil">Registro civil</option>
                        <option value="Tarjeta de Identidad">Tarjeta de identidad</option>
                        <option value="Cedula de Ciudadania">Cedula de ciudadania</option>
                    </select>
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-black font-semibold">Numero de identificacion</label>
                    <input type="text" wire:model.lazy='secondSurname'
                        class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Sexo</label>
                    <select type="text" wire:model.lazy='sex'
                        class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal bg-transparent">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Fecha de nacimiento</label>
                    <input type="date" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-black font-semibold">Departamento de nacimiento</label>
                    <select type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal bg-transparent">
                    </select>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Municipio de nacimiento</label>
                    <select type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal bg-transparent">
                    </select>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Nacionalidad</label>
                    <select type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal bg-transparent">
                    </select>
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Sede</label>
                    <select type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal bg-transparent">
                        @forelse ($sedes as $sede)
                            <option value="">{{ $sede->name }}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Autoridad competente</label>
                    <input type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Documentos</label>
                    <div>
                        @forelse ($documents as $document)
                            <label class="inline-flex items-center mt-3 mx-2">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-fourth"><span
                                    class="ml-2 text-gray-700">{{ $document->name }}</span>
                            </label>
                        @empty

                        @endforelse

                    </div>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Adoptabilidad</label>
                    <label>
                        <input type="radio" name="adoptability" wire:model.lazy='adoptability' value="1"> SI
                    </label>
                    <label>
                        <input type="radio" name="adoptability" wire:model.lazy='adoptability' value="0"> NO
                    </label>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Discapacidad</label>
                    <label>
                        <input type="radio" name="disability" wire:model.lazy='disability' value="1"> SI
                    </label>
                    <label>
                        <input type="radio" name="disability" wire:model.lazy='disability' value="0"> NO
                    </label>
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">EPS</label>
                    <input type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Grupo etnico</label>
                    <select type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal bg-transparent">
                        <option value="indígenas">Indígena</option>
                        <option value="afrocolombiano">Afrocolombiano</option>
                    </select>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Fecha de apertura PARD</label>
                    <input type="date" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Fecha de ingreso</label>
                    <input type="date" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>

                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Escolaridad</label>
                    <div>
                        <label class="mx-2">
                            <input type="radio" name="scholarship" value="azul"> Primaria basica
                        </label>
                        <label class="mx-2">
                            <input type="radio" name="scholarship" value="azul"> Primaria intermedia
                        </label>
                        <label class="mx-2">
                            <input type="radio" name="scholarship" value="azul"> Bachillerato
                        </label>
                    </div>
                </div>
                <div class="col-span-12 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Observaciones de escolaridad</label>
                    <textarea class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal " cols="30"
                        rows="10"></textarea>
                </div>
                <p class="font-extrabold text-principal text-2xl mb-3 col-span-12">Datos de contacto</p>
                <div class="col-span-12 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Nombre y apellidos del acudiente</label>
                    <input type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Parentesco</label>
                    <input type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Direccion</label>
                    <input type="text" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Telefono</label>
                    <input type="tel" class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal ">
                </div>
                <div class="col-span-12 w-full flex flex-col">
                    <label class="text-base font-semibold text-black ">Observaciones de ingreso</label>
                    <p class="text-sm">Aqui se ingresara las observaciones de como el beneficiario fue
                        ingresado en nuestras instalaciones</p>
                    <textarea class="border rounded-md border-one focus:outline-none p-2 focus:outline-principal " cols="30" rows="10"
                        id='observations'></textarea>
                </div>
                <div class="col-span-12 w-full flex justify-end">
                    <button type="submit"
                        class="bg-principal px-5 py-2 rounded-md flex items-center font-bold text-white tracking-wider">Crear nuevo beneficiario
                        <ion-icon class="font-bold text-2xl" name="add"></ion-icon>
                    </button>
                </div>
            </div>
        </form>
    </div>
    @section('js')
        <script>
        </script>
    @endsection
</div>
