<?php //Field Variables
$report_upload = carbon_get_the_post_meta('report_upload');
$report_path = carbon_get_the_post_meta('report_path');
?>
<li class="list-group-item">
    <a href="<?= !empty($report_path) ? $report_path : wp_get_attachment_url($report_upload); ?>" target="_blank">
        <?php the_title(); ?>
    </a>
</li>
