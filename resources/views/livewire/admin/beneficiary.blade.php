<div>
    <div class="w-full flex justify-between mb-12">
        <h4 class="text-5xl font-black text-white">Beneficiarios</h4>
        <div>
            <a href="/beneficiaries/create"
                class="p-2 h-16 flex justify-center items-center rounded-full bg-white hover:bg-principal hover:text-white gap-2 text-third font-bold text-lg">Agregar
                nuevo beneficiario<ion-icon name="person-add" class="text-4xl"></ion-icon></a>
        </div>
    </div>
    <div class="w-full grid grid-cols-12 gap-9">
        <div class="bg-white col-span-8 ">
            <div class="w-full  text-white font-bold text-lg bg-third p-2">
                Beneficiarios ingresados
            </div>
            <div class="w-full bg-white p-3 flex   h-16 items-center justify-between border">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil
                        <ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>
            <div class="w-full bg-white p-3 flex   h-16 items-center justify-between border">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil
                        <ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>
            <div class="w-full bg-white p-3 flex   h-16 items-center justify-between border">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil
                        <ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>
            <div class="w-full bg-white p-3 flex   h-16 items-center justify-between border">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil
                        <ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>
            <div class="w-full bg-white p-3 flex   h-16 items-center justify-between border">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil
                        <ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>
            <div class="w-full bg-white p-3 flex   h-16 items-center justify-between border">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil
                        <ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>
            <div class="w-full bg-white p-3 flex   h-16 items-center justify-between border">
                <div class="flex items-center">
                    <div class="w-12 mr-4">
                        <img src="{{ asset('images/user.png') }}" alt="">
                    </div>
                    <h4 class="text-third text-base font-semibold ">Jesus David Pineda Gambin</h4>
                </div>
                <div class="flex items-center">
                    <p class="text-third font-bold mr-3">Vulneracion</p>
                    <a href=""
                        class="p-2 bg-fourth rounded-md text-white font-bold tracking-wider hover:bg-fourth/70 flex items-center">Perfil
                        <ion-icon class="text-lg text-white mx-2" name="person"></ion-icon></a>
                </div>
            </div>


        </div>
        <div class="bg-white col-span-4  p-14 rounded-lg shadow-xl">
            <h5 class="font-bold text-2xl text-third">Beneficiarios</h5>
            <div class="w-full p-3 flex justify-center">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    @section('js')
        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    @endsection
</div>
