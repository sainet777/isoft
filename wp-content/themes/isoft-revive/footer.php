    <footer class="bg-primary text-white pt-20 pb-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <a href="#" class="mb-6 block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="h-10 w-auto brightness-0 invert">
                    </a>
                    <p class="text-white/60 max-w-sm mb-6">
                        Twoje centrum szkoleń i certyfikacji. Pomagamy rozwijać kompetencje cyfrowe i zawodowe od lat.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Linki</h4>
                    <ul class="space-y-4 text-white/60">
                        <li><a href="#about" class="hover:text-accent transition-colors">O nas</a></li>
                        <li><a href="#services" class="hover:text-accent transition-colors">Usługi</a></li>
                        <li><a href="#features" class="hover:text-accent transition-colors">Atuty</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Kontakt</h4>
                    <ul class="space-y-4 text-white/60">
                        <li>biuro@isoft.biz.pl</li>
                        <li>+48 123 456 789</li>
                        <li>ul. Szkoleniowa 1, Kraków</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10 pt-10 flex flex-col md:row justify-between items-center text-white/40 text-sm">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Wszystkie prawa zastrzeżone.</p>
                <div class="mt-4 md:mt-0">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'flex space-x-6' ) ); ?>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
