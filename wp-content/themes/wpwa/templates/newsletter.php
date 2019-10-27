<?php //Field Variables
$newsletter_seasons = carbon_get_the_post_meta('newsletter_seasons');
$newsletter_seasons_count = 0;
foreach($newsletter_seasons as $issue): 
	if (!empty($issue['newsletter_path']) || !empty($issue['newsletter_upload'])):
		$newsletter_seasons_count++;
	endif;
endforeach;
?>
<div class="accordion-button-wrapper" id="<?=$post->post_name;?>">
	<button class="list-group-item list-group-item-action accordin-header" data-toggle="collapse" data-target="#collapse-<?= get_the_ID();?>" aria-expanded="false" aria-controls="<?=$post->post_name;?>">
		<?php the_title(); ?> 
		<span class="badge badge-primary badge-pill">
			<?= $newsletter_seasons_count; ?>
			</span>
	</button>
</div>

<div id="collapse-<?= get_the_ID();?>" class="collapse list-group-item__child" role="tablist" aria-labelledby="<?php the_title(); ?>">
	<?php foreach($newsletter_seasons as $issue): 
		?>
		<?php if (!empty($issue['newsletter_path']) || !empty($issue['newsletter_upload'])): ?>
			<a class="list-group-item list-group-item-action" href="<?= !empty($issue['newsletter_path']) ? $issue['newsletter_path'] : wp_get_attachment_url($issue['newsletter_upload']); ?>" target="_blank">
			<i class="fas fa-file-alt mr-2"></i> <?= $issue['newsletter_season']; ?>
			</a>
		<?php endif; ?>
	<?php endforeach; ?>
</div>