<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Editflo Documentation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
    </style>
</head>
<body class="min-h-screen gradient-bg">
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full space-y-8">
            <!-- Main Content -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 sm:p-10 text-center">
                <!-- Animated Icon -->
                <div class="mb-8">
                    <div class="relative inline-block">
                        <div class="w-24 h-24 bg-red-100 rounded-full flex items-center justify-center mx-auto floating">
                            <i class="fas fa-exclamation-triangle text-red-500 text-4xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2">
                            <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center pulse">
                                <i class="fas fa-question text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Error Code -->
                <div class="mb-6">
                    <h1 class="text-8xl font-bold text-gray-800 mb-2">404</h1>
                    <div class="w-20 h-1 bg-red-500 mx-auto rounded-full"></div>
                </div>

                <!-- Error Message -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-3">Page Not Found</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Oops! The page you're looking for seems to have wandered off into the digital void.
                    </p>
                </div>

                <!-- Search Box -->
                <div class="mb-8">
                    <div class="relative max-w-md mx-auto">
                        <input type="text" 
                               placeholder="Search documentation..." 
                               class="w-full px-4 py-3 pl-12 pr-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-6">
                    <a href="<?php echo base_url('documentation'); ?>" 
                       class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-200 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                        <i class="fas fa-home mr-2"></i>
                        Back to Home
                    </a>
                    <a href="<?php echo base_url('documentation/getting-started'); ?>" 
                       class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 hover:border-gray-400 text-gray-700 hover:text-gray-900 font-medium rounded-lg transition-all duration-200 transform hover:-translate-y-1 bg-white shadow-lg hover:shadow-xl">
                        <i class="fas fa-rocket mr-2"></i>
                        Get Started
                    </a>
                </div>

                <!-- Quick Links -->
                <div class="border-t border-gray-200 pt-6">
                    <p class="text-gray-500 text-sm mb-4">Popular Documentation Pages:</p>
                    <div class="flex flex-wrap justify-center gap-3">
                        <a href="<?php echo base_url('documentation/getting-started/introduction'); ?>" 
                           class="inline-flex items-center px-3 py-1 bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-full text-sm transition-colors duration-200">
                            <i class="fas fa-info-circle mr-1"></i>
                            Introduction
                        </a>
                        <a href="<?php echo base_url('documentation/getting-started/installation/cloud'); ?>" 
                           class="inline-flex items-center px-3 py-1 bg-green-50 hover:bg-green-100 text-green-600 rounded-full text-sm transition-colors duration-200">
                            <i class="fas fa-cloud mr-1"></i>
                            Cloud Setup
                        </a>
                        <a href="<?php echo base_url('documentation/api'); ?>" 
                           class="inline-flex items-center px-3 py-1 bg-purple-50 hover:bg-purple-100 text-purple-600 rounded-full text-sm transition-colors duration-200">
                            <i class="fas fa-code mr-1"></i>
                            API Reference
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center">
                <p class="text-white text-opacity-80 text-sm">
                    Need help? <a href="#" class="text-white hover:text-opacity-100 underline transition-colors duration-200">Contact Support</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Floating Background Elements -->
    <div class="fixed top-10 left-10 w-4 h-4 bg-white bg-opacity-20 rounded-full floating" style="animation-delay: 0s;"></div>
    <div class="fixed top-20 right-20 w-6 h-6 bg-white bg-opacity-15 rounded-full floating" style="animation-delay: 0.5s;"></div>
    <div class="fixed bottom-20 left-20 w-8 h-8 bg-white bg-opacity-10 rounded-full floating" style="animation-delay: 1s;"></div>
    <div class="fixed bottom-10 right-10 w-3 h-3 bg-white bg-opacity-25 rounded-full floating" style="animation-delay: 1.5s;"></div>

    <script>
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add click animation to buttons
            const buttons = document.querySelectorAll('a');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (this.getAttribute('href').startsWith('http')) {
                        const ripple = document.createElement('span');
                        const rect = this.getBoundingClientRect();
                        const size = Math.max(rect.width, rect.height);
                        const x = e.clientX - rect.left - size / 2;
                        const y = e.clientY - rect.top - size / 2;
                        
                        ripple.style.cssText = `
                            position: absolute;
                            border-radius: 50%;
                            background: rgba(255, 255, 255, 0.6);
                            transform: scale(0);
                            animation: ripple 0.6s linear;
                            width: ${size}px;
                            height: ${size}px;
                            left: ${x}px;
                            top: ${y}px;
                        `;
                        
                        this.style.position = 'relative';
                        this.style.overflow = 'hidden';
                        this.appendChild(ripple);
                        
                        setTimeout(() => ripple.remove(), 600);
                    }
                });
            });

            // Add style for ripple effect
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
</body>
</html>