<?php $Query = new WP_Query([
    'post_type' => 'cpt_newsletters',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => '99'
]);
?>
<div class="container pb-5">
    <div class="row justify-content-around">
        <div class="col-md-4 d-none d-md-block">
            <div class="page-sidebar">
                <?php if (is_active_sidebar('newsletters-sidebar')) : ?>
                    <?php dynamic_sidebar('newsletters-sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row justify-content-around mb-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-orange text-white" data-toggle="modal" data-target="#newsletterModal">
                    Sign up for our Newsletter
                </button>
                <!-- Modal -->
                <div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newsletterModalLabel">Newsletter Signup</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="">
                                <script src="https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/woodpawcatuckwatershedassociation/.widget-js/484352.js" type="text/javascript"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="accordion-newsletter" id="accordionNewsletter">
                    <?php while ($Query->have_posts()) : $Query->the_post(); ?>
                        <div class="list-group mb-2" role="tablist">
                            <?php get_template_part('templates/newsletter'); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
