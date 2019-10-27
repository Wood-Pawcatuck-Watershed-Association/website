<?php //Field Variables
$newsletter_seasons = carbon_get_the_post_meta('newsletter_seasons');
$newsletter_seasons_count = 0;
foreach($newsletter_seasons as $issue): 
  if (!empty($issue['newsletter_path']) || !empty($issue['newsletter_upload'])):
    $newsletter_seasons_count++;
  endif;
endforeach;
?>
<div class="card-header" id="<?=$post->post_name;?>">
  <h5 class="mb-0">
    <button class="btn btn-link list-group-item list-group-item-action list-group-item__newsletter" data-toggle="collapse" data-target="#collapse<?= get_the_ID();?>" aria-expanded="false" aria-controls="<?=$post->post_name;?>">
        <?php the_title(); ?> 
        <span class="badge badge-primary badge-pill">
          <?= $newsletter_seasons_count; ?>
          </span>
    </button>
  </h5>
</div>

<div id="collapse<?= get_the_ID();?>" class="collapse" aria-labelledby="<?php the_title(); ?>" data-parent="#accordionExample">
  <div class="card-body">
   <?php foreach($newsletter_seasons as $issue): 
  ?>
      <?php if (!empty($issue['newsletter_path']) || !empty($issue['newsletter_upload'])): ?>
        <a class="list-group-item list-group-item-action" href="<?= !empty($issue['newsletter_path']) ? $issue['newsletter_path'] : $issue['newsletter_upload']; ?>">
        <?= $issue['newsletter_season']; ?> <i class="ml-2 fas fa-external-link-alt"></i>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>