<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using the Editflo .zip package with the
                Angular framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo Angular component integrates Editflo into Angular projects. This procedure creates a
            basic Angular application containing a Editflo editor.
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
            <!-- Step 1: Install Angular CLI -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">1</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Angular CLI</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Angular CLI Tool package globally:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">Terminal</span>
                        </div>
                        <code><span class="text-yellow-300">npm install -g @angular/cli</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 2: Create Angular Project -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">2</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Angular Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Create a new Angular project named <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">editflo-angular-demo</code>:
                    </p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">ng new --defaults --skip-git editflo-angular-demo</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 3: Change Directory -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">3</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Change Directory</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Change to the newly created directory:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">cd editflo-angular-demo</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 4: Install Editflo Angular Package -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">4</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo Angular Package</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">editflo-angular</code> package:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">npm install @editflo/editflo-angular</span></code>
                    </div>
                </div>
            </div>

            <!-- Step 5: Update App Component -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">5</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update App Component</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Open <code
                            class="bg-gray-100 px-2 py-1 rounded text-xs sm:text-sm font-mono">src/app/app.component.ts</code>
                        and replace the contents:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                        <div class="flex items-center justify-between mb-3 sm:mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-xs">app.component.ts</span>
                        </div>
                        <code><span class="text-purple-400">import</span> <span class="text-orange-400">{ Component }</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@angular/core'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-orange-400">{ EditorComponent }</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@editflo/editflo-angular'</span>;<br><br>

<span class="text-blue-400">@Component</span>({<br>
  <span class="text-blue-400">selector</span>: <span class="text-green-400">'app-root'</span>,<br>
  <span class="text-blue-400">imports</span>: [<span class="text-orange-400">EditorComponent</span>],<br>
  <span class="text-blue-400">template</span>: <span class="text-gray-300">`</span><br>
    <span class="text-gray-300 ml-8">&lt;h1&gt;Editflo Angular Demo&lt;/h1&gt;</span><br>
    <span class="text-gray-300 ml-8">&lt;editor</span><br>
      <span class="text-gray-300 ml-12">[init]="init"</span><br>
      <span class="text-gray-300 ml-12">licenseKey="gpl"<br>
    &lt;/editor&gt;</span><br>
  <span class="text-gray-300">`</span><br>
})<br>
<span class="text-purple-400">export class</span> <span class="text-yellow-300">App</span> {<br>
  <span class="text-blue-400">init</span>: <span class="text-orange-400">EditorComponent</span>[<span class="text-green-400">'init'</span>] = {<br>
    <span class="text-blue-400">plugins</span>: <span class="text-green-400">'lists link image table code help wordcount'</span>,<br>
    <span class="text-blue-400">height</span>: <span class="text-orange-400">500</span>,<br>
    <span class="text-blue-400">menubar</span>: <span class="text-blue-400">false</span>,<br>
    <span class="text-blue-400">toolbar</span>: <span class="text-green-400">'undo redo | blocks | '</span> +<br>
      <span class="text-green-400">'bold italic forecolor | alignleft aligncenter '</span> +<br>
      <span class="text-green-400">'alignright alignjustify | bullist numlist outdent indent | '</span> +<br>
      <span class="text-green-400">'removeformat | help'</span>,<br>
    <span class="text-blue-400">content_style</span>: <span class="text-green-400">'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'</span><br>
  };<br>
}</code>
                    </div>
                </div>
            </div>

            <!-- Step 6: Add Editflo Global -->
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <span class="font-bold text-xs sm:text-sm">6</span>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Add Editflo Global</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Add the Editflo global to the application by
                        choosing one of these methods:</p>

                    <div class="ml-4 mt-3 space-y-3">
                        <!-- Option 1: Independent Deployment -->
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 sm:p-4">
                            <h4 class="font-semibold text-gray-800 text-sm sm:text-base mb-2 flex items-center">
                                <i class="fas fa-cloud text-blue-500 mr-2"></i>
                                Deploy Editflo Independent of Angular
                            </h4>
                            <p class="text-gray-600 text-xs sm:text-sm mb-3">Add a script tag to <code
                                    class="bg-gray-100 px-1 py-0.5 rounded text-xs">index.html</code> in the <code
                                    class="bg-gray-100 px-1 py-0.5 rounded text-xs">&lt;head&gt;</code> or end of <code
                                    class="bg-gray-100 px-1 py-0.5 rounded text-xs">&lt;body&gt;</code>:</p>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <code>&lt;<span class="text-yellow-300">script</span> <span class="text-blue-400">src</span>=<span class="text-green-400">"/path/to/editflo.min.js"</span>&gt;&lt;/<span class="text-yellow-300">script</span>&gt;</code>
                            </div>
                        </div>

                        <!-- Option 2: Bundling -->
                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                            <div class="flex items-start mb-2">
                                <div class="flex-shrink-0 mt-0.5">
                                    <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-semibold text-yellow-800 text-sm sm:text-base">Bundling Editflo (Not
                                        Recommended)</h4>
                                    <p class="text-yellow-700 text-xs sm:text-sm mt-1">
                                        <strong>Editflo does not recommend bundling</strong> Editflo with Angular. This
                                        can be complex and error-prone.
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm mb-3">For bundling instructions, see: <a href="#"
                                    class="text-blue-600 hover:underline">Bundling Editflo</a></p>
                            <div
                                class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
                                <code><span class="text-green-400">/* Add the editflo-angular wrapper to the bundle */</span><br>
