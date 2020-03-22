<?php
use Roots\Sage\Classes\Theme;

$background_image = carbon_get_the_post_meta('banner_background_image');
$banner_heading = carbon_get_the_post_meta('banner_heading');
$banner_sub_heading = carbon_get_the_post_meta('banner_sub_heading');
$banner_button_text = carbon_get_the_post_meta('banner_button_text');
$banner_button_link = carbon_get_the_post_meta('banner_button_link');
$post_type = get_queried_object()->post_type;
?>
<?php if (is_front_page()): ?>
    <div class="home-banner bg-cover-center bg-overlay" style="background-image: url(<?= $background_image ? $background_image : get_the_post_thumbnail_url();?>);background-color: transparent; background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <div class="container text-center col-md-8">
    <h1 class="text-white OpenSans-Bold">
        <?= !empty($banner_heading) ? $banner_heading : Theme::title(); ?>
    </h1>
    <?php if (!empty($banner_sub_heading)): ?>
        <h3 class="text-white OpenSans-SemiBold"><?= $banner_sub_heading; ?></h3>
    <?php endif; ?>
    <?php if (!empty($banner_button_text)): ?>
        <a href="<?= !empty($banner_button_link) ? $banner_button_link : '#'; ?>" class="btn btn-white mt-4 btn-lg">
            <?= $banner_button_text; ?>
        </a>
    <?php endif; ?>
  </div>
</div>
<?php elseif (is_single() && $post_type === 'tribe_events' ): ?>

    <?php return; ?>

<?php else: ?>
    <?php if (has_post_thumbnail()): ?>
        <div class="jumbotron jumbotron-fluid bg-cover-center bg-overlay" style="background-image: url(<?=get_the_post_thumbnail_url();?>);background-color: transparent; background-repeat: no-repeat; background-size: cover; background-position: top center;">
          <div class="container text-center">
            <h1 class="text-white">
                <?= Theme::title(); ?>
            </h1>
          </div>
        </div>
    <?php else: ?>
        <div class="jumbotron jumbotron-fluid">
          <div class="container text-center">
            <h1 class="text-dark">
                <?= Theme::title(); ?>
            </h1>
          </div>
        </div>
    <?php endif; ?>

<?php endif; ?>
