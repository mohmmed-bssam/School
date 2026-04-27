<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0f172a] text-white font-sans">

<div class="min-h-screen flex">

    <aside class="w-72 bg-[#111827] border-l border-white/10 p-5">
        <h2 class="text-2xl font-bold mb-8 text-emerald-400">Innovera LMS</h2>

        <nav class="space-y-2">
            <a href="#" class="block rounded-xl bg-emerald-500 px-4 py-3 font-bold">لوحة التحكم</a>
            <a href="#" class="block rounded-xl px-4 py-3 hover:bg-white/10">الطلاب</a>
            <a href="#" class="block rounded-xl px-4 py-3 hover:bg-white/10">المعلمين</a>
            <a href="#" class="block rounded-xl px-4 py-3 hover:bg-white/10">الكورسات</a>
            <a href="#" class="block rounded-xl px-4 py-3 hover:bg-white/10">التقارير</a>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <header class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold">@yield('title')</h1>

            <div class="bg-[#1e293b] px-4 py-2 rounded-xl">
                {{ auth()->user()->name }}
            </div>
        </header>

        @yield('content')
    </main>

</div>

</body>
</html>
