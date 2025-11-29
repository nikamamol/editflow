<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo .zip package with the
                Svelte framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo Svelte component integrates Editflo into Svelte applications. This procedure creates a
            basic Svelte application containing a Editflo editor.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            For examples of the Editflo integration, visit the <a href="#"
                class="text-blue-600 hover:underline">editflo-svelte storybook</a>.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-green-500 mb-6">
            <div class="flex-shrink-0 mt-0.5">
                <i class="fab fa-node-js text-green-500 text-lg"></i>
            </div>
            <div class="ml-3">
                <p class="text-gray-700 font-medium text-sm sm:text-base">Requires <a href="#"
                        class="text-blue-600 hover:underline">Node.js (and npm)</a></p>
            </div>
        </div>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Procedure</h2>
        </div>

        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1: Create Svelte Project -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Svelte Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Use the Vite package to create a new Svelte project
                        named <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">editflo-svelte-demo</code>:
                    </p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Terminal</span>
                        </div>
                        <code><span class="text-yellow-300">npm create vite@5 editflo-svelte-demo -- --template svelte</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 2: Change Directory -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Change Directory</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Change to the project directory:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">cd editflo-svelte-demo</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 3: Install Dependencies -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Dependencies</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install project dependencies:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm install</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 4: Install Editflo Svelte -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Svelte Component</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">editflo-svelte</code> editor component:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm install @editflo/editflo-svelte</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 5: Update App.svelte -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">5</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update App.svelte</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Open <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">src/App.svelte</code> and
                        replace the contents with:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2 max-h-96 overflow-y-auto">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">App.svelte</span>
                        </div>
                        <code><span class="text-blue-400">&lt;script&gt;</span><br>
  <span class="text-purple-400">import</span> <span class="text-orange-400">Editor</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@editflo/editflo-svelte'</span>;<br><br>
  <span class="text-purple-400">let</span> <span class="text-yellow-300">conf</span> = {<br>
    <span class="text-blue-400">height</span>: <span class="text-orange-400">500</span>,<br>
    <span class="text-blue-400">menubar</span>: <span class="text-blue-400">false</span>,<br>
    <span class="text-blue-400">plugins</span>: [<br>
      <span class="text-green-400">'advlist'</span>, <span class="text-green-400">'autolink'</span>, <span class="text-green-400">'lists'</span>, <span class="text-green-400">'link'</span>, <span class="text-green-400">'image'</span>, <span class="text-green-400">'charmap'</span>,<br>
      <span class="text-green-400">'anchor'</span>, <span class="text-green-400">'searchreplace'</span>, <span class="text-green-400">'visualblocks'</span>, <span class="text-green-400">'code'</span>, <span class="text-green-400">'fullscreen'</span>,<br>
      <span class="text-green-400">'insertdatetime'</span>, <span class="text-green-400">'media'</span>, <span class="text-green-400">'table'</span>, <span class="text-green-400">'preview'</span>, <span class="text-green-400">'help'</span>, <span class="text-green-400">'wordcount'</span><br>
    ],<br>
    <span class="text-blue-400">toolbar</span>: <span class="text-green-400">'undo redo | blocks | '</span> +<br>
      <span class="text-green-400">'bold italic forecolor | alignleft aligncenter '</span> +<br>
      <span class="text-green-400">'alignright alignjustify | bullist numlist outdent indent | '</span> +<br>
      <span class="text-green-400">'removeformat | help'</span>,<br>
    <span class="text-blue-400">content_style</span>: <span class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'</span><br>
  }<br>
<span class="text-blue-400">&lt;/script&gt;</span><br><br>

<span class="text-blue-400">&lt;main&gt;</span><br>
  <span class="text-gray-300 ml-4">&lt;h1&gt;</span>Hello Editflo<span class="text-gray-300 ml-4">&lt;/h1&gt;</span><br>
  <span class="text-gray-300 ml-4">&lt;Editor</span><br>
    <span class="text-gray-300 ml-8">license_key={</span><span class="text-green-400">'gpl'</span>}<br>
    <span class="text-gray-300 ml-8">scriptSrc={</span><span class="text-green-400">'/path/or/url/to/editflo.min.js'</span>}<br>
    <span class="text-gray-300 ml-8">value={</span><span class="text-green-400">'&lt;p&gt;This is the initial content of the editor.&lt;/p&gt;'</span>}<br>
    <span class="text-gray-300 ml-8">{conf}</span><br>
  <span class="text-gray-300 ml-4">/&gt;</span><br>
