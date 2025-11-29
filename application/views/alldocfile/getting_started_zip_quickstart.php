    
<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Quick start: Editflo from .zip</h1>
        <p class="text-lg text-gray-600">Install Editflo using a .zip package</p>
    </div>

    <!-- Introduction Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <p class="text-gray-700 mb-6">
            Editflo 8 is a powerful and flexible rich text editor that can be embedded in web applications. This quick
            start covers how to add a Editflo editor to a web page using a Editflo .zip package.
        </p>
    </div>

    <!-- Deploy from ZIP Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Deploy Editflo from a .zip archive</h2>
        <ol class="list-decimal list-inside space-y-3 text-gray-700">
            <li>
                <strong>Download Editflo:</strong>
                <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                    <li>For Self-hosted Enterprise customers, visit <a href="#"
                            class="text-blue-600 hover:text-blue-800 underline">Editflo - Self-hosted releases</a></li>
                    <li>For the self-hosted Editflo community edition, visit <a href="#"
                            class="text-blue-600 hover:text-blue-800 underline">Editflo Account - Downloads</a></li>
                </ul>
            </li>
            <li>
                <strong>Unzip the archive</strong> into a public folder of your webserver, such as:
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mt-3">
                    <span class="text-green-400">unzip</span> <span class="text-yellow-300">editflo_latest.zip</span>
                    <span class="text-green-400">-d</span> <span
                        class="text-yellow-300">/path/to/webserver/public/</span>
                </div>
            </li>
            <li>
                <strong>Main Editflo script location:</strong>
                <code
                    class="bg-gray-100 px-3 py-1 rounded text-sm font-mono">/path/to/webserver/public/editflo/js/editflo/editflo.min.js</code>
            </li>
        </ol>
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
            <span class="text-yellow-300">"/path/to/editflo.min.js"</span>
            <span class="text-green-400"> referrerpolicy=</span>
            <span class="text-yellow-300">"origin"</span>
            <span class="text-green-400"> crossorigin=</span>
            <span class="text-yellow-300">"anonymous"</span>
            <span class="text-blue-400">&gt;&lt;/script&gt;</span>
        </div>
    </div>

    <!-- Initialize Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
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
            &nbsp;&nbsp;<span class="text-blue-400">&lt;meta charset="UTF-8"&gt;</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">&lt;meta name="viewport" content="width=device-width,
                initial-scale=1"&gt;</span><br>
            <br>
            &nbsp;&nbsp;<span class="text-blue-400">&lt;script </span><span class="text-green-400">src=</span><span
                class="text-yellow-300">"/path/to/editflo.min.js"</span><span class="text-green-400">
                referrerpolicy=</span><span class="text-yellow-300">"origin"</span><span class="text-green-400">
                crossorigin=</span><span class="text-yellow-300">"anonymous"</span><span
                class="text-blue-400">&gt;&lt;/script&gt;</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">&lt;script&gt;</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">editflo</span><span
                class="text-gray-300">.</span><span class="text-yellow-300">init</span><span
                class="text-gray-300">({</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-gray-300">:
            </span><span class="text-green-400">'#mytextarea'</span><span class="text-gray-300">,</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">license_key</span><span
                class="text-gray-300">: </span><span class="text-green-400">'gpl'</span> <span class="text-gray-300">//
                gpl for open source, T8LK:... for commercial</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-gray-300">});</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">&lt;/script&gt;</span><br>
            <span class="text-blue-400">&lt;/head&gt;</span><br>
            <br>
            <span class="text-blue-400">&lt;body&gt;</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">&lt;h1&gt;</span><span class="text-gray-300">Editflo Quick Start
                Guide</span><span class="text-blue-400">&lt;/h1&gt;</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">&lt;form method="post"&gt;</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">&lt;textarea </span><span
                class="text-green-400">id=</span><span class="text-yellow-300">"mytextarea"</span><span
                class="text-blue-400">&gt;</span><span class="text-gray-300">Hello, World!</span><span
                class="text-blue-400">&lt;/textarea&gt;</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">&lt;/form&gt;</span><br>
            <span class="text-blue-400">&lt;/body&gt;</span><br>
            <span class="text-blue-400">&lt;/html&gt;</span>
        </div>
    </div>

    <p class="p-4 text-gray-700">Adding this content to an HTML file and opening it in a web browser will load a Editflo
        editor.</p>

    <!-- Editor Preview Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden mb-8">
        <!-- Tabs -->
        <div class="border-b border-gray-200">
            <div class="flex">
                <button class="tab-button py-3 px-6 border-b-2 border-blue-600 text-blue-600 font-medium"
                    data-tab="editflo">
                    Editflo
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium"
                    data-tab="html">
                    HTML
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium"
                    data-tab="js">
                    JS
                </button>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="p-6">
            <!-- Editflo Tab (Main Preview) -->
            <div id="editflo-tab" class="tab-content">
                <img src="<?= base_url('assets/image.png'); ?>" class="w-full max-w-4xl mx-auto rounded-lg shadow-sm"
                    alt="Editflo Editor Preview">
            </div>
            <!-- HTML Tab -->
            <div id="html-tab" class="tab-content hidden">
                <div class="bg-gray-900 text-gray-100 p-6 rounded-lg font-mono text-sm">
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
                <div class="bg-gray-900 text-gray-100 p-6 rounded-lg font-mono text-sm">
                    <span class="text-green-400">// Initialize Editflo</span><br>
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span
                        class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span
                        class="text-green-400">'#mytextarea'</span><span class="text-gray-300">,</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">license_key</span><span class="text-gray-300">: </span><span
                        class="text-green-400">'gpl'</span><span class="text-gray-300">,</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                        class="text-orange-400">300</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Save Content Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Save the content from the editor</h2>
        <p class="text-gray-700 mb-4">
            To retrieve content from the editor, either process the content with a form handler or use the <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">getContent</code> API.
        </p>
        <p class="text-gray-700">
            If you use a form handler, once the <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;form&gt;</code> is submitted, Editflo 8 will <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">POST</code> the content in the same way as a normal HTML
            <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>, including the HTML elements
            and inline CSS of the editor content. The host's form handler can process the submitted content in the same
            way as content from a regular <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea&gt;</code>.
        </p>
    </div>

    <!-- Next Steps Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Next Steps</h2>
        <p class="text-gray-700 mb-4">For information on:</p>
        <ul class="list-disc list-inside text-gray-700 space-y-3 mb-6">
            <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Setting the license</a></li>
            <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Customizing Editflo</a>, see: <a
                    href="#" class="text-blue-600 hover:text-blue-800 underline">Basic Setup</a></li>
            <li>The three editor modes, see:
                <ul class="list-circle list-inside ml-6 mt-2 space-y-1">
                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo classic editing mode</a>
                    </li>
                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo inline editing mode</a>
                    </li>
                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Editflo distraction-free editing
                            mode</a></li>
                </ul>
            </li>
            <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Adding Editflo plugins</a>, see: <a
                    href="#" class="text-blue-600 hover:text-blue-800 underline">Work with plugins to extend Editflo</a>
            </li>
            <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Localizing the Editflo editor</a>, see:
                <a href="#" class="text-blue-600 hover:text-blue-800 underline">Localize Editflo</a></li>
            <li>For information on the CSS required to render some Editflo elements outside of the editor, see: <a
                    href="#" class="text-blue-600 hover:text-blue-800 underline">CSS for rendering Editflo content
                    outside the editor</a></li>
        </ul>
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
                    btn.classList.remove('border-blue-600', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700');
                });

                // Add active class to clicked button
                button.classList.add('border-blue-600', 'text-blue-600');
                button.classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected tab content
                const targetTab = document.getElementById(`${tabId}-tab`);
                if (targetTab) {
                    targetTab.classList.remove('hidden');
                }
            });
        });

        // Set default active tab
        const defaultTab = document.querySelector('.tab-button[data-tab="editflo"]');
        if (defaultTab) {
            defaultTab.click();
        }
    });
</script>