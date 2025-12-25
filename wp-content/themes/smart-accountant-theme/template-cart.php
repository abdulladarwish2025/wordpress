<?php
/* Template Name: Cart Page */
get_header();
?>
<!-- Main Content -->
<main class="flex-1 w-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 py-8">
<!-- Breadcrumbs -->
<div class="flex flex-wrap gap-2 mb-6 text-sm">
<a class="text-[#636e88] hover:text-primary transition-colors" href="#">الرئيسية</a>
<span class="text-[#636e88]">/</span>
<span class="text-[#111318] dark:text-white font-medium">سلة المشتريات</span>
</div>
<!-- Page Heading -->
<div class="flex flex-col gap-2 mb-8">
<h1 class="text-3xl md:text-4xl font-black tracking-tight text-[#111318] dark:text-white">سلة المشتريات</h1>
<p class="text-[#636e88] dark:text-gray-400">لديك <span class="font-bold text-primary">3 منتجات</span> في سلتك</p>
</div>
<!-- Page Content -->
<div class="prose dark:prose-invert max-w-none">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
<!-- Layout Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Right Column: Cart Items -->
<div class="lg:col-span-8 flex flex-col gap-4">
<!-- Item 1 -->
<div class="flex flex-col sm:flex-row gap-4 bg-white dark:bg-[#1a202c] p-4 rounded-xl shadow-sm border border-[#f0f1f4] dark:border-gray-800">
<!-- Image -->
<div class="shrink-0">
<div class="size-24 sm:size-28 rounded-lg bg-cover bg-center bg-gray-100 dark:bg-gray-700" data-alt="Modern accounting software dashboard on a laptop screen" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDIOBbhvKlIzdwJVNVVlLX5ZbRHym2dZQD4_i3o7XznLA-E5I00wzq8MmKtkyDLW0VBgtPNLFuoBa-CcRyv4b4tOFaOxpUQpPc6VEvTATIx-uT_IMHzgftb4Ug-66jrm2rZpHovqpjdCckTC17MBcjlI_u75TpzZIqniTiwLBjUNqd0kfsNhzrc3vFAsriaTtVZJE8NZnwtiBzOrHjdNkH0SXcGy7X7MWbuqdqO4kfIZ-H_LV43Hzwr6wBcztCi2gvF_-mZlpAwG0k");'>
</div>
</div>
<!-- Content -->
<div class="flex flex-1 flex-col justify-between gap-4">
<div class="flex justify-between items-start gap-4">
<div>
<h3 class="text-lg font-bold text-[#111318] dark:text-white mb-1">برنامج المحاسبة السحابي</h3>
<p class="text-sm text-[#636e88] dark:text-gray-400 mb-2">باقة الشركات - اشتراك سنوي</p>
<div class="inline-flex items-center px-2 py-1 rounded bg-blue-50 dark:bg-blue-900/30 text-xs font-medium text-blue-700 dark:text-blue-300">
                                    شامل الضريبة
                                </div>
