<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;
use ZGM\Plugin\Classes\Plugin;

Block::make( __( 'EventBrite Calendar' ) )
    ->add_fields( array(
        Field::make( 'text', 'heading', __( 'Block Heading' ) ),
        Field::make( 'rich_text', 'content', __( 'Block Content Before Events' ) ),
    ) )
    ->set_render_callback( function ( $block ) {
        ?>

        <div class="block">
            <div class="block__heading">
                <h2 class="text-center"><?php echo esc_html( $block['heading'] ); ?></h2>
            </div><!-- /.block__heading -->

            <div class="block__content">
                <div id="events-calendar">
                    <?php echo apply_filters( 'the_content', $block['content'] ); ?>
                    <events-calendar />
                </div>
            </div><!-- /.block__content -->
        </div><!-- /.block -->

        <?php
    } );