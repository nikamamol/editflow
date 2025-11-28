<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 ">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo from the Editflo Cloud CDN
                with jQuery
            </h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            This guide shows how to integrate Editflo into your web projects using jQuery. This procedure creates an
            HTML page containing a Editflo editor with jQuery integration.
        </p>
    </header>


    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-js-square text-yellow-500 mr-2"></i>
            <a href="" class="text-blue-500 hover:underline ml-1">jQuery Library </a>
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fas fa-code text-dark-500 mr-2"></i>
            <a href="" class="text-blue-500 hover:underline ml-1">Basic HTML/CSS Knowledge </a>
        </p>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started with jQuery</h2>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create HTML Structure</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a basic HTML file with jQuery and Editflo
                        CDN links:</p>

                    <!-- HTML Structure Code Block -->
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
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-blue-400">&lt;html lang="en"&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-blue-400">&lt;head&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">&lt;meta charset="UTF-8"&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">&lt;meta name="viewport" content="width=device-width,
                                    initial-scale=1.0"&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">&lt;title&gt;</span><span class="text-gray-300">Editflo
                                    jQuery Demo</span><span class="text-blue-400">&lt;/title&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-500">&lt;!-- Include jQuery --&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">&lt;script </span><span
                                    class="text-green-400">src=</span><span
                                    class="text-yellow-300">"https://code.jquery.com/jquery-3.6.0.min.js"</span><span
                                    class="text-blue-400">&gt;&lt;/script&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-500">&lt;!-- Include Editflo --&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">&lt;script </span><span
                                    class="text-green-400">src=</span><span
                                    class="text-yellow-300">"https://cdn.editflo.cloud/1/no-api-key/editflo/8/editflo.min.js"</span><span
                                    class="text-blue-400">&gt;&lt;/script&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-blue-400">&lt;/head&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                                <span class="text-blue-400">&lt;body&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-blue-400">&lt;h1&gt;</span><span class="text-gray-300">Editflo jQuery
                                    Integration</span><span class="text-blue-400">&lt;/h1&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-blue-400">&lt;form method="post"&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">&lt;textarea </span><span
                                    class="text-green-400">id=</span><span
                                    class="text-yellow-300">"myTextarea"</span><span
                                    class="text-blue-400">&gt;</span><span class="text-gray-300">Hello,
                                    World!</span><span class="text-blue-400">&lt;/textarea&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-blue-400">&lt;/form&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span>
                                <span class="text-blue-400">&lt;/body&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span>
                                <span class="text-blue-400">&lt;/html&gt;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cog text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Initialize Editflo with jQuery</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add jQuery script to initialize Editflo editor:</p>

                    <!-- jQuery Initialization Code -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
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
                                <span class="text-purple-400">$(document)</span><span
                                    class="text-gray-300">.</span><span class="text-yellow-300">ready</span><span
                                    class="text-gray-300">(</span><span class="text-purple-400">function</span><span
                                    class="text-gray-300">() {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-500">// Initialize Editflo editor</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">init</span><span class="text-gray-300">({</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'#myTextarea'</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                                    class="text-orange-400">400</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-blue-400">menubar</span><span class="text-gray-300">: </span><span
                                    class="text-blue-400">false</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-blue-400">plugins</span><span class="text-gray-300">: [</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span>
                                <span class="text-green-400">'advlist'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'autolink'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'lists'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'link'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'image'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'charmap'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-gray-300">],</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-blue-400">toolbar</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'undo redo | bold italic | alignleft aligncenter alignright |
                                    bullist numlist'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-300">});</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
                                <span class="text-gray-300">});</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Advanced jQuery Integration</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Use jQuery to interact with Editflo editor:</p>

                    <!-- Advanced jQuery Code -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">advanced-script.js</span>
                        </div>

                        <div class="space-y-1">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">$(document)</span><span
                                    class="text-gray-300">.</span><span class="text-yellow-300">ready</span><span
                                    class="text-gray-300">(</span><span class="text-purple-400">function</span><span
                                    class="text-gray-300">() {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-purple-400">var</span> <span class="text-gray-300">editor;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-500">// Initialize editor</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-300">editor = </span><span
                                    class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">init</span><span class="text-gray-300">({</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'#myTextarea'</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                                    class="text-orange-400">400</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-300">});</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-500">// Get content with jQuery</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-purple-400">$</span><span class="text-gray-300">(</span><span
                                    class="text-green-400">'#getContent'</span><span
                                    class="text-gray-300">).</span><span class="text-yellow-300">click</span><span
                                    class="text-gray-300">(</span><span class="text-purple-400">function</span><span
                                    class="text-gray-300">() {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-purple-400">var</span> <span class="text-gray-300">content =
                                    editor.</span><span class="text-yellow-300">getContent</span><span
                                    class="text-gray-300">();</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-purple-400">$</span><span class="text-gray-300">(</span><span
                                    class="text-green-400">'#output'</span><span class="text-gray-300">).</span><span
                                    class="text-yellow-300">text</span><span class="text-gray-300">(content);</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-gray-300">});</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span>
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
                    <i class="fas fa-key text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update API Key</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Replace the "no-api-key" placeholder with your
                        actual Editflo Cloud API key:</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">https://cdn.editflo.cloud/1/YOUR-API-KEY/editflo/8/editflo.min.js</code>
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
                        <p class="text-gray-600 text-xs sm:text-sm">Open your HTML file in a web browser to see the
                            Editflo editor integrated with jQuery.</p>
                        <p class="text-gray-600 text-xs sm:text-sm">You should see a fully functional rich text editor
                            with jQuery-powered interactions.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery Methods Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Common jQuery Methods with Editflo</h3>
            </div>

            <div class="space-y-4">
                <!-- Method 1 -->
                <div class="bg-gray-50 rounded-lg p-3 sm:p-4">
                    <h4 class="font-semibold text-gray-800 text-xs sm:text-sm md:text-base mb-2">Get Editor Content</h4>
                    <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs overflow-x-auto">
                        <div class="min-w-max">
                            <span class="text-purple-400">var</span> <span class="text-gray-300">content = </span>
                            <span class="text-purple-400">editflo</span>
                            <span class="text-gray-300">.</span>
                            <span class="text-yellow-300">get</span>
                            <span class="text-gray-300">(</span>
                            <span class="text-green-400">'#myTextarea'</span>
                            <span class="text-gray-300">).</span>
                            <span class="text-yellow-300">getContent</span>
                            <span class="text-gray-300">();</span>
                        </div>
                    </div>
                </div>

                <!-- Method 2 -->
                <div class="bg-gray-50 rounded-lg p-3 sm:p-4">
                    <h4 class="font-semibold text-gray-800 text-xs sm:text-sm md:text-base mb-2">Set Editor Content</h4>
                    <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs overflow-x-auto">
                        <div class="min-w-max">
                            <span class="text-purple-400">editflo</span>
                            <span class="text-gray-300">.</span>
                            <span class="text-yellow-300">get</span>
                            <span class="text-gray-300">(</span>
                            <span class="text-green-400">'#myTextarea'</span>
                            <span class="text-gray-300">).</span>
                            <span class="text-yellow-300">setContent</span>
                            <span class="text-gray-300">(</span>
                            <span class="text-green-400">'&lt;p&gt;New content&lt;/p&gt;'</span>
                            <span class="text-gray-300">);</span>
                        </div>
                    </div>
                </div>

                <!-- Method 3 -->
                <div class="bg-gray-50 rounded-lg p-3 sm:p-4">
                    <h4 class="font-semibold text-gray-800 text-xs sm:text-sm md:text-base mb-2">Event Handling</h4>
                    <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs overflow-x-auto">
                        <div class="min-w-max">
                            <span class="text-purple-400">editflo</span>
                            <span class="text-gray-300">.</span>
                            <span class="text-yellow-300">get</span>
                            <span class="text-gray-300">(</span>
                            <span class="text-green-400">'#myTextarea'</span>
                            <span class="text-gray-300">).</span>
                            <span class="text-yellow-300">on</span>
                            <span class="text-gray-300">(</span>
                            <span class="text-green-400">'change'</span>
                            <span class="text-gray-300">, </span>
                            <span class="text-purple-400">function</span>
                            <span class="text-gray-300">() {</span>
                            <br>
                            <span class="text-gray-300 ml-4"></span>
                            <span class="text-purple-400">var</span> <span class="text-gray-300">content = </span>
                            <span class="text-purple-400">editflo</span>
                            <span class="text-gray-300">.</span>
                            <span class="text-yellow-300">get</span>
                            <span class="text-gray-300">(</span>
                            <span class="text-green-400">'#myTextarea'</span>
                            <span class="text-gray-300">).</span>
                            <span class="text-yellow-300">getContent</span>
                            <span class="text-gray-300">();</span>
                            <br>
                            <span class="text-gray-300 ml-4"></span>
                            <span class="text-purple-400">$</span>
                            <span class="text-gray-300">(</span>
                            <span class="text-green-400">'#preview'</span>
                            <span class="text-gray-300">).</span>
                            <span class="text-yellow-300">html</span>
                            <span class="text-gray-300">(content);</span>
                            <br>
                            <span class="text-gray-300">});</span>
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
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo jQuery Examples</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For more jQuery integration examples, see:
                            <a href="#" class="text-blue-600 hover:underline font-medium">Editflo jQuery
                                Documentation</a>
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
                        <!-- API Reference -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-code text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Editflo API:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Complete API Reference</a>
                                </p>
                            </div>
                        </div>

                        <!-- jQuery Plugins -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fab fa-js-square text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">jQuery Integration:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Advanced jQuery Methods</a>
                                </p>
                            </div>
                        </div>

                        <!-- Configuration -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-tools text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Configuration:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Editor Configuration
                                        Options</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>