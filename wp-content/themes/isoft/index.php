<?php get_header(); ?>
<div class="container mx-auto px-4 py-32">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="prose lg:prose-xl mx-auto">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
