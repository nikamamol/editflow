<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Quick start: Editflo with Editflo Cloud</h1>
        <p class="text-lg text-gray-600">Install Editflo using the Editflo Cloud</p>
    </div>
    <!-- Introduction Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <p class="text-gray-700 mb-6">
            Editflo 8 is a powerful and flexible rich text editor that can be embedded in web applications. This quick
            start covers how to add a Editflo editor to a web page using the Editflo Cloud.
        </p>

        <!-- Sign Up Section -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
            <p class="text-blue-800 mb-2">
                It only takes 2 minutes to create your free Editflo account and get the API key:
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

    <!-- Include Script Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Include the Editflo script</h2>
        <p class="text-gray-700 mb-4">
            Include the following line of code in the <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;head&gt;</code> of an HTML page:
        </p>

        <!-- Code Block -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
            <span class="text-blue-400">&lt;script </span>
            <span class="text-green-400">src=</span>
            <span class="text-yellow-300">"https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js"</span>
            <span class="text-green-400"> referrerpolicy=</span>
            <span class="text-yellow-300">"origin"</span>
            <span class="text-green-400"> crossorigin=</span>
            <span class="text-yellow-300">"anonymous"</span>
            <span class="text-blue-400">&gt;&lt;/script&gt;</span>
        </div>
    </div>

    <!-- Initialize Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Initialize Editflo as part of a web form</h2>
        <p class="text-gray-700 mb-4">
            Initialize Editflo 8 on any element (or elements) on the web page by passing an object containing a <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value to <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">editflo.init()</code>. The <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value can be any valid CSS selector.
        </p>

        <p class="text-gray-700 mb-4">
            For example, to replace <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea id="mytextarea"&gt;</code> with a Editflo 8
            editor instance, pass the selector <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">'#mytextarea'</code> to <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">editflo.init()</code>:
        </p>

        <!-- Complete HTML Code Block -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
            <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
            <span class="text-blue-400">&lt;html lang="en"&gt;</span><br>
            <span class="text-blue-400">&lt;head&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;meta charset="UTF-8"&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;meta name="viewport"
                content="width=device-width, initial-scale=1"&gt;</span><br>
            <br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;script </span><span
                class="text-green-400">src=</span><span
                class="text-yellow-300">"https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js"</span><span
                class="text-green-400"> referrerpolicy=</span><span class="text-yellow-300">"origin"</span><span
                class="text-green-400"> crossorigin=</span><span class="text-yellow-300">"anonymous"</span><span
                class="text-blue-400">&gt;&lt;/script&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;script&gt;</span><br>
            <span class="text-gray-300 ml-8"></span><span class="text-purple-400">Editflomce</span><span
                class="text-gray-300">.</span><span class="text-yellow-300">init</span><span
                class="text-gray-300">({</span><br>
            <span class="text-gray-300 ml-12"></span><span class="text-blue-400">selector</span><span
                class="text-gray-300">: </span><span class="text-green-400">'#mytextarea'</span><br>
            <span class="text-gray-300 ml-8"></span><span class="text-gray-300">});</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;/script&gt;</span><br>
            <span class="text-blue-400">&lt;/head&gt;</span><br>
            <br>
            <span class="text-blue-400">&lt;body&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;h1&gt;</span><span
                class="text-gray-300">EditfloMCE Quick Start Guide</span><span
                class="text-blue-400">&lt;/h1&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;form method="post"&gt;</span><br>
            <span class="text-gray-300 ml-8"></span><span class="text-blue-400">&lt;textarea </span><span
                class="text-green-400">id=</span><span class="text-yellow-300">"mytextarea"</span><span
                class="text-blue-400">&gt;</span><span class="text-gray-300">Hello, World!</span><span
                class="text-blue-400">&lt;/textarea&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;/form&gt;</span><br>
            <span class="text-blue-400">&lt;/body&gt;</span><br>
            <span class="text-blue-400">&lt;/html&gt;</span>
        </div>
    </div>

    <p class="p-4">Adding this content to an HTML file and opening it in a web browser will load a EditfloMCE editor,
        such as:</p>
    <!-- Editor Table with Tabs -->
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
            <img src="<?= base_url('assets/image.png'); ?>" width="full" height="200" alt="">


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
                        class="text-blue-400">&lt;/strong&gt;</span><span class="text-blue-400">&lt;/p&gt;</span><br>
                    <span class="text-blue-400">&lt;/body&gt;</span><br>
                    <span class="text-blue-400">&lt;/html&gt;</span>
                </div>
            </div>

            <!-- JS Tab -->
            <div id="js-tab" class="tab-content hidden">
                <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                    <span class="text-green-400">// Initialize Editflo</span><br>
                    <span class="text-purple-400">Editflo</span>.<span class="text-yellow-400">init</span>({<br>
                    &nbsp;&nbsp;<span class="text-blue-400">selector</span>: <span
                        class="text-green-400">'#myTextarea'</span>,<br>
                    &nbsp;&nbsp;<span class="text-blue-400">plugins</span>: <span class="text-green-400">'advlist
                        autolink lists link image charmap print preview anchor'</span>,<br>
                    &nbsp;&nbsp;<span class="text-blue-400">toolbar</span>: <span class="text-green-400">'undo redo |
                        styleselect | bold italic | alignleft aligncenter alignright alignjustify'</span>,<br>
                    &nbsp;&nbsp;<span class="text-blue-400">height</span>: <span class="text-orange-400">300</span><br>
                    });
                </div>
            </div>
        </div>
        <!-- Update API Key Section -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Update the "no-api-key" placeholder with your API key
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
                        <p class="text-yellow-600 mt-1">This domain is not registered with Editflo Cloud. Please see the
                            quick start guide or create an account.</p>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 mb-4">
                Update the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">[no-api-key]</code> placeholder in the
                source script (<code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;script src...&gt;</code>) with
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
                To retrieve content from the editor, either process the content with a form handler or use the <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">getContent</code> API.
            </p>
            <p class="text-gray-700">
                If you use a form handler, once the <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;form&gt;</code> is submitted, Editflo 8 will
                <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">POST</code> the content in the same way as a
                normal HTML <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>, including the
                HTML elements and inline CSS of the editor content. The hosts form handler can process the submitted
                content in the same way as content from a regular <code
                    class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>.
            </p>
        </div>
        <!-- Next Steps Section -->
        <div class="bg-white border border-gray-200 p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Next Steps</h2>
            <p class="text-gray-700 mb-4">For information on:</p>

            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                <li>Customizing Editflo, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">Basic
                        Setup</a>.</li>
                <li>The three editor modes, see:
                    <ul class="list-circle list-inside ml-6 mt-2 space-y-1">
                        <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo classic editing
                                mode</a>.</li>
                        <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo inline editing
                                mode</a>.</li>
                        <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo distraction-free
                                editing mode</a>.</li>
                    </ul>
                </li>
                <li>Adding Editflo plugins, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">Work
                        with plugins to extend Editflo</a>.</li>
                <li>Localizing the Editflo editor, see: <a href="#"
                        class="text-blue-600 hover:text-blue-800 underline">Localize Editflo</a>.</li>
                <li>For information on the CSS required to render some Editflo elements outside of the editor, see: <a
                        href="#" class="text-blue-600 hover:text-blue-800 underline">CSS for rendering Editflo content
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