<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 py-6">
    <!-- Header Section -->
    <header class="text-start mb-8">
        <div class="flex flex-col sm:flex-row sm:items-center gap-4 mb-4">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 leading-tight">
                Editflo  for Java Swing Integration
            </h2>
        </div>

        <!-- Important Notice -->
        <div class="bg-gradient-to-r from-red-50 to-orange-50 border border-red-200 rounded-xl p-4 sm:p-5 mb-6 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-start gap-3">
                <div class="flex-shrink-0">
                    <div class="bg-red-500 text-white rounded-full w-10 h-10 sm:w-11 sm:h-11 flex items-center justify-center">
                        <i class="fas fa-exclamation-triangle text-lg sm:text-xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="text-base sm:text-lg font-semibold text-red-800 mb-2">
                        Important: Legacy Integration Notice
                    </h3>
                    <p class="text-red-700 text-sm sm:text-base mb-2">
                        Editflo 's Java Swing integration has been <strong>deprecated in Editflo  8.0</strong> and will 
                        reach <strong>end-of-life as of December 31, 2025</strong>.
                    </p>
                    <p class="text-red-700 text-sm sm:text-base">
                        <strong>Recommended:</strong> Use the new <strong>Editflo  for Swing integration</strong> for 
                        continued support and modern features.
                    </p>
                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="mb-6">
            <p class="text-gray-600 text-sm sm:text-base leading-relaxed flex items-start gap-3">
                <span class="flex-shrink-0 w-5 h-5 mt-0.5">
                    <i class="fas fa-info-circle text-blue-500 text-base"></i>
                </span>
                <span class="flex-1 min-w-0">
                    The <strong>Editflo  for Swing integration</strong> provides a modern rich text editor for Java 
                    Swing applications. This guide shows how to configure and deploy Editflo  within your Swing projects 
                    using three deployment options: <strong>Embedded</strong>, <strong>Cloud</strong>, and <strong>External</strong>.
                </span>
            </p>
        </div>

        <!-- Live Demo Section -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl p-4 sm:p-6 mb-6 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-start gap-4 mb-4">
                <div class="flex-shrink-0">
                    <div class="bg-blue-500 text-white rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                        <i class="fas fa-play-circle text-xl sm:text-2xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="text-base sm:text-lg md:text-xl font-semibold text-gray-800 mb-3">
                        Editflo  Swing Quick Start
                    </h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-4">Complete working example in 3 simple steps:</p>
                    
                    <div class="space-y-4">
                        <!-- Step 1 -->
                        <div class="flex items-start gap-3">
                            <span class="flex-shrink-0 w-7 h-7 sm:w-8 sm:h-8 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                1
                            </span>
                            <div class="flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base font-medium mb-2">Copy libraries from release ZIP:</p>
                                <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-blue-400">release-zip/</span>
                                        <span class="text-purple-400">lib/</span>
                                        <span class="text-gray-300">→</span>
                                        <span class="text-green-400">YourProject/lib/</span>
                                        <span class="text-gray-300">→</span>
                                        <span class="text-blue-400">Add to classpath</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start gap-3">
                            <span class="flex-shrink-0 w-7 h-7 sm:w-8 sm:h-8 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                2
                            </span>
                            <div class="flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base font-medium mb-2">Choose deployment method:</p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                        <div class="flex flex-wrap gap-1">
                                            <span class="text-green-400">Config.embedded</span>
                                            <span class="text-gray-300">()</span>
                                        </div>
                                    </div>
                                    <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                        <div class="flex flex-wrap gap-1">
                                            <span class="text-green-400">Config.cloud</span>
                                            <span class="text-gray-300">(</span>
                                            <span class="text-string">"your-key"</span>
                                            <span class="text-gray-300">,</span>
                                            <span class="text-string">"8-stable"</span>
                                            <span class="text-gray-300">)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start gap-3">
                            <span class="flex-shrink-0 w-7 h-7 sm:w-8 sm:h-8 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                3
                            </span>
                            <div class="flex-1 min-w-0">
                                <p class="text-gray-700 text-sm sm:text-base font-medium mb-2">Initialize editor:</p>
                                <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-blue-400">Editflo .futureEditor</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-purple-400">myConfig</span>
                                        <span class="text-gray-300">).</span>
                                        <span class="text-purple-400">get</span>
                                        <span class="text-gray-300">()</span>
                                    </div>
                                </div>
                                <p class="text-blue-600 text-sm sm:text-base mt-3 font-medium flex items-center">
                                    <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                    Editor ready asynchronously!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Prerequisites Section -->
    <div class="mb-8">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-4">Prerequisites</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex items-start gap-3 bg-green-50 p-4 rounded-lg border border-green-200">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-check-circle text-green-500 text-base"></i>
                </div>
                <p class="text-gray-700 text-sm sm:text-base">Java 8 or higher</p>
            </div>
            <div class="flex items-start gap-3 bg-green-50 p-4 rounded-lg border border-green-200">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-check-circle text-green-500 text-base"></i>
                </div>
                <p class="text-gray-700 text-sm sm:text-base">Java Swing application</p>
            </div>
            <div class="flex items-start gap-3 bg-green-50 p-4 rounded-lg border border-green-200 sm:col-span-2 lg:col-span-1">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-check-circle text-green-500 text-base"></i>
                </div>
                <p class="text-gray-700 text-sm sm:text-base">
                    Editflo  for Swing <strong>release ZIP</strong> (contact Sales)
                </p>
            </div>
        </div>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-xl shadow-md p-4 sm:p-6 mb-8">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-6">Procedure</h2>

        <div class="space-y-6">
            <!-- Step 1: Copy Libraries -->
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-blue-100 text-blue-800 rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                        <i class="fas fa-download text-lg sm:text-xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-base sm:text-lg mb-3">1. Copy Editflo  Libraries</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-3">Extract release ZIP and copy all JAR files:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">File Explorer</span>
                        </div>
                        <div class="space-y-2">
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">1</span>
                                <span class="text-blue-400">release-zip/</span>
                                <span class="text-purple-400">lib/</span>
                                <span class="text-gray-300">→</span>
                                <span class="text-green-400">YourProject/lib/</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">2</span>
                                <span class="text-purple-400">*.jar</span>
                                <span class="text-gray-300">→</span>
                                <span class="text-green-400">Add to classpath</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Deployment Configuration -->
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-blue-100 text-blue-800 rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                        <i class="fas fa-cogs text-lg sm:text-xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-base sm:text-lg mb-4">2. Select Deployment Method</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Embedded -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4">
                            <div class="flex items-center mb-3">
                                <div class="bg-green-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">
                                    <i class="fas fa-box text-sm"></i>
                                </div>
                                <h4 class="font-semibold text-green-800 text-sm">Embedded</h4>
                            </div>
                            <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs overflow-x-auto border border-gray-700">
                                <div class="flex flex-wrap gap-1">
                                    <span class="text-green-400">final</span>
                                    <span class="text-purple-400">Config</span>
                                    <span class="text-purple-400">cfg</span>
                                    <span class="text-gray-300">=</span>
                                    <span class="text-purple-400">Config</span>
                                    <span class="text-gray-300">.</span>
                                    <span class="text-purple-400">embedded</span>
                                    <span class="text-gray-300">();</span>
                                </div>
                            </div>
                            <p class="text-green-700 text-xs mt-2">
                                <i class="fas fa-check mr-1"></i>Prepackaged - guaranteed compatibility
                            </p>
                        </div>

                        <!-- Cloud -->
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 border border-blue-200 rounded-xl p-4">
                            <div class="flex items-center mb-3">
                                <div class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">
                                    <i class="fas fa-cloud text-sm"></i>
                                </div>
                                <h4 class="font-semibold text-blue-800 text-sm">Cloud</h4>
                            </div>
                            <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs overflow-x-auto border border-gray-700">
                                <div class="flex flex-wrap gap-1">
                                    <span class="text-green-400">final</span>
                                    <span class="text-purple-400">Config</span>
                                    <span class="text-purple-400">cfg</span>
                                    <span class="text-gray-300">=</span>
                                    <span class="text-purple-400">Config</span>
                                    <span class="text-gray-300">.</span>
                                    <span class="text-purple-400">cloud</span>
                                    <span class="text-gray-300">(</span>
                                    <span class="text-string">"&lt;key&gt;"</span>
                                    <span class="text-gray-300">,</span>
                                    <span class="text-string">"8-stable"</span>
                                    <span class="text-gray-300">);</span>
                                </div>
                            </div>
                            <p class="text-blue-700 text-xs mt-2">
                                <i class="fas fa-globe mr-1"></i>Tiny Cloud - requires API key
                            </p>
                        </div>

                        <!-- External -->
                        <div class="bg-gradient-to-br from-purple-50 to-violet-50 border border-purple-200 rounded-xl p-4">
                            <div class="flex items-center mb-3">
                                <div class="bg-purple-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">
                                    <i class="fas fa-server text-sm"></i>
                                </div>
                                <h4 class="font-semibold text-purple-800 text-sm">External</h4>
                            </div>
                            <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-xs overflow-x-auto border border-gray-700">
                                <div class="flex flex-wrap gap-1">
                                    <span class="text-green-400">final</span>
                                    <span class="text-purple-400">Config</span>
                                    <span class="text-purple-400">cfg</span>
                                    <span class="text-gray-300">=</span>
                                    <span class="text-purple-400">Config</span>
                                    <span class="text-gray-300">.</span>
                                    <span class="text-purple-400">external</span>
                                    <span class="text-gray-300">(</span>
                                    <span class="text-string">"http://..."</span>
                                    <span class="text-gray-300">);</span>
                                </div>
                            </div>
                            <p class="text-purple-700 text-xs mt-2">
                                <i class="fas fa-link mr-1"></i>Local server URL
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Advanced Configuration -->
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-blue-100 text-blue-800 rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                        <i class="fas fa-cog text-lg sm:text-xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-base sm:text-lg mb-4">3. Advanced Java Configuration</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-3">Full customization with Java API:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">AdvancedConfig.java</span>
                        </div>
                        <div class="space-y-2">
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">1</span>
                                <span class="text-green-400">final</span>
                                <span class="text-purple-400">Path</span>
                                <span class="text-purple-400">contentPath</span>
                                <span class="text-gray-300">=</span>
                                <span class="text-purple-400">Paths</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">get</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-purple-400">System</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">getProperty</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"user.home"</span>
                                <span class="text-gray-300">));</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">2</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">3</span>
                                <span class="text-green-400">final</span>
                                <span class="text-purple-400">Config</span>
                                <span class="text-purple-400">myConfig</span>
                                <span class="text-gray-300">=</span>
                                <span class="text-purple-400">Config</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">embedded</span>
                                <span class="text-gray-300">()</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">4</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">setContentPath</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-purple-400">contentPath</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">5</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">setImageSaverLocal</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-purple-400">contentPath</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">6</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">addPlugins</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"advcode advlist..."</span>
                                <span class="text-gray-300">+</span>
                                <span class="text-string">"powerpaste help wordcount"</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">7</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">putProperty</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"width"</span>
                                <span class="text-gray-300">,</span>
                                <span class="text-orange-400">800</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">8</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">putProperty</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"height"</span>
                                <span class="text-gray-300">,</span>
                                <span class="text-orange-400">600</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">9</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">putProperty</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"menubar"</span>
                                <span class="text-gray-300">,</span>
                                <span class="text-green-400">false</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">10</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">putProperty</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"toolbar"</span>
                                <span class="text-gray-300">,</span>
                                <span class="text-string">"undo redo | ... | help"</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 text-xs">11</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">putProperty</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"images_reuse_filename"</span>
                                <span class="text-gray-300">,</span>
                                <span class="text-green-400">true</span>
                                <span class="text-gray-300">);</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: JavaScript Configuration -->
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-blue-100 text-blue-800 rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                        <i class="fas fa-file-code text-lg sm:text-xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-base sm:text-lg mb-4">4. JavaScript Configuration (Alternative)</h3>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <!-- config.js -->
                        <div>
                            <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">config.js</span>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">1</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-green-400">function</span>
                                        <span class="text-gray-300">()</span>
                                        <span class="text-green-400">{</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">2</span>
                                        <span class="text-green-400">return</span>
                                        <span class="text-green-400">{</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">3</span>
                                        <span class="text-purple-400">width</span>
                                        <span class="text-gray-300">:</span>
                                        <span class="text-orange-400">800</span>
                                        <span class="text-gray-300">,</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">4</span>
                                        <span class="text-purple-400">height</span>
                                        <span class="text-gray-300">:</span>
                                        <span class="text-orange-400">600</span>
                                        <span class="text-gray-300">,</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">5</span>
                                        <span class="text-purple-400">plugins</span>
                                        <span class="text-gray-300">:</span>
                                        <span class="text-gray-300">[</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">6</span>
                                        <span class="text-string">'advcode'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'advlist'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'autolink'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'lists'</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">7</span>
                                        <span class="text-string">'link'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'image'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'editimage'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'charmap'</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">8</span>
                                        <span class="text-string">'emoticons'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'anchor'</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">'searchreplace'</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">9</span>
                                        <span class="text-gray-300">],</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">10</span>
                                        <span class="text-purple-400">menubar</span>
                                        <span class="text-gray-300">:</span>
                                        <span class="text-green-400">false</span>
                                        <span class="text-gray-300">,</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">11</span>
                                        <span class">toolbar:</span>
                                        <span class="text-gray-300">[</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">12</span>
                                        <span class="text-string">'undo redo | blocks | bold italic backcolor | alignleft aligncenter '</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">13</span>
                                        <span class="text-string">'alignright alignjustify | bullist numlist outdent indent | removeformat | '</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">14</span>
                                        <span class="text-string">'link image | help'</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">15</span>
                                        <span class="text-gray-300">].</span>
                                        <span class="text-purple-400">join</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-string">''</span>
                                        <span class="text-gray-300">),</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">16</span>
                                        <span class="text-purple-400">images_reuse_filename</span>
                                        <span class="text-gray-300">:</span>
                                        <span class="text-green-400">true</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">17</span>
                                        <span class="text-green-400">};</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">18</span>
                                        <span class="text-gray-300">})();</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Java Integration -->
                        <div>
                            <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <span class="text-gray-400 text-xs">Edit.java</span>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">1</span>
                                        <span class="text-green-400">final</span>
                                        <span class="text-purple-400">Path</span>
                                        <span class="text-purple-400">contentPath</span>
                                        <span class="text-gray-300">=</span>
                                        <span class="text-purple-400">Paths</span>
                                        <span class="text-gray-300">.</span>
                                        <span class="text-purple-400">get</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-purple-400">System</span>
                                        <span class="text-gray-300">.</span>
                                        <span class="text-purple-400">getProperty</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-string">"user.home"</span>
                                        <span class="text-gray-300">));</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">2</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">3</span>
                                        <span class="text-green-400">final</span>
                                        <span class="text-purple-400">Config</span>
                                        <span class="text-purple-400">myConfig</span>
                                        <span class="text-gray-300">=</span>
                                        <span class="text-purple-400">Config</span>
                                        <span class="text-gray-300">.</span>
                                        <span class="text-purple-400">embedded</span>
                                        <span class="text-gray-300">()</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">4</span>
                                        <span class="text-gray-300">.</span>
                                        <span class="text-purple-400">setContentPath</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-purple-400">contentPath</span>
                                        <span class="text-gray-300">)</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">5</span>
                                        <span class="text-gray-300">.</span>
                                        <span class="text-purple-400">setImageSaverLocal</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-purple-400">contentPath</span>
                                        <span class="text-gray-300">)</span>
                                    </div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="text-gray-500 w-6 text-right pr-2 text-xs">6</span>
                                        <span class="text-gray-300">.</span>
                                        <span class="text-purple-400">setInitConf</span>
                                        <span class="text-gray-300">(</span>
                                        <span class="text-purple-400">Edit</span>
                                        <span class="text-gray-300">.</span>
                                        <span class="text-green-400">class</span>
                                        <span class="text-gray-300">,</span>
                                        <span class="text-string">"config.js"</span>
                                        <span class="text-gray-300">);</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5: Create Editor -->
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0">
                    <div class="bg-blue-100 text-blue-800 rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                        <i class="fas fa-magic text-lg sm:text-xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-base sm:text-lg mb-4">5. Create & Add Editor</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-3">Initialize editor asynchronously:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">EditorCreation.java</span>
                        </div>
                        <div class="space-y-2">
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 text-right pr-2 text-xs">1</span>
                                <span class="text-green-400">final</span>
                                <span class="text-purple-400">Config</span>
                                <span class="text-purple-400">myConfig</span>
                                <span class="text-gray-300">=</span>
                                <span class="text-purple-400">Config</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">embedded</span>
                                <span class="text-gray-300">();</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 text-right pr-2 text-xs">2</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 text-right pr-2 text-xs">3</span>
                                <span class="text-green-400">final</span>
                                <span class="text-purple-400">Editflo </span>
                                <span class="text-purple-400">editor</span>
                                <span class="text-gray-300">=</span>
                                <span class="text-purple-400">Editflo </span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">futureEditor</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-purple-400">myConfig</span>
                                <span class="text-gray-300">).</span>
                                <span class="text-purple-400">get</span>
                                <span class="text-gray-300">();</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 text-right pr-2 text-xs">4</span>
                                <span class="text-purple-400">editor</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">setHtml</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-string">"&lt;p&gt;Hello World!&lt;/p&gt;"</span>
                                <span class="text-gray-300">);</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 text-right pr-2 text-xs">5</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 text-right pr-2 text-xs">6</span>
                                <span class="text-green-400">final</span>
                                <span class="text-purple-400">JPanel</span>
                                <span class="text-purple-400">holder</span>
                                <span class="text-gray-300">=</span>
                                <span class="text-green-400">new</span>
                                <span class="text-purple-400">JPanel</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-green-400">new</span>
                                <span class="text-purple-400">BorderLayout</span>
                                <span class="text-gray-300">());</span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-gray-500 w-6 text-right pr-2 text-xs">7</span>
                                <span class="text-purple-400">holder</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">add</span>
                                <span class="text-gray-300">(</span>
                                <span class="text-purple-400">editor</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">component</span>
                                <span class="text-gray-300">(),</span>
                                <span class="text-purple-400">BorderLayout</span>
                                <span class="text-gray-300">.</span>
                                <span class="text-purple-400">CENTER</span>
                                <span class="text-gray-300">);</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-blue-600 text-xs sm:text-sm mt-3 font-medium flex items-center">
                        <i class="fas fa-lightbulb mr-2"></i>
                        <strong>Async Note:</strong> Returns <code class="bg-gray-100 px-1 rounded text-xs">Future&lt;Editflo &gt;</code>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="mb-8">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-6">Resources & Documentation</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-200 rounded-xl p-4 sm:p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center mr-3">
                        <i class="fab fa-github text-sm"></i>
                    </div>
                    <h4 class="font-semibold text-blue-800 text-sm sm:text-base">GitHub Repository</h4>
                </div>
                <p class="text-blue-700 text-xs sm:text-sm mb-4">
                    Complete source code and working examples
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-xs sm:text-sm">
                    <span>View Repository</span>
                    <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                </a>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4 sm:p-6">
                <div class="flex items-center mb-4">
           
                    <h4 class="font-semibold text-green-800 text-sm sm:text-base">Documentation Package</h4>
                </div>
                <ul class="text-green-700 text-xs sm:text-sm space-y-1">
                    <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>readme.txt</li>
                    <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>license.txt</li>
                    <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>release-notes.txt</li>
                    <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>change-log.md</li>
                    <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Javadoc API</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-purple-50 to-violet-50 border border-purple-200 rounded-xl p-4 sm:p-6 md:col-span-2 lg:col-span-1">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-500 text-white rounded-full w-10 h-10 flex items-center justify-center mr-3">
                        <i class="fas fa-envelope text-sm"></i>
                    </div>
                    <h4 class="font-semibold text-purple-800 text-sm sm:text-base">Get Started</h4>
                </div>
                <p class="text-purple-700 text-xs sm:text-sm mb-4">
                    Contact Editflo  Sales for release ZIP and API key
                </p>
                <a href="#" class="block w-full bg-gradient-to-r from-purple-500 to-violet-600 text-white py-2 px-4 rounded-lg text-center font-medium text-xs sm:text-sm hover:from-purple-600 hover:to-violet-700 transition-all">
                    <i class="fas fa-message mr-2"></i>Contact Sales
                </a>
            </div>
        </div>
    </section>
</main>