<?php
/* Template Name: Contact Page */
get_header();
?>
<!-- Main Content -->
<main class="flex flex-1 justify-center py-10 w-full">
<div class="layout-content-container flex flex-col w-full max-w-[1200px] px-4 md:px-10 gap-10">
<!-- Page Header -->
<div class="flex flex-col gap-3 text-center md:text-start px-2">
<p class="text-[#111318] dark:text-white text-3xl md:text-5xl font-black leading-tight tracking-[-0.033em]">تواصل معنا</p>
<p class="text-[#636e88] dark:text-gray-400 text-base md:text-lg font-normal leading-normal max-w-2xl">
                    نحن هنا للإجابة على جميع استفساراتك المتعلقة بخدماتنا المحاسبية. لا تتردد في مراسلتنا أو زيارة مقرنا.
                </p>
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
<!-- Content Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
<!-- Right Column (Contact Form) - Visually Right in RTL -->
<div class="lg:col-span-7 flex flex-col gap-6">
<div class="bg-white dark:bg-[#1e2532] rounded-xl p-6 md:p-8 shadow-sm border border-[#e5e7eb] dark:border-[#2d3748]">
<h3 class="text-[#111318] dark:text-white text-xl font-bold mb-6">أرسل لنا رسالة</h3>
<form class="flex flex-col gap-5">
<div class="flex flex-col md:flex-row gap-5">
<label class="flex flex-col flex-1">
<p class="text-[#111318] dark:text-gray-200 text-sm font-medium leading-normal pb-2">الاسم</p>
<input class="form-input flex w-full rounded-lg text-[#111318] dark:text-white dark:bg-[#111621] border border-[#dcdee5] dark:border-[#4a5568] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#9ca3af]" placeholder="أدخل اسمك الكامل"/>
</label>
<label class="flex flex-col flex-1">
<p class="text-[#111318] dark:text-gray-200 text-sm font-medium leading-normal pb-2">البريد الإلكتروني</p>
<input class="form-input flex w-full rounded-lg text-[#111318] dark:text-white dark:bg-[#111621] border border-[#dcdee5] dark:border-[#4a5568] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#9ca3af]" placeholder="email@example.com" type="email"/>
</label>
</div>
<label class="flex flex-col flex-1">
<p class="text-[#111318] dark:text-gray-200 text-sm font-medium leading-normal pb-2">الموضوع</p>
<div class="relative">
<input class="form-input flex w-full rounded-lg text-[#111318] dark:text-white dark:bg-[#111621] border border-[#dcdee5] dark:border-[#4a5568] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#9ca3af]" placeholder="كيف يمكننا مساعدتك؟"/>
</div>
</label>
<label class="flex flex-col flex-1">
<p class="text-[#111318] dark:text-gray-200 text-sm font-medium leading-normal pb-2">الرسالة</p>
<textarea class="form-input flex w-full rounded-lg text-[#111318] dark:text-white dark:bg-[#111621] border border-[#dcdee5] dark:border-[#4a5568] focus:border-primary focus:ring-1 focus:ring-primary min-h-[160px] p-4 text-base placeholder:text-[#9ca3af] resize-none" placeholder="اكتب تفاصيل استفسارك هنا..."></textarea>
</label>
<button class="mt-2 flex w-full md:w-auto cursor-pointer items-center justify-center rounded-lg h-12 px-8 bg-primary text-white text-base font-bold tracking-[0.015em] hover:bg-blue-700 transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined ml-2 text-[20px]">send</span>
<span>إرسال الرسالة</span>
</button>
</form>
</div>
</div>
<!-- Left Column (Info & Map) - Visually Left in RTL -->
<div class="lg:col-span-5 flex flex-col gap-6">
<!-- Contact Info Cards -->
<div class="flex flex-col gap-4">
<div class="flex items-start gap-4 rounded-xl border border-[#e5e7eb] dark:border-[#2d3748] bg-white dark:bg-[#1e2532] p-5 shadow-sm transition-transform hover:translate-y-[-2px]">
<div class="flex items-center justify-center size-12 rounded-full bg-primary/10 text-primary">
<span class="material-symbols-outlined text-[24px]">call</span>
</div>
<div class="flex flex-col gap-1">
<h2 class="text-[#111318] dark:text-white text-base font-bold">رقم الهاتف</h2>
<p class="text-[#636e88] dark:text-gray-400 text-sm dir-ltr text-right font-medium">+966 11 123 4567</p>
<p class="text-[#636e88] dark:text-gray-400 text-xs">من الأحد للخميس 9:00 ص - 5:00 م</p>
</div>
</div>
<div class="flex items-start gap-4 rounded-xl border border-[#e5e7eb] dark:border-[#2d3748] bg-white dark:bg-[#1e2532] p-5 shadow-sm transition-transform hover:translate-y-[-2px]">
<div class="flex items-center justify-center size-12 rounded-full bg-primary/10 text-primary">
<span class="material-symbols-outlined text-[24px]">mail</span>
</div>
<div class="flex flex-col gap-1">
<h2 class="text-[#111318] dark:text-white text-base font-bold">البريد الإلكتروني</h2>
<p class="text-[#636e88] dark:text-gray-400 text-sm font-medium">info@digitalbasket.sa</p>
<p class="text-[#636e88] dark:text-gray-400 text-xs">للدعم الفني والاستفسارات العامة</p>
</div>
</div>
<div class="flex items-start gap-4 rounded-xl border border-[#e5e7eb] dark:border-[#2d3748] bg-white dark:bg-[#1e2532] p-5 shadow-sm transition-transform hover:translate-y-[-2px]">
<div class="flex items-center justify-center size-12 rounded-full bg-primary/10 text-primary">
<span class="material-symbols-outlined text-[24px]">location_on</span>
</div>
<div class="flex flex-col gap-1">
<h2 class="text-[#111318] dark:text-white text-base font-bold">العنوان</h2>
<p class="text-[#636e88] dark:text-gray-400 text-sm font-medium leading-relaxed">
                                    طريق الملك فهد، العليا<br/>الرياض 12214، المملكة العربية السعودية
                                </p>
