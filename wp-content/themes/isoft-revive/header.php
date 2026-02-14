<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-primary font-sans' ); ?>>
    <header class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-bold font-heading text-primary">
                    iSoft<span class="text-accent">.biz.pl</span>
                </a>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#about" class="text-primary hover:text-accent font-medium transition-colors">O nas</a>
                <a href="#services" class="text-primary hover:text-accent font-medium transition-colors">Usługi</a>
                <a href="#features" class="text-primary hover:text-accent font-medium transition-colors">Atuty</a>
                <a href="#contact" class="btn-primary">Kontakt</a>
            </div>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-primary focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </nav>
    </header>
