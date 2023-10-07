<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="flex justify-center max-w-7xl mx-auto px-4">
        <div class="flex h-20">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="flex start space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
                        {{ __('About me') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">
                        {{ __('Projects') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>

</nav>
