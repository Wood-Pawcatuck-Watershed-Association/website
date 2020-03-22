<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <div class="container pt-3 pb-3">
            <div class="row mb-4">
                <div class="col">
                    <a href="/projects"><i class="fas fa-long-arrow-alt-left"></i> Back to Projects</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
    </article>
<?php endwhile; ?>