</div>
<p class="text-lg font-bold text-[#111318] dark:text-white whitespace-nowrap">1,200 ر.س</p>
</div>
<div class="flex items-center justify-between mt-auto">
<!-- Quantity -->
<div class="flex items-center border border-[#e5e7eb] dark:border-gray-700 rounded-lg p-1 bg-white dark:bg-transparent">
<button class="size-7 flex items-center justify-center rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-[#636e88] dark:text-gray-300 transition-colors">
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
<input class="w-10 text-center border-none p-0 text-sm font-semibold bg-transparent focus:ring-0 dark:text-white" type="number" value="1"/>
<button class="size-7 flex items-center justify-center rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-[#636e88] dark:text-gray-300 transition-colors">
<span class="material-symbols-outlined text-[18px]">remove</span>
</button>
</div>
<!-- Remove -->
<button class="flex items-center gap-1 text-sm text-red-500 hover:text-red-600 font-medium transition-colors px-2 py-1 rounded hover:bg-red-50 dark:hover:bg-red-900/20">
<span class="material-symbols-outlined text-[20px]">delete</span>
<span class="hidden sm:inline">حذف</span>
</button>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="flex flex-col sm:flex-row gap-4 bg-white dark:bg-[#1a202c] p-4 rounded-xl shadow-sm border border-[#f0f1f4] dark:border-gray-800">
<div class="shrink-0">
<div class="size-24 sm:size-28 rounded-lg bg-cover bg-center bg-gray-100 dark:bg-gray-700" data-alt="Business professionals in a meeting discussing documents" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDXWkdSiWxs0lS92lxkU61FC0y7JM04ZPvBNsvOlAepAVcApV9n2mUq9Eq3HYcTxGWaZ1mE-aWZRwhfRl-u1oOIB5lg9xj2LNbAAcct2BA3VFVOU44NY7YiX6YaiavRyZqheKhPJ-TPzDixOCLiEBRMvxA3bmN4cb5lAWluQyHKiu2iwM6qtsQV2jTR5LSwHaPHmSooBpu72s84NpnMLw6Eh6FHrjNfCNrMRkJCzsi5nCR0w7JBV8xIvUXgobG6kCVGoBIuLeidW1s");'>
</div>
</div>
<div class="flex flex-1 flex-col justify-between gap-4">
<div class="flex justify-between items-start gap-4">
<div>
<h3 class="text-lg font-bold text-[#111318] dark:text-white mb-1">استشارة ضريبية</h3>
<p class="text-sm text-[#636e88] dark:text-gray-400 mb-2">جلسة استشارية لمدة ساعة مع خبير معتمد</p>
</div>
<p class="text-lg font-bold text-[#111318] dark:text-white whitespace-nowrap">350 ر.س</p>
</div>
<div class="flex items-center justify-between mt-auto">
<div class="flex items-center border border-[#e5e7eb] dark:border-gray-700 rounded-lg p-1 bg-white dark:bg-transparent">
<button class="size-7 flex items-center justify-center rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-[#636e88] dark:text-gray-300 transition-colors">
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
<input class="w-10 text-center border-none p-0 text-sm font-semibold bg-transparent focus:ring-0 dark:text-white" type="number" value="1"/>
<button class="size-7 flex items-center justify-center rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-[#636e88] dark:text-gray-300 transition-colors">
<span class="material-symbols-outlined text-[18px]">remove</span>
</button>
</div>
<button class="flex items-center gap-1 text-sm text-red-500 hover:text-red-600 font-medium transition-colors px-2 py-1 rounded hover:bg-red-50 dark:hover:bg-red-900/20">
<span class="material-symbols-outlined text-[20px]">delete</span>
<span class="hidden sm:inline">حذف</span>
</button>
</div>
</div>
</div>
<!-- Item 3 -->
<div class="flex flex-col sm:flex-row gap-4 bg-white dark:bg-[#1a202c] p-4 rounded-xl shadow-sm border border-[#f0f1f4] dark:border-gray-800">
<div class="shrink-0">
<div class="size-24 sm:size-28 rounded-lg bg-cover bg-center bg-gray-100 dark:bg-gray-700" data-alt="Abstract blue digital security pattern background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDxBZb90pHfcpTpMf1XVjIglHF5Af6M8rJpvEvWnZU2kExSnb587eShg65hVFbabHbbPJwPyNaKjO-bf6MvX9gLa_gYX74DuXmSap9pSaNwwzSy-JyxvQKWJ4sTnK0s8MelsT0C9w5Svuh2dCjelc5FHcBNGiS0q73Kf2xN7qPD4qfixtiAMKMcUnjzJ0njJopdoP85YMFPZ-3b3FjU3C5oZcHAqguGnX0CYnddEDW7VAnQrxWphK05Frjz6wvB0qEmPI36WaC9QIs");'>
</div>
</div>
<div class="flex flex-1 flex-col justify-between gap-4">
<div class="flex justify-between items-start gap-4">
<div>
<h3 class="text-lg font-bold text-[#111318] dark:text-white mb-1">دليل الحسابات الموحد</h3>
<p class="text-sm text-[#636e88] dark:text-gray-400 mb-2">نسخة رقمية PDF - تحديث 2024</p>
</div>
<p class="text-lg font-bold text-[#111318] dark:text-white whitespace-nowrap">99 ر.س</p>
</div>
<div class="flex items-center justify-between mt-auto">
<div class="flex items-center border border-[#e5e7eb] dark:border-gray-700 rounded-lg p-1 bg-white dark:bg-transparent">
<button class="size-7 flex items-center justify-center rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-[#636e88] dark:text-gray-300 transition-colors">
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
<input class="w-10 text-center border-none p-0 text-sm font-semibold bg-transparent focus:ring-0 dark:text-white" type="number" value="1"/>
<button class="size-7 flex items-center justify-center rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-[#636e88] dark:text-gray-300 transition-colors">
<span class="material-symbols-outlined text-[18px]">remove</span>
</button>
</div>
<button class="flex items-center gap-1 text-sm text-red-500 hover:text-red-600 font-medium transition-colors px-2 py-1 rounded hover:bg-red-50 dark:hover:bg-red-900/20">
<span class="material-symbols-outlined text-[20px]">delete</span>
<span class="hidden sm:inline">حذف</span>
</button>
</div>
</div>
</div>
<!-- Note / Info -->
<div class="flex items-center gap-3 bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg text-sm text-blue-800 dark:text-blue-200">
<span class="material-symbols-outlined text-[20px]">info</span>
<p>جميع الأسعار تشمل ضريبة القيمة المضافة 15%</p>
</div>
</div>
<!-- Left Column: Order Summary -->
<div class="lg:col-span-4 flex flex-col gap-6">
<div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl shadow-sm border border-[#f0f1f4] dark:border-gray-800 sticky top-24">
<h2 class="text-xl font-bold text-[#111318] dark:text-white mb-6">ملخص الطلب</h2>
<!-- Coupon Code -->
<div class="mb-6">
<label class="block text-sm font-medium text-[#636e88] dark:text-gray-400 mb-2">كود الخصم</label>
<div class="flex gap-2">
<input class="flex-1 rounded-lg border-[#e5e7eb] dark:border-gray-700 bg-[#f9fafb] dark:bg-gray-800 text-sm px-3 py-2.5 focus:ring-primary focus:border-primary dark:text-white dark:placeholder-gray-500" placeholder="أدخل الكود" type="text"/>
<button class="bg-[#f0f1f4] dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-[#111318] dark:text-white px-4 py-2.5 rounded-lg text-sm font-bold transition-colors">
                                تطبيق
                            </button>
</div>
</div>
<div class="space-y-4 mb-6 border-t border-[#f0f1f4] dark:border-gray-800 pt-6">
<div class="flex justify-between items-center text-sm">
<span class="text-[#636e88] dark:text-gray-400">المجموع الفرعي</span>
<span class="font-medium text-[#111318] dark:text-white">1,434 ر.س</span>
</div>
<div class="flex justify-between items-center text-sm">
<span class="text-[#636e88] dark:text-gray-400">الضريبة (15%)</span>
<span class="font-medium text-[#111318] dark:text-white">215 ر.س</span>
</div>
<div class="flex justify-between items-center text-sm text-green-600 dark:text-green-400">
<span>الخصم</span>
<span class="font-medium">-0.00 ر.س</span>
</div>
</div>
<div class="flex justify-between items-center mb-8 border-t border-[#f0f1f4] dark:border-gray-800 pt-6">
<span class="text-lg font-bold text-[#111318] dark:text-white">الإجمالي</span>
<span class="text-2xl font-black text-primary">1,649 ر.س</span>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-6 rounded-xl shadow-lg shadow-blue-500/20 transition-all transform active:scale-[0.98] flex items-center justify-center gap-2 text-lg">
<span>إتمام الطلب</span>
<span class="material-symbols-outlined rtl:rotate-180">arrow_right_alt</span>
</button>
<div class="mt-6 flex flex-col items-center gap-3">
<div class="flex gap-3 grayscale opacity-60">
<!-- Simple representations of payment methods using div backgrounds or text for demo -->
<span class="text-xs font-bold border border-gray-300 rounded px-1">VISA</span>
<span class="text-xs font-bold border border-gray-300 rounded px-1">MADA</span>
<span class="text-xs font-bold border border-gray-300 rounded px-1">ApplePay</span>
</div>
<p class="text-xs text-center text-[#636e88] dark:text-gray-500 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">lock</span>
                            مدفوعات آمنة ومشفرة 100%
                        </p>
</div>
</div>
</div>
</div>
</main>
<?php
get_footer();
?>
