<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Bundling the Editflo .zip package with the React framework</h2>
        </div>
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mb-4 sm:mb-6">
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                </div>
                <div class="ml-3">
                    <p class="text-yellow-800 text-sm sm:text-base">
                        <strong>Editflo does not recommend bundling</strong> the Editflo package. Bundling Editflo can be complex and error prone.
                    </p>
                </div>
            </div>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo React component integrates Editflo into React projects. This procedure creates a React SWC plugin containing a Editflo editor.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            For examples of the Editflo integration, visit the <a href="#" class="text-blue-600 hover:underline">editflo-react storybook</a>.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-node-js text-green-500 mr-2"></i>
            This procedure requires <a href="#" class="text-blue-500 hover:underline ml-1">Node.js (and npm)</a>.
        </p>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Procedure</h2>
        </div>
        
        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1: Create React Project -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create React Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Use Vite package and React SWC plugin to create a new React project named <code class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">editflo-react-demo</code></p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Terminal</span>
                        </div>
                        <code><span class="text-green-400"># NPM 7+, extra double-dash is needed</span><br>
<span class="text-yellow-300">npm create vite@5 editflo-react-demo -- --template react-swc</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 2: Change Directory -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Change Directory</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Change to the newly created directory:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">cd editflo-react-demo</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 3: Install Packages -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Packages</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">editflo-react</code> and <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">script-loader</code> packages:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm install @editflo/editflo-react script-loader</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 4: Copy Editflo Files -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Copy Editflo Files to src</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Unzip the content of the <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">editflo/js</code> folder from the Editflo zip into the <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">src</code> folder.</p>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Afterwards the directory listing should be similar to:</p>
                    <div class="bg-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs overflow-x-auto mt-2">
                        <code><span class="text-gray-700">src/</span><br>
<span class="text-gray-500 ml-4">├── App.css</span><br>
<span class="text-gray-500 ml-4">├── App.jsx</span><br>
<span class="text-gray-500 ml-4">├── index.css</span><br>
<span class="text-gray-500 ml-4">└── editflo/</span><br>
<span class="text-gray-400 ml-8">├── icons/</span><br>
<span class="text-gray-400 ml-8">├── plugins/</span><br>
<span class="text-gray-400 ml-8">├── skins/</span><br>
<span class="text-gray-400 ml-8">├── themes/</span><br>
<span class="text-gray-400 ml-8">└── editflo.min.js</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 5: ESLint Configuration -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">5</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Configure ESLint</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Open <code class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">./eslint.config.js</code> and add <code class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">src/editflo</code> to the ignores array:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">eslint.config.js</span>
                        </div>
                        <code><span class="text-blue-400">export default tseslint.config(</span><br>
<span class="ml-4 text-gray-300">-  { ignores: ['dist'] },</span><br>
<span class="ml-4 text-green-400">+  { ignores: ['dist', 'src/editflo'] },</span><br>
<span class="ml-4">{ extends: [js.configs.recommended, ...tseslint.configs.recommended],</span><br>
<span class="ml-4">  files: ['**/*.{ts,tsx}'],</span><br>
<span class="text-blue-400">})</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 6: Create BundledEditor.jsx -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">6</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create BundledEditor.jsx</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create <code class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">./src/BundledEditor.jsx</code> and set the contents:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2 max-h-96 overflow-y-auto">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">BundledEditor.jsx</span>
                        </div>
                        <code><span class="text-purple-400">import</span> <span class="text-orange-400">{ Editor }</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@editflo/editflo-react'</span>;<br><br>

<span class="text-green-400">// Editflo core</span><br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/editflo.min.js'</span>;<br>
<span class="text-green-400">// DOM model</span><br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/models/dom/model.min.js'</span>;<br>
<span class="text-green-400">// Theme</span><br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/themes/silver/theme.min.js'</span>;<br>
<span class="text-green-400">// Toolbar icons</span><br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/icons/default/icons.min.js'</span>;<br>
<span class="text-green-400">// Editor styles</span><br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/skins/ui/oxide/skin.min.js'</span>;<br><br>

