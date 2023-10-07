<x-app-layout>
    <div class="py-12">
        <div class="flex items-center max-w-7xl mx-auto">
            <div class="bg-white divide-solid divide-y divide-slate-500 dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="flex text-2xl justify-between text-left">
                    <img src="../../images/20220806_200504.jpg" class="m-8 w-80 h-80 rounded-full">
                    <div class="p-5 space-y-4 dark:text-gray-100">
                        <p>
                            Hello! My name is Kevin, I'm a junior web developer with a passion for creating functional and visually appealing websites. 
                            My experience this far has been focused on HTML & CSS, JavaScript, PHP and I'm constantly expanding my skill set by learning new technologies and frameworks.
                        </p>
                        <p> 
                            I believe that a well-designed website can have a significant impact on a business's success and I'm dedicated to delivering high-quality work that meets my client's needs. 
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
                                        <div class="flex py-5 gap-4">
                                            <a href="https://github.com/eritirammus/" class="transform hover:scale-110 transition duration-200" rel="noopener noreferrer" target="_blank">
                                               <x-github class="fill-black dark:fill-white w-12 h-12"/>
                                            </a>
                                            <a href="https://www.linkedin.com/in/kevin-zukker-162544265/" class="transform hover:scale-110 transition duration-200" rel="noopener noreferrer" target="_blank">
                                                <x-linkedin class="fill-black dark:fill-white w-12 h-12"/>
                                            </a>
                                            <a href="mailto:kevinzukker@gmail.com" class="transform hover:scale-110 transition duration-200" rel="noopener noreferrer" target="_blank">
                                                <x-mail class="fill-black dark:fill-white w-12 h-12"/>
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
        </div>
    </div>
</x-app-layout>