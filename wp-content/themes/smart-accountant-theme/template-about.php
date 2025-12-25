<?php
/* Template Name: About Page */
get_header();
?>
<main class="flex-1">
<!-- Hero Section -->
<section class="layout-container flex flex-col justify-center px-4 md:px-10 py-5">
<div class="flex flex-col max-w-[1200px] mx-auto w-full">
<div class="flex flex-col-reverse md:flex-row gap-6 md:gap-12 py-10 items-center">
<div class="flex flex-col gap-6 md:w-1/2 text-right">
<div class="flex flex-col gap-4">
<span class="text-primary font-bold text-sm tracking-wide">من نحن</span>
<h1 class="text-[#111318] dark:text-white text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-[-0.033em]">
                                    شريكك الأول في الحلول المحاسبية المبتكرة
                                </h1>
<p class="text-[#636e88] dark:text-gray-300 text-lg font-normal leading-relaxed">
                                    تأسست "السلة الرقمية" لتكون الجسر الذي يربط بين التكنولوجيا المالية واحتياجات السوق العربي. نقدم أحدث الحلول الرقمية لتنظيم حساباتك وتنمية أعمالك بكل دقة واحترافية.
                                </p>
</div>
<div class="flex gap-4 pt-2">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/20">
<span class="truncate">تعرف على خدماتنا</span>
</button>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-transparent border border-[#dcdee5] dark:border-gray-600 text-[#111318] dark:text-white text-base font-bold leading-normal hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<span class="truncate">تواصل معنا</span>
</button>
</div>
</div>
<div class="w-full md:w-1/2 aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl bg-gray-100 dark:bg-gray-800">
<div class="w-full h-full bg-cover bg-center" data-alt="Modern office meeting discussing financial charts on a laptop" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBeWwO4IAL1xg1g48zvpU90IrEaAGKdHHStWlKUAatqcKKd99FZAMQnFtV-E4V_cqSKTx_2l0BXQRUL1jFszUsvPAB3H6A6wepMG0pPXSH5whHturZhCBVFVvqrd6Sh81yB-vRbtF9n6m69_CLKmtGmPsdfL-OMVWb_IFrczdk10SkkzHIEzc8oPMz2PCxksZYRLddS1IIP7IuSPN_9DpPzYmWDYxr2MeJNWVB0DBKuS51K41dIr576yj3sX0xqbbIQASp7hC1J72k');">
</div>
</div>
</div>
</div>
</section>
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
<!-- Stats Section -->
<section class="bg-white dark:bg-[#1a202c] border-y border-[#f0f1f4] dark:border-gray-800 py-12">
<div class="layout-container px-4 md:px-10 max-w-[1200px] mx-auto">
<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
<div class="flex flex-col items-center justify-center gap-2 p-4">
<span class="material-symbols-outlined text-primary text-4xl mb-2">calendar_month</span>
<p class="text-[#111318] dark:text-white tracking-tight text-3xl md:text-4xl font-black leading-tight">+10</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm md:text-base font-medium text-center">سنوات خبرة</p>
</div>
<div class="flex flex-col items-center justify-center gap-2 p-4">
<span class="material-symbols-outlined text-primary text-4xl mb-2">groups</span>
<p class="text-[#111318] dark:text-white tracking-tight text-3xl md:text-4xl font-black leading-tight">+5000</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm md:text-base font-medium text-center">عميل سعيد</p>
</div>
<div class="flex flex-col items-center justify-center gap-2 p-4">
<span class="material-symbols-outlined text-primary text-4xl mb-2">shopping_bag</span>
<p class="text-[#111318] dark:text-white tracking-tight text-3xl md:text-4xl font-black leading-tight">+50</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm md:text-base font-medium text-center">منتج رقمي</p>
</div>
<div class="flex flex-col items-center justify-center gap-2 p-4">
<span class="material-symbols-outlined text-primary text-4xl mb-2">verified_user</span>
<p class="text-[#111318] dark:text-white tracking-tight text-3xl md:text-4xl font-black leading-tight">+20</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm md:text-base font-medium text-center">خبير محاسبي</p>
</div>
</div>
</div>
</section>
<!-- Mission & Vision -->
<section class="py-16 md:py-24 px-4 md:px-10">
<div class="max-w-[1200px] mx-auto">
<div class="text-center max-w-[800px] mx-auto mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-[#111318] dark:text-white mb-6">رؤيتنا ومهمتنا</h2>
<p class="text-lg text-[#636e88] dark:text-gray-300">نسعى لقيادة التحول الرقمي في الإدارة المالية للمنشآت الصغيرة والمتوسطة، من خلال تقديم أدوات ذكية تبسط العمليات المعقدة.</p>
</div>
<div class="grid md:grid-cols-2 gap-8">
<!-- Vision Card -->
<div class="flex flex-col gap-6 p-8 rounded-2xl bg-white dark:bg-[#1e2532] border border-[#dcdee5] dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
<div class="w-14 h-14 rounded-full bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-3xl">visibility</span>
</div>
<div class="flex flex-col gap-3">
<h3 class="text-2xl font-bold text-[#111318] dark:text-white">رؤيتنا</h3>
<p class="text-[#636e88] dark:text-gray-300 leading-relaxed text-lg">
                                    أن نكون الخيار الأول والمرجع الموثوق للحلول المالية والمحاسبية المبتكرة في المنطقة العربية، مساهمين في نجاح ونمو الأعمال الناشئة.
                                </p>
</div>
</div>
<!-- Mission Card -->
<div class="flex flex-col gap-6 p-8 rounded-2xl bg-white dark:bg-[#1e2532] border border-[#dcdee5] dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
<div class="w-14 h-14 rounded-full bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-3xl">target</span>
</div>
<div class="flex flex-col gap-3">
<h3 class="text-2xl font-bold text-[#111318] dark:text-white">مهمتنا</h3>
<p class="text-[#636e88] dark:text-gray-300 leading-relaxed text-lg">
                                    تمكين رواد الأعمال وأصحاب المشاريع من خلال توفير أدوات محاسبية مبسطة، دقيقة، ومتوافقة مع الأنظمة، تساعدهم على اتخاذ قرارات مالية صائبة.
                                </p>
</div>
</div>
</div>
</div>
</section>
<!-- Core Values -->
<section class="bg-primary/5 dark:bg-primary/10 py-16 md:py-24 px-4 md:px-10">
<div class="max-w-[1200px] mx-auto">
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
<div class="max-w-[600px]">
<h2 class="text-3xl md:text-4xl font-bold text-[#111318] dark:text-white mb-4">قيمنا الجوهرية</h2>
<p class="text-[#636e88] dark:text-gray-300 text-lg">الأسس التي نبني عليها علاقاتنا مع عملائنا وفريقنا.</p>
</div>
<button class="text-primary font-bold flex items-center gap-2 hover:gap-3 transition-all group">
                            انضم لفريقنا
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform rtl:rotate-180">arrow_forward</span>
</button>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-transparent hover:border-primary/30 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl mb-4">gavel</span>
<h3 class="text-xl font-bold text-[#111318] dark:text-white mb-2">النزاهة</h3>
<p class="text-sm text-[#636e88] dark:text-gray-400">نلتزم بأعلى معايير الأخلاق المهنية والشفافية في كل تعاملاتنا.</p>
</div>
<div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-transparent hover:border-primary/30 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl mb-4">precision_manufacturing</span>
<h3 class="text-xl font-bold text-[#111318] dark:text-white mb-2">الدقة</h3>
<p class="text-sm text-[#636e88] dark:text-gray-400">نضمن دقة البيانات والعمليات المحاسبية بنسبة 100% لراحة بالك.</p>
</div>
<div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-transparent hover:border-primary/30 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl mb-4">lightbulb</span>
<h3 class="text-xl font-bold text-[#111318] dark:text-white mb-2">الابتكار</h3>
<p class="text-sm text-[#636e88] dark:text-gray-400">نسعى دائماً لتطوير حلول جديدة تواكب التغيرات في السوق.</p>
</div>
<div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-transparent hover:border-primary/30 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl mb-4">support_agent</span>
<h3 class="text-xl font-bold text-[#111318] dark:text-white mb-2">الدعم المستمر</h3>
<p class="text-sm text-[#636e88] dark:text-gray-400">فريقنا متاح دائماً لمساعدتك في كل خطوة من رحلتك المالية.</p>
</div>
</div>
</div>
</section>
<!-- Team Section -->
<section class="py-16 md:py-24 px-4 md:px-10">
<div class="max-w-[1200px] mx-auto text-center">
<h2 class="text-3xl md:text-4xl font-bold text-[#111318] dark:text-white mb-4">فريق العمل</h2>
<p class="text-lg text-[#636e88] dark:text-gray-300 mb-12 max-w-[600px] mx-auto">نخبة من الخبراء الماليين والمطورين التقنيين يعملون بشغف لخدمتك.</p>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Member 1 -->
<div class="flex flex-col items-center group">
<div class="w-full aspect-[3/4] rounded-xl overflow-hidden mb-4 bg-gray-100">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Portrait of a professional man in a suit smiling" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAMF7s-_1slkZZsmsiYTS8Mtdv4nGlg2EKNf2c_pUupdDjgtMF7JzBE0EE69yblDWIgTlSQVum3PCoqSua_Ql-buGow6ajD0fQNOrrdCTjVe0snPfQBYpHwwBE-UVJRZVYO7-H9YSrG4HWVSxDPSKlf6TPLzUIXRHa_h0yf_r3hcW6qoalGiFDNHpiT1lSyQri5Uh_ner2M5yZRfCrzXyY-lVV2yLKQ7uwN9Gwd-gIHdtGLf2JZZO4nxqQT89a_OUN2S8NhT1KodN0');">
</div>
</div>
<h3 class="text-lg font-bold text-[#111318] dark:text-white">أحمد المحمد</h3>
<p class="text-sm text-primary font-medium">المدير التنفيذي</p>
</div>
<!-- Member 2 -->
<div class="flex flex-col items-center group">
<div class="w-full aspect-[3/4] rounded-xl overflow-hidden mb-4 bg-gray-100">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Portrait of a professional woman in business attire smiling" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC9gLXkY-_vZNaoYJF5SXA29zsKjhDyqHU1lYLRyi-psEouV8R808Tdcfme70r0wocE4MRmh3uJIObqFppYx9E-udgaySOr_Stg6SWSlWpEynwd46r_niZ0envDFfO6p6k1VOkqM_MAVGQIGSjE5IzhJoSQ8EroAx01Z5nc4OMEY5HnguDbTmVC6YHVzDGcJrJh1bPRKzaf4gPwnWTXs9hLuk6fWQNyVM3ycdhaMKKer0p7FMy4pen4eYTyrkGjXFsG6pQjOCEjOY8');">
</div>
</div>
<h3 class="text-lg font-bold text-[#111318] dark:text-white">سارة العلي</h3>
<p class="text-sm text-primary font-medium">مديرة العمليات</p>
</div>
<!-- Member 3 -->
<div class="flex flex-col items-center group">
<div class="w-full aspect-[3/4] rounded-xl overflow-hidden mb-4 bg-gray-100">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Portrait of a young professional man in casual business wear" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDgBBC6U-CkzsrWxgzZR69WXWNtbF1rRjO98c20YzSI3D4fjY35nVJxsUHzr_ZuvYSBgEvR9GC8HDdgxsJGrkQ6l7HgFKvw7k7KYKpQt8HR9sBR7xY_aB1aT8uGAhFvcYRCc72_E0BzqvSzXkV4RrZRBI8cIwN10Y2ii0K7xTs21eG7CArZH-dWcKjCwYOGJWuLD3GUCIcen5kGEWfcRla903NpeZlCUtUklfuIQmorTIfuPl0v-4XaelTbBm4N2alOou8_y_Xof8E');">
</div>
</div>
<h3 class="text-lg font-bold text-[#111318] dark:text-white">خالد يوسف</h3>
<p class="text-sm text-primary font-medium">رئيس التقنية</p>
</div>
<!-- Member 4 -->
<div class="flex flex-col items-center group">
<div class="w-full aspect-[3/4] rounded-xl overflow-hidden mb-4 bg-gray-100">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Portrait of a professional woman looking confident" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDZ6leiKpJre9KminznHGWuAnswLOL3f2fYlQK9KNg70bWVlQSfIHMaxIR2r0vW8yZCMcN_MihrXAB8cng8cisHx7nEaOoSDoqYyN-GhAY13dW_nH6UV3mediTlFmPKEyMZ5nvQQTpiWjWeaC2ciNr1xUMFurqgxkOJs-6toKITc3jsoP8eu_bIf0Tq9zKjxEHpxzCd90L9LdiYgoeubfV4o9VyaHKFs6EBAEme1MjJ9LNpp8G5a4dZ7SwsKBA7dkKixiJaaf7ajZE');">
</div>
</div>
<h3 class="text-lg font-bold text-[#111318] dark:text-white">ليلى عمر</h3>
<p class="text-sm text-primary font-medium">مستشارة مالية</p>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-16 px-4 md:px-10">
<div class="max-w-[1200px] mx-auto rounded-3xl bg-[#111621] text-white p-8 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
<!-- Gradient Background Effect -->
<div class="absolute top-0 right-0 w-full h-full bg-gradient-to-l from-primary/20 to-transparent pointer-events-none"></div>
<div class="flex flex-col gap-4 relative z-10 text-center md:text-right">
<h2 class="text-3xl md:text-4xl font-bold leading-tight">جاهز لتنظيم حساباتك؟</h2>
<p class="text-gray-400 text-lg max-w-lg">ابدأ رحلتك المالية معنا اليوم واستفد من أحدث التقنيات المحاسبية.</p>
</div>
<div class="flex flex-col sm:flex-row gap-4 relative z-10 w-full md:w-auto">
<button class="flex items-center justify-center rounded-lg h-12 px-8 bg-primary text-white text-base font-bold hover:bg-blue-600 transition-colors">
                            أنشئ حساباً مجانياً
                        </button>
<button class="flex items-center justify-center rounded-lg h-12 px-8 bg-white/10 text-white text-base font-bold hover:bg-white/20 transition-colors backdrop-blur-sm">
                            تحدث مع المبيعات
                        </button>
</div>
</div>
</section>
</main>
<?php
get_footer();
?>
