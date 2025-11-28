<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Getting Started with Editflo</h1>
        <p class="text-lg text-gray-600">Learn how to quickly set up and start using Editflo in your projects.</p>
    </div>

    <!-- Main Content -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 pb-3 border-b-2 border-blue-500">Quick Setup</h2>
        <p class="text-gray-700 mb-6">Follow these steps to get Editflo running in your project:</p>

        <!-- Code Block -->
        <div class="bg-gray-900 text-gray-100 p-6 rounded-lg mb-6 font-mono text-sm overflow-x-auto">
            <div class="code-comment">// Include Editflo from CDN</div>
            <div><span class="code-tag">&lt;script</span> <span class="code-function">src</span>=<span class="code-string">"https://cdn.tiny.cloud/1/your-api-key/Editflo/6/Editflo.min.js"</span></div>
            <div>  <span class="code-function">referrerpolicy</span>=<span class="code-string">"origin"</span><span class="code-tag">&gt;&lt;/script&gt;</span></div>
            <br>
            <div class="code-comment">// Initialize Editflo</div>
            <div><span class="code-tag">&lt;script&gt;</span></div>
            <div>  <span class="code-function">Editflo.init</span>({</div>
            <div>    <span class="code-function">selector</span>: <span class="code-string">'#mytextarea'</span>,</div>
            <div>    <span class="code-function">plugins</span>: <span class="code-string">'advlist autolink lists link image charmap print preview anchor'</span>,</div>
            <div>    <span class="code-function">toolbar</span>: <span class="code-string">'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'</span>,</div>
            <div>    <span class="code-function">height</span>: <span class="code-string">300</span></div>
            <div>  });</div>
            <div><span class="code-tag">&lt;/script&gt;</span></div>
        </div>

        <h3 class="text-xl font-semibold text-gray-800 mb-4">Prerequisites</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
            <li>Basic knowledge of HTML and JavaScript</li>
            <li>A text editor or IDE</li>
            <li>Web browser (Chrome, Firefox, Safari, or Edge)</li>
            <li>Internet connection for CDN version</li>
        </ul>

        <div class="flex items-center justify-between pt-6 border-t border-gray-200">
            <a href="<?php echo base_url('documentation'); ?>" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>Back to Overview
            </a>
            <a href="<?php echo base_url('documentation/integration'); ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors flex items-center">
                Next: Integration Options
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</div>