<div class="clearfix frontEndPanel">
<!--  Body Content-->
<!--  --><?php //$block = module_invoke('views', 'block_view', 'home_panels-front_end');
//    print render($block['content']);?>

  <?php print views_embed_view('home_panels', 'front_end'); ?>


  <!--  It's so much easier to work with a standalone view for the menu-->
  <?php print views_embed_view('page_menu', 'header_nav', '49'); ?>

</div>
