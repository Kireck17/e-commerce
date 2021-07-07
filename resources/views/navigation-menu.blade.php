<nav x-data="{ open: false }" class="bg-white border-b border-turquoise-dark">
    {{-- Navegación normal --}}
    <div class="hidden lg:flex lg:justify-between lg:items-center lg:h-24">
        <div class="px-12">
            <a href="">
                <img class="h-16 w-auto" src="{{asset('storage/logos/originalsaxcar.png')}}" alt="">
            </a>
        </div>
        <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
            <x-nav-links.normal href="{{route('lobby')}}" :active="request()->routeIs('lobby')">
                {{__('Inicio')}}
            </x-nav-links.normal>
            <div x-data="{ open:false }">
                <button @click="open = !open"
                        class="text-lg font-semibold text-turquoise-dark px-3 py-2 flex justify-center items-center focus:outline-none" >
                    {{__('Categorias')}}
                    <i class="ml-3" x-bind:class="{'fas fa-caret-up':open,'fas fa-caret-down':!open}"></i>
                </button>
                <div
                    :hidden="!open"
                    class="absolute overflow-hidden rounded-bl-md rounded-br-md border-l border-b border-r border-gray-300 mt-3 z-40 bg-white w-96">
                    <div class="grid grid-cols-2 gap-1">
                        @foreach(App\Models\Category::has('product')->get()->unique('name') as $category)
                            <a class="p-1 uppercase font-bold text-xs" href="{{ route('category.show',['category' => $category->id]) }}"> {{ __($category->name) }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <x-nav-links.normal href="/" :active="request()->routeIs('prototipo.mark')">
                {{__('Tutoriales')}}
            </x-nav-links.normal>

            <x-nav-links.normal href="/" :active="request()->routeIs('photo.edit')">
                {{__('Contactanos')}}
            </x-nav-links.normal>
            <x-nav-links.normal href="/ShoppingCart" >
               <i class="fa fa-shopping-cart"></i>
            </x-nav-links.normal>
        </div>
        @auth
            <div class="hidden sm:flex sm:items-center sm:mr-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-bold rounded-md text-white bg-transparent hover:text-gray-900 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>
        @endauth
        @guest
            <div class="hidden sm:flex sm:items-center sm:mr-6">
                <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                    {{__('Iniciar sesion')}}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                    {{__('Registrarse')}}
                </x-jet-nav-link>
            </div>
        @endguest
    </div>
    {{-- Navegación responsive --}}
    <div class="flex flex-col lg:hidden">
        <div class="flex justify-between items-center">
            <div class="px-8">
                <a href="">
                    <img class="h-16 w-auto" src="{{asset('storage/logos/originalsaxcar.png')}}" alt="">
                </a>
            </div>
            <!-- Hamburger -->
            <div class="mx-6 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-turquoise-dark focus:outline-none focus:text-turquoise-light">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- Menú de hamburguesa --}}
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="flex flex-col justify-start space-y-0.5">
            <x-nav-links.responsive href="">
                {{ __('Tablero') }}
            </x-nav-links.responsive>
            
        </div>
        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-6">
                <div class="flex items-center py-3 px-6 bg-white">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="">
                    <!-- Account Management -->
                    <x-nav-links.responsive href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-nav-links.responsive>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-nav-links.responsive href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-nav-links.responsive>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-jet-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-jet-responsive-nav-link>
                        @endcan

                        <div class="border-t border-gray-200"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                        @endforeach
                    @endif
                </div>
            </div>
        @endauth
        @guest
            <div class="pt-6">
                <x-nav-links.responsive href="{{ route('login') }}" :active="request()->routeIs('login')">
                    {{ __('Iniciar sesion') }}
                </x-nav-links.responsive>
                <x-nav-links.responsive href="{{ route('register') }}" :active="request()->routeIs('register')">
                        {{ __('Registrarse') }}
                </x-nav-links.responsive>
            </div>
        @endguest
    </div>
</nav>