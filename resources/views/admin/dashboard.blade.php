<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>لوحة التحكم - محاسن الشرق</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Tajawal', sans-serif; }
        .sidebar-link.active { background-color: #FFF7ED; color: #F26522; border-right: 4px solid #F26522; }
        .content-section { display: none; }
        .content-section.active { display: block; animation: fadeIn 0.3s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-50 text-slate-800 h-screen overflow-hidden flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-l border-gray-200 flex flex-col h-full shadow-sm z-10">
        <div class="p-6 border-b border-gray-100 flex items-center justify-center">
            <img src="{{ asset('images/logo.png') }}" alt="محاسن الشرق" class="h-10 w-auto">
        </div>
        
        <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-1">
            <button onclick="showSection('hero')" id="nav-hero" class="sidebar-link w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-gray-50 rounded-lg transition-all active">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="font-bold">الرئيسية (Hero)</span>
            </button>
            
            <button onclick="showSection('about')" id="nav-about" class="sidebar-link w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-gray-50 rounded-lg transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-bold">من نحن (About)</span>
            </button>
            
            <button onclick="showSection('services')" id="nav-services" class="sidebar-link w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-gray-50 rounded-lg transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span class="font-bold">المنتجات (Services)</span>
            </button>
            
            <button onclick="showSection('contact')" id="nav-contact" class="sidebar-link w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-gray-50 rounded-lg transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="font-bold">التواصل (Contact)</span>
            </button>
            
            <button onclick="showSection('branches'); loadBranches();" id="nav-branches" class="sidebar-link w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-gray-50 rounded-lg transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="font-bold">الفروع (Branches)</span>
            </button>
            
            <button onclick="showSection('messages'); loadMessages();" id="nav-messages" class="sidebar-link w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-gray-50 rounded-lg transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                <span class="font-bold">الرسائل الواردة</span>
            </button>
        </nav>

        <div class="p-4 border-t border-gray-200">
            <a href="/" target="_blank" class="flex items-center justify-center gap-2 w-full bg-slate-900 hover:bg-slate-800 text-white px-4 py-3 rounded-lg font-bold transition-all shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                عرض الموقع
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto bg-gray-50 p-8">
        
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-black text-slate-900 mb-2">إدارة المحتوى</h1>
                <p class="text-slate-500">قم بتحديث محتوى موقعك بسهولة ويسر</p>
            </div>
            
            <!-- Success Toast -->
            <div id="successMessage" class="hidden bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center gap-3 animate-bounce">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span id="successText" class="font-bold">تم الحفظ بنجاح</span>
            </div>
        </header>

        <!-- Hero Section Content -->
        <div id="hero" class="content-section active space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-brand-orange rounded-full"></span>
                        القسم الرئيسي (Hero)
                    </h2>
                </div>
                <div class="p-8 grid gap-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-slate-700">العنوان الرئيسي</label>
                            <div class="flex gap-2">
                                <input type="text" id="hero_title" value="{{ $contents['hero']['title'] ?? 'جودة تستحق' }}" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">
                                <button onclick="saveContent('hero', 'title', 'hero_title')" class="px-4 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-slate-700">العنوان الفرعي</label>
                            <div class="flex gap-2">
                                <input type="text" id="hero_subtitle" value="{{ $contents['hero']['subtitle'] ?? 'الثقة' }}" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">
                                <button onclick="saveContent('hero', 'subtitle', 'hero_subtitle')" class="px-4 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-slate-700">الوصف</label>
                        <div class="relative">
                            <textarea id="hero_description" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">{{ $contents['hero']['description'] ?? 'نلتزم بتقديم أفضل المنتجات الغذائية والاستهلاكية بأعلى معايير الجودة العالمية لتلبية احتياجاتكم اليومية.' }}</textarea>
                            <button onclick="saveContent('hero', 'description', 'hero_description')" class="absolute bottom-3 left-3 px-4 py-1.5 bg-brand-orange text-white rounded-lg hover:bg-orange-700 transition-colors text-sm font-bold">
                                حفظ التغييرات
                            </button>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4 border-t border-gray-100">
                        <label class="block text-sm font-bold text-slate-700">صورة الخلفية</label>
                        <div class="flex items-start gap-6">
                            @if(isset($contents['hero']['image']))
                            <div class="w-48 h-32 rounded-xl overflow-hidden shadow-md border border-gray-200 relative group">
                                <img src="{{ $contents['hero']['image'] }}" alt="Hero" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-white text-xs font-bold">الصورة الحالية</span>
                                </div>
                            </div>
                            @endif
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <input type="file" id="hero_image" accept="image/*" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange outline-none bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-brand-orange hover:file:bg-orange-100">
                                    <button onclick="uploadImage('hero', 'image', 'hero_image')" class="px-6 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-colors font-bold">
                                        رفع
                                    </button>
                                </div>
                                <p class="text-xs text-slate-400 mt-2">يفضل استخدام صورة عالية الدقة (1920x1080)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section Content -->
        <div id="about" class="content-section space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-brand-orange rounded-full"></span>
                        قسم من نحن (About)
                    </h2>
                </div>
                <div class="p-8 grid gap-8">
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-slate-700">العنوان</label>
                        <div class="flex gap-2">
                            <input type="text" id="about_title" value="{{ $contents['about']['title'] ?? 'شريككم الموثوق في عالم التجارة' }}" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">
                            <button onclick="saveContent('about', 'title', 'about_title')" class="px-4 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            </button>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-slate-700">الوصف</label>
                        <div class="relative">
                            <textarea id="about_description" rows="5" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">{{ $contents['about']['description'] ?? 'تأسست شركة محاسن الشرق برؤية طموحة لتكون الرائدة في مجال توريد وتوزيع المنتجات الاستهلاكية والغذائية.' }}</textarea>
                            <button onclick="saveContent('about', 'description', 'about_description')" class="absolute bottom-3 left-3 px-4 py-1.5 bg-brand-orange text-white rounded-lg hover:bg-orange-700 transition-colors text-sm font-bold">
                                حفظ التغييرات
                            </button>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4 border-t border-gray-100">
                        <label class="block text-sm font-bold text-slate-700">صورة القسم</label>
                        <div class="flex items-start gap-6">
                            @if(isset($contents['about']['image']))
                            <div class="w-48 h-32 rounded-xl overflow-hidden shadow-md border border-gray-200 relative group">
                                <img src="{{ $contents['about']['image'] }}" alt="About" class="w-full h-full object-cover">
                            </div>
                            @endif
                            <div class="flex-1">
                                <div class="flex gap-2">
                                    <input type="file" id="about_image" accept="image/*" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange outline-none bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-brand-orange hover:file:bg-orange-100">
                                    <button onclick="uploadImage('about', 'image', 'about_image')" class="px-6 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-colors font-bold">
                                        رفع
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section Content -->
        <div id="services" class="content-section space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-brand-orange rounded-full"></span>
                        قسم المنتجات (Services)
                    </h2>
                </div>
                <div class="p-8 grid gap-8">
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-slate-700">العنوان الرئيسي</label>
                        <div class="flex gap-2">
                            <input type="text" id="services_title" value="{{ $contents['services']['title'] ?? 'منتجاتنا وخدماتنا' }}" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">
                            <button onclick="saveContent('services', 'title', 'services_title')" class="px-4 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            </button>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 pt-4 border-t border-gray-100">
                        <div class="space-y-4">
                            <label class="block text-sm font-bold text-slate-700">صورة المنتج 1 (المواد الغذائية)</label>
                            <div class="flex gap-2">
                                <input type="file" id="service1_image" accept="image/*" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange outline-none bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-brand-orange hover:file:bg-orange-100">
                                <button onclick="uploadImage('services', 'image1', 'service1_image')" class="px-4 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-colors font-bold">
                                    رفع
                                </button>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <label class="block text-sm font-bold text-slate-700">صورة المنتج 2 (الخدمات اللوجستية)</label>
                            <div class="flex gap-2">
                                <input type="file" id="service3_image" accept="image/*" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange outline-none bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-brand-orange hover:file:bg-orange-100">
                                <button onclick="uploadImage('services', 'image3', 'service3_image')" class="px-4 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-colors font-bold">
                                    رفع
                                </button>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <label class="block text-sm font-bold text-slate-700">صورة المنتج 3 (الاستيراد والتصدير)</label>
                            <div class="flex gap-2">
                                <input type="file" id="service2_image" accept="image/*" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange outline-none bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-brand-orange hover:file:bg-orange-100">
                                <button onclick="uploadImage('services', 'image2', 'service2_image')" class="px-4 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-colors font-bold">
                                    رفع
                                </button>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <label class="block text-sm font-bold text-slate-700">صورة المنتج 4 (تجهيز المعارض)</label>
                            <div class="flex gap-2">
                                <input type="file" id="service4_image" accept="image/*" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange outline-none bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-brand-orange hover:file:bg-orange-100">
                                <button onclick="uploadImage('services', 'image4', 'service4_image')" class="px-4 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-colors font-bold">
                                    رفع
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section Content -->
        <div id="contact" class="content-section space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-brand-orange rounded-full"></span>
                        معلومات التواصل (Contact)
                    </h2>
                </div>
                <div class="p-8 grid gap-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-slate-700">رقم الهاتف</label>
                            <div class="flex gap-2">
                                <input type="text" id="contact_phone" value="{{ $contents['contact']['phone'] ?? '+966 11 234 5678' }}" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all" dir="ltr">
                                <button onclick="saveContent('contact', 'phone', 'contact_phone')" class="px-4 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-slate-700">البريد الإلكتروني</label>
                            <div class="flex gap-2">
                                <input type="email" id="contact_email" value="{{ $contents['contact']['email'] ?? 'info@mahasinalsharq.com' }}" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all" dir="ltr">
                                <button onclick="saveContent('contact', 'email', 'contact_email')" class="px-4 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-slate-700">العنوان</label>
                        <div class="flex gap-2">
                            <input type="text" id="contact_address" value="{{ $contents['contact']['address'] ?? 'شارع الملك فهد، حي العليا، الرياض، المملكة العربية السعودية' }}" class="flex-1 px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">
                            <button onclick="saveContent('contact', 'address', 'contact_address')" class="px-4 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Branches Section Content -->
        <div id="branches" class="content-section space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-brand-orange rounded-full"></span>
                        إضافة فرع جديد
                    </h2>
                </div>
                <div class="p-8">
                    <form onsubmit="addBranch(event)" class="grid md:grid-cols-3 gap-6 items-end">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-slate-700">اسم الفرع</label>
                            <input type="text" name="name" required placeholder="مثال: فرع الرياض" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-slate-700">المنطقة</label>
                            <input type="text" name="region" required placeholder="مثال: المنطقة الوسطى" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-slate-700">رابط الخريطة (Google Maps)</label>
                            <input type="url" name="map_url" required placeholder="https://maps.google.com/..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-orange focus:ring-4 focus:ring-orange-50 outline-none transition-all" dir="ltr">
                        </div>
                        <div class="md:col-span-3">
                            <button type="submit" class="w-full py-3 bg-brand-orange text-white rounded-xl hover:bg-orange-700 transition-colors font-bold shadow-lg hover:shadow-xl">
                                إضافة الفرع
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50 flex justify-between items-center">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-brand-orange rounded-full"></span>
                        قائمة الفروع
                    </h2>
                    <button onclick="loadBranches()" class="text-brand-orange hover:text-orange-700 font-bold text-sm flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        تحديث
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead class="bg-gray-50 text-slate-600 font-bold text-sm">
                            <tr>
                                <th class="p-4 border-b border-gray-100">اسم الفرع</th>
                                <th class="p-4 border-b border-gray-100">المنطقة</th>
                                <th class="p-4 border-b border-gray-100">رابط الخريطة</th>
                                <th class="p-4 border-b border-gray-100">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody id="branchesTableBody" class="text-slate-700">
                            <!-- Branches will be loaded here -->
                        </tbody>
                    </table>
                    <div id="noBranches" class="hidden p-8 text-center text-slate-500">
                        لا توجد فروع مضافة
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Section Content -->
        <div id="messages" class="content-section space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50 flex justify-between items-center">
                    <h2 class="text-xl font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-brand-orange rounded-full"></span>
                        الرسائل الواردة
                    </h2>
                    <button onclick="loadMessages()" class="text-brand-orange hover:text-orange-700 font-bold text-sm flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        تحديث
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead class="bg-gray-50 text-slate-600 font-bold text-sm">
                            <tr>
                                <th class="p-4 border-b border-gray-100">الاسم</th>
                                <th class="p-4 border-b border-gray-100">رقم الجوال</th>
                                <th class="p-4 border-b border-gray-100">الرسالة</th>
                                <th class="p-4 border-b border-gray-100">التاريخ</th>
                                <th class="p-4 border-b border-gray-100">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody id="messagesTableBody" class="text-slate-700">
                            <!-- Messages will be loaded here -->
                        </tbody>
                    </table>
                    <div id="noMessages" class="hidden p-8 text-center text-slate-500">
                        لا توجد رسائل جديدة
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        // Tab Navigation
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.content-section').forEach(el => el.classList.remove('active'));
            // Show target section
            document.getElementById(sectionId).classList.add('active');
            
            // Update sidebar active state
            document.querySelectorAll('.sidebar-link').forEach(el => el.classList.remove('active'));
            document.getElementById('nav-' + sectionId).classList.add('active');
        }

        // Load Branches
        function loadBranches() {
            const tbody = document.getElementById('branchesTableBody');
            const noBranches = document.getElementById('noBranches');
            
            tbody.innerHTML = '<tr><td colspan="4" class="p-8 text-center"><svg class="animate-spin h-8 w-8 text-brand-orange mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></td></tr>';

            fetch('/admin/branches')
                .then(response => response.json())
                .then(data => {
                    tbody.innerHTML = '';
                    if (data.length === 0) {
                        noBranches.classList.remove('hidden');
                    } else {
                        noBranches.classList.add('hidden');
                        data.forEach(branch => {
                            const row = `
                                <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                    <td class="p-4 font-bold">${branch.name}</td>
                                    <td class="p-4">${branch.region}</td>
                                    <td class="p-4 text-sm text-blue-500 truncate max-w-xs"><a href="${branch.map_url}" target="_blank" class="hover:underline">${branch.map_url}</a></td>
                                    <td class="p-4 flex gap-2">
                                        <button onclick="deleteBranch(${branch.id})" class="text-red-500 hover:text-red-700 p-2 rounded-lg hover:bg-red-50 transition-colors" title="حذف">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            `;
                            tbody.innerHTML += row;
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    tbody.innerHTML = '<tr><td colspan="4" class="p-4 text-center text-red-500">حدث خطأ أثناء تحميل الفروع</td></tr>';
                });
        }

        // Add Branch
        function addBranch(event) {
            event.preventDefault();
            const form = event.target;
            const btn = form.querySelector('button[type="submit"]');
            const originalContent = btn.innerHTML;
            
            btn.innerHTML = 'جاري الإضافة...';
            btn.disabled = true;

            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            fetch('/admin/branches', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showSuccess(data.message);
                    form.reset();
                    loadBranches();
                }
            })
            .catch(error => console.error('Error:', error))
            .finally(() => {
                btn.innerHTML = originalContent;
                btn.disabled = false;
            });
        }

        // Delete Branch
        function deleteBranch(id) {
            if (!confirm('هل أنت متأكد من حذف هذا الفرع؟')) return;

            fetch(`/admin/branches/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showSuccess('تم حذف الفرع بنجاح');
                    loadBranches();
                }
            })
            .catch(error => console.error('Error:', error));
        }

        // Get CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

        // Load Messages
        function loadMessages() {
            const tbody = document.getElementById('messagesTableBody');
            const noMessages = document.getElementById('noMessages');
            
            tbody.innerHTML = '<tr><td colspan="5" class="p-8 text-center"><svg class="animate-spin h-8 w-8 text-brand-orange mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></td></tr>';

            fetch('/admin/messages')
                .then(response => response.json())
                .then(data => {
                    tbody.innerHTML = '';
                    if (data.length === 0) {
                        noMessages.classList.remove('hidden');
                    } else {
                        noMessages.classList.add('hidden');
                        data.forEach(msg => {
                            const date = new Date(msg.created_at).toLocaleDateString('ar-SA');
                            const row = `
                                <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors ${msg.is_read ? 'opacity-75' : 'font-bold bg-orange-50/30'}">
                                    <td class="p-4">${msg.name}</td>
                                    <td class="p-4" dir="ltr">${msg.phone}</td>
                                    <td class="p-4 max-w-xs truncate" title="${msg.message}">${msg.message}</td>
                                    <td class="p-4 text-sm text-gray-500">${date}</td>
                                    <td class="p-4 flex gap-2">
                                        <button onclick="deleteMessage(${msg.id})" class="text-red-500 hover:text-red-700 p-2 rounded-lg hover:bg-red-50 transition-colors" title="حذف">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            `;
                            tbody.innerHTML += row;
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    tbody.innerHTML = '<tr><td colspan="5" class="p-4 text-center text-red-500">حدث خطأ أثناء تحميل الرسائل</td></tr>';
                });
        }

        // Delete Message
        function deleteMessage(id) {
            if (!confirm('هل أنت متأكد من حذف هذه الرسالة؟')) return;

            fetch(`/admin/messages/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showSuccess('تم حذف الرسالة بنجاح');
                    loadMessages();
                }
            })
            .catch(error => console.error('Error:', error));
        }

        // Save text content
        function saveContent(section, key, inputId) {
            const value = document.getElementById(inputId).value;
            const btn = document.querySelector(`button[onclick="saveContent('${section}', '${key}', '${inputId}')"]`);
            const originalContent = btn.innerHTML;
            
            // Loading state
            btn.innerHTML = '<svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
            btn.disabled = true;

            fetch('/admin/content/update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ section, key, value })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showSuccess(data.message);
                }
            })
            .catch(error => console.error('Error:', error))
            .finally(() => {
                btn.innerHTML = originalContent;
                btn.disabled = false;
            });
        }


        // Upload image
        function uploadImage(section, key, inputId) {
            const fileInput = document.getElementById(inputId);
            const file = fileInput.files[0];
            
            if (!file) {
                alert('الرجاء اختيار صورة');
                return;
            }

            const btn = document.querySelector(`button[onclick="uploadImage('${section}', '${key}', '${inputId}')"]`);
            const originalContent = btn.innerHTML;
            
            // Loading state
            btn.innerHTML = 'جاري الرفع...';
            btn.disabled = true;

            const formData = new FormData();
            formData.append('image', file);
            formData.append('section', section);
            formData.append('key', key);

            fetch('/admin/content/upload-image', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showSuccess(data.message);
                    setTimeout(() => location.reload(), 1000);
                }
            })
            .catch(error => console.error('Error:', error))
            .finally(() => {
                btn.innerHTML = originalContent;
                btn.disabled = false;
            });
        }

        // Show success message
        function showSuccess(message) {
            const successDiv = document.getElementById('successMessage');
            const successText = document.getElementById('successText');
            successText.textContent = message;
            successDiv.classList.remove('hidden');
            
            setTimeout(() => {
                successDiv.classList.add('hidden');
            }, 3000);
        }
    </script>
</body>
</html>
