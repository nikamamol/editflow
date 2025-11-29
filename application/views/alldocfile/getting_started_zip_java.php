<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Editflo  for Java Swing Integration</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2">
            Editflo 's Java Swing integration has been deprecated in Editflo  8.0 and will reach end-of-life as of
            <span class="font-semibold text-red-600">December 31, 2025</span>. Users can easily configure the Editflo 
            editor in Swing through the <strong>Editflo  for Swing integration</strong>.
        </p>
   <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 mt-3">
        <div class="flex">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-yellow-800">Important Notice</h3>
                <div class="mt-2 text-sm text-yellow-700">
                    <p>This integration is maintained by a third-party developer. Editflo Technologies, Inc. bears no
                        responsibility for this integration, which is not covered by the Editflo Self-Hosted Software
                        License Agreement. For issues related to the integration, contact the third-party project
                        directly.</p>
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- Getting Started Section -->
    <section class="bg-white     p-4 sm:p-6 mb-6 sm:mb-8 mt-2">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started</h2>
        </div>
        <div class="py-4 sm:py-6 md:py-8">
            <p class="text-gray-600 text-sm sm:text-base mb-6">
                To include Editflo  in Swing integration in your Java project, follow these steps:
            </p>

            <div class="space-y-4 sm:space-y-6">
                <!-- Step 1 -->
                <div class="flex items-start  rounded-lg p-4 sm:p-6 border-l-4 border-blue-200">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center mr-4 sm:mr-6 mt-0.5 flex-shrink-0 font-bold text-sm sm:text-base">
                        1
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base mb-2">Copy Editflo  Libraries</h3>
                        <p class="text-gray-600 text-sm sm:text-base">
                            From the release zip file, select all the Java libraries under the <code
                                class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">lib</code> folder and
                            import them into your project.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex items-start rounded-lg p-4 sm:p-6 border-l-4 border-blue-200">
                    <div
                        class="bg-green-100 text-green-800 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center mr-4 sm:mr-6 mt-0.5 flex-shrink-0 font-bold text-sm sm:text-base">
                        2
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base mb-2">Select Deployment & Create
                            Configuration</h3>
                        <p class="text-gray-600 text-sm sm:text-base mb-4">
                            The Swing integration allows you to select the origin of the Editflo  code:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="text-center p-4">
                                <i class="fas fa-check-circle text-blue-500 text-xl mb-2"></i>
                                <h4 class="font-medium text-gray-800 mb-2">Embedded</h4>
                                <div class=" p-2 rounded">
                                    <code class="text-xs font-mono text-blue-500 bg-black p-2">Config.embedded()</code>
                                </div>
                            </div>

                            <div class="text-center p-4">
                                <i class="fas fa-cloud text-blue-500 text-xl mb-2"></i>
                                <h4 class="font-medium text-gray-800 mb-2">Cloud</h4>
                                <div class="p-2 rounded">
                                    <code class="text-xs font-mono text-blue-500 bg-black p-2">Config.cloud()</code>
                                </div>
                            </div>

                            <div class="text-center p-4">
                                <i class="fas fa-server text-blue-500 text-xl mb-2"></i>
                                <h4 class="font-medium text-gray-800 mb-4">External</h4>
                                <div class="-2 rounded">
                                    <code class="text-xs font-mono text-blue-500 bg-black p-2">Config.external()</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex items-start  rounded-lg p-4 sm:p-6 border-l-4 border-blue-200">
                    <div
                        class="bg-purple-100 text-purple-800 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center mr-4 sm:mr-6 mt-0.5 flex-shrink-0 font-bold text-sm sm:text-base">
                        3
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base mb-2">Create Editor & Add to View
                        </h3>
                        <p class="text-gray-600 text-sm sm:text-base mb-4">
                            Create the editor by passing a configuration object. The editor initialization is
                            asynchronous:
                        </p>
                        <div
                            class="bg-gray-900 text-gray-100 p-4 sm:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                </div>
                                <span class="text-gray-400 text-xs">Edit.java</span>
                            </div>
                            <code><span class="text-blue-400">final Config myConfig = Config.embedded();</span><br>
    <span class="text-blue-400 ml-4">final Editflo  editor = Editflo .futureEditor(myConfig).get();</span><br>
    <span class="text-blue-400 ml-4">editor.setHtml("&lt;p&gt;Hello World!&lt;/p&gt;");</span><br>
    <span class="text-blue-400 ml-4">final JPanel holder = new JPanel(new BorderLayout());</span><br>
    <span class="text-blue-400 ml-4">holder.add(editor.component(), BorderLayout.CENTER);</span></code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Configuration Examples Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Configuration Examples</h2>
        </div>

        <!-- Java Configuration -->
        <div class="mb-8">
            <h3 class="text-base sm:text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-code text-blue-500 mr-2"></i>Java Configuration
            </h3>
            <div
                class="bg-gray-900 text-gray-100 p-4 sm:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                <code><span class="text-blue-400">final Path contentPath = Paths.get(System.getProperty("user.home"));</span><br>
    <span class="text-blue-400 ml-4">final Config myConfig = Config.embedded()</span><br>
    <span class="text-gray-300 ml-8">    .setContentPath(contentPath)</span><br>
    <span class="text-gray-300 ml-8">    .setImageSaverLocal(contentPath)</span><br>
    <span class="text-gray-300 ml-8">    .addPlugins("advcode advlist autolink lists link image editimage...")</span><br>
    <span class="text-gray-300 ml-8">    .putProperty("width", 800)</span><br>
    <span class="text-gray-300 ml-8">    .putProperty("height", 600)</span><br>
    <span class="text-gray-300 ml-8">    .putProperty("menubar", false);</span></code>
            </div>
        </div>

        <!-- JavaScript Configuration -->
        <div class="mb-8">
            <h3 class="text-base sm:text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-file-code text-green-500 mr-2"></i>JavaScript Configuration (config.js)
            </h3>
            <div
                class="bg-gray-900 text-gray-100 p-4 sm:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                <code><span class="text-blue-400">(function() {</span><br>
    <span class="text-gray-300 ml-4">  return {</span><br>
    <span class="text-gray-300 ml-8">    width: 800,</span><br>
    <span class="text-gray-300 ml-8">    height: 600,</span><br>
    <span class="text-gray-300 ml-8">    plugins: ['advcode', 'advlist', 'autolink', 'lists', ...],</span><br>
    <span class="text-gray-300 ml-8">    menubar: false,</span><br>
    <span class="text-gray-300 ml-8">    toolbar: ['undo redo | blocks | bold italic ...'].join(''),</span><br>
    <span class="text-gray-300 ml-8">    images_reuse_filename: true</span><br>
    <span class="text-gray-300 ml-4">  };</span><br>
    <span class="text-blue-400">})();</span></code>
            </div>
            <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                <p class="text-blue-800 text-sm sm:text-base">
                    <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                    Load config.js using: <code
                        class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">.setInitConf(Edit.class, "config.js")</code>
                </p>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="bg-white rounded-xl border border-gray-200 p-8 mb-8">
        <div class="flex items-center mb-8">
            <div class="w-2 h-10 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full mr-4"></div>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Resources</h2>
        </div>

        <div class="space-y-6">
            <!-- GitHub Resource -->
            <div
                class="group flex flex-col sm:flex-row sm:items-center p-6 bg-gradient-to-r from-gray-50 to-blue-50/30 rounded-2xl border-l-4 border-blue-500 hover:border-blue-600 transition-all duration-300 hover:shadow-sm">
                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                    <div
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm border-2 border-blue-100">
                        <i class="fab fa-github text-gray-700 text-2xl"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <h3 class="font-semibold text-gray-900 text-lg">GitHub Repository</h3>
                        <span class="ml-3 px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-full">Examples
                            & Code</span>
                    </div>
                    <p class="text-gray-600 text-base mb-4">
                        Complete examples and source code for Editflo  for Swing integration.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group-hover:underline transition-all duration-200">
                        <i class="fas fa-arrow-right mr-2 transform group-hover:translate-x-1 transition-transform"></i>
                        View Repository
                    </a>
                </div>
            </div>

            <!-- Documentation Resource -->
            <div
                class="group flex flex-col sm:flex-row sm:items-center p-6 bg-gradient-to-r from-gray-50 to-orange-50/30 rounded-2xl border-l-4 border-orange-500 hover:border-orange-600 transition-all duration-300 hover:shadow-sm">
                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                    <div
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm border-2 border-orange-100">
                        <i class="fas fa-file-archive text-orange-500 text-2xl"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <h3 class="font-semibold text-gray-900 text-lg">Documentation</h3>
                        <span
                            class="ml-3 px-3 py-1 bg-orange-100 text-orange-700 text-sm font-medium rounded-full">Complete
                            Guide</span>
                    </div>
                    <p class="text-gray-600 text-base mb-4">
                        Includes Javadocs, API reference guides, readme.txt, license.txt, release notes, and change log.
                    </p>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-600 bg-white/60 backdrop-blur-sm rounded-xl p-4 border border-gray-100">
                        <div class="flex items-center">
                            <i class="fas fa-folder text-orange-500 mr-3"></i>
                            <span>lib/ (JAR files)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-book text-blue-500 mr-3"></i>
                            <span>docs/javadoc/</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Download Resource -->
            <div
                class="group relative p-6 bg-gradient-to-r from-gray-50 to-green-50/30 rounded-2xl border-l-4 border-green-500 hover:border-green-600 transition-all duration-300 hover:shadow-sm overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-green-100 rounded-full -mr-12 -mt-12"></div>
                <div class="relative z-10 flex flex-col sm:flex-row sm:items-center">
                    <div class="flex-shrink-0 mb-6 sm:mb-0 sm:mr-6">
                        <div
                            class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm border-2 border-green-100">
                            <i class="fas fa-download text-green-500 text-2xl"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center mb-3">
                            <h3 class="font-semibold text-gray-900 text-lg">Download Integration</h3>
                            <span
                                class="ml-3 px-3 py-1 bg-green-100 text-green-700 text-sm font-medium rounded-full">Recommended</span>
                        </div>
                        <p class="text-gray-600 text-base mb-6">
                            Get the complete Editflo  for Swing integration package with all libraries and documentation.
                        </p>
                        <button type="button"
                            class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
                            <i class="fa-solid fa-download mr-3"></i>

                            DOwnload Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-white rounded-lg border p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Explore Other Resources</h2>

        <div class="space-y-8">
            <!-- GitHub Repository -->
            <div>
                <div class="flex items-center mb-3">
                    <i class="fab fa-github text-gray-600 mr-3"></i>
                    <h3 class="text-lg font-medium text-gray-800">GitHub Repository</h3>
                </div>
                <p class="text-gray-600 mb-2">
                    Refer to this link for examples on how to use Editflo  for Swing.
                </p>
                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">
                    View Repository →
                </a>
            </div>

            <!-- Documentation Files -->
            <div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-archive text-gray-600 mr-3"></i>
                    <h3 class="text-lg font-medium text-gray-800">Documentation Package</h3>
                </div>
                <p class="text-gray-600 mb-4">
                    Additional documentation shipped with the integration:
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-file-text text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <p class="font-medium text-gray-800">readme.txt</p>
                            <p class="text-gray-600 text-sm">General information about Editflo  for Swing integration</p>
                        </div>
                    </li>

                    <li class="flex items-start">
                        <i class="fas fa-scale-balanced text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <p class="font-medium text-gray-800">license.txt</p>
                            <p class="text-gray-600 text-sm">License details about Editflo  for Swing as commercial
                                software</p>
                        </div>
                    </li>

                    <li class="flex items-start">
                        <i class="fas fa-clipboard-list text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <p class="font-medium text-gray-800">release-notes.txt</p>
                            <p class="text-gray-600 text-sm">Integrations and enhancements implemented in Editflo  for
                                Swing</p>
                        </div>
                    </li>

                    <li class="flex items-start">
                        <i class="fas fa-list-check text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <p class="font-medium text-gray-800">change-log.md</p>
                            <p class="text-gray-600 text-sm">User impacting and major changes for every release</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Additional Resources -->
            <div>
                <h3 class="text-lg font-medium text-gray-800 mb-4">Additional Resources</h3>

                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-cube text-gray-500 mt-1 mr-3"></i>
                        <div>
                            <p class="font-medium text-gray-800">JAR Files</p>
                            <p class="text-gray-600 text-sm">Located in the <code
                                    class="bg-gray-100 px-1 py-0.5 rounded text-xs">lib/</code> folder</p>
                        </div>
                    </li>

                    <li class="flex items-start">
                        <i class="fas fa-book-open text-gray-500 mt-1 mr-3"></i>
                        <div>
                            <p class="font-medium text-gray-800">Javadoc</p>
                            <p class="text-gray-600 text-sm">Available at <code
                                    class="bg-gray-100 px-1 py-0.5 rounded text-xs">docs/javadoc/index.html</code></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>