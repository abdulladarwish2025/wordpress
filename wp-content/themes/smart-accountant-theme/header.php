<!DOCTYPE html>
<html class="light" dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<?php wp_head(); ?>
</head>
<body <?php body_class('bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 flex flex-col min-h-screen'); ?>>
<!-- Top Navigation -->
<header class="sticky top-0 z-50 w-full bg-surface-light/95 dark:bg-surface-dark/95 backdrop-blur border-b border-slate-200 dark:border-slate-800 transition-colors duration-300">
<div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex h-16 items-center justify-between gap-4">
<!-- Logo & Brand -->
<div class="flex items-center gap-2 flex-shrink-0">
<div class="size-8 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-4xl">calculate</span>
</div>
<span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white"><?php bloginfo('name'); ?></span>
</div>
<!-- Navigation Links (Desktop) -->
<?php
wp_nav_menu( array(
    'theme_location' => 'primary_menu',
    'container'      => 'nav',
    'container_class'=> 'hidden md:flex items-center gap-8',
    'menu_class'     => 'flex items-center gap-8',
    'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
    'add_li_class'   => 'text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors',
) );
?>
<!-- Search Bar (Desktop) -->
<div class="hidden lg:flex flex-1 max-w-sm mx-4">
<div class="relative w-full">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="block w-full rounded-lg border-0 py-2 pr-10 pl-4 bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white ring-1 ring-inset ring-slate-200 dark:ring-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" placeholder="بحث عن منتج..." type="text"/>
</div>
</div>
<!-- Actions -->
<div class="flex items-center gap-3">
<button class="relative p-2 text-slate-500 hover:text-primary dark:text-slate-400 dark:hover:text-primary transition-colors">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute top-1 left-1 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-[10px] font-bold text-white">2</span>
</button>
<button class="hidden sm:flex items-center justify-center rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-blue-700 transition-colors shadow-sm shadow-blue-500/30">
                        تسجيل الدخول
                    </button>
<!-- Mobile Menu Button -->
<button class="md:hidden p-2 text-slate-500 hover:text-primary">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</div>
</div>
</header>
<main class="flex-grow">
