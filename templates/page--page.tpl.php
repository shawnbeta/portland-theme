<div id="menuBox">
  <?php include DRUPAL_ROOT . '/sites/all/themes/portland/includes/nav.php'; ?>
</div>

<?php include DRUPAL_ROOT . '/sites/all/themes/portland/includes/pageHeader.php'; ?>


<?php if (drupal_is_front_page()): ?>
    <?php include DRUPAL_ROOT . '/sites/all/themes/portland/includes/home/hero.php'; ?>
<?php endif; ?>

<?php print render($page['header']); ?>

<section id="stage">




      <?php print render($page['header_block']); ?>
         <?php print $breadcrumb; ?>

          <a id="main-content"></a>
      <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>

              <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
              <header id="pageHeader">
                  <?php print render($title_prefix); ?>
                  <?php if ($title && !drupal_is_front_page()): ?>
                      <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
                  <?php endif; ?>
                  <?php print render($title_suffix); ?>
                  <?php print views_embed_view('page_menu', 'header_nav'); ?>
                <?php if (current_path() != 'node/50' && current_path() !== 'node/62') {
                  print views_embed_view('page_menu', 'header_summary');
                }
                ?>

              </header>

              <?php print render($page['content']); ?>
            <?php print render($page['content_bottom']); ?>
          </div>




</section>

