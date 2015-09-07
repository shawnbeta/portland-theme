<div class="clearfix recommendationsPanel">
<h3 class="panelTitle"> <a href="<?php base_path();?>social/recommendations">Recommendations</a></h3>
<!--  --><?php
//  $block = module_invoke('views', 'block_view', 'social-recommendations_panel');
//  print render($block['content']);?>

  <?php print views_embed_view('social', 'recommendations_panel'); ?>


</div>