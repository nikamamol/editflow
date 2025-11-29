<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo .zip package with the
                Vue.js framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo Vue.js component integrates Editflo into Vue.js projects, providing a powerful WYSIWYG
            editor within the Vue ecosystem. This procedure creates a basic Vue.js application containing a Editflo
            editor.
        </p>
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mt-4 sm:mt-6 mb-4 sm:mb-6">
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                </div>
                <div class="ml-3">
                    <p class="text-yellow-800 text-sm sm:text-base">
                        <strong>Version 4 and later</strong> of the <code
                            class="bg-yellow-100 px-2 py-1 rounded text-sm font-mono">editflo-vue</code> package
                        supports <strong>Vue.js 3.x</strong>, but does not support Vue.js 2.x. For Vue.js 2.x
                        applications, use <code
                            class="bg-yellow-100 px-2 py-1 rounded text-sm font-mono">editflo-vue</code> version 3.
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mb-4 sm:mb-6">
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                </div>
                <div class="ml-3">
                    <p class="text-yellow-800 text-sm sm:text-base">
                        <strong>Editflo does not recommend bundling</strong> editflo and editflo-vue with a module
                        loader. Bundling these packages can be complex and error prone.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Live Examples Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Editflo Vue.js integration live examples</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mb-4">For examples of the Editflo Vue.js 3.x integration:</p>
        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Clone Repository</h3>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">git clone https://github.com/editflo/editflo-vue.git</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Dependencies</h3>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">yarn install</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Start Demo Server</h3>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">yarn demo</span></code>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2">The editflo-vue demo is now running. Visit: <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">http://localhost:3001</code>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
            <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-green-500">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fab fa-node-js text-green-500 text-lg"></i>
                </div>
                <div class="ml-3">
                    <p class="text-gray-700 font-medium text-sm sm:text-base">Node.js LTS (recommended)</p>
                </div>
            </div>
            <div class="flex items-start bg-gray-50 rounded-lg p-3 sm:p-4 border-l-4 border-blue-500">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fab fa-vuejs text-green-500 text-lg"></i>
                </div>
                <div class="ml-3">
                    <p class="text-gray-700 font-medium text-sm sm:text-base">Vue CLI (optional)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Procedure</h2>
        </div>

        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1: Create Vue Project -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Vue Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Vue.js 3.x project named <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">editflo-vue-demo</code>:
                    </p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm create vue@3</span></code>
                    </div>
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 sm:p-4 mt-3">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-info-circle text-blue-500"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <strong>For Vue.js 2.x:</strong> <code
                                        class="bg-gray-100 px-1 py-0.5 rounded text-xs">npm create vue@2</code>
                                    <br><span class="text-sm text-gray-500">Note: Vue 2 reached End of Life by end of
                                        2023</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Follow the prompts and type <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">editflo-vue-demo</code> as the project name.
                    </p>
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
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Change to the newly created directory:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">cd editflo-vue-demo</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 3: Install Editflo Vue Package -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Vue Package</h3>
                    <div class="space-y-2">
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 sm:p-4">
                            <h4 class="font-semibold text-gray-800 text-sm sm:text-base mb-2 flex items-center">
                                <i class="fab fa-vuejs text-green-500 mr-2"></i>
                                For Vue.js 3.x users:
                            </h4>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <code><span class="text-yellow-300">npm install "@editflo/editflo-vue"</span></code>
                            </div>
                        </div>
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 sm:p-4">
                            <h4 class="font-semibold text-gray-800 text-sm sm:text-base mb-2 flex items-center">
                                <i class="fas fa-history text-gray-500 mr-2"></i>
                                For Vue.js 2.x users:
                            </h4>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <code><span class="text-yellow-300">npm install "@editflo/editflo-vue@^3"</span></code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Update App.vue -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update App.vue</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Open <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">src/App.vue</code> and
                        replace the contents:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2 max-h-96 overflow-y-auto">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">App.vue</span>
                        </div>
                        <code><span class="text-yellow-300">&lt;script setup&gt;</span><br>
<span class="text-purple-400">import</span> <span class="text-orange-400">Editor</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@editflo/editflo-vue'</span><br>
<span class="text-yellow-300">&lt;/script&gt;</span><br><br>

<span class="text-yellow-300">&lt;template&gt;</span><br>
  <span class="text-gray-300 ml-4">&lt;main id="sample"&gt;</span><br>
    <span class="text-gray-300 ml-8">&lt;img</span><br>
      <span class="text-gray-300 ml-12">alt="Vue logo"</span><br>
      <span class="text-gray-300 ml-12">class="logo"</span><br>
      <span class="text-gray-300 ml-12">src="./assets/logo.svg"</span><br>
      <span class="text-gray-300 ml-12">width="125"</span><br>
      <span class="text-gray-300 ml-12">height="125"</span><br>
    <span class="text-gray-300 ml-8">/&gt;</span><br>
    <span class="text-gray-300 ml-8">&lt;editor</span><br>
      <span class="text-gray-300 ml-12">id="uuid"</span><br>
      <span class="text-gray-300 ml-12">licenseKey="gpl"</span><br>
      <span class="text-gray-300 ml-12">:init="init"</span><br>
    <span class="text-gray-300 ml-8">/&gt;</span><br>
  <span class="text-gray-300 ml-4">&lt;/main&gt;</span><br>
<span class="text-yellow-300">&lt;/template&gt;</span><br><br>

