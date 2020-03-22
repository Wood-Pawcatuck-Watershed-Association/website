<?php

use Roots\Sage\Classes\Theme;

$get_queried_object = get_queried_object();
$post_id = $get_queried_object->ID;
$layouts = carbon_get_post_meta(!empty($current_post_id) ? $current_post_id : $post_id, 'page_builder');
$hide_banner = carbon_get_the_post_meta('hide_banner');
if (!empty($layouts)) :
    foreach ($layouts as $layout) :
?>
        <?php if ($layout['_type'] === 'dynamic_section') : ?>
            <?php
            $section_full_width_section = $layout['full_width_section'] ? 'container-fluid' : 'container';
            $section_content_contained = $layout['content_contained'] ? 'content-contained' : null;
            $section_mobile_center_text = $layout['mobile_center_text'] ? 'text-sm-center' : null;
            $section_class = !empty($layout['section_class']) ? $layout['section_class'] : null;
            $section_id = !empty($layout['section_id']) ? 'id="' . $layout['section_id'] . '"' : null;
            $section_background_image = !empty($layout['section_background_image']) ? 'background-image: url(' . $layout['section_background_image'] . '); background-repeat: no-repeat; background-size: cover;' : null;
            $section_background_image_position = !empty($layout['section_background_image_position']) && !empty($layout['section_background_image']) ? 'background-position: ' . $layout['section_background_image_position'] . ';' : null;
            $section_background_color = !empty($layout['section_background_color']) ? 'background-color:' . $layout['section_background_color'] . ';' : null;
            $section_background_color_opacity = !empty($layout['section_background_color_opacity']) && !empty($layout['section_background_color']) ? 'opacity:' . $layout['section_background_color_opacity'] . ';' : null;

            $section_hide_on_small = $layout['hide_on_small'] ? 'hide-on-small' : null;
            $section_hide_on_medium = $layout['hide_on_medium'] ? 'hide-on-medium' : null;
            $section_hide_on_large = $layout['hide_on_large'] ? 'hide-on-large' : null;

            $row_vertical_align = $layout['vertical_align'] ? 'd-flex align-items-center' : null;
            $row_mobile_reverse_columns = $layout['mobile_reverse_columns'] ? 'd-flex flex-column-reverse flex-md-row' : null;

            $section_padding_top = !empty($layout['section_padding_top']) ? $layout['section_padding_top'] : null;
            $section_padding_bottom = !empty($layout['section_padding_bottom']) ? $layout['section_padding_bottom'] : null;
            $section_padding_left = !empty($layout['section_padding_left']) ? $layout['section_padding_left'] : null;
            $section_padding_right = !empty($layout['section_padding_right']) ? $layout['section_padding_right'] : null;

            $section_margin_top = !empty($layout['section_margin_top']) ? $layout['section_margin_top'] : null;
            $section_margin_bottom = !empty($layout['section_margin_bottom']) ? $layout['section_margin_bottom'] : null;
            $section_margin_left = !empty($layout['section_margin_left']) ? $layout['section_margin_left'] : null;
            $section_margin_right = !empty($layout['section_margin_right']) ? $layout['section_margin_right'] : null;

            $row_padding_top = !empty($layout['row_padding_top']) ? $layout['row_padding_top'] : null;
            $row_padding_bottom = !empty($layout['row_padding_bottom']) ? $layout['row_padding_bottom'] : null;
            ?>
            <section class="section <?= sprintf('%s %s %s %s %s %s %s %s %s %s %s %s %s %s %s', $section_full_width_section, $section_content_contained, $section_mobile_center_text, $section_class, $section_padding_top, $section_padding_bottom, $section_padding_left, $section_padding_right, $section_margin_top, $section_margin_bottom, $section_margin_left, $section_margin_right, $section_hide_on_small, $section_hide_on_medium, $section_hide_on_large); ?> " style="<?= sprintf('%s %s %s %s', $section_background_image, $section_background_image_position, $section_background_color, $section_background_color_opacity); ?>" <?= $section_id; ?>>

                <?php if (!empty($layout['content_contained'])) : ?>
                    <div class="container">
                    <?php endif; ?>

                    <div class="row flexible-content <?= sprintf('%s %s %s %s', $row_vertical_align, $row_mobile_reverse_columns, $row_padding_top, $row_padding_bottom); ?>">

                        <?php $columns = $layout['columns']; ?>

                        <?php if (!empty($columns)) : ?>

                            <?php foreach ($columns as $column) :

                                $column_class_override = array_key_exists('column_class_override', $column) ? $column['column_class_override'] : null;
                                $column_class_override_sm = !empty($column['column_class_override_sm']) ? $column['column_class_override_sm'] : null;
                                $column_class_override_md = !empty($column['column_class_override_md']) ? $column['column_class_override_md'] : null;
                                $column_class_override_lg = !empty($column['column_class_override_lg']) ? $column['column_class_override_lg'] : null;

                                $column_col_number = empty($column_class_override) ? 'col-md' : null;
                                $column_col_class = $column['column_class'] ? $column['column_class'] : null;

                                $column_padding_top = !empty($column['column_padding_top']) ? $column['column_padding_top'] : null;
                                $column_padding_bottom = !empty($column['column_padding_bottom']) ? $column['column_padding_bottom'] : null;
                                $column_padding_left = !empty($column['column_padding_left']) ? $column['column_padding_left'] : null;
                                $column_padding_right = !empty($column['column_padding_right']) ? $column['column_padding_right'] : null;

                                $column_margin_top = !empty($column['column_margin_top']) ? $column['column_margin_top'] : null;
                                $column_margin_bottom = !empty($column['column_margin_bottom']) ? $column['column_margin_bottom'] : null;
                                $column_margin_left = !empty($column['column_margin_left']) ? $column['column_margin_left'] : null;
                                $column_margin_right = !empty($column['column_margin_right']) ? $column['column_margin_right'] : null;

                                $column_inner_class = !empty($column['column_inner_class']) ? $column['column_inner_class'] : null;

                                $column_inner_padding_top = !empty($column['column_inner_padding_top']) ? $column['column_inner_padding_top'] : null;
                                $column_inner_padding_bottom = !empty($column['column_inner_padding_bottom']) ? $column['column_inner_padding_bottom'] : null;
                                $column_inner_padding_left = !empty($column['column_inner_padding_left']) ? $column['column_inner_padding_left'] : null;
                                $column_inner_padding_right = !empty($column['column_inner_padding_right']) ? $column['column_inner_padding_right'] : null;

                                $column_inner_margin_top = !empty($column['column_inner_margin_top']) ? $column['column_inner_margin_top'] : null;
                                $column_inner_margin_bottom = !empty($column['column_inner_margin_bottom']) ? $column['column_inner_margin_bottom'] : null;
                                $column_inner_margin_left = !empty($column['column_inner_margin_left']) ? $column['column_inner_margin_left'] : null;
                                $column_inner_margin_right = !empty($column['column_inner_margin_right']) ? $column['column_inner_margin_right'] : null;

                                $column_background_image = !empty($column['column_background_image']) ? 'background-image: url(' . $column['column_background_image'] . '); background-repeat: no-repeat; background-size: cover;' : null;
                                $column_background_image_position = !empty($column['column_background_image_position']) && !empty($column['column_background_image']) ? 'background-position: ' . $column['column_background_image_position'] . ';' : null;
                                $column_background_color = !empty($column['column_background_color']) ? 'background-color:' . $column['column_background_color'] . ';' : null;
                                $column_background_color_opacity = !empty($column['column_background_color_opacity']) && !empty($column['column_background_color']) ? 'opacity:' . $column['column_background_color_opacity'] . ';' : null;

                                $column_hide_on_small = $column['hide_on_small'] ? 'hide-on-small' : null;
                                $column_hide_on_medium = $column['hide_on_medium'] ? 'hide-on-medium' : null;
                                $column_hide_on_large = $column['hide_on_large'] ? 'hide-on-large' : null;
                            ?>

                                <div class="<?= sprintf('%s %s %s %s %s %s %s %s %s %s %s %s %s %s %s %s', $column_col_number, $column_col_class, $column_class_override_sm, $column_class_override_md, $column_class_override_lg, $column_padding_top, $column_padding_bottom, $column_padding_left, $column_padding_right, $column_margin_top, $column_margin_bottom, $column_margin_left, $column_margin_right, $column_hide_on_small, $column_hide_on_medium, $column_hide_on_large); ?>" style="<?= sprintf('%s %s %s %s', $column_background_image, $column_background_image_position, $column_background_color, $column_background_color_opacity); ?>">

                                    <?php $content = $column['column_content']; ?>

                                    <?php if (!empty($content)) : ?>
                                        <div class="column__inner <?= sprintf('%s %s %s %s %s %s %s %s %s', $column_inner_class, $column_inner_padding_top, $column_inner_padding_bottom, $column_inner_padding_left, $column_inner_padding_right, $column_inner_margin_top, $column_inner_margin_bottom, $column_inner_margin_left, $column_inner_margin_right); ?>">
                                            <?php foreach ($content as $content_block) : ?>

                                                <?php if ($content_block['content_type'] === 'text') : ?>
                                                    <?php $content_text_color = !empty($content_block['content_text_color']) ? 'color:' . $content_block['content_text_color'] . ';' : null; ?>
                                                    <div class="content-text" style="<?= sprintf('%s', $content_text_color); ?>">
                                                        <?= !empty(($content_block['content_text'])) ? wpautop(do_shortcode($content_block['content_text'])) : null ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'text_two_column') : ?>
                                                    <?php $content_text_two_column_color = !empty($content_block['content_text_two_column_color']) ? 'color:' . $content_block['content_text_two_column_color'] . ';' : null; ?>
                                                    <div class="content-text content-text__twoColumn row" style="<?= sprintf('%s', $content_text_two_column_color); ?>">
                                                        <div class="content-text__left col-md">
                                                            <?= !empty(($content_block['content_text_two_column_left'])) ? wpautop(do_shortcode($content_block['content_text_two_column_left'])) : null ?>
                                                        </div>
                                                        <div class="content-text__right col-md">
                                                            <?= !empty(($content_block['content_text_two_column_right'])) ? wpautop(do_shortcode($content_block['content_text_two_column_right'])) : null ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'text_multi_column') : ?>
                                                    <?php $content_text_multi_column_color = !empty($content_block['content_text_multi_column_color']) ? 'color:' . $content_block['content_text_multi_column_color'] . ';' : null; ?>
                                                    <div class="content-text content-text__twoColumn row" style="<?= sprintf('%s', $content_text_multi_column_color); ?>">
                                                        <?php if (!empty($content_block['content_text_multi_columns'])) : ?>
                                                            <?php foreach ($content_block['content_text_multi_columns'] as $column) : ?>
                                                                <div class="col-md">
                                                                    <?= wpautop(do_shortcode($column['content'])); ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'textarea') : ?>
                                                    <?= sprintf(
                                                        '<p>%s</p>',
                                                        !empty($content_block['content_textarea_text']) ? $content_block['content_textarea_text'] : null
                                                    ); ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'shortcode') : ?>
                                                    <?= !empty(($content_block['content_shortcode'])) ? do_shortcode($content_block['content_shortcode']) : null ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'heading') : ?>
                                                    <?= wpautop(sprintf(
                                                        '<%s class="%s %s %s %s %s" style="%s">%s</%s>',
                                                        !empty($content_block['content_heading_tag']) ? $content_block['content_heading_tag'] : null,
                                                        !empty($content_block['content_heading_tag_class']) ? $content_block['content_heading_tag_class'] : null,
                                                        !empty($content_block['content_heading_color']) ? $content_block['content_heading_color'] : null,
                                                        !empty($content_block['content_heading_transform']) ? $content_block['content_heading_transform'] : null,
                                                        !empty($content_block['content_heading_font']) ? $content_block['content_heading_font'] : null,
                                                        !empty($content_block['content_heading_align']) ? $content_block['content_heading_align'] : null,
                                                        !empty($content_block['content_heading_color']) ? 'color:' . $content_block['content_heading_color'] . ';' : null,
                                                        !empty($content_block['content_heading_text']) ? $content_block['content_heading_text'] : null,
                                                        !empty($content_block['content_heading_tag']) ? $content_block['content_heading_tag'] : null
                                                    )); ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'image') : ?>
                                                    <?php $content_image_size = $content_block['content_image_size'] ? $content_block['content_image_size'] : 'full'; ?>
                                                    <?= wp_get_attachment_image($content_block['content_image'], $content_image_size, "", array("class" => "img-fluid")); ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'video') : ?>
                                                    <a href="<?= !empty($content_block['content_video']) ? $content_block['content_video'] : null; ?>" class="content-video" data-lity tabindex="0">
                                                        <?= wp_get_attachment_image($content_block['content_video_image'], 'full', "", array("class" => "img-fluid")); ?>
                                                        <span class="content-video__playButton" role="button">
                                                            <span class="fas fa-play-circle"></span>
                                                        </span>
                                                    </a>
                                                    <?php if (!empty($content_block['content_video_transcript'])) : ?>
                                                        <?php $uniq_id = uniqid() ?>
                                                        <ul class="content-accordion list-unstyled" role="tablist" aria-multiselectable="true">
                                                            <li class="card">
                                                                <div class="card-header">
                                                                    <p class="mb-0 h5">
                                                                        <button class="btn accordion-title collapsed" data-toggle="collapse" data-target="#accordion-<?= $uniq_id; ?>" aria-expanded="false" aria-controls="accordion-<?= $uniq_id; ?>">
                                                                            <span><?= $content_block['content_video_transcript_heading'] ? $content_block['content_video_transcript_heading'] : 'View Transcipt'; ?></span>
                                                                        </button>
                                                                    </p>
                                                                </div>
                                                                <div id="accordion-<?= $uniq_id; ?>" class="collapse" aria-label="heading">
                                                                    <div class="card-body">
                                                                        <div class="card-body__content mt-3">
                                                                            <p><?= wpautop(do_shortcode($content_block['content_video_transcript'])); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'video_card') : ?>
                                                    <div class="video-card__wrapper">
                                                        <div class="video-card bg-white-dark py-4 px-4 <?= empty($content_block['content_video_card_transcript']) ? 'mb-5' : null; ?>">
                                                            <div class="video-card__left pl-4 pr-4">
                                                                <a href="<?= !empty($content_block['content_video_card']) ? $content_block['content_video_card'] : null; ?>" class="content-video" data-lity>
                                                                    <?= wp_get_attachment_image($content_block['content_video_card_image'], 'full', "", array("class" => "video-card--image")); ?>
                                                                    <span class="video-card__playButton" role="button">
                                                                        <span class="fas fa-play"></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="video-card__right pl-4 pr-4">
                                                                <p>
                                                                    <?= $content_block['content_video_card_text']; ?>
                                                                </p>
                                                                <a href="<?= !empty($content_block['content_video_card']) ? $content_block['content_video_card'] : null; ?>" data-lity class="postGroteskBold watch-video btn btn-link"><?= !empty($content_block['content_video_card_button_text']) ? $content_block['content_video_card_button_text'] : 'WATCH VIDEO'; ?> <span class="color-gold far fa-play-circle"></span></a>
                                                            </div>
                                                        </div>
                                                        <?php if (!empty($content_block['content_video_card_transcript'])) : ?>
                                                            <?php $uniq_id = uniqid() ?>
                                                            <ul class="content-accordion list-unstyled mb-5" role="tablist" aria-multiselectable="true">
                                                                <li class="card">
                                                                    <div class="card-header">
                                                                        <p class="mb-0 h5">
                                                                            <button class="btn accordion-title collapsed" data-toggle="collapse" data-target="#accordion-<?= $uniq_id; ?>" aria-expanded="false" aria-controls="accordion-<?= $uniq_id; ?>">
                                                                                <span class="mb-0 postGroteskBold font-size-1"><?= $content_block['content_video_card_transcript_heading'] ? $content_block['content_video_card_transcript_heading'] : 'View Transcipt'; ?></span>
                                                                            </button>
                                                                        </p>
                                                                    </div>
                                                                    <div id="accordion-<?= $uniq_id; ?>" class="collapse" aria-label="heading">
                                                                        <div class="card-body">
                                                                            <div class="card-body__content mt-3">
                                                                                <p><?= wpautop(do_shortcode($content_block['content_video_card_transcript'])); ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                    <script>
                                                        jQuery(document).on('afterShow.fb', function(e, instance, slide) {
                                                            //let currentSlide = slide.$slide[0];
                                                            jQuery('.fancybox-container').focus();
                                                        });
                                                    </script>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'card') : ?>
                                                    <?php
                                                    $content_card_image = !empty($content_block['content_card_image']) ? 'background-repeat: no-repeat;background-image: url(' . wp_get_attachment_image_src($content_block['content_card_image'], 'full', false)[0] . ');' : null;
                                                    $content_card_image_position = !empty($content_block['content_card_image_position']) && !empty($content_block['content_card_image']) ? 'background-position: ' . $content_block['content_card_image_position'] . ';' : null;
                                                    $content_card_image_size = !empty($content_block['content_card_image_size']) && !empty($content_block['content_card_image']) ? 'background-size: ' . $content_block['content_card_image_size'] . ';' : null;


                                                    $content_card_image_mobile = !empty($content_block['content_card_image_mobile']) ? 'background-repeat: no-repeat;background-image: url(' . wp_get_attachment_image_src($content_block['content_card_image_mobile'], 'full', false)[0] . ');' : null;
                                                    $content_card_image_mobile_position = !empty($content_block['content_card_image_mobile_position']) && !empty($content_block['content_card_image_mobile']) ? 'background-position: ' . $content_block['content_card_image_mobile_position'] . ';' : null;
                                                    $content_card_image_mobile_size = !empty($content_block['content_card_image_mobile_size']) && !empty($content_block['content_card_image_mobile']) ? 'background-size: ' . $content_block['content_card_image_mobile_size'] . ';' : null;
                                                    ?>
                                                    <div class="content-card">
                                                        <?php if (!empty($content_card_image_mobile)) : ?>
                                                            <div class="content-card__left hide-on-medium hide-on-large" style="<?= sprintf('%s %s %s', $content_card_image_mobile, $content_card_image_mobile_position, $content_card_image_mobile_size) ?>">
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="content-card__left <?= !empty($content_card_image_mobile) ? 'hide-on-small' : null; ?>" style="<?= sprintf('%s %s %s', $content_card_image, $content_card_image_position, $content_card_image_size) ?>">
                                                        </div>
                                                        <div class="content-card__right">
                                                            <?= wpautop(sprintf(
                                                                '<%s class="%s %s %s %s %s" style="%s">%s</%s>',
                                                                !empty($content_block['content_card_heading_tag']) ? $content_block['content_card_heading_tag'] : null,
                                                                !empty($content_block['content_card_heading_tag_class']) ? $content_block['content_card_heading_tag_class'] : null,
                                                                !empty($content_block['content_card_heading_color']) ? $content_block['content_card_heading_color'] : null,
                                                                !empty($content_block['content_card_heading_transform']) ? $content_block['content_card_heading_transform'] : null,
                                                                !empty($content_block['content_card_heading_font']) ? $content_block['content_card_heading_font'] : null,
                                                                !empty($content_block['content_card_heading_align']) ? $content_block['content_card_heading_align'] : null,
                                                                !empty($content_block['content_card_heading_color']) ? 'color:' . $content_block['content_card_heading_color'] . ';' : null,
                                                                !empty($content_block['content_card_heading_text']) ? $content_block['content_card_heading_text'] : null,
                                                                !empty($content_block['content_card_heading_tag']) ? $content_block['content_card_heading_tag'] : null
                                                            )); ?>
                                                            <div class="content-card__text row" style="<?= sprintf(
                                                                                                            '%s',
                                                                                                            !empty($content_block['content_card_text_color']) ? 'color:' . $content_block['content_card_text_color'] . ';' : null
                                                                                                        ) ?>">
                                                                <div class="col-sm-12">
                                                                    <?= $content_block['content_card_text'] ? wpautop($content_block['content_card_text']) : null; ?>
                                                                    <?php if (!empty($content_block['content_card_cta_text'])) : ?>
                                                                        <a class="btn btn-md custom btn-link color-blue-cta text-uppercase" href="<?= !empty($content_block['content_card_cta_link']) ? $content_block['content_card_cta_link'] : '#'; ?>" target="<?= $content_block['content_card_cta_link_target'] ? '_blank' : '_self_self'; ?>" aria-label="<?= !empty($content_block['content_card_cta_aria_label']) ? $content_block['content_card_cta_aria_label'] : $content_block['content_card_cta_text']; ?>" <?= !empty($content_block['content_card_cta_custom_attribute']) ? $content_block['content_card_cta_custom_attribute'] : ''; ?>>
                                                                            <?= !empty($content_block['content_card_cta_text']) ? $content_block['content_card_cta_text'] : ''; ?> <span class="far fa-arrow-alt-circle-right color-gold"></span>
                                                                        </a>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <?php if ($content_block['content_card_multicolumn'] && !empty($content_block['content_card_columns'])) : ?>
                                                                    <?php foreach ($content_block['content_card_columns'] as $column) : ?>
                                                                        <div class="col-md">
                                                                            <?= wpautop($column['content']); ?>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'button') : ?>
                                                    <?= sprintf(
                                                        '<a class="btn %s %s %s %s" href="%s" data-link="%s" aria-label="%s" style="%s %s" data-color="%s" %s tabindex="0" %s >%s %s %s</a>',
                                                        !empty($content_block['content_button_class']) ? $content_block['content_button_class'] : '',
                                                        !empty($content_block['content_button_size']) ? $content_block['content_button_size'] : 'btn-lg',
                                                        !empty($content_block['content_button_color']) ? $content_block['content_button_color'] : 'btn-primary',
                                                        !empty($content_block['content_button_style']) ? $content_block['content_button_style'] : null,
                                                        !empty($content_block['content_button_link']) ? $content_block['content_button_link'] : null,
                                                        !empty($content_block['content_button_link']) ? $content_block['content_button_link'] : null,
                                                        !empty($content_block['content_button_aria_label']) ? $content_block['content_button_aria_label'] : $content_block['content_button_text'],
                                                        !empty($content_block['content_button_background']) ? 'background-color:' . $content_block['content_button_background'] . ';' : null,
                                                        !empty($content_block['content_button_link_color']) ? 'color:' . $content_block['content_button_link_color'] . ';' : null,
                                                        !empty($content_block['content_button_link_color']) ? $content_block['content_button_link_color'] : null,
                                                        !empty($content_block['content_button_target_video']) ? 'data-lity' : null,
                                                        !empty($content_block['content_button_custom_attribute']) ? $content_block['content_button_custom_attribute'] : null,
                                                        !empty($content_block['content_button_text']) ? $content_block['content_button_text'] : 'button',
                                                        !empty($content_block['content_button_icon']) && !empty($content_block['content_button_icon_color']) ? '<span class="' . $content_block['content_button_icon'] . '" style="color:' . $content_block['content_button_icon_color'] . ';"></span>' : null,
                                                        !empty($content_block['content_button_icon']) && empty($content_block['content_button_icon_color']) ? '<span class="' . $content_block['content_button_icon'] . '"></span>' : null
                                                    ); ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'space') : ?>
                                                    <div style="height:<?= $content_block['content_space'] ? $content_block['content_space'] : null; ?>"></div>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'divider') : ?>
                                                    <?php if ($content_block['content_divider']) : ?>
                                                        <hr class="content-divider">
                                                    <?php endif; ?>
                                                <?php endif; ?>


                                                <?php if ($content_block['content_type'] === 'quote_list') : ?>
                                                    <?php if (!empty($content_block['content_quote_list'])) : ?>
                                                        <ul>
                                                            <?php foreach ($content_block['content_quote_list'] as $quote) : ?>
                                                                <li class="color-aqua tiemposTextRegular"><q class="font-size-1"><?= $quote['quote']; ?></q></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'accordion') : ?>
                                                    <?php include('partials/accordion.php'); ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'faq') : ?>
                                                    <?php include('partials/faq.php'); ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'navigation') : ?>
                                                    <?php if (!empty($content_block['content_navigation'])) : ?>

                                                        <div class="content-navigation__mobile pl-4 pr-4 hide-on-medium hide-on-large">
                                                            <div class="d-md-flex flex-md-row align-items-md-center">
                                                                <?php if (!empty($content_block['content_navigation_heading'])) : ?>
                                                                    <h6 class="nav-heading d-md-inline-block mb-0"><?= $content_block['content_navigation_heading']; ?></h6>
                                                                <?php endif; ?>
                                                                <select name="content-navigation--mobile" aria-label="navigation" id="howtohelp__select--mobile" class="js-choice content-navigation__mobile--select">
                                                                    <?php if ($content_block['content_navigation_heading_select']) : ?>
                                                                        <option value="" selected="true" disabled="disabled"><?= $content_block['content_navigation_heading_select']; ?></option>
                                                                    <?php endif; ?>
                                                                    <?php foreach ($content_block['content_navigation'] as $nav) : ?>
                                                                        <option value="<?= $nav['link']; ?>" data-scroll><?= $nav['title']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <a type="button" href="#" class="content-navigation__mobile--submit btn btn-outline-dark btn-square-thick ml-3 postGroteskBold font-small">GO</a>
                                                            </div>
                                                        </div>

                                                        <nav class="content-navigation nav nav-pills nav-justified hide-on-small">
                                                            <?php if (!empty($content_block['content_navigation_heading'])) : ?>
                                                                <h6 class="nav-heading nav-item align-self-center mb-0"><?= $content_block['content_navigation_heading']; ?></h6>
                                                            <?php endif; ?>
                                                            <?php foreach ($content_block['content_navigation'] as $nav) : ?>
                                                                <a class="nav-item nav-link <?= $nav['css_class']; ?>" href="<?= $nav['link']; ?>"><?= $nav['title']; ?></a>
                                                            <?php endforeach; ?>
                                                        </nav>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                                <?php if ($content_block['content_type'] === 'media_gallery') : ?>

                                                    <?php if (!empty($content_block['media_gallery'])) : ?>
                                                        <div class="slider slider-single slider-for">
                                                            <?php foreach ($content_block['media_gallery'] as $image) : ?>
                                                                <div>
                                                                    <?= wp_get_attachment_image($image, 'full', false, array('class' => 'img-fluid')); ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="slider slider-nav">
                                                            <?php foreach ($content_block['media_gallery'] as $image) : ?>
                                                                <?php $alt_text = get_post_meta($image, '_wp_attachment_image_alt', true); ?>
                                                                <button type="button" aria-label="<?= $alt_text; ?>" class="cursor-pointer" style="padding:0;">
                                                                    <?= wp_get_attachment_image($image, 'full', false, array('class' => 'img-fluid')); ?>
                                                                </button>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php endif; ?>

                                                <?php endif; ?>

                                            <?php endforeach; ?>
                                        </div>

                                    <?php endif; ?>

                                </div>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </div>

                    <?php if (!empty($layout['content_contained'])) : ?>
                    </div>
                <?php endif; ?>

            </section>

        <?php endif;

        if ($layout['_type'] === 'media_gallery') : ?>
            <section class="section container">
                <div class="row">
                    <?php if (!empty($layout['media_gallery'])) : ?>
                        <?php foreach ($layout['media_gallery'] as $image) : ?>
                            <div class="col-sm-12 col-md-4 mb-4">
                                <a href="<?= wp_get_attachment_image_url($image, 'full', false) ?>" data-fancybox="group">
                                    <?= wp_get_attachment_image($image, 'full', false, array('class' => 'rounded img-fluid')); ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif;

        if ($layout['_type'] === 'feature_cards') : ?>
            <section class="section feature-cards bg-light-green pt-5">
                <div class="container">
                    <div class="row card-deck">
                        <?php if (!empty($layout['feature_cards'])) : ?>
                            <?php foreach ($layout['feature_cards'] as $card) : ?>
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
        <?php endif;

        if ($layout['_type'] === 'sections') : ?>

            <?php $section_sections = $layout['section_sections']; ?>

            <?php foreach ($section_sections as $section) : ?>

                <?php $id = $section['id']; ?>

                <?php Theme::page_builder($id); ?>

            <?php endforeach; ?>

<?php endif;

    endforeach;
endif;
