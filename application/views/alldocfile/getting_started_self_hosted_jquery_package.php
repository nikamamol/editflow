<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo package with jQuery
            </h2>
        </div>

        <!-- Description -->
        <div class="mb-3 sm:mb-4 md:mb-5">
            <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
                <span class="flex-shrink-0 mr-2 w-4">
                    <i class="fas fa-info-circle text-blue-500 mt-0.5"></i>
                </span>
                <span class="flex-1 min-w-0">
                    The Official Editflo jQuery component integrates Editflo into jQuery projects.
                    This procedure creates a basic jQuery integration containing an Editflo editor.
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
                    Compatible with <strong>jQuery 3.x</strong> and <strong>modern browsers</strong>.
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
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2">Editflo jQuery Integration Quick
                        Start</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-4">Complete working example in 3 simple steps:</p>
                    <div class="space-y-3 sm:space-y-4 pl-6 border-l-4 border-blue-300">
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">1.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Install packages:</p>
                                <div
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto border border-gray-700">
                                    <div class="flex flex-wrap space-y-1">
                                        <span class="text-purple-400">npm</span>
                                        <span class="text-gray-300"> </span>
                                        <span class="text-purple-400">install</span>
                                        <span class="text-gray-300"> </span>
                                        <span class="text-purple-400">--save</span>
                                        <span class="text-gray-300"> </span>
                                        <span class="text-purple-400">jquery</span>
                                        <span class="text-gray-300"> </span>
                                        <span class="text-purple-400">Editflo</span>
                                        <span class="text-gray-300"> </span>
                                        <span class="text-purple-400">@Editflomce/Editflomce-jquery</span>
                                        <span class="text-gray-300"> </span>
                                        <span class="text-purple-400">fs-extra</span><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">2.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Add scripts to HTML:</p>
                                <div
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto border border-gray-700">
                                    <div class="space-y-1">
                                        <div class="flex flex-wrap">
                                            <span class="text-blue-400">&lt;script</span>
                                            <span class="text-gray-300"> </span>
                                            <span class="text-purple-400">src</span><span
                                                class="text-gray-300">=</span><span
                                                class="text-green-400">"jquery.min.js"</span><span
                                                class="text-blue-400">&gt;&lt;/script&gt;</span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <span class="text-blue-400">&lt;script</span>
                                            <span class="text-gray-300"> </span>
                                            <span class="text-purple-400">src</span><span
                                                class="text-gray-300">=</span><span
                                                class="text-green-400">"Editflomce.min.js"</span><span
                                                class="text-blue-400">&gt;&lt;/script&gt;</span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <span class="text-blue-400">&lt;script</span>
                                            <span class="text-gray-300"> </span>
                                            <span class="text-purple-400">src</span><span
                                                class="text-gray-300">=</span><span
                                                class="text-green-400">"Editflomce-jquery.min.js"</span><span
                                                class="text-blue-400">&gt;&lt;/script&gt;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">3.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Initialize with jQuery:</p>
                                <div
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto border border-gray-700">
                                    <div class="flex flex-wrap">
                                        <span class="text-gray-300">$</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-string">'textarea#editflo'</span>
                                        <span class="text-gray-300">).</span>
                                        <span class="text-purple-400">Editflomce</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-purple-400">{...}</span>
                                        <span class="text-gray-300">);</span>
                                    </div>
                                </div>
                                <p class="text-blue-600 text-sm sm:text-base mt-2 font-medium flex items-center">
                                    <i class="fas fa-rocket text-blue-500 mr-2"></i>Editor ready in seconds!
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
                    <p class="text-gray-600 text-sm sm:text-base">npm package manager</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                    <i class="fas fa-check-circle text-green-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-600 text-sm sm:text-base">Modern web browser</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Procedure</h2>
        </div>

        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1: Install Packages -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Packages</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install required packages from NPM:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Terminal</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">npm</span>
                                <span class="text-gray-300"> </span>
                                <span class="text-purple-400">install</span>
                                <span class="text-gray-300"> </span>
                                <span class="text-purple-400">--save</span>
                                <span class="text-gray-300"> </span>
                                <span class="text-purple-400">jquery</span>
                                <span class="text-gray-300"> </span>
                                <span class="text-purple-400">Editflo</span>
                                <span class="text-gray-300"> </span>
                                <span class="text-purple-400">@Editflomce/Editflomce-jquery</span>
                                <span class="text-gray-300"> </span>
                                <span class="text-purple-400">fs-extra</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Setup Postinstall Script -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cogs text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Setup Postinstall Script</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">Create <code
                            class="bg-gray-100 px-1 rounded text-xs">postinstall.js</code>:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">postinstall.js</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-green-400">const</span> <span class="text-purple-400">fse</span> <span
                                    class="text-gray-300">=</span> <span class="text-purple-400">require</span><span
                                    class="text-gray-300">(</span><span class="text-string">'fs-extra'</span><span
                                    class="text-gray-300">);</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                    class="text-green-400">const</span> <span class="text-purple-400">path</span> <span
                                    class="text-gray-300">=</span> <span class="text-purple-400">require</span><span
                                    class="text-gray-300">(</span><span class="text-string">'path'</span><span
                                    class="text-gray-300">);</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span><span
                                    class="text-green-400">const</span> <span
                                    class="text-purple-400">nodeModulesDir</span> <span class="text-gray-300">=</span>
                                <span class="text-purple-400">path</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">join</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">__dirname</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'node_modules'</span><span class="text-gray-300">);</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span><span
                                    class="text-green-400">const</span> <span class="text-purple-400">publicDir</span>
                                <span class="text-gray-300">=</span> <span class="text-purple-400">path</span><span
                                    class="text-gray-300">.</span><span class="text-purple-400">join</span><span
                                    class="text-gray-300">(</span><span class="text-purple-400">__dirname</span><span
                                    class="text-gray-300">,</span> <span class="text-string">'public'</span><span
                                    class="text-gray-300">);</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span><span
                                    class="text-purple-400">fse</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">emptyDirSync</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">path</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">join</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">publicDir</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'jquery'</span><span class="text-gray-300">));</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span><span
                                    class="text-purple-400">fse</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">emptyDirSync</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">path</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">join</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">publicDir</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'Editflo'</span><span class="text-gray-300">));</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span><span
                                    class="text-purple-400">fse</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">emptyDirSync</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">path</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">join</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">publicDir</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'Editflomce-jquery'</span><span class="text-gray-300">));</span>
                            </div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span><span
                                    class="text-purple-400">fse</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">copySync</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">path</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">join</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">nodeModulesDir</span><span class="text-gray-300">,</span>
                                <span class="text-string">'jquery'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'dist'</span><span class="text-gray-300">),</span> <span
                                    class="text-purple-400">path</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">join</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">publicDir</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'jquery'</span><span class="text-gray-300">),</span> <span
                                    class="text-green-400">{ </span><span class="text-purple-400">overwrite</span><span
                                    class="text-gray-300">:</span> <span class="text-purple-400">true</span> <span
                                    class="text-green-400">}</span><span class="text-gray-300">);</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Complete HTML Example -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Complete HTML Example</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">Add this to your HTML file:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">index.html</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-blue-400">&lt;!DOCTYPE</span> <span
                                    class="text-purple-400">html</span><span class="text-blue-400">&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                    class="text-blue-400">&lt;html</span> <span class="text-purple-400">lang</span><span
                                    class="text-gray-300">=</span><span class="text-green-400">"en"</span><span
                                    class="text-blue-400">&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span> <span
                                    class="text-blue-400">&lt;head&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span> <span
                                    class="text-blue-400">&lt;meta</span> <span
                                    class="text-purple-400">charset</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"utf-8"</span><span class="text-blue-400">&gt;</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span> <span
                                    class="text-blue-400">&lt;meta</span> <span class="text-purple-400">name</span><span
                                    class="text-gray-300">=</span><span class="text-green-400">"viewport"</span> <span
                                    class="text-purple-400">content</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"width=device-width, initial-scale=1"</span><span
                                    class="text-blue-400">&gt;</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span> <span
                                    class="text-blue-400">&lt;script</span> <span
                                    class="text-purple-400">src</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"/public/jquery/jquery.min.js"</span><span
                                    class="text-blue-400">&gt;&lt;/script&gt;</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span> <span
                                    class="text-blue-400">&lt;script</span> <span
                                    class="text-purple-400">src</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"/public/Editflo/Editflomce.min.js"</span> <span
                                    class="text-purple-400">referrerpolicy</span><span
                                    class="text-gray-300">=</span><span class="text-green-400">"origin"</span> <span
                                    class="text-purple-400">crossorigin</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"anonymous"</span><span
                                    class="text-blue-400">&gt;&lt;/script&gt;</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span> <span
                                    class="text-blue-400">&lt;script</span> <span
                                    class="text-purple-400">src</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"/public/Editflomce-jquery/Editflomce-jquery.min.js"</span><span
                                    class="text-blue-400">&gt;&lt;/script&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span> <span
                                    class="text-blue-400">&lt;/head&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span> <span
                                    class="text-blue-400">&lt;body&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span> <span
                                    class="text-blue-400">&lt;div&gt;</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span> <span
                                    class="text-blue-400">&lt;textarea</span> <span
                                    class="text-purple-400">id</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"editflo"</span><span class="text-blue-400">&gt;</span><span
                                    class="text-gray-300">&lt;p&gt;</span>Welcome to the Editflo jQuery example<span
                                    class="text-gray-300">!</span><span class="text-gray-300">&lt;/p&gt;</span><span
                                    class="text-blue-400">&lt;/textarea&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span> <span
                                    class="text-blue-400">&lt;/div&gt;</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Initialize Editor -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-magic text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Initialize Editor</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">Add this script at the bottom:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">index.html (script)</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span> <span
                                    class="text-blue-400">&lt;script&gt;</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span> <span
                                    class="text-gray-300">$</span><span class="text-gray-300">(</span><span
                                    class="text-string">'textarea#editflo'</span><span
                                    class="text-gray-300">).</span><span class="text-purple-400">Editflomce</span><span
                                    class="text-gray-300">({</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span> <span
                                    class="text-purple-400">height</span><span class="text-gray-300">:</span> <span
                                    class="text-orange-400">500</span><span class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span> <span
                                    class="text-purple-400">license_key</span><span class="text-gray-300">:</span> <span
                                    class="text-string">'gpl'</span><span class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span> <span
                                    class="text-purple-400">menubar</span><span class="text-gray-300">:</span> <span
                                    class="text-green-400">false</span><span class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span> <span
                                    class="text-purple-400">plugins</span><span class="text-gray-300">:</span> [</div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span> <span
                                    class="text-string">'advlist'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'autolink'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'lists'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'link'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'image'</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span> <span
                                    class="text-string">'charmap'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'preview'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'anchor'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'searchreplace'</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span> <span
                                    class="text-string">'visualblocks'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'fullscreen'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'insertdatetime'</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span> <span
                                    class="text-string">'media'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'table'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'code'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'help'</span><span class="text-gray-300">,</span> <span
                                    class="text-string">'wordcount'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span> <span
                                    class="text-gray-300">],</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span> <span
                                    class="text-purple-400">toolbar</span><span class="text-gray-300">:</span> <span
                                    class="text-string">'undo redo | blocks | bold italic backcolor |'</span> <span
                                    class="text-gray-300">+</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">26</span> <span
                                    class="text-string">'alignleft aligncenter alignright alignjustify |'</span> <span
                                    class="text-gray-300">+</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">27</span> <span
                                    class="text-string">'bullist numlist outdent indent | removeformat | help'</span>
                            </div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">28</span> <span
                                    class="text-gray-300">});</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">29</span> <span
                                    class="text-blue-400">&lt;/script&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">30</span> <span
                                    class="text-blue-400">&lt;/body&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">31</span><span
                                    class="text-blue-400">&lt;/html&gt;</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- jQuery UI Dialog -->
            <div class="flex items-start bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6">
                <div class="flex-shrink-0 mt-1 mr-3">
                    <i class="fas fa-lightbulb text-yellow-500 text-lg"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-yellow-800 text-sm sm:text-base mb-2">jQuery UI Dialog Integration</h3>
                    <p class="text-yellow-700 text-xs sm:text-sm mb-3">For Editflo in jQuery UI dialogs:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-green-400">//</span> <span class="text-green-400">Prevent</span> <span
                                    class="text-green-400">jQuery</span> <span class="text-green-400">UI</span> <span
                                    class="text-green-400">dialog</span> <span class="text-green-400">from</span> <span
                                    class="text-green-400">blocking</span> <span class="text-green-400">focusin</span>
                            </div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                    class="text-gray-300">$</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">document</span><span class="text-gray-300">).</span><span
                                    class="text-purple-400">on</span><span class="text-gray-300">(</span><span
                                    class="text-string">'focusin'</span><span class="text-gray-300">,</span> <span
                                    class="text-green-400">function</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">e</span><span class="text-gray-300">)</span> <span
                                    class="text-green-400">{</span></div>
                            <div class="flex flex-wrap"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span> <span
                                    class="text-green-400">if</span> <span class="text-gray-300">(</span><span
                                    class="text-gray-300">$</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">e</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">target</span><span class="text-gray-300">).</span><span
                                    class="text-purple-400">closest</span><span class="text-gray-300">(</span><span
                                    class="text-string">".efx-editflo, .efx-editflo-aux"</span><span
                                    class="text-gray-300">).</span><span class="text-purple-400">length</span><span
                                    class="text-gray-300">)</span> <span class="text-green-400">{</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span> <span
                                    class="text-purple-400">e</span><span class="text-gray-300">.</span><span
                                    class="text-purple-400">stopImmediatePropagation</span><span
                                    class="text-gray-300">();</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span> <span
                                    class="text-green-400">}</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span><span
                                    class="text-green-400">}</span><span class="text-gray-300">);</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deployment Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Test Your Integration</h3>
            </div>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">Open your HTML file in a web browser. The Editflo
                editor should load automatically.</p>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span class="font-medium text-sm">✅ Success Indicators</span>
                    </div>
                    <ul class="text-xs sm:text-sm text-green-700 space-y-1">
                        <li><i class="fas fa-circle text-green-400 mr-2"></i>Editor loads with toolbar</li>
                        <li><i class="fas fa-circle text-green-400 mr-2"></i>Text formatting works</li>
                        <li><i class="fas fa-circle text-green-400 mr-2"></i>Plugins function correctly</li>
                    </ul>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-bolt text-blue-500 mr-2"></i>
                        <span class="font-medium text-sm">⚡ Quick Test</span>
                    </div>
                    <p class="text-xs sm:text-sm text-blue-700">Save HTML → Open in browser → Start editing! 🚀</p>
                </div>
            </div>
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
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Further Reading</p>
                    <ul class="text-gray-600 text-xs sm:text-sm space-y-2 ml-4">
                        <li class="flex items-start">
                            <i class="fas fa-external-link-alt text-blue-500 mr-2 mt-0.5 flex-shrink-0"></i>
                            <a href="#" class="text-blue-600 hover:underline font-medium">Editflo jQuery Technical
                                Reference</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-external-link-alt text-blue-500 mr-2 mt-0.5 flex-shrink-0"></i>
                            <a href="#" class="text-blue-600 hover:underline font-medium">Editflo Basic Setup</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-external-link-alt text-blue-500 mr-2 mt-0.5 flex-shrink-0"></i>
                            <a href="#" class="text-blue-600 hover:underline font-medium">jQuery Documentation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>