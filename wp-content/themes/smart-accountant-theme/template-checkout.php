<?php
/* Template Name: Checkout Page */
get_header();
?>
<main class="flex-grow flex justify-center py-6 md:py-10 px-4 md:px-8">
<div class="max-w-7xl w-full flex flex-col md:flex-row gap-8">
<!-- Right Side: Forms (Main Content) -->
<div class="flex-1 flex flex-col gap-6 order-2 md:order-1">
<!-- Breadcrumbs -->
<nav class="flex flex-wrap gap-2 mb-2 px-2">
<a class="text-[#636e88] hover:text-primary transition-colors text-sm font-medium leading-normal flex items-center gap-1" href="#">
<span class="material-symbols-outlined text-lg">shopping_cart</span>
                            السلة
                        </a>
<span class="text-[#636e88] text-sm font-medium leading-normal rtl:rotate-180">/</span>
<a class="text-[#636e88] hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">معلومات الشحن</a>
<span class="text-[#636e88] text-sm font-medium leading-normal rtl:rotate-180">/</span>
<span class="text-primary text-sm font-bold leading-normal">الدفع وتأكيد الطلب</span>
</nav>
<!-- Page Heading -->
<div class="flex flex-col gap-2 px-2">
<h1 class="text-[#111318] dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">إتمام عملية الدفع</h1>
<p class="text-[#636e88] dark:text-gray-400 text-base font-normal leading-normal">أكمل بياناتك لإتمام طلبك بأمان، سيتم إرسال الفاتورة إلى بريدك الإلكتروني.</p>
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
<!-- Contact & Shipping Form -->
<div class="bg-white dark:bg-[#1a202e] rounded-xl shadow-sm border border-[#e5e7eb] dark:border-[#2a3140] p-6">
<h2 class="text-[#111318] dark:text-white text-xl font-bold mb-6 flex items-center gap-2">
<span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 text-primary text-sm">1</span>
                            بيانات العميل والشحن
                        </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<label class="flex flex-col gap-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">الاسم الكامل</span>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="محمد أحمد" type="text"/>
</label>
<label class="flex flex-col gap-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">رقم الهاتف</span>
<div class="relative">
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] pl-4 pr-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors text-right" dir="ltr" placeholder="+966 50 000 0000" type="tel"/>
</div>
</label>
<label class="flex flex-col gap-2 md:col-span-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">البريد الإلكتروني</span>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="name@example.com" type="email"/>
</label>
<label class="flex flex-col gap-2 md:col-span-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">العنوان</span>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="الشارع، رقم المبنى، الحي" type="text"/>
</label>
<label class="flex flex-col gap-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">المدينة</span>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="الرياض" type="text"/>
</label>
<label class="flex flex-col gap-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">الرمز البريدي</span>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="12345" type="text"/>
</label>
</div>
</div>
<!-- Payment Method -->
<div class="bg-white dark:bg-[#1a202e] rounded-xl shadow-sm border border-[#e5e7eb] dark:border-[#2a3140] p-6">
<h2 class="text-[#111318] dark:text-white text-xl font-bold mb-6 flex items-center gap-2">
<span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 text-primary text-sm">2</span>
                            طريقة الدفع
                        </h2>
<!-- Tabs -->
<div class="flex gap-4 mb-6 border-b border-[#f0f1f4] dark:border-[#2a3140] pb-2 overflow-x-auto">
<button class="flex items-center gap-2 pb-2 border-b-2 border-primary text-primary font-bold whitespace-nowrap px-2">
<span class="material-symbols-outlined">credit_card</span>
                                بطاقة ائتمان / مدى
                            </button>
<button class="flex items-center gap-2 pb-2 border-b-2 border-transparent text-[#636e88] hover:text-[#111318] font-medium whitespace-nowrap px-2 transition-colors">
<span class="material-symbols-outlined">account_balance</span>
                                تحويل بنكي
                            </button>
<button class="flex items-center gap-2 pb-2 border-b-2 border-transparent text-[#636e88] hover:text-[#111318] font-medium whitespace-nowrap px-2 transition-colors">
<span class="material-symbols-outlined">smartphone</span>
                                Apple Pay
                            </button>
