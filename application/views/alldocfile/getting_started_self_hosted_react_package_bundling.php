<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class=" text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Bundling the Editflo package with the
                React framework</h2>
        </div>
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <div
                class="bg-yellow-100 text-yellow-800 rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-3 flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-xs sm:text-sm"></i>
            </div>
            <p class="text-yellow-800 text-sm sm:text-base">
                <strong>Editflo does not recommend bundling the Editflo package.</strong> Bundling Editflo can be
                complex and error prone.
            </p>
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
                    <p class="text-gray-600 text-xs sm:text-sm mt-2"><code
                            class="bg-gray-100 px-1 rounded text-xs">NPM 7+</code> requires the extra double-dash.</p>
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
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">cd editflo-react-demo</code>
                </div>
            </div>

            <!-- Step 3: Install Editflo packages -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Packages</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Editflo and @editflo/editflo-react
                        packages.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm install @editflo/editflo-react</code>
                </div>
            </div>

            <!-- Step 4: Create BundledEditor.jsx -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3 sm:mb-5">Create <code
                            class="bg-gray-100 px-1 rounded text-xs">src/BundledEditor.jsx</code>:</p>
                    <!-- Responsive Code Block for BundledEditor.jsx -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mb-4">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">BundledEditor.jsx</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-purple-400">import</span> <span class="text-gray-300">{ </span><span
                                    class="text-yellow-300">Editor</span><span class="text-gray-300"> }</span> <span
                                    class="text-purple-400">from</span> <span
                                    class="text-green-400">'@editflo/editflo-react'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span><span
                                    class="text-green-400">// Editflo core</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/tinymce'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span><span
                                    class="text-green-400">// DOM model</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/models/dom/model'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span><span
                                    class="text-green-400">// Theme</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/themes/silver'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span><span
                                    class="text-green-400">// Toolbar icons</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/icons/default'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span><span
                                    class="text-green-400">// Editor styles</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/skins/ui/oxide/skin'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span><span
                                    class="text-green-400">// Essential plugins</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/advlist'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/anchor'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/autolink'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/help'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/image'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/link'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/lists'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">26</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/searchreplace'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">27</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/table'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">28</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/plugins/wordcount'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">29</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">30</span><span
                                    class="text-green-400">// Content styles</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">31</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/skins/content/default/content'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">32</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'@editflo/editflo/skins/ui/oxide/content'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">33</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">34</span><span
                                    class="text-purple-400">export default function</span> <span
                                    class="text-yellow-300">BundledEditor</span><span
                                    class="text-gray-300">(</span><span class="text-blue-400">props</span><span
                                    class="text-gray-300">) {</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">35</span> <span
                                    class="text-purple-400">return</span> <span class="text-gray-300">(</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">36</span> <span
                                    class="text-gray-300">&lt;</span><span class="text-yellow-300">Editor</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">37</span> <span
                                    class="text-blue-400">apiKey</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">'no-api-key'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">38</span> <span
                                    class="text-gray-300">{</span><span class="text-gray-300">...</span><span
                                    class="text-blue-400">props</span><span class="text-gray-300">}</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">39</span> <span
                                    class="text-gray-300">/&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">40</span> <span
                                    class="text-gray-300">);</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">41</span><span
                                    class="text-gray-300">}</span></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                        <strong>Note:</strong> If you use additional plugins, you must import them explicitly or the
                        editor will fail to load.
                    </p>
                </div>
            </div>

            <!-- Step 5: Update API Key -->
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

            <!-- Step 6: Update App.jsx -->
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
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-purple-400">import</span> <span class="text-gray-300">{ </span><span
                                    class="text-yellow-300">useRef</span><span class="text-gray-300"> }</span> <span
                                    class="text-purple-400">from</span> <span class="text-green-400">'react'</span><span
                                    class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-yellow-300">BundledEditor</span> <span
                                    class="text-purple-400">from</span> <span
                                    class="text-green-400">'./BundledEditor'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span><span
                                    class="text-purple-400">import</span> <span
                                    class="text-green-400">'./App.css'</span><span class="text-gray-300">;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span><span
                                    class="text-purple-400">export default function</span> <span
                                    class="text-yellow-300">App</span><span class="text-gray-300">() {</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span> <span
                                    class="text-purple-400">const</span> <span class="text-gray-300">editorRef =
                                </span><span class="text-yellow-300">useRef</span><span
                                    class="text-gray-300">(</span><span class="text-blue-400">null</span><span
                                    class="text-gray-300">);</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span> <span
                                    class="text-purple-400">const</span> <span class="text-gray-300">log = </span><span
                                    class="text-purple-400">()</span> <span class="text-gray-300">=&gt; {</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span> <span
                                    class="text-purple-400">if</span> <span
                                    class="text-gray-300">(editorRef.</span><span
                                    class="text-blue-400">current</span><span class="text-gray-300">) {</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span> <span
                                    class="text-yellow-300">console</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">log</span><span
                                    class="text-gray-300">(editorRef.</span><span
                                    class="text-blue-400">current</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">getContent</span><span class="text-gray-300">());</span>
                            </div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span> <span
                                    class="text-gray-300">}</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span> <span
                                    class="text-gray-300">};</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span> <span
                                    class="text-purple-400">return</span> <span class="text-gray-300">(</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span> <span
                                    class="text-gray-300">&lt;&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span> <span
                                    class="text-gray-300">&lt;</span><span class="text-yellow-300">BundledEditor</span>
                            </div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span> <span
                                    class="text-blue-400">onInit</span><span class="text-gray-300">={(_evt, editor)
                                    =&gt; editorRef.</span><span class="text-blue-400">current</span> <span
                                    class="text-gray-300">= editor}</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span> <span
                                    class="text-blue-400">initialValue</span><span class="text-gray-300">='&lt;p&gt;This
                                    is the initial content of the editor.&lt;/p&gt;'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span> <span
                                    class="text-blue-400">init</span><span class="text-gray-300">={</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span> <span
                                    class="text-purple-400">{</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span> <span
                                    class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                                    class="text-orange-400">500</span><span class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span> <span
                                    class="text-blue-400">menubar</span><span class="text-gray-300">: </span><span
                                    class="text-blue-400">false</span><span class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span> <span
                                    class="text-blue-400">plugins</span><span class="text-gray-300">: [</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span> <span
                                    class="text-green-400">'advlist'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'anchor'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'autolink'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'help'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'image'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'link'</span><span class="text-gray-300">, </span><span
                                    class="text-green-400">'lists'</span><span class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span> <span
                                    class="text-green-400">'searchreplace'</span><span class="text-gray-300">,
                                </span><span class="text-green-400">'table'</span><span class="text-gray-300">,
                                </span><span class="text-green-400">'wordcount'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">26</span> <span
                                    class="text-gray-300">],</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">27</span> <span
                                    class="text-blue-400">toolbar</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'undo redo | blocks | '</span> <span
                                    class="text-gray-300">+</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">28</span> <span
                                    class="text-green-400">'bold italic forecolor | alignleft aligncenter '</span> <span
                                    class="text-gray-300">+</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">29</span> <span
                                    class="text-green-400">'alignright alignjustify | bullist numlist outdent indent |
                                    '</span> <span class="text-gray-300">+</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">30</span> <span
                                    class="text-green-400">'removeformat | help'</span><span
                                    class="text-gray-300">,</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">31</span> <span
                                    class="text-blue-400">content_style</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif;
                                    font-size:14px }'</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">32</span> <span
                                    class="text-purple-400">}</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">33</span> <span
                                    class="text-gray-300">}</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">34</span> <span
                                    class="text-gray-300">/&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">35</span> <span
                                    class="text-gray-300">&lt;</span><span class="text-yellow-300">button</span> <span
                                    class="text-blue-400">onClick</span><span class="text-gray-300">={</span><span
                                    class="text-gray-300">log</span><span class="text-gray-300">}&gt;Log editor
                                    content&lt;/</span><span class="text-yellow-300">button</span><span
                                    class="text-gray-300">&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">36</span> <span
                                    class="text-gray-300">&lt;/&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">37</span> <span
                                    class="text-gray-300">);</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">38</span><span
                                    class="text-gray-300">}</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 7: Test Application -->
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
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">The application will require further configuration
                before deployment. For information see: <a href="#" class="text-blue-600 hover:underline">Building for
                    Production</a> or <a href="#" class="text-blue-600 hover:underline">Deploying a Static Site</a>.</p>

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
                            <p>Additional configuration required for deployment outside web server root directory (e.g.,
                                <code>http://localhost:&lt;port&gt;/my_react_application</code>).
                            </p>
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
                <div class="flex items-start bg-blue-50 rounded-lg p-3 sm:p-4">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-open text-blue-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Bundling Information</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For more information on bundling, see: <a href="#"
                                class="text-blue-600 hover:underline font-medium">Introduction to bundling Editflo</a>
                        </p>
                    </div>
                </div>
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
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Getting Started with Vite</a>
                                    or
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