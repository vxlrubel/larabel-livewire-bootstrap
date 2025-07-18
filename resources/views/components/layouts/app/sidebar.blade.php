<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="dark">

<head>
    @include('partials.head')
</head>

<body>

    <header class="clearfix"
        id="header"
        v-cloak>
        <div class="container-fluid header-top d-lg-none">

            <div class="d-flex justify-content-between align-items-center">
                <div class="">
                    <a href="/"
                        target="_blank"
                        class="btn btn-sm text-decoration-none d-inline-flex align-items-center text-prefers-color-scheme gap-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                height="20px"
                                viewBox="0 -960 960 960"
                                width="20px"
                                fill="currentColor">
                                <path
                                    d="M802-107 696-213v81h-72v-204h204v72h-81l106 106-51 51ZM480-96q-79 0-149-30t-122.5-82.5Q156-261 126-331T96-480q0-80 30-149.5t82.5-122Q261-804 331-834t149-30q80 0 149.5 30t122 82.5Q804-699 834-629.5T864-480q0 18-2 36t-5 36h-74q4-18 6.5-36t2.5-36q0-18-2.5-36t-6.5-36H622q2 17 2.5 35t.5 35q0 19-1 37t-2 37h-73q1-19 2-37.5t1-37.5q0-17-.5-34.5T549-552H411q-2 18-2.5 36t-.5 36q0 18 .5 36t2.5 36h93v72h-84q8 45 22 87.5t38 80.5q18 0 36.5-2t35.5-7v74q-17 5-35.5 6T480-96ZM177-408h161q-2-17-2.5-35t-.5-35q0-19 .5-37t2.5-37H177q-4 18-6.5 36t-2.5 36q0 18 2.5 36t6.5 36Zm27-216h143q6-40 16-79t26-76q-60 18-108 58t-77 97Zm186 443q-18-37-27.5-76T347-336H204q29 57 77 97t109 58Zm30-443h120q-8-44-21.5-86T480-789q-25 37-38 79t-22 86Zm193 0h143q-29-57-77-97t-108-58q16 37 26 76t16 79Z" />
                            </svg>
                        </span>
                        <span>Visit Website</span>
                    </a>
                </div>
                <div class="text-end">
                    <button class="btn btn-sm text-prefers-color-schemev border-0"
                        @click.stop="toggle = !toggle">
                        <span v-if="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                height="20px"
                                viewBox="0 -960 960 960"
                                width="20px"
                                class="text-prefers-color-scheme"
                                fill="currentColor">
                                <path
                                    d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z" />
                            </svg>
                        </span>
                        <span v-else>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                height="20px"
                                viewBox="0 -960 960 960"
                                width="20px"
                                class="text-prefers-color-scheme"
                                fill="currentColor">
                                <path d="M144-264v-72h672v72H144Zm0-180v-72h672v72H144Zm0-180v-72h672v72H144Z" />
                            </svg>
                        </span>
                    </button>
                    <div class="dropdown d-inline-flex">
                        <button class="btn text-prefers-color-scheme btn-sm dropdown-toggle border-0 shadow-none"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="#">Action</a></li>
                            <li><a class="dropdown-item"
                                    href="#">Another action</a></li>
                            <li><a class="dropdown-item"
                                    href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <aside class="sidebar px-4"
            :class="{ 'show': toggle }">
            <div class="logo border-bottom overflow-hidden">
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('img/livewire.png') }}"
                        alt="logo"
                        class="img-fluid">
                </a>
            </div>
            <div class="menu-content hide-scrollbar py-3">
                <ul class="list-unstyled d-grid sidebar-menu m-0 gap-1 p-0">

                    <li>
                        <a href="{{ url('/dashboard') }}">
                            <span class="icon-item">
                                <i class="fa-duotone fa-solid fa-grid-2"></i>
                            </span>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="icon-item">
                                <i class="fa-duotone fa-user"></i>
                            </span>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="icon-item">
                                <i class="fa-duotone fa-envelope"></i>
                            </span>
                            Messages
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="icon-item">
                                <i class="fa-duotone fa-gear"></i>
                            </span>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="icon-item">
                                <i class="fa-duotone fa-bell"></i>
                            </span>
                            Notifications
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="icon-item">
                                <i class="fa-duotone fa-arrow-right-from-bracket"></i>
                            </span>
                            Logout
                        </a>
                    </li>

                </ul>
            </div>

            <div class="profile-bottom border-top pb-2">
                <div class="btn-group dropup w-100">
                    <button type="button"
                        class="btn w-100 dropdown-toggle text-prefers-color-scheme border-0 px-0 text-left shadow-none"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Profile
                    </button>
                    <ul class="dropdown-menu end-0 start-0">
                        <li><a class="dropdown-item"
                                href="#">Action</a></li>
                        <li><a class="dropdown-item"
                                href="#">Another action</a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </header>

    <main class="main px-xxl-5 p-4">
        {{ $slot }}
    </main>


    <script src="{{ asset('js/vue.global.js') }}"></script>

    <script>
        const {
            createApp
        } = Vue;
        const Header = createApp({
            data() {
                return {
                    toggle: false,
                }
            },
            mounted() {
                if (this.toggle) {
                    return
                }

                document.body.addEventListener('click', (e) => {
                    if (!this.toggle) {
                        return
                    }
                    if (e.target.closest('.sidebar')) {
                        return;
                    }

                    if (!this.$el.contains(e.target)) {
                        this.toggle = false;
                    }
                });
            }
        });

        Header.mount('#header')
    </script>

    @stack('scripts')



</body>

</html>
