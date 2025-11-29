<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo with Ruby on Rails
                Framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2">
            Self-hosted instances of Editflo can be integrated into Ruby on Rails projects. This procedure creates a
            basic Ruby on Rails application containing a Editflo editor.
        </p>
    </header>
    <!-- Prerequisites -->
    <div class="text-start mb-8 mt-3">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-4">Prerequisites</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fab fa-node-js text-green-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">Node.js</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fab fa-yarn text-blue-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">Yarn</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fas fa-gem text-red-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">Ruby</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fas fa-database text-purple-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">SQLite 3+</span>
            </div>
        </div>
    </div>

    <!-- Procedure -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-8">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-6">Procedure</h2>

        <!-- Step 1 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Create Rails Project</h3>
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
                        <code class="block text-green-400">rails new myTinySite</code>
                        <code class="block text-blue-400">cd myTinySite/</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Generate Controller</h3>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">Terminal</span>
                    </div>
                    <code class="block text-green-400">rails generate controller Welcome index</code>
                </div>
                <p class="text-gray-600 text-sm mt-3">This creates a controller named Welcome with an action named
                    index.</p>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Configure Routes</h3>
                <p class="text-gray-600 text-sm mb-3">File: <code
                        class="bg-gray-200 px-2 py-1 rounded text-xs">config/routes.rb</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">routes.rb</span>
                    </div>
                    <div class="space-y-1">
                        <code class="block text-purple-400">Rails.application.routes.draw</code>
                        <code class="block text-blue-400 ml-4">get</code>
                        <code class="block text-yellow-400 ml-8">'welcome/index'</code>
                        <code class="block ml-4"></code>
                        <code class="block text-blue-400 ml-4">root</code>
                        <code class="block text-yellow-400 ml-8">'welcome#index'</code>
                        <code class="block text-purple-400">end</code>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mt-3">Add <code
                        class="bg-gray-200 px-2 py-1 rounded text-xs">root 'welcome#index'</code> to set index as the
                    project home page.</p>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Add Editflo to Application Layout</h3>
                <p class="text-gray-600 text-sm mb-3">File: <code
                        class="bg-gray-200 px-2 py-1 rounded text-xs">app/views/layouts/application.html.erb</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">application.html.erb</span>
                    </div>
                    <div class="space-y-1">
                        <code class="block text-gray-400">&lt;!-- Add within the &lt;head&gt; section --&gt;</code>
                        <code class="block text-blue-400">&lt;script</code>
                        <code
                            class="block text-purple-400 ml-8">src=<span class="text-yellow-400">"/path/to/tinymce.min.js"</span></code>
                        <code class="block text-blue-400">&gt;&lt;/script&gt;</code>
                        <code class="block text-blue-400">&lt;script&gt;</code>
                        <code class="block text-green-400 ml-4">tinymce.init({</code>
                        <code class="block text-purple-400 ml-8">selector:</code>
                        <code class="block text-yellow-400 ml-12">'.tinymce',</code>
                        <code class="block text-purple-400 ml-8">plugins:</code>
                        <code class="block text-yellow-400 ml-12">'lists link image table code help wordcount'</code>
                        <code class="block text-green-400 ml-4">});</code>
                        <code class="block text-blue-400">&lt;/script&gt;</code>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mt-3">Add these lines within the <code
                        class="bg-gray-200 px-2 py-1 rounded text-xs">&lt;head&gt;</code> element to automatically
                    include Editflo on pages using the application layout.</p>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Create Editflo Text Area</h3>
                <p class="text-gray-600 text-sm mb-3">File: <code
                        class="bg-gray-200 px-2 py-1 rounded text-xs">app/views/welcome/index.html.erb</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">index.html.erb</span>
                    </div>
                    <div class="space-y-1">
                        <code class="block text-red-400">&lt;%=</code>
                        <code class="block text-green-400 ml-4">text_area_tag</code>
                        <code class="block text-blue-400 ml-8">:content,</code>
                        <code class="block text-yellow-400 ml-12">"Hello, World!",</code>
                        <code class="block text-purple-400 ml-8">:class</code>
                        <code class="block text-blue-400 ml-12">=></code>
                        <code class="block text-yellow-400 ml-16">"tinymce"</code>
                        <code class="block text-red-400">%&gt;</code>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mt-3">Create a <code
                        class="bg-gray-200 px-2 py-1 rounded text-xs">&lt;textarea&gt;</code> with the initial content
                    "Hello, World!" for TinyMCE.</p>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="flex flex-col sm:flex-row items-start p-4 bg-gray-50 rounded-lg">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">Start Rails Server</h3>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">Terminal</span>
                    </div>
                    <code class="block text-green-400">rails server</code>
                </div>
                <p class="text-gray-600 text-sm mt-3">The page containing Editflo will be accessible at <code
                        class="bg-gray-200 px-2 py-1 rounded text-xs font-mono">http://localhost:3000/</code></p>
            </div>
        </div>
    </section>

    <!-- Alternative Method: Using CDN -->
    <div class="bg-blue-50 rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Alternative: Using Editflo CDN</h3>
        <p class="text-gray-600 text-sm mb-4">Instead of self-hosting TinyMCE, you can use the CDN version:</p>
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                </div>
                <span class="text-gray-400">application.html.erb</span>
            </div>
            <div class="space-y-1">
                <code class="block text-blue-400">&lt;script</code>
                <code
                    class="block text-purple-400 ml-8">src=<span class="text-yellow-400">"https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js"</span></code>
                <code
                    class="block text-purple-400 ml-8">referrerpolicy=<span class="text-yellow-400">"origin"</span></code>
                <code class="block text-blue-400">&gt;&lt;/script&gt;</code>
            </div>
        </div>
    </div>

    <!-- Next Steps -->
    <div class="bg-green-50 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">Next Steps</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-semibold text-gray-700 mb-4">Advanced Configuration</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">Adding custom plugins</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">Custom toolbar
                            configuration</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">File upload handling</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">Content security
                            policies</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-gray-700 mb-4">Rails Integration</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">Using with form
                            builders</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">Strong parameters
                            handling</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">Asset pipeline
                            configuration</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-green-600 hover:underline">Production deployment</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>