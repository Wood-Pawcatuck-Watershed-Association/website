<?php //Field Variables
$membership_description = carbon_get_the_post_meta('membership_description');
$membership_price_individual = carbon_get_the_post_meta('membership_price_individual');
$membership_price_household = carbon_get_the_post_meta('membership_price_household');
?>
<div class="col-md-4 d-flex">
    <div <?php post_class('membership-card'); ?>>
        <div class="membership-card__header">
            <h3 class="membership-card__title text-center"><?php the_title(); ?></h3>
            <div class="membership-card__prices">
                <div class="membership-card__prices--individual">
                    <h4 class="price text-center">$<?= $membership_price_individual; ?></h4>
                    <h5 class="text-center">Individual</h5>
                </div>
                <div class="membership-card__prices--household">
                    <h4 class="price text-center">$<?= $membership_price_household; ?></h4>
                    <h5 class="text-center">Household</h5>
                </div>
            </div>
        </div>
        <div class="membership-card__body">
            <?= $membership_description; ?>
        </div>
        <div class="membership-card__footer text-center">
            <a class="btn btn-lg btn-orange text-white" href="<?php the_permalink(); ?>">Sign Up</a>
            <a class="btn btn-lg btn-green text-white" href="<?php the_permalink(); ?>">Renew</a>
        </div>
    </div>
</div>
