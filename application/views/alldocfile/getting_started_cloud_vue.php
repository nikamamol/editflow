<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 ">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo from the Tiny Cloud CDN with the Vue.js framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo Vue.js component integrates Editflo into Vue.js projects. This procedure creates a basic Vue.js application containing a Editflo editor.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            This procedure uses Vue 3 Composition API. If using Vue 2 or Options API, see Vue 2 documentation.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            For examples of the Editflo Vue.js integration, visit the Editflo-vue storybook.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-node-js text-green-500 mr-2"></i>
       <a href="" class="text-blue-500 hover:underline ml-1">Node.js LTS </a> 
        </p>
         <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-vuejs text-green-500 mr-2"></i>
             <a href="" class="text-blue-500 hover:underline ml-1">Vue CLI </a>
        </p>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started</h2>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-plus text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Vue Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Vue.js project named Editflo-vue-demo.</p>
                    <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm create vue@latest Editflo-vue-demo</code>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Dependencies</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Navigate to the project directory and install dependencies.</p>
                    <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">cd Editflo-vue-demo</code>
                    <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono ml-2">npm install</code>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cog text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Vue</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Editflo Vue.js package in your project.</p>
                    <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm install @editflo/editflo-vue</code>
                </div>
            </div>

            <!-- Step 4 -->
          <div class="flex items-start">
    <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
        <i class="fas fa-file-code text-xs sm:text-sm"></i>
    </div>
    <div class="flex-1 min-w-0">
        <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3 sm:mb-5">Using a text editor, open /path/to/Editflo-vue-demo/src/App.vue and replace the contents with:</p>

        <!-- Responsive Code Block -->
        <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
            <div class="flex items-center justify-between mb-3 sm:mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                </div>
                <span class="text-gray-400 text-xs">App.vue</span>
            </div>

            <div class="space-y-1">
                <!-- Template Section -->
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                    <span class="text-gray-300">&lt;</span><span class="text-yellow-300">template</span><span class="text-gray-300">&gt;</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span><span class="text-gray-300">&lt;</span><span class="text-yellow-300">div</span> <span class="text-blue-400">id</span><span class="text-gray-300">=</span><span class="text-green-400">"app"</span><span class="text-gray-300">&gt;</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">&lt;</span><span class="text-yellow-300">Editor</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span><span class="text-blue-400">api-key</span><span class="text-gray-300">=</span><span class="text-green-400">"no-api-key"</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span><span class="text-blue-400">:init</span><span class="text-gray-300">=</span><span class="text-green-400">"init"</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span>
                    <span class="text-blue-400">initial-value</span><span class="text-gray-300">=</span>
                    <span class="text-green-400">"&lt;p&gt;This is the initial content of the editor.&lt;/p&gt;"</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">/&gt;</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span><span class="text-gray-300">&lt;/</span><span class="text-yellow-300">div</span><span class="text-gray-300">&gt;</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                    <span class="text-gray-300">&lt;/</span><span class="text-yellow-300">template</span><span class="text-gray-300">&gt;</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                </div>
                
                <!-- Script Section -->
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                    <span class="text-gray-300">&lt;</span><span class="text-yellow-300">script</span> <span class="text-blue-400">setup</span><span class="text-gray-300">&gt;</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span>
                    <span class="text-purple-400">import</span> <span class="text-gray-300">{ Editor } </span>
                    <span class="text-purple-400">from</span> <span class="text-green-400">'@editflo/editflo-vue'</span><span class="text-gray-300">;</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span>
                    <span class="text-purple-400">const</span> <span class="text-gray-300">init = {</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span>
                    <span class="text-blue-400">height</span><span class="text-gray-300">: </span>
                    <span class="text-orange-400">500</span><span class="text-gray-300">,</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span>
                    <span class="text-blue-400">menubar</span><span class="text-gray-300">: </span>
                    <span class="text-blue-400">false</span><span class="text-gray-300">,</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span>
                    <span class="text-blue-400">plugins</span><span class="text-gray-300">: [</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span>
                    <span class="text-green-400">'advlist'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'autolink'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'lists'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'link'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'image'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'charmap'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'preview'</span><span class="text-gray-300">,</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span>
                    <span class="text-green-400">'anchor'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'searchreplace'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'visualblocks'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'code'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'fullscreen'</span><span class="text-gray-300">,</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span>
                    <span class="text-green-400">'insertdatetime'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'media'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'table'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'code'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'help'</span><span class="text-gray-300">, </span>
                    <span class="text-green-400">'wordcount'</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span>
                    <span class="text-gray-300">],</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span>
                    <span class="text-blue-400">toolbar</span><span class="text-gray-300">: </span>
                    <span class="text-green-400">'undo redo | blocks | '</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span>
                    <span class="text-green-400">'bold italic forecolor | alignleft aligncenter '</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span>
                    <span class="text-green-400">'alignright alignjustify | bullist numlist outdent indent | '</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span>
                    <span class="text-gray-300 ml-6 sm:ml-12"></span>
                    <span class="text-green-400">'removeformat | help'</span><span class="text-gray-300">,</span>
                </div>
                <div class="flex flex-wrap">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">26</span>
                    <span class="text-gray-300 ml-4 sm:ml-8"></span>
                    <span class="text-blue-400">content_style</span><span class="text-gray-300">: </span>
                    <span class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">27</span>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span>
                    <span class="text-gray-300">};</span>
                </div>
                <div class="flex">
                    <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">28</span>
                    <span class="text-gray-300">&lt;/</span><span class="text-yellow-300">script</span><span class="text-gray-300">&gt;</span>
                </div>
            </div>
        </div>

        <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
            <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
            This Vue component will create an application containing a Editflo editor configured with basic features.
        </p>
    </div>
