</head>

<body class="bg-gray-100 text-gray-800 ">
    <div class="flex min-h-screen">
        <div>
            <!-- Getting Started -->
            <div class="bg-white rounded-lg shadow-sm border border-border-light p-6">
                <h2 class="text-2xl font-semibold text-text-dark mb-4 pb-2 border-b-2 border-primary">Getting Started
                    with Editflo</h2>
                <p class="mb-4 text-gray-700">
                    Editflo is a rich text editor designed for web applications. To install Editflo, include the
                    required script and initialize the editor with a minimal configuration. Upon registration, an API
                    key is provided along with a corresponding code snippet for integration.
                </p>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                    <p class="text-blue-800 mb-2">
                        It only takes 2 minutes to create your free Tiny account and get the API key:
                    </p>
                    <div class="flex items-center gap-2 flex-wrap">
                        <button type="button"
                            class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
                            <i class="fa-brands fa-google mr-2"></i>
                            Sign in with Google
                        </button>

                        <button type="button"
                            class="text-white bg-[#0f1419] hover:bg-[#0f1419]/90 focus:ring-4 focus:outline-none focus:ring-[#0f1419]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:hover:bg-[#24292F] dark:focus:ring-[#24292F]/55">
                            <i class="fa-brands fa-github mr-2"></i>
                            Sign in with Github
                        </button>


                    </div>
                </div>
            </div>
            <!-- Content Area -->
            <div class="">
                <!-- Header -->
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-text-dark mb-4 pb-2 border-b-2 border-primary mt-5">Editflo 8
                        Documentation</h2>
                    <p class="text-lg text-text-light max-w-3xl">
                        Editflo is a rich-text editor that allows users to create formatted content within a
                        user-friendly interface.
                    </p>
                </div>



                <div class="bg-white rounded-lg shadow-sm border border-border-light overflow-hidden mb-8">
                    <!-- Tabs -->
                    <div class="border-b border-border-light">
                        <div class="flex">
                            <button class="tab-button py-3 px-6 border-b-2 border-primary text-primary font-medium"
                                data-tab="editflo">
                                Editflo
                            </button>
                            <button
                                class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                                data-tab="html">
                                HTML
                            </button>
                            <button
                                class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                                data-tab="js">
                                JS
                            </button>
                        </div>
                    </div>

                    <!-- Tab Content -->
                    <div class="p-6">
                        <!-- Editflo Tab Content - Image -->
                        <div id="editflo-tab" class="tab-content">
                            <img src="<?= base_url('assets/image.png'); ?>" width="full" height="200" alt="">
                        </div>

                        <!-- HTML Tab -->
                        <div id="html-tab" class="tab-content hidden">
                            <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                                <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
                                <span class="text-blue-400">&lt;html&gt;</span><br>
                                <span class="text-blue-400">&lt;head&gt;</span><br>
                                &nbsp;&nbsp;<span class="text-blue-400">&lt;title&gt;</span>My Document<span
                                    class="text-blue-400">&lt;/title&gt;</span><br>
                                <span class="text-blue-400">&lt;/head&gt;</span><br>
                                <span class="text-blue-400">&lt;body&gt;</span><br>
                                &nbsp;&nbsp;<span class="text-blue-400">&lt;p&gt;</span>Hello, <span
                                    class="text-blue-400">&lt;strong&gt;</span>World!<span
                                    class="text-blue-400">&lt;/strong&gt;</span><span
                                    class="text-blue-400">&lt;/p&gt;</span><br>
                                <span class="text-blue-400">&lt;/body&gt;</span><br>
                                <span class="text-blue-400">&lt;/html&gt;</span>
                            </div>
                        </div>

                        <!-- JS Tab -->
                        <div id="js-tab" class="tab-content hidden">
                            <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                                <span class="text-green-400">// Initialize Editflo</span><br>
                                <span class="text-purple-400">Editflo</span>.<span
                                    class="text-yellow-400">init</span>({<br>
                                &nbsp;&nbsp;<span class="text-blue-400">selector</span>: <span
                                    class="text-green-400">'#myTextarea'</span>,<br>
                                &nbsp;&nbsp;<span class="text-blue-400">plugins</span>: <span
                                    class="text-green-400">'advlist
                                    autolink lists link image charmap print preview anchor'</span>,<br>
                                &nbsp;&nbsp;<span class="text-blue-400">toolbar</span>: <span
                                    class="text-green-400">'undo redo |
                                    styleselect | bold italic | alignleft aligncenter alignright
                                    alignjustify'</span>,<br>
                                &nbsp;&nbsp;<span class="text-blue-400">height</span>: <span
                                    class="text-orange-400">300</span><br>
                                });
                            </div>
                        </div>
                    </div>
                    <!-- Update API Key Section -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Update the "no-api-key" placeholder with
                            your API key
                        </h2>
                        <p class="text-gray-700 mb-6">
                            To remove the notice:
                        </p>

                        <!-- Warning Box -->
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-yellow-700 font-medium">Warning</p>
                                    <p class="text-yellow-600 mt-1">This domain is not registered with Editflo Cloud.
                                        Please see the
                                        quick start guide or create an account.</p>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray-700 mb-4">
                            Update the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">[no-api-key]</code>
                            placeholder in the
                            source script (<code
                                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;script src...&gt;</code>) with
                            your Editflo Cloud API key, which is created when signing up to the Editflo Cloud.
                        </p>

                        <p class="text-gray-700 mb-6">
                            Signing up for a Editflo Cloud API key will also provide a trial of the Premium Plugins.
                        </p>
                    </div>

                    <!-- Save Content Section -->
                    <div class="bg-white rounded-lg  p-6 mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Save the content from the editor</h2>
                        <p class="text-gray-700 mb-4">
                            To retrieve content from the editor, either process the content with a form handler or use
                            the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">getContent</code> API.
                        </p>
                        <p class="text-gray-700">
                            If you use a form handler, once the <code
                                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;form&gt;</code> is submitted,
                            Editflo 8 will
                            <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">POST</code> the content in the same
                            way as a
                            normal HTML <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>,
                            including the
                            HTML elements and inline CSS of the editor content. The hosts form handler can process the
                            submitted
                            content in the same way as content from a regular <code
                                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>.
                        </p>
                    </div>
                    <!-- Next Steps Section -->
                    <div class="bg-white border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Next Steps</h2>
                        <p class="text-gray-700 mb-4">For information on:</p>

                        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                            <li>Customizing Editflo, see: <a href="#"
                                    class="text-blue-600 hover:text-blue-800 underline">Basic
                                    Setup</a>.</li>
                            <li>The three editor modes, see:
                                <ul class="list-circle list-inside ml-6 mt-2 space-y-1">
                                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo classic
                                            editing
                                            mode</a>.</li>
                                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo inline
                                            editing
                                            mode</a>.</li>
                                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo
                                            distraction-free
                                            editing mode</a>.</li>
                                </ul>
                            </li>
                            <li>Adding Editflo plugins, see: <a href="#"
                                    class="text-blue-600 hover:text-blue-800 underline">Work
                                    with plugins to extend Editflo</a>.</li>
                            <li>Localizing the Editflo editor, see: <a href="#"
                                    class="text-blue-600 hover:text-blue-800 underline">Localize Editflo</a>.</li>
                            <li>For information on the CSS required to render some Editflo elements outside of the
                                editor, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">CSS for
                                    rendering Editflo content
                                    outside the editor</a>.</li>
                        </ul>
                        <!-- Code Block for API Key Update -->
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-blue-400">&lt;script </span>
                            <span class="text-green-400">src=</span>
                            <span class="text-yellow-300">"https://cdn.Editflo.cloud/1/</span>
                            <span class="text-red-400">YOUR-API-KEY-HERE</span>
                            <span class="text-yellow-300">/Editflomce/8/Editflomce.min.js"</span>
                            <span class="text-green-400"> referrerpolicy=</span>
                            <span class="text-yellow-300">"origin"</span>
                            <span class="text-green-400"> crossorigin=</span>
                            <span class="text-yellow-300">"anonymous"</span>
                            <span class="text-blue-400">&gt;&lt;/script&gt;</span>
                        </div>
                    </div>
                </div>
            
                <!-- Overview Section -->
                <div class="bg-white rounded-lg shadow-sm border border-border-light p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-text-dark mb-4 pb-2 border-b-2 border-primary">Overview</h2>
                    <p class="mb-4 text-gray-700">
                        Editflo generates HTML5 output and supports various content elements including lists, tables,
                        and other formatting options. The editor's functionality can be extended through plugins and
                        customizations, or restricted to meet specific requirements. The user interface can be
                        customized to integrate seamlessly with applications or webpages.
                    </p>
                </div>


                <!-- Integration Options -->
                <div class="bg-white rounded-lg shadow-sm border border-border-light p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-text-dark mb-4 pb-2 border-b-2 border-primary">Integration
                        Options</h2>
                    <p class="mb-4 text-gray-700">
                        Editflo integrates with frameworks and Content Management Systems (CMS) through multiple
                        deployment methods:
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                        <div class=" border-r rounded-lg p-4 border-gray-500">
                            <h3 class="font-semibold text-lg mb-2">Using the Tiny Cloud</h3>
                            <p class="text-gray-600 text-sm">
                                The fastest way to get started with Editflo. Load from the Tiny Cloud CDN for automatic
                                updates to the latest version.
                            </p>
                        </div>
                        <div class="border-r rounded-lg p-4 border-gray-500">
                            <h3 class="font-semibold text-lg mb-2">Using a package manager</h3>
                            <p class="text-gray-600 text-sm">
                                Install Editflo locally using NPM, Yarn, or other package managers for self-hosted
                                solutions.
                            </p>
                        </div>
                        <div class=" border-r rounded-lg p-4 border-gray-500">
                            <h3 class="font-semibold text-lg mb-2">Direct download</h3>
                            <p class="text-gray-600 text-sm">
                                Download and install Editflo from a .zip archive for traditional web deployments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <script>
                    // Tab functionality
                    document.addEventListener('DOMContentLoaded', function () {
                        const tabButtons = document.querySelectorAll('.tab-button');
                        const tabContents = document.querySelectorAll('.tab-content');

                        tabButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                const tabId = button.getAttribute('data-tab');

                                // Remove active class from all buttons
                                tabButtons.forEach(btn => {
                                    btn.classList.remove('border-primary', 'text-primary');
                                    btn.classList.add('border-transparent', 'text-text-light');
                                });

                                // Add active class to clicked button
                                button.classList.add('border-primary', 'text-primary');
                                button.classList.remove('border-transparent', 'text-text-light');

                                // Hide all tab contents
                                tabContents.forEach(content => {
                                    content.classList.add('hidden');
                                });

                                // Show selected tab content
                                document.getElementById(`${tabId}-tab`).classList.remove('hidden');
                            });
                        });
                    });
                </script>