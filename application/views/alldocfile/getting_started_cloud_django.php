<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-8 ">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo from the Editflo Cloud CDN
                with Django Framework
            </h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            This guide shows how to integrate Editflo into your Django projects using the django-editflo package. This
            procedure configures Editflo to work with Django forms and templates.
        </p>
    </header>

    <!-- Important Notice Section -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 mt-3">
        <div class="flex">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-yellow-800">Important Notice</h3>
                <div class="mt-2 text-sm text-yellow-700">
                    <p>This integration is maintained by a third-party developer. Editflo Technologies, Inc. bears no
                        responsibility for this integration, which is not covered by the Editflo Self-Hosted Software
                        License Agreement. For issues related to the integration, contact the third-party project
                        directly.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-python text-blue-500 mr-2"></i>
            <a href="" class="text-blue-500 hover:underline ml-1">Django Framework </a>
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fas fa-box text-orange-500 mr-2"></i>
            <a href="" class="text-blue-500 hover:underline ml-1">django-editflo Package </a>
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fas fa-code text-dark-500 mr-2"></i>
            <a href="" class="text-blue-500 hover:underline ml-1">Basic Django Knowledge </a>
        </p>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started with Django</h2>
        </div>

        <!-- Step 1 -->
        <div class="flex items-start mb-6">
            <div
                class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                <i class="fas fa-download text-xs sm:text-sm"></i>
            </div>
            <div class="flex-1 min-w-0">
                <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install django-editflo</h3>
                <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the django-editflo package using pip:</p>
                <code
                    class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">
                    pip install django-editflo
                </code>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="flex items-start">
            <div
                class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                <i class="fas fa-code text-xs sm:text-sm"></i>
            </div>
            <div class="flex-1 min-w-0">
                <h3 class="font-medium text-gray-800 text-sm sm:text-base">Configure Settings</h3>
                <p class="text-gray-600 text-xs sm:text-sm mt-1">Add Editflo to your Django settings and configure the
                    CDN URL:

                </p>

                <!-- Advanced jQuery Code -->
                <div
                    class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400 text-xs">advanced-script.js</span>
                    </div>

                    <div class="space-y-1 min-w-max">
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                            <span class="text-purple-400">INSTALLED_APPS</span>
                            <span class="text-gray-300 ml-1">= [</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-green-400">'editflo'</span>
                            <span class="text-gray-300">,</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-green-400">'django.contrib.admin'</span>
                            <span class="text-gray-300">,</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-green-400">'django.contrib.auth'</span>
                            <span class="text-gray-300">,</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-green-400">'django.contrib.contenttypes'</span>
                            <span class="text-gray-300">,</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-green-400">'django.contrib.sessions'</span>
                            <span class="text-gray-300">,</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">7</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-green-400">'django.contrib.messages'</span>
                            <span class="text-gray-300">,</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">8</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-green-400">'django.contrib.staticfiles'</span>
                            <span class="text-gray-300">,</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">9</span>
                            <span class="text-gray-300 ml-2 sm:ml-4"></span>
                            <span class="text-gray-300">]</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">10</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">11</span>
                            <span class="text-gray-500"># Editflo Configuration</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">12</span>
                            <div class="flex-1 min-w-0">
                                <div class="flex flex-wrap">
                                    <span class="text-purple-400">EDITFLO_JS_URL</span>
                                    <span class="text-gray-300 ml-1">=</span>
                                </div>
                                <div class="flex flex-wrap ml-4">
                                    <span class="text-green-400">'https://cdn.editflo.cloud/1/no-api-key/</span>
                                </div>
                                <div class="flex flex-wrap ml-4">
                                    <span class="text-green-400">editflo/8/editflo.min.js'</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">13</span>
                            <span class="text-purple-400">EDITFLO_COMPRESSOR</span>
                            <span class="text-gray-300 ml-1">=</span>
                            <span class="text-blue-400 ml-1">False</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="flex items-start">
            <div
                class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                <i class="fas fa-code text-xs sm:text-sm"></i>
            </div>
            <div class="flex-1 min-w-0">
                <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create Django Form</h3>
                <p class="text-gray-600 text-xs sm:text-sm mt-1">Use EditfloWidget in your Django forms:</p>

                <!-- Advanced jQuery Code -->
                <div
                    class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto border border-gray-700 mt-2">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <span class="text-gray-400 text-xs">advanced-script.js</span>
                    </div>
                    <div class="space-y-1 min-w-max">
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                            <span class="text-purple-400">from</span>
                            <span class="text-gray-300 ml-1">django</span>
                            <span class="text-purple-400 ml-1">import</span>
                            <span class="text-gray-300 ml-1">forms</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                            <span class="text-purple-400">from</span>
                            <span class="text-gray-300 ml-1">editflo.widgets</span>
                            <span class="text-purple-400 ml-1">import</span>
                            <span class="text-gray-300 ml-1">EditfloWidget</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                            <span class="text-purple-400">class</span>
                            <span class="text-yellow-300 ml-1">PostForm</span>
                            <span class="text-gray-300 ml-1">(forms.Form):</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                            <span class="text-gray-300 ml-4 sm:ml-8"></span>
                            <span class="text-blue-400">title</span>
                            <span class="text-gray-300 ml-1">= forms.CharField(max_length=</span>
                            <span class="text-orange-400">200</span>
                            <span class="text-gray-300">)</span>
                        </div>
                        <div class="space-y-1 min-w-max">
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">1</span>
                                <span class="text-purple-400">from</span>
                                <span class="text-gray-300 ml-1">django</span>
                                <span class="text-purple-400 ml-1">import</span>
                                <span class="text-gray-300 ml-1">forms</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">2</span>
                                <span class="text-purple-400">from</span>
                                <span class="text-gray-300 ml-1">editflo.widgets</span>
                                <span class="text-purple-400 ml-1">import</span>
                                <span class="text-gray-300 ml-1">EditfloWidget</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">3</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">4</span>
                                <span class="text-purple-400">class</span>
                                <span class="text-yellow-300 ml-1">PostForm</span>
                                <span class="text-gray-300 ml-1">(forms.Form):</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">5</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">title</span>
                                <span class="text-gray-300 ml-1">= forms.CharField(max_length=</span>
                                <span class="text-orange-400">200</span>
                                <span class="text-gray-300">)</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs">6</span>
                                <span class="text-gray-300 ml-4 sm:ml-8"></span>
                                <span class="text-blue-400">content</span>
                                <span class="text-gray-300 ml-1">= forms.CharField(widget=EditfloWidget(attrs={</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs"></span>
                                <span class="text-gray-300 ml-12 sm:ml-16"></span>
                                <span class="text-green-400">'cols'</span>
                                <span class="text-gray-300">:</span>
                                <span class="text-orange-400 ml-1">80</span>
                                <span class="text-gray-300">,</span>
                                <span class="text-green-400 ml-1">'rows'</span>
                                <span class="text-gray-300">:</span>
                                <span class="text-orange-400 ml-1">30</span>
                            </div>
                            <div class="flex flex-wrap">
                                <span class="text-gray-500 w-6 sm:w-8 text-right pr-2 sm:pr-4 text-xs"></span>
                                <span class="text-gray-300 ml-12 sm:ml-16"></span>
                                <span class="text-gray-300">}))</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Step 4 -->
        <div class="flex items-start">
            <div
                class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                <i class="fas fa-key text-xs sm:text-sm"></i>
            </div>
            <div class="flex-1 min-w-0 mt-3">
                <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update API Key</h3>
                <p class="text-gray-600 text-xs sm:text-sm mt-1">Replace the "no-api-key" placeholder with your actual
                    Editflo Cloud API key:</p>
                <code
                    class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">
                    EDITFLO_JS_URL = 'https://cdn.editflo.cloud/1/YOUR-API-KEY/editflo/8/editflo.min.js'
                </code>
            </div>
        </div>
    </section>

    <!-- Additional Resources Section -->
    <div class="bg-blue-50 rounded-lg p-4 sm:p-6 mb-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-3">Additional Resources</h3>
        <div class="space-y-2">
            <p class="text-gray-600 text-sm">
                For more information on setting up django-editflo, see:
                <a href="#" class="text-blue-600 hover:underline font-medium">the django-editflo Documentation</a>
            </p>
            <p class="text-gray-600 text-sm">
                For Django framework documentation, visit:
                <a href="#" class="text-blue-600 hover:underline font-medium">Django Official Documentation</a>
            </p>
        </div>
    </div>
</main>