</div>
<!-- Card Form -->
<div class="space-y-5">
<div class="flex gap-3 mb-4">
<div class="h-8 w-12 bg-gray-100 rounded flex items-center justify-center border border-gray-200" data-alt="Visa logo placeholder">
<img alt="Visa" class="h-3 object-contain opacity-70" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWHY5VfXyrz4PYd9xjD2zqyICZALghZTMr83WaGxMUmPqHM47bmM0HQmQdSy4a7YUnhdLCgIv6fSSinhrBsTvPK0GBULqUnZR_7I8rd9wIP4rfMv4Eblcu97nT2H9pP3vVsGngtnShd6SrnzBbMfkAUgIRII2kjgLUbdYO0LWutPwT2wf_4URgczBgMQcfieynDfx85_3OYWTRTV_H0kLTmSkUeUUwjZSbTyxV2dOfwfBGGMebWjsPeXTh-EDYE8vjdP9isQmMqHY"/>
</div>
<div class="h-8 w-12 bg-gray-100 rounded flex items-center justify-center border border-gray-200" data-alt="Mastercard logo placeholder">
<img alt="Mastercard" class="h-5 object-contain opacity-70" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrKNF7sJ_vcsCnwyxvCLcLkdW4R3Hvvo11hNZNVa5dIWMgVNJbci3FF63Gg3DeTMCptxQXCD3pmpOBfZc5Epx3eLN66zKpvkzTR5gx0UOzDzRHA_2cMD-G5rpuOeaZKiC-QXxepuSabdkjbsbrW24UVpaEGAFNF6UaaihtuZ4UlAehVqE910hc5vr9QoTuqpJde3glb_vAh4-H9LQgIBP8RdEjgnaLYcDDegYuwEvVug3CQlFwMVuz3SELis2yk0VNuUqfQdN5EmY"/>
</div>
<div class="h-8 w-12 bg-gray-100 rounded flex items-center justify-center border border-gray-200" data-alt="Mada logo placeholder">
<img alt="Mada" class="h-3 object-contain opacity-70" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_Qa6ra0Z73QUX1vrvzRbXeSxDmBFvwGdrOiLlzmUFNx5mBCS8U-vJzxbj-cPxChrdloPcqUTxs7JiFIYT9l4YOU0JUAIeCEti2xJCeUKuxWCRPTZvBNuT1vNmki1lZwrEQxBDGjAQB-WWxDgV57ZuLIX3KQO7hywwvY8BRI8ezlgoQRX5Njz_6dC0HqT7VaNL01S57kgt9Chha9J4ZUwpa8zgWDGh3Rze9KWu7w9wXpU-ohFjxvMGl8tNunOIxj-86ct8mr_k2zk"/>
</div>
</div>
<label class="flex flex-col gap-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">اسم حامل البطاقة</span>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="كما يظهر على البطاقة" type="text"/>
</label>
<label class="flex flex-col gap-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">رقم البطاقة</span>
<div class="relative">
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] pl-10 pr-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors text-right" dir="ltr" placeholder="0000 0000 0000 0000" type="text"/>
<span class="material-symbols-outlined absolute left-3 top-3 text-gray-400">credit_card</span>
</div>
</label>
<div class="grid grid-cols-2 gap-5">
<label class="flex flex-col gap-2">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">تاريخ الانتهاء</span>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors text-center" dir="ltr" placeholder="MM / YY" type="text"/>
</label>
<label class="flex flex-col gap-2">
<div class="flex items-center justify-between">
<span class="text-[#111318] dark:text-gray-200 text-sm font-medium">رمز الأمان (CVC)</span>
<span class="material-symbols-outlined text-gray-400 text-sm cursor-help" title="3 أرقام خلف البطاقة">help</span>
</div>
<input class="w-full h-12 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-4 text-base focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors text-center" dir="ltr" placeholder="123" type="text"/>
</label>
</div>
</div>
<div class="mt-8">
<button class="w-full h-14 bg-primary hover:bg-blue-700 text-white font-bold text-lg rounded-xl shadow-lg shadow-blue-500/30 transition-all flex items-center justify-center gap-2">
<span>دفع الآن</span>
<span class="material-symbols-outlined rtl:rotate-180">arrow_forward</span>
</button>
<p class="text-center text-xs text-gray-500 mt-4 flex items-center justify-center gap-1">
<span class="material-symbols-outlined text-sm">lock</span>
                                جميع المعاملات مشفرة وآمنة
                            </p>
