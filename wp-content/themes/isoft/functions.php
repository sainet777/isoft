<?php
if ( ! function_exists( 'isoft_revive_setup' ) ) :
    function isoft_revive_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'isoft-revive' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'isoft_revive_setup' );

function isoft_revive_scripts() {
    // Google Fonts
    wp_enqueue_style( 'isoft-revive-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap', array(), null );
    
    // Tailwind CSS via CDN for development (as per design analysis)
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'isoft_revive_scripts' );

function isoft_revive_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#151f47',
                        accent: '#2cc3b4',
                        'accent-dark': '#24a69a',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer components {
            .btn-primary {
                @apply bg-accent hover:bg-accent-dark text-white font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-accent/30;
            }
            .section-padding {
                @apply py-20 px-4 md:px-8;
            }
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'isoft_revive_tailwind_config' );
