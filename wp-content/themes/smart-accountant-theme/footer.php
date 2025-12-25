</main>
<!-- Footer -->
<footer class="bg-slate-900 text-slate-300 py-12 border-t border-slate-800">
<div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
<!-- Brand Col -->
<div class="col-span-1 md:col-span-2 lg:col-span-1">
<div class="flex items-center gap-2 mb-6 text-white">
<span class="material-symbols-outlined text-3xl text-primary">calculate</span>
<span class="text-xl font-bold"><?php bloginfo('name'); ?></span>
</div>
<p class="text-slate-400 text-sm leading-relaxed mb-6">
                        وجهتك الأولى للحلول المحاسبية الرقمية. نساعدك على تنظيم أعمالك وتنمية أرباحك بكل سهولة.
                    </p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-colors" href="#">
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
</a>
<a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-colors" href="#">
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 24 24"><path clip-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.407-.06 3.808-.06zm0 1.838c-2.39 0-2.68.01-3.626.052-1.064.047-1.642.228-2.029.38a2.955 2.955 0 00-1.096.713 2.955 2.955 0 00-.713 1.096c-.152.387-.333.965-.38 2.029-.043.946-.053 1.236-.053 3.626 0 2.39.01 2.68.053 3.626.047 1.064.228 1.642.38 2.029.213.551.492.986.907 1.402.416.416.85.694 1.401.907.387.152.965.333 2.029.38.946.043 1.236.053 3.626.053 2.39 0 2.68-.01 3.626-.053 1.064-.047 1.642-.228 2.029-.38a2.955 2.955 0 001.402-.907 2.955 2.955 0 00.907-1.401c.152-.387.333-.965.38-2.029.043-.946.053-1.236.053-3.626 0-2.39-.01-2.68-.053-3.626-.047-1.064-.228-1.642-.38-2.029a2.955 2.955 0 00-.907-1.402 2.955 2.955 0 00-1.401-.907c-.387-.152-.965-.333-2.029-.38-.946-.043-1.236-.053-3.626-.053zM12.315 6.678a5.637 5.637 0 110 11.275 5.637 5.637 0 010-11.275zm0 1.838a3.799 3.799 0 100 7.598 3.799 3.799 0 000-7.598zm5.903-3.84a1.224 1.224 0 110 2.448 1.224 1.224 0 010-2.448z" fill-rule="evenodd"></path></svg>
</a>
</div>
</div>
<!-- Links Col 1 -->
<div>
<h3 class="text-white font-bold mb-4">روابط سريعة</h3>
<?php
wp_nav_menu( array(
    'theme_location' => 'footer_quick_links',
    'container'      => false,
    'menu_class'     => 'space-y-3',
    'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
) );
?>
</div>
<!-- Links Col 2 -->
<div>
<h3 class="text-white font-bold mb-4">الدعم والمساعدة</h3>
<?php
wp_nav_menu( array(
    'theme_location' => 'footer_support_links',
    'container'      => false,
    'menu_class'     => 'space-y-3',
    'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
) );
?>
</div>
<!-- Newsletter -->
<div>
<h3 class="text-white font-bold mb-4">النشرة البريدية</h3>
<p class="text-sm text-slate-400 mb-4">اشترك ليصلك جديد المنتجات والعروض الحصرية.</p>
<div class="flex flex-col gap-2">
<input class="w-full rounded-lg bg-slate-800 border border-slate-700 text-white placeholder:text-slate-500 focus:ring-primary focus:border-primary" placeholder="البريد الإلكتروني" type="email"/>
<button class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">اشتراك</button>
</div>
</div>
</div>
<div class="pt-8 border-t border-slate-800 text-center text-sm text-slate-500">
<p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. جميع الحقوق محفوظة.</p>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body></html>
