<div class="clearfix projectPanel">
  <div class="clearfix">
  <h2 class="panelTitle"><a href="<?php base_path();?>projects">Recent Projects</a></h2>
  <?php
$block = module_invoke('views', 'block_view', 'projects-home_page');
print render($block['content']);?>
    </div>
</div>

