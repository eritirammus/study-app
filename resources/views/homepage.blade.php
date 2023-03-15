<x-app-layout>

    <div class="py-12">
        <div class="flex items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white divide-solid divide-y divide-slate-500 dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="flex text-2xl justify-between text-left">
                    <img src="../../images/20220806_200504.jpg" class="m-8 w-96 h-96 rounded-full">
                    <div class="p-5 space-y-4 dark:text-gray-100">
                        <p>
                            Hello! My name is Kevin, I'm a junior web developer with a passion for creating functional and visually appealing websites. 
                            My experience this far has been focused on HTML & CSS, JavaScript, PHP and I'm constantly expanding my skill set by learning new technologies and frameworks.
                        </p>
                        <p> 
                            I believe that a well-designed website can have a significant impact on a business's success, and I'm dedicated to delivering high-quality work that meets my client's needs. 
                            I'm driven by a desire to continuously improve and stay up-to-date with the latest developments in web development. 
                        </p>
                        <p>
                            In my free time, I enjoy spending time with friends, play video games and learn new things every day. 
                        </p>       
                    </div>
                </div>
                    <div class="divide-solid divide-y divide-slate-500 mx-5 full">
                        <div class="flex md:flex-row md:space-x-4 px-5 w-full">
                            <div class="flex w-full">
                                <div class="flex justify-center text-2xl font-bold text-white min-w-full">
                                    <div class="">
                                        <div class="flex py-5">
                                            <a href="https://github.com/eritirammus/" class="transform hover:scale-110 transition duration-200" rel="noopener noreferrer" target="_blank">
                                                <img src="../../images/icons/Github-dark.png" class="hidden dark:block w-16 h-16">
                                                <img src="../../images/icons/Github-light.png" class="dark:hidden w-16 h-16">
                                            </a>
                                            <a href="https://www.linkedin.com/in/kevin-zukker-162544265/" class="transform hover:scale-110 transition duration-200" rel="noopener noreferrer" target="_blank">

                                                <img src="../../images/icons/LinkedIn-dark.png" class="hidden dark:block w-16 h-16">
                                                <img src="../../images/icons/LinkedIn-light.png" class="dark:hidden w-16 h-16">
                                            </a>
                                            <a href="mailto:kevin_zukker@icloud.com" class="transform hover:scale-110 transition duration-200" rel="noopener noreferrer" target="_blank">
                                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 text-black dark:text-white">
                                                    <path stroke-linecap="round" 
                                                    stroke-linejoin="round" 
                                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" 
                                                    />
                                                </svg>
                                            </a>

                                            </svg>
                                        </div>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive Home page -->
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
        </div>
    </div>
</x-app-layout>