</div>
</div>
</div>
<!-- Left Side: Order Summary (Sidebar) -->
<div class="w-full md:w-[380px] order-1 md:order-2">
<div class="bg-white dark:bg-[#1a202e] rounded-xl shadow-sm border border-[#e5e7eb] dark:border-[#2a3140] p-6 sticky top-24">
<h3 class="text-[#111318] dark:text-white text-lg font-bold mb-4 pb-4 border-b border-[#f0f1f4] dark:border-[#2a3140]">ملخص الطلب</h3>
<!-- Cart Items -->
<div class="flex flex-col gap-4 mb-6">
<div class="flex gap-3">
<div class="w-16 h-16 rounded-lg bg-gray-100 dark:bg-gray-800 flex-shrink-0 flex items-center justify-center overflow-hidden border border-[#f0f1f4] dark:border-[#2a3140]">
<img alt="Accounting software dashboard abstract" class="w-full h-full object-cover" data-alt="Software dashboard interface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1uL4QcyxzrPOkJfedjhwFP1f36z6bA92BQvU3AYPSZl5XBB-_E5GHNVqK32SosHXLYzUD9vf9wg3Z_rDEzQ9opHcBvStRunNI-eFKzj3s2rbnvqA7ygCu2i9Sw8vlwCmoKrBzOga-iSJTaDsulWQKVjB0xeQrgH6n7A-CKHDJYVNrvyxkfxTI3mLUZQbLUREwfB-pyd6mm6qVvjL9T_nS8zO6Gj4_A5G4fAvidSNGGB9olkRpsvkwqZyY7QRNFWCrOX02OTjl0Bc"/>
</div>
<div class="flex-1">
<div class="flex justify-between items-start">
<h4 class="text-sm font-bold text-[#111318] dark:text-gray-100 leading-tight">برنامج المحاسبة المتكامل</h4>
<span class="text-sm font-bold text-primary">450 ر.س</span>
</div>
<p class="text-xs text-[#636e88] mt-1">ترخيص سنوي - نسخة المؤسسات</p>
</div>
</div>
<div class="flex gap-3">
<div class="w-16 h-16 rounded-lg bg-gray-100 dark:bg-gray-800 flex-shrink-0 flex items-center justify-center overflow-hidden border border-[#f0f1f4] dark:border-[#2a3140]">
<img alt="Consultation meeting abstract" class="w-full h-full object-cover" data-alt="People discussing finance" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGbyqP25TRI7slsu8MVihBO-6mR--93ef_1ByltQME_LxZoiOuicM8U65_j1BppsNfdG6I-Jqx87AnInzOmPofKrDqghF-p-MNwrqGZEBJ3XhvrVbZYLqu9sIrper-gXZc0zo-bYzxo71pjblP_SVeBIDCz1kOZeci7ZOxNeljVOrVdxpakkv9Cx8Qk38VrmCwtv7w2wFONwvDGE7CJopo-_gVItv-ubmf70m7VmA7FZr9rX696HXRR9zHzZvK3pl4G-w2olmL_d4"/>
</div>
<div class="flex-1">
<div class="flex justify-between items-start">
<h4 class="text-sm font-bold text-[#111318] dark:text-gray-100 leading-tight">استشارة ضريبية</h4>
<span class="text-sm font-bold text-primary">200 ر.س</span>
</div>
<p class="text-xs text-[#636e88] mt-1">جلسة ساعة واحدة</p>
</div>
</div>
</div>
<!-- Coupon Code -->
<div class="flex gap-2 mb-6">
<input class="flex-1 h-10 rounded-lg border border-[#dcdee5] dark:border-[#374151] bg-white dark:bg-[#111621] px-3 text-sm outline-none focus:border-primary" placeholder="كود الخصم" type="text"/>
<button class="px-4 h-10 bg-[#f0f1f4] dark:bg-[#374151] hover:bg-gray-200 dark:hover:bg-gray-600 text-[#111318] dark:text-white rounded-lg text-sm font-medium transition-colors">تطبيق</button>
</div>
<!-- Totals -->
<div class="space-y-3 pt-4 border-t border-[#f0f1f4] dark:border-[#2a3140]">
<div class="flex justify-between items-center text-sm text-[#636e88] dark:text-gray-400">
<span>المجموع الفرعي</span>
<span class="font-medium text-[#111318] dark:text-gray-200">650 ر.س</span>
</div>
<div class="flex justify-between items-center text-sm text-[#636e88] dark:text-gray-400">
<span>الضريبة (15%)</span>
<span class="font-medium text-[#111318] dark:text-gray-200">97.5 ر.س</span>
</div>
<div class="flex justify-between items-center text-sm text-[#636e88] dark:text-gray-400">
<span>الشحن</span>
<span class="text-green-600 font-medium">مجاني</span>
</div>
<div class="flex justify-between items-center pt-4 border-t border-dashed border-[#e5e7eb] dark:border-[#374151] mt-2">
<span class="text-base font-bold text-[#111318] dark:text-white">الإجمالي النهائي</span>
<div class="text-right">
<span class="text-xl font-black text-primary">747.5 ر.س</span>
<p class="text-[10px] text-gray-400 font-normal">شاملاً ضريبة القيمة المضافة</p>
</div>
</div>
</div>
<!-- Trust Badges Sidebar -->
<div class="mt-6 pt-4 border-t border-[#f0f1f4] dark:border-[#2a3140]">
<p class="text-xs text-center text-gray-400 mb-3">نقبل وسائل الدفع التالية</p>
<div class="flex justify-center gap-3 opacity-60 grayscale hover:grayscale-0 transition-all">
<img alt="Visa" class="h-4" data-alt="Visa Logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3btE3sr-FMnZlMktdnHGoXzyTDn8P1kBzLjR2LbpLLy8A6xC00R4lm32lFg5tTD_GSsFum9DNZRlNcvLAI7RmKbZNlFMz8m1M-SCFfE1poKtB7x2vxKVoygT4Vd4_JWPNgBlK8Bv40p_IfQ0aEJuO5bKHswNmtMeA1MSBkWNUTBucB5KJoKYdx-PMbiexPBDogKN9uxA9eNtF6VHhBzVd2nzcLEa_dPq1OfYnaSIqFl8GIEBjv5VGQ6knXcLYdgR3MIHrOK3BhwU"/>
<img alt="Mastercard" class="h-4" data-alt="Mastercard Logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXbIbJ8fSqSpBII3TezwI2vyJPZmtEwd_EJAHZZnsKDJWvxFXNzw-Buca5hjdAHYO4CuRlN9nxqc34mDtA5JV37dekOrmKg0YFxDqBOLY0Hx08_SGNX1NzafIDg-jy6F75x64purz_QcqoyPYlQMlEXUiOkXnoYJG2_-kzs7Ff1My0Yw45Skk9So5iJhPymWUuIDdxe8j8CUripftzbkzRnVBD2Q7RxJZbfz_gWxe35O4JcXY6_1GyUZ6I3oi-pn3WeEq2DltPOAQ"/>
<img alt="Paypal" class="h-4" data-alt="Paypal Logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBo_temmd4KLg3F9MUMXXaCccWcwXA6xm9mmPZhffJufNNI9Cu3F3CmWK6OV3zmVhWNKcfn56Fams1z1kqktX4AHOTCQRDPn4zH52TOp90vii1Yj8oKLE3vjQ5f-HbFTcMSSK8S76NIWmBmPywBmj3CflEb8qmORo32uny843Q1Tkvm_QP5qmk_W_3dCQ06Amtx5pNAckGbUQZ-QGWbsYonCsF8YqAv_mRB2FLjlgDXfYK9guSzEEtQgF2rejE20VxN7kGOJYGexRw"/>
</div>
</div>
</div>
</div>
</div>
</main>
<?php
get_footer();
?>