<span class="text-purple-400">import</span> <span class="text-orange-400">{ EditorComponent }</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@editflo/editflo-angular'</span>;</code>
                            </div>
                        </div>
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
                    <div
                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                        <i class="fas fa-play text-xs sm:text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">To start the development server, navigate to the
                            <code class="bg-gray-100 px-1 rounded text-xs">editflo-angular-demo</code> directory and
                            run:</p>
                        <div
                            class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                            <code><span class="text-yellow-300">ng serve --open</span></code>
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
            deployment, see: <a href="#" class="text-blue-600 hover:underline">Angular Docs - Building Angular Apps</a>
            or <a href="#" class="text-blue-600 hover:underline">Angular Docs - Deployment</a>.</p>

        <div class="space-y-3 sm:space-y-4">
            <div class="flex items-start">
                <div
                    class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cogs text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Build for Production</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Navigate to the <code
                            class="bg-gray-100 px-1 rounded text-xs">editflo-angular-demo</code> directory and run:</p>
                    <div
                        class="bg-gray-900 text-gray-100 p-3 sm:p-4 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto mt-2 border border-gray-700">
                        <code><span class="text-yellow-300">ng build</span></code>
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
                            class="bg-gray-100 px-1 rounded text-xs">editflo-angular-demo/dist/editflo-angular-demo/browser</code>
                        directory to the root directory of the web server.</p>
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
                    <p class="text-yellow-700 text-xs sm:text-sm mt-1">Additional configuration is required to deploy
                        the application outside the web server root directory, such as <code
                            class="bg-gray-100 px-1 py-0.5 rounded text-xs">http://localhost:<port>/my_angular_application</code>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Angular Modules Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8" id="angular-modules">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Angular Modules</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mb-4">If using Angular Modules instead of standalone components,
            <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">EditorModule</code> is available to import from <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">@editflo/editflo-angular</code>.</p>

        <div
            class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700">
            <div class="flex items-center justify-between mb-3 sm:mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                </div>
                <span class="text-gray-400 text-xs">my.module.ts</span>
            </div>
            <code><span class="text-purple-400">import</span> <span class="text-orange-400">{ NgModule }</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@angular/core'</span>;<br>
<span class="text-purple-400">import</span> <span class="text-orange-400">{ EditorModule }</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@editflo/editflo-angular'</span>;<br><br>

<span class="text-blue-400">@NgModule</span>({<br>
  <span class="text-green-400">/* ... */</span><br>
  <span class="text-blue-400">imports</span>: [<br>
    <span class="text-orange-400">EditorModule</span><br>
  ],<br>
  <span class="text-green-400">/* ... */</span><br>
})<br>
<span class="text-purple-400">export class</span> <span class="text-yellow-300">MyModule</span> {}</code>
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
                    <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo Angular Examples</p>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        For examples of the Editflo integration, see: <a href="#"
                            class="text-blue-600 hover:underline font-medium">the editflo-angular storybook</a>.
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
                                <a href="#" class="text-blue-600 hover:underline ml-1">Angular framework Technical
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
                            <i class="fab fa-angular text-red-500 text-xs"></i>
                        </div>
                        <div class="ml-2 flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm">
                                <span class="font-medium">Angular application:</span>
                                <a href="#" class="text-blue-600 hover:underline ml-1">Angular documentation</a>
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