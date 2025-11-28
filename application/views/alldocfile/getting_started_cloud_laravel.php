<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 py-4 ">
    <!-- Header Section -->
    <header class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo from the Editflo Cloud CDN
                with Laravel Framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            This guide shows how to integrate Editflo into your Laravel projects. This procedure creates a basic Laravel
            application containing a Editflo editor.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            This procedure uses Laravel Blade templates for integration. For advanced usage, consider creating a custom
            form component.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-php text-purple-500 mr-2"></i>
            This procedure requires <a href="" class="text-blue-500 hover:underline ml-1">PHP 8.0+ and Composer</a>.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-laravel text-red-500 mr-2"></i>
            <a href="" class="text-blue-500 hover:underline ml-1">Laravel Framework</a> installed on your system.
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
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Laravel Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Laravel project named
                        editflo-laravel-demo.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">composer create-project laravel/laravel editflo-laravel-demo</code>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Navigate to Project Directory</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Change into the project directory.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">cd editflo-laravel-demo</code>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Blade View</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Blade view with Editflo integration.
                    </p>
                    <p class="text-gray-600 text-xs sm:text-base mt-1 mb-3 sm:mb-5">Using a text editor, open
                        /path/to/editflo-laravel-demo/resources/views/editor.blade.php and replace the contents with:
                    </p>

                    <!-- Responsive Code Block -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">editor.blade.php</span>
                        </div>

                        <div class="space-y-1">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">&lt;!DOCTYPE</span> <span
                                    class="text-gray-300">html&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-purple-400">&lt;html</span> <span
                                    class="text-blue-400">lang=</span><span class="text-green-400">"en"</span><span
                                    class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">&lt;head&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-purple-400">&lt;meta</span> <span
                                    class="text-blue-400">charset=</span><span
                                    class="text-green-400">"UTF-8"</span><span class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-purple-400">&lt;meta</span>
                                <span class="text-blue-400">name=</span>
                                <span class="text-green-400">"viewport"</span>
                                <span class="text-blue-400">content=</span>
                                <span class="text-green-400">"width=device-width,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs"></span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-green-400">initial-scale=1.0"</span>
                                <span class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-purple-400">&lt;title&gt;</span><span class="text-gray-300">Editflo
                                    Laravel Demo</span><span class="text-purple-400">&lt;/title&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-500">&lt;!--
                                    Include Editflo from CDN --&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-purple-400">&lt;script</span>
                                <span class="text-blue-400">src=</span>
                                <span
                                    class="text-green-400">"https://cdn.editflo.cloud/1/no-api-key/editflo/8/editflo.min.js"</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs"></span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">referrerpolicy=</span>
                                <span class="text-green-400">"origin"</span>
                                <span class="text-purple-400">&gt;&lt;/script&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">&lt;/head&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-purple-400">&lt;body&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">&lt;h1&gt;</span><span class="text-gray-300">Editflo Laravel
                                    Integration</span><span class="text-purple-400">&lt;/h1&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">&lt;form</span> <span
                                    class="text-blue-400">method=</span><span class="text-green-400">"POST"</span> <span
                                    class="text-blue-400">action=</span><span class="text-green-400">"{{
                                    route('editor.store') }}"</span><span class="text-purple-400">&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">@csrf</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-purple-400">&lt;textarea</span> <span
                                    class="text-blue-400">id=</span><span
                                    class="text-green-400">"mytextarea"</span><span
                                    class="text-purple-400">&gt;</span><span class="text-gray-300">Hello,
                                    World!</span><span class="text-purple-400">&lt;/textarea&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-purple-400">&lt;button</span> <span
                                    class="text-blue-400">type=</span><span class="text-green-400">"submit"</span><span
                                    class="text-purple-400">&gt;</span><span class="text-gray-300">Save
                                    Content</span><span class="text-purple-400">&lt;/button&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">&lt;/form&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">&lt;script&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span
                                    class="text-yellow-300">init</span><span class="text-gray-300">({</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-blue-400">selector</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'#mytextarea'</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                                    class="text-orange-400">500</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-blue-400">menubar</span><span class="text-gray-300">: </span><span
                                    class="text-blue-400">false</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">});</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-purple-400">&lt;/script&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span>
                                <span class="text-purple-400">&lt;/body&gt;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span>
                                <span class="text-purple-400">&lt;/html&gt;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-file-code text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-gray-600 text-xs sm:text-base mt-1 mb-3 sm:mb-5">Using a text editor, open
                        /path/to/Editflo-laravel-demo/src/app/app.component.ts and replace the contents with:</p>

                    <!-- Responsive Code Block -->
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">app.component.ts</span>
                        </div>

                        <div class="space-y-1">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">import</span> <span class="text-gray-300">{ Component
                                    }</span> <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'@laravel/core'</span><span class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-purple-400">import</span> <span class="text-gray-300">{ Editor
                                    }</span> <span class="text-purple-400">from</span> <span
                                    class="text-green-400">'@Editflo/Editflo-laravel'</span><span
                                    class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-purple-400">@Component</span><span class="text-gray-300">({</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-blue-400">selector</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'app-root'</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-blue-400">templateUrl</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'./app.component.html'</span><span
                                    class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span
                                    class="text-blue-400">styleUrls</span><span class="text-gray-300">: [</span><span
                                    class="text-green-400">'./app.component.css'</span><span
                                    class="text-gray-300">]</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                                <span class="text-gray-300">})</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                                <span class="text-purple-400">export class</span> <span
                                    class="text-yellow-300">AppComponent</span> <span class="text-gray-300">{</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span class="text-blue-400">title</span>
                                <span class="text-gray-300">= </span><span
                                    class="text-green-400">'Editflo-laravel-demo'</span><span
                                    class="text-gray-300">;</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span class="text-blue-400">init</span>
                                <span class="text-gray-300">= {</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                                    class="text-orange-400">500</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-blue-400">menubar</span><span class="text-gray-300">: </span><span
                                    class="text-blue-400">false</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">14</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-blue-400">plugins</span><span class="text-gray-300">: [</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">15</span>
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
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">16</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span>
                                <span class="text-green-400">'anchor'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'searchreplace'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'visualblocks'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'code'</span><span class="text-gray-300">, </span>
                                <span class="text-green-400">'fullscreen'</span><span class="text-gray-300">,</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">17</span>
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
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">18</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span class="text-gray-300">],</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">19</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-blue-400">toolbar</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'undo redo | blocks | '</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">20</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span class="text-green-400">'bold
                                    italic forecolor | alignleft aligncenter '</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">21</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-green-400">'alignright alignjustify | bullist numlist outdent indent |
                                    '</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">22</span>
                                <span class="text-gray-300 ml-6 sm:ml-12"></span><span
                                    class="text-green-400">'removeformat | help'</span><span
                                    class="text-gray-300">,</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">23</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span><span
                                    class="text-blue-400">content_style</span><span class="text-gray-300">: </span><span
                                    class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif;
                                    font-size:14px }'</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">24</span>
                                <span class="text-gray-300 ml-2 sm:ml-4"></span><span class="text-gray-300">};</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">25</span>
                                <span class="text-gray-300">}</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                        Also update app.component.html to include the editor component: &lt;editor
                        [init]="init"&gt;&lt;/editor&gt;
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
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update API Key</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Replace the "no-api-key" placeholder with your
                        actual Editflo Cloud API key in the Blade template.</p>
                    <code
                        class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">
                        src="https://cdn.editflo.cloud/1/YOUR-API-KEY/editflo/8/editflo.min.js"
                    </code>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-vial text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test the Application</h3>
                    <div class="mt-1 sm:mt-2 space-y-1 sm:space-y-2">
                        <p class="text-gray-600 text-xs sm:text-sm">To start the development server, navigate to the
                            <code class="bg-gray-100 px-1 rounded text-xs">editflo-laravel-demo</code> directory and
                            run:
                        </p>
                        <code
                            class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm inline-block font-mono flex items-center">
                            <i class="fas fa-terminal text-gray-500 mr-2"></i>php artisan serve
                        </code>
                        <p class="text-gray-600 text-xs sm:text-sm">Visit <code
                                class="bg-gray-100 px-1 rounded text-xs">http://localhost:8000/editor</code> in your
                            browser to see the Editflo editor.</p>
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
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Laravel Documentation</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For more information on Laravel development, see:
                            <a href="#" class="text-blue-600 hover:underline font-medium">Laravel Official
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
                            <p class="text-gray-700 text-sm sm:text-base font-medium">Advanced Integration</p>
                        </div>
                    </div>

                    <div class="space-y-2 sm:space-y-3 ml-8 sm:ml-9">
                        <!-- Blade Components -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-code text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Blade Components:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Create reusable Editflo
                                        components</a>
                                </p>
                            </div>
                        </div>

                        <!-- Form Validation -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-shield-alt text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Form Validation:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Laravel validation rules</a>
                                </p>
                            </div>
                        </div>

                        <!-- Database Integration -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-database text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Database Storage:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Store content in database</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>