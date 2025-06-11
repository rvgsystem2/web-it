<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 h-24 z-50 relative">
    <!-- Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 bg-white">
        <div class="flex justify-between h-16">
            <!-- Left: Logo & Main Nav -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        {{-- <x-application-logo class="h-9 w-auto text-gray-800" /> --}}
                    </a>
                </div>

                <!-- Navigation -->
                <div class="hidden sm:flex sm:items-center sm:ms-10 text-sm font-medium text-gray-700 space-x-6" x-data="{ open: false }">

                    <!-- Dashboard (Outside Dropdown) -->
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <i class="fas fa-tachometer-alt mr-1"></i> Dashboard
                    </x-nav-link>

                  <!-- Dropdown Navigation -->
<div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 w-full rounded-md focus:outline-none">
        <i class="fas fa-briefcase mr-2"></i> Job Module
        <svg class="ml-auto h-4 w-4 transform transition-transform duration-200"
             :class="{ 'rotate-180': open }"
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <div x-show="open" @click.away="open = false"
         x-transition
         class="absolute z-10 mt-2 w-48 bg-white rounded-md shadow-lg border border-gray-200">
        <x-nav-link :href="route('category.index')" :active="request()->routeIs('category*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-list mr-2"></i> Category
        </x-nav-link>

        <x-nav-link :href="route('job.index')" :active="request()->routeIs('job*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-briefcase mr-2"></i> Job Listing
        </x-nav-link>

        <x-nav-link :href="route('application.index')" :active="request()->routeIs('application*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-file-alt mr-2"></i> Job Application
        </x-nav-link>
    </div>
</div>

                    <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact*')">
                        <i class="fas fa-tachometer-alt mr-1"></i> Contact
                    </x-nav-link>


                    <x-nav-link :href="route('services.index')" :active="request()->routeIs('services*')">
                        <i class="fas fa-cogs mr-1"></i> ServicesTitle
                    </x-nav-link>
                    <x-nav-link :href="route('service-features.index')" :active="request()->routeIs('service-features*')">
                        <i class="fas fa-star mr-1"></i> Service Features
                    </x-nav-link>
                    <x-nav-link :href="route('testimonials.index')" :active="request()->routeIs('testimonial*')">
                        <i class="fas fa-comments mr-1"></i> Testimonials
                    </x-nav-link>

                    <x-nav-link :href="route('logos.index')" :active="request()->routeIs('logos*')">
                        <i class="fas fa-image mr-1"></i> Logos
                    </x-nav-link>


                   <!-- Website Content Dropdown -->
<div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 w-full rounded-md focus:outline-none">
        <i class="fas fa-globe mr-2"></i> Website Content
        <svg class="ml-auto h-4 w-4 transform transition-transform duration-200"
             :class="{ 'rotate-180': open }"
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <div x-show="open" @click.away="open = false"
         x-transition
         class="absolute z-10 mt-2 w-56 bg-white rounded-md shadow-lg border border-gray-200">

        <x-nav-link :href="route('banner.index')" :active="request()->routeIs('banner*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-image mr-2"></i> Banners
        </x-nav-link>

        <x-nav-link :href="route('about.index')" :active="request()->routeIs('about*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-info-circle mr-2"></i> About
        </x-nav-link>
        <x-nav-link :href="route('teams.index')" :active="request()->routeIs('team*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-users mr-2"></i> Team
        </x-nav-link>

        <x-nav-link :href="route('faqs.index')" :active="request()->routeIs('faq*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-question-circle mr-2"></i> FAQs
        </x-nav-link>

        <x-nav-link :href="route('blogs.index')" :active="request()->routeIs('blog*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-blog mr-2"></i> Blogs
        </x-nav-link>

        <x-nav-link :href="route('chooses.index')" :active="request()->routeIs('chooses*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-check-circle mr-2"></i> Why Choose Us
        </x-nav-link>

        <x-nav-link :href="route('choose-features.index')" :active="request()->routeIs('choose-features*')"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-star mr-2"></i> Choose Features
        </x-nav-link>
    </div>
</div>







                    <!-- Dropdown for Roles, Permissions, Users -->
                    {{-- <div class="relative">
                        <button @click="open = !open" class="flex items-center space-x-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">
                            <i class="fas fa-users-cog text-gray-600"></i>
                            <span>Admin Tools</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false" x-cloak
                            class="absolute z-50 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">

                            @can('view permission')
                            <x-nav-link :href="route('permission.index')" :active="request()->routeIs('permission.index')" class="block px-4 py-2 text-left">
                                <i class="fas fa-key mr-1"></i> Permissions
                            </x-nav-link>
                            @endcan

                            @can('view roles')
                            <x-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')" class="block px-4 py-2 text-left">
                                <i class="fas fa-user-shield mr-1"></i> Roles
                            </x-nav-link>
                            @endcan

                            @can('view users')
                            <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')" class="block px-4 py-2 text-left">
                                <i class="fas fa-users mr-1"></i> Users
                            </x-nav-link>
                            @endcan

                        </div>
                    </div> --}}
                </div>
            </div>



            <!-- Right: Settings -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-600 bg-white hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }} ({{ Auth::user()->roles->pluck('name')->implode(', ') }})</div>
                            <div class="ms-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition"
                    aria-controls="mobile-menu" :aria-expanded="open">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden hidden bg-white z-50" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="fas fa-tachometer-alt mr-1"></i> {{ __('Dashboard') }}
            </x-responsive-nav-link>

            @can('view permission')
            <x-responsive-nav-link :href="route('permission.index')" :active="request()->routeIs('permission.index')">
                <i class="fas fa-key mr-1"></i> Permissions
            </x-responsive-nav-link>
            @endcan

            @can('view roles')
            <x-responsive-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">
                <i class="fas fa-user-shield mr-1"></i> Roles
            </x-responsive-nav-link>
            @endcan

            @can('view users')
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                <i class="fas fa-users mr-1"></i> Users
            </x-responsive-nav-link>
            @endcan


        </div>

        <!-- Mobile Profile Section -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
