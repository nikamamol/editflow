<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Integration Options</h1>
        <p class="text-lg text-gray-600">Different ways to integrate Editflo into your application.</p>
    </div>

    <!-- Main Content -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 pb-3 border-b-2 border-blue-500">Integration Methods</h2>
        
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <!-- Cloud Card -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-cloud text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Cloud Deployment</h3>
                <p class="text-gray-700 mb-4">Use Editflo Cloud for the easiest setup and automatic updates.</p>
                <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">Recommended</span>
            </div>

            <!-- Self Hosted Card -->
            <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-server text-green-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Self-Hosted</h3>
                <p class="text-gray-700 mb-4">Download and host Editflo on your own servers for full control.</p>
                <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">Advanced</span>
            </div>

            <!-- Package Manager Card -->
            <div class="bg-purple-50 border border-purple-200 rounded-lg p-6">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-cube text-purple-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Package Managers</h3>
                <p class="text-gray-700 mb-4">Install via NPM, Yarn, or other package managers.</p>
                <span class="inline-block bg-purple-100 text-purple-800 text-sm px-3 py-1 rounded-full">Modern</span>
            </div>
        </div>

        <h3 class="text-xl font-semibold text-gray-800 mb-4">Cloud Integration Example</h3>
        <div class="bg-gray-900 text-gray-100 p-6 rounded-lg mb-6 font-mono text-sm overflow-x-auto">
            <div class="code-comment">&lt;!-- Include from CDN --&gt;</div>
            <div><span class="code-tag">&lt;script</span> <span class="code-function">src</span>=<span class="code-string">"https://cdn.tiny.cloud/1/YOUR-API-KEY/Editflo/6/Editflo.min.js"</span></div>
            <div>  <span class="code-function">referrerpolicy</span>=<span class="code-string">"origin"</span><span class="code-tag">&gt;&lt;/script&gt;</span></div>
            <br>
            <div class="code-comment">&lt;!-- Add textarea --&gt;</div>
            <div><span class="code-tag">&lt;textarea</span> <span class="code-function">id</span>=<span class="code-string">"myeditor"</span><span class="code-tag">&gt;</span>Hello, World!<span class="code-tag">&lt;/textarea&gt;</span></div>
        </div>

        <div class="flex items-center justify-between pt-6 border-t border-gray-200">
            <a href="<?php echo base_url('documentation/getting-started'); ?>" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>Back to Getting Started
            </a>
            <a href="<?php echo base_url('documentation/configuration'); ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors flex items-center">
                Next: Configuration
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</div>