<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Hosting the Editflo package with the
                React framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo React component integrates Editflo into React projects. This procedure creates a React
            SWC plugin containing an Editflo editor.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            For examples of the Editflo integration, visit the <a href="#"
                class="text-blue-600 hover:underline">editflo-react storybook</a>.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-node-js text-green-500 mr-2"></i>
            This procedure requires <a href="#" class="text-blue-500 hover:underline ml-1">Node.js (and npm)</a>.
        </p>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started</h2>
        </div>

        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1: Create React Project -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-plus text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create React Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Use Vite and React SWC plugin to create a new
                        project.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm create vite@latest editflo-react-demo -- --template react-swc</code>
                </div>
            </div>

            <!-- Step 2: Install Editflo packages -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo React</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Editflo, @editflo/editflo-react and
                        fs-extra packages.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm install @editflo/editflo-react fs-extra</code>
                </div>
            </div>

            <!-- Step 3: Setup postinstall script -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cog text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Setup postinstall script</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a postinstall script to copy Editflo to the
                        public directory.</p>
                </div>
            </div>

            <!-- Step 4: postinstall.js code -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3 sm:mb-5">Create <code
                            class="bg-gray-100 px-1 rounded text-xs">postinstall.js</code>:</p>
                    <!-- Responsive Code Block for postinstall.js -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mb-4">
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
                                    class="text-purple-400">import</span> <span class="text-gray-300">fse</span> <span
                                    class="text-purple-400">from</span> <span
                                    class="text-green-400">'fs-extra'</span><span class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                    class="text-purple-400">import</span> <span class="text-gray-300">path</span> <span
                                    class="text-purple-400">from</span> <span class="text-green-400">'path'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span><span
                                    class="text-purple-400">const</span> <span class="text-gray-300">topDir =
                                </span><span class="text-green-400">import</span><span
                                    class="text-gray-300">.meta.dirname;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span><span
                                    class="text-gray-300">fse.</span><span
                                    class="text-yellow-300">emptyDirSync</span><span class="text-gray-300">(</span><span
                                    class="text-yellow-300">path</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">join</span><span class="text-gray-300">(</span><span
                                    class="text-yellow-300">topDir</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'public'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'editflo'</span><span class="text-gray-300">));</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span><span
                                    class="text-gray-300">fse.</span><span class="text-yellow-300">copySync</span><span
                                    class="text-gray-300">(</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span> <span
                                    class="text-yellow-300">path</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">join</span><span class="text-gray-300">(</span><span
                                    class="text-yellow-300">topDir</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'node_modules'</span><span class="text-gray-300">,
                                </span><span class="text-green-400">'@editflo'</span><span class="text-gray-300">,
                                </span><span class="text-green-400">'editflo'</span><span
                                    class="text-gray-300">),</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span> <span
                                    class="text-yellow-300">path</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">join</span><span class="text-gray-300">(</span><span
                                    class="text-yellow-300">topDir</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'public'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'editflo'</span><span class="text-gray-300">),</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span> <span
                                    class="text-purple-400">{ </span><span class="text-yellow-300">overwrite</span><span
                                    class="text-gray-300">: </span><span class="text-blue-400">true</span> <span
                                    class="text-purple-400">}</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span><span
                                    class="text-gray-300">);</span></div>
                        </div>
                    </div>

                    <!-- package.json scripts -->
                    <p class="text-gray-600 text-xs sm:text-sm mt-2 mb-3">Update <code
                            class="bg-gray-100 px-1 rounded text-xs">package.json</code> scripts:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mb-4">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">package.json (scripts section)</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-green-400">"scripts"</span><span class="text-gray-300">: {</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span> <span
                                    class="text-green-400">"postinstall"</span><span class="text-gray-300">:
                                </span><span class="text-green-400">"node ./postinstall.js"</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span><span
                                    class="text-gray-300">},</span></div>
                        </div>
                    </div>

                    <!-- .gitignore -->
                    <p class="text-gray-600 text-xs sm:text-sm mt-2 mb-3">Add to <code
                            class="bg-gray-100 px-1 rounded text-xs">.gitignore</code>:</p>
                    <code
                        class="bg-gray-900 text-gray-100 px-3 py-2 rounded text-xs sm:text-sm inline-block font-mono border border-gray-700">/public/editflo/</code>
                </div>
            </div>

            <!-- Step 5: Run postinstall -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-play text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Run postinstall</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Copy Editflo to the public directory:</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm run postinstall</code>
                </div>
            </div>

            <!-- Step 6: App.jsx code -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3 sm:mb-5">Update <code
                            class="bg-gray-100 px-1 rounded text-xs">src/App.jsx</code>:</p>
                    <!-- Responsive Code Block for App.jsx -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">App.jsx</span>
                        </div>
                        <div class="space-y-1">
                            <!-- Lines 1-37 (same as original but with Editflo changes) -->
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">import</span> <span class="text-gray-300">{ useRef
                                    }</span> <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'react'</span><span class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-purple-400">import</span> <span class="text-gray-300">{ Editor
                                    }</span> <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'@editflo/editflo-react'</span><span
                                    class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-purple-400">import</span> <span
                                    class="text-green-400">'./App.css'</span><span class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-purple-400">export default function</span> <span
                                    class="text-yellow-300">App</span><span class="text-gray-300">() {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">const</span> <span class="text-gray-300">editorRef =
                                </span><span class="text-yellow-300">useRef</span><span
                                    class="text-gray-300">(</span><span class="text-blue-400">null</span><span
                                    class="text-gray-300">);</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-purple-400">const</span> <span class="text-gray-300">log =
                                </span><span class="text-purple-400">()</span> <span class="text-gray-300">=&gt;
                                    {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-purple-400">if</span>
                                <span class="text-gray-300">(editorRef.</span><span
                                    class="text-blue-400">current</span><span class="text-gray-300">) {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-8 sm:ml-12"></span><span
                                    class="text-yellow-300">console</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">log</span><span
                                    class="text-gray-300">(editorRef.</span><span
                                    class="text-blue-400">current</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">getContent</span><span class="text-gray-300">());</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">}</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span class="text-gray-300">};</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">return</span> <span class="text-gray-300">(</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-gray-300">&lt;&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-gray-300">&lt;</span><span class="text-yellow-300">Editor</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span><span
                                    class="text-blue-400">apiKey</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">'no-api-key'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span><span
                                    class="text-blue-400">onInit</span><span class="text-gray-300">=</span><span
                                    class="text-purple-400">{</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span>(<span
                                    class="text-blue-400">_evt</span><span class="text-gray-300">, </span><span
                                    class="text-blue-400">editor</span><span class="text-gray-300">) =&gt;
                                    editorRef.</span><span class="text-blue-400">current</span> <span
                                    class="text-gray-300">= editor</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span><span
                                    class="text-blue-400">initialValue</span><span class="text-gray-300">=</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span><span
                                    class="text-green-400">"&lt;p&gt;This is the initial content of the
                                    editor.&lt;/p&gt;"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span><span
                                    class="text-blue-400">init</span><span class="text-gray-300">=</span><span
                                    class="text-purple-400">}}</span>
                            </div>
                            <!-- ... rest of the init configuration remains the same ... -->
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">37</span>
                                <span class="text-gray-300"></span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                        This creates an Editflo editor with basic features and a button to log content.
                    </p>
                </div>
            </div>

            <!-- Step 7: Update API Key -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-key text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update API Key</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Replace <code
                            class="bg-gray-100 px-1 rounded text-xs inline">'no-api-key'</code> with your actual Editflo
                        Cloud API key.</p>
                </div>
            </div>

            <!-- Step 8: Test Application -->
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
        </div>

        <!-- Deployment Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Deploying the Application</h3>
            </div>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">For production deployment configuration, see: <a
                    href="#" class="text-blue-600 hover:underline">Building for Production</a> or <a href="#"
                    class="text-blue-600 hover:underline">Deploying a Static Site</a>.</p>

            <div class="space-y-2 sm:space-y-3">
                <div class="flex items-start">
                    <div
                        class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Build the application:</p>
                        <code
                            class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono">npm run build</code>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Preview production build:</p>
                        <code
                            class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono">npm run preview</code>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Copy <code
                                class="bg-gray-100 px-1 rounded text-xs">dist/</code> contents to web server root.</p>
                    </div>
                </div>
            </div>
            <p class="text-gray-800 font-medium text-sm sm:text-base mt-3 sm:mt-4 flex items-center">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                The application has now been deployed.
            </p>
        </div>

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
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo React Examples</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For examples of Editflo React integration, see:
                            <a href="#" class="text-blue-600 hover:underline font-medium">the editflo-react
                                storybook</a>
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
                                    <span class="font-medium">Editflo React:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">technical reference</a>
                                </p>
                            </div>
                        </div>
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
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fab fa-react text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">React Application:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">React guide</a> or
                                    <a href="#" class="text-blue-600 hover:underline ml-1">React docs</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>