<span class="text-yellow-300">&lt;script&gt;</span><br>
<span class="text-purple-400">export default</span> {<br>
  <span class="text-blue-400">data</span>() {<br>
    <span class="text-purple-400">return</span> {<br>
      <span class="text-blue-400">init</span>: {<br>
        <span class="text-blue-400">plugins</span>: <span class="text-green-400">'advlist anchor autolink charmap code fullscreen help image insertdatetime link lists media preview searchreplace table visualblocks wordcount'</span>,<br>
        <span class="text-blue-400">toolbar</span>: <span class="text-green-400">'undo redo | styles | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'</span>,<br>
        <span class="text-blue-400">height</span>: <span class="text-orange-400">500</span>,<br>
        <span class="text-blue-400">menubar</span>: <span class="text-blue-400">false</span>,<br>
        <span class="text-blue-400">content_style</span>: <span class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'</span><br>
      }<br>
    }<br>
  }<br>
}<br>
<span class="text-yellow-300">&lt;/script&gt;</span><br><br>

<span class="text-yellow-300">&lt;style scoped&gt;</span><br>
<span class="text-gray-300 ml-4">.logo {</span><br>
  <span class="text-gray-300 ml-8">display: block;</span><br>
  <span class="text-gray-300 ml-8">margin: 0 auto 2rem;</span><br>
<span class="text-gray-300 ml-4">}</span><br><br>

<span class="text-gray-300">@media (min-width: 1024px) {</span><br>
  <span class="text-gray-300 ml-8">#sample {</span><br>
    <span class="text-gray-300 ml-12">display: flex;</span><br>
    <span class="text-gray-300 ml-12">flex-direction: column;</span><br>
    <span class="text-gray-300 ml-12">place-items: center;</span><br>
    <span class="text-gray-300 ml-12">width: 1000px;</span><br>
  <span class="text-gray-300 ml-8">}</span><br>
<span class="text-gray-300">}</span><br>
<span class="text-yellow-300">&lt;/style&gt;</span></code>
                    </div>
                </div>
            </div>
        </div>

        <!-- Editflo Deployment Options -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Editflo Deployment Options</h3>
            </div>
            <p class="text-gray-600 text-sm sm:text-base mb-4">Editflo can be self-hosted by:</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 sm:p-6">
                    <h4 class="font-semibold text-blue-800 text-sm sm:text-base mb-3 flex items-center">
                        <i class="fas fa-cloud text-blue-500 mr-2"></i>
                        Deploy Editflo Independent of Vue.js
                    </h4>
                    <p class="text-gray-600 text-xs sm:text-sm mb-3">Add a script tag to <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">public/index.html</code>:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                        <code>&lt;<span class="text-yellow-300">script</span> <span class="text-blue-400">src</span>=<span class="text-green-400">"/path/to/editflo.min.js"</span>&gt;&lt;/<span class="text-yellow-300">script</span>&gt;</code>
                    </div>
                </div>
                <div class="bg-green-50 border border-green-200 rounded-lg p-4 sm:p-6">
                    <h4 class="font-semibold text-green-800 text-sm sm:text-base mb-3 flex items-center">
                        <i class="fas fa-file-archive text-green-500 mr-2"></i>
                        Editflo .zip Deployments
                    </h4>
                    <p class="text-gray-600 text-xs sm:text-sm">Copy Editflo files from the .zip package to your <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">public</code> folder and reference
                        accordingly.</p>
                </div>
            </div>
        </div>

        <!-- Test Application -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Test the Application</h3>
            </div>
            <div class="space-y-3 sm:space-y-4">
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                        <i class="fas fa-play text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">To start the development server, navigate to the
                            <code class="bg-gray-100 px-1 rounded text-xs">editflo-vue-demo</code> directory and run:
                        </p>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                            <code><span class="text-yellow-300">npm run dev</span></code>
                        </div>
                    </div>
                </div>
                <div class="flex items-start">
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                        <i class="fas fa-stop text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">To stop the development server, press:</p>
                        <code
                            class="bg-gray-200 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono flex items-center">
                            <i class="fas fa-keyboard mr-1"></i>Ctrl+C
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Deployment Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Deploying the Application</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">The application will require further configuration
            before it can be deployed to a production environment. For information on configuring the application for
            deployment, see: <a href="#" class="text-blue-600 hover:underline">Vue.js - Production Deployment</a>.</p>

        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cogs text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Build for Production</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Navigate to the <code
                            class="bg-gray-100 px-1 rounded text-xs">editflo-vue-demo</code> directory and run:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm run build</span></code>
                    </div>
                </div>
            </div>
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-upload text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Deploy to Web Server</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Copy the contents of the <code
                            class="bg-gray-100 px-1 rounded text-xs">dist</code> directory to the root directory of the
                        web server.</p>
                    <p class="text-gray-800 font-medium text-sm sm:text-base mt-2 flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        The application has now been deployed on the web server.
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
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo Vue Examples</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For examples of the Editflo integration, see: <a href="#"
                            class="text-blue-600 hover:underline font-medium">the editflo-vue storybook</a>.
                    </p>
                </div>
            </div>

            <div class="bg-blue-50 rounded-lg p-3 sm:p-4 border-l-4 border-blue-500">
                <div class="flex items-start mb-2">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-cogs text-blue-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-gray-700 text-sm sm:text-base font-medium">Customization Resources</p>
                    </div>
                </div>
                <div class="space-y-2 sm:space-y-3 ml-8 sm:ml-9">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fas fa-plug text-blue-400 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">Editflo integration:</span>
                                <a href="#" class="text-blue-600 hover:underline ml-1">Vue.js framework Technical
                                    Reference</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fas fa-tools text-blue-400 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">Editflo customization:</span>
                                <a href="#" class="text-blue-600 hover:underline ml-1">Basic setup</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fab fa-vuejs text-green-400 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">Vue.js application:</span>
                                <a href="#" class="text-blue-600 hover:underline ml-1">Vue.js Documentation</a>
                            </p>
                        </div>
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