</div>
</div>
</div>
<!-- Social Media -->
<div class="flex gap-3 justify-center md:justify-start py-2">
<a class="group flex size-10 items-center justify-center rounded-full bg-white dark:bg-[#1e2532] border border-[#e5e7eb] dark:border-[#2d3748] text-[#636e88] dark:text-gray-400 hover:bg-primary hover:text-white transition-all shadow-sm" href="#">
<svg aria-hidden="true" class="size-5" fill="currentColor" viewbox="0 0 24 24">
<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
</svg>
</a>
<a class="group flex size-10 items-center justify-center rounded-full bg-white dark:bg-[#1e2532] border border-[#e5e7eb] dark:border-[#2d3748] text-[#636e88] dark:text-gray-400 hover:bg-primary hover:text-white transition-all shadow-sm" href="#">
<svg aria-hidden="true" class="size-5" fill="currentColor" viewbox="0 0 24 24">
<path clip-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" fill-rule="evenodd"></path>
</svg>
</a>
<a class="group flex size-10 items-center justify-center rounded-full bg-white dark:bg-[#1e2532] border border-[#e5e7eb] dark:border-[#2d3748] text-[#636e88] dark:text-gray-400 hover:bg-primary hover:text-white transition-all shadow-sm" href="#">
<svg aria-hidden="true" class="size-5" fill="currentColor" viewbox="0 0 24 24">
<path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path>
</svg>
</a>
</div>
<!-- Map -->
<div class="relative w-full h-48 md:h-64 rounded-xl overflow-hidden border border-[#e5e7eb] dark:border-[#2d3748] shadow-sm">
<img alt="خريطة توضح موقع الرياض المملكة العربية السعودية" class="w-full h-full object-cover" data-alt="Satellite map view of a city with roads and buildings" data-location="Riyadh" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcyDZLaOv7qxLOocJ0-4YUvLDMd7G3UHlyk8Y3OtwqWyeGYU2XX-wjGPW1JcdZ0MLknX19SZZZU7xVdPcANqWT5rX62bRuqM7Lg02HGM3BKxktKxsMjPN47l-Q1FDubhJUhuEXMAABgmWMjUX-VlhvZxnLVF9DPBrnD2w6iLRJJLA52p3FnN10uOa8T9eAnEZH-9XyCx6IDGDpoaBLkHpFAUiF0KBrccoNYf2WKKR2gqZXGZCarAtAfuWP239McjzG9SWfGt0oc1c"/>
<div class="absolute inset-0 flex items-center justify-center bg-black/10 pointer-events-none">
<div class="bg-white p-2 rounded-full shadow-lg">
<span class="material-symbols-outlined text-primary text-[28px]">location_on</span>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<?php
get_footer();
?>
