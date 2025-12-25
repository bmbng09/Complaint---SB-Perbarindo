<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- LEFT -->
            <div class="flex">
                <!-- Logo / Title -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="text-lg font-bold text-green-700">
                        Form Pengaduan SIP & Sharing Bandwidth
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ url('/') }}"
                       class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium
                       {{ request()->is('/') ? 'border-green-600 text-green-700' : 'border-transparent text-gray-500 hover:text-green-700 hover:border-green-300' }}">
                        Beranda
                    </a>

                    <a href="{{ url('/pengaduan') }}"
                       class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium
                       {{ request()->is('pengaduan') ? 'border-green-600 text-green-700' : 'border-transparent text-gray-500 hover:text-green-700 hover:border-green-300' }}">
                        Laporkan Kendala
                    </a>

                    @auth
                        <a href="{{ route('dashboard') }}"
                           class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium
                           {{ request()->is('dashboard') ? 'border-green-600 text-green-700' : 'border-transparent text-gray-500 hover:text-green-700 hover:border-green-300' }}">
                            Dashboard
                        </a>
                    @endauth
                </div>
            </div>

            <!-- RIGHT -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    <!-- User Dropdown -->
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-700 hover:text-green-700 focus:outline-none transition">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Logout
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <!-- Login Button -->
                    <a href="{{ route('login') }}"
                       class="text-sm font-semibold text-white bg-green-600 hover:bg-green-700 px-4 py-2 rounded transition">
                        Login Admin
                    </a>
                @endauth
            </div>

            <!-- Mobile Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-green-700 hover:bg-gray-100 focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }"
                              class="inline-flex"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }"
                              class="hidden"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}"
               class="block pl-3 pr-4 py-2 text-base font-medium text-gray-600 hover:text-green-700">
                Beranda
            </a>

            <a href="{{ url('/pengaduan') }}"
               class="block pl-3 pr-4 py-2 text-base font-medium text-gray-600 hover:text-green-700">
                Laporkan Kendala
            </a>

            @auth
                <a href="{{ route('dashboard') }}"
                   class="block pl-3 pr-4 py-2 text-base font-medium text-gray-600 hover:text-green-700">
                    Dashboard
                </a>
            @endauth
        </div>
    </div>
</nav>