</div>
            <!-- Step 5 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-key text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update the apiKey option</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the apiKey option in the editor element and include your Editflo Cloud API key.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-vial text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test the application</h3>
                    <div class="mt-1 sm:mt-2 space-y-1 sm:space-y-2">
                        <p class="text-gray-600 text-xs sm:text-sm">To start the development server, navigate to the <code class="bg-gray-100 px-1 rounded text-xs">Editflo-vue-demo</code> directory and run:</p>
                        <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm inline-block font-mono flex items-center">
                            <i class="fas fa-terminal text-gray-500 mr-2"></i>npm run dev
                        </code>
                        <p class="text-gray-600 text-xs sm:text-sm">To stop the development server, press <kbd class="bg-gray-200 px-1 sm:px-2 py-0.5 sm:py-1 rounded text-xs flex items-center">
                                <i class="fas fa-keyboard mr-1"></i>Ctrl+C
                            </kbd></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deployment Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Deploying the application</h3>
            </div>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">The application will require further configuration before deployment. For information see: <a href="#" class="text-blue-600 hover:underline">Building for Production</a> or <a href="#" class="text-blue-600 hover:underline">Deploying a Static Site</a>.</p>

            <p class="text-gray-800 font-medium text-sm sm:text-base mb-2 sm:mb-3 flex items-center">
                To deploy to a local HTTP Server:
            </p>

            <div class="space-y-2 sm:space-y-3">
                <div class="flex items-start">
                    <div class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Navigate to the directory and run:</p>
                        <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono">npm run build</code>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Preview the production build:</p>
                        <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono">npm run preview</code>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Copy contents of <code class="bg-gray-100 px-1 rounded text-xs">Editflo-vue-demo/dist</code> to web server root.</p>
                    </div>
                </div>
            </div>

            <p class="text-gray-800 font-medium text-sm sm:text-base mt-3 sm:mt-4 flex items-center">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                The application has now been deployed.
            </p>

            <!-- Note Box -->
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mt-3 sm:mt-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800 flex items-center">
                            <i class="fas fa-sticky-note mr-1"></i>
                            Note
                        </h3>
                        <div class="mt-1 text-xs sm:text-sm text-yellow-700">
                            <p>Additional configuration required for deployment outside web server root directory.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Next Steps Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Next Steps</h3>
            </div>

            <div class="space-y-3 sm:space-y-4">
                <!-- First Item -->
                <div class="flex items-start bg-blue-50 rounded-lg p-3 sm:p-4">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-open text-blue-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo Vue Examples</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For examples of Editflo Vue integration, see:
                            <a href="#" class="text-blue-600 hover:underline font-medium">the Editflo-vue storybook</a>
                        </p>
                    </div>
                </div>

                <!-- Second Item -->
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
                        <!-- Integration -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-code text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Editflo Vue:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">technical reference</a>
                                </p>
                            </div>
                        </div>

                        <!-- Editflo Setup -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-tools text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Editflo Setup:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Basic configuration</a>
                                </p>
                            </div>
                        </div>

                        <!-- Vue Guide -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fab fa-vuejs text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Vue Application:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Vue guide</a> or
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Vue docs</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>