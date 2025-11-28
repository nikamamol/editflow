<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 ">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflofrom the Editflo Cloud CDN
                with the Web Component
            </h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official EditfloWeb Component integrates Editflointo Web Component projects. This procedure creates an
            HTML page containing a Editfloeditor.
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
            <i class="fab fa-js-square text-yellow-500 mr-2"></i>
            <a href="" class="text-blue-500 hover:underline ml-1">Web Component CLI </a>
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
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-plus text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Web Component Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">To add a Editfloeditor to a web page using the
                        EditfloWeb Component:

                    </p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm create Web Component@latest Editflo-Web Component-demo</code>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Dependencies</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Navigate to the project directory and install
                        dependencies.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">cd Editflo-Web Component-demo</code>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono ml-2">npm install</code>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cog text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Web Component</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Editflo Web Component package in your project.
                    </p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm install @editflo/editflo-Web Component</code>
                </div>
            </div>
            <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Include the Editflo script</h2>
                <p class="text-gray-700 mb-4">
                    Include the following line of code in the <code
                        class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;head&gt;</code> of an HTML page:
                </p>

                <!-- Code Block -->
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-blue-400">&lt;script </span>
                    <span class="text-green-400">src=</span>
                    <span
                        class="text-yellow-300">"https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js"</span>
                    <span class="text-green-400"> referrerpolicy=</span>
                    <span class="text-yellow-300">"origin"</span>
                    <span class="text-green-400"> crossorigin=</span>
                    <span class="text-yellow-300">"anonymous"</span>
                    <span class="text-blue-400">&gt;&lt;/script&gt;</span>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3 sm:mb-5">Using a text editor, open
                        /path/to/Editflo-Web Component-demo/src/App.Web Component and replace the contents with:</p>

                    <!-- Responsive Code Block -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">App.Web Component</span>
                        </div>

                        <div class="space-y-1">
                            <!-- Script Section -->
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">&lt;script&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-purple-400">import</span> <span class="text-gray-300">{ onMount }
                                </span>
                                <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'Web Component'</span><span class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-purple-400">import</span> <span class="text-gray-300">{ Editor }
                                </span>
                                <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'@editflo/editflo-Web Component'</span><span
                                    class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-purple-400">let</span> <span class="text-gray-300">editorRef;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-purple-400">const</span> <span class="text-gray-300">init = {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">height</span><span class="text-gray-300">: </span>
                                <span class="text-orange-400">500</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">menubar</span><span class="text-gray-300">: </span>
                                <span class="text-blue-400">false</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">plugins</span><span class="text-gray-300">: [</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
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
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-green-400">'anchor'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'searchreplace'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'visualblocks'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'code'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'fullscreen'</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-green-400">'insertdatetime'</span><span class="text-gray-300">,
                                </span>
                                <span class="text-green-400">'media'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'table'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'code'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'help'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'wordcount'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-300">],</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">toolbar</span><span class="text-gray-300">: </span>
                                <span class="text-green-400">'undo redo | blocks | '</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-green-400">'bold italic forecolor | alignleft aligncenter '</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-green-400">'alignright alignjustify | bullist numlist outdent indent |
                                    '</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-green-400">'removeformat | help'</span><span
                                    class="text-gray-300">,</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">content_style</span><span class="text-gray-300">: </span>
                                <span class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif;
                                    font-size:14px }'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">};</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-purple-400">const</span> <span class="text-gray-300">log =
                                </span><span class="text-purple-400">()</span> <span class="text-gray-300">=&gt;
                                    {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-purple-400">if</span> <span class="text-gray-300">(editorRef) {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-yellow-300">console</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">log</span><span
                                    class="text-gray-300">(editorRef.</span><span
                                    class="text-yellow-300">getContent</span><span class="text-gray-300">());</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-300">}</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">26</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">};</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">27</span>
                                <span class="text-purple-400">&lt;/script&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">28</span>
                            </div>
                            <!-- Template Section -->
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">29</span>
                                <span class="text-gray-300">&lt;</span><span class="text-yellow-300">main</span><span
                                    class="text-gray-300">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">30</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">&lt;</span><span class="text-yellow-300">h1</span><span
                                    class="text-gray-300">&gt;Editflo Web Component Demo&lt;/</span><span
                                    class="text-yellow-300">h1</span><span class="text-gray-300">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">31</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">&lt;</span><span class="text-yellow-300">Editor</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">32</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">apiKey</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"no-api-key"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">33</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">bind:editor</span><span class="text-gray-300">=</span><span
                                    class="text-purple-400">{</span><span class="text-gray-300">editorRef</span><span
                                    class="text-purple-400">}</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">34</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">initialValue</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"&lt;p&gt;This is the initial content of the
                                    editor.&lt;/p&gt;"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">35</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">init</span><span class="text-gray-300">=</span><span
                                    class="text-purple-400">{</span><span class="text-gray-300">init</span><span
                                    class="text-purple-400">}</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">36</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">/&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">37</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">&lt;</span><span class="text-yellow-300">button</span> <span
                                    class="text-blue-400">on:click</span><span class="text-gray-300">=</span><span
                                    class="text-purple-400">{</span><span class="text-gray-300">log</span><span
                                    class="text-purple-400">}</span><span class="text-gray-300">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">38</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-300">Log editor content</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">39</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">&lt;/</span><span class="text-yellow-300">button</span><span
                                    class="text-gray-300">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">40</span>
                                <span class="text-gray-300">&lt;/</span><span class="text-yellow-300">main</span><span
                                    class="text-gray-300">&gt;</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                        This Web Component component will create an application containing a Editflo editor configured with
                        basic features.
                    </p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-key text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update the apiKey option</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the apiKey option in the editor element and
                        include your Editflo Cloud API key.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-vial text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test the application</h3>
                    <div class="mt-1 sm:mt-2 space-y-1 sm:space-y-2">
                        <p class="text-gray-600 text-xs sm:text-sm">To start the development server, navigate to the
                            <code class="bg-gray-100 px-1 rounded text-xs">Editflo-Web Component-demo</code> directory and run:
                        </p>
                        <code
                            class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm inline-block font-mono flex items-center">
                            <i class="fas fa-terminal text-gray-500 mr-2"></i>npm run dev
                        </code>
                        <p class="text-gray-600 text-xs sm:text-sm">To stop the development server, press <kbd
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
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Deploying the application</h3>
            </div>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">The application will require further configuration
                before deployment. For information see: <a href="#" class="text-blue-600 hover:underline">Building for
                    Production</a> or <a href="#" class="text-blue-600 hover:underline">Deploying a Static Site</a>.</p>

            <p class="text-gray-800 font-medium text-sm sm:text-base mb-2 sm:mb-3 flex items-center">
                To deploy to a local HTTP Server:
            </p>

            <div class="space-y-2 sm:space-y-3">
                <div class="flex items-start">
                    <div
                        class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Navigate to the directory and run:</p>
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
                        <p class="text-gray-600 text-xs sm:text-sm">Preview the production build:</p>
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
                        <p class="text-gray-600 text-xs sm:text-sm">Copy contents of <code
                                class="bg-gray-100 px-1 rounded text-xs">Editflo-Web Component-demo/dist</code> to web server
                            root.</p>
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


        <!-- Include Script Section -->


        <!-- Initialize Section -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 mt-4">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Initialize Editflo as part of a web form</h2>
            <p class="text-gray-700 mb-4">
                Initialize Editflo 8 on any element (or elements) on the web page by passing an object containing a
                <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value to <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">editflo.init()</code>. The <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value can be any valid CSS selector.
            </p>

            <p class="text-gray-700 mb-4">
                For example, to replace <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea id="mytextarea"&gt;</code> with a
                Editflo 8
                editor instance, pass the selector <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">'#mytextarea'</code> to <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">editflo.init()</code>:
            </p>

            <!-- Complete HTML Code Block -->
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
                <span class="text-blue-400">&lt;html lang="en"&gt;</span><br>
                <span class="text-blue-400">&lt;head&gt;</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;meta
                    charset="UTF-8"&gt;</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;meta name="viewport"
                    content="width=device-width, initial-scale=1"&gt;</span><br>
                <br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;script </span><span
                    class="text-green-400">src=</span><span
                    class="text-yellow-300">"https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js"</span><span
                    class="text-green-400"> referrerpolicy=</span><span class="text-yellow-300">"origin"</span><span
                    class="text-green-400"> crossorigin=</span><span class="text-yellow-300">"anonymous"</span><span
                    class="text-blue-400">&gt;&lt;/script&gt;</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;script&gt;</span><br>
                <span class="text-gray-300 ml-8"></span><span class="text-purple-400">Editflomce</span><span
                    class="text-gray-300">.</span><span class="text-yellow-300">init</span><span
                    class="text-gray-300">({</span><br>
                <span class="text-gray-300 ml-12"></span><span class="text-blue-400">selector</span><span
                    class="text-gray-300">: </span><span class="text-green-400">'#mytextarea'</span><br>
                <span class="text-gray-300 ml-8"></span><span class="text-gray-300">});</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;/script&gt;</span><br>
                <span class="text-blue-400">&lt;/head&gt;</span><br>
                <br>
                <span class="text-blue-400">&lt;body&gt;</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;h1&gt;</span><span
                    class="text-gray-300">EditfloMCE Quick Start Guide</span><span
                    class="text-blue-400">&lt;/h1&gt;</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;form
                    method="post"&gt;</span><br>
                <span class="text-gray-300 ml-8"></span><span class="text-blue-400">&lt;textarea </span><span
                    class="text-green-400">id=</span><span class="text-yellow-300">"mytextarea"</span><span
                    class="text-blue-400">&gt;</span><span class="text-gray-300">Hello, World!</span><span
                    class="text-blue-400">&lt;/textarea&gt;</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;/form&gt;</span><br>
                <span class="text-blue-400">&lt;/body&gt;</span><br>
                <span class="text-blue-400">&lt;/html&gt;</span>
            </div>
        </div>

        <p class="p-4">Adding this content to an HTML file and opening it in a web browser will load a EditfloMCE
            editor,
            such as:</p>
        <!-- Editor Table with Tabs -->
        <div class="bg-white rounded-lg shadow-sm border border-border-light overflow-hidden mb-8">
            <!-- Tabs -->
            <div class="border-b border-border-light">
                <div class="flex">
                    <button class="tab-button py-3 px-6 border-b-2 border-primary text-primary font-medium"
                        data-tab="editflo">
                        Editflo
                    </button>
                    <button
                        class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                        data-tab="html">
                        HTML
                    </button>
                    <button
                        class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                        data-tab="js">
                        JS
                    </button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="p-6">
                <img src="<?= base_url('assets/image.png'); ?>" width="full" height="200" alt="">


                <!-- HTML Tab -->
                <div id="html-tab" class="tab-content hidden">
                    <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                        <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
                        <span class="text-blue-400">&lt;html&gt;</span><br>
                        <span class="text-blue-400">&lt;head&gt;</span><br>
                        &nbsp;&nbsp;<span class="text-blue-400">&lt;title&gt;</span>My Document<span
                            class="text-blue-400">&lt;/title&gt;</span><br>
                        <span class="text-blue-400">&lt;/head&gt;</span><br>
                        <span class="text-blue-400">&lt;body&gt;</span><br>
                        &nbsp;&nbsp;<span class="text-blue-400">&lt;p&gt;</span>Hello, <span
                            class="text-blue-400">&lt;strong&gt;</span>World!<span
                            class="text-blue-400">&lt;/strong&gt;</span><span
                            class="text-blue-400">&lt;/p&gt;</span><br>
                        <span class="text-blue-400">&lt;/body&gt;</span><br>
                        <span class="text-blue-400">&lt;/html&gt;</span>
                    </div>
                </div>

                <!-- JS Tab -->
                <div id="js-tab" class="tab-content hidden">
                    <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                        <span class="text-green-400">// Initialize Editflo</span><br>
                        <span class="text-purple-400">Editflo</span>.<span class="text-yellow-400">init</span>({<br>
                        &nbsp;&nbsp;<span class="text-blue-400">selector</span>: <span
                            class="text-green-400">'#myTextarea'</span>,<br>
                        &nbsp;&nbsp;<span class="text-blue-400">plugins</span>: <span class="text-green-400">'advlist
                            autolink lists link image charmap print preview anchor'</span>,<br>
                        &nbsp;&nbsp;<span class="text-blue-400">toolbar</span>: <span class="text-green-400">'undo redo
                            |
                            styleselect | bold italic | alignleft aligncenter alignright alignjustify'</span>,<br>
                        &nbsp;&nbsp;<span class="text-blue-400">height</span>: <span
                            class="text-orange-400">300</span><br>
                        });
                    </div>
                </div>
            </div>
            <!-- Update API Key Section -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Update the "no-api-key" placeholder with your API
                    key
                </h2>
                <p class="text-gray-700 mb-6">
                    To remove the notice:
                </p>

                <!-- Warning Box -->
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-yellow-700 font-medium">Warning</p>
                            <p class="text-yellow-600 mt-1">This domain is not registered with Editflo Cloud. Please see
                                the
                                quick start guide or create an account.</p>
                        </div>
                    </div>
                </div>

                <p class="text-gray-700 mb-4">
                    Update the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">[no-api-key]</code> placeholder in
                    the
                    source script (<code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;script src...&gt;</code>)
                    with
                    your Editflo Cloud API key, which is created when signing up to the Editflo Cloud.
                </p>

                <p class="text-gray-700 mb-6">
                    Signing up for a Editflo Cloud API key will also provide a trial of the Premium Plugins.
                </p>
            </div>

            <!-- Save Content Section -->
            <div class="bg-white rounded-lg  p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Save the content from the editor</h2>
                <p class="text-gray-700 mb-4">
                    To retrieve content from the editor, either process the content with a form handler or use the <code
                        class="bg-gray-100 px-1 py-0.5 rounded text-sm">getContent</code> API.
                </p>
                <p class="text-gray-700">
                    If you use a form handler, once the <code
                        class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;form&gt;</code> is submitted, Editflo 8 will
                    <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">POST</code> the content in the same way as a
                    normal HTML <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>, including
                    the
                    HTML elements and inline CSS of the editor content. The hosts form handler can process the submitted
                    content in the same way as content from a regular <code
                        class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>.
                </p>
            </div>
            <!-- Next Steps Section -->
            <div class="bg-white border border-gray-200 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Next Steps</h2>
                <p class="text-gray-700 mb-4">For information on:</p>

                <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                    <li>Customizing Editflo, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">Basic
                            Setup</a>.</li>
                    <li>The three editor modes, see:
                        <ul class="list-circle list-inside ml-6 mt-2 space-y-1">
                            <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo classic editing
                                    mode</a>.</li>
                            <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo inline editing
                                    mode</a>.</li>
                            <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo distraction-free
                                    editing mode</a>.</li>
                        </ul>
                    </li>
                    <li>Adding Editflo plugins, see: <a href="#"
                            class="text-blue-600 hover:text-blue-800 underline">Work
                            with plugins to extend Editflo</a>.</li>
                    <li>Localizing the Editflo editor, see: <a href="#"
                            class="text-blue-600 hover:text-blue-800 underline">Localize Editflo</a>.</li>
                    <li>For information on the CSS required to render some Editflo elements outside of the editor, see:
                        <a href="#" class="text-blue-600 hover:text-blue-800 underline">CSS for rendering Editflo
                            content
                            outside the editor</a>.
                    </li>
                </ul>
                <!-- Code Block for API Key Update -->
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-blue-400">&lt;script </span>
                    <span class="text-green-400">src=</span>
                    <span class="text-yellow-300">"https://cdn.Editflo.cloud/1/</span>
                    <span class="text-red-400">YOUR-API-KEY-HERE</span>
                    <span class="text-yellow-300">/Editflomce/8/Editflomce.min.js"</span>
                    <span class="text-green-400"> referrerpolicy=</span>
                    <span class="text-yellow-300">"origin"</span>
                    <span class="text-green-400"> crossorigin=</span>
                    <span class="text-yellow-300">"anonymous"</span>
                    <span class="text-blue-400">&gt;&lt;/script&gt;</span>
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
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo Web Component Examples</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For examples of Editflo Web Component integration, see:
                            <a href="#" class="text-blue-600 hover:underline font-medium">the Editflo-Web Component
                                storybook</a>
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
                                    <span class="font-medium">Editflo Web Component:</span>
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

                        <!-- Web Component Guide -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fab fa-js-square text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Web Component Application:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Web Component guide</a> or
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Web Component docs</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Tab functionality
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');

                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('border-primary', 'text-primary');
                    btn.classList.add('border-transparent', 'text-text-light');
                });

                // Add active class to clicked button
                button.classList.add('border-primary', 'text-primary');
                button.classList.remove('border-transparent', 'text-text-light');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected tab content
                document.getElementById(`${tabId}-tab`).classList.remove('hidden');
            });
        });
    });
</script>