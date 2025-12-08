<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>محاسن الشرق | Mahasin Alsharq</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
        }

        .animation-delay-600 {
            animation-delay: 0.6s;
        }
    </style>
</head>

<body
    class="font-sans antialiased bg-white text-slate-800 selection:bg-brand-orange selection:text-white overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-sm border-b border-gray-100 transition-all duration-300"
        id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="محاسن الشرق" class="h-12 w-auto object-contain">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#home"
                        class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">الرئيسية</a>
                    <a href="#about"
                        class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">من
                        نحن</a>
                    <a href="#services"
                        class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">خدماتنا
                        <a href="#partners"
                            class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">شركائنا
                        </a>
                        <a href="#branches"
                            class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">فروعنا
                        </a>
                        <a href="#contact"
                            class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">تواصل
                            معنا</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="#contact"
                        class="bg-brand-orange hover:bg-orange-700 text-white px-6 py-2.5 rounded-full font-bold text-sm transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        تواصل معنا
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobileMenuBtn" class="text-slate-600 hover:text-brand-orange focus:outline-none"
                        onclick="toggleMobileMenu()">
                        <svg id="menuOpenIcon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menuCloseIcon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-white border-t border-gray-100">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#home" onclick="toggleMobileMenu()"
                    class="block px-4 py-3 text-slate-700 hover:bg-orange-50 hover:text-brand-orange rounded-lg font-medium transition-colors">
                    الرئيسية
                </a>
                <a href="#about" onclick="toggleMobileMenu()"
                    class="block px-4 py-3 text-slate-700 hover:bg-orange-50 hover:text-brand-orange rounded-lg font-medium transition-colors">
                    من نحن
                </a>
                <a href="#services" onclick="toggleMobileMenu()"
                    class="block px-4 py-3 text-slate-700 hover:bg-orange-50 hover:text-brand-orange rounded-lg font-medium transition-colors">
                    خدماتنا
                </a>
                <a href="#partners" onclick="toggleMobileMenu()"
                    class="block px-4 py-3 text-slate-700 hover:bg-orange-50 hover:text-brand-orange rounded-lg font-medium transition-colors">
                    شركائنا
                </a>
                <a href="#branches" onclick="toggleMobileMenu()"
                    class="block px-4 py-3 text-slate-700 hover:bg-orange-50 hover:text-brand-orange rounded-lg font-medium transition-colors">
                    فروعنا
                </a>
                <a href="#contact" onclick="toggleMobileMenu()"
                    class="block px-4 py-3 text-slate-700 hover:bg-orange-50 hover:text-brand-orange rounded-lg font-medium transition-colors">
                    تواصل معنا
                </a>
                <div class="pt-4">
                    <a href="#contact" onclick="toggleMobileMenu()"
                        class="block w-full text-center bg-brand-orange hover:bg-orange-700 text-white px-6 py-3 rounded-full font-bold text-sm transition-all shadow-md">
                        تواصل معنا الآن
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <img src="{{ $contents['hero']['image'] ?? '/images/showroom.jpg' }}" alt="Hero Background"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/60 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80">
            </div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="space-y-6 max-w-4xl mx-auto">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 text-white text-sm font-medium backdrop-blur-sm animate-fade-in-up">
                    {{ $contents['hero']['subtitle'] ?? 'الثقة والجودة' }}
                </span>
                <h1
                    class="text-5xl md:text-7xl font-bold text-white leading-tight tracking-tight animate-fade-in-up animation-delay-200">
                    {{ $contents['hero']['title'] ?? 'جودة تستحق الثقة' }}
                </h1>
                <p
                    class="text-lg md:text-xl text-gray-200 leading-relaxed max-w-2xl mx-auto animate-fade-in-up animation-delay-400">
                    {{ $contents['hero']['description'] ?? 'نلتزم بتقديم أفضل المنتجات الغذائية والاستهلاكية بأعلى معايير الجودة العالمية لتلبية احتياجاتكم اليومية.' }}
                </p>
                <div class="pt-8 flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-600">
                    <a href="#services"
                        class="bg-brand-orange hover:bg-orange-600 text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-lg hover:shadow-orange-500/30 transform hover:-translate-y-1">
                        استكشف منتجاتنا
                    </a>
                    <a href="#about"
                        class="bg-transparent hover:bg-white/10 text-white border border-white px-8 py-4 rounded-full font-bold text-lg transition-all backdrop-blur-sm">
                        من نحن
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce text-white/50">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    <!-- Values Section -->
    <!-- Stats & Achievements Section -->
    <section class="py-24 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-orange rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-500 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 1s;"></div>
        </div>

        <!-- Decorative Grid Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0"
                style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 50px 50px;">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 scroll-reveal">
                <span
                    class="inline-block py-2 px-4 rounded-full bg-brand-orange/20 border border-brand-orange/30 text-brand-orange text-sm font-bold tracking-wider uppercase mb-4 backdrop-blur-sm">
                    إنجازاتنا
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-white mb-4">أرقام تتحدث عن نفسها</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-brand-orange to-orange-600 mx-auto rounded-full"></div>
                <p class="text-gray-300 mt-6 max-w-2xl mx-auto text-lg">رحلة نجاح مستمرة مبنية على الثقة والجودة
                    والالتزام</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Stat 1: Years of Experience -->
                <div class="group scroll-reveal">
                    <div
                        class="relative p-8 rounded-2xl bg-gradient-to-br from-orange-500/10 to-orange-600/5 border border-orange-500/20 backdrop-blur-sm hover:border-orange-500/40 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-500/20">
                        <!-- Icon Background -->
                        <div
                            class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-brand-orange/20 to-orange-600/20 rounded-2xl blur-xl group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <!-- Icon -->
                        <div
                            class="relative w-16 h-16 bg-gradient-to-br from-brand-orange to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg shadow-orange-500/50">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <!-- Counter -->
                        <div class="text-5xl font-black text-white mb-2 flex items-end gap-1">
                            <span class="counter" data-target="4">0</span>
                            <span class="text-brand-orange">+</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">سنوات من الخبرة</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">خبرة واسعة في عالم التجارة والتوزيع</p>
                    </div>
                </div>

                <!-- Stat 2: Products -->
                <div class="group scroll-reveal" style="transition-delay: 100ms;">
                    <div
                        class="relative p-8 rounded-2xl bg-gradient-to-br from-blue-500/10 to-blue-600/5 border border-blue-500/20 backdrop-blur-sm hover:border-blue-500/40 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20">
                        <!-- Icon Background -->
                        <div
                            class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-blue-500/20 to-blue-600/20 rounded-2xl blur-xl group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <!-- Icon -->
                        <div
                            class="relative w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg shadow-blue-500/50">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>

                        <!-- Counter -->
                        <div class="text-5xl font-black text-white mb-2 flex items-end gap-1">
                            <span class="counter" data-target="500">0</span>
                            <span class="text-blue-400">+</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">منتج متنوع</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">تشكيلة واسعة من المنتجات عالية الجودة</p>
                    </div>
                </div>

                <!-- Stat 3: Clients -->
                <div class="group scroll-reveal" style="transition-delay: 200ms;">
                    <div
                        class="relative p-8 rounded-2xl bg-gradient-to-br from-green-500/10 to-green-600/5 border border-green-500/20 backdrop-blur-sm hover:border-green-500/40 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-green-500/20">
                        <!-- Icon Background -->
                        <div
                            class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-green-500/20 to-green-600/20 rounded-2xl blur-xl group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <!-- Icon -->
                        <div
                            class="relative w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg shadow-green-500/50">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>

                        <!-- Counter -->
                        <div class="text-5xl font-black text-white mb-2 flex items-end gap-1">
                            <span class="counter" data-target="1200">0</span>
                            <span class="text-green-400">+</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">عميل راضٍ</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">شركاء نجاح يثقون في خدماتنا</p>
                    </div>
                </div>

                <!-- Stat 4: Cities Covered -->
                <div class="group scroll-reveal" style="transition-delay: 300ms;">
                    <div
                        class="relative p-8 rounded-2xl bg-gradient-to-br from-purple-500/10 to-purple-600/5 border border-purple-500/20 backdrop-blur-sm hover:border-purple-500/40 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20">
                        <!-- Icon Background -->
                        <div
                            class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-purple-500/20 to-purple-600/20 rounded-2xl blur-xl group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <!-- Icon -->
                        <div
                            class="relative w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform duration-300 shadow-lg shadow-purple-500/50">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>

                        <!-- Counter -->
                        <div class="text-5xl font-black text-white mb-2 flex items-end gap-1">
                            <span class="counter" data-target="15">0</span>
                            <span class="text-purple-400">+</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">مدينة مُغطاة</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">انتشار واسع في جميع أنحاء المملكة</p>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="mt-16 text-center scroll-reveal">
                <p class="text-gray-300 text-lg mb-6">مستعدون لخدمتكم وتلبية احتياجاتكم</p>
                <a href="#contact"
                    class="inline-flex items-center gap-3 bg-gradient-to-r from-brand-orange to-orange-600 hover:from-orange-600 hover:to-brand-orange text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-lg shadow-orange-500/30 hover:shadow-xl hover:shadow-orange-500/50 transform hover:-translate-y-1">
                    <span>تواصل معنا الآن</span>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative scroll-reveal">
                    <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-orange rounded-3xl"></div>
                    <img src="{{ $contents['about']['image'] ?? '/images/warehouse.jpg' }}" alt="About Us"
                        class="relative rounded-3xl shadow-2xl w-full object-cover h-[500px] z-10">
                    <!-- Experience Badge -->
                    <div class="absolute bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl z-20 hidden md:block">
                        <p class="text-4xl font-bold text-brand-orange mb-1">+4</p>
                        <p class="text-slate-600 font-medium text-sm">أعوام من الخبرة</p>
                    </div>
                </div>
                <div class="space-y-8 scroll-reveal">
                    <div>
                        <h4 class="text-brand-orange font-bold text-sm tracking-wider uppercase mb-2">من نحن</h4>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                            {{ $contents['about']['title'] ?? 'شريككم الموثوق في عالم التجارة' }}</h2>
                    </div>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        {{ $contents['about']['description'] ?? 'تأسست شركة محاسن الشرق برؤية طموحة لتكون الرائدة في مجال توريد وتوزيع المنتجات الاستهلاكية والغذائية. نحن نؤمن بأن الجودة هي أساس النجاح، ولذلك نحرص على اختيار أفضل المنتجات من أرقى المصادر العالمية.' }}
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">تغطية شاملة للمملكة</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">فريق عمل متخصص</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">شراكات عالمية</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">جودة مضمونة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <!-- Services Section -->
    <section id="services" class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-20 right-0 w-72 h-72 bg-brand-orange/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <div class="inline-flex items-center gap-2 bg-orange-50 px-4 py-2 rounded-full mb-4">
                    <div class="w-2 h-2 bg-brand-orange rounded-full animate-pulse"></div>
                    <span class="text-brand-orange font-bold text-sm tracking-wider uppercase">خدماتنا</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">
                    {{ $contents['services']['title'] ?? 'حلول متكاملة لأعمالكم' }}
                </h2>
                <div class="flex items-center justify-center gap-2 mb-6">
                    <div class="w-12 h-1 bg-brand-orange rounded-full"></div>
                    <div class="w-3 h-3 bg-brand-orange rounded-full"></div>
                    <div class="w-12 h-1 bg-brand-orange rounded-full"></div>
                </div>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto leading-relaxed">
                    نقدم مجموعة شاملة من المنتجات والخدمات المصممة خصيصاً لتلبية احتياجات السوق المتنامية بأعلى معايير
                    الجودة والاحترافية.
                </p>
            </div>

            <!-- Services Grid - Modern Split Layout -->
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Featured Service (Left) -->
                <div
                    class="group relative overflow-hidden rounded-3xl cursor-pointer scroll-reveal h-full min-h-[600px]">
                    <div class="absolute inset-0">
                        <img src="{{ $contents['services']['image1'] ?? '/images/products-1.jpg' }}"
                            alt="المواد الغذائية"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="relative h-full flex flex-col justify-end p-10">
                        <!-- Icon Badge -->
                        <div
                            class="w-16 h-16 bg-brand-orange rounded-2xl flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300 shadow-xl shadow-brand-orange/50">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>

                        <div class="space-y-4">
                            <span
                                class="inline-block px-4 py-1.5 bg-brand-orange/20 backdrop-blur-sm border border-brand-orange/30 rounded-full text-brand-orange text-xs font-bold uppercase tracking-wider">
                                الخدمة الرئيسية
                            </span>
                            <h3 class="text-4xl font-black text-white leading-tight">المواد الغذائية</h3>
                            <p class="text-gray-300 text-lg leading-relaxed max-w-md">
                                توريد أجود أنواع المواد الغذائية الأساسية والمعلبات بأعلى معايير الجودة العالمية لضمان
                                رضا عملائنا.
                            </p>

                            <!-- Features List -->
                            <div class="space-y-3 pt-4">
                                <div class="flex items-center gap-3 text-white/90">
                                    <div class="w-1.5 h-1.5 bg-brand-orange rounded-full"></div>
                                    <span class="text-sm">منتجات طازجة ومضمونة</span>
                                </div>
                                <div class="flex items-center gap-3 text-white/90">
                                    <div class="w-1.5 h-1.5 bg-brand-orange rounded-full"></div>
                                    <span class="text-sm">شهادات جودة معتمدة</span>
                                </div>
                                <div class="flex items-center gap-3 text-white/90">
                                    <div class="w-1.5 h-1.5 bg-brand-orange rounded-full"></div>
                                    <span class="text-sm">توصيل سريع وآمن</span>
                                </div>
                            </div>

                            <!-- CTA Button -->
                            <button
                                class="mt-6 inline-flex items-center gap-3 bg-white hover:bg-brand-orange text-slate-900 hover:text-white px-8 py-4 rounded-full font-bold transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                                <span>اكتشف المزيد</span>
                                <svg class="w-5 h-5 rtl:rotate-180 group-hover:translate-x-1 transition-transform"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Other Services (Right) - 3 Cards Stacked -->
                <div class="space-y-8">
                    <!-- Service 2 -->
                    <div class="group scroll-reveal" style="transition-delay: 100ms;">
                        <div
                            class="flex flex-col sm:flex-row gap-6 bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-brand-orange/20 cursor-pointer">
                            <!-- Image -->
                            <div class="sm:w-48 h-48 sm:h-auto flex-shrink-0 relative overflow-hidden rounded-xl">
                                <img src="{{ $contents['services']['image3'] ?? '/images/warehouse.jpg' }}"
                                    alt="الخدمات اللوجستية"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                                <!-- Icon Overlay -->
                                <div
                                    class="absolute top-4 right-4 w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 flex flex-col justify-center">
                                <span
                                    class="inline-block px-3 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded-full mb-3 w-fit">
                                    خدمات لوجستية
                                </span>
                                <h3
                                    class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">
                                    الخدمات اللوجستية
                                </h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    حلول تخزين وتوزيع ذكية وفعالة لضمان وصول منتجاتكم في الوقت المحدد.
                                </p>
                                <div
                                    class="flex items-center gap-2 text-blue-600 font-bold text-sm group-hover:gap-3 transition-all">
                                    <span>معرفة المزيد</span>
                                    <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="group scroll-reveal" style="transition-delay: 200ms;">
                        <div
                            class="flex flex-col sm:flex-row gap-6 bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-brand-orange/20 cursor-pointer">
                            <!-- Image -->
                            <div class="sm:w-48 h-48 sm:h-auto flex-shrink-0 relative overflow-hidden rounded-xl">
                                <img src="{{ $contents['services']['image2'] ?? '/images/products-2.jpg' }}"
                                    alt="الاستيراد والتصدير"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent"></div>
                                <!-- Icon Overlay -->
                                <div
                                    class="absolute top-4 right-4 w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 flex flex-col justify-center">
                                <span
                                    class="inline-block px-3 py-1 bg-green-50 text-green-600 text-xs font-bold rounded-full mb-3 w-fit">
                                    تجارة دولية
                                </span>
                                <h3
                                    class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-green-600 transition-colors">
                                    الاستيراد والتصدير
                                </h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    ربط الأسواق المحلية بالأسواق العالمية من خلال شبكة واسعة من الشركاء.
                                </p>
                                <div
                                    class="flex items-center gap-2 text-green-600 font-bold text-sm group-hover:gap-3 transition-all">
                                    <span>معرفة المزيد</span>
                                    <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="group scroll-reveal" style="transition-delay: 300ms;">
                        <div
                            class="flex flex-col sm:flex-row gap-6 bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-brand-orange/20 cursor-pointer">
                            <!-- Image -->
                            <div class="sm:w-48 h-48 sm:h-auto flex-shrink-0 relative overflow-hidden rounded-xl">
                                <img src="{{ $contents['services']['image4'] ?? '/images/showroom.jpg' }}"
                                    alt="تجهيز المعارض"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                                <!-- Icon Overlay -->
                                <div
                                    class="absolute top-4 right-4 w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 flex flex-col justify-center">
                                <span
                                    class="inline-block px-3 py-1 bg-purple-50 text-purple-600 text-xs font-bold rounded-full mb-3 w-fit">
                                    حلول احترافية
                                </span>
                                <h3
                                    class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition-colors">
                                    تجهيز المعارض
                                </h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    تصميم وتنفيذ أجنحة عرض احترافية بأحدث التقنيات والمعايير العالمية.
                                </p>
                                <div
                                    class="flex items-center gap-2 text-purple-600 font-bold text-sm group-hover:gap-3 transition-all">
                                    <span>معرفة المزيد</span>
                                    <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <!-- Partners Section -->
    <section id="partners" class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-3xl animate-pulse">
        </div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tr from-orange-500/10 to-pink-500/10 rounded-full blur-3xl animate-pulse"
            style="animation-delay: 1s;"></div>

        <!-- Floating Shapes -->
        <div class="absolute top-20 right-20 w-20 h-20 border-2 border-brand-orange/20 rounded-full animate-bounce"
            style="animation-duration: 3s;"></div>
        <div class="absolute bottom-40 left-40 w-16 h-16 border-2 border-blue-500/20 rounded-xl animate-spin"
            style="animation-duration: 8s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <div
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-50 to-pink-50 px-4 py-2 rounded-full border border-brand-orange/20 mb-4">
                    <svg class="w-4 h-4 text-brand-orange" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="text-brand-orange font-bold text-sm tracking-wider uppercase">شركاؤنا</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">
                    نفخر بشراكتنا مع الأفضل
                </h2>
                <div class="flex items-center justify-center gap-2 mb-6">
                    <div class="w-12 h-1 bg-gradient-to-r from-brand-orange to-pink-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-brand-orange rounded-full"></div>
                    <div class="w-12 h-1 bg-gradient-to-r from-pink-500 to-brand-orange rounded-full"></div>
                </div>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto leading-relaxed">
                    نتعاون مع أفضل العلامات التجارية العالمية والمحلية لضمان تقديم منتجات عالية الجودة لعملائنا الكرام
                </p>
            </div>

            <!-- Partners Grid with Enhanced Cards -->
            <div id="partnersGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Loading State -->
                <div class="col-span-full text-center py-16">
                    <div class="relative inline-flex items-center justify-center">
                        <!-- Outer Ring -->
                        <div
                            class="w-16 h-16 border-4 border-brand-orange/20 border-t-brand-orange rounded-full animate-spin">
                        </div>
                        <!-- Inner Pulse -->
                        <div class="absolute w-8 h-8 bg-brand-orange/20 rounded-full animate-ping"></div>
                    </div>
                    <p class="text-slate-500 mt-4 font-medium">جاري تحميل الشركاء...</p>
                </div>
            </div>

            <!-- Trust Badge -->
            <div class="mt-16 text-center scroll-reveal">
                <div
                    class="inline-flex items-center gap-3 bg-white px-6 py-4 rounded-2xl shadow-lg border border-gray-100">
                    <div class="flex -space-x-2">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-orange-400 to-pink-500 flex items-center justify-center text-white font-bold text-sm border-2 border-white shadow-md">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center text-white font-bold text-sm border-2 border-white shadow-md">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center text-white font-bold text-sm border-2 border-white shadow-md">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-slate-900 font-bold text-sm">شراكات موثوقة</p>
                        <p class="text-slate-500 text-xs">نعمل مع أفضل الأسماء في السوق</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Branches Section -->

    <!-- Branches Section -->
    <section id="branches"
        class="py-24 bg-gradient-to-br from-slate-50 via-white to-gray-50 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-bl from-brand-orange/5 via-pink-500/5 to-transparent rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-tr from-blue-500/5 via-purple-500/5 to-transparent rounded-full blur-3xl">
        </div>

        <!-- Floating Decorative Elements -->
        <div class="absolute top-32 left-20 w-24 h-24 border-2 border-brand-orange/10 rounded-full animate-pulse"
            style="animation-duration: 4s;"></div>
        <div class="absolute bottom-32 right-32 w-16 h-16 bg-gradient-to-br from-brand-orange/10 to-pink-500/10 rounded-lg rotate-45 animate-bounce"
            style="animation-duration: 5s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <div
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-50 via-pink-50 to-orange-50 px-4 py-2 rounded-full border border-brand-orange/20 mb-4 shadow-sm">
                    <svg class="w-4 h-4 text-brand-orange animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-brand-orange font-bold text-sm tracking-wider uppercase">توسعنا</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">
                    فروعنا في المملكة
                </h2>
                <div class="flex items-center justify-center gap-2 mb-6">
                    <div class="w-12 h-1 bg-gradient-to-r from-brand-orange to-pink-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-brand-orange rounded-full animate-pulse"></div>
                    <div class="w-12 h-1 bg-gradient-to-r from-pink-500 to-brand-orange rounded-full"></div>
                </div>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto leading-relaxed">
                    انتشار واسع في مختلف مناطق المملكة لخدمتكم بشكل أفضل وأسرع
                </p>
            </div>

            <!-- Branches Grid -->
            <div id="branchesGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Loading State -->
                <div class="col-span-full text-center py-16">
                    <div class="relative inline-flex items-center justify-center">
                        <!-- Outer Ring -->
                        <div
                            class="w-16 h-16 border-4 border-brand-orange/20 border-t-brand-orange rounded-full animate-spin">
                        </div>
                        <!-- Middle Ring -->
                        <div class="absolute w-12 h-12 border-4 border-pink-500/20 border-b-pink-500 rounded-full animate-spin"
                            style="animation-direction: reverse; animation-duration: 1.5s;"></div>
                        <!-- Inner Pulse -->
                        <div class="absolute w-6 h-6 bg-brand-orange/20 rounded-full animate-ping"></div>
                    </div>
                    <p class="text-slate-500 mt-6 font-medium">جاري تحميل الفروع...</p>
                </div>
            </div>

            <!-- Map CTA -->
            <div class="mt-16 text-center scroll-reveal">
                <div
                    class="inline-flex flex-col sm:flex-row items-center gap-4 bg-gradient-to-r from-orange-50 via-pink-50 to-orange-50 px-8 py-6 rounded-2xl border border-brand-orange/20 shadow-lg">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-br from-brand-orange to-pink-500 flex items-center justify-center shadow-lg shadow-orange-500/30">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-slate-900 font-bold text-base">ابحث عن أقرب فرع إليك</p>
                            <p class="text-slate-600 text-sm">نحن قريبون منك دائماً</p>
                        </div>
                    </div>
                    <button
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-brand-orange to-pink-500 hover:from-pink-500 hover:to-brand-orange text-white px-6 py-3 rounded-full font-bold text-sm transition-all shadow-md hover:shadow-xl transform hover:-translate-y-0.5">
                        <span>عرض على الخريطة</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-slate-900 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-white space-y-8">
                    <div>
                        <h4 class="text-brand-orange font-bold text-sm tracking-wider uppercase mb-2">تواصل معنا</h4>
                        <h2 class="text-4xl font-bold mb-4 text-white">نحن هنا لمساعدتك</h2>
                        <p class="text-gray-400 text-lg">فريقنا جاهز للإجابة على جميع استفساراتكم وتقديم الدعم اللازم
                            لنجاح أعمالكم.</p>
                    </div>

                    <div class="space-y-6">
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                            <div
                                class="w-12 h-12 rounded-lg bg-brand-orange flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1 text-white">اتصل بنا</h3>
                                <p class="text-gray-400" dir="ltr">
                                    {{ $contents['contact']['phone'] ?? '+966 11 234 5678' }}</p>
                                <p class="text-gray-500 text-sm mt-1">متاح من 8 صباحاً - 5 مساءً</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                            <div
                                class="w-12 h-12 rounded-lg bg-brand-orange flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1 text-white">البريد الإلكتروني</h3>
                                <p class="text-gray-400">
                                    {{ $contents['contact']['email'] ?? 'info@mahasinalsharq.com' }}</p>
                                <p class="text-gray-500 text-sm mt-1">نرد خلال 24 ساعة</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-2xl">
                    <form id="contactForm" class="space-y-6" onsubmit="submitContactForm(event)">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">الاسم الكامل</label>
                                <input type="text" name="name" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-2 focus:ring-orange-100 outline-none transition-all bg-gray-50 focus:bg-white"
                                    placeholder="الاسم">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">رقم الجوال</label>
                                <input type="tel" name="phone" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-2 focus:ring-orange-100 outline-none transition-all bg-gray-50 focus:bg-white"
                                    placeholder="05xxxxxxxx">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">الرسالة</label>
                            <textarea name="message" required rows="4"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-2 focus:ring-orange-100 outline-none transition-all bg-gray-50 focus:bg-white"
                                placeholder="كيف يمكننا خدمتك؟"></textarea>
                        </div>
                        <button type="submit" id="submitBtn"
                            class="w-full py-4 bg-brand-orange hover:bg-orange-700 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 flex justify-center items-center gap-2">
                            <span>إرسال الرسالة</span>
                            <svg id="loadingIcon" class="hidden w-5 h-5 animate-spin" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </button>
                        <div id="formMessage" class="hidden text-center p-3 rounded-lg text-sm font-bold"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 text-slate-400 py-16 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <img src="{{ asset('images/logo.png') }}" alt="محاسن الشرق"
                        class="h-16 w-auto brightness-0 invert mb-6 opacity-90">
                    <p class="max-w-sm leading-relaxed text-slate-400">
                        شركة محاسن الشرق، ريادة في عالم التجارة والتوزيع. نلتزم بأعلى معايير الجودة والمصداقية لخدمة
                        عملائنا في المملكة والمنطقة.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">روابط سريعة</h4>
                    <ul class="space-y-4">
                        <li><a href="#home"
                                class="hover:text-brand-orange transition-colors flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>الرئيسية</a></li>
                        <li><a href="#about"
                                class="hover:text-brand-orange transition-colors flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>من نحن</a></li>
                        <li><a href="#services"
                                class="hover:text-brand-orange transition-colors flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>المنتجات</a></li>
                        <li><a href="#contact"
                                class="hover:text-brand-orange transition-colors flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>اتصل بنا</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">تواصل معنا</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-brand-orange flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>الرياض، المملكة العربية السعودية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-brand-orange flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>info@mahasinalsharq.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-brand-orange flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span dir="ltr">+966 11 234 5678</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t border-slate-900 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-500">
                <p>&copy; 2025 شركة محاسن الشرق. جميع الحقوق محفوظة.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition-colors">سياسة الخصوصية</a>
                    <a href="#" class="hover:text-white transition-colors">الشروط والأحكام</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Contact Form Submission
        function submitContactForm(event) {
            event.preventDefault();
            const form = event.target;
            const submitBtn = document.getElementById('submitBtn');
            const loadingIcon = document.getElementById('loadingIcon');
            const formMessage = document.getElementById('formMessage');

            // Loading state
            submitBtn.disabled = true;
            loadingIcon.classList.remove('hidden');
            formMessage.classList.add('hidden');

            const formData = new FormData(form);

            fetch('/send-message', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    formMessage.classList.remove('hidden');
                    if (data.success) {
                        formMessage.className =
                            'text-center p-3 rounded-lg text-sm font-bold bg-green-100 text-green-700';
                        formMessage.textContent = data.message;
                        form.reset();
                    } else {
                        throw new Error(data.message || 'حدث خطأ ما');
                    }
                })
                .catch(error => {
                    formMessage.classList.remove('hidden');
                    formMessage.className = 'text-center p-3 rounded-lg text-sm font-bold bg-red-100 text-red-700';
                    formMessage.textContent = 'عذراً، حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى.';
                    console.error('Error:', error);
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    loadingIcon.classList.add('hidden');
                });
        }

        // Scroll Reveal Animation
        document.addEventListener('DOMContentLoaded', function() {
            const revealElements = document.querySelectorAll('.scroll-reveal');

            const revealOnScroll = () => {
                revealElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (elementTop < windowHeight - 100) {
                        element.classList.add('revealed');
                    }
                });
            };

            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Initial check
        });

        // Animated Counters
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            let animated = false;

            const animateCounter = (counter) => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                updateCounter();
            };

            const checkCounters = () => {
                if (animated) return;

                counters.forEach(counter => {
                    const rect = counter.getBoundingClientRect();
                    const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

                    if (isVisible && !counter.classList.contains('animated')) {
                        animateCounter(counter);
                        counter.classList.add('animated');
                        animated = true;
                    }
                });
            };

            window.addEventListener('scroll', checkCounters);
            checkCounters(); // Initial check
        }

        // Initialize counters on load
        document.addEventListener('DOMContentLoaded', animateCounters);

        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuOpenIcon = document.getElementById('menuOpenIcon');
            const menuCloseIcon = document.getElementById('menuCloseIcon');

            mobileMenu.classList.toggle('hidden');
            menuOpenIcon.classList.toggle('hidden');
            menuCloseIcon.classList.toggle('hidden');
        }

        // Navbar Background on Scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md', 'bg-white/95');
                navbar.classList.remove('bg-white/90');
            } else {
                navbar.classList.remove('shadow-md', 'bg-white/95');
                navbar.classList.add('bg-white/90');
            }
        });

        // Load Partners
        function loadPartners() {
            const grid = document.getElementById('partnersGrid');
            const noPartners = document.createElement('div');
            noPartners.className = 'col-span-full text-center py-16';
            noPartners.innerHTML = `
                <div class="inline-flex flex-col items-center gap-4">
                    <div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center">
                        <svg class="w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </div>
                    <p class="text-slate-500 font-medium">لا توجد شركاء مضافة حالياً</p>
                </div>
            `;
            grid.innerHTML = '';

            fetch('/api/partners')
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        grid.appendChild(noPartners);
                    } else {
                        data.forEach((partner, index) => {
                            const card = document.createElement('div');
                            card.className = 'group scroll-reveal revealed';
                            card.style.transitionDelay = `${index * 50}ms`;

                            card.innerHTML = `
                                <div class="relative h-full bg-white rounded-2xl p-6 border border-gray-100 hover:border-brand-orange/30 transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                                    <!-- Gradient Overlay on Hover -->
                                    <div class="absolute inset-0 bg-gradient-to-br from-brand-orange/5 to-pink-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                    
                                    <!-- Content -->
                                    <div class="relative flex flex-col items-center justify-center h-full min-h-[160px]">
                                        <!-- Logo Container -->
                                        <div class="w-full h-20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500">
                                            <img src="${partner.logo}" 
                                                alt="${partner.name}" 
                                                class="max-h-full max-w-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500"
                                                onerror="this.src='/images/placeholder-logo.png'">
                                        </div>
                                        
                                        <!-- Partner Name -->
                                        <h3 class="text-sm font-bold text-slate-700 text-center group-hover:text-brand-orange transition-colors duration-300 line-clamp-2">
                                            ${partner.name}
                                        </h3>
                                        
                                        ${partner.website ? `
                                                                                    <!-- Website Link -->
                                                                                    <a href="${partner.website}" 
                                                                                        target="_blank" 
                                                                                        rel="noopener noreferrer"
                                                                                        class="mt-3 inline-flex items-center gap-1 text-xs text-brand-orange opacity-0 group-hover:opacity-100 transition-all duration-300 hover:gap-2">
                                                                                        <span>زيارة الموقع</span>
                                                                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                                                        </svg>
                                                                                    </a>
                                                                                ` : ''}
                                    </div>
                                    
                                    <!-- Corner Accent -->
                                    <div class="absolute top-0 right-0 w-12 h-12 bg-gradient-to-br from-brand-orange/10 to-transparent rounded-tr-2xl rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                </div>
                            `;

                            grid.appendChild(card);
                        });
                    }
                })
                .catch(error => {
                    console.error('Error loading partners:', error);
                    grid.innerHTML = `
                        <div class="col-span-full text-center py-16">
                            <div class="inline-flex flex-col items-center gap-4">
                                <div class="w-20 h-20 rounded-full bg-red-50 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-red-500 font-medium">حدث خطأ أثناء تحميل الشركاء</p>
                            </div>
                        </div>
                    `;
                });
        }
        // Load Branches
        function loadBranchesOnDashboardpage() {
            const grid = document.getElementById('branchesGrid');
            if (!grid) {
                console.error('branchesGrid element not found');
                return;
            }

            console.log('Loading branches...');

            fetch('/api/branches')
                .then(response => {
                    console.log('Response status:', response.status);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Branches data:', data);

                    if (!data || data.length === 0) {
                        grid.innerHTML =
                            '<div class="col-span-full text-center py-12 text-slate-500">لا توجد فروع متاحة حالياً</div>';
                        return;
                    }

                    let cardsHTML = '';
                    data.forEach(branch => {
                        cardsHTML += `
                            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1 group scroll-reveal revealed">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-brand-orange mb-6 group-hover:bg-brand-orange group-hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 mb-2">${branch.name}</h3>
                                <p class="text-slate-500 mb-6">${branch.region}</p>
                                <a href="${branch.map_url}" target="_blank" class="inline-flex items-center gap-2 text-brand-orange font-bold hover:text-orange-700 transition-colors">
                                    <span>عرض الموقع على الخريطة</span>
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        `;
                    });

                    grid.innerHTML = cardsHTML;
                    console.log('Branches rendered successfully!');
                })
                .catch(error => {
                    console.error('Error loading branches:', error);
                    grid.innerHTML =
                        '<div class="col-span-full text-center py-12 text-red-500">حدث خطأ في تحميل الفروع</div>';
                });
        }

        // Load branches and partners when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                loadBranchesOnDashboardpage();
                loadPartners();
            });
        } else {
            loadBranchesOnDashboardpage();
            loadPartners();
        }
    </script>
</body>

</html>
