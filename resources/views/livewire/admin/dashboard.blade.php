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

    <div class="w-full grid grid-cols-4 grid-rows-3 gap-x-9  mt-16 ">
        <div class="w-full col-span-3 row-span-1">
            <div class="w-full p-3 bg-third rounded-lg text-white font-bold text-lg">Ultimos beneficiarios agregados
            </div>
            <div class="w-full bg-white p-3 flex my-3 rounded-md h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil<ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>
        </div>
        <div class="w-full  col-span-1  bg-white rounded-lg shadow-xl flex flex-col items-center p-6">
            <div class="w-[50%] my-6">
                <img src="{{ asset('images/profile.png') }}" alt="">
            </div>
            <h5 class="text-lg font-bold">{{ config('app.nameConfig') }}</h5>
            <h5 class="text-lg font-bold">{{ config('app.address') }}</h5>
        </div>
    </div>
</div>
