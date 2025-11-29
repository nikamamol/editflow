<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo package with the
                Blazor framework</h2>
        </div>
        <!-- Description -->
        <div class="mb-3 sm:mb-4 md:mb-5">
            <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
                <span class="flex-shrink-0 mr-2 w-4">
                    <i class="fas fa-info-circle text-blue-500 mt-0.5"></i>
                </span>
                <span class="flex-1 min-w-0">
                    The Official Editflo Blazor component integrates Editflo into Blazor applications. This procedure
                    creates a basic Blazor application and adds a Editflo editor using the Editflo Blazor integration.
                    <br><br>
                    The basic Blazor application is based on the following tutorial:
                    <br><strong>Microsoft .NET Blazor Tutorial - Build your first Blazor app.</strong>
                </span>
            </p>
        </div>
        <!-- Select Guide Section -->
        <div
            class="bg-white border border-slate-200/50 rounded-2xl p-6 sm:p-8 lg:p-10 mb-8 lg:mb-12 shadow-sm">
            <!-- Header -->
            <div class="flex flex-col lg:flex-row lg:items-start lg:gap-6 mb-8 lg:mb-10">

                <div class="flex-1 min-w-0">
                    <h3 class="text-2xl sm:text-2xl lg:text-2xl font-bold text-slate-900 mb-3 leading-tight">
                        Select from the following guides:
                    </h3>
                    <p class="text-slate-600 text-sm sm:text-base lg:text-lg max-w-3xl leading-relaxed">
                        Choose your preferred development environment to get started with Editflo Blazor integration
                    </p>
                </div>
            </div>

            <!-- Accordion -->
            <div class="space-y-3 sm:space-y-4">
                <!-- VS Code Accordion Item -->
                <div class="accordion-item group">
                    <button
                        class="accordion-trigger w-full flex items-center justify-between bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl p-6 lg:p-7 hover:border-slate-300/80 hover:bg-white hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500/50">
                        <div class="flex items-center space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-blue-500/90 to-blue-600/90 rounded-xl flex items-center justify-center shadow-sm ring-1 ring-white/30">
                                <i class="fab fa-microsoft text-white text-sm lg:text-base"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-semibold text-slate-900 text-sm sm:text-base lg:text-lg leading-tight">
                                    Visual Studio Code (VS Code)
                                </h4>
                                <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                    Create and configure using the popular VS Code editor
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 ml-4 flex-shrink-0">
                            <span class="text-xs sm:text-sm font-medium text-slate-700 hidden sm:inline">Get
                                Started</span>
                            <div
                                class="w-8 h-8 bg-gradient-to-br from-slate-200 to-slate-300 rounded-xl flex items-center justify-center group-data-[state=open]:bg-blue-500 group-data-[state=open]:text-white transition-all duration-300 shadow-sm">
                                <i
                                    class="fas fa-chevron-down text-slate-500 text-sm transition-transform duration-300 group-data-[state=open]:-rotate-180"></i>
                            </div>
                        </div>
                    </button>

                    <!-- Accordion Content -->
                    <div
                        class="accordion-content max-h-0 overflow-hidden bg-gradient-to-r from-slate-50/80 to-blue-50/80 backdrop-blur-sm border-x border-b border-slate-200/40 rounded-b-xl transition-all duration-500 ease-in-out group-data-[state=open]:max-h-[500px] group-data-[state=open]:p-6 lg:group-data-[state=open]:p-7 group-data-[state=open]:mt-1">
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-5 h-5 mt-0.5 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-rocket text-blue-600 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-medium text-slate-800 text-sm sm:text-base">Quick Setup</h5>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Open Command Palette (Ctrl+Shift+P) → ".NET: New Project" → Select Blazor Web
                                        App template
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-5 h-5 mt-0.5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-download text-green-600 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-medium text-slate-800 text-sm sm:text-base">Install Packages</h5>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Add <code
                                            class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs font-mono">Editflo.Blazor</code>
                                        via NuGet Package Manager
                                    </p>
                                </div>
                            </div>
                            <div class="pt-4 border-t border-slate-200/50">
                                <a href="#"
                                    class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-200">
                                    <span>View Complete Guide</span>
                                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual Studio Accordion Item -->
                <div class="accordion-item group">
                    <button
                        class="accordion-trigger w-full flex items-center justify-between bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl p-6 lg:p-7 hover:border-slate-300/80 hover:bg-white hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500/50">
                        <div class="flex items-center space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-indigo-500/90 to-purple-600/90 rounded-xl flex items-center justify-center shadow-sm ring-1 ring-white/30">
                                <i class="fas fa-window-maximize text-white text-sm lg:text-base"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-semibold text-slate-900 text-sm sm:text-base lg:text-lg leading-tight">
                                    Visual Studio
                                </h4>
                                <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                    Professional IDE for full-featured Blazor development
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 ml-4 flex-shrink-0">
                            <span class="text-xs sm:text-sm font-medium text-slate-700 hidden sm:inline">Get
                                Started</span>
                            <div
                                class="w-8 h-8 bg-gradient-to-br from-slate-200 to-slate-300 rounded-xl flex items-center justify-center group-data-[state=open]:bg-blue-500 group-data-[state=open]:text-white transition-all duration-300 shadow-sm">
                                <i
                                    class="fas fa-chevron-down text-slate-500 text-sm transition-transform duration-300 group-data-[state=open]:-rotate-180"></i>
                            </div>
                        </div>
                    </button>

                    <!-- Accordion Content -->
                    <div
                        class="accordion-content max-h-0 overflow-hidden bg-gradient-to-r from-slate-50/80 to-blue-50/80 backdrop-blur-sm border-x border-b border-slate-200/40 rounded-b-xl transition-all duration-500 ease-in-out group-data-[state=open]:max-h-[500px] group-data-[state=open]:p-6 lg:group-data-[state=open]:p-7 group-data-[state=open]:mt-1">
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-5 h-5 mt-0.5 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-rocket text-blue-600 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-medium text-slate-800 text-sm sm:text-base">Quick Setup</h5>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        File → New → Project → Select "Blazor Web App" template
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-5 h-5 mt-0.5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-download text-green-600 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-medium text-slate-800 text-sm sm:text-base">Install Packages</h5>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Use Package Manager Console: <code
                                            class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs font-mono">Install-Package Editflo.Blazor</code>
                                    </p>
                                </div>
                            </div>
                            <div class="pt-4 border-t border-slate-200/50">
                                <a href="#"
                                    class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-200">
                                    <span>View Complete Guide</span>
                                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Command Line Accordion Item -->
                <div class="accordion-item group">
                    <button
                        class="accordion-trigger w-full flex items-center justify-between bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl p-6 lg:p-7 hover:border-slate-300/80 hover:bg-white hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500/50">
                        <div class="flex items-center space-x-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-slate-600/90 to-gray-700/90 rounded-xl flex items-center justify-center shadow-sm ring-1 ring-white/30">
                                <i class="fas fa-terminal text-white text-sm lg:text-base"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-semibold text-slate-900 text-sm sm:text-base lg:text-lg leading-tight">
                                    Command Prompt/Terminal
                                </h4>
                                <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                    Fast command line approach for experienced developers
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 ml-4 flex-shrink-0">
                            <span class="text-xs sm:text-sm font-medium text-slate-700 hidden sm:inline">Get
                                Started</span>
                            <div
                                class="w-8 h-8 bg-gradient-to-br from-slate-200 to-slate-300 rounded-xl flex items-center justify-center group-data-[state=open]:bg-blue-500 group-data-[state=open]:text-white transition-all duration-300 shadow-sm">
                                <i
                                    class="fas fa-chevron-down text-slate-500 text-sm transition-transform duration-300 group-data-[state=open]:-rotate-180"></i>
                            </div>
                        </div>
                    </button>

                    <!-- Accordion Content -->
                    <div
                        class="accordion-content max-h-0 overflow-hidden bg-gradient-to-r from-slate-50/80 to-blue-50/80 backdrop-blur-sm border-x border-b border-slate-200/40 rounded-b-xl transition-all duration-500 ease-in-out group-data-[state=open]:max-h-[500px] group-data-[state=open]:p-6 lg:group-data-[state=open]:p-7 group-data-[state=open]:mt-1">
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-5 h-5 mt-0.5 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-rocket text-blue-600 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-medium text-slate-800 text-sm sm:text-base">Quick Setup</h5>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Run: <code
                                            class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs font-mono">dotnet new blazor -o BlazorApp</code>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-5 h-5 mt-0.5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-download text-green-600 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-medium text-slate-800 text-sm sm:text-base">Install Packages</h5>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Run: <code
                                            class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs font-mono">dotnet add package Editflo.Blazor</code>
                                    </p>
                                </div>
                            </div>
                            <div class="pt-4 border-t border-slate-200/50">
                                <a href="#"
                                    class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-200">
                                    <span>View Complete Guide</span>
                                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
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
                    <p class="text-gray-600 text-sm sm:text-base">
                        <strong>Common Requirements:</strong>
                        <br><br>
                        • Microsoft .NET SDK
                        <br>• Visual Studio Code (VS Code) <span class="text-sm">(for VS Code method)</span>
                        <br>• Microsoft Visual Studio <span class="text-sm">(for Visual Studio method)</span>
                        <br>• C# Dev Kit VS Code Extension <span class="text-sm">(recommended for VS Code)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started</h2>
        </div>

        <!-- VS Code Method -->
        <div class="border border-gray-200 rounded-lg p-4 sm:p-6 mb-6 sm:mb-8">
            <div class="flex items-start mb-4">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center mr-3 flex-shrink-0">
                    <i class="fab fa-microsoft text-sm sm:text-base"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Using Visual Studio Code (VS Code)</h3>
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-plus text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Create New Project</h4>
                        <p class="text-gray-600 text-xs sm:text-sm mt-1">
                            Open Command Palette (<kbd class="bg-gray-200 px-2 py-1 rounded text-xs">Ctrl+Shift+P</kbd>)
                            <br>Find and select <code
                                class="bg-gray-100 px-2 py-1 rounded text-xs font-mono ml-2">.NET: New Project</code>
                            <br>Select <strong>Blazor Web App</strong> template
                        </p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-download text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Install NuGet Packages</h4>
                        <div class="mt-2 space-y-3">
                            <div class="flex items-start bg-gray-50 p-3 rounded-lg">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-box text-green-500 text-sm"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-600 text-xs sm:text-sm font-medium">Install Editflo.Blazor:</p>
                                    <code
                                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 block font-mono">.NuGet: Add NuGet Package → Editflo.Blazor</code>
                                </div>
                            </div>
                            <div class="flex items-start bg-gray-50 p-3 rounded-lg">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-box text-green-500 text-sm"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-600 text-xs sm:text-sm font-medium">For self-hosted Editflo:</p>
                                    <code
                                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 block font-mono">.NuGet: Add NuGet Package → Editflo</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visual Studio Method -->
        <div class="border border-gray-200 rounded-lg p-4 sm:p-6 mb-6 sm:mb-8">
            <div class="flex items-start mb-4">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center mr-3 flex-shrink-0">
                    <i class="fas fa-window-maximize text-sm sm:text-base"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Using Visual Studio</h3>
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-plus text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Create New Project</h4>
                        <p class="text-gray-600 text-xs sm:text-sm mt-1">Click <strong>New Project</strong> → Select
                            <strong>Blazor Web App</strong> template
                        </p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-download text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Install Packages via NuGet Console
                        </h4>
                        <div class="mt-2 space-y-3">
                            <div
                                class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mb-2">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">Package Manager Console</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                            class="text-purple-400">Install-Package</span> <span
                                            class="text-green-400">Editflo.Blazor</span></div>
                                </div>
                            </div>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">Package Manager Console</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                            class="text-purple-400">Install-Package</span> <span
                                            class="text-green-400">Editflo</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-play text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Test Application</h4>
                        <p class="text-gray-600 text-xs sm:text-sm mt-1">Press <kbd
                                class="bg-gray-200 px-2 py-1 rounded text-xs">Ctrl+F5</kbd> to run</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Command Line Method -->
        <div class="border border-gray-200 rounded-lg p-4 sm:p-6 mb-6 sm:mb-8">
            <div class="flex items-start mb-4">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center mr-3 flex-shrink-0">
                    <i class="fas fa-terminal text-sm sm:text-base"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Using Command Prompt/Terminal</h3>
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-plus text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Create Project</h4>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <span class="text-gray-400 text-xs">Terminal</span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                        class="text-blue-400">dotnet</span> <span class="text-purple-400">new</span>
                                    <span class="text-green-400">blazor</span> <span class="text-gray-300">-o</span>
                                    <span class="text-green-400">BlazorApp</span> <span
                                        class="text-gray-300">--no-https</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-folder-open text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Change Directory</h4>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <span class="text-gray-400 text-xs">Terminal</span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                        class="text-blue-400">cd</span> <span class="text-green-400">BlazorApp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-download text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Install Packages</h4>
                        <div class="mt-2 space-y-3">
                            <div
                                class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">Terminal</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                            class="text-blue-400">dotnet</span> <span class="text-purple-400">add</span>
                                        <span class="text-green-400">package</span> <span
                                            class="text-yellow-400">Editflo.Blazor</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">Terminal</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                            class="text-blue-400">dotnet</span> <span class="text-purple-400">add</span>
                                        <span class="text-green-400">package</span> <span
                                            class="text-yellow-400">Editflo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                        <i class="fas fa-play text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm sm:text-base">Run Development Server</h4>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <span class="text-gray-400 text-xs">Terminal</span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                        class="text-blue-400">dotnet</span> <span class="text-purple-400">watch</span>
                                    <span class="text-green-400">run</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 text-xs sm:text-sm mt-2">Server runs at <code
                                class="bg-gray-100 px-2 py-1 rounded text-xs">http://localhost:{PORT}</code></p>
                        <p class="text-gray-600 text-xs sm:text-sm mt-1">Stop with <kbd
                                class="bg-gray-200 px-2 py-1 rounded text-xs">Ctrl+C</kbd></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post-Installation Section -->
        <div class="border-t border-gray-200 pt-6">
            <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-4">Post-Installation Configuration</h3>

            <!-- Verify Installation -->
            <div class="flex items-start mb-6">
                <div
                    class="bg-green-100 text-green-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                    <i class="fas fa-check text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="font-medium text-gray-800 text-sm sm:text-base">Verify Installation</h4>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">Check <code
                            class="bg-gray-100 px-1 rounded text-xs">BlazorApp.csproj</code>:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">BlazorApp.csproj</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-blue-400">&lt;ItemGroup&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span> <span
                                    class="text-blue-400">&lt;PackageReference</span> <span
                                    class="text-purple-400">Include</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"Editflo.Blazor"</span> <span
                                    class="text-purple-400">Version</span><span class="text-gray-300">=</span><span
                                    class="text-green-400">"X.Y.Z"</span> <span class="text-gray-300">/&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span><span
                                    class="text-blue-400">&lt;/ItemGroup&gt;</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Script -->
            <div class="flex items-start mb-6">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="font-medium text-gray-800 text-sm sm:text-base">Add Editflo Script</h4>
                    <div class="mt-3 space-y-3">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600 text-xs sm:text-sm font-medium mb-2"><strong>Blazor Web
                                    App:</strong> Add to <code
                                    class="bg-gray-100 px-1 rounded text-xs">Components/App.razor</code></p>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">App.razor</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                            class="text-blue-400">&lt;script</span> <span
                                            class="text-purple-400">src</span><span class="text-gray-300">=</span><span
                                            class="text-green-400">"_framework/blazor.web.js"</span><span
                                            class="text-blue-400">&gt;&lt;/script&gt;</span></div>
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                            class="text-blue-400">&lt;script</span> <span
                                            class="text-purple-400">src</span><span class="text-gray-300">=</span><span
                                            class="text-green-400">"_content/Editflo.Blazor/Editflo-blazor.js"</span><span
                                            class="text-blue-400">&gt;&lt;/script&gt;</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-600 text-xs sm:text-sm font-medium mb-2"><strong>Blazor Server:</strong>
                                Add to <code class="bg-gray-100 px-1 rounded text-xs">Pages/_Host.cshtml</code></p>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">_Host.cshtml</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                            class="text-blue-400">&lt;script</span> <span
                                            class="text-purple-400">src</span><span class="text-gray-300">=</span><span
                                            class="text-green-400">"_framework/blazor.server.js"</span><span
                                            class="text-blue-400">&gt;&lt;/script&gt;</span></div>
                                    <div class="flex"><span
                                            class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                            class="text-blue-400">&lt;script</span> <span
                                            class="text-purple-400">src</span><span class="text-gray-300">=</span><span
                                            class="text-green-400">"_content/Editflo.Blazor/Editflo-blazor.js"</span><span
                                            class="text-blue-400">&gt;&lt;/script&gt;</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Editor Component -->
            <div class="flex items-start mb-6">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                    <i class="fas fa-edit text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="font-medium text-gray-800 text-sm sm:text-base">Add Editor Component</h4>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-3">In <code
                            class="bg-gray-100 px-1 rounded text-xs">Pages/Index.razor</code>:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Index.razor</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                    class="text-blue-400">@page</span> <span class="text-string">"/"</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span><span
                                    class="text-blue-400">@rendermode</span> <span
                                    class="text-purple-400">InteractiveServer</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span><span
                                    class="text-blue-400">@using</span> <span
                                    class="text-green-400">Editflo.Blazor</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span><span
                                    class="text-blue-400">&lt;h1&gt;</span>Hello, world!<span
                                    class="text-blue-400">&lt;/h1&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span><span
                                    class="text-blue-400">&lt;h2&gt;</span>Welcome to your new app.<span
                                    class="text-blue-400">&lt;/h2&gt;</span></div>
                            <div class="flex"><span
                                    class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span><span
                                    class="text-blue-400">&lt;Editor</span> <span
                                    class="text-purple-400">LicenseKey</span><span class="text-gray-300">=</span><span
                                    class="text-string">"gpl"</span> <span class="text-gray-300">/&gt;</span></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-3">
                        <span class="font-medium">Important:</span> Use <code
                            class="bg-gray-100 px-1 rounded text-xs">@rendermode InteractiveServer</code> for JavaScript
                        interactivity.
                    </p>
                </div>
            </div>

            <!-- Self-Hosted Configuration -->
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                        <i class="fas fa-lightbulb text-yellow-500 text-lg"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <h4 class="text-sm font-medium text-yellow-800 mb-2">Self-Hosted Editflo</h4>
                        <p class="text-yellow-700 text-xs sm:text-sm">
                            Configure ScriptSrc for self-hosted Editflo:
                        </p>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm mt-2 overflow-x-auto border border-gray-700">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <span class="text-gray-400 text-xs">Index.razor</span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span><span
                                        class="text-blue-400">&lt;Editor</span></div>
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span> <span
                                        class="text-purple-400">LicenseKey</span><span
                                        class="text-gray-300">=</span><span class="text-string">"gpl"</span></div>
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span> <span
                                        class="text-purple-400">ScriptSrc</span><span
                                        class="text-gray-300">=</span><span
                                        class="text-string">"/path/to/Editflo.min.js"</span></div>
                                <div class="flex"><span
                                        class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span><span
                                        class="text-gray-300">/&gt;</span></div>
                            </div>
                        </div>
                    </div>
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
                        For customizing the Editflo Blazor integration:
                        <br><br>
                        • <a href="#" class="text-blue-600 hover:underline font-medium">Editflo Basic Setup</a>
                        <br>• <a href="#" class="text-blue-600 hover:underline font-medium">Editflo Blazor Technical
                            Reference</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

  <script>
            document.addEventListener('DOMContentLoaded', function () {
                const accordionTriggers = document.querySelectorAll('.accordion-trigger');

                accordionTriggers.forEach(trigger => {
                    trigger.addEventListener('click', function () {
                        const accordionItem = this.closest('.accordion-item');
                        const isOpen = accordionItem.dataset.state === 'open';

                        // Close all accordions
                        document.querySelectorAll('.accordion-item').forEach(item => {
                            item.dataset.state = '';
                            item.classList.remove('open');
                        });

                        // Open clicked accordion if it wasn't open
                        if (!isOpen) {
                            accordionItem.dataset.state = 'open';
                            accordionItem.classList.add('open');
                        }
                    });
                });
            });
        </script>