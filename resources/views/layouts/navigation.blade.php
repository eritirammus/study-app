<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="flex justify-center max-w-7xl mx-auto px-4">
        <div class="flex h-20">
            <div class="flex">
                <!-- Logo -->
                <!-- <div class="shrink-0 flex items-center">
                        <div class="flex block h-9 w-auto fill-current text-gray-800 dark:text-gray-200">
                            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRzDDMSFGwnJGGSKShLRhzQWXPwNRTvlRthgdPgwjkBKVSjbdTMTxntdJGPcCPBqPjzGKhpm">
                                <img src="../../Images/Gmail.png" class="w-8">
                            </a>
                        </div>
                    </a>
                </div> -->

                <!-- Navigation Links -->
                <div class="flex start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
                        {{ __('About me') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <x-nav-link :href="route('studentfirm')" :active="request()->routeIs('studentfirm')">
                        {{ __('Student Firm') }}
                    </x-nav-link>
                    <x-nav-link :href="route('cv')" :active="request()->routeIs('cv')">
                        {{ __('CV') }}
                    </x-nav-link>
                    <x-nav-link :href="route('õpitee')" :active="request()->routeIs('õpitee')">
                        {{ __('Õpitee') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="">
            <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
                {{ __('About me') }}
            </x-nav-link>
            <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">
                {{ __('Projects') }}
            </x-nav-link>
            <x-nav-link :href="route('studentfirm')" :active="request()->routeIs('studentfirm')">
                {{ __('Student Firm') }}
            </x-nav-link>
            <x-nav-link :href="route('cv')" :active="request()->routeIs('cv')">
                {{ __('CV') }}
            </x-nav-link>
        </div>
    </div>
</nav>
