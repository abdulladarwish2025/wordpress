<!DOCTYPE html>
<html class="light" dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<?php wp_head(); ?>
</head>
<body <?php body_class('bg-background-light dark:bg-background-dark text-text-main dark:text-gray-100 font-display transition-colors duration-300'); ?>>
<header class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-gray-800 bg-surface-light/95 dark:bg-background-dark/95 backdrop-blur-sm">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex h-16 items-center justify-between">
<div class="flex items-center gap-3">
<div class="flex items-center justify-center size-8 text-primary">
<span class="material-symbols-outlined text-3xl">calculate</span>
</div>
<h1 class="text-xl font-bold tracking-tight text-text-main dark:text-white">المحاسب الذكي</h1>
</div>
<?php
wp_nav_menu( array(
    'theme_location' => 'primary_menu',
    'container'      => 'nav',
    'container_class'=> 'hidden md:flex items-center gap-8',
    'menu_class'     => 'hidden md:flex items-center gap-8',
    'items_wrap'     => '%3$s',
    'add_li_class'  => 'text-sm font-medium hover:text-primary transition-colors',
) );
?>
<div class="flex items-center gap-3">
<button class="hidden sm:flex items-center justify-center h-10 px-4 rounded-lg bg-primary hover:bg-primary-dark text-white text-sm font-bold transition-colors">
                    تسجيل الدخول
                </button>
<button class="flex items-center justify-center size-10 rounded-lg bg-background-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 text-text-main dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors relative">
<span class="material-symbols-outlined text-[20px]">shopping_cart</span>
<span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-primary text-[10px] font-bold text-white">2</span>
</button>
<button class="md:hidden flex items-center justify-center size-10 rounded-lg text-text-main dark:text-white">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</div>
</div>
</header>