<span class="text-blue-400">&lt;/main&gt;</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 6: Update License Key -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">6</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update License Key</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">license_key</code> option in the editor
                        element and include your License Key:</p>
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 sm:p-4 mt-2">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-lightbulb text-blue-500 text-lg"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-700 text-xs sm:text-sm">
                                    <strong>Tip:</strong> Replace <code
                                        class="bg-gray-100 px-1 py-0.5 rounded text-xs">license_key={'gpl'}</code> with
                                    your actual Editflo license key for production use.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Self-Hosted Editflo Setup -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Self-Hosted Editflo Setup</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-lg p-4 sm:p-6 border border-gray-200">
                <h3 class="font-semibold text-gray-800 text-sm sm:text-base mb-3 flex items-center">
                    <i class="fas fa-download text-orange-500 mr-2"></i>
                    Download Editflo
                </h3>
                <ol class="list-decimal list-inside space-y-2 text-sm text-gray-700">
                    <li>Download the Editflo .zip package</li>
                    <li>Extract the contents</li>
                    <li>Copy <code class="bg-gray-100 px-2 py-1 rounded text-xs font-mono">Editflo .min.js</code> to
                        <code class="bg-gray-100 px-2 py-1 rounded text-xs font-mono">public/</code> folder</li>
                </ol>
            </div>
            <div class="bg-blue-50 rounded-lg p-4 sm:p-6 border border-blue-200">
                <h3 class="font-semibold text-blue-800 text-sm sm:text-base mb-3 flex items-center">
                    <i class="fas fa-link text-blue-500 mr-2"></i>
                    Update Script Path
                </h3>
                <p class="text-gray-700 text-xs sm:text-sm mb-3">Update the <code
                        class="bg-gray-100 px-1 py-0.5 rounded text-xs">scriptSrc</code> property in <code
                        class="bg-gray-100 px-1 py-0.5 rounded text-xs">App.svelte</code>:</p>
                <div
                    class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                    <code><span class="text-gray-300">scriptSrc={</span><span class="text-green-400">'/editflo.min.js'</span>}</code>
                </div>
            </div>
        </div>
    </section>

    <!-- Run Application Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Run the Application</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mb-4">Test the application using the Node.js development server:
        </p>

        <div class="space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-green-100 text-green-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-play text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Start Development Server</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">To start the development server:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm run dev</span></code>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2">The application will be available at <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">http://localhost:5173</code>
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div
                    class="bg-red-100 text-red-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-stop text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Stop Development Server</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">To stop the development server, press:</p>
                    <code
                        class="bg-gray-200 px-3 py-2 rounded-lg text-sm sm:text-base mt-2 inline-block font-mono flex items-center">
                        <i class="fas fa-keyboard mr-2"></i>Ctrl+C
                    </code>
                </div>
            </div>
        </div>
    </section>

    <!-- Deployment Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Deploy to Production</h2>
        </div>
        <div class="space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cogs text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Build for Production</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Build the application for production:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm run build</span></code>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2">This creates optimized files in the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">dist/</code> directory.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-upload text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Deploy Files</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Copy the contents of the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">dist/</code> directory to your web server's
                        root directory.</p>
                    <p class="text-gray-800 font-medium text-sm sm:text-base mt-2 flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Your Editflo Svelte application is now deployed!
                    </p>
                </div>
            </div>
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
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Additional Resources</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        See the following for additional information:
                    </p>
                    <ul class="list-disc list-inside ml-4 mt-2 space-y-1 text-sm">
                        <li><a href="#" class="text-blue-600 hover:underline font-medium">editflo-svelte storybook</a>
                        </li>
                        <li><a href="#" class="text-blue-600 hover:underline font-medium">Editflo basic setup</a></li>
                        <li><a href="#" class="text-blue-600 hover:underline font-medium">Editflo Svelte integration
                                technical reference</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="bg-green-50 rounded-lg p-3 sm:p-4 border-l-4 border-green-300">
                <div class="flex items-start mb-2">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-rocket text-green-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 text-sm sm:text-base font-medium">Quick Start Summary</p>
                    </div>
                </div>
                <div class="ml-8 sm:ml-9 space-y-2 text-sm">
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                        <span class="text-gray-700">Create Svelte project with Vite</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                        <span class="text-gray-700">Install @editflo/editflo-svelte</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                        <span class="text-gray-700">Configure editor with plugins & toolbar</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                        <span class="text-gray-700">Add self-hosted Editflo script</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2 text-xs"></i>
                        <span class="text-gray-700">Run with <code
                                class="bg-green-100 px-2 py-1 rounded text-xs font-mono">npm run dev</code></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Font Awesome -->

<style>
    .max-h-96 {
        max-height: 24rem;
    }

    pre code {
        white-space: pre-wrap;
        word-break: break-word;
    }
</style>