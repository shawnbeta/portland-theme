<div class="clearfix socialPanel">
  <h3 class="panelTitle"> <a href="<?php base_path();?>social">Social</a></h3>
  <?php
$block = module_invoke('views', 'block_view', 'social-home');
print render($block['content']);?>
</div>