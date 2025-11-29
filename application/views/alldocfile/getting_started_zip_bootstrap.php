<main class="mx-auto min-h-screen px-4 sm:px-6 md:px-8">
    <!-- Header Section -->
    <header class="text-start mb-8">
        <div class="flex items-center mb-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">
                Using EditfloMCE with Laravel Framework
            </h2>
        </div>
        <p class="text-gray-600 text-base leading-relaxed">
            Laravel is a scalable web application framework built on PHP. This guide assists with adding EditfloMCE
            (Editflo's rich text editor) to pages or views in Laravel applications.
        </p>
    </header>

    <!-- Important Notice -->
    <div class="bg-yellow-50 border border-yellow-200 p-4 mb-6 rounded">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
            </div>
            <div class="ml-3">
                <p class="text-yellow-700 font-medium">Important Notice</p>
                <p class="text-yellow-600 mt-1 text-sm">
                    This domain is not registered with Editflo Cloud. For production use, register your domain or create
                    an Editflo account.
                </p>
            </div>
        </div>
    </div>

    <!-- Requirements -->
    <div class="text-start mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Requirements</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="flex items-center p-3 bg-white rounded border border-gray-200">
                <i class="fab fa-php text-gray-600 text-xl mr-3"></i>
                <span class="text-gray-700">PHP ≥ 8.1</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded border border-gray-200">
                <i class="fas fa-gem text-gray-600 text-xl mr-3"></i>
                <span class="text-gray-700">Composer</span>
            </div>
            <div class="flex items-center p-3 bg-white rounded border border-gray-200">
                <i class="fab fa-laravel text-gray-600 text-xl mr-3"></i>
                <span class="text-gray-700">Laravel ≥ 10.x</span>
            </div>
        </div>
    </div>

    <!-- Procedure -->
    <section class="bg-white rounded border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Installation & Setup Procedure</h2>

        <!-- Step 1 -->
        <div class="mb-8 p-4 bg-gray-50 rounded border-l-4 border-blue-500">
            <h3 class="font-semibold text-gray-800 mb-3">Step 1: Create Laravel Project</h3>
            <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
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

        <!-- Step 2 -->
        <div class="mb-8 p-4 bg-gray-50 rounded border-l-4 border-green-500">
            <h3 class="font-semibold text-gray-800 mb-3">Step 2: Install EditfloMCE via CDN</h3>
            <p class="text-gray-600 text-sm mb-3">EditfloMCE is loaded directly via CDN. No Composer package required.
            </p>
            <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-400">Head section</span>
                </div>
                <code class="block text-blue-400 break-all">
                    &lt;script src="https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js" crossorigin="anonymous" referrerpolicy="origin"&gt;&lt;/script&gt;
                </code>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="mb-8 p-4 bg-gray-50 rounded border-l-4 border-purple-500">
            <h3 class="font-semibold text-gray-800 mb-3">Step 3: Create Editflo Config Component</h3>
            <div class="bg-gray-100 p-3 rounded text-sm mb-4">
                <code class="block text-purple-700 font-mono">
                    php artisan make:component Head/editfloConfig
                </code>
            </div>
            <p class="text-gray-600 text-sm mb-3">File: <code
                    class="bg-gray-800 text-yellow-400 px-2 py-1 rounded text-xs font-mono">resources/views/components/head/editflo-config.blade.php</code>
            </p>
            <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm max-h-80 overflow-y-auto">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-400">editflo-config.blade.php</span>
                </div>
                <div class="space-y-1">
                    <code class="block text-blue-400">&lt;script&gt;</code>
                    <code class="block text-gray-400 ml-4">&lt;!-- EditfloMCE Initialization --&gt;</code>
                    <code class="block text-green-400 ml-4">Editflomce.init({</code>
                    <code
                        class="block text-purple-400 ml-8">selector: <span class="text-yellow-400">'#editflo-editor'</span>,</code>
                    <code class="block text-purple-400 ml-8">height: <span class="text-yellow-400">500</span>,</code>
                    <code
                        class="block text-purple-400 ml-8">plugins: <span class="text-yellow-400">'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen'</span>,</code>
                    <code
                        class="block text-purple-400 ml-8">toolbar: <span class="text-yellow-400">'undo redo | blocks | bold italic forecolor'</span></code>
                    <code class="block text-green-400 ml-4">});</code>
                    <code class="block text-blue-400">&lt;/script&gt;</code>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="mb-8 p-4 bg-gray-50 rounded border-l-4 border-indigo-500">
            <h3 class="font-semibold text-gray-800 mb-3">Step 4: Create Editor Component</h3>
            <div class="bg-gray-100 p-3 rounded text-sm mb-4">
                <code class="block text-purple-700 font-mono">
                    php artisan make:component Forms/editfloEditor
                </code>
            </div>
            <p class="text-gray-600 text-sm mb-3">File: <code
                    class="bg-gray-800 text-yellow-400 px-2 py-1 rounded text-xs font-mono">resources/views/components/forms/editflo-editor.blade.php</code>
            </p>
            <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-400">editflo-editor.blade.php</span>
                </div>
                <div class="space-y-1">
                    <code class="block text-blue-400">&lt;div class="mb-6"&gt;</code>
                    <code
                        class="block text-blue-400 ml-4">&lt;label for="{{ $name ?? 'editflo-editor' }}" class="block text-sm font-semibold text-gray-700 mb-3"&gt;</code>
                    <code
                        class="block text-gray-300 ml-8">{{ $label ?? 'Content' }} &lt;span class="text-gray-500"&gt;(*)&lt;/span&gt;&lt;/label&gt;</code>
                    <code class="block text-blue-400 ml-4">&lt;textarea</code>
                    <code class="block text-purple-400 ml-8">id="{{ $name ?? 'editflo-editor' }}"</code>
                    <code class="block text-purple-400 ml-8">name="{{ $name ?? 'content' }}"</code>
                    <code class="block text-purple-400 ml-8">rows="12"</code>
                    <code class="block text-purple-400 ml-8">class="w-full border border-gray-300 rounded p-2"</code>
                    <code class="block text-blue-400 ml-4">&gt;{{ $value ?? '' }}&lt;/textarea&gt;</code>
                    <code class="block text-blue-400 ml-4">&lt;/div&gt;</code>
                </div>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="mb-8 p-4 bg-gray-50 rounded border-l-4 border-teal-500">
            <h3 class="font-semibold text-gray-800 mb-3">Step 5: Use Components in Blade Views</h3>
            <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-400">welcome.blade.php</span>
                </div>
                <div class="space-y-1">
                    <code class="block text-blue-400">&lt;!DOCTYPE html&gt;</code>
                    <code class="block text-blue-400">&lt;html&gt;</code>
                    <code class="block text-blue-400">&lt;head&gt;</code>
                    <code class="block text-gray-300 ml-4">&lt;title&gt;EditfloMCE Laravel&lt;/title&gt;</code>
                    <code class="block text-gray-300 ml-4">&lt;x-head.editflo-config /&gt;</code>
                    <code class="block text-blue-400">&lt;/head&gt;</code>
                    <code class="block text-blue-400">&lt;body&gt;</code>
                    <code class="block text-gray-300 ml-4">&lt;div class="container mx-auto p-6"&gt;</code>
                    <code
                        class="block text-gray-300 ml-8">&lt;h1 class="text-3xl font-bold mb-6"&gt;EditfloMCE Editor&lt;/h1&gt;</code>
                    <code class="block text-gray-300 ml-8">&lt;form method="POST" action="/save"&gt;</code>
                    <code class="block text-gray-300 ml-12">@csrf</code>
                    <code
                        class="block text-gray-300 ml-12">&lt;x-forms.editflo-editor label="Article Content" /&gt;</code>
                    <code
                        class="block text-gray-300 ml-12">&lt;button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded"&gt;Save&lt;/button&gt;</code>
                    <code class="block text-gray-300 ml-8">&lt;/form&gt;</code>
                    <code class="block text-gray-300 ml-4">&lt;/div&gt;</code>
                    <code class="block text-blue-400">&lt;/body&gt;</code>
                    <code class="block text-blue-400">&lt;/html&gt;</code>
                </div>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="p-4 bg-gray-50 rounded border-l-4 border-amber-500">
            <h3 class="font-semibold text-gray-800 mb-3">Step 6: Start Development Server</h3>
            <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm mb-4">
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
            <div class="bg-green-50 p-4 rounded border border-green-200">
                <p class="text-gray-700 text-sm">
                    Open your browser and navigate to:
                    <code
                        class="bg-gray-800 text-green-400 px-2 py-1 rounded text-sm font-mono ml-2">http://localhost:8000</code>
                </p>
                <p class="text-gray-600 text-sm mt-2">
                    Congratulations! Your EditfloMCE editor is now ready and running!
                </p>
            </div>
        </div>
    </section>

    <!-- Bootstrap Integration -->
    <section class="bg-white rounded-xl border border-gray-200 p-4 sm:p-6 lg:p-8 mb-8">
        <div class="flex items-center justify-center sm:justify-start mb-6">
            <h2 class="text-lg sm:text-xl lg:text-2xl font-semibold text-gray-800">
                Bootstrap Framework Integration
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Left Card: No Special Configuration -->
            <div
                class="p-4 sm:p-6 bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 hover:shadow-sm transition-all duration-200">
                <h3 class="font-semibold text-gray-800 mb-4 text-sm sm:text-base flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2 text-sm"></i>
                    No Special Configuration Required
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    <span class="font-medium">EditfloMCE</span> works
                    <span class="font-semibold text-green-600">seamlessly</span> with Bootstrap
                    <br class="sm:hidden" />without requiring any special configuration.
                </p>

                <!-- VS Code Style Code Block -->
                <div class="bg-[#1e1e1e] border border-gray-700 rounded-xl p-4 sm:p-6 overflow-x-auto">
                    <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-600/50">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                        </div>
                        <span class="text-gray-400 text-xs font-mono">CDN Links</span>
                    </div>
                    <pre class="text-xs sm:text-sm font-mono leading-6 text-gray-100"><span class="text-blue-400">&lt;!-- Bootstrap CSS --&gt;</span>
<span class="text-yellow-400">&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"&gt;</span>

<span class="text-blue-400 ml-0">&lt;!-- EditfloMCE Script --&gt;</span>
<span class="text-yellow-400">&lt;script src="https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js" 
    crossorigin="anonymous" referrerpolicy="origin"&gt;&lt;/script&gt;</span></pre>
                </div>
            </div>

            <!-- Right Card: Bootstrap Modals -->
            <div
                class="p-4 sm:p-6 bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 hover:shadow-sm transition-all duration-200">
                <h3 class="font-semibold text-gray-800 mb-4 text-sm sm:text-base flex items-center">
                    <i class="fas fa-window-maximize text-blue-500 mr-2 text-sm"></i>
                    Using in Bootstrap Modals
                </h3>

                <!-- VS Code Style Code Block -->
                <div class="bg-[#1e1e1e] border border-gray-700 rounded-xl p-4 sm:p-6 max-h-64 overflow-y-auto mb-6">
                    <div
                        class="flex items-center justify-between mb-4 pb-3 border-b border-gray-600/50 sticky top-0 bg-[#1e1e1e]/95 backdrop-blur-sm z-10">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                        </div>
                        <span class="text-gray-400 text-xs font-mono">Bootstrap 5+ Modal Integration</span>
                    </div>
                    <pre class="text-xs sm:text-sm font-mono leading-6 text-gray-100"><span class="text-green-400">// Prevent Bootstrap modal from blocking EditfloMCE focus</span>
<span class="text-blue-400">document.addEventListener('focusin', (e) => {</span>
    <span class="text-gray-300 ml-4">if (e.target.closest(".tox-tinymce, .tox-tinymce-aux") !== null) {</span>
        <span class="text-gray-300 ml-8">e.stopImmediatePropagation();</span>
    <span class="text-gray-300 ml-4">}</span>
<span class="text-blue-400">});</span></pre>
                </div>

                <p class="text-gray-600 text-sm leading-relaxed">
                    This code ensures <span class="font-semibold text-blue-600">EditfloMCE</span> works perfectly
                    <br class="sm:hidden" />inside <span class="font-semibold">Bootstrap modals</span>
                    without focus issues.
                </p>
            </div>
        </div>
    </section>

    <!-- Next Steps -->
    <div class="bg-white rounded border border-gray-200 p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Next Steps</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="">
                <h4 class="font-semibold text-gray-700 mb-4">Configuration</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Setting license key</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Customizing toolbar</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Managing plugins</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <h4 class="font-semibold text-gray-700 mb-4">Editor Modes</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Classic mode</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Inline editing</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Distraction-free mode</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <h4 class="font-semibold text-gray-700 mb-4">Advanced Features</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Image uploads</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Custom CSS</a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-gray-500 mr-3 mt-0.5">→</span>
                        <a href="#" class="text-gray-700 hover:text-blue-600">Content localization</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>