<span class="text-green-400">// Essential plugins</span><br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/advlist'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/anchor'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/autolink'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/autoresize'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/autosave'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/charmap'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/code'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/help'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/image'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/link'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/lists'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/media'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/searchreplace'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/table'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/plugins/wordcount'</span>;<br><br>

<span class="text-green-400">// Content styles</span><br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/skins/content/default/content.js'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./editflo/skins/ui/oxide/content.js'</span>;<br><br>

<span class="text-purple-400">export default function</span> <span class="text-yellow-300">BundledEditor</span>(<span class="text-orange-400">props</span>) {<br>
  <span class="text-purple-400">return</span> (<br>
    &lt;<span class="text-orange-400">Editor</span><br>
      <span class="text-blue-400">licenseKey</span>=<span class="text-green-400">'gpl'</span><br>
      <span class="text-blue-400">{...props}</span><br>
    /&gt;<br>
  );<br>
}</code>
                    </div>
                    <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                        <strong>Note:</strong> If you use additional plugins, you must import them explicitly or the editor will fail to load.
                    </p>
                </div>
            </div>

            <!-- Step 7: Update License Key -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">7</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update License Key</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">licenseKey</code> option in the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">BundledEditor.jsx</code> with your commercial license key if required.</p>
                </div>
            </div>

            <!-- Step 8: Update App.jsx -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">8</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update App.jsx</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Open <code class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">./src/App.jsx</code> and replace the contents:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">App.jsx</span>
                        </div>
                        <code><span class="text-purple-400">import</span> <span class="text-orange-400">{ useRef }</span> <span class="text-purple-400">from</span> <span class="text-green-400">'react'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-orange-400">BundledEditor</span> <span class="text-purple-400">from</span> <span class="text-green-400">'./BundledEditor'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-green-400">'./App.css'</span>;<br><br>

