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
        body { font-family: 'Tajawal', sans-serif; }
        html { scroll-behavior: smooth; }
        .scroll-reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .scroll-reveal.revealed { opacity: 1; transform: translateY(0); }
        
        /* Custom Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        .animation-delay-200 { animation-delay: 0.2s; }
        .animation-delay-400 { animation-delay: 0.4s; }
        .animation-delay-600 { animation-delay: 0.6s; }
    </style>
</head>
<body class="font-sans antialiased bg-white text-slate-800 selection:bg-brand-orange selection:text-white overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-sm border-b border-gray-100 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="محاسن الشرق" class="h-12 w-auto object-contain">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#home" class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">الرئيسية</a>
                    <a href="#about" class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">من نحن</a>
                    <a href="#services" class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">منتجاتنا</a>
                    <a href="#contact" class="text-slate-600 hover:text-brand-orange font-medium text-base transition-colors">تواصل معنا</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="#contact" class="bg-brand-orange hover:bg-orange-700 text-white px-6 py-2.5 rounded-full font-bold text-sm transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        اطلب عرض سعر
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button class="text-slate-600 hover:text-brand-orange focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <img src="{{ $contents['hero']['image'] ?? '/images/showroom.jpg' }}" alt="Hero Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/60 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="space-y-6 max-w-4xl mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 text-white text-sm font-medium backdrop-blur-sm animate-fade-in-up">
                    {{ $contents['hero']['subtitle'] ?? 'الثقة والجودة' }}
                </span>
                <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight tracking-tight animate-fade-in-up animation-delay-200">
                    {{ $contents['hero']['title'] ?? 'جودة تستحق الثقة' }}
                </h1>
                <p class="text-lg md:text-xl text-gray-200 leading-relaxed max-w-2xl mx-auto animate-fade-in-up animation-delay-400">
                    {{ $contents['hero']['description'] ?? 'نلتزم بتقديم أفضل المنتجات الغذائية والاستهلاكية بأعلى معايير الجودة العالمية لتلبية احتياجاتكم اليومية.' }}
                </p>
                <div class="pt-8 flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-600">
                    <a href="#services" class="bg-brand-orange hover:bg-orange-600 text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-lg hover:shadow-orange-500/30 transform hover:-translate-y-1">
                        استكشف منتجاتنا
                    </a>
                    <a href="#about" class="bg-transparent hover:bg-white/10 text-white border border-white px-8 py-4 rounded-full font-bold text-lg transition-all backdrop-blur-sm">
                        من نحن
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce text-white/50">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">قيمنا الراسخة</h2>
                <div class="w-20 h-1 bg-brand-orange mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="group p-8 bg-gray-50 rounded-2xl hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 scroll-reveal">
                    <div class="w-14 h-14 bg-orange-100 text-brand-orange rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">جودة عالية</h3>
                    <p class="text-slate-600 leading-relaxed">نضمن لكم منتجات مختارة بعناية فائقة لتلبي أعلى معايير الجودة العالمية.</p>
                </div>

                <!-- Value 2 -->
                <div class="group p-8 bg-gray-50 rounded-2xl hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 scroll-reveal" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">ابتكار مستمر</h3>
                    <p class="text-slate-600 leading-relaxed">نسعى دائماً لتطوير خدماتنا وحلولنا اللوجستية لمواكبة تطلعاتكم.</p>
                </div>

                <!-- Value 3 -->
                <div class="group p-8 bg-gray-50 rounded-2xl hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 scroll-reveal" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">مسؤولية مجتمعية</h3>
                    <p class="text-slate-600 leading-relaxed">نلتزم بدعم المجتمع والمساهمة الفعالة في تحقيق التنمية المستدامة.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative scroll-reveal">
                    <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-orange rounded-3xl"></div>
                    <img src="{{ $contents['about']['image'] ?? '/images/warehouse.jpg' }}" alt="About Us" class="relative rounded-3xl shadow-2xl w-full object-cover h-[500px] z-10">
                    <!-- Experience Badge -->
                    <div class="absolute bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl z-20 hidden md:block">
                        <p class="text-4xl font-bold text-brand-orange mb-1">+4</p>
                        <p class="text-slate-600 font-medium text-sm">أعوام من الخبرة</p>
                    </div>
                </div>
                <div class="space-y-8 scroll-reveal">
                    <div>
                        <h4 class="text-brand-orange font-bold text-sm tracking-wider uppercase mb-2">من نحن</h4>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">{{ $contents['about']['title'] ?? 'شريككم الموثوق في عالم التجارة' }}</h2>
                    </div>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        {{ $contents['about']['description'] ?? 'تأسست شركة محاسن الشرق برؤية طموحة لتكون الرائدة في مجال توريد وتوزيع المنتجات الاستهلاكية والغذائية. نحن نؤمن بأن الجودة هي أساس النجاح، ولذلك نحرص على اختيار أفضل المنتجات من أرقى المصادر العالمية.' }}
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">تغطية شاملة للمملكة</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">فريق عمل متخصص</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">شراكات عالمية</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
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
    <section id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <h4 class="text-brand-orange font-bold text-sm tracking-wider uppercase mb-2">خدماتنا</h4>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">{{ $contents['services']['title'] ?? 'حلول متكاملة لأعمالكم' }}</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">نقدم مجموعة شاملة من المنتجات والخدمات المصممة خصيصاً لتلبية احتياجات السوق المتنامية.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="group relative overflow-hidden rounded-2xl cursor-pointer scroll-reveal">
                    <div class="aspect-[4/5] w-full">
                        <img src="{{ $contents['services']['image1'] ?? '/images/products-1.jpg' }}" alt="المواد الغذائية" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-2">المواد الغذائية</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">توريد أجود أنواع المواد الغذائية الأساسية والمعلبات.</p>
                        <span class="inline-flex items-center gap-2 text-brand-orange text-sm font-bold mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-200">
                            المزيد
                            <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group relative overflow-hidden rounded-2xl cursor-pointer scroll-reveal" style="transition-delay: 100ms;">
                    <div class="aspect-[4/5] w-full">
                        <img src="{{ $contents['services']['image3'] ?? '/images/warehouse.jpg' }}" alt="الخدمات اللوجستية" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-2">الخدمات اللوجستية</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">حلول تخزين وتوزيع ذكية وفعالة.</p>
                        <span class="inline-flex items-center gap-2 text-brand-orange text-sm font-bold mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-200">
                            المزيد
                            <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group relative overflow-hidden rounded-2xl cursor-pointer scroll-reveal" style="transition-delay: 200ms;">
                    <div class="aspect-[4/5] w-full">
                        <img src="{{ $contents['services']['image2'] ?? '/images/products-2.jpg' }}" alt="الاستيراد والتصدير" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-2">الاستيراد والتصدير</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">ربط الأسواق المحلية بالأسواق العالمية.</p>
                        <span class="inline-flex items-center gap-2 text-brand-orange text-sm font-bold mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-200">
                            المزيد
                            <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="group relative overflow-hidden rounded-2xl cursor-pointer scroll-reveal" style="transition-delay: 300ms;">
                    <div class="aspect-[4/5] w-full">
                        <img src="{{ $contents['services']['image4'] ?? '/images/showroom.jpg' }}" alt="تجهيز المعارض" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-2">تجهيز المعارض</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">تصميم وتنفيذ أجنحة عرض احترافية.</p>
                        <span class="inline-flex items-center gap-2 text-brand-orange text-sm font-bold mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-200">
                            المزيد
                            <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="py-24 bg-gray-50 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-500/5 rounded-full blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 scroll-reveal">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">شركاؤنا</span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mt-2 mb-4">نفخر بشراكتنا مع الأفضل</h2>
                <div class="w-24 h-1.5 bg-brand-orange mx-auto rounded-full"></div>
                <p class="text-slate-600 mt-4 max-w-2xl mx-auto">نعمل مع شركاء موثوقين لتقديم أفضل المنتجات والخدمات لعملائنا</p>
            </div>

            <div id="partnersGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Partners will be loaded here -->
                <div class="col-span-full text-center py-12">
                    <svg class="animate-spin h-8 w-8 text-brand-orange mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Branches Section -->

    <section id="branches" class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16 scroll-reveal">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">توسعنا</span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mt-2 mb-4">فروعنا في المملكة</h2>
                <div class="w-24 h-1.5 bg-brand-orange mx-auto rounded-full"></div>
            </div>

            <div id="branchesGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Branches will be loaded here -->
                <div class="col-span-full text-center py-12">
                    <svg class="animate-spin h-8 w-8 text-brand-orange mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-slate-900 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-white space-y-8">
                    <div>
                        <h4 class="text-brand-orange font-bold text-sm tracking-wider uppercase mb-2">تواصل معنا</h4>
                        <h2 class="text-4xl font-bold mb-4 text-white">نحن هنا لمساعدتك</h2>
                        <p class="text-gray-400 text-lg">فريقنا جاهز للإجابة على جميع استفساراتكم وتقديم الدعم اللازم لنجاح أعمالكم.</p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                            <div class="w-12 h-12 rounded-lg bg-brand-orange flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1 text-white">اتصل بنا</h3>
                                <p class="text-gray-400" dir="ltr">{{ $contents['contact']['phone'] ?? '+966 11 234 5678' }}</p>
                                <p class="text-gray-500 text-sm mt-1">متاح من 8 صباحاً - 5 مساءً</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                            <div class="w-12 h-12 rounded-lg bg-brand-orange flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1 text-white">البريد الإلكتروني</h3>
                                <p class="text-gray-400">{{ $contents['contact']['email'] ?? 'info@mahasinalsharq.com' }}</p>
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
                                <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-2 focus:ring-orange-100 outline-none transition-all bg-gray-50 focus:bg-white" placeholder="الاسم">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">رقم الجوال</label>
                                <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-2 focus:ring-orange-100 outline-none transition-all bg-gray-50 focus:bg-white" placeholder="05xxxxxxxx">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">الرسالة</label>
                            <textarea name="message" required rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-2 focus:ring-orange-100 outline-none transition-all bg-gray-50 focus:bg-white" placeholder="كيف يمكننا خدمتك؟"></textarea>
                        </div>
                        <button type="submit" id="submitBtn" class="w-full py-4 bg-brand-orange hover:bg-orange-700 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 flex justify-center items-center gap-2">
                            <span>إرسال الرسالة</span>
                            <svg id="loadingIcon" class="hidden w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
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
                    <img src="{{ asset('images/logo.png') }}" alt="محاسن الشرق" class="h-16 w-auto brightness-0 invert mb-6 opacity-90">
                    <p class="max-w-sm leading-relaxed text-slate-400">
                        شركة محاسن الشرق، ريادة في عالم التجارة والتوزيع. نلتزم بأعلى معايير الجودة والمصداقية لخدمة عملائنا في المملكة والمنطقة.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">روابط سريعة</h4>
                    <ul class="space-y-4">
                        <li><a href="#home" class="hover:text-brand-orange transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>الرئيسية</a></li>
                        <li><a href="#about" class="hover:text-brand-orange transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>من نحن</a></li>
                        <li><a href="#services" class="hover:text-brand-orange transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>المنتجات</a></li>
                        <li><a href="#contact" class="hover:text-brand-orange transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-orange"></span>اتصل بنا</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">تواصل معنا</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-brand-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>الرياض، المملكة العربية السعودية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-brand-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>info@mahasinalsharq.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-brand-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span dir="ltr">+966 11 234 5678</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-900 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-500">
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
                    formMessage.className = 'text-center p-3 rounded-lg text-sm font-bold bg-green-100 text-green-700';
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
            noPartners.className = 'col-span-full text-center py-12 text-slate-500';
            noPartners.textContent = 'لا توجد شركاء مضافة';
            grid.innerHTML = '';
            fetch('/api/partners')
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        grid.appendChild(noPartners);
                    } else {
                        data.forEach(partner => {
                            const card = document.createElement('div');
                            card.className = 'bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition-shadow';
                            const img = document.createElement('img');
                            img.src = partner.logo;
                            img.alt = partner.name;
                            img.className = 'h-16 w-auto mb-4 object-contain';
                            const name = document.createElement('h3');
                            name.className = 'text-lg font-bold text-slate-800 mb-2';
                            name.textContent = partner.name;
                            card.appendChild(img);
                            card.appendChild(name);
                            if (partner.website) {
                                const link = document.createElement('a');
                                link.href = partner.website;
                                link.target = '_blank';
                                link.rel = 'noopener';
                                link.className = 'text-brand-orange hover:underline';
                                link.textContent = ' ';
                                card.appendChild(link);
                            }
                            grid.appendChild(card);
                        });
                    }
                })
                .catch(error => {
                    console.error('Error loading partners:', error);
                    grid.innerHTML = '<div class="col-span-full text-center py-12 text-red-500">حدث خطأ أثناء تحميل الشركاء</div>';
                });
        }
        // Load Branches
        function loadBranchesOnHomepage() {
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
                        grid.innerHTML = '<div class="col-span-full text-center py-12 text-slate-500">لا توجد فروع متاحة حالياً</div>';
                        return;
                    }

                    let cardsHTML = '';
                    data.forEach(branch => {
                        cardsHTML += `
                            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1 group scroll-reveal">
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
                    grid.innerHTML = '<div class="col-span-full text-center py-12 text-red-500">حدث خطأ في تحميل الفروع</div>';
                });
        }

        // Load branches and partners when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                loadBranchesOnHomepage();
                loadPartners();
            });
        } else {
            loadBranchesOnHomepage();
            loadPartners();
        }
    </script>
</body>
</html>
