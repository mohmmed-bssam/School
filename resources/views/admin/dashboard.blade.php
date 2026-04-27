@extends('layouts.admin')
@section('title', 'لوحة التحكم')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-[#1e293b] rounded-2xl p-6 border border-white/10">
            <p class="text-gray-400">إجمالي الطلاب</p>
            <h2 class="text-4xl font-bold mt-3">52</h2>
        </div>

        <div class="bg-[#1e293b] rounded-2xl p-6 border border-white/10">
            <p class="text-gray-400">إجمالي المعلمين</p>
            <h2 class="text-4xl font-bold mt-3">3</h2>
        </div>

        <div class="bg-[#1e293b] rounded-2xl p-6 border border-white/10">
            <p class="text-gray-400">إجمالي الكورسات</p>
            <h2 class="text-4xl font-bold mt-3">24</h2>
        </div>

        <div class="bg-[#1e293b] rounded-2xl p-6 border border-white/10">
            <p class="text-gray-400">الإيرادات</p>
            <h2 class="text-4xl font-bold mt-3">900 ج.م</h2>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-[#1e293b] rounded-2xl p-6 border border-white/10 h-80">
            <h3 class="text-xl font-bold mb-4">نمو الطلاب</h3>
            <div class="h-56 flex items-end gap-4">
                <div class="w-16 bg-emerald-500 rounded-t-xl h-20"></div>
                <div class="w-16 bg-yellow-500 rounded-t-xl h-48"></div>
                <div class="w-16 bg-pink-500 rounded-t-xl h-28"></div>
                <div class="w-16 bg-cyan-500 rounded-t-xl h-36"></div>
            </div>
        </div>

        <div class="bg-[#1e293b] rounded-2xl p-6 border border-white/10 h-80">
            <h3 class="text-xl font-bold mb-4">آخر النشاطات</h3>
            <div class="space-y-4">
                <div class="bg-[#0f172a] rounded-xl p-4">تم تسجيل طالب جديد</div>
                <div class="bg-[#0f172a] rounded-xl p-4">تم إضافة كورس جديد</div>
                <div class="bg-[#0f172a] rounded-xl p-4">تم تحديث درجات الطلاب</div>
            </div>
        </div>
    </div>

@endsection