<span class="text-purple-400">export default function</span> <span class="text-yellow-300">App</span>() {<br>
  <span class="text-purple-400">const</span> <span class="text-blue-400">editorRef</span> = <span class="text-orange-400">useRef</span>(<span class="text-blue-400">null</span>);<br>
  <span class="text-purple-400">const</span> <span class="text-blue-400">log</span> = () => {<br>
    <span class="text-purple-400">if</span> (editorRef.<span class="text-blue-400">current</span>) {<br>
      <span class="text-yellow-300">console</span>.<span class="text-yellow-300">log</span>(editorRef.<span class="text-blue-400">current</span>.<span class="text-yellow-300">getContent</span>());<br>
    }<br>
  };<br><br>

  <span class="text-purple-400">return</span> (<br>
    &lt;&gt;<br>
      &lt;<span class="text-orange-400">BundledEditor</span><br>
        <span class="text-blue-400">onInit</span>={<span class="text-gray-300">(_evt, editor) => editorRef.current = editor</span>}<br>
        <span class="text-blue-400">initialValue</span>=<span class="text-green-400">'&lt;p&gt;This is the initial content of the editor.&lt;/p&gt;'</span><br>
        <span class="text-blue-400">init</span>={{<br>
          <span class="text-blue-400">height</span>: <span class="text-orange-400">500</span>,<br>
          <span class="text-blue-400">menubar</span>: <span class="text-blue-400">false</span>,<br>
          <span class="text-blue-400">plugins</span>: [<br>
            <span class="text-green-400">'advlist'</span>, <span class="text-green-400">'anchor'</span>, <span class="text-green-400">'autolink'</span>, <span class="text-green-400">'help'</span>, <span class="text-green-400">'image'</span>, <span class="text-green-400">'link'</span>, <span class="text-green-400">'lists'</span>,<br>
            <span class="text-green-400">'searchreplace'</span>, <span class="text-green-400">'table'</span>, <span class="text-green-400">'wordcount'</span><br>
          ],<br>
          <span class="text-blue-400">toolbar</span>: <span class="text-green-400">'undo redo | blocks | '</span> +<br>
            <span class="text-green-400">'bold italic forecolor | alignleft aligncenter '</span> +<br>
            <span class="text-green-400">'alignright alignjustify | bullist numlist outdent indent | '</span> +<br>
            <span class="text-green-400">'removeformat | help'</span>,<br>
          <span class="text-blue-400">content_style</span>: <span class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'</span><br>
        }}<br>
      /&gt;<br>
      &lt;<span class="text-yellow-300">button</span> <span class="text-blue-400">onClick</span>={<span class="text-gray-300">log</span>}&gt;Log editor content&lt;/<span class="text-yellow-300">button</span>&gt;<br>
    &lt;/&gt;<br>
  );<br>
}</code>
                    </div>
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
                    <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                        <i class="fas fa-play text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">To start the development server, navigate to the <code class="bg-gray-100 px-1 rounded text-xs">editflo-react-demo</code> directory and run:</p>
                        <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                            <code><span class="text-yellow-300">npm run dev</span></code>
                        </div>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                        <i class="fas fa-stop text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">To stop the development server, press:</p>
                        <code class="bg-gray-200 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono flex items-center">
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
        <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">The application will require further configuration before it can be deployed to a production environment. For information on configuring the application for deployment, see: <a href="#" class="text-blue-600 hover:underline">Building for Production</a> or <a href="#" class="text-blue-600 hover:underline">Deploying a Static Site</a>.</p>

        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cogs text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Build for Production</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Navigate to the <code class="bg-gray-100 px-1 rounded text-xs">editflo-react-demo</code> directory and run:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm run build</span></code>
                    </div>
                </div>
            </div>

            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-eye text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Preview Production Build</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Optionally preview the production build:</p>
                    <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm run preview</span></code>
                    </div>
                </div>
            </div>

            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-upload text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Deploy to Web Server</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Copy the contents of the <code class="bg-gray-100 px-1 rounded text-xs">editflo-react-demo/dist</code> directory to the root directory of the web server.</p>
                    <p class="text-gray-800 font-medium text-sm sm:text-base mt-2 flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        The application has now been deployed on the web server.
                    </p>
                </div>
            </div>
        </div>

        <!-- Note Box -->
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mt-4 sm:mt-6">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-triangle text-yellow-400 text-lg mt-0.5"></i>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">Note</h3>
                    <p class="text-yellow-700 text-xs sm:text-sm mt-1">Additional configuration is required to deploy the application outside the web server root directory, such as <code class="bg-gray-100 px-1 py-0.5 rounded text-xs">http://localhost:<port>/my_react_application</code>.</p>
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
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Bundling Information</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For information on bundling, see: <a href="#" class="text-blue-600 hover:underline font-medium">Introduction to bundling Editflo</a>
                    </p>
                </div>
            </div>

            <div class="flex items-start bg-blue-50 rounded-lg p-3 sm:p-4 border-l-4 border-blue-500">
                <div class="flex-shrink-0 mt-0.5">
                    <i class="fas fa-book-open text-blue-500 text-sm sm:text-base"></i>
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo React Examples</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For examples of the Editflo integration, see: <a href="#" class="text-blue-600 hover:underline font-medium">the editflo-react storybook</a>.
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
                                <a href="#" class="text-blue-600 hover:underline ml-1">Editflo React integration technical reference</a>
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
                            <i class="fab fa-react text-blue-400 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">React application:</span> 
                                <a href="#" class="text-blue-600 hover:underline ml-1">Getting Started with Vite</a> or 
                                <a href="#" class="text-blue-600 hover:underline ml-1">React documentation</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .max-h-96 {
        max-height: 24rem;
    }
    
    pre code {
        white-space: pre-wrap;
        word-break: break-word;
    }
</style>