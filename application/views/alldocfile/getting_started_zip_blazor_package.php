<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class=" text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo .zip package with the
                Blazor framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 ">
            The Official Editflo Blazor component integrates Editflo into Blazor applications. This procedure creates a
            basic Blazor application and adds a Editflo editor using the Editflo Blazor integration. The basic Blazor
            application is based on the following tutorial: <a href="#" class="text-blue-600 hover:underline">Microsoft
                .NET Blazor Tutorial - Build your first Blazor app</a>.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            Select from the following guides:
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                <h3 class="font-semibold text-blue-800 mb-2">Using Visual Studio Code (VS Code)</h3>
                <a href="#vscode-guide" class="text-blue-600 hover:underline text-sm">View Guide →</a>
            </div>
            <div
                class="bg-green-50 border border-green-200 rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                <h3 class="font-semibold text-green-800 mb-2">Using Visual Studio</h3>
                <a href="#visualstudio-guide" class="text-green-600 hover:underline text-sm">View Guide →</a>
            </div>
            <div
                class="bg-purple-50 border border-purple-200 rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                <h3 class="font-semibold text-purple-800 mb-2">Using Command Prompt/Terminal</h3>
                <a href="#cli-guide" class="text-purple-600 hover:underline text-sm">View Guide →</a>
            </div>
        </div>
    </header>

    <!-- VS Code Guide -->
    <section id="vscode-guide" class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Using Visual Studio Code (VS Code)</h2>
        </div>
        <div class="py-4 sm:py-6 md:py-8 text-start">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800">Prerequisites</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 mb-6">
                <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-blue-500">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fab fa-microsoft text-blue-500 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 font-medium text-sm sm:text-base">Visual Studio Code (VS Code)</p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-green-500">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-cogs text-green-500 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 font-medium text-sm sm:text-base">.NET SDK</p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-purple-500">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-puzzle-piece text-purple-500 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 font-medium text-sm sm:text-base">C# Dev Kit VS Code Extension</p>
                    </div>
                </div>
            </div>
            <p class="text-gray-600 text-sm sm:text-base mb-4">Alternatively, the .NET WinGet Configuration file can be
                downloaded to install the necessary dependencies.</p>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create New Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">In VS Code, open the Command Palette by pressing
                        <kbd class="bg-gray-200 px-2 py-1 rounded">Ctrl+Shift+P</kbd>. Find <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">.NET: New Project</code>
                        and select it to create a new project.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Select Template</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Select <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">Blazor Web App</code>
                        from the list of templates and follow the steps to set up the project.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add NuGet Package</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Using the Command Palette, find and select <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">.NuGet: Add NuGet Package</code>.
                        Enter <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">Editflo.Blazor</code> and
                        select the package along with the version to install.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visual Studio Guide -->
    <section id="visualstudio-guide" class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Using Visual Studio</h2>
        </div>
        <div class="py-4 sm:py-6 md:py-8 text-start">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800">Prerequisites</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mb-6">
                <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-green-500">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fab fa-microsoft text-green-500 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 font-medium text-sm sm:text-base">Microsoft Visual Studio</p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-blue-500">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-cogs text-blue-500 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 font-medium text-sm sm:text-base">Microsoft .NET</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-green-100 text-green-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create New Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">On the Visual Studio toolbar, click the <strong>New
                            Project</strong> button.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-green-100 text-green-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Select Template</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Select the <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">Blazor Web App</code>
                        template and follow the steps to set up the project.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-green-100 text-green-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install NuGet Package</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Use the NuGet package manager console to install
                        the <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">Editflo.Blazor</code> package:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Package Manager Console</span>
                        </div>
                        <code><span class="text-yellow-300">Install-Package Editflo.Blazor</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-green-100 text-green-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test Application</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">To test the application, run the application by
                        pressing <kbd class="bg-gray-200 px-2 py-1 rounded">Ctrl+F5</kbd>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CLI Guide -->
    <section id="cli-guide" class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Using a Command Prompt or Terminal</h2>
        </div>
        <div class="py-4 sm:py-6 md:py-8 text-start">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800">Prerequisites</h3>
            </div>
            <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-purple-500 mb-6">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-cogs text-purple-500 text-lg"></i>
                </div>
                <div class="ml-3">
                    <p class="text-gray-700 font-medium text-sm sm:text-base">Microsoft .NET</p>
                </div>
            </div>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-purple-100 text-purple-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Blazor Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Blazor project:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Terminal</span>
                        </div>
                        <code><span class="text-yellow-300">dotnet new blazor -o EditfloBlazorApp --no-https</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-purple-100 text-purple-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Change Directory</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Change into the new application directory:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">cd EditfloBlazorApp</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-purple-100 text-purple-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Blazor</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Editflo Blazor integration:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">dotnet add package Editflo.Blazor</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-purple-100 text-purple-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test Application</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Test the application using the .NET development
                        server:</p>
                    <div class="space-y-2">
                        <div
                            class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                            <code><span class="text-yellow-300">dotnet watch run</span></code>
                        </div>
                        <p class="text-gray-600 text-xs sm:text-sm mt-1">This will start a local development server
                            accessible at <code
                                class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">http://localhost:{PORT}</code>,
                            where <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">{PORT}</code> is specified in
                            the project's <code
                                class="bg-gray-100 px-1 py-0.5 rounded text-xs">Properties/launchSettings.json</code>
                            file.</p>
                        <code
                            class="bg-gray-200 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono flex items-center">
                            <i class="fas fa-keyboard mr-1"></i>To stop: Ctrl+C
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Editflo Zip -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Download Editflo Zip</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mb-4">To use the self-hosted version of Editflo, download the
            Editflo zip. Unzip the content and place it in the project, such as in the <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">wwwroot</code> folder for storing public static assets.
        </p>
    </section>

    <!-- Post-Installation Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Post-Installation</h2>
        </div>
        <div class="space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Verify Installation</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Verify the installation by checking the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">ItemGroup</code> references in the project
                        file. For example, if the project is named <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">EditfloBlazorApp</code>, the relevant file
                        would be <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">EditfloBlazorApp.csproj</code>
                        with the dependency referenced as follows:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">EditfloBlazorApp.csproj</span>
                        </div>
                        <code><span class="text-blue-400">&lt;ItemGroup&gt;</span><br>
  <span class="text-gray-300 ml-4">&lt;PackageReference Include="Editflo.Blazor" Version="X.Y.Z" /&gt;</span><br>
