<?php
$Query = new WP_Query([
    'post_type' => 'cpt_projects',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => '99'
]);
$projecttypes = get_terms('ct_project-type', array(
    'orderby'    => 'count',
    'hide_empty' => 0,
));
?>
<section class="section feature-cards bg-light-green pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside>
                    <ul>
                        <?php foreach ($projecttypes as $projecttype) : ?>
                            <?php
                            $term_id = $projecttype->term_id;
                            $name = $projecttype->name;
                            ?>
                            <li>
                                <a href="<?= esc_url(get_term_link($projecttype)); ?>">
                                    <?= $projecttype->name ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
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
