<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

Block::make(__('Feature Cards'))
    ->add_fields(array(
        Field::make('complex', 'feature_cards')
            ->set_layout('tabbed-horizontal')
            ->setup_labels(array(
                'plural_name' => 'Cards',
                'singular_name' => 'Card',
            ))
            ->add_fields(array(
                Field::make('text', 'title'),
                Field::make('textarea', 'content'),
                Field::make('text', 'link'),
                Field::make('text', 'learn_more_text')
                    ->set_default_value('Learn More')
            ))
    ))
    ->set_category('wpwa', __('WPWA'), 'smiley')
    ->set_render_callback(function ($block) {
?>
    <section class="section feature-cards bg-light-green pt-5">
        <div class="container">
            <div class="row card-deck">
                <?php if (!empty($block['feature_cards'])) : ?>
                    <?php foreach ($block['feature_cards'] as $card) : ?>
                        <div class="col-sm-12 col-md-6 mb-5">
                            <a href="<?= $card['link']; ?>" class="feature-card">
                                <div class="feature-card__header">
                                    <h5 class="feature-card__title"><?= $card['title']; ?></h5>
                                </div>
                                <div class="feature-card__body">
                                    <p class="feature-card__text"><?= $card['content']; ?></p>
                                </div>
                                <div class="feature-card__footer text-right">
                                    <div class="feature-card__footer--link">
                                        <em class="feature-card__footer--linkLearnMore">
                                            <?= !empty($card['learn_more_text']) ? $card['learn_more_text'] : 'Learn more'; ?>
                                        </em>
                                        <span class="feature-card__footer--linkArrow">
                                            <i class="fas fa-long-arrow-alt-right fa-lg color-blue"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php
    });
Block::make(__('Bloomerang Form'))
    ->add_fields(array(
        Field::make('textarea', 'bloomerang_form_html'),
        Field::make('text', 'bloomerang_loading_text')->set_default_value('Loading Form...'),
        Field::make('text', 'bloomerang_fallback_link')
    ))
    ->set_category('wpwa', __('WPWA'), 'smiley')
    ->set_render_callback(function ($block) {
?>
    <?php if (!empty($block['bloomerang_form_html'])) : ?>
        <div id="bloomerang-loading" class="text-center">
            <p class="mt-4">
                <?= $block['bloomerang_loading_text'] ? $block['bloomerang_loading_text'] : 'Loading Form...'; ?>
            </p>
            <p>&nbsp;</p>
        </div>
        <?php if (!empty($block['bloomerang_fallback_link'])) : ?>
            <div id="bloomerang-fallback" class="text-center" style="display:none;">
                <p class="mt-4">
                    <div>
                        <h4>There seems to be an issue loading the form. <br>The button below will take you to our secure form.</h4>
                        <a class="btn btn-orange text-white" href="<?= $block['bloomerang_fallback_link']; ?>" target="_blank">Click Here</a>
                    </div>
                </p>
                <p>&nbsp;</p>
            </div>
        <?php endif; ?>
        <?php echo $block['bloomerang_form_html']; ?>
        <script>
            window.onload = function() {
                if (Bloomerang._isReady) {
                    setTimeout(function() {
                        document.getElementById('bloomerang-loading').style.display = 'none';
                    }, 500);
                } else {
                    document.getElementById('bloomerang-loading').style.display = 'none';
                    if (document.getElementById('bloomerang-fallback')) {
                        document.getElementById('bloomerang-fallback').style.display = 'block';
                    }
                }
            };
        </script>
    <?php endif; ?>
<?php
    });
Block::make(__('Alert'))
    ->add_fields(array(
        Field::make('text', 'alert_heading'),
        Field::make('rich_text', 'alert_text'),
    ))
    ->set_category('wpwa', __('WPWA'), 'smiley')
    ->set_render_callback(function ($block) {
?>
    <?php if (!empty($block['alert_text'] || $block['alert_heading'])) : ?>
        <div class="alert alert-warning" role="alert">
            <?php if (!empty($block['alert_heading'])) : ?>
                <h4 class="alert-heading"><?= $block['alert_heading']; ?></h4>
                <hr>
            <?php endif; ?>
            <?= $block['alert_text']; ?>
        </div>
    <?php endif; ?>
<?php
    });

Block::make(__('Alerts'))
    ->add_fields(array(
        Field::make('html', 'crb_html', __('Alerts'))
            ->set_html('This will display all your alerts')
    ))
    ->set_category('wpwa', __('WPWA'), 'smiley')
    ->set_render_callback(function ($block) {
?>
    <?php
        $alerts_query = new WP_Query([
            'post_type' => 'cpt_alerts',
            'posts_per_page' => '99',
            'orderby'    => 'meta_value',
            'order' => 'asc',
            'meta_query' => array(
                'date' => array(
                    'key' => 'alert_start_date',
                    'compare' => '>',
                ),
            ),
        ]);
    ?>
    <section class="container-fluid">
        <div class="row">
            <?php while ($alerts_query->have_posts()) : $alerts_query->the_post(); ?>
                <?php
                $alert_id = get_the_ID();
                $alert_heading = carbon_get_post_meta($alert_id, 'alert_heading');
                $alert_description = carbon_get_post_meta($alert_id, 'alert_description');
                $date_now = new DateTime('now', new DateTimeZone('America/New_York'));
                $date_now = $date_now->format('Y-m-d');
                $date_expired = carbon_get_post_meta($alert_id, 'alert_end_date');
                ?>
                <?php if ($date_now < $date_expired) : ?>
                    <div class="alert alert-warning col-sm-10" role="alert">
                        <?php if (!empty($alert_heading)) : ?>
                            <h4 class="alert-heading"><?= $alert_heading; ?></h4>
                            <hr>
                        <?php endif; ?>
                        <?= $alert_description; ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php
    });
