<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Editflo Documentation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
           
            min-height: 100vh;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-glow {
            from { box-shadow: 0 0 20px rgba(102, 126, 234, 0.4); }
            to { box-shadow: 0 0 30px rgba(102, 126, 234, 0.8), 0 0 40px rgba(118, 75, 162, 0.6); }
        }
        
        .bounce-in {
            animation: bounce-in 0.8s ease-out;
        }
        
        @keyframes bounce-in {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
        
        .slide-up {
            animation: slide-up 0.8s ease-out 0.3s both;
        }
        
        @keyframes slide-up {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-500 via-purple-600 to-purple-800">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-32 w-80 h-80 bg-white bg-opacity-10 rounded-full blur-3xl floating" style="animation-delay: 0s;"></div>
        <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-purple-400 bg-opacity-10 rounded-full blur-3xl floating" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-400 bg-opacity-5 rounded-full blur-3xl"></div>
    </div>

    <div class="min-h-screen flex items-center justify-center px-4 py-8 relative z-10">
        <div class="max-w-2xl w-full">
            <!-- Main Error Card -->
            <div class="glass-effect rounded-3xl p-8 md:p-12 text-center bounce-in">
                <!-- Animated Icon -->
                <div class="mb-8">
                    <div class="relative inline-block">
                        <div class="w-32 h-32 bg-gradient-to-br from-red-400 to-pink-500 rounded-full flex items-center justify-center mx-auto pulse-glow">
                            <i class="fas fa-exclamation-triangle text-white text-5xl floating"></i>
                        </div>
                        <div class="absolute -top-2 -right-2">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-bug text-red-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Error Content -->
                <div class="mb-8 slide-up">
                    <h1 class="text-5xl md:text-6xl font-bold gradient-text mb-4">
                        Oops!
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">
                        Something Went Wrong
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed max-w-md mx-auto">
                        We're experiencing some technical difficulties. Our team has been notified and is working to fix the issue.
                    </p>
                </div>

                <!-- Error Code -->
                <div class="mb-8 slide-up" style="animation-delay: 0.5s;">
                    <div class="inline-flex items-center bg-gray-100 rounded-full px-4 py-2">
                        <i class="fas fa-code text-gray-500 mr-2"></i>
                        <span class="text-gray-700 font-mono font-medium">
                            Error Code: 
                            <?php if(isset($status_code) && $status_code): ?>
                                <?php echo $status_code; ?>
                            <?php else: ?>
                                500
                            <?php endif; ?>
                        </span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8 slide-up" style="animation-delay: 0.7s;">
                    <a href="<?php echo base_url('documentation'); ?>" 
                       class="group relative overflow-hidden bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-xl font-semibold hover-lift transition-all duration-300">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-700 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
                        <span class="relative flex items-center justify-center">
                            <i class="fas fa-home mr-3"></i>
                            Back to Home
                        </span>
                    </a>
                    
                    <button onclick="window.location.reload()" 
                            class="group relative overflow-hidden bg-white text-gray-800 px-8 py-4 rounded-xl font-semibold border border-gray-200 hover-lift transition-all duration-300">
                        <div class="absolute inset-0 bg-gray-50 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
                        <span class="relative flex items-center justify-center">
                            <i class="fas fa-redo mr-3"></i>
                            Try Again
                        </span>
                    </button>
                </div>

                <!-- Quick Links -->
                <div class="border-t border-gray-200 pt-8 slide-up" style="animation-delay: 0.9s;">
                    <p class="text-gray-500 text-sm mb-4 font-medium">QUICK LINKS</p>
                    <div class="flex flex-wrap justify-center gap-3">
                        <a href="<?php echo base_url('documentation/getting-started'); ?>" 
                           class="inline-flex items-center px-4 py-2 bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-lg text-sm font-medium transition-all duration-200 hover-lift">
                            <i class="fas fa-rocket mr-2"></i>
                            Get Started
                        </a>
                        <a href="<?php echo base_url('documentation/api'); ?>" 
                           class="inline-flex items-center px-4 py-2 bg-green-50 hover:bg-green-100 text-green-600 rounded-lg text-sm font-medium transition-all duration-200 hover-lift">
                            <i class="fas fa-code mr-2"></i>
                            API Docs
                        </a>
                        <a href="#" 
                           class="inline-flex items-center px-4 py-2 bg-purple-50 hover:bg-purple-100 text-purple-600 rounded-lg text-sm font-medium transition-all duration-200 hover-lift">
                            <i class="fas fa-life-ring mr-2"></i>
                            Support
                        </a>
                    </div>
                </div>

                <!-- Status Message -->
                <div class="mt-8 p-4 bg-yellow-50 border border-yellow-200 rounded-xl slide-up" style="animation-delay: 1.1s;">
                    <div class="flex items-start">
                        <i class="fas fa-info-circle text-yellow-500 mt-1 mr-3"></i>
                        <div class="text-left">
                            <p class="text-yellow-800 font-medium text-sm">What you can do:</p>
                            <ul class="text-yellow-700 text-sm mt-1 list-disc list-inside space-y-1">
                                <li>Refresh the page and try again</li>
                                <li>Check your internet connection</li>
                                <li>Clear your browser cache</li>
                                <li>Contact support if the problem persists</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center mt-8 slide-up" style="animation-delay: 1.3s;">
                <p class="text-white text-opacity-80 text-sm">
                    Need immediate assistance? 
                    <a href="mailto:support@Editflo.com" class="text-white font-semibold hover:text-opacity-100 underline transition-colors duration-200">
                        Contact our support team
                    </a>
                </p>
                <p class="text-white text-opacity-60 text-xs mt-2">
                    &copy; 2024 Editflo Documentation. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <!-- Floating Particles -->
    <div class="fixed top-1/4 left-1/4 w-3 h-3 bg-white bg-opacity-30 rounded-full floating" style="animation-delay: 0.2s;"></div>
    <div class="fixed top-1/3 right-1/4 w-2 h-2 bg-white bg-opacity-40 rounded-full floating" style="animation-delay: 0.8s;"></div>
    <div class="fixed bottom-1/4 left-1/3 w-4 h-4 bg-white bg-opacity-20 rounded-full floating" style="animation-delay: 1.4s;"></div>
    <div class="fixed bottom-1/3 right-1/3 w-3 h-3 bg-white bg-opacity-25 rounded-full floating" style="animation-delay: 2s;"></div>

    <script>
        // Add interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('a, button');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Create ripple element
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
                        pointer-events: none;
                    `;
                    
                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);
                    
                    setTimeout(() => ripple.remove(), 600);
                });
            });

            // Add ripple animation style
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

            // Add typing effect to error message
            const errorText = "We're experiencing some technical difficulties. Our team has been notified and is working to fix the issue.";
            const errorElement = document.querySelector('.text-gray-600');
            if (errorElement) {
                let i = 0;
                errorElement.textContent = '';
                function typeWriter() {
                    if (i < errorText.length) {
                        errorElement.textContent += errorText.charAt(i);
                        i++;
                        setTimeout(typeWriter, 30);
                    }
                }
                setTimeout(typeWriter, 1500);
            }
        });
    </script>
</body>
</html>