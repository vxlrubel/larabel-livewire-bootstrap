<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="dark">

<head>
    @include('partials.head')
</head>

<body>

    <header class="clearfix">
        <div class="container-fluid header-top bg-primary d-lg-none text-end">

            <button class="btn btn-sm btn-primary">Menu Toggle</button>
            <div class="dropdown d-inline-flex">
                <button class="btn btn-primary btn-sm dropdown-toggle"
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
        <aside class="sidebar border-end px-4">
            <div class="logo border-bottom overflow-hidden">
                <h1 class="fs-2 text-uppercase m-0">logo</h1>
            </div>
            <div class="menu-content py-3">menu content</div>

            <div class="profile-bottom border-top pb-2">
                <div class="btn-group dropup w-100">
                    <button type="button"
                        class="btn btn-light w-100 dropdown-toggle px-0 text-left"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropup
                    </button>
                    <ul class="dropdown-menu">
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
        <span class="fw-bold">site_content: </span>
        {{ $slot }}
        @fluxScripts
    </main>

    {{-- <flux:sidebar sticky
        stashable
        class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden"
            icon="x-mark" />

        <a href="{{ route('dashboard') }}"
            class="me-5 flex items-center space-x-2 rtl:space-x-reverse"
            wire:navigate>
            <x-app-logo />
        </a>

        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Platform')"
                class="grid">
                <flux:navlist.item icon="home"
                    :href="route('dashboard')"
                    :current="request()->routeIs('dashboard')"
                    wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="folder-git-2"
                href="https://github.com/laravel/livewire-starter-kit"
                target="_blank">
                {{ __('Repository') }}
            </flux:navlist.item>

            <flux:navlist.item icon="book-open-text"
                href="https://laravel.com/docs/starter-kits#livewire"
                target="_blank">
                {{ __('Documentation') }}
            </flux:navlist.item>
        </flux:navlist>

        <!-- Desktop User Menu -->
        <flux:dropdown class="hidden lg:block"
            position="bottom"
            align="start">
            <flux:profile :name="auth()->user()->name"
                :initials="auth()->user()->initials()"
                icon:trailing="chevrons-up-down" />

            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')"
                        icon="cog"
                        wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST"
                    action="{{ route('logout') }}"
                    class="w-full">
                    @csrf
                    <flux:menu.item as="button"
                        type="submit"
                        icon="arrow-right-start-on-rectangle"
                        class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar> --}}

    <!-- Mobile User Menu -->
    {{-- <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden"
            icon="bars-2"
            inset="left" />

        <flux:spacer />

        <flux:dropdown position="top"
            align="end">
            <flux:profile :initials="auth()->user()->initials()"
                icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')"
                        icon="cog"
                        wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST"
                    action="{{ route('logout') }}"
                    class="w-full">
                    @csrf
                    <flux:menu.item as="button"
                        type="submit"
                        icon="arrow-right-start-on-rectangle"
                        class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header> --}}




</body>

</html>
