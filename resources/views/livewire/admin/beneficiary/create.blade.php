<div>
    <h4 class="text-5xl font-black text-white mx-5">Formulario Beneficiario</h4>
    <p class="text-lg font-semibold text-white mx-5">Este formulario es para la creacion de nuevos beneficiarios
        ingresados en
        nuestras instituciones </p>
    <div class="w-full my-10 p-14 rounded-xl shadow-xl bg-white">
        <p class="font-extrabold text-third text-2xl mb-10">Datos del beneficiario</p>
        <form wire:submit.prevent='create'>
            <div class="w-full grid grid-cols-12 gap-5">
                <div class="col-span-6 w-full flex flex-col">
                    <label class=" text-base text-secondary ">SIM</label>
                    <input type="text" wire:model.lazy='sim'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base text-secondary ">Centro zonal</label>
                    <input type="text" wire:model.lazy='zonalCenter'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Nombres</label>
                    <input type="text" wire:model.lazy='name'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Primer apellido</label>
                    <input type="text" wire:model.lazy='surname'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary">Segundo apellido</label>
                    <input type="text" wire:model.lazy='secondSurname'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary">Tipo de identificacion</label>
                    <select wire:model.lazy='idType'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder='Tipo de identificacion'>
                        <option value=""></option>
                        <option value="Registro Civil">Registro civil</option>
                        <option value="Tarjeta de Identidad">Tarjeta de identidad</option>
                        <option value="Cedula de Ciudadania">Cedula de ciudadania</option>
                    </select>
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary">Numero de identificacion</label>
                    <input type="text" wire:model.lazy='secondSurname'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary ">Sexo</label>
                    <select type="text" wire:model.lazy='sex'
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary ">Fecha de nacimiento</label>
                    <input type="date"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary">Departamento de nacimiento</label>
                    <select type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </select>
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary ">Municipio de nacimiento</label>
                    <select type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </select>
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary ">Pais</label>
                    <select type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </select>
                </div>
                <div class="col-span-3 w-full flex flex-col">
                    <label class="text-base text-secondary ">Nacionalidad</label>
                    <select type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </select>
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base text-secondary ">Sede</label>
                    <select type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </select>
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base text-secondary ">Autoridad competente</label>
                    <input type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Documentos</label>
                    <div>
                        <label class="inline-flex items-center mt-3 mx-2">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-fourth"><span
                                class="ml-2 text-gray-700">label</span>
                        </label>
                        <label class="inline-flex items-center mt-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-fourth"><span
                                class="ml-2 text-gray-700">label</span>
                        </label>
                    </div>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Adoptabilidad</label>
                    <label>
                        <input type="radio" name="adoptability" wire:model.lazy='adoptability' value="1"> SI
                    </label>
                    <label>
                        <input type="radio" name="adoptability" wire:model.lazy='adoptability' value="0"> NO
                    </label>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Discapacidad</label>
                    <label>
                        <input type="radio" name="adoptability" wire:model.lazy='disability' value="1"> SI
                    </label>
                    <label>
                        <input type="radio" name="adoptability" wire:model.lazy='disability' value="0"> NO
                    </label>
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base text-secondary ">EPS</label>
                    <input type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 w-full flex flex-col">
                    <label class="text-base text-secondary ">Grupo etnico</label>
                    <select type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <option value="indígenas">Indígena</option>
                        <option value="afrocolombiano">Afrocolombiano</option>
                    </select>
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Fecha de apertura PARD</label>
                    <input type="date"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Fecha de ingreso</label>
                    <input type="date"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Escolaridad</label>
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
                <div class="col-span-12 w-full flex flex-col" >
                    <label class="text-base text-secondary ">Observaciones de escolaridad</label>
                    <textarea
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        cols="30" rows="10" ></textarea>
                </div>
                <p class="font-extrabold text-third text-2xl mb-3 col-span-12">Datos de contacto</p>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Nombres del acudiente</label>
                    <input type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Primer apellido del acudiente</label>
                    <input type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Segundo apellido del acudiente</label>
                    <input type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Parentesco</label>
                    <input type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Direccion</label>
                    <input type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 w-full flex flex-col">
                    <label class="text-base text-secondary ">Telefono</label>
                    <input type="tel"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-12 w-full flex flex-col">
                    <label class="text-base text-secondary ">Observaciones de ingreso</label>
                    <p class="text-third text-sm">Aqui se ingresara las observaciones de como el beneficiario fue
                        ingresado en nuestras instalaciones</p>
                    <textarea
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        cols="30" rows="10" id='observations'></textarea>
                </div>
                <div class="col-span-12 w-full flex justify-end">
                    <button type="submit"
                        class="bg-principal p-2 rounded-md flex items-center font-bold text-white tracking-wider">Crear
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
