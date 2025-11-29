<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo package with the Web Component</h2>
        </div>

        <!-- Warning Box -->
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <div
                class="bg-yellow-100 text-yellow-800 rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-3 flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-xs sm:text-sm"></i>
            </div>
            <p class="text-yellow-800 text-sm sm:text-base">
                <strong>Editflo does not recommend bundling Editflo and Editflomce-webcomponent with a module loader.</strong>
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
                    The Official Editflo Web Component integrates Editflo into Web Component projects. This procedure creates an HTML page containing a Editflo editor.
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
                    Works with <strong>any modern framework</strong> or <strong>vanilla JavaScript</strong>. No specific framework version requirements.
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
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2">Editflo Web Component Quick Start</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-4">
                        Basic HTML page with Editflo editor:
                    </p>
                    <div class="space-y-3 sm:space-y-4 pl-6 border-l-4 border-blue-300">
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">1.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Create an HTML file with meta tags:</p>
                                <code
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto">
                                    &lt;meta charset="UTF-8"&gt;<br>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
                                </code>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">2.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Add the Editflo editor element:</p>
                                <code
                                    class="bg-gray-900 text-gray-100 px-3 py-2 rounded-lg text-xs sm:text-sm mt-2 block font-mono overflow-x-auto">
                                    &lt;Editflomce-editor config="editorConfig"&gt;&lt;/Editflomce-editor&gt;
                                </code>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="flex-shrink-0 w-6 text-blue-500 font-bold">3.</span>
                            <div class="ml-3 flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base">Open in browser - editor loads automatically!</p>
                                <p class="text-blue-600 text-sm sm:text-base mt-2 font-medium flex items-center">
                                    <i class="fas fa-globe text-blue-500 mr-2"></i>
                                    No build step required for basic usage
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
                    <p class="text-gray-600 text-sm sm:text-base">Modern web browser (Chrome, Firefox, Safari, Edge)</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                    <i class="fas fa-check-circle text-green-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-600 text-sm sm:text-base">Node.js and npm (optional - for bundling)</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                    <i class="fas fa-check-circle text-green-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-600 text-sm sm:text-base">Code editor (VS Code, Sublime, etc.)</p>
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
            <!-- Step 1: Create HTML File -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create HTML File</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new HTML file with required meta tags:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">index.html</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span class="text-blue-400">&lt;!DOCTYPE</span> <span class="text-purple-400">html</span><span class="text-blue-400">&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span class="text-blue-400">&lt;html</span> <span class="text-purple-400">lang</span><span class="text-gray-300">=</span><span class="text-green-400">"en"</span><span class="text-blue-400">&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>  <span class="text-blue-400">&lt;head&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>    <span class="text-blue-400">&lt;meta</span> <span class="text-purple-400">charset</span><span class="text-gray-300">=</span><span class="text-green-400">"UTF-8"</span><span class="text-blue-400">&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>    <span class="text-blue-400">&lt;meta</span> <span class="text-purple-400">name</span><span class="text-gray-300">=</span><span class="text-green-400">"viewport"</span> <span class="text-purple-400">content</span><span class="text-gray-300">=</span><span class="text-green-400">"width=device-width, initial-scale=1"</span><span class="text-blue-400">&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>    <span class="text-blue-400">&lt;title&gt;</span>Editflo Web Component<span class="text-blue-400">&lt;/title&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>  <span class="text-blue-400">&lt;/head&gt;</span></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2 flex items-start">
                        <i class="fas fa-info-circle text-blue-500 mr-2 mt-0.5"></i>
                        <span class="font-medium">Important:</span> The viewport meta tag is required for mobile compatibility.
                    </p>
                </div>
            </div>

            <!-- Step 2: Install Packages (Optional) -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Packages (Optional)</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">For bundling with module loaders:</p>
                    <div class="mt-2 space-y-3">
                        <div class="flex items-start bg-gray-50 p-3 rounded-lg">
                            <div class="flex-shrink-0">
                                <i class="fas fa-box text-green-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-600 text-xs sm:text-sm font-medium">Install Editflo packages:</p>
                                <code
                                    class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 block font-mono">npm install Editflo @Editflomce/Editflomce-webcomponent</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Add Editor Configuration -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cogs text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Editor Element</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">Add the Editflo editor with configuration:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">index.html (body)</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span><span class="text-blue-400">&lt;script&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>  <span class="text-green-400">var</span> <span class="text-purple-400">editorConfig</span> <span class="text-gray-300">= {</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>    <span class="text-purple-400">license_key:</span> <span class="text-string">'gpl'</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>  <span class="text-gray-300">};</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span><span class="text-blue-400">&lt;/script&gt;</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span></div>
                            <div class="flex"><span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span><span class="text-blue-400">&lt;Editflomce-editor</span> <span class="text-purple-400">config</span><span class="text-gray-300">=</span><span class="text-green-400">"editorConfig"</span><span class="text-blue-400">&gt;&lt;/Editflomce-editor&gt;</span></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-3">
                        <span class="font-medium">Important:</span> Update the <code class="bg-gray-100 px-1 rounded text-xs">license_key</code> with your Editflo License Key.
                    </p>
                </div>
            </div>

            <!-- Step 4: Test Application -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-play text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test the Application</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">Simply open the HTML file in a web browser:</p>
                    <div class="mt-2 space-y-3">
                        <div class="flex items-start bg-green-50 p-3 rounded-lg">
                            <div class="flex-shrink-0 mr-3">
                                <i class="fas fa-globe text-green-500 text-lg"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-700 text-sm sm:text-base font-medium">No build step required!</p>
                                <p class="text-gray-600 text-xs sm:text-sm mt-1">
                                    <strong>Double-click</strong> the HTML file or <strong>drag to browser</strong>
                                </p>
                            </div>
                        </div>
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-gray-600 text-xs sm:text-sm font-medium">Editor loads automatically from Editflo Cloud</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bundling Section -->
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mt-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                        <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <h3 class="text-sm font-medium text-yellow-800 mb-2">Bundling Editflo (Advanced)</h3>
                        <p class="text-yellow-700 text-xs sm:text-sm">
                            To bundle with module loaders (Webpack, Rollup, etc.):
                        </p>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm mt-2 overflow-x-auto border border-gray-700">
                            <div class="space-y-1">
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                        class="text-green-400">/* Add the Editflomce-webcomponent wrapper to the bundle */</span>
                                </div>
                                <div class="flex flex-wrap"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                        class="text-purple-400">import</span> <span class="text-gray-300">{ </span><span
                                        class="text-yellow-300">Editor</span> <span class="text-gray-300">}</span> <span
                                        class="text-purple-400">from</span> <span
                                        class="text-green-400">'@Editflomce/Editflomce-webcomponent'</span><span
                                        class="text-gray-300">;</span></div>
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span></div>
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span><span
                                        class="text-green-400">/* Import Editflo core */</span></div>
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span><span
                                        class="text-purple-400">import</span> <span class="text-string">'Editflomce/Editflomce'</span></div>
                            </div>
                        </div>
                        <p class="text-yellow-700 text-xs sm:text-sm mt-2">
                            Add bundled script: <code class="bg-gray-100 px-2 py-1 rounded text-xs font-mono">&lt;script src="/path/to/bundle.js"&gt;&lt;/script&gt;</code>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deployment Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Deployment</h3>
            </div>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">Simply serve the HTML file via any web server. No build process required for basic usage.</p>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-server text-green-500 mr-2"></i>
                        <span class="font-medium text-sm">Static Hosting</span>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-600">GitHub Pages, Netlify, Vercel</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-cloud text-blue-500 mr-2"></i>
                        <span class="font-medium text-sm">Editflo Cloud</span>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-600">Default CDN delivery</p>
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
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Customization Resources</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For advanced configuration and customization:
                        <br><br>
                        • <a href="#" class="text-blue-600 hover:underline font-medium">The Editflo Web Component Technical Reference</a>
                        <br>• <a href="#" class="text-blue-600 hover:underline font-medium">Editflo basic setup</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>