<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

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

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Smooth Transitions */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }

        /* Mobile First Approach */
        @media (max-width: 768px) {
            .mobile-hidden {
                display: none;
            }

            .mobile-full {
                width: 100%;
                margin-left: 0;
                margin-right: 0;
            }
        }

        /* Right Sidebar Responsive */
        @media (max-width: 1280px) {
            .right-sidebar {
                display: none;
            }

            .main-content-full {
                margin-right: 0;
            }
        }

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Print styles */
        @media print {

            .right-sidebar,
            #mobileTOC,
            .lg\:hidden {
                display: none !important;
            }
        }

        /* Promotional Card Styles */
        .promo-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }

        .promo-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            transform: rotate(30deg);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Mobile Header -->
    <div class="lg:hidden bg-gray-800 text-white p-4 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center">
            <button class="text-white mr-4" id="mobileMenuBtn">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h1 class="text-lg font-semibold text-blue-400">Editflo</h1>
        </div>
        <div class="text-sm text-gray-300">
            Documentation
        </div>
    </div>

    <div class="flex min-h-screen">
        <!-- Left Sidebar - Hidden on Mobile -->
        <nav class="w-80 bg-gray-800 text-white h-screen fixed left-0 overflow-y-auto z-30 border-r border-gray-700 sidebar-transition lg:translate-x-0 -translate-x-full"
            id="leftSidebar">
            <div class="p-6 border-b border-gray-700 bg-gray-900 lg:block hidden">
                <h1 class="text-lg font-semibold text-blue-400">Editflo</h1>
            </div>

            <!-- Close Button for Mobile -->
            <div class="p-4 border-b border-gray-700 lg:hidden flex justify-between items-center">
                <h1 class="text-lg font-semibold text-blue-400">Editflo Documentation</h1>
                <button class="text-gray-400 hover:text-white" onclick="closeMobileSidebar()">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <div class="py-4 flex flex-col h-[calc(100vh-120px)]">
                <div class="flex-1 overflow-y-auto">
                    <!-- Getting Started Dropdown -->
                    <div class="mb-2">
                        <button
                            class="flex items-center justify-between w-full px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'getting-started' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                            onclick="toggleDropdown('getting-started-dropdown')">
                            <div class="flex items-center">
                                <i class="fas fa-rocket mr-3 w-4 text-center"></i>
                                <span class="font-medium">Getting started</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_page == 'getting-started' ? 'rotate-180' : ''; ?>"
                                id="getting-started-arrow"></i>
                        </button>

                        <div class="mt-1 <?php echo $active_page == 'getting-started' ? 'block' : 'hidden'; ?>"
                            id="getting-started-dropdown">
                            <!-- Introduction -->
                            <a href="<?php echo base_url('documentation/getting-started/introduction'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'introduction' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Introduction to Editflo
                            </a>

                            <!-- Installation Dropdown -->
                            <div class="mt-1">
                                <button
                                    class="flex items-center justify-between w-full pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'installation' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                    onclick="toggleDropdown('installation-dropdown')">
                                    <span>Installation</span>
                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo $active_section == 'installation' ? 'rotate-180' : ''; ?>"
                                        id="installation-arrow"></i>
                                </button>

                                <div class="mt-1 <?php echo $active_section == 'installation' ? 'block' : 'hidden'; ?>"
                                    id="installation-dropdown">

                                    <!-- Cloud Installation Dropdown -->
                                    <div class="mt-1">
                                        <button
                                            class="flex items-center justify-between w-full pl-16 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="toggleDropdown('cloud-dropdown')">
                                            <span>Cloud</span>
                                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'cloud') === 0 ? 'rotate-180' : ''; ?>"
                                                id="cloud-arrow"></i>
                                        </button>

                                        <div class="mt-1 <?php echo strpos($active_subsection, 'cloud') === 0 ? 'block' : 'hidden'; ?>"
                                            id="cloud-dropdown">
                                            <a href="<?php echo base_url('documentation/getting_started_cloud'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-quickstart' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                • Cloud Start
                                            </a>

                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/quick-start'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-quickstart' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                • Quick start guide
                                            </a>

                                            <!-- Supported Integrations -->
                                            <div class="pl-20 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Supported Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/react'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-react' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ React
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/angular'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-angular' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Angular
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/vue'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-vue' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Vue.js
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/blazor'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-blazor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Blazor
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/svelte'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-svelte' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Svelte
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/web-component'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-webcomponent' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Web Component
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/jquery'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-jquery' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ jQuery
                                            </a>

                                            <!-- Backend Integrations -->
                                            <div class="pl-20 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Backend Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/django'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-django' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Django
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/laravel'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-laravel' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Laravel
                                            </a>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/ruby-on-rails'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-rails' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Ruby on Rails
                                            </a>

                                            <!-- Other Integrations -->
                                            <div class="pl-20 pr-6 py-2 text-sm text-gray-400 font-medium">
                                                Other Integrations
                                            </div>
                                            <a href="<?php echo base_url('documentation/getting-started/installation/cloud/bootstrap'); ?>"
                                                class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'cloud-bootstrap' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                ◦ Bootstrap
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Self-hosted Installation Dropdown -->
                                    <div class="mt-1">
                                        <button
                                            class="flex items-center justify-between w-full pl-16 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                            onclick="toggleDropdown('self-hosted-dropdown')">
                                            <span>Self-hosted</span>
                                            <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted') === 0 ? 'rotate-180' : ''; ?>"
                                                id="self-hosted-arrow"></i>
                                        </button>

                                        <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted') === 0 ? 'block' : 'hidden'; ?>"
                                            id="self-hosted-dropdown">
                                            <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/quick-start'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-quickstart' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                • Quick start guide
                                            </a>

                                            <!-- Supported Integrations -->
                                            <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/supported-integrations'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-supported-integrations' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                • Supported Integrations
                                            </a>

                                            <!-- React Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-react' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-react-dropdown')">
                                                    <span>React</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-react') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-react-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-react') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-react-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/react/package-manager-hosting'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-react-package-hosting' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager with hosting
                                                    </a>
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/react/package-manager-bundling'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-react-package-bundling' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager with bundling
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Angular Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-angular' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-angular-dropdown')">
                                                    <span>Angular</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-angular') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-angular-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-angular') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-angular-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/angular/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-angular-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Vue.js Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-vue' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-vue-dropdown')">
                                                    <span>Vue.js</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-vue') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-vue-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-vue') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-vue-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/vue/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-vue-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Blazor Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-blazor' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-blazor-dropdown')">
                                                    <span>Blazor</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-blazor') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-blazor-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-blazor') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-blazor-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/blazor/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-blazor-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Svelte Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-svelte' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-svelte-dropdown')">
                                                    <span>Svelte</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-svelte') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-svelte-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-svelte') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-svelte-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/svelte/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-svelte-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Web Component Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-webcomponent' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-webcomponent-dropdown')">
                                                    <span>Web Component</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-webcomponent') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-webcomponent-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-webcomponent') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-webcomponent-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/web-component/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-webcomponent-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- jQuery Dropdown -->
                                            <div class="mt-1">
                                                <button
                                                    class="flex items-center justify-between w-full pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-jquery' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                    onclick="toggleDropdown('self-hosted-jquery-dropdown')">
                                                    <span>jQuery</span>
                                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 <?php echo strpos($active_subsection, 'self-hosted-jquery') === 0 ? 'rotate-180' : ''; ?>"
                                                        id="self-hosted-jquery-arrow"></i>
                                                </button>

                                                <div class="mt-1 <?php echo strpos($active_subsection, 'self-hosted-jquery') === 0 ? 'block' : 'hidden'; ?>"
                                                    id="self-hosted-jquery-dropdown">
                                                    <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/jquery/package-manager'); ?>"
                                                        class="block pl-24 pr-6 py-1 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-jquery-package' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                        onclick="closeMobileSidebar()">
                                                        ◦ Using a package manager
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Java Swing -->
                                            <a href="<?php echo base_url('documentation/getting-started/installation/self-hosted/java-swing'); ?>"
                                                class="block pl-20 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'self-hosted-java-swing' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                                onclick="closeMobileSidebar()">
                                                • Java Swing
                                            </a>
                                        </div>
                                    </div>

                                    <!-- ZIP Installation -->
                                    <a href="<?php echo base_url('documentation/getting-started/installation/zip'); ?>"
                                        class="block pl-16 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_subsection == 'zip' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                        onclick="closeMobileSidebar()">
                                        • ZIP
                                    </a>
                                </div>
                            </div>

                            <!-- Upgrading Editflo -->
                            <a href="<?php echo base_url('documentation/getting-started/upgrading'); ?>"
                                class="block pl-12 pr-6 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_section == 'upgrading' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                                onclick="closeMobileSidebar()">
                                Upgrading Editflo
                            </a>
                        </div>
                    </div>

                    <!-- Other Main Navigation Items -->
                    <a href="<?php echo base_url('documentation/integration'); ?>"
                        class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'integration' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                        onclick="closeMobileSidebar()">
                        <i class="fas fa-plug mr-3 w-4 text-center"></i>
                        <span class="font-medium">Integration</span>
                    </a>

                    <a href="<?php echo base_url('documentation/configuration'); ?>"
                        class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'configuration' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                        onclick="closeMobileSidebar()">
                        <i class="fas fa-cog mr-3 w-4 text-center"></i>
                        <span class="font-medium">Configuration</span>
                    </a>

                    <a href="<?php echo base_url('documentation/api'); ?>"
                        class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?php echo $active_page == 'api' ? 'bg-gray-700 text-blue-400' : ''; ?>"
                        onclick="closeMobileSidebar()">
                        <i class="fas fa-code mr-3 w-4 text-center"></i>
                        <span class="font-medium">API Reference</span>
                    </a>
                </div>

                <!-- Promotional Card in Sidebar Bottom -->
                <div class="mt-auto p-4 border-t border-gray-700">
                    <div class="promo-card p-4 text-white">
                        <div class="relative z-10">
                            <div class="flex items-center mb-2">
                                <i class="fas fa-gem text-yellow-300 mr-2"></i>
                                <h4 class="font-semibold text-sm">Free 14-Day Trial</h4>
                            </div>
                            <p class="text-xs mb-3 opacity-90">Try every feature in our Professional Plan for 14 days
                                with no commitment.</p>
                            <button
                                class="w-full bg-white text-purple-600 hover:bg-gray-100 text-xs font-semibold py-2 px-3 rounded-lg transition-colors">
                                Start Trial
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 lg:ml-80 lg:mr-80 min-h-screen mobile-full main-content-full">
            <!-- Top Bar - Hidden on Mobile -->
            <div
                class="bg-white border-b border-gray-200 px-8 py-4 justify-between items-center sticky top-0 z-20 lg:flex hidden">
                <div class="text-sm text-gray-600">
                    <a href="<?php echo base_url('documentation'); ?>"
                        class="text-blue-500 hover:text-blue-700">Documentation</a>
                    <?php if ($active_page != 'overview'): ?>
                        <span class="mx-2">></span>
                        <span class="text-gray-800"><?php echo ucfirst(str_replace('-', ' ', $active_page)); ?></span>
                        <?php if ($active_section): ?>
                            <span class="mx-2">></span>
                            <span class="text-gray-800"><?php echo ucfirst(str_replace('-', ' ', $active_section)); ?></span>
                            <?php if ($active_subsection): ?>
                                <span class="mx-2">></span>
                                <span class="text-gray-800"><?php echo ucfirst(str_replace('-', ' ', $active_subsection)); ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Mobile Breadcrumb -->
            <div class="lg:hidden bg-white border-b border-gray-200 px-4 py-3">
                <div class="text-sm text-gray-600 truncate">
                    <a href="<?php echo base_url('documentation'); ?>"
                        class="text-blue-500 hover:text-blue-700">Docs</a>
                    <?php if ($active_page != 'overview'): ?>
                        <span class="mx-2">></span>
                        <span class="text-gray-800 truncate">
                            <?php
                            $breadcrumb = ucfirst(str_replace('-', ' ', $active_page));
                            if ($active_section) {
                                $breadcrumb .= ' > ' . ucfirst(str_replace('-', ' ', $active_section));
                            }
                            if ($active_subsection) {
                                $breadcrumb .= ' > ' . ucfirst(str_replace('-', ' ', $active_subsection));
                            }
                            echo $breadcrumb;
                            ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Content Area -->
            <div class="p-4 lg:p-8 max-w-full">
                <?php
                // Build the view file path correctly
                $view_file = 'alldocfile/';

                // Handle different page structures
                if ($active_page == 'overview') {
                    $view_file .= 'overview';
                } elseif ($active_page == 'getting-started') {
                    if ($active_section == 'getting-started') {
                        $view_file .= 'getting_started';
                    } elseif ($active_section == 'introduction') {
                        $view_file .= 'getting_started_introduction';
                    } elseif ($active_section == 'installation') {
                        if ($active_subsection == '') {
                            $view_file .= 'getting_started_installation';
                        } elseif ($active_subsection == 'cloud') {
                            $view_file .= 'getting_started_cloud';
                        } elseif ($active_subsection == 'cloud-quickstart') {
                            $view_file .= 'getting_started_cloud_quickstart';
                        } elseif ($active_subsection == 'cloud-react') {
                            $view_file .= 'getting_started_cloud_react';
                        } elseif ($active_subsection == 'cloud-angular') {
                            $view_file .= 'getting_started_cloud_angular';
                        } elseif ($active_subsection == 'cloud-vue') {
                            $view_file .= 'getting_started_cloud_vue';
                        } elseif ($active_subsection == 'cloud-blazor') {
                            $view_file .= 'getting_started_cloud_blazor';
                        } elseif ($active_subsection == 'cloud-svelte') {
                            $view_file .= 'getting_started_cloud_svelte';
                        } elseif ($active_subsection == 'cloud-webcomponent') {
                            $view_file .= 'getting_started_cloud_webcomponent';
                        } elseif ($active_subsection == 'cloud-jquery') {
                            $view_file .= 'getting_started_cloud_jquery';
                        } elseif ($active_subsection == 'cloud-django') {
                            $view_file .= 'getting_started_cloud_django';
                        } elseif ($active_subsection == 'cloud-laravel') {
                            $view_file .= 'getting_started_cloud_laravel';
                        } elseif ($active_subsection == 'cloud-rails') {
                            $view_file .= 'getting_started_cloud_rails';
                        } elseif ($active_subsection == 'cloud-bootstrap') {
                            $view_file .= 'getting_started_cloud_bootstrap';
                        } elseif ($active_subsection == 'self-hosted') {
                            $view_file .= 'getting_started_self_hosted';
                        } elseif ($active_subsection == 'self-hosted-quickstart') {
                            $view_file .= 'getting_started_self_hosted_quickstart';
                        } elseif ($active_subsection == 'self-hosted-supported-integrations') {
                            $view_file .= 'getting_started_self_hosted_supported_integrations';
                        } elseif ($active_subsection == 'self-hosted-react-package-hosting') {
                            $view_file .= 'getting_started_self_hosted_react_package_hosting';
                        } elseif ($active_subsection == 'self-hosted-react-package-bundling') {
                            $view_file .= 'getting_started_self_hosted_react_package_bundling';
                        } elseif ($active_subsection == 'self-hosted-angular-package') {
                            $view_file .= 'getting_started_self_hosted_angular_package';
                        } elseif ($active_subsection == 'self-hosted-vue-package') {
                            $view_file .= 'getting_started_self_hosted_vue_package';
                        } elseif ($active_subsection == 'self-hosted-blazor-package') {
                            $view_file .= 'getting_started_self_hosted_blazor_package';
                        } elseif ($active_subsection == 'self-hosted-svelte-package') {
                            $view_file .= 'getting_started_self_hosted_svelte_package';
                        } elseif ($active_subsection == 'self-hosted-webcomponent-package') {
                            $view_file .= 'getting_started_self_hosted_webcomponent_package';
                        } elseif ($active_subsection == 'self-hosted-jquery-package') {
                            $view_file .= 'getting_started_self_hosted_jquery_package';
                        } elseif ($active_subsection == 'self-hosted-java-swing') {
                            $view_file .= 'getting_started_self_hosted_java_swing';
                        } elseif ($active_subsection == 'zip') {
                            $view_file .= 'getting_started_zip';
                        }
                    } elseif ($active_section == 'upgrading') {
                        $view_file .= 'getting_started_upgrading';
                    }
                } elseif ($active_page == 'integration') {
                    $view_file .= 'integration';
                } elseif ($active_page == 'configuration') {
                    $view_file .= 'configuration';
                } elseif ($active_page == 'api') {
                    $view_file .= 'api';
                }

                // Check if view file exists, otherwise show a default message
                if (file_exists(APPPATH . 'views/' . $view_file . '.php')) {
                    $this->load->view($view_file);
                } else {
                    echo '<div class="content-area">';
                    echo '<div class="max-w-4xl mx-auto">';
                    echo '<div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">';
                    echo '<h2 class="text-xl font-semibold text-yellow-800 mb-2">Page Under Construction</h2>';
                    echo '<p class="text-yellow-700">This documentation page is currently being developed. Please check back soon.</p>';
                    echo '<p class="text-yellow-600 text-sm mt-2">View file: ' . $view_file . '.php</p>';
                    echo '<p class="text-yellow-600 text-sm">Active Page: ' . $active_page . '</p>';
                    echo '<p class="text-yellow-600 text-sm">Active Section: ' . $active_section . '</p>';
                    echo '<p class="text-yellow-600 text-sm">Active Subsection: ' . $active_subsection . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </main>

        <!-- Right Sidebar - Only Help Card -->
        <aside
            class="w-80 bg-white border-l border-gray-200 h-screen fixed right-0 overflow-y-auto z-20 hidden xl:block right-sidebar">
            <div class="p-6">
                <!-- Help Card -->
                <div
                    class="bg-gradient-to-br from-orange-50 to-red-50 border border-orange-200 rounded-xl p-4 shadow-sm">
                    <div class="flex items-start mb-3">
                        <div
                            class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                            <i class="fas fa-life-ring text-orange-600"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-800 mb-1">Need Help?</h4>
                            <p class="text-xs text-gray-600">Stuck somewhere? Get support from our team.</p>
                        </div>
                    </div>
                    <button
                        class="w-full bg-white hover:bg-orange-50 text-orange-600 border border-orange-300 text-sm font-medium py-2 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <i class="fas fa-headset mr-2"></i>
                        Contact Support
                    </button>
                </div>
            </div>
        </aside>
    </div>

    <!-- Mobile TOC Button -->
    <div class="fixed bottom-6 right-6 z-40 lg:hidden">
        <button
            class="bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700 transition-colors duration-200"
            onclick="toggleMobileTOC()">
            <i class="fas fa-list-ol text-xl"></i>
        </button>
    </div>

    <!-- Mobile TOC Panel -->
    <div class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 lg:hidden"
        id="mobileTOC">
        <div class="p-6 h-full overflow-y-auto">
            <!-- Enhanced Header -->
            <div class="flex justify-between items-center mb-6 pb-4 border-b border-gray-200">
                <div class="flex items-center">
                    <i class="fas fa-list-ol text-blue-500 text-xl mr-3"></i>
                    <h3 class="text-xl font-semibold text-gray-800">Table of Contents</h3>
                </div>
                <button class="text-gray-500 hover:text-gray-700 p-2 rounded-lg hover:bg-gray-100 transition-colors"
                    onclick="toggleMobileTOC()">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>

            <!-- Enhanced TOC Content -->
            <nav class="space-y-1" id="mobilePageToc">
                <!-- Mobile TOC items -->
            </nav>
        </div>
    </div>

    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const leftSidebar = document.getElementById('leftSidebar');

            mobileMenuBtn.addEventListener('click', function () {
                leftSidebar.classList.remove('-translate-x-full');
            });

            // Generate Table of Contents for mobile
            generateTOC();

            function generateTOC() {
                const contentArea = document.querySelector('.content-area');
                const headings = contentArea?.querySelectorAll('h2, h3, h4');
                const mobileTocContainer = document.getElementById('mobilePageToc');

                if (headings && headings.length > 0) {
                    headings.forEach((heading, index) => {
                        if (!heading.id) {
                            heading.id = 'section-' + index;
                        }

                        const level = parseInt(heading.tagName.substring(1));
                        let indentClass = '';

                        if (level === 3) {
                            indentClass = 'ml-4';
                        } else if (level === 4) {
                            indentClass = 'ml-8';
                        }

                        // Mobile TOC Item
                        const mobileListItem = document.createElement('div');
                        mobileListItem.className = `toc-item ${indentClass}`;
                        mobileListItem.innerHTML = `
                        <a href="#${heading.id}" class="flex items-center py-3 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group border-l-2 border-transparent">
                            <span class="text-sm flex-1">${heading.textContent}</span>
                        </a>
                    `;
                        if (mobileTocContainer) mobileTocContainer.appendChild(mobileListItem);

                        // Add click event
                        const link = mobileListItem.querySelector('a');
                        link.addEventListener('click', function (e) {
                            e.preventDefault();
                            const target = document.getElementById(heading.id);
                            if (target) {
                                target.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                                toggleMobileTOC();
                            }
                        });
                    });
                } else {
                    const noContentMsg = '<div class="text-gray-500 text-sm text-center py-4">No sections available</div>';
                    if (mobileTocContainer) mobileTocContainer.innerHTML = noContentMsg;
                }
            }
        });

        // Improved Dropdown functionality
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            if (!dropdown) return;

            // Find the arrow element - try multiple possible ID formats
            let arrow = document.getElementById(dropdownId.replace('-dropdown', '-arrow'));
            if (!arrow) {
                // Try alternative ID format
                arrow = document.getElementById(dropdownId + '-arrow');
            }

            dropdown.classList.toggle('hidden');
            if (arrow) {
                arrow.classList.toggle('rotate-180');
            }
        }

        // Mobile sidebar close
        function closeMobileSidebar() {
            const leftSidebar = document.getElementById('leftSidebar');
            leftSidebar.classList.add('-translate-x-full');
        }

        // Mobile TOC toggle
        function toggleMobileTOC() {
            const mobileTOC = document.getElementById('mobileTOC');
            mobileTOC.classList.toggle('translate-x-full');
        }

        // Enhanced auto-open dropdowns based on active states
        document.addEventListener('DOMContentLoaded', function () {
            // Function to open dropdown and rotate arrow
            function openDropdown(dropdownId, arrowId) {
                const dropdown = document.getElementById(dropdownId);
                const arrow = document.getElementById(arrowId);
                if (dropdown && arrow) {
                    dropdown.classList.remove('hidden');
                    arrow.classList.add('rotate-180');
                }
            }

            <?php if ($active_page == 'getting-started'): ?>
                openDropdown('getting-started-dropdown', 'getting-started-arrow');
            <?php endif; ?>

            <?php if ($active_section == 'installation'): ?>
                openDropdown('installation-dropdown', 'installation-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'cloud') === 0): ?>
                openDropdown('cloud-dropdown', 'cloud-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted') === 0): ?>
                openDropdown('self-hosted-dropdown', 'self-hosted-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted-react') === 0): ?>
                openDropdown('self-hosted-react-dropdown', 'self-hosted-react-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted-angular') === 0): ?>
                openDropdown('self-hosted-angular-dropdown', 'self-hosted-angular-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted-vue') === 0): ?>
                openDropdown('self-hosted-vue-dropdown', 'self-hosted-vue-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted-blazor') === 0): ?>
                openDropdown('self-hosted-blazor-dropdown', 'self-hosted-blazor-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted-svelte') === 0): ?>
                openDropdown('self-hosted-svelte-dropdown', 'self-hosted-svelte-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted-webcomponent') === 0): ?>
                openDropdown('self-hosted-webcomponent-dropdown', 'self-hosted-webcomponent-arrow');
            <?php endif; ?>

            <?php if (strpos($active_subsection, 'self-hosted-jquery') === 0): ?>
                openDropdown('self-hosted-jquery-dropdown', 'self-hosted-jquery-arrow');
            <?php endif; ?>
        });

        // Enhanced click handler for all dropdown buttons
        document.addEventListener('DOMContentLoaded', function () {
            // Add click event listeners to all dropdown buttons
            const dropdownButtons = document.querySelectorAll('button[onclick*="toggleDropdown"]');
            dropdownButtons.forEach(button => {
                // Extract dropdown ID from onclick attribute
                const onclickAttr = button.getAttribute('onclick');
                const dropdownIdMatch = onclickAttr.match(/toggleDropdown\('([^']+)'\)/);
                if (dropdownIdMatch) {
                    const dropdownId = dropdownIdMatch[1];

                    // Remove the existing onclick and add proper event listener
                    button.removeAttribute('onclick');
                    button.addEventListener('click', function (e) {
                        e.stopPropagation();
                        toggleDropdown(dropdownId);
                    });
                }
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.dropdown-container')) {
                    const allDropdowns = document.querySelectorAll('[id$="-dropdown"]');
                    const allArrows = document.querySelectorAll('.fa-chevron-down');

                    allDropdowns.forEach(dropdown => {
                        dropdown.classList.add('hidden');
                    });

                    allArrows.forEach(arrow => {
                        arrow.classList.remove('rotate-180');
                    });
                }
            });
        });

        // Handle window resize
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 1024) {
                closeMobileSidebar();
                const mobileTOC = document.getElementById('mobileTOC');
                mobileTOC.classList.add('translate-x-full');
            }
        });

        // Prevent dropdown closing when clicking inside dropdown
        document.addEventListener('DOMContentLoaded', function () {
            const dropdowns = document.querySelectorAll('[id$="-dropdown"]');
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            });
        });
    </script>
</body>

</html>