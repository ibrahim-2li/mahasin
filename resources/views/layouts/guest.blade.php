<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'محاسن الشرق') }} - تسجيل الدخول</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Brand Colors */
        :root {
            --brand-orange: #ff6b35;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gradient-to-br from-slate-50 via-gray-50 to-white">
    <!-- Decorative Background Elements -->
    <div
        class="fixed top-0 right-0 w-96 h-96 bg-gradient-to-bl from-orange-100/50 via-pink-100/30 to-transparent rounded-full blur-3xl pointer-events-none">
    </div>
    <div
        class="fixed bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-100/30 via-purple-100/20 to-transparent rounded-full blur-3xl pointer-events-none">
    </div>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-4 relative z-10">
        <!-- Logo -->
        <div class="mb-8">
            <a href="/" class="flex flex-col items-center gap-4 group">
                <img src="{{ asset('images/logo.png') }}" alt="محاسن الشرق"
                    class="h-20 w-auto object-contain transition-transform group-hover:scale-105">
                <span class="text-2xl font-black text-slate-800">محاسن الشرق</span>
            </a>
        </div>

        <!-- Login Card -->
        <div class="w-full sm:max-w-md">
            <div class="bg-white/80 backdrop-blur-sm shadow-xl rounded-3xl overflow-hidden border border-gray-100">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-orange-500 to-pink-500 px-8 py-6 text-center">
                    <h2 class="text-2xl font-black text-white mb-1">تسجيل الدخول</h2>
                    <p class="text-white/90 text-sm">مرحباً بك في لوحة التحكم</p>
                </div>

                <!-- Card Body -->
                <div class="px-8 py-8">
                    {{ $slot }}
                </div>
            </div>

            <!-- Footer Text -->
            <p class="text-center text-sm text-slate-600 mt-6">
                © 2025 شركة محاسن الشرق. جميع الحقوق محفوظة.
            </p>
        </div>
    </div>
</body>

</html>
