<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 ">
    <!-- Header Section -->
    <header class="sm:py-6 text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo with Bootstrap Framework
            </h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            This guide demonstrates how to integrate Editflo editor with Bootstrap framework for responsive web
            applications.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            Bootstrap provides a robust grid system and UI components that work seamlessly with Editflo's rich text
            editing capabilities.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            For examples of Editflo Bootstrap integration, visit our <a href="#"
                class=" ms-1 text-blue-500 hover:underline"> demo page</a>.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-bootstrap text-purple-500 mr-2"></i>
            Basic knowledge of <a href="" class="text-blue-500 hover:underline ml-1">Bootstrap framework</a>.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fas fa-code text-gray-500 mr-2"></i>
            Understanding of <a href="" class="text-blue-500 hover:underline ml-1">HTML, CSS and JavaScript</a>.
        </p>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Setup</h2>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Include Bootstrap CSS</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add Bootstrap CSS to your HTML file using CDN or
                        local installation.</p>
                    <code
                        class="bg-gray-900 text-gray-100 px-3 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">
    <span class="text-purple-400">&lt;link</span> 
    <span class="text-blue-400">href=</span><span class="text-green-400">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"</span> 
    <span class="text-blue-400">rel=</span><span class="text-green-400">"stylesheet"</span><span class="text-purple-400">&gt;</span>
