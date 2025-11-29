<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using EditfloMCE with Laravel Framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2">
            Laravel is a scalable web application framework built on PHP. This guide assists with adding EditfloMCE 
            (Editflo's rich text editor) to pages or views in Laravel applications.
        </p>
    </header>

    <!-- Important Notice -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 mt-3">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
            </div>
            <div class="ml-3">
                <p class="text-yellow-700 font-medium">Important Notice</p>
                <p class="text-yellow-600 mt-1">This domain is not registered with Editflo Cloud. For production use, 
                    <a href="#" class="font-medium underline hover:text-yellow-800">register your domain</a> or 
                    <a href="#" class="font-medium underline hover:text-yellow-800">create an Editflo account</a>.</p>
            </div>
        </div>
    </div>

    <!-- Requirements -->
    <div class="text-start">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-4">Requirements</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fab fa-php text-purple-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">PHP ≥ 8.1</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fas fa-gem text-red-600 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">Composer</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border">
                <i class="fab fa-laravel text-red-500 text-xl mr-3 flex-shrink-0"></i>
                <span class="text-gray-700 font-medium">Laravel ≥ 10.x</span>
            </div>
        </div>
    </div>

    <!-- Procedure -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-8 mt-3">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-6">Installation & Setup Procedure</h2>

        <!-- Step 1 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-400">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">1. Create Laravel Project</h3>
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
                        <code class="block text-green-400">composer create-project laravel/laravel editflo-app</code>
                        <code class="block text-blue-400">cd editflo-app</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-l-4 border-green-400">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">2. Install EditfloMCE via CDN</h3>
                <p class="text-gray-600 text-sm mb-3">EditfloMCE is loaded directly via CDN. No Composer package required.</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">Head section</span>
                    </div>
                    <div class="space-y-2">
                        <code class="block text-blue-400">&lt;script src="https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js" 
                        crossorigin="anonymous" referrerpolicy="origin"&gt;&lt;/script&gt;</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg border-l-4 border-purple-400">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">3. Create Editflo Config Component</h3>
                <div class="bg-gray-100 p-3 rounded text-xs sm:text-sm mb-4">
                    <code class="block text-purple-600 font-mono">php artisan make:component Head/editfloConfig</code>
                </div>
                <p class="text-gray-600 text-sm mb-3">File: <code class="bg-gray-200 px-2 py-1 rounded text-xs">resources/views/components/head/editflo-config.blade.php</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6 max-h-80 overflow-y-auto">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">editflo-config.blade.php</span>
                    </div>
                    <div class="space-y-1">
                        <code class="block">&lt;script&gt;</code>
                        <code class="block ml-4">Editflomce.init({</code>
                        <code class="block ml-8"><span class="text-purple-400">selector</span>: <span class="text-yellow-400">'#editflo-editor'</span>,</code>
                        <code class="block ml-8"><span class="text-purple-400">height</span>: <span class="text-yellow-400">500</span>,</code>
                        <code class="block ml-8"><span class="text-purple-400">plugins</span>: <span class="text-yellow-400">'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount'</span>,</code>
                        <code class="block ml-8"><span class="text-purple-400">toolbar</span>: <span class="text-yellow-400">'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'</span>,</code>
                        <code class="block ml-4">});</code>
                        <code class="block">&lt;/script&gt;</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg border-l-4 border-indigo-400">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">4. Create Editor Component</h3>
                <div class="bg-gray-100 p-3 rounded text-xs sm:text-sm mb-4">
                    <code class="block text-purple-600 font-mono">php artisan make:component Forms/editfloEditor</code>
                </div>
                <p class="text-gray-600 text-sm mb-3">File: <code class="bg-gray-200 px-2 py-1 rounded text-xs">resources/views/components/forms/editflo-editor.blade.php</code></p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">editflo-editor.blade.php</span>
                    </div>
                    <div class="space-y-2">
                        <code class="block">&lt;div class="mb-4"&gt;</code>
                        <code class="block ml-4">&lt;label for="{{ $name ?? 'editflo-editor' }}" class="block text-sm font-medium text-gray-700 mb-2"&gt;</code>
                        <code class="block ml-8">{{ $label ?? 'Content' }}&lt;/label&gt;</code>
                        <code class="block ml-4">&lt;textarea</code>
                        <code class="block ml-8">    id="{{ $name ?? 'editflo-editor' }}"</code>
                        <code class="block ml-8">    name="{{ $name ?? 'content' }}"</code>
                        <code class="block ml-8">    rows="10"</code>
                        <code class="block ml-8">    class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"</code>
                        <code class="block ml-4">&gt;{{ $value ?? '' }}&lt;/textarea&gt;</code>
                        <code class="block ml-4">&lt;/div&gt;</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="flex flex-col sm:flex-row items-start mb-8 p-4 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border-l-4 border-teal-400">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">5. Use Components in Blade Views</h3>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400">resources/views/welcome.blade.php</span>
                    </div>
                    <div class="space-y-2">
                        <code class="block text-gray-300">&lt;!DOCTYPE html&gt;</code>
                        <code class="block text-gray-300">&lt;html&gt;</code>
                        <code class="block text-gray-300">&lt;head&gt;</code>
                        <code class="block text-gray-300 ml-4">    &lt;title&gt;EditfloMCE Laravel&lt;/title&gt;</code>
                        <code class="block text-gray-300 ml-4">    &lt;x-head.editflo-config /&gt;</code>
                        <code class="block text-gray-300">&lt;/head&gt;</code>
                        <code class="block text-gray-300">&lt;body&gt;</code>
                        <code class="block text-gray-300 ml-4">    &lt;div class="container mx-auto p-6"&gt;</code>
                        <code class="block text-gray-300 ml-8">        &lt;h1 class="text-3xl font-bold mb-6"&gt;EditfloMCE Editor&lt;/h1&gt;</code>
                        <code class="block text-gray-300 ml-8">        &lt;form method="POST" action="/save"&gt;</code>
                        <code class="block text-gray-300 ml-12">            @csrf</code>
                        <code class="block text-gray-300 ml-12">            &lt;x-forms.editflo-editor /&gt;</code>
                        <code class="block text-gray-300 ml-12">            &lt;button type="submit" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700"&gt;</code>
                        <code class="block text-gray-300 ml-16">                Save Content</code>
                        <code class="block text-gray-300 ml-12">            &lt;/button&gt;</code>
                        <code class="block text-gray-300 ml-8">        &lt;/form&gt;</code>
                        <code class="block text-gray-300 ml-4">    &lt;/div&gt;</code>
                        <code class="block text-gray-300">&lt;/body&gt;</code>
                        <code class="block text-gray-300">&lt;/html&gt;</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="flex flex-col sm:flex-row items-start p-4 bg-gradient-to-r from-amber-50 to-orange-50 rounded-lg border-l-4 border-amber-400">
            <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-800 mb-3 text-sm sm:text-base">6. Start Development Server</h3>
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
                        <code class="block text-green-400">php artisan serve</code>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mt-3">
                    Open <code class="bg-gray-200 px-2 py-1 rounded text-xs font-mono">http://localhost:8000</code> 
                    to see your EditfloMCE editor in action!
                </p>
            </div>
        </div>
    </section>

    <!-- Bootstrap Integration -->
    <section class="bg-gradient-to-r from-purple-50 via-pink-50 to-red-50 rounded-lg p-6 mb-8">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-6">Bootstrap Framework Integration</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <h3 class="font-semibold text-purple-800 mb-4">No Special Configuration Required</h3>
                <p class="text-gray-600 mb-4">EditfloMCE works seamlessly with Bootstrap without requiring special configuration.</p>
                <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-purple-400">
                    <h4 class="font-medium text-gray-800 mb-3">Basic Bootstrap Integration</h4>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6">
                        <div class="space-y-2">
                            <code class="block">&lt;!-- Bootstrap CSS --&gt;</code>
                            <code class="block">&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"&gt;</code>
                            <code class="block mt-3">&lt;!-- EditfloMCE Script --&gt;</code>
                            <code class="block">&lt;script src="https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js" crossorigin="anonymous" referrerpolicy="origin"&gt;&lt;/script&gt;</code>
                            <code class="block mt-3">&lt;!-- Bootstrap JS --&gt;</code>
                            <code class="block">&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;</code>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="font-semibold text-purple-800 mb-4">Using in Bootstrap Modals</h3>
                <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-purple-400">
                    <p class="text-gray-600 mb-4">To use EditfloMCE inside Bootstrap modals, add this focus prevention code:</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-xs sm:text-sm leading-6 max-h-48 overflow-y-auto">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-gray-400">Bootstrap 5+ Modal Integration</span>
                        </div>
                        <code class="block">// Prevent Bootstrap modal from blocking EditfloMCE focus</code>
                        <code class="block">document.addEventListener('focusin', (e) =&gt; {</code>
                        <code class="block ml-4">  if (e.target.closest(".tox-tinymce, .tox-tinymce-aux") !== null) {</code>
                        <code class="block ml-8">    e.stopImmediatePropagation();</code>
                        <code class="block ml-4">  }</code>
                        <code class="block">});</code>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Next Steps -->
    <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">Next Steps</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border">
                <h4 class="font-semibold text-emerald-700 mb-4 flex items-center">
                    <i class="fas fa-cog mr-2 text-emerald-500"></i>Configuration
                </h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-emerald-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-emerald-600 hover:underline">Setting license key</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-emerald-600 hover:underline">Custom toolbar</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-emerald-600 hover:underline">Plugin management</a>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border">
                <h4 class="font-semibold text-blue-700 mb-4 flex items-center">
                    <i class="fas fa-edit mr-2 text-blue-500"></i>Editor Modes
                </h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Classic mode</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Inline editing</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:underline">Distraction-free</a>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border">
                <h4 class="font-semibold text-purple-700 mb-4 flex items-center">
                    <i class="fas fa-plug mr-2 text-purple-500"></i>Advanced
                </h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-purple-600 hover:underline">Image uploads</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-purple-600 hover:underline">Custom CSS</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-500 mr-3 mt-0.5 flex-shrink-0">→</span>
                        <a href="#" class="text-gray-700 hover:text-purple-600 hover:underline">Localization</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>