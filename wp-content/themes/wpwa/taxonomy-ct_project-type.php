<?php
$Query = new WP_Query([
    'post_type' => 'cpt_projects',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => '99',
    'tax_query' => array(
        array(
            'taxonomy' => 'ct_project-type',
            'terms' => get_queried_object_id(),
        )
    )
]);
$projecttypes = get_terms('ct_project-type', array(
    'orderby'    => 'count',
    'hide_empty' => 1,
));
?>
<section class="section feature-cards bg-light-green pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="list-group project-types mb-5">
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action <?= is_post_type_archive('cpt_projects') ? 'active' : null; ?>" href="<?= get_post_type_archive_link('cpt_projects'); ?>">
                        All Projects
                        <span class="badge badge-primary badge-pill"><?= wp_count_posts('cpt_projects')->publish; ?></span>
                    </a>
                    <?php foreach ($projecttypes as $projecttype) : ?>
                        <?php
                        $term_id = $projecttype->term_id;
                        $name = $projecttype->name;
                        ?>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?= $term_id === get_queried_object_id() ? 'active' : null; ?>" href="<?= esc_url(get_term_link($projecttype)); ?>">
                            <?= $projecttype->name ?>
                            <span class="badge badge-primary badge-pill"><?= $projecttype->count; ?></span>
                        </a>
                    <?php endforeach; ?>
                </aside>
            </div>
            <div class="col-md-8 card-deck">
                <?php while ($Query->have_posts()) : $Query->the_post(); ?>
                    <?php get_template_part('views/feature-card'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php //the_posts_navigation(); 
?>
