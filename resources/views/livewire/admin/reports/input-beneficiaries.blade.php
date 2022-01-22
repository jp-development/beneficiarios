<div>
    <div class="w-full bg-white p-3 rounded-xl">
        <div class='w-full p-1 flex justify-between'>
            <h5 class="text-lg text-secondary font-semibold">Ingreso de beneficiarios fecha a fecha</h5>
            <button class="p-2 bg-principal rounded-md text-white">Realizar reporte</button>
        </div>
        <div class="w-full p-1 flex ">
            <div class="flex flex-col mx-4">
                <label class="text-principal text-base font-semibold"> Fecha de Inicio </label>
                <input type="date" class="border p-2">
            </div>
            <div class="flex flex-col mx-4">
                <label class="text-principal text-base font-semibold"> Fecha de Fin </label>
                <input type="date" class="border p-2">
            </div>
            <div class="flex flex-col mx-4 w-full">
                <label class="text-principal text-base font-semibold"> Modalidad </label>
                <select class="border p-2 bg-transparent">
                    <option value="all">Todas las modalidades</option>
                    @forelse ($operators as $operator)
                        <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                    @empty
                        <option value="">No existen modalidades</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="w-full my-3 flex flex-col">
            <label class="text-principal text-base font-semibold">Justificacion del reporte</label>
            <textarea cols="30" rows="10" class="border-[3px] rounded-md p-2 border-third"></textarea>
        </div>
    </div>
</div>
