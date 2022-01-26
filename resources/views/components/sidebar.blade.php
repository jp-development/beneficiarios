<!-- Sidebar -->
<aside class="flex-shrink-0 hidden w-64 bg-principal border-r md:block">
    <div class="flex flex-col h-full">
        <div class="p-5">
            <img src="{{ asset('images/profile.png') }}" alt="">
            <h5 class="text-center text-white text-xl font-bold">{{ config('app.nameConfig') }}</h5>
            <p class='text-base text-white font-semibold text-center'>{{ config('app.address') }}</p>
        </div>
        <!-- Sidebar links -->
        <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
            <!-- Dashboards links -->
            <a href="/dashboard"
                class="flex items-center p-2 text-white transition-colors rounded-md  hover:bg-white hover:text-principal "
                :class="{'bg-white text-principal': isActive || open}" role="button" aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                <span aria-hidden="true">
                    <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                        viewBox="0 0 512 512">
                        <path
                            d="M80,212V448a16,16,0,0,0,16,16h96V328a24,24,0,0,1,24-24h80a24,24,0,0,1,24,24V464h96a16,16,0,0,0,16-16V212"
                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                        <path d="M480,256,266.89,52c-5-5.28-16.69-5.34-21.78,0L32,256"
                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                        <polyline points="400 179 400 64 352 64 352 133"
                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                    </svg>
                </span>
                <span class="ml-2 text-sm font-bold"> Dashboard </span>
            </a>

            <div x-data="{ isActive: false, open: false}">
                <a href="#" @click="$event.preventDefault(); open = !open"
                    class="flex items-center p-2 text-white transition-colors rounded-md  hover:bg-white hover:text-principal "
                    :class="{'bg-white text-principal': isActive || open}" role="button" aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                            viewBox="0 0 512 512">
                            <circle fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="32" cx="256" cy="56"
                                r="40" />
                            <path fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="32"
                                d="M199.3,295.62h0l-30.4,172.2a24,24,0,0,0,19.5,27.8,23.76,23.76,0,0,0,27.6-19.5l21-119.9v.2s5.2-32.5,17.5-32.5h3.1c12.5,0,17.5,32.5,17.5,32.5v-.1l21,119.9a23.92,23.92,0,1,0,47.1-8.4l-30.4-172.2-4.9-29.7c-2.9-18.1-4.2-47.6.5-59.7,4-10.4,14.13-14.2,23.2-14.2H424a24,24,0,0,0,0-48H88a24,24,0,0,0,0,48h92.5c9.23,0,19.2,3.8,23.2,14.2,4.7,12.1,3.4,41.6.5,59.7Z" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm font-bold"> Beneficiarios </span>
                    <span class="ml-auto" aria-hidden="true">
                        <!-- active class 'rotate-180' -->
                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </a>
                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                    <a href="/beneficiaries" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Beneficiarios inscritos
                    </a>
                    <a href="/beneficiaries/create" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Creacion de beneficiario
                    </a>
                </div>
            </div>

            <div x-data="{ isActive: false, open: false}">
                <a href="#" @click="$event.preventDefault(); open = !open"
                    class="flex items-center p-2 text-white transition-colors rounded-md  hover:bg-white hover:text-principal "
                    :class="{'bg-white text-principal': isActive || open}" role="button" aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                            viewBox="0 0 512 512">
                            <line x1="176" y1="416" x2="176" y2="480"
                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            <path
                                d="M80,32H272a32,32,0,0,1,32,32V476a4,4,0,0,1-4,4H48a0,0,0,0,1,0,0V64A32,32,0,0,1,80,32Z"
                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            <path
                                d="M320,192H432a32,32,0,0,1,32,32V480a0,0,0,0,1,0,0H304a0,0,0,0,1,0,0V208A16,16,0,0,1,320,192Z"
                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            <path d="M98.08,431.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,431.87Z" />
                            <path d="M98.08,351.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,351.87Z" />
                            <path d="M98.08,271.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,271.87Z" />
                            <path d="M98.08,191.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,191.87Z" />
                            <path d="M98.08,111.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,111.87Z" />
                            <path d="M178.08,351.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,351.87Z" />
                            <path d="M178.08,271.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,271.87Z" />
                            <path d="M178.08,191.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,191.87Z" />
                            <path d="M178.08,111.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,111.87Z" />
                            <path d="M258.08,431.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,431.87Z" />
                            <path d="M258.08,351.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,351.87Z" />
                            <path d="M258.08,271.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,271.87Z" />
                            <ellipse cx="256" cy="176" rx="15.95" ry="16.03"
                                transform="translate(-49.47 232.56) rotate(-45)" />
                            <path d="M258.08,111.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,111.87Z" />
                            <path d="M400,400a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" />
                            <path d="M400,320a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" />
                            <path d="M400,240a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" />
                            <path d="M336,400a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" />
                            <path d="M336,320a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" />
                            <path d="M336,240a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm font-bold"> Operadores </span>
                    <span class="ml-auto" aria-hidden="true">
                        <!-- active class 'rotate-180' -->
                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </a>
                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                    <a href="/operators" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Operadores en ejecucion
                    </a>
                    <a href="/operators/create" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Implementacion de nuevo operador
                    </a>
                </div>
            </div>

            <div x-data="{ isActive: false, open: false}">
                <a href="#" @click="$event.preventDefault(); open = !open"
                    class="flex items-center p-2 text-white transition-colors rounded-md  hover:bg-white hover:text-principal "
                    :class="{'bg-white text-principal': isActive || open}" role="button" aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                            viewBox="0 0 512 512">
                            <rect x="64" y="64" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="216" y="64" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="368" y="64" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="64" y="216" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="216" y="216" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="368" y="216" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="64" y="368" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="216" y="368" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <rect x="368" y="368" width="80" height="80" rx="40" ry="40"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm font-bold"> Reportes </span>
                    <span class="ml-auto" aria-hidden="true">
                        <!-- active class 'rotate-180' -->
                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </a>
                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                    <a href="/reports" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Tipos de reporte
                    </a>
                    <a href="/beneficiaries/create" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Reportes generados
                    </a>
                </div>
            </div>

            <div x-data="{ isActive: false, open: false}">
                <a href="#" @click="$event.preventDefault(); open = !open"
                    class="flex items-center p-2 text-white transition-colors rounded-md  hover:bg-white hover:text-principal "
                    :class="{'bg-white text-principal': isActive || open}" role="button" aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                            viewBox="0 0 512 512">
                            <path
                                d="M402,168c-2.93,40.67-33.1,72-66,72s-63.12-31.32-66-72c-3-42.31,26.37-72,66-72S405,126.46,402,168Z"
                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            <path
                                d="M336,304c-65.17,0-127.84,32.37-143.54,95.41-2.08,8.34,3.15,16.59,11.72,16.59H467.83c8.57,0,13.77-8.25,11.72-16.59C463.85,335.36,401.18,304,336,304Z"
                                style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:32px" />
                            <path
                                d="M200,185.94C197.66,218.42,173.28,244,147,244S96.3,218.43,94,185.94C91.61,152.15,115.34,128,147,128S202.39,152.77,200,185.94Z"
                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            <path
                                d="M206,306c-18.05-8.27-37.93-11.45-59-11.45-52,0-102.1,25.85-114.65,76.2C30.7,377.41,34.88,384,41.72,384H154"
                                style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm font-bold"> Usuarios </span>
                    <span class="ml-auto" aria-hidden="true">
                        <!-- active class 'rotate-180' -->
                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </a>
                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                    <a href="/operators" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Usuarios registrados
                    </a>
                    <a href="/beneficiaries/create" role="menuitem"
                        class="block p-2 text-sm text-white font-bold transition-colors duration-200 rounded-md  hover:underline">
                        Crear nuevo usuario
                    </a>
                </div>
            </div>

            <a href="/roles" class="flex items-center p-2 text-white transition-colors rounded-md  hover:bg-white hover:text-principal "
                :class="{'bg-white text-principal': isActive || open}" role="button" aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                <span aria-hidden="true">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                        viewBox="0 0 512 512">
                        <path d="M128,80V64a48.14,48.14,0,0,1,48-48H400a48.14,48.14,0,0,1,48,48V432l-80-64"
                            style="fill:none;stroke:#fff;stroke-linejoin:round;stroke-width:32px" />
                        <path d="M320,96H112a48.14,48.14,0,0,0-48,48V496L216,368,368,496V144A48.14,48.14,0,0,0,320,96Z"
                            style="fill:none;stroke:#fff;stroke-linejoin:round;stroke-width:32px" />
                    </svg>
                </span>
                <span class="ml-2 text-sm font-bold"> Roles </span>
            </a>

            <a href="/settings"
                class="flex items-center p-2 text-white transition-colors rounded-md  hover:bg-white hover:text-principal "
                :class="{'bg-white text-principal': isActive || open}" role="button" aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                <span aria-hidden="true">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                        viewBox="0 0 512 512">
                        <path
                            d="M262.29,192.31a64,64,0,1,0,57.4,57.4A64.13,64.13,0,0,0,262.29,192.31ZM416.39,256a154.34,154.34,0,0,1-1.53,20.79l45.21,35.46A10.81,10.81,0,0,1,462.52,326l-42.77,74a10.81,10.81,0,0,1-13.14,4.59l-44.9-18.08a16.11,16.11,0,0,0-15.17,1.75A164.48,164.48,0,0,1,325,400.8a15.94,15.94,0,0,0-8.82,12.14l-6.73,47.89A11.08,11.08,0,0,1,298.77,470H213.23a11.11,11.11,0,0,1-10.69-8.87l-6.72-47.82a16.07,16.07,0,0,0-9-12.22,155.3,155.3,0,0,1-21.46-12.57,16,16,0,0,0-15.11-1.71l-44.89,18.07a10.81,10.81,0,0,1-13.14-4.58l-42.77-74a10.8,10.8,0,0,1,2.45-13.75l38.21-30a16.05,16.05,0,0,0,6-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16,16,0,0,0-6.07-13.94l-38.19-30A10.81,10.81,0,0,1,49.48,186l42.77-74a10.81,10.81,0,0,1,13.14-4.59l44.9,18.08a16.11,16.11,0,0,0,15.17-1.75A164.48,164.48,0,0,1,187,111.2a15.94,15.94,0,0,0,8.82-12.14l6.73-47.89A11.08,11.08,0,0,1,213.23,42h85.54a11.11,11.11,0,0,1,10.69,8.87l6.72,47.82a16.07,16.07,0,0,0,9,12.22,155.3,155.3,0,0,1,21.46,12.57,16,16,0,0,0,15.11,1.71l44.89-18.07a10.81,10.81,0,0,1,13.14,4.58l42.77,74a10.8,10.8,0,0,1-2.45,13.75l-38.21,30a16.05,16.05,0,0,0-6.05,14.08C416.17,247.67,416.39,251.83,416.39,256Z"
                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                    </svg>
                </span>
                <span class="ml-2 text-sm font-bold"> Configuraciones </span>
            </a>




        </nav>
    </div>
</aside>
