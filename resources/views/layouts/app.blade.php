<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JpDevelopment | Beneficiarios</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">

    @yield('css')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>


    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark}">
        <!--  -->
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-opacity-90 bg-principal">
                Loading.....
            </div>

            <x-sidebar />

            <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">

                <x-header />


                <!-- Main content -->
                <main>
                    <div class="px-4 ">
                        @yield('content')
                    </div>
                </main>

            </div>

            <x-search />
            <x-notification />



        </div>
    </div>

    @livewireScripts

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>


    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
                setLightTheme() {
                    this.isDark = false
                    setTheme(this.isDark)
                },
                setDarkTheme() {
                    this.isDark = true
                    setTheme(this.isDark)
                },
                isSettingsPanelOpen: false,
                openSettingsPanel() {
                    this.isSettingsPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.settingsPanel.focus()
                    })
                },
                isNotificationsPanelOpen: false,
                openNotificationsPanel() {
                    this.isNotificationsPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.notificationsPanel.focus()
                    })
                },
                isSearchPanelOpen: false,
                openSearchPanel() {
                    this.isSearchPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.searchInput.focus()
                    })
                },
                isMobileSubMenuOpen: false,
                openMobileSubMenu() {
                    this.isMobileSubMenuOpen = true
                    this.$nextTick(() => {
                        this.$refs.mobileSubMenu.focus()
                    })
                },
                isMobileMainMenuOpen: false,
                openMobileMainMenu() {
                    this.isMobileMainMenuOpen = true
                    this.$nextTick(() => {
                        this.$refs.mobileMainMenu.focus()
                    })
                },
            }
        }
    </script>

    @yield('js')


</body>

</html>
