<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the TinyMCE package with the
                Vue.js framework</h2>
        </div>

        <!-- Warning Box -->
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <div
                class="bg-yellow-100 text-yellow-800 rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-3 flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-xs sm:text-sm"></i>
            </div>
            <p class="text-yellow-800 text-sm sm:text-base">
                <strong>Tiny does not recommend bundling tinymce and tinymce-vue with a module loader.</strong>
                Bundling these packages can be complex and error prone.
            </p>
        </div>

        <!-- Description -->
        <div class="mb-3 sm:mb-4 md:mb-5">
            <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
                <span class="flex-shrink-0 mr-2 w-4">
                    <i class="fas fa-info-circle text-blue-500 mt-0.5"></i>
                </span>
                <span class="flex-1 min-w-0">
                    The Official TinyMCE Vue.js component integrates TinyMCE into Vue.js projects, providing a powerful
                    WYSIWYG editor within the Vue ecosystem. This procedure creates a basic Vue.js application
                    containing a TinyMCE editor.
                </span>
            </p>
        </div>

        <!-- Version Information -->
        <div class="mb-3 sm:mb-4 md:mb-5">
            <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
                <span class="flex-shrink-0 mr-2 w-4">
                    <i class="fas fa-tag text-green-500 mt-0.5"></i>
                </span>
                <span class="flex-1 min-w-0">
                    <strong>Version 4 and later</strong> of the
                    <code
                        class="bg-gray-100 px-2 py-1 rounded text-xs font-mono inline-block ml-1 mr-1">tinymce-vue</code>
                    package supports <strong>Vue.js 3.x</strong>, but does not support Vue.js 2.x.
                    For Vue.js 2.x applications, use
                    <code
                        class="bg-gray-100 px-2 py-1 rounded text-xs font-mono inline-block ml-1">tinymce-vue version 3</code>.
                </span>
            </p>
        </div>

        <!-- Storybook Link -->
        <div class="mb-3 sm:mb-4 md:mb-5">
            <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
                <span class="flex-shrink-0 mr-2 w-4">
                    <i class="fas fa-external-link-alt text-purple-500 mt-0.5"></i>
                </span>
                <span class="flex-1 min-w-0">
                    For examples of the TinyMCE Vue.js integration, visit the
                    <a href="#" class="text-blue-600 hover:underline font-medium inline-flex items-center">
                        <span>tinymce-vue storybook</span>
                        <i class="fas fa-arrow-up-right-from-square ml-1 text-xs"></i>
                    </a>.
                </span>
            </p>
        </div>

        <!-- Live Demo Section -->
        <div
            class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-lg p-4 sm:p-6 mb-4 sm:mb-6">
            <div class="flex items-start mb-3 sm:mb-4">
                <div class="flex-shrink-0 mr-3">
                    <div
                        class="bg-blue-500 text-white rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-play-circle text-xl sm:text-2xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2">TinyMCE Vue.js integration live
                        examples</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-4">
                        For examples of the TinyMCE Vue.js 3.x integration:
                    </p>
                    <div class="space-y-3 sm:space-y-4 pl-6 border-l-4 border-blue-300">
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">1.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Clone the <code
                                        class="bg-gray-100 px-2 py-1 rounded text-xs font-mono">tinymce/tinymce-vue</code>
                                    GitHub repository:</p>
                                <code
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto">git clone https://github.com/tinymce/tinymce-vue.git</code>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">2.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Install the required packages using yarn:
                                </p>
                                <code
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto">yarn install</code>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">3.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Start the demo server:</p>
                                <code
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto">yarn demo</code>
                                <p class="text-blue-600 text-sm sm:text-base mt-2 font-medium flex items-center">
                                    <i class="fas fa-globe text-blue-500 mr-2"></i>
                                    The tinymce-vue demo is now running. Visit: <code
                                        class="bg-gray-100 px-2 py-1 rounded text-xs ml-1">http://localhost:3001</code>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <div class="space-y-3 sm:space-y-4 mt-3 sm:mt-4">
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                    <i class="fas fa-check-circle text-green-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-600 text-sm sm:text-base">Node.js LTS (recommended)</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                    <i class="fas fa-check-circle text-green-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-600 text-sm sm:text-base">Vue CLI (optional)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started</h2>
        </div>

        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1: Create Vue Project -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-plus text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Vue Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Vue project named <code
                            class="bg-gray-100 px-1 rounded text-xs">tinymce-vue-demo</code> using the Create Vue Tool.
                    </p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm create vue@3</code>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2 flex items-start">
                        <i class="fas fa-info-circle text-blue-500 mr-2 mt-0.5"></i>
                        <span class="font-medium">For Vue.js 2.x:</span> <code
                            class="bg-gray-100 px-1 rounded text-xs ml-1">npm create vue@2</code>
                        <span class="ml-2">As per the Vue FAQ, Vue 2 will reach End of Life by the end of 2023.</span>
                    </p>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Follow the prompts and type <code
                            class="bg-gray-100 px-1 rounded text-xs">tinymce-vue-demo</code> as the project name.</p>
                </div>
            </div>

            <!-- Step 2: Change Directory -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-folder-open text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Change Directory</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Navigate to the newly created directory.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">cd tinymce-vue-demo</code>
                </div>
            </div>

            <!-- Step 3: Install TinyMCE packages -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install TinyMCE Packages</h3>
                    <div class="mt-2 space-y-3">
                        <div class="flex items-start bg-gray-50 p-3 rounded-lg">
                            <div class="flex-shrink-0">
                                <i class="fas fa-code text-green-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-600 text-xs sm:text-sm font-medium">For Vue.js 3.x users:</p>
                                <code
                                    class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 block font-mono">npm install tinymce "@tinymce/tinymce-vue"</code>
                            </div>
                        </div>
                        <div class="flex items-start bg-gray-50 p-3 rounded-lg">
                            <div class="flex-shrink-0">
                                <i class="fas fa-code text-green-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-600 text-xs sm:text-sm font-medium">For Vue.js 2.x users:</p>
                                <code
                                    class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 block font-mono">npm install tinymce "@tinymce/tinymce-vue@^3"</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Update App.vue -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update App.vue</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3 sm:mb-5">Open <code
                            class="bg-gray-100 px-1 rounded text-xs">src/App.vue</code> and add TinyMCE configuration:
                    </p>

                    <!-- Responsive Code Block for App.vue -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mb-4">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">App.vue</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-purple-400">import</span> <span class="text-gray-300">Editor</span>
                                <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'@tinymce/tinymce-vue'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span><span
                                    class="text-purple-400">&lt;script setup&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span> <span
                                    class="text-purple-400">import</span> <span class="text-gray-300">Editor</span>
                                <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'@tinymce/tinymce-vue'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span><span
                                    class="text-purple-400">&lt;/script&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span><span
                                    class="text-purple-400">&lt;template&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span> <span
                                    class="text-gray-300">&lt;main</span> <span class="text-blue-400">id</span><span
                                    class="text-gray-300">=</span><span class="text-green-400">"sample"</span><span
                                    class="text-gray-300">&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span> <span
                                    class="text-gray-300">&lt;img</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span> <span
                                    class="text-blue-400">alt</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"Vue logo"</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span> <span
                                    class="text-blue-400">class</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"logo"</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span> <span
                                    class="text-blue-400">src</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"./assets/logo.svg"</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span> <span
                                    class="text-blue-400">width</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"125"</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span> <span
                                    class="text-blue-400">height</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"125"</span> /></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span> <span
                                    class="text-gray-300">&lt;editor</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span> <span
                                    class="text-blue-400">id</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"uuid"</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span> <span
                                    class="text-blue-400">licenseKey</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"gpl"</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span> <span
                                    class="text-blue-400">:init</span><span class="text-gray-300">="{"</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span> <span
                                    class="text-blue-400">plugins</span><span class="text-gray-300">: '</span><span
                                    class="text-green-400">advlist anchor autolink charmap code</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span> <span
                                    class="text-green-400">fullscreen help image insertdatetime link lists media</span>
                            </div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span> <span
                                    class="text-green-400">preview searchreplace table visualblocks
                                    wordcount'</span><span class="text-gray-300">,</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span> <span
                                    class="text-blue-400">toolbar</span><span class="text-gray-300">: '</span><span
                                    class="text-green-400">undo redo | styles |</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span> <span
                                    class="text-green-400">bold italic underline strikethrough |</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span> <span
                                    class="text-green-400">alignleft aligncenter alignright alignjustify |</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">26</span> <span
                                    class="text-green-400">bullist numlist outdent indent | link image'</span><span
                                    class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">27</span> <span
                                    class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                                    class="text-orange-400">500</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">28</span> <span
                                    class="text-gray-300">}"</span> /></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">29</span> <span
                                    class="text-gray-300">&lt;/main&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">30</span><span
                                    class="text-purple-400">&lt;/template&gt;</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5: Test Application -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-vial text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test the Application</h3>
                    <div class="mt-1 sm:mt-2 space-y-1 sm:space-y-2">
                        <p class="text-gray-600 text-xs sm:text-sm">Start the development server:</p>
                        <code
                            class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm inline-block font-mono flex items-center">
                            <i class="fas fa-terminal text-gray-500 mr-2"></i>npm run dev
                        </code>
                        <p class="text-gray-600 text-xs sm:text-sm mt-2">Stop the server with <kbd
                                class="bg-gray-200 px-1 sm:px-2 py-0.5 sm:py-1 rounded text-xs flex items-center">
                                <i class="fas fa-keyboard mr-1"></i>Ctrl+C
                            </kbd></p>
                    </div>
                </div>
            </div>

            <!-- Bundling Note -->
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mt-4 sm:mt-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                        <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <h3 class="text-sm font-medium text-yellow-800 mb-2">Bundling TinyMCE</h3>
                        <p class="text-yellow-700 text-xs sm:text-sm">
                            To bundle TinyMCE with the Vue.js application using a module loader, import the required
                            packages:
                        </p>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm mt-2 overflow-x-auto border border-gray-700">
                            <div class="space-y-1">
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                        class="text-green-400">/* Add the tinymce-vue wrapper to the bundle */</span>
                                </div>
                                <div class="flex flex-wrap"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                        class="text-purple-400">import</span> <span class="text-gray-300">{ </span><span
                                        class="text-yellow-300">Editor</span> <span class="text-gray-300">}</span> <span
                                        class="text-purple-400">from</span> <span
                                        class="text-green-400">'@tinymce/tinymce-vue'</span><span
                                        class="text-gray-300">;</span></div>
                            </div>
                        </div>
                        <p class="text-yellow-700 text-xs sm:text-sm mt-2">
                            For complete bundling instructions, see: <a href="#"
                                class="text-blue-600 hover:underline font-medium">Bundling TinyMCE</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deployment Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Deploying the Application</h3>
            </div>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">The application will require further configuration
                before it can be deployed to a production environment. For information on configuring the application
                for deployment, see: <a href="#" class="text-blue-600 hover:underline">Vue.js - Production
                    Deployment</a>.</p>
        </div>
    </section>

    <!-- Next Steps Section -->
    <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
        <div class="flex items-center mb-3 sm:mb-4">
            <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Next Steps</h3>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start bg-blue-50 rounded-lg p-3 sm:p-4">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-book-open text-blue-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">TinyMCE Vue.js Examples</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For examples of the TinyMCE integration, see: <a href="#"
                            class="text-blue-600 hover:underline font-medium">the tinymce-vue storybook</a>
                    </p>
                </div>
            </div>
            <div class="bg-blue-50 rounded-lg p-3 sm:p-4">
                <div class="flex items-start mb-2">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-cogs text-blue-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 text-sm sm:text-base font-medium">Customization Resources</p>
                    </div>
                </div>
                <div class="space-y-2 sm:space-y-3 ml-8 sm:ml-9">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fas fa-code text-blue-400 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">TinyMCE Vue.js integration:</span>
                                <a href="#" class="text-blue-600 hover:underline ml-1">Vue.js framework Technical
                                    Reference</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fas fa-tools text-blue-400 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">TinyMCE:</span>
                                <a href="#" class="text-blue-600 hover:underline ml-1">Basic setup</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fab fa-vuejs text-green-400 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">Vue.js Application:</span>
                                <a href="#" class="text-blue-600 hover:underline ml-1">Vue.js Documentation</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>