</code>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Bootstrap Layout</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Set up a basic Bootstrap container with a textarea
                        for Editflo.</p>

                    <!-- Responsive Code Block -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">index.html</span>
                        </div>

                        <div class="space-y-1">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">&lt;div</span> <span
                                    class="text-blue-400">class=</span><span class="text-green-400">"container
                                    mt-4"</span><span class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-purple-400">&lt;div</span>
                                <span class="text-blue-400">class=</span><span class="text-green-400">"row"</span><span
                                    class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-8"></span><span class="text-purple-400">&lt;div</span>
                                <span class="text-blue-400">class=</span><span
                                    class="text-green-400">"col-md-12"</span><span class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-gray-300 ml-12"></span><span class="text-purple-400">&lt;h3</span>
                                <span class="text-blue-400">class=</span><span class="text-green-400">"mb-3"</span><span
                                    class="text-purple-400">&gt;</span><span class="text-gray-300">Edit
                                    Content</span><span class="text-purple-400">&lt;/h3&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-12"></span><span
                                    class="text-purple-400">&lt;textarea</span> <span
                                    class="text-blue-400">class=</span><span
                                    class="text-green-400">"form-control"</span> <span
                                    class="text-blue-400">id=</span><span
                                    class="text-green-400">"myTextarea"</span><span class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-12"></span><span
                                    class="text-purple-400">&lt;/textarea&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-8"></span><span
                                    class="text-purple-400">&lt;/div&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-4"></span><span
                                    class="text-purple-400">&lt;/div&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300"></span><span class="text-purple-400">&lt;/div&gt;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cog text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Initialize Editflo with Bootstrap</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Configure Editflo to work properly with Bootstrap
                        modals and components.</p>

                    <!-- Responsive Code Block -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">script.js</span>
                        </div>

                        <div class="space-y-1">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span
                                    class="text-blue-400">init</span><span class="text-gray-300">({</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span
                                    class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span
                                    class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">height</span><span
                                    class="text-gray-300">: </span><span class="text-orange-400">400</span><span
                                    class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">menubar</span><span
                                    class="text-gray-300">: </span><span class="text-blue-400">false</span><span
                                    class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">plugins</span><span
                                    class="text-gray-300">: [</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-8"></span>
                                <span class="text-green-400">'advlist'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'autolink'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'lists'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'link'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'image'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'charmap'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-gray-300">],</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">toolbar</span><span
                                    class="text-gray-300">: </span><span class="text-green-400">'undo redo | bold italic
                                    | alignleft aligncenter alignright | bullist numlist'</span><span
                                    class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-4"></span><span
                                    class="text-blue-400">content_style</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif;
                                    font-size:14px }'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300">});</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-window-restore text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Using Editflo in Bootstrap Modals</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">For Bootstrap modals, add this focus management
                        code:</p>

                    <!-- Responsive Code Block -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">modal-fix.js</span>
                        </div>

                        <div class="space-y-1">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-gray-300 comment">// For Bootstrap 5</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-blue-400">document</span><span class="text-gray-300">.</span><span
                                    class="text-blue-400">addEventListener</span><span
                                    class="text-gray-300">(</span><span class="text-green-400">'focusin'</span><span
                                    class="text-gray-300">, (</span><span class="text-blue-400">e</span><span
                                    class="text-gray-300">) => {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-purple-400">if</span> <span
                                    class="text-gray-300">(</span><span class="text-blue-400">e</span><span
                                    class="text-gray-300">.</span><span class="text-blue-400">target</span><span
                                    class="text-gray-300">.</span><span class="text-blue-400">closest</span><span
                                    class="text-gray-300">(</span><span class="text-green-400">'.tox-editflo,
                                    .tox-editflo-aux, .moxman-window, .tam-assetmanager-root'</span><span
                                    class="text-gray-300">) != </span><span class="text-purple-400">null</span><span
                                    class="text-gray-300">) {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-gray-300 ml-8"></span><span class="text-blue-400">e</span><span
                                    class="text-gray-300">.</span><span
                                    class="text-blue-400">stopImmediatePropagation</span><span
                                    class="text-gray-300">();</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-4"></span><span class="text-gray-300">}</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300">});</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-vial text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test the Integration</h3>
                    <div class="mt-1 sm:mt-2 space-y-1 sm:space-y-2">
                        <p class="text-gray-600 text-xs sm:text-sm">Open your HTML file in a web browser to see Editflo
                            working within Bootstrap layout.</p>
                        <p class="text-gray-600 text-xs sm:text-sm">Test responsiveness by resizing the browser window.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap Version Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Bootstrap Version Compatibility</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Bootstrap Version</th>
                            <th scope="col"
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Editflo Compatibility</th>
                            <th scope="col"
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Notes</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">Bootstrap 5</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-green-600">Fully Compatible</td>
                            <td class="px-4 py-3 text-sm text-gray-500">Use focusin event handler for modals</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">Bootstrap 4</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-green-600">Fully Compatible</td>
                            <td class="px-4 py-3 text-sm text-gray-500">Use jQuery event handler for modals</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">Bootstrap 3</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-yellow-600">Limited Support</td>
                            <td class="px-4 py-3 text-sm text-gray-500">May require additional CSS adjustments</td>
                        </tr>
                    </tbody>
                </table>
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
                        <i class="fab fa-bootstrap text-purple-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Bootstrap Components with Editflo
                        </p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            Learn how to integrate Editflo with various Bootstrap components:
                            <a href="#" class="text-blue-600 hover:underline font-medium">Modals, Forms, and Cards</a>
                        </p>
                    </div>
                </div>

                <!-- Second Item -->
                <div class="bg-blue-50 rounded-lg p-3 sm:p-4">
                    <div class="flex items-start mb-2">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fas fa-mobile-alt text-blue-500 text-sm sm:text-base"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-700 text-sm sm:text-base font-medium">Responsive Design</p>
                        </div>
                    </div>

                    <div class="space-y-2 sm:space-y-3 ml-8 sm:ml-9">
                        <!-- Grid System -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-th text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Bootstrap Grid:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Using Editflo with responsive
                                        layouts</a>
                                </p>
                            </div>
                        </div>

                        <!-- Mobile Optimization -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-tablet-alt text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Mobile Optimization:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Touch-friendly editor
                                        configuration</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third Item -->
                <div class="flex items-start bg-green-50 rounded-lg p-3 sm:p-4">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-palette text-green-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Custom Styling</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            Match Editflo toolbar with your Bootstrap theme:
                            <a href="#" class="text-blue-600 hover:underline font-medium">Custom CSS examples</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>