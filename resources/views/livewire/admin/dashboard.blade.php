<div>
    <div class="w-full grid grid-cols-4 gap-x-9 ">
        <div class=" w-full h-40 col-span-2 bg-white rounded-lg  shadow-lg">
            <div class="w-full h-full  p-3 flex items-center justify-around">
                <div>
                    <h4 class="font-bold text-3xl text-third">Bienvenido, {{ auth()->user()->name }}</h4>
                    <p class="text-third text-lg font-semibold">Que gusto verte de nuevo !!!</p>
                </div>
                <img src="{{ asset('images/dashboard.png') }}" class="w-52" alt="">
            </div>
        </div>
        <div class="col-span-1 h-40 p-3 bg-white rounded-lg shadow-2xl  flex justify-between">
            <div class="h-full flex flex-col justify-around w-2/3">
                <h5 class="text-third font-bold text-xl">Numero de beneficiarios</h5>
                <p class="text-6xl text-third">15</p>
            </div>
            <div class="h-full flex justify-center items-center w-1/3">
                <ion-icon class="text-5xl text-fourth" name="person"></ion-icon>
            </div>
        </div>
        <div class="col-span-1 h-40 p-3 bg-white rounded-lg shadow-2xl  flex justify-between">
            <div class="h-full flex flex-col justify-around w-2/3">
                <h5 class="text-third font-bold text-xl">Numero de beneficiarios</h5>
                <p class="text-6xl text-third">15</p>
            </div>
            <div class="h-full flex justify-center items-center w-1/3">
                <ion-icon class="text-5xl text-fourth" name="person"></ion-icon>
            </div>
        </div>
    </div>
</div>
