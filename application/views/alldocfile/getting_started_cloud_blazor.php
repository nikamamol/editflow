<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 ">
    <!-- Header Section -->
    <header class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo from the Editflo Cloud CDN
                with the Blazor framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo Blazor component integrates Editflo into Blazor projects. This procedure creates a
            basic Blazor application containing a Editflo editor.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            For examples of the Editflo Blazor integration, visit the Editflo-blazor storybook.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-windows text-blue-500 mr-2"></i>
            This procedure requires <a href="" class="text-blue-500 hover:underline ml-1">.NET SDK</a> and <a href=""
                class="text-blue-500 hover:underline ml-1">Node.js</a>.
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
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Blazor Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Blazor Server or Blazor WebAssembly
                        project.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">dotnet new blazorserver -n EditfloBlazorDemo</code>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Blazor</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Editflo Blazor NuGet package in your
                        project.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">dotnet add package Editflo.Blazor</code>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cog text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Script Reference</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add the Editflo script reference to your
                        _Host.cshtml or index.html file.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">&lt;script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js"&gt;&lt;/script&gt;</code>
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
                        Pages/Index.razor and replace the contents with:</p>

                    <!-- Responsive Code Block -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Index.razor</span>
                        </div>

                        <div class="space-y-1">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">@page</span> <span class="text-green-400">"/"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-purple-400">@using</span> <span
                                    class="text-green-400">Editflo.Blazor</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300">&lt;</span><span class="text-yellow-300">h3</span><span
                                    class="text-gray-300">&gt;Editflo Blazor Demo&lt;/</span><span
                                    class="text-yellow-300">h3</span><span class="text-gray-300">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300">&lt;</span><span
                                    class="text-yellow-300">EditfloEditor</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-blue-400">ApiKey</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"your-api-key"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-blue-400">InitialValue</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"&lt;p&gt;This is the initial content of the
                                    editor.&lt;/p&gt;"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-blue-400">Init</span><span class="text-gray-300">=</span><span
                                    class="text-purple-400">@</span><span class="text-gray-300">(</span><span
                                    class="text-purple-400">new</span> <span
                                    class="text-yellow-300">EditfloConfig</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">{</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-blue-400">Height</span> <span class="text-gray-300">= </span><span
                                    class="text-orange-400">500</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-blue-400">Menubar</span> <span class="text-gray-300">= </span><span
                                    class="text-blue-400">false</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-blue-400">Plugins</span> <span class="text-gray-300">= </span><span
                                    class="text-purple-400">new</span> <span class="text-gray-300">[] { </span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span>
                                <span class="text-green-400">"advlist"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"autolink"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"lists"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"link"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"image"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"charmap"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"preview"</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span>
                                <span class="text-green-400">"anchor"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"searchreplace"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"visualblocks"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"code"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"fullscreen"</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span>
                                <span class="text-gray-300 ml-8 sm:ml-16"></span>
                                <span class="text-green-400">"insertdatetime"</span><span class="text-gray-300">,
                                </span>
                                <span class="text-green-400">"media"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"table"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"help"</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">"wordcount"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span class="text-gray-300">},</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-blue-400">Toolbar</span> <span class="text-gray-300">= </span><span
                                    class="text-green-400">"undo redo | blocks | bold italic | alignleft aligncenter
                                    alignright | bullist numlist outdent indent | help"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">})</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span>
                                <span class="text-gray-300">/&gt;</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                        This Blazor component will create a page containing a Editflo editor configured with basic
                        features.
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
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update the ApiKey property</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the ApiKey property in the EditfloEditor
                        component and include your Editflo Cloud API key.</p>
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
                            <code class="bg-gray-100 px-1 rounded text-xs">EditfloBlazorDemo</code> directory and run:
                        </p>
                        <code
                            class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm inline-block font-mono flex items-center">
                            <i class="fas fa-terminal text-gray-500 mr-2"></i>dotnet run
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
                before deployment. For information see: <a href="#" class="text-blue-600 hover:underline">Publishing
                    Blazor Apps</a>.</p>

            <p class="text-gray-800 font-medium text-sm sm:text-base mb-2 sm:mb-3 flex items-center">
                To deploy to a web server:
            </p>

            <div class="space-y-2 sm:space-y-3">
                <div class="flex items-start">
                    <div
                        class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Publish the application:</p>
                        <code
                            class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono">dotnet publish -c Release</code>
                    </div>
                </div>

                <div class="flex items-start">
                    <div
                        class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Copy contents of <code
                                class="bg-gray-100 px-1 rounded text-xs">bin/Release/net7.0/publish</code> to web
                            server.</p>
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
                            <p>For Blazor WebAssembly, additional hosting configuration may be required.</p>
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
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo Blazor Examples</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For examples of Editflo Blazor integration, see:
                            <a href="#" class="text-blue-600 hover:underline font-medium">the Editflo-blazor
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
                                    <span class="font-medium">Editflo Blazor:</span>
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

                        <!-- Blazor Guide -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fab fa-microsoft text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Blazor Application:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Blazor guide</a> or
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Blazor docs</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>