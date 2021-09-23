<!-- Top navigation bar -->

<nav class="navbar navbar-expand-md navbar-light bg-danger border-bottom sticky-top">
    <div class="container">
        <!-- Sidebar Collapse button -->
        <div>
            <button type="button" id="sidebarCollapse">
                <span>Toggle Sidebar</span>
            </button>
        </div>


        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <x-application-logo width="36"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- New Receipt -->
                @if (session('newReceipt'))
                    <span class="p-2">New receipt:</span>

                    <span class="p-2" id="navbar_place">{{session('newReceipt')->place}}</span>

                    <span class="p-2">Time: </span>

                    <span class="p-2" id="navbar_time">{{session('newReceipt')->date}}</span>
                @endif

            <!-- Settings Dropdown -->
                @auth
                    <x-dropdown id="settingsDropdown">
                        <x-slot name="trigger">
                            {{ Auth::user()->name }}
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth
            </ul>
        </div>
    </div>
</nav>