<span class="text-blue-400 ml-4">&lt;/ItemGroup&gt;</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Editflo Script</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">editflo-blazor.js</code> script to the main
                        page. If using the Blazor Web App, add the script in <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">Components/App.razor</code>, for example:
                    </p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-blue-400">&lt;script src="_framework/blazor.web.js"&gt;&lt;/script&gt;</span><br>
<span class="text-blue-400">&lt;script src="_content/Editflo.Blazor/editflo-blazor.js"&gt;&lt;/script&gt;</span></code>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2">The location of the script depends on the type of
                        Blazor app:</p>
                    <ul class="list-disc list-inside text-gray-700 text-xs sm:text-sm ml-4 space-y-1">
                        <li><strong>Blazor Server:</strong> Add to <code
                                class="bg-gray-100 px-1 py-0.5 rounded text-xs">Pages/_Host.cshtml</code></li>
                        <li><strong>WASM:</strong> Add to <code
                                class="bg-gray-100 px-1 py-0.5 rounded text-xs">wwwroot/index.html</code></li>
                    </ul>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Editor Component</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add the Editor component to a page by either using
                        the <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">using</code> directive or full
                        namespace:</p>
                    <div class="space-y-4 mt-3">
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 sm:p-4">
                            <h4 class="font-semibold text-gray-800 text-sm mb-2">Using Directive:</h4>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <code><span class="text-blue-400">@using Editflo.Blazor</span><br>
<span class="text-blue-400">&lt;Editor /&gt;</span></code>
                            </div>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-400 text-xs">Pages/Index.razor</span>
                                </div>
                                <code><span class="text-blue-400">@page "/"</span><br>
<span class="text-blue-400">@rendermode InteractiveServer</span><br>
<span class="text-blue-400">@using Editflo.Blazor</span><br><br>

<span class="text-blue-400">&lt;h1&gt;</span>Hello, world!<span class="text-blue-400">&lt;/h1&gt;</span><br>
<span class="text-blue-400">&lt;h2&gt;</span>Welcome to your new app.<span class="text-blue-400">&lt;/h2&gt;</span><br>
<span class="text-blue-400">&lt;Editor /&gt;</span></code>
                            </div>
                        </div>
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 sm:p-4">
                            <h4 class="font-semibold text-gray-800 text-sm mb-2">Full Namespace:</h4>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <code><span class="text-blue-400">&lt;Editflo.Blazor.Editor /&gt;</span></code>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2">In a Blazor Web App, different render modes
                        determine how components are rendered and how interactivity is handled. To enable JavaScript
                        interactivity, ensure that <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">@rendermode InteractiveServer</code> is
                        specified in a page component.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update License Key</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">LicenseKey</code> option in the editor
                        element and include your License Key:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-blue-400">&lt;Editor LicenseKey="gpl" /&gt;</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">5</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Self-Hosted Configuration</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">To load Editflo from the self-hosted package
                        instead of the Editflo Cloud, configure the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">ScriptSrc</code> property:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-blue-400">&lt;Editor</span><br>
  <span class="text-gray-300 ml-4">ScriptSrc="/path/to/editflo.min.js"<br>
<span class="text-blue-400 ml-4">/&gt;</span></code>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Next Steps Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Next Steps</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mb-4">For information on customizing the integration, see:</p>
        <ul class="list-disc list-inside text-gray-700 space-y-2 text-sm sm:text-base">
            <li><a href="#" class="text-blue-600 hover:underline">Editflo basic setup</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">The Editflo Blazor integration technical reference</a>
            </li>
        </ul>
    </section>
</main>

<!-- Font Awesome -->