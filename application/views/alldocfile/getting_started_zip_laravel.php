<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using TinyMCE with Laravel Framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2">
            Laravel is a scalable web application framework built on PHP. This guide assists with adding TinyMCE from the TinyMCE .zip package to pages or views in Laravel.
        </p>
    </header>

    <!-- Important Notice -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 mt-3">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
            </div>
            <div class="ml-3">
                <p class="text-yellow-700 font-medium">Warning</p>
                <p class="text-yellow-600 mt-1">This domain is not registered with TinyMCE Cloud. Please see the quick start guide or create an account.</p>
            </div>
        </div>
    </div>

    <!-- Requirements -->
    <div class="text-start">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-4">Requirements</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fab fa-php text-purple-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">PHP</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fas fa-gem text-red-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">Composer</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fab fa-node-js text-green-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">Node.js & npm</span>
            </div>
        </div>
    </div>

    <!-- Procedure -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-8 mt-3">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-6">Procedure</h2>

        <!-- Step 1 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Create Laravel Project</h3>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">Terminal</span>
                    </div>
                    <div class="space-y-2">
                        <code class="block text-green-400">composer create-project laravel/laravel my-example-app</code>
                        <code class="block text-blue-400">cd my-example-app</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Install Dependencies</h3>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">Terminal</span>
                    </div>
                    <div class="space-y-2">
                        <code class="block text-green-400">npm install</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Download and Extract TinyMCE</h3>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">Terminal</span>
                    </div>
                    <div class="space-y-2">
                        <code class="block text-blue-400"># Download TinyMCE and extract to resources/js directory</code>
                        <code class="block text-green-400">unzip ../tinymce_latest.zip -d resources/js</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Configure Laravel Mix</h3>
                <p class="text-gray-600 text-sm mb-3">File: <code class="bg-gray-200 px-2 py-1 rounded text-xs">webpack.mix.js</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">webpack.mix.js</span>
                    </div>
                    <div class="space-y-2">
                        <code class="block text-purple-400">mix.copyDirectory</code>
                        <code class="block text-gray-300">('resources/js/tinymce/js/tinymce', 'public/js/tinymce');</code>
                    </div>
                </div>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6 mt-3">
                    <code class="block text-green-400">npx mix</code>
                </div>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Create Config Component</h3>
                <div class="bg-gray-100 p-3 rounded text-xs sm:text-sm mb-4">
                    <code class="block text-purple-600 font-mono">php artisan make:component Head/tinymceConfig</code>
                </div>
                <p class="text-gray-600 text-sm mb-3">File: <code class="bg-gray-200 px-2 py-1 rounded text-xs">resources/views/components/head/tinymce-config.blade.php</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6 max-h-72 overflow-y-auto">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">tinymce-config.blade.php</span>
                    </div>
                    <div class="space-y-1">
                        <code class="block"><span class="text-blue-400">&lt;script</span> <span class="text-purple-400">src</span>=<span class="text-yellow-400">"{{ asset('js/tinymce/tinymce.min.js') }}"</span> <span class="text-purple-400">referrerpolicy</span>=<span class="text-yellow-400">"origin"</span> <span class="text-purple-400">crossorigin</span>=<span class="text-yellow-400">"anonymous"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span></code>
                        <code class="block"><span class="text-blue-400">&lt;script&gt;</span></code>
                        <code class="block ml-4"><span class="text-green-400">tinymce.init</span>({</code>
                        <code class="block ml-8"><span class="text-purple-400">selector</span>: <span class="text-yellow-400">'textarea#myeditorinstance'</span>,</code>
                        <code class="block ml-8"><span class="text-purple-400">plugins</span>: <span class="text-yellow-400">'code table lists'</span>,</code>
                        <code class="block ml-8"><span class="text-purple-400">toolbar</span>: <span class="text-yellow-400">'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'</span></code>
                        <code class="block ml-4">});</code>
                        <code class="block"><span class="text-blue-400">&lt;/script&gt;</span></code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Create Editor Component</h3>
                <div class="bg-gray-100 p-3 rounded text-xs sm:text-sm mb-4">
                    <code class="block font-mono">
                        <span class="text-purple-600">php artisan make:component Forms/tinymceEditor</span>
                    </code>
                </div>
                <p class="text-gray-600 text-sm mb-3">
                    File:
                    <code class="bg-gray-200 px-2 py-1 rounded text-xs">
                        resources/views/components/forms/tinymce-editor.blade.php
                    </code>
                </p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">tinymce-editor.blade.php</span>
                    </div>
                    <div class="space-y-1">
                        <code class="block">
                            <span class="text-blue-400">&lt;form</span>
                            <span class="text-purple-400">method</span>=<span class="text-yellow-400">"post"</span>
                            <span class="text-blue-400">&gt;</span>
                        </code>
                        <code class="block ml-4">
                            <span class="text-blue-400">&lt;textarea</span>
                            <span class="text-purple-400">id</span>=<span class="text-yellow-400">"myeditorinstance"</span>
                            <span class="text-blue-400">&gt;</span>
                            Hello, World!
                            <span class="text-blue-400">&lt;/textarea&gt;</span>
                        </code>
                        <code class="block">
                            <span class="text-blue-400">&lt;/form&gt;</span>
                        </code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 7 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Use Components in Views</h3>
                <p class="text-gray-600 text-sm mb-3">File: <code class="bg-gray-200 px-2 py-1 rounded text-xs">resources/views/welcome.blade.php</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">welcome.blade.php</span>
                    </div>
                    <div class="space-y-1">
                        <code class="block text-gray-300"><span class="text-blue-400">&lt;!DOCTYPE</span> <span class="text-green-400">html</span><span class="text-blue-400">&gt;</span></code>
                        <code class="block text-gray-300"><span class="text-blue-400">&lt;html</span> <span class="text-purple-400">lang</span>=<span class="text-yellow-400">"{{ str_replace('_', '-', app()->getLocale()) }}"</span><span class="text-blue-400">&gt;</span></code>
                        <code class="block text-gray-300 ml-4"><span class="text-blue-400">&lt;head&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-blue-400">&lt;meta</span> <span class="text-purple-400">charset</span>=<span class="text-yellow-400">"UTF-8"</span><span class="text-blue-400">&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-blue-400">&lt;meta</span> <span class="text-purple-400">name</span>=<span class="text-yellow-400">"viewport"</span> <span class="text-purple-400">content</span>=<span class="text-yellow-400">"width=device-width, initial-scale=1"</span><span class="text-blue-400">&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-blue-400">&lt;title&gt;</span>TinyMCE in Laravel<span class="text-blue-400">&lt;/title&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-green-400">&lt;!-- Insert the blade containing the TinyMCE configuration and source script --&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-blue-400">&lt;x-head.tinymce-config/&gt;</span></code>
                        <code class="block text-gray-300 ml-4"><span class="text-blue-400">&lt;/head&gt;</span></code>
                        <code class="block text-gray-300 ml-4"><span class="text-blue-400">&lt;body&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-blue-400">&lt;h1&gt;</span>TinyMCE in Laravel<span class="text-blue-400">&lt;/h1&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-green-400">&lt;!-- Insert the blade containing the TinyMCE placeholder HTML element --&gt;</span></code>
                        <code class="block text-gray-300 ml-8"><span class="text-blue-400">&lt;x-forms.tinymce-editor/&gt;</span></code>
                        <code class="block text-gray-300 ml-4"><span class="text-blue-400">&lt;/body&gt;</span></code>
                        <code class="block text-gray-300"><span class="text-blue-400">&lt;/html&gt;</span></code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 8 -->
        <div class="flex flex-col sm:flex-row items-start p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Start Development Server</h3>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">Terminal</span>
                    </div>
                    <code class="block text-green-400">php artisan serve</code>
                </div>
                <p class="text-gray-600 text-sm mt-3">Open <code class="bg-gray-200 px-2 py-1 rounded text-xs font-mono">http://localhost:8000</code></p>
            </div>
        </div>
    </section>

    <!-- Next Steps -->
    <div class="bg-blue-50 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">Next Steps</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-semibold text-gray-700 mb-4">TinyMCE Configuration</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Setting the license key</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Customizing TinyMCE</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Adding plugins</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Localizing TinyMCE</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-gray-700 mb-4">Editor Modes</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Classic editing mode</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Inline editing mode</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Distraction-free mode</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">CSS for rendered content</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>