<main class="mx-auto min-h-screen px-4 sm:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start mb-8">
        <div class="flex items-center mb-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Upgrading EditfloMCE</h2>
        </div>
        <p class="text-gray-600 text-base leading-relaxed">
            Learn more about EditfloMCE 5 LTS if you need to remain on EditfloMCE 5 and continue to receive security
            updates.
        </p>
    </header>

    <!-- LTS Notice -->
    <div class="bg-blue-50 border border-blue-200 p-4 mb-6 rounded">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <i class="fas fa-shield-alt text-blue-500 mt-1"></i>
            </div>
            <div class="ml-3">
                <p class="text-blue-700 font-medium">EditfloMCE 5 LTS Available</p>
                <p class="text-blue-600 mt-1 text-sm">
                    Need to stay on EditfloMCE 5? The LTS version continues to receive security updates while
                    maintaining compatibility.
                </p>
            </div>
        </div>
    </div>

    <!-- Upgrade Methods -->
    <section class="bg-white rounded border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Upgrading to EditfloMCE 8</h2>
        <p class="text-gray-600 mb-6">
            The procedure for upgrading to the latest version of EditfloMCE 8 depends on your deployment type.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="text-center p-4 border border-gray-200 rounded-lg hover:border-blue-300 transition-colors">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-cloud text-blue-600 text-xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Editflo Cloud</h3>
                <p class="text-gray-600 text-sm">Automatic updates with cloud deployment</p>
            </div>
            <div class="text-center p-4 border border-gray-200 rounded-lg hover:border-green-300 transition-colors">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-box text-green-600 text-xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Package Manager</h3>
                <p class="text-gray-600 text-sm">Update using your preferred package manager</p>
            </div>
            <div class="text-center p-4 border border-gray-200 rounded-lg hover:border-purple-300 transition-colors">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-download text-purple-600 text-xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Manual Update</h3>
                <p class="text-gray-600 text-sm">Download and install manually</p>
            </div>
        </div>

        <!-- Editflo Cloud -->
        <div class="mb-8 p-4 bg-gray-50 rounded border-l-4 border-blue-500">
            <h3 class="font-semibold text-gray-800 mb-3 flex items-center">
                <i class="fas fa-cloud text-blue-500 mr-2"></i>
                Upgrading Editflo Cloud
            </h3>
            <p class="text-gray-600 text-sm mb-4">
                Editflo Cloud provides the latest enterprise version of EditfloMCE automatically.
            </p>
            <div class="bg-blue-50 p-4 rounded border border-blue-200">
                <p class="text-blue-700 text-sm">
                    <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                    For information on configuring Editflo Cloud, see the
                    <a href="#" class="font-medium underline hover:text-blue-800">Cloud deployment guide</a>.
                </p>
            </div>
        </div>

        <!-- Package Manager -->
        <div class="mb-8">
            <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-box text-green-500 mr-2"></i>
                Upgrading EditfloMCE Self-hosted using Package Manager
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Yarn -->
                <div class="p-4 bg-gray-50 rounded border">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fab fa-yarn text-blue-500 mr-2"></i>
                        Yarn
                    </h4>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400">Terminal</span>
                        </div>
                        <code class="block text-green-400">yarn upgrade editflomce</code>
                    </div>
                </div>

                <!-- npm -->
                <div class="p-4 bg-gray-50 rounded border">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fab fa-npm text-red-500 mr-2"></i>
                        npm
                    </h4>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400">Terminal</span>
                        </div>
                        <code class="block text-green-400">npm install editflomce@latest --save</code>
                    </div>
                </div>

                <!-- Composer -->
                <div class="p-4 bg-gray-50 rounded border">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-gem text-purple-500 mr-2"></i>
                        Composer
                    </h4>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400">Terminal</span>
                        </div>
                        <code class="block text-green-400">composer require editflo/editflomce</code>
                    </div>
                </div>

                <!-- NuGet -->
                <div class="p-4 bg-gray-50 rounded border">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fab fa-microsoft text-blue-500 mr-2"></i>
                        NuGet
                    </h4>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400">Package Manager</span>
                        </div>
                        <code class="block text-green-400">Install-Package EditfloMCE</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manual Update -->
        <div>
            <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-download text-purple-500 mr-2"></i>
                Upgrading EditfloMCE Self-hosted Manually
            </h3>

            <div class="space-y-6">
                <!-- Step 1 -->
                <div class="p-4 bg-gray-50 rounded border-l-4 border-purple-500">
                    <h4 class="font-semibold text-gray-800 mb-3">1. Backup Customizations</h4>
                    <p class="text-gray-600 text-sm mb-3">
                        Backup the <code
                            class="bg-gray-800 text-yellow-400 px-2 py-1 rounded text-xs font-mono">editflomce/</code>
                        directory so any customizations can be restored after the upgrade.
                    </p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                        <div class="text-gray-400 text-sm mb-2">Typical directory structure:</div>
                        <code class="block text-blue-400">editflomce/</code>
                        <code class="block text-blue-400 ml-4">├── icons/</code>
                        <code class="block text-blue-400 ml-4">├── langs/</code>
                        <code class="block text-blue-400 ml-4">├── models/</code>
                        <code class="block text-blue-400 ml-4">├── plugins/</code>
                        <code class="block text-blue-400 ml-4">├── skins/</code>
                        <code class="block text-blue-400 ml-8">│   ├── content/</code>
                        <code class="block text-blue-400 ml-8">│   └── ui/</code>
                        <code class="block text-blue-400 ml-4">└── themes/</code>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="p-4 bg-gray-50 rounded border-l-4 border-purple-500">
                    <h4 class="font-semibold text-gray-800 mb-3">2. Download Latest Version</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="p-3 bg-white rounded border">
                            <h5 class="font-semibold text-gray-800 mb-2">Community Version</h5>
                            <p class="text-gray-600 text-sm mb-3">
                                Download from Get EditfloMCE - Self-hosted releases
                            </p>
                            <code class="bg-gray-800 text-yellow-400 px-2 py-1 rounded text-xs font-mono block">
                                editflomce_&lt;VERSION&gt;.zip
                            </code>
                        </div>
                        <div class="p-3 bg-white rounded border">
                            <h5 class="font-semibold text-gray-800 mb-2">Enterprise Version</h5>
                            <p class="text-gray-600 text-sm mb-3">
                                Download from Editflo Account > Downloads
                            </p>
                            <code class="bg-gray-800 text-yellow-400 px-2 py-1 rounded text-xs font-mono block">
                                enterprise_latest.zip
                            </code>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="p-4 bg-gray-50 rounded border-l-4 border-purple-500">
                    <h4 class="font-semibold text-gray-800 mb-3">3. Extract and Install</h4>
                    <ul class="text-gray-600 text-sm space-y-2">
                        <li class="flex items-start">
                            <span class="text-purple-500 mr-2 mt-0.5">→</span>
                            Extract the downloaded .zip file to a temporary location
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-500 mr-2 mt-0.5">→</span>
                            Install the latest language packs from Get EditfloMCE - Language Packages
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-500 mr-2 mt-0.5">→</span>
                            Copy customizations to the new editflomce/ directory
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-500 mr-2 mt-0.5">→</span>
                            Delete the existing editflomce/ directory and replace with the new one
                        </li>
                    </ul>
                </div>

                <!-- Step 4 -->
                <div class="p-4 bg-gray-50 rounded border-l-4 border-purple-500">
                    <h4 class="font-semibold text-gray-800 mb-3">4. Best Practices for Future Upgrades</h4>
                    <p class="text-gray-600 text-sm mb-4">
                        To simplify the upgrade process to future versions of EditfloMCE:
                    </p>
                    <ul class="text-gray-600 text-sm space-y-2 mb-4">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-0.5">✓</span>
                            Host EditfloMCE customizations outside of the editflomce/ directory
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-0.5">✓</span>
                            Use external configuration for custom assets
                        </li>
                    </ul>

                    <div class="bg-gray-900 text-gray-100 p-4 rounded font-mono text-sm">
                        <div class="text-gray-400 text-sm mb-2">Update your EditfloMCE configuration:</div>
                        <code
                            class="block text-purple-400">content_css: <span class="text-yellow-400">'/custom/content.css'</span></code>
                        <code
                            class="block text-purple-400">external_plugins: <span class="text-yellow-400">{ ... }</span></code>
                        <code
                            class="block text-purple-400">icons_url: <span class="text-yellow-400">'/custom/icons/'</span></code>
                        <code
                            class="block text-purple-400">language_url: <span class="text-yellow-400">'/custom/langs/'</span></code>
                        <code
                            class="block text-purple-400">skin_url: <span class="text-yellow-400">'/custom/skins/'</span></code>
                        <code
                            class="block text-purple-400">theme_url: <span class="text-yellow-400">'/custom/themes/'</span></code>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Resources -->
    <div class="bg-gray-50 rounded-lg border border-gray-200 p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Additional Resources</h3>

        <!-- Configuration Best Practices -->
        <div class="mb-8 p-4 bg-white rounded-lg border border-blue-200">
            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-star text-blue-500 mr-2"></i>
                Upgrade Best Practices
            </h4>
            <p class="text-gray-600 text-sm mb-4">
                To simplify the upgrade process to future versions of EditfloMCE:
            </p>
            <ul class="text-gray-600 text-sm space-y-2 mb-4">
                <li class="flex items-start">
                    <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">✓</span>
                    <span>Host the EditfloMCE customizations outside of the <code
                            class="bg-gray-800 text-yellow-400 px-1 py-0.5 rounded text-xs font-mono">editflomce/</code>
                        directory</span>
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-3 mt-0.5 flex-shrink-0">✓</span>
                    <span>Update your EditfloMCE configuration to use external URLs</span>
                </li>
            </ul>

            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm">
                <div class="text-gray-400 text-sm mb-3">Configuration Updates:</div>
                <div class="space-y-2">
                    <code
                        class="block text-purple-400">content_css: <span class="text-yellow-400">'/custom/content.css'</span></code>
                    <code
                        class="block text-purple-400">external_plugins: <span class="text-yellow-400">{<br><span class="ml-4">'customPlugin': '/custom/plugins/custom-plugin.js'</span><br>}</span></code>
                    <code
                        class="block text-purple-400">icons_url: <span class="text-yellow-400">'/custom/icons/'</span></code>
                    <code
                        class="block text-purple-400">language_url: <span class="text-yellow-400">'/custom/langs/'</span></code>
                    <code
                        class="block text-purple-400">skin_url: <span class="text-yellow-400">'/custom/skins/'</span></code>
                    <code
                        class="block text-purple-400">theme_url: <span class="text-yellow-400">'/custom/themes/'</span></code>
                </div>
            </div>
        </div>

        <!-- Documentation & Support Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Documentation -->
            <div class="p-4 bg-white rounded-lg border border-gray-200">
                <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-book text-blue-500 mr-2"></i>
                    Documentation
                </h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start group">
                        <span
                            class="text-blue-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-blue-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-blue-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            EditfloMCE Migration Guide
                        </a>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="text-blue-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-blue-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-blue-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            Breaking Changes Documentation
                        </a>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="text-blue-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-blue-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-blue-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            API Reference
                        </a>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="text-blue-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-blue-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-blue-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            Configuration Options
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Support -->
            <div class="p-4 bg-white rounded-lg border border-gray-200">
                <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-life-ring text-green-500 mr-2"></i>
                    Support
                </h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start group">
                        <span
                            class="text-green-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-green-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-green-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            Community Forums
                        </a>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="text-green-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-green-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-green-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            Technical Support
                        </a>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="text-green-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-green-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-green-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            Enterprise Support
                        </a>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="text-green-500 mr-3 mt-0.5 flex-shrink-0 group-hover:text-green-600 transition-colors">→</span>
                        <a href="#"
                            class="text-gray-700 hover:text-green-600 hover:underline group-hover:translate-x-1 transition-all duration-200">
                            GitHub Issues
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
            <h4 class="font-semibold text-blue-800 mb-3 flex items-center">
                <i class="fas fa-bolt text-blue-500 mr-2"></i>
                Quick Links
            </h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                <a href="#" class="flex items-center text-blue-700 hover:text-blue-800 hover:underline">
                    <i class="fas fa-download text-blue-500 mr-2 text-xs"></i>
                    Download Latest Version
                </a>
                <a href="#" class="flex items-center text-blue-700 hover:text-blue-800 hover:underline">
                    <i class="fas fa-history text-blue-500 mr-2 text-xs"></i>
                    Release Notes
                </a>
                <a href="#" class="flex items-center text-blue-700 hover:text-blue-800 hover:underline">
                    <i class="fas fa-code-branch text-blue-500 mr-2 text-xs"></i>
                    GitHub Repository
                </a>
                <a href="#" class="flex items-center text-blue-700 hover:text-blue-800 hover:underline">
                    <i class="fas fa-book-open text-blue-500 mr-2 text-xs"></i>
                    Tutorials & Examples
                </a>
            </div>
        </div>
    </div>
</main>