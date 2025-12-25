<?php
/* Template Name: Products Page */
get_header();
?>
<!-- Main Content -->
<main class="layout-container flex h-full grow flex-col py-5 px-4 md:px-10 lg:px-40">
<div class="layout-content-container flex flex-col max-w-[1200px] mx-auto w-full flex-1">
<!-- Page Heading -->
<div class="flex flex-col md:flex-row flex-wrap justify-between items-start md:items-end gap-6 pb-6 border-b border-[#dcdee5] dark:border-[#2a2e3b]">
<div class="flex min-w-72 flex-col gap-3">
<h1 class="text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">قائمة المنتجات والخدمات</h1>
<p class="text-[#636e88] dark:text-[#9ca3af] text-base font-normal leading-normal max-w-2xl">
                            استعرض أفضل الحلول المحاسبية، نماذج الإكسل المالية، والخدمات الاستشارية لتطوير أعمالك ومشروعك الناشئ.
                        </p>
</div>
</div>
<!-- Filters & Search -->
<div class="flex flex-col gap-6 pt-6">
<div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4">
<!-- Chips -->
<div class="flex gap-2 flex-wrap">
<button class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-primary text-white px-5 transition-colors shadow-sm">
<span class="text-sm font-bold">الكل</span>
</button>
<button class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-[#2a2e3b] border border-[#dcdee5] dark:border-[#4b5563] px-5 hover:bg-gray-50 dark:hover:bg-[#374151] transition-colors">
<span class="text-sm font-medium">برامج محاسبة</span>
</button>
<button class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-[#2a2e3b] border border-[#dcdee5] dark:border-[#4b5563] px-5 hover:bg-gray-50 dark:hover:bg-[#374151] transition-colors">
<span class="text-sm font-medium">نماذج إكسل</span>
</button>
<button class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-[#2a2e3b] border border-[#dcdee5] dark:border-[#4b5563] px-5 hover:bg-gray-50 dark:hover:bg-[#374151] transition-colors">
<span class="text-sm font-medium">استشارات</span>
</button>
</div>
<!-- Search & Sort -->
<div class="flex w-full lg:w-auto gap-3 flex-wrap sm:flex-nowrap">
<div class="relative flex-1 min-w-[200px]">
<input class="w-full h-10 rounded-lg border border-[#dcdee5] dark:border-[#4b5563] bg-white dark:bg-[#2a2e3b] px-4 pl-10 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none" placeholder="بحث عن منتج..."/>
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[#9ca3af] text-lg">search</span>
</div>
<div class="relative min-w-[160px]">
<select class="w-full h-10 rounded-lg border border-[#dcdee5] dark:border-[#4b5563] bg-white dark:bg-[#2a2e3b] px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none appearance-none">
<option>الأحدث</option>
<option>الأعلى سعراً</option>
<option>الأقل سعراً</option>
<option>الأكثر مبيعاً</option>
</select>
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[#9ca3af] text-lg pointer-events-none">expand_more</span>
</div>
</div>
</div>
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
<!-- Products Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-8">
<!-- Card 1 -->
<div class="group flex flex-col rounded-xl bg-white dark:bg-[#1f2937] border border-[#f0f1f4] dark:border-[#374151] shadow-sm hover:shadow-md transition-all overflow-hidden">
<div class="relative h-48 w-full overflow-hidden bg-gray-100">
<div class="absolute inset-0 bg-center bg-cover transition-transform duration-500 group-hover:scale-105" data-alt="Blue accounting spreadsheet graphic with charts" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBuD0WFvHF122fLvzLkwauDyK6OpyLezZezVPvFIeT4bSL62cG3tRepPLsN6oVzcU-IFXxvYocNiFG92JfLhWx_dDtSe3e3a1j9uEgaZWP0UF146egyVcPPySvKJUCZc8Hvx7NUIkH34DJ3TKIApCeVIl1air8pV3RV7k3SQuyvCFn_JNTgF_FLjfDQCDaZ3aftS7X_px07ALxdSbkRktkTTPagqfnjoRTtEW5P3dsgO2mxpvCsX0vtjVnky45bXVl0qkj0H4_8PE4");'></div>
<div class="absolute top-3 right-3 rounded-md bg-white/90 dark:bg-black/60 px-2 py-1 text-xs font-bold text-[#111318] dark:text-white backdrop-blur-sm">
                                نموذج إكسل
                            </div>
</div>
<div class="flex flex-1 flex-col p-4">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-medium text-primary bg-primary/10 px-2 py-0.5 rounded">الأكثر مبيعاً</span>
</div>
<h3 class="mb-2 text-lg font-bold text-[#111318] dark:text-white leading-tight">نموذج الميزانية العمومية</h3>
<p class="mb-4 text-sm text-[#636e88] dark:text-[#9ca3af] line-clamp-2">
                                نموذج احترافي جاهز للاستخدام لإعداد الميزانية العمومية للشركات الصغيرة والمتوسطة، يدعم المعادلات التلقائية.
                            </p>
<div class="mt-auto flex items-center justify-between pt-3 border-t border-[#f0f1f4] dark:border-[#374151]">
<span class="text-lg font-bold text-[#111318] dark:text-white">٥٠ ر.س</span>
<button class="flex items-center justify-center rounded-lg bg-primary/10 hover:bg-primary text-primary hover:text-white px-3 py-2 text-sm font-bold transition-colors">
<span class="material-symbols-outlined text-lg ml-1">add_shopping_cart</span>
                                    إضافة
                                </button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group flex flex-col rounded-xl bg-white dark:bg-[#1f2937] border border-[#f0f1f4] dark:border-[#374151] shadow-sm hover:shadow-md transition-all overflow-hidden">
<div class="relative h-48 w-full overflow-hidden bg-gray-100">
<div class="absolute inset-0 bg-center bg-cover transition-transform duration-500 group-hover:scale-105" data-alt="Calculator and financial documents close up" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCt4NcDADDOaMV--X8nem4c5bPPNbucXN5LjNxeukqLh-HkiE2WxVompnYwg1T5HDlIYtRdYhDNFHrv5rAYVS7K6Au-zJaMxeJz2E7X8_l7aAZDrOpcW5En0zhDE_Qb2eBgz1jVU_LxkldmSsP96HeiQ7uSmbTsOrrTxUpRDrW8BmF3_25SJidaXRCMrYeo11sUMtL6f2qZ8Humj82ItB042IVRCWfrYBuNEO-m-DriBAm2bBGoBPL0Mmpc2tUn0x-nfYC37QPdD40");'></div>
<div class="absolute top-3 right-3 rounded-md bg-white/90 dark:bg-black/60 px-2 py-1 text-xs font-bold text-[#111318] dark:text-white backdrop-blur-sm">
                                استشارات
                            </div>
</div>
<div class="flex flex-1 flex-col p-4">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-medium text-[#636e88] bg-gray-100 dark:bg-gray-700 px-2 py-0.5 rounded">خدمة</span>
</div>
<h3 class="mb-2 text-lg font-bold text-[#111318] dark:text-white leading-tight">استشارة ضريبية لمدة ساعة</h3>
<p class="mb-4 text-sm text-[#636e88] dark:text-[#9ca3af] line-clamp-2">
                                جلسة استشارية مع خبير ضرائب معتمد لمناقشة الإقرارات الضريبية والزكاة لشركتك.
                            </p>
<div class="mt-auto flex items-center justify-between pt-3 border-t border-[#f0f1f4] dark:border-[#374151]">
<span class="text-lg font-bold text-[#111318] dark:text-white">٣٠٠ ر.س</span>
<button class="flex items-center justify-center rounded-lg bg-primary/10 hover:bg-primary text-primary hover:text-white px-3 py-2 text-sm font-bold transition-colors">
<span class="material-symbols-outlined text-lg ml-1">add_shopping_cart</span>
                                    إضافة
                                </button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="group flex flex-col rounded-xl bg-white dark:bg-[#1f2937] border border-[#f0f1f4] dark:border-[#374151] shadow-sm hover:shadow-md transition-all overflow-hidden">
<div class="relative h-48 w-full overflow-hidden bg-gray-100">
<div class="absolute inset-0 bg-center bg-cover transition-transform duration-500 group-hover:scale-105" data-alt="Laptop screen showing dashboard analytics" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA6Rw1p0ne5hRi_TgIr1y4-ZuC6fPmSG7gvioj7uKUZ-lrhdimBgai-Hx-AWhNmA1EVlUVnNT4E95WmqoNoaS79Njt8ccYXnkbEJpMYHJBFHAiZodWXts65SrRKya88X1PEnerdZw7wfeO8WtJFL-Sy4SUlKECR00JErUL5_SgdZLyjXth3vWJClThWXsVchho2lJQknlhoAtLYS72qvadcgHUdFPzAHqGh3EVl45eINZnQkUgDKh1GhBTwfqKf4dgTFPjnizh1Qsg");'></div>
<div class="absolute top-3 right-3 rounded-md bg-white/90 dark:bg-black/60 px-2 py-1 text-xs font-bold text-[#111318] dark:text-white backdrop-blur-sm">
                                برامج محاسبة
                            </div>
</div>
<div class="flex flex-1 flex-col p-4">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-medium text-emerald-600 bg-emerald-50 dark:bg-emerald-900/30 px-2 py-0.5 rounded">اشتراك سنوي</span>
</div>
<h3 class="mb-2 text-lg font-bold text-[#111318] dark:text-white leading-tight">نظام المحاسب السحابي</h3>
<p class="mb-4 text-sm text-[#636e88] dark:text-[#9ca3af] line-clamp-2">
                                نظام متكامل لإدارة الفواتير والمخزون والعملاء، يدعم الفوترة الإلكترونية ومعتمد من الهيئة.
                            </p>
<div class="mt-auto flex items-center justify-between pt-3 border-t border-[#f0f1f4] dark:border-[#374151]">
<span class="text-lg font-bold text-[#111318] dark:text-white">١٢٠٠ ر.س</span>
<button class="flex items-center justify-center rounded-lg bg-primary/10 hover:bg-primary text-primary hover:text-white px-3 py-2 text-sm font-bold transition-colors">
<span class="material-symbols-outlined text-lg ml-1">add_shopping_cart</span>
                                    إضافة
                                </button>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="group flex flex-col rounded-xl bg-white dark:bg-[#1f2937] border border-[#f0f1f4] dark:border-[#374151] shadow-sm hover:shadow-md transition-all overflow-hidden">
<div class="relative h-48 w-full overflow-hidden bg-gray-100">
<div class="absolute inset-0 bg-center bg-cover transition-transform duration-500 group-hover:scale-105" data-alt="Hand holding a pen over financial paper report" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAO_jZOTeyYGEIZ4LCBSUtWFDdFhE8XjDlXC56wI_CoAj2ipPRCIMFU6D9pNOw7bdmGbpD2ISeX1SZeTW2NfPPW-lW4pLKi7trSsdM4i2tNjILLrXreilvGqnjW3poChn1XR4wiwMKazYdWX8jLVCILuWL9TjWYOlalO7V68lp7hh-XICpohRw7qAbsW0eHAAifMCO-iWEn4I6G1lUhgok9-vlliq1llog7ivTyrE6ZOsENBdffdool_mTnGVqC0ckurBWcgdSNt6M");'></div>
<div class="absolute top-3 right-3 rounded-md bg-white/90 dark:bg-black/60 px-2 py-1 text-xs font-bold text-[#111318] dark:text-white backdrop-blur-sm">
                                نماذج إكسل
                            </div>
</div>
<div class="flex flex-1 flex-col p-4">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-medium text-[#636e88] bg-gray-100 dark:bg-gray-700 px-2 py-0.5 rounded">جديد</span>
</div>
<h3 class="mb-2 text-lg font-bold text-[#111318] dark:text-white leading-tight">حاسبة الرواتب والمستحقات</h3>
<p class="mb-4 text-sm text-[#636e88] dark:text-[#9ca3af] line-clamp-2">
                                ملف إكسل متطور لحساب الرواتب الشهرية، الإضافي، خصم التأمينات، ومكافأة نهاية الخدمة.
                            </p>
<div class="mt-auto flex items-center justify-between pt-3 border-t border-[#f0f1f4] dark:border-[#374151]">
<span class="text-lg font-bold text-[#111318] dark:text-white">٧٥ ر.س</span>
<button class="flex items-center justify-center rounded-lg bg-primary/10 hover:bg-primary text-primary hover:text-white px-3 py-2 text-sm font-bold transition-colors">
<span class="material-symbols-outlined text-lg ml-1">add_shopping_cart</span>
                                    إضافة
                                </button>
</div>
</div>
</div>
<!-- Card 5 -->
<div class="group flex flex-col rounded-xl bg-white dark:bg-[#1f2937] border border-[#f0f1f4] dark:border-[#374151] shadow-sm hover:shadow-md transition-all overflow-hidden">
<div class="relative h-48 w-full overflow-hidden bg-gray-100">
<div class="absolute inset-0 bg-center bg-cover transition-transform duration-500 group-hover:scale-105" data-alt="Abstract blue polygon pattern graphic" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCAzn3pq56wqskT44ku4I_m5Nr6IPKvk1J5C85-nVPDrkPQ4BlW_Akk0KqHWJcbfhnNyTM6j2YpXT7XgBffkItZv_VHiAuuOiQmzJKm1Dx8zsM6njcdd4u6zeIsaxLMogq977JNl1yLgH8-ERgP7Il08vQ80VYl5mDNl-GMdYZcuz0LC6nOmqm8HrPGP-rjcIP6EJPkUD2GTvcPVKQlTiPjN8-IqFidhBL3BHqp7u3AuphodG7iyEAztMcmJbdOxGY_I3rlRPuupzY");'></div>
<div class="absolute top-3 right-3 rounded-md bg-white/90 dark:bg-black/60 px-2 py-1 text-xs font-bold text-[#111318] dark:text-white backdrop-blur-sm">
                                برامج محاسبة
                            </div>
</div>
<div class="flex flex-1 flex-col p-4">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-medium text-[#636e88] bg-gray-100 dark:bg-gray-700 px-2 py-0.5 rounded">إصدار ٢.٠</span>
</div>
<h3 class="mb-2 text-lg font-bold text-[#111318] dark:text-white leading-tight">مدير المخزون الذكي</h3>
<p class="mb-4 text-sm text-[#636e88] dark:text-[#9ca3af] line-clamp-2">
                                تتبع حركة المخزون، التنبيه عند نقص الكميات، وتقارير جرد آلية دقيقة.
                            </p>
<div class="mt-auto flex items-center justify-between pt-3 border-t border-[#f0f1f4] dark:border-[#374151]">
<span class="text-lg font-bold text-[#111318] dark:text-white">٤٥٠ ر.س</span>
<button class="flex items-center justify-center rounded-lg bg-primary/10 hover:bg-primary text-primary hover:text-white px-3 py-2 text-sm font-bold transition-colors">
<span class="material-symbols-outlined text-lg ml-1">add_shopping_cart</span>
                                    إضافة
                                </button>
</div>
</div>
</div>
<!-- Card 6 -->
<div class="group flex flex-col rounded-xl bg-white dark:bg-[#1f2937] border border-[#f0f1f4] dark:border-[#374151] shadow-sm hover:shadow-md transition-all overflow-hidden">
<div class="relative h-48 w-full overflow-hidden bg-gray-100">
<div class="absolute inset-0 bg-center bg-cover transition-transform duration-500 group-hover:scale-105" data-alt="Two business people shaking hands over a table" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYa5prr7vVH4Aa3EHqD5NKJZ5d4Ggpcvhz6JtyXyvNobn-mXGImyvHxvUb5z9ZhhThm5H77YlFy1wTG48t6KK6IeqSuyYP6gKeFGUR6F-1XBEWCyVE2iPF6as-9KTy0JYv3lu27JzPtPyBBvAO2Vnr0BniMRcIXcjJIHD1_l9jbiPeyENN211iVRydKfc_vWG1HGDWFNqThWQDU8Wzfr_MrYEP4js_fdsyDf2Zj3B7OsynnyYsY3KytSCrkKs83eyhFh525vcXeLs");'></div>
<div class="absolute top-3 right-3 rounded-md bg-white/90 dark:bg-black/60 px-2 py-1 text-xs font-bold text-[#111318] dark:text-white backdrop-blur-sm">
                                استشارات
                            </div>
</div>
<div class="flex flex-1 flex-col p-4">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-medium text-[#636e88] bg-gray-100 dark:bg-gray-700 px-2 py-0.5 rounded">باقة شركات</span>
</div>
<h3 class="mb-2 text-lg font-bold text-[#111318] dark:text-white leading-tight">تأسيس النظام المالي</h3>
<p class="mb-4 text-sm text-[#636e88] dark:text-[#9ca3af] line-clamp-2">
                                خدمة متكاملة لبناء الهيكل المالي، شجرة الحسابات، والسياسات المالية للشركات الجديدة.
                            </p>
<div class="mt-auto flex items-center justify-between pt-3 border-t border-[#f0f1f4] dark:border-[#374151]">
<span class="text-lg font-bold text-[#111318] dark:text-white">٢٥٠٠ ر.س</span>
<button class="flex items-center justify-center rounded-lg bg-primary/10 hover:bg-primary text-primary hover:text-white px-3 py-2 text-sm font-bold transition-colors">
<span class="material-symbols-outlined text-lg ml-1">add_shopping_cart</span>
                                    إضافة
                                </button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="flex justify-center py-6">
<div class="flex items-center gap-2">
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-[#dcdee5] dark:border-[#4b5563] bg-white dark:bg-[#2a2e3b] text-[#111318] dark:text-white hover:bg-[#f0f1f4] dark:hover:bg-[#374151]">
<span class="material-symbols-outlined text-xl">chevron_right</span>
</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-[#dcdee5] dark:border-[#4b5563] bg-white dark:bg-[#2a2e3b] text-[#111318] dark:text-white hover:bg-[#f0f1f4] dark:hover:bg-[#374151] font-medium">2</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-[#dcdee5] dark:border-[#4b5563] bg-white dark:bg-[#2a2e3b] text-[#111318] dark:text-white hover:bg-[#f0f1f4] dark:hover:bg-[#374151] font-medium">3</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-[#dcdee5] dark:border-[#4b5563] bg-white dark:bg-[#2a2e3b] text-[#111318] dark:text-white hover:bg-[#f0f1f4] dark:hover:bg-[#374151]">
<span class="material-symbols-outlined text-xl">chevron_left</span>
</button>
</div>
</div>
</div>
</main>
<?php
get_footer();
?>
