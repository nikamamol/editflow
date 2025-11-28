<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editflo Documentation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sidebar': '#2d3748',
                        'sidebar-dark': '#1a202c',
                        'sidebar-border': '#4a5568',
                        'sidebar-text': '#a0aec0',
                        'primary': '#4299e1',
                        'primary-dark': '#3182ce',
                        'light-bg': '#f8f9fa',
                        'content-bg': '#ffffff',
                        'border-light': '#e2e8f0',
                        'text-light': '#718096',
                        'text-dark': '#2d3748',
                        'code-bg': '#1a202c'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-sidebar text-white fixed h-full overflow-y-auto border-r border-sidebar-border">
            <div class="p-5 border-b border-sidebar-border bg-sidebar-dark">
                <h1 class="text-lg font-semibold text-primary">Editflo Documentation</h1>
                <div class="text-xs text-sidebar-text mt-1">Editflo 8 Documentation</div>
            </div>

            <div class="py-4 border-b border-sidebar-border">
                <h3 class="px-5 pb-2 text-xs font-semibold text-sidebar-text uppercase tracking-wider">Getting Started</h3>
                <ul class="mt-2">
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-book mr-2 w-4 text-center"></i> Overview
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-rocket mr-2 w-4 text-center"></i> Get Started
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-tools mr-2 w-4 text-center"></i> Integration
                        </a>
                    </li>
                </ul>
            </div>

            <div class="py-4 border-b border-sidebar-border">
                <h3 class="px-5 pb-2 text-xs font-semibold text-sidebar-text uppercase tracking-wider">Configuration</h3>
                <ul class="mt-2">
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-cog mr-2 w-4 text-center"></i> Configuration
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-book mr-2 w-4 text-center"></i> API Reference
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-lightbulb mr-2 w-4 text-center"></i> Examples
                        </a>
                    </li>
                </ul>
            </div>

            <div class="py-4">
                <h3 class="px-5 pb-2 text-xs font-semibold text-sidebar-text uppercase tracking-wider">Resources</h3>
                <ul class="mt-2">
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-map mr-2 w-4 text-center"></i> Editflo Roadmap
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-bug mr-2 w-4 text-center"></i> Report Issues
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-5 py-2 text-sidebar-text hover:bg-sidebar-border hover:text-white transition-colors border-l-3 border-transparent">
                            <i class="fas fa-comments mr-2 w-4 text-center"></i> Community
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="ml-64 flex-1">
            <!-- Top Bar -->
            <div class="bg-white border-b border-border-light px-8 py-4 flex justify-between items-center">
                <div class="text-sm text-text-light">
                    <a href="#" class="text-primary">Documentation</a>
                </div>
            </div>

            <!-- Content Area -->
            <div class="p-8 max-w-5xl">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-text-dark mb-2">TinyMCE 8 Documentation</h1>
                    <p class="text-lg text-text-light max-w-3xl">
                        TinyMCE is a rich-text editor that allows users to create formatted content within a user-friendly interface.
                    </p>
                </div>

                <!-- Sign Up Section -->
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                    <p class="text-blue-800">
                        It only takes 2 minutes to create your free Tiny account and get the API key:
                    </p>
                    <div class="mt-2 flex items-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md font-medium transition-colors">
                            Sign up with email
                        </button>
                        <button class="ml-2 border border-gray-300 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-colors">
                            G
                        </button>
                        <button class="ml-2 border border-gray-300 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-colors">
                            O
                        </button>
                    </div>
                </div>

                <!-- Editor Table -->
                <div class="bg-white rounded-lg shadow-sm border border-border-light overflow-hidden mb-8">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-4 py-3 text-left font-medium text-text-dark">TinyMCE</th>
                                <th class="px-4 py-3 text-left font-medium text-text-dark">HTML</th>
                                <th class="px-4 py-3 text-left font-medium text-text-dark">JS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-border-light">
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-2">
                                        <span>File</span>
                                        <span>Edit</span>
                                        <span>View</span>
                                        <span>Insert</span>
                                        <span>Format</span>
                                        <span>Tools</span>
                                        <span>Table</span>
                                        <span>Help</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <code class="bg-gray-100 px-2 py-1 rounded text-sm">&lt;textarea&gt;</code>
                                </td>
                                <td class="px-4 py-3">
                                    <code class="bg-gray-100 px-2 py-1 rounded text-sm">tinyMCE.init()</code>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="px-4 py-3">
                                    <div class="border border-gray-300 rounded p-4 min-h-[100px]">
                                        <p>Hello, <strong>World!</strong></p>
                                        <p class="mt-2 text-sm text-gray-500">[Login: strong]</p>
                                        <p class="mt-1 text-sm text-gray-500">Press Alt+0 for help</p>
                                        <p class="mt-1 text-sm text-gray-500">Built with <strong>Q</strong> tinyMCE.</p>
                                    </div>
                                    <div class="mt-4">
                                        <button class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                            View HTML Output
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="border-t border-border-light my-8"></div>

                <!-- Overview Section -->
                <div class="bg-white rounded-lg shadow-sm border border-border-light p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-text-dark mb-4 pb-2 border-b-2 border-primary">Overview</h2>
                    <p class="mb-4 text-gray-700">
                        TinyMCE generates HTML5 output and supports various content elements including lists, tables, and other formatting options. The editor's functionality can be extended through plugins and customizations, or restricted to meet specific requirements. The user interface can be customized to integrate seamlessly with applications or webpages.
                    </p>
                </div>

                <!-- Integration Options -->
                <div class="bg-white rounded-lg shadow-sm border border-border-light p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-text-dark mb-4 pb-2 border-b-2 border-primary">Integration Options</h2>
                    <p class="mb-4 text-gray-700">
                        TinyMCE integrates with frameworks and Content Management Systems (CMS) through multiple deployment methods:
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                        <div class="border border-border-light rounded-lg p-4">
                            <h3 class="font-semibold text-lg mb-2">Using the Tiny Cloud</h3>
                            <p class="text-gray-600 text-sm">
                                The fastest way to get started with TinyMCE. Load from the Tiny Cloud CDN for automatic updates to the latest version.
                            </p>
                        </div>
                        <div class="border border-border-light rounded-lg p-4">
                            <h3 class="font-semibold text-lg mb-2">Using a package manager</h3>
                            <p class="text-gray-600 text-sm">
                                Install TinyMCE locally using NPM, Yarn, or other package managers for self-hosted solutions.
                            </p>
                        </div>
                        <div class="border border-border-light rounded-lg p-4">
                            <h3 class="font-semibold text-lg mb-2">Direct download</h3>
                            <p class="text-gray-600 text-sm">
                                Download and install TinyMCE from a .zip archive for traditional web deployments.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Getting Started -->
                <div class="bg-white rounded-lg shadow-sm border border-border-light p-6">
                    <h2 class="text-2xl font-semibold text-text-dark mb-4 pb-2 border-b-2 border-primary">Getting Started with TinyMCE</h2>
                    <p class="mb-4 text-gray-700">
                        TinyMCE is a rich text editor designed for web applications. To install TinyMCE, include the required script and initialize the editor with a minimal configuration. Upon registration, an API key is provided along with a corresponding code snippet for integration.
                    </p>

                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                        <p class="text-blue-800">
                            It only takes 2 minutes to create your free Tiny account and get the API key:
                        </p>
                        <div class="mt-2 flex items-center">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md font-medium transition-colors">
                                Sign up with email
                            </button>
                            <button class="ml-2 border border-gray-300 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-colors">
                                G
                            </button>
                            <button class="ml-2 border border-gray-300 hover:bg-gray-100 px-4 py-2 rounded-md font-medium transition-colors">
                                O
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>