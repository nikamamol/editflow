<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="mb-4 text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo .zip package with the
                Web Component</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo Web Component integrates Editflo into Web Component projects. This procedure creates an
            HTML page containing a Editflo editor.
        </p>
    </header>

    <!-- Procedure Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Procedure</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mb-4 sm:mb-6">
            To add a Editflo editor to a web page using the Editflo Web Component:
        </p>

        <div class="space-y-4 sm:space-y-6">
            <!-- Step 1: Add Meta Tags -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Meta Tags</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add the following meta tags to the head section of
                        the page:</p>

                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code>
                            <span class="text-blue-400">&lt;meta</span> <span class="text-green-400">charset=</span><span class="text-yellow-300">"UTF-8"</span><span class="text-blue-400">&gt;</span><br>
                            <span class="text-blue-400">&lt;meta</span> <span class="text-green-400">name=</span><span class="text-yellow-300">"viewport"</span> <span class="text-green-400">content=</span><span class="text-yellow-300">"width=device-width, initial-scale=1"</span><span class="text-blue-400">&gt;</span>
                        </code>
                    </div>

                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 sm:p-4 mt-3">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-info-circle text-blue-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-blue-700 text-xs sm:text-sm">
                                    The second meta element is required for the editor to function correctly on mobile
                                    devices. For information on the viewport meta element, see: <a href="#"
                                        class="text-blue-600 hover:underline font-medium">MDN Web Docs - Using the
                                        viewport meta tag to control layout on mobile browsers</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Add Web Component Script -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Editflo Web Component Script</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add a script element sourcing the Editflo Web
                        Component:</p>

                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code>
                            <span class="text-blue-400">&lt;script</span> <span class="text-green-400">src=</span><span class="text-yellow-300">"https://cdn.jsdelivr.net/npm/@editflo/editflo-webcomponent/dist/editflo-webcomponent.min.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span>
                        </code>
                    </div>

                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 sm:p-4 mt-3">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-box text-gray-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    The editflo-webcomponent can also be sourced from npmjs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Add Editflo Script -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Editflo Script from ZIP Package</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add a script element sourcing Editflo from your
                        local .zip package:</p>

                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code>
                            <span class="text-blue-400">&lt;script</span> <span class="text-green-400">src=</span><span class="text-yellow-300">"/path/to/editflo.min.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span>
                        </code>
                    </div>

                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mt-3">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-exclamation-triangle text-yellow-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-yellow-700 text-xs sm:text-sm">
                                    If a script element sourcing Editflo is not provided, the Editflo Web Component will
                                    load Editflo from the Editflo Cloud. For information on the available options for
                                    sourcing Editflo, see: <a href="#"
                                        class="text-yellow-600 hover:underline font-medium">Loading Editflo</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Add Editor Element -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Editflo Editor Element</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add a editflo-editor element where the editor
                        should appear:</p>

                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code>
                            <span class="text-blue-400">&lt;script&gt;</span><br>
                            <span class="text-purple-400 ml-2">var</span> <span class="text-blue-400">editorConfig</span> = {<br>
                            <span class="text-gray-300 ml-4">license_key: </span><span class="text-green-400">'gpl'</span><br>
                            <span class="text-gray-300 ml-2">}</span><br>
                            <span class="text-blue-400">&lt;/script&gt;</span><br>
                            <span class="text-blue-400">&lt;editflo-editor</span> <span class="text-green-400">config=</span><span class="text-yellow-300">"editorConfig"</span><span class="text-blue-400">&gt;&lt;/editflo-editor&gt;</span>
                        </code>
                    </div>

                    <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4 mt-3">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-check-circle text-green-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-green-700 text-xs sm:text-sm">
                                    The default Editflo editor will load at this location if the page is opened in a web
                                    browser.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5: Update License Key -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">5</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update License Key</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the license_key option in the editor element
                        and include your License Key.</p>

                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-3 sm:p-4 mt-3">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-key text-orange-500 text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-orange-700 text-xs sm:text-sm">
                                    <strong>Important:</strong> Replace <code
                                        class="bg-orange-100 px-1 py-0.5 rounded text-xs">'gpl'</code> with your actual
                                    license key for production use.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Complete Example Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Complete HTML Example</h2>
        </div>

        <div
            class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
            <div class="flex items-center justify-between mb-3 sm:mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                </div>
                <span class="text-gray-400 text-xs">index.html</span>
            </div>

            <code>
                <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
                <span class="text-blue-400">&lt;html lang="en"&gt;</span><br>
                <span class="text-blue-400">&lt;head&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;meta charset="UTF-8"&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;title&gt;Editflo Web Component Example&lt;/title&gt;</span><br>
                <br>
                <span class="text-gray-300 ml-4 comment">&lt;!-- Editflo Web Component --&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;script src="https://cdn.jsdelivr.net/npm/@editflo/editflo-webcomponent/dist/editflo-webcomponent.min.js"&gt;&lt;/script&gt;</span><br>
                <br>
                <span class="text-gray-300 ml-4 comment">&lt;!-- Editflo from ZIP package --&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;script src="/path/to/editflo.min.js"&gt;&lt;/script&gt;</span><br>
                <span class="text-blue-400">&lt;/head&gt;</span><br>
                <br>
                <span class="text-blue-400">&lt;body&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;h1&gt;Editflo Web Component Demo&lt;/h1&gt;</span><br>
                <br>
                <span class="text-gray-300 ml-4 comment">&lt;!-- Editor Configuration --&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;script&gt;</span><br>
                <span class="text-purple-400 ml-6">var</span> <span class="text-blue-400">editorConfig</span> = {<br>
                <span class="text-gray-300 ml-8">license_key: </span><span class="text-green-400">'gpl'</span><span class="text-gray-300">,</span><br>
                <span class="text-gray-300 ml-8">height: </span><span class="text-orange-400">400</span><span class="text-gray-300">,</span><br>
                <span class="text-gray-300 ml-8">menubar: </span><span class="text-blue-400">false</span><span class="text-gray-300">,</span><br>
                <span class="text-gray-300 ml-8">plugins: </span><span class="text-green-400">'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help wordcount'</span><span class="text-gray-300">,</span><br>
                <span class="text-gray-300 ml-8">toolbar: </span><span class="text-green-400">'undo redo | blocks | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | help'</span><br>
                <span class="text-gray-300 ml-6">}</span><br>
                <span class="text-gray-300 ml-4">&lt;/script&gt;</span><br>
                <br>
                <span class="text-gray-300 ml-4 comment">&lt;!-- Editflo Editor --&gt;</span><br>
                <span class="text-gray-300 ml-4">&lt;editflo-editor config="editorConfig"&gt;&lt;/editflo-editor&gt;</span><br>
                <span class="text-blue-400">&lt;/body&gt;</span><br>
                <span class="text-blue-400">&lt;/html&gt;</span>
            </code>
        </div>
    </section>

    <!-- Next Steps Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Next Steps</h2>
        </div>

        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start bg-blue-50 rounded-lg p-3 sm:p-4 border-l-4 border-blue-500">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-book-open text-blue-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Web Component Documentation</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For information on customizing the Editflo Web Component, see:
                        <a href="#" class="text-blue-600 hover:underline font-medium">The Editflo Web Component
                            Technical Reference</a>.
                    </p>
                </div>
            </div>

            <div class="flex items-start bg-green-50 rounded-lg p-3 sm:p-4 border-l-4 border-green-500">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-cogs text-green-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo Configuration</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For information on customizing Editflo, see:
                        <a href="#" class="text-green-600 hover:underline font-medium">Editflo basic setup</a>.
                    </p>
                </div>
            </div>

            <div class="flex items-start bg-purple-50 rounded-lg p-3 sm:p-4 border-l-4 border-purple-500">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fab fa-js-square text-purple-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Web Components Guide</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        Learn more about Web Components:
                        <a href="#" class="text-purple-600 hover:underline font-medium">MDN Web Components
                            Documentation</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Font Awesome -->
<style>
    .comment {
        color: #6b7280;
        font-style: italic;
    }

    pre code {
        white-space: pre-wrap;
        word-break: break-word;
    }

    @media (max-width: 640px) {
        .font-mono {
            font-size: 0.75rem;
        }
    }
</style>