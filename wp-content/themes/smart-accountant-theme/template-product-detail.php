<?php
/* Template Name: Product Detail Page */
get_header();
?>
<!-- Main Content -->
<main class="layout-container flex flex-col mx-auto max-w-[1280px] w-full px-4 lg:px-10 py-6 gap-8">
<!-- Breadcrumbs -->
<div class="flex flex-wrap gap-2 items-center text-sm">
<a class="text-[#636e88] hover:text-primary transition-colors font-medium leading-normal" href="#">الرئيسية</a>
<span class="material-symbols-outlined text-[#636e88] text-base" style="font-size: 16px;">chevron_left</span>
<a class="text-[#636e88] hover:text-primary transition-colors font-medium leading-normal" href="#">البرامج المحاسبية</a>
<span class="material-symbols-outlined text-[#636e88] text-base" style="font-size: 16px;">chevron_left</span>
<span class="text-[#111318] dark:text-white font-bold leading-normal">نظام المحاسبة السحابي</span>
</div>
<!-- Product Hero Section -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-[#e5e7eb] dark:border-[#2d3748]">
<!-- Right Side: Image Gallery -->
<div class="lg:col-span-7 flex flex-col gap-4">
<div class="w-full aspect-video lg:aspect-[16/10] bg-gray-100 rounded-xl overflow-hidden relative group">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern accounting software dashboard on a laptop screen" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBTHI_mNfVynNTC9fOltxVl6Jjkobdqs6so1eWfm1V4qv4ErpaakM0BaozLq66rjCkbwjoju4WIbdUpZZ73t7UIf4G4cID2eLp4V64CUR2c5Y9NtGwvID-JUL6PYUFPDPEDM5IMm1TDgN6uHOcR8qN0YdUhIqJW2v5FBnUw-kl6f5R2Gj67DzDOpENncDYikV-9HZGZOv8ohZacruJM6xDNJv-xULX9xJC4HGZiS8RFl0nrAqcGqdgTjklwBUSpQ37TbXbLlFFC4Kg');">
</div>
<div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                            الأكثر مبيعاً
                        </div>
</div>
<div class="grid grid-cols-4 gap-4">
<button class="aspect-video rounded-lg overflow-hidden border-2 border-primary cursor-pointer ring-2 ring-primary/20">
<div class="w-full h-full bg-cover bg-center" data-alt="Dashboard view thumbnail" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBWaTRW8tE3l314PcoPhxRrZaKstUhJa6FjJdDBLmdyETEEMaWt0ypdWBq-Y_uQJqFXYgL95SZUyVO6QMjPXyPztJ9XahR1vwPl8cLVJJmXDXIBDPinOORku5z33q-OLt8hdX8Wei_KLCxKZF7XAMNsk0rPUHp1Xh0-3N6Sem4EIK9MJC1s35yDii2agFUQxgCN-1Mn1Jo7DhIxMy7y3M0oolVKCxkYmT3WQptsukb5Y08MD_psgMgpVU2P68kKt9h_oaUUekyJVxg');"></div>
</button>
<button class="aspect-video rounded-lg overflow-hidden border border-transparent hover:border-gray-300 dark:hover:border-gray-600 cursor-pointer opacity-70 hover:opacity-100 transition-all">
<div class="w-full h-full bg-cover bg-center" data-alt="Financial charts and graphs thumbnail" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBiV28_vfK6KALGAQazjmrPjuR83dq3wrvEX9dh5opnxzZpZHDpwcEJ2aC6xEyvyil4kl95S3px3xsc7yfQ05cRpt4ANj5kbFgEipdDjYfoAKyQ2PQevS5XGsW2EdGq67_7KHND_WXlG90Iz5mtC60LLjtfjZyk8vdtR9sFMQvcTSDvRGFEm7L_w5wCt_nFZ1ytVbL4R-mxQ6oXcW43jQ9ulQIENQ6UYlYt7Han3ilMFdkrxxMDTFo529xQa8d3RfN_Z-1LFuZwXXY');"></div>
</button>
<button class="aspect-video rounded-lg overflow-hidden border border-transparent hover:border-gray-300 dark:hover:border-gray-600 cursor-pointer opacity-70 hover:opacity-100 transition-all">
<div class="w-full h-full bg-cover bg-center" data-alt="Data analysis report thumbnail" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBQ8J6ds-AKk5beQVEsrxSU7Sw0i3RarqKGMVvKWUwj8QAun2FHueblWxJW-phb4qgaxdSne7BGqDP0XurdZLEXiDeJ7Bqu-FXCXM_pVPtvaTWJZwXmINIdAhhObRp-26XKfFtHKzvZXKKYcNLQqlGzm-6WdItMDFcUJWDD9XpnGuvnjDLiSU8n3G_mJ08FmPebH8s8qYj8bKwhTc7kmU6UnxT8g1BsRgAXLFBm91j-HKX3-JcXbbA0T3ZaGp8ptMCcIvBCbGAfESk');"></div>
</button>
<button class="aspect-video rounded-lg overflow-hidden border border-transparent hover:border-gray-300 dark:hover:border-gray-600 cursor-pointer opacity-70 hover:opacity-100 transition-all relative">
<div class="w-full h-full bg-cover bg-center" data-alt="Team working on finances thumbnail" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAOL9LSuurhKnq2OC0gw1nniNCdt0LCXGpABWIyDD6Vyk0amWb9lTWnJfNPay0-d_cxoNBZxaPasZ-goouKW98ayPoQDYCuCcVo6FzZqEUFA_PUTV_ubi9_1L9OT01TqyUIdvlhw_mK8ea2TTSQ7mWtKnJwKZRqG7d8L7iptrJggocw7T-nTOZh9OJPxztsIS3e_GaO43E4JyfXuGHoBSTXOOkUiKpDxUwrYK_myp1ruauhL-iIO-rIKu3B-qNlLSVtyUaqAF6TSZ8');"></div>
<div class="absolute inset-0 bg-black/50 flex items-center justify-center text-white font-bold text-sm">
                                +٥ صور
                            </div>
</button>
</div>
</div>
<!-- Left Side: Product Info -->
<div class="lg:col-span-5 flex flex-col gap-6">
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2 mb-1">
<span class="bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 text-xs font-bold px-2 py-1 rounded">متوفر حالياً</span>
<span class="flex items-center gap-1 text-amber-500 text-sm font-bold">
<span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                ٤.٨ (١٢٠ تقييم)
                            </span>
</div>
<h1 class="text-[#111318] dark:text-white text-3xl lg:text-4xl font-extrabold leading-tight">نظام المحاسبة السحابي المتكامل</h1>
<p class="text-[#636e88] dark:text-gray-400 text-lg font-normal leading-relaxed">
                            حل شامل لإدارة العمليات المالية والمحاسبية لشركتك. احصل على تقارير دقيقة وفواتير إلكترونية متوافقة مع هيئة الزكاة والدخل بضغطة زر.
                        </p>
</div>
<div class="h-px bg-gray-200 dark:bg-gray-700 w-full"></div>
<div class="flex flex-col gap-4">
<div class="flex items-end gap-2">
<span class="text-primary text-4xl font-black tracking-tight">١٩٩ ر.س</span>
<span class="text-[#636e88] dark:text-gray-400 text-lg font-medium mb-1">/ شهرياً</span>
</div>
<p class="text-sm text-[#636e88] dark:text-gray-400">يشمل ضريبة القيمة المضافة ١٥٪</p>
</div>
<div class="flex flex-col gap-3 mt-2">
<div class="flex items-center gap-3 text-sm text-[#111318] dark:text-gray-200">
<span class="material-symbols-outlined text-green-600">check_circle</span>
<span>تجربة مجانية لمدة ١٤ يوم</span>
</div>
<div class="flex items-center gap-3 text-sm text-[#111318] dark:text-gray-200">
<span class="material-symbols-outlined text-green-600">check_circle</span>
<span>دعم فني مباشر على مدار الساعة</span>
</div>
<div class="flex items-center gap-3 text-sm text-[#111318] dark:text-gray-200">
<span class="material-symbols-outlined text-green-600">check_circle</span>
<span>تدريب مجاني للموظفين</span>
</div>
</div>
<div class="flex flex-col gap-3 mt-auto pt-6">
<button class="w-full flex items-center justify-center gap-2 bg-primary hover:bg-blue-700 text-white text-lg font-bold py-3.5 px-6 rounded-lg transition-all shadow-lg shadow-blue-500/20">
<span class="material-symbols-outlined">shopping_cart</span>
<span>أضف إلى السلة</span>
</button>
<div class="grid grid-cols-2 gap-3">
<button class="flex items-center justify-center gap-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-[#111318] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 font-bold py-3 px-4 rounded-lg transition-colors">
<span class="material-symbols-outlined">description</span>
<span>طلب عرض سعر</span>
</button>
<button class="flex items-center justify-center gap-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-[#111318] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 font-bold py-3 px-4 rounded-lg transition-colors">
<span class="material-symbols-outlined">chat</span>
<span>تواصل معنا</span>
</button>
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
<!-- Details Tabs & Content -->
<div class="flex flex-col gap-6 mt-8">
<!-- Tab Headers -->
<div class="border-b border-gray-200 dark:border-gray-700 overflow-x-auto">
<nav aria-label="Tabs" class="flex gap-8 min-w-max">
<button class="border-b-2 border-primary text-primary py-4 px-1 text-base font-bold text-center relative">
                            تفاصيل الخدمة
                        </button>
<button class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 py-4 px-1 text-base font-medium text-center transition-colors">
                            المميزات التقنية
                        </button>
<button class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 py-4 px-1 text-base font-medium text-center transition-colors">
                            متطلبات التشغيل
                        </button>
<button class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 py-4 px-1 text-base font-medium text-center transition-colors">
                            الأسئلة الشائعة
                        </button>
</nav>
</div>
<!-- Tab Content: Description -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2 flex flex-col gap-6 text-[#111318] dark:text-gray-200">
<div class="prose dark:prose-invert max-w-none">
<h3 class="text-xl font-bold mb-3">عن النظام</h3>
<p class="leading-loose text-gray-600 dark:text-gray-300 mb-6">
                                نظام السلة الرقمية المحاسبي هو الحل الأمثل للشركات الصغيرة والمتوسطة التي تبحث عن الكفاءة والسرعة في إدارة شؤونها المالية. تم تصميم النظام ليوافق المعايير المحاسبية الدولية مع مراعاة القوانين والأنظمة المحلية في المملكة العربية السعودية. يتيح لك النظام تتبع النفقات، إدارة الأصول، وإصدار الفواتير الإلكترونية بكل سهولة من أي مكان وفي أي وقت.
                            </p>
<h3 class="text-xl font-bold mb-3">لماذا تختار نظامنا؟</h3>
<ul class="flex flex-col gap-3 list-none p-0">
<li class="flex gap-3 items-start">
<span class="material-symbols-outlined text-primary mt-1">rocket_launch</span>
<div>
<span class="font-bold block text-[#111318] dark:text-white">سرعة في الأداء</span>
<span class="text-sm text-gray-600 dark:text-gray-400">واجهة مستخدم سريعة الاستجابة تضمن إنجاز مهامك في وقت قياسي.</span>
</div>
</li>
<li class="flex gap-3 items-start">
<span class="material-symbols-outlined text-primary mt-1">security</span>
<div>
<span class="font-bold block text-[#111318] dark:text-white">أمان وخصوصية</span>
<span class="text-sm text-gray-600 dark:text-gray-400">تشفير عالي المستوى لبياناتك المالية مع نسخ احتياطي تلقائي يومي.</span>
</div>
</li>
<li class="flex gap-3 items-start">
<span class="material-symbols-outlined text-primary mt-1">sync_alt</span>
<div>
<span class="font-bold block text-[#111318] dark:text-white">تكامل مرن</span>
<span class="text-sm text-gray-600 dark:text-gray-400">إمكانية الربط مع أنظمة نقاط البيع والمتاجر الإلكترونية بسهولة عبر API.</span>
</div>
</li>
</ul>
</div>
</div>
<!-- Sidebar: Summary/Download -->
<div class="lg:col-span-1">
<div class="bg-primary/5 dark:bg-primary/10 rounded-xl p-6 border border-primary/10 dark:border-primary/20 sticky top-6">
<h4 class="text-lg font-bold mb-4 text-[#111318] dark:text-white">ملفات ومستندات</h4>
<div class="flex flex-col gap-3">
<a class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg hover:shadow-md transition-shadow group" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-red-500">picture_as_pdf</span>
<span class="text-sm font-medium group-hover:text-primary transition-colors">دليل المستخدم.pdf</span>
</div>
<span class="material-symbols-outlined text-gray-400 text-sm">download</span>
</a>
<a class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg hover:shadow-md transition-shadow group" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-blue-500">description</span>
<span class="text-sm font-medium group-hover:text-primary transition-colors">قائمة الأسعار.pdf</span>
</div>
<span class="material-symbols-outlined text-gray-400 text-sm">download</span>
</a>
</div>
<div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
<h4 class="text-lg font-bold mb-4 text-[#111318] dark:text-white">تحتاج مساعدة؟</h4>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-cover bg-center" data-alt="Support agent portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA8yZNSk-3qSuOXKKcos7w-eEEI_i9XSY5AARewXgeJTSr9iSQ_P68WIoWSevG9JR64bOs1W-62bAd98OjS6YfTK2hkmf_AzK0cgy4Z9po0pxhwu7XebTAsz56gM0Ald9x_6x0YTrjjagb6lffZl-YQETyuHOCnLyO_OJjEMi5JL7B6MqcG8NnjirWEvmrTlox3u7TRkcZ0nMR0vnBi2_m2ieeOzdu1uuaReY6_RZaJDnrM_LP557lT5ehxCVxoPhNpqczSalVCw6M');"></div>
<div>
<p class="font-bold text-sm">أحمد محمد</p>
<p class="text-xs text-gray-500 mb-1">استشاري مبيعات</p>
<a class="text-primary text-xs font-bold hover:underline" href="#">تحدث مع أحمد</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Pricing Section -->
<div class="mt-12">
<div class="flex flex-col gap-2 mb-8 items-center text-center">
<h2 class="text-2xl md:text-3xl font-bold text-[#111318] dark:text-white">باقات تناسب الجميع</h2>
<p class="text-gray-500 dark:text-gray-400">اختر الباقة التي تناسب حجم أعمالك وابدأ فوراً</p>
</div>
<div class="grid grid-cols-[repeat(auto-fit,minmax(280px,1fr))] gap-6 @3xl:grid-cols-3">
<!-- Basic Plan -->
<div class="flex flex-col gap-4 rounded-xl border border-solid border-[#dcdee5] dark:border-[#2d3748] bg-surface-light dark:bg-surface-dark p-6 hover:shadow-lg transition-shadow duration-300">
<div class="flex flex-col gap-1">
<h3 class="text-[#111318] dark:text-white text-lg font-bold leading-tight">الباقة الأساسية</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">للشركات الناشئة والصغيرة</p>
<div class="my-4 h-px w-full bg-gray-100 dark:bg-gray-700"></div>
<p class="flex items-baseline gap-1 text-[#111318] dark:text-white">
<span class="text-4xl font-black leading-tight tracking-[-0.033em]">١٩٩ ر.س</span>
<span class="text-base font-medium text-gray-500 dark:text-gray-400">شهرياً</span>
</p>
</div>
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-[#f0f1f4] dark:bg-[#2d3748] hover:bg-gray-200 dark:hover:bg-gray-600 text-[#111318] dark:text-white text-sm font-bold leading-normal transition-colors">
<span class="truncate">اختر الباقة</span>
</button>
<div class="flex flex-col gap-3 mt-2">
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-[20px]">check</span>
                                عدد مستخدمين محدود (٢)
                            </div>
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-[20px]">check</span>
                                فواتير حتى ١٠٠ شهرياً
                            </div>
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-[20px]">check</span>
                                دعم عبر البريد الإلكتروني
                            </div>
</div>
</div>
<!-- Business Plan (Highlighted) -->
<div class="flex flex-col gap-4 rounded-xl border-2 border-solid border-primary bg-white dark:bg-surface-dark p-6 relative shadow-xl transform lg:-translate-y-2">
<div class="absolute top-0 right-1/2 translate-x-1/2 -translate-y-1/2 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">الأكثر شيوعاً</div>
<div class="flex flex-col gap-1">
<h3 class="text-[#111318] dark:text-white text-lg font-bold leading-tight text-primary">باقة الأعمال</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">للشركات المتنامية</p>
<div class="my-4 h-px w-full bg-gray-100 dark:bg-gray-700"></div>
<p class="flex items-baseline gap-1 text-[#111318] dark:text-white">
<span class="text-4xl font-black leading-tight tracking-[-0.033em]">٣٩٩ ر.س</span>
<span class="text-base font-medium text-gray-500 dark:text-gray-400">شهرياً</span>
</p>
</div>
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-primary hover:bg-blue-700 text-white text-sm font-bold leading-normal transition-colors shadow-lg shadow-blue-500/30">
<span class="truncate">اختر الباقة</span>
</button>
<div class="flex flex-col gap-3 mt-2">
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary text-[20px]">check</span>
                                ٥ مستخدمين
                            </div>
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary text-[20px]">check</span>
                                فواتير غير محدودة
                            </div>
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary text-[20px]">check</span>
                                إدارة المخزون
                            </div>
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary text-[20px]">check</span>
                                دعم فني مباشر
                            </div>
</div>
</div>
<!-- Enterprise Plan -->
<div class="flex flex-col gap-4 rounded-xl border border-solid border-[#dcdee5] dark:border-[#2d3748] bg-surface-light dark:bg-surface-dark p-6 hover:shadow-lg transition-shadow duration-300">
<div class="flex flex-col gap-1">
<h3 class="text-[#111318] dark:text-white text-lg font-bold leading-tight">باقة الشركات</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">للمؤسسات الكبيرة</p>
<div class="my-4 h-px w-full bg-gray-100 dark:bg-gray-700"></div>
<p class="flex items-baseline gap-1 text-[#111318] dark:text-white">
<span class="text-4xl font-black leading-tight tracking-[-0.033em]">٨٩٩ ر.س</span>
<span class="text-base font-medium text-gray-500 dark:text-gray-400">شهرياً</span>
</p>
</div>
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-[#f0f1f4] dark:bg-[#2d3748] hover:bg-gray-200 dark:hover:bg-gray-600 text-[#111318] dark:text-white text-sm font-bold leading-normal transition-colors">
<span class="truncate">اختر الباقة</span>
</button>
<div class="flex flex-col gap-3 mt-2">
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-[20px]">check</span>
                                مستخدمين غير محدودين
                            </div>
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-[20px]">check</span>
                                ربط API متقدم
                            </div>
<div class="text-sm font-normal leading-normal flex gap-3 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-[20px]">check</span>
                                مدير حساب خاص
                            </div>
</div>
</div>
</div>
</div>
<!-- Reviews Section -->
<div class="mt-16">
<div class="flex items-center justify-between mb-8">
<h2 class="text-2xl font-bold text-[#111318] dark:text-white">آراء العملاء</h2>
<a class="text-primary text-sm font-bold hover:underline" href="#">عرض الكل</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Review Card 1 -->
<div class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl border border-gray-100 dark:border-[#2d3748] shadow-sm">
<div class="flex items-center gap-4 mb-4">
<div class="w-10 h-10 rounded-full bg-cover bg-center" data-alt="Customer avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBBcdrLWxS-XIhsA6_4ylwDX7M9KlvGIOby5Qzz6Xov--eTw0vkK4x8y5m3ZNsHizlx7jGz9U3bzZqTw87BpyCvMYMSmzNcFncGFhcWvgxZqX47RrGmip_PZ4Du98uTYv8n4XopQE6V6Lg_jo6vk8bVZUFKPjeYS7CzmIov_fFJYAdSg_CYsmHTd7YTu6zPuFl8Tru783SQ2gXulMGLpseRPUiXY__LwXWmBwQYN43Ul_xRFDibE6SFORnwVwRFOWRaAMjqbCKN5nI');"></div>
<div>
<p class="font-bold text-sm text-[#111318] dark:text-white">سالم العتيبي</p>
<div class="flex text-amber-500 text-xs">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
</div>
</div>
<span class="mr-auto text-xs text-gray-400">منذ يومين</span>
</div>
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            "نظام ممتاز جداً وسهل الاستخدام. ساعدنا في تنظيم فواتيرنا ومتابعة المخزون بشكل دقيق. خدمة العملاء متجاوبة وسريعة في الحل."
                        </p>
</div>
<!-- Review Card 2 -->
<div class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl border border-gray-100 dark:border-[#2d3748] shadow-sm">
<div class="flex items-center gap-4 mb-4">
<div class="w-10 h-10 rounded-full bg-cover bg-center" data-alt="Customer avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDALOyLZ1w28jmYziS-I_v7mql7R5-2_jtApw2VRnKtcjit1qTJkK5fisLRLgqZze00Q8i7n6c_lSH9R_YNb6QUVypqPg6GKjc0D48QHSlpoo_OFEMY0dJW4pdICAeUcvas-Ii-NthDukEVgCQk63dAgNFTy0_6zwlppx63qGfL3fH5koNdyfsEv_xs9Q1sXSuuKzOFjpXwHYTElxrLEjp79ILf2gA4VcxfN-etPCM6zXAGa7kWqA8QHwsOLuoKqDaawyhFE_BKJWU');"></div>
<div>
<p class="font-bold text-sm text-[#111318] dark:text-white">نورة القحطاني</p>
<div class="flex text-amber-500 text-xs">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star_half</span>
</div>
</div>
<span class="mr-auto text-xs text-gray-400">منذ أسبوع</span>
</div>
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            "واجهة المستخدم نظيفة وواضحة. خاصية التقارير الضريبية وفرت علينا الكثير من الوقت والجهد. أنصح به لأي شركة ناشئة."
                        </p>
</div>
<!-- Review Card 3 -->
<div class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl border border-gray-100 dark:border-[#2d3748] shadow-sm">
<div class="flex items-center gap-4 mb-4">
<div class="w-10 h-10 rounded-full bg-cover bg-center" data-alt="Customer avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB7iCnVtgyxGFFJbRca3iho62LiemItz7P0uUMej9Cedayw2FHOUQWhIGMdVCkvIY91yFAJyLW83t8ZQmx1ZmjG9_WubU0Apq6WU1jdCtOxVb5QO3Fat9w14NOT2bQfVoXsIP5JfldBZ1LsRMZ5mOIy1c6VJqM-rpEwre5NwEGIt6F2thNUT9qE1x-ZPlm_MzebFmplXFDKQW5khj6ogTweNSq8csIrbCCmvkxKAS7rZRgaFjdUdjPsECNzF89CIxoilonb-fURddQ');"></div>
<div>
<p class="font-bold text-sm text-[#111318] dark:text-white">فهد الدوسري</p>
<div class="flex text-amber-500 text-xs">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
</div>
</div>
<span class="mr-auto text-xs text-gray-400">منذ شهر</span>
</div>
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            "أفضل استثمار قمنا به للشركة. الباقة المتكاملة تغطي كل احتياجاتنا. شكراً لفريق السلة الرقمية على هذا الإبداع."
                        </p>
</div>
</div>
</div>
<!-- Related Products -->
<div class="mt-16 mb-8">
<h2 class="text-2xl font-bold text-[#111318] dark:text-white mb-6">منتجات ذات صلة</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Item 1 -->
<div class="group flex flex-col gap-3 pb-3 cursor-pointer">
<div class="w-full bg-gray-100 dark:bg-gray-800 bg-center bg-no-repeat aspect-[4/3] bg-cover rounded-xl overflow-hidden relative">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="POS system hardware" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDiewJBfutH_Dk9O2QaDk-ocPIsSXC5rYbF5f1ra121NGdyuEAyJm3YwwKLwprwzyQvKV_HG2iNRlo0ovXNfiewqwNc29Dph97uxxrUsSrTn2tvvT-dvnKtadfZ83Hwk9JVqto0tZaCmBCNEVD0DmapKj9Y753U7k9vFnJfh_OFEk42EpK2EOYHXgHTRp19j7lkJB2k9kHqt24CKHZMobji9_x95Y2Q92_NcOFfltz6PPgrQkc5yRdMlrIx2qhcUmHlUcUnwKzrE4M');"></div>
</div>
<div>
<p class="text-[#111318] dark:text-white text-base font-bold leading-normal group-hover:text-primary transition-colors">نظام نقاط البيع (POS)</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm font-normal mt-1">حل متكامل للمتاجر والمطاعم</p>
<p class="text-primary font-bold mt-2">١٥٠ ر.س</p>
</div>
</div>
<!-- Item 2 -->
<div class="group flex flex-col gap-3 pb-3 cursor-pointer">
<div class="w-full bg-gray-100 dark:bg-gray-800 bg-center bg-no-repeat aspect-[4/3] bg-cover rounded-xl overflow-hidden relative">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Documents and calculator on desk" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjS7EdLnji80eG4mzB9-erX1LQ1CXGO7TC7b7BVeBvQIINYJGu6Bx8lE4ixM9w3ZPBAziVRuJ8I3GjWQcDuXOTO2Rc1gpZLjbie8haTBXHh5nQZVXoIk5pQIvzWHJSPeeMfAmgMGantTit-DCU9wKpZjx0Ss6I0HKpwVxbBk10Y7EYfkquXvSPJjEWitlyjMRB1_s2wegqAbjxNjbDretuTepP9oWgdlpDME2xWVGzdz6ekcrti48GvYKqI5bIu7ChNUnAAjjYHKw');"></div>
</div>
<div>
<p class="text-[#111318] dark:text-white text-base font-bold leading-normal group-hover:text-primary transition-colors">الاستشارات الضريبية</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm font-normal mt-1">خدمة استشارية من خبراء معتمدين</p>
<p class="text-primary font-bold mt-2">٣٠٠ ر.س</p>
</div>
</div>
<!-- Item 3 -->
<div class="group flex flex-col gap-3 pb-3 cursor-pointer">
<div class="w-full bg-gray-100 dark:bg-gray-800 bg-center bg-no-repeat aspect-[4/3] bg-cover rounded-xl overflow-hidden relative">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Analytics dashboard on tablet" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBBqVncwTh5eG0vQxqKJxQr_uV4DmSLTRs5htfFm_PLO-mKGc2UeOLjjgowz9WTwl5DmOg3h7p4zY9J5xCXie4s6Zrp30Gc4fQ3VjbDDB4VNxPlgA9eVjjKnK1LjaYbgHt1kqfu8pX5wjDC_fyGlJmWZyy6gZ3zt0fqr_mVVMDAe-Mp3JCEXhsW_e-0F3GP6ngCldwLVJPbAReK6zpPEiewdi0EzkbgS8LHXGX0xQTEk3ndQ5-D9zhwEHcZ6cwACUjcjrU2o0lII7k');"></div>
</div>
<div>
<p class="text-[#111318] dark:text-white text-base font-bold leading-normal group-hover:text-primary transition-colors">لوحة تحكم المديرين</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm font-normal mt-1">تابع أداء شركتك لحظة بلحظة</p>
<p class="text-primary font-bold mt-2">٩٩ ر.س</p>
</div>
</div>
<!-- Item 4 -->
<div class="group flex flex-col gap-3 pb-3 cursor-pointer">
<div class="w-full bg-gray-100 dark:bg-gray-800 bg-center bg-no-repeat aspect-[4/3] bg-cover rounded-xl overflow-hidden relative">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Security lock concept" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB61mqe1jOp6MjaTszS71XYKDOexl0Fq8S8T5vPRQvVJ8zX1WD_tRh-Z7nZ1zDNT-e9G5VuUL4m5tT9C4qQnm9BNFZRPwlGvrx3koQs2R_SAbLTemrcTN_ofciUUZk2m17nigrySx9IMBXGIj1--JH5rBLKGT4s0qCHCh7WhQMigLkkjAvH1FcaxtT2QT2_9ZQBvAhw1kssMg8kDbUNxetNuoefBZtVlf1kgNes9ylYuJxTuSf-dCnnDtVzkK7m0xsKew8Q1fSRrso');"></div>
</div>
<div>
<p class="text-[#111318] dark:text-white text-base font-bold leading-normal group-hover:text-primary transition-colors">حماية البيانات المالية</p>
<p class="text-[#636e88] dark:text-gray-400 text-sm font-normal mt-1">أمن سيبراني متقدم لحساباتك</p>
<p class="text-primary font-bold mt-2">٢٥٠ ر.س</p>
</div>
</div>
</div>
</div>
</main>
<?php
get_footer();
?>
