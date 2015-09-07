<?php
/**
 * Implements hook_breadcrumbs_alter().
 */
function portland_menu_breadcrumb_alter(&$active_trail, $item) {
  // Shifts the first element from the active trail array. We assume that this
  // is the front page.
  if (!drupal_is_front_page()) {
    array_shift($active_trail);

  }
}

function portland_preprocess_page(&$vars) {
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
}

/**
 * Implements hook_css_alter().
 */
function portland_css_alter(&$css) {
  $exclude = array(
      'misc/vertical-tabs.css' => FALSE,
      'modules/aggregator/aggregator.css' => FALSE,
      'modules/block/block.css' => FALSE,
      'modules/book/book.css' => FALSE,
      'modules/comment/comment.css' => FALSE,
      'modules/dblog/dblog.css' => FALSE,
      'modules/file/file.css' => FALSE,
      'modules/filter/filter.css' => FALSE,
      'modules/forum/forum.css' => FALSE,
      'modules/help/help.css' => FALSE,
      'modules/menu/menu.css' => FALSE,
      'modules/node/node.css' => FALSE,
      'modules/openid/openid.css' => FALSE,
      'modules/poll/poll.css' => FALSE,
      'modules/profile/profile.css' => FALSE,
      'modules/search/search.css' => FALSE,
      'modules/statistics/statistics.css' => FALSE,
      'modules/syslog/syslog.css' => FALSE,
      'modules/system/admin.css' => FALSE,
      'modules/system/maintenance.css' => FALSE,
      'modules/system/system.css' => FALSE,
      'modules/system/system.admin.css' => FALSE,
      'modules/system/system.base.css' => FALSE,
      'modules/system/system.maintenance.css' => FALSE,
      'modules/system/system.menus.css' => FALSE,
      'modules/system/system.messages.css' => FALSE,
      'modules/system/system.theme.css' => FALSE,
      'modules/taxonomy/taxonomy.css' => FALSE,
      'modules/tracker/tracker.css' => FALSE,
      'modules/update/update.css' => FALSE,
      'modules/user/user.css' => FALSE,
  );
  $css = array_diff_key($css, $exclude);

}
  // Use Seven's vertical tabs style instead of the default one.
//  if (isset($css['system.theme.css'])) {
//    $css['system.theme.css']['data'] = drupal_get_path('theme', 'portland') . '/assets/dev/css/system.theme.css';
////    $css['misc/vertical-tabs.css']['type'] = 'file';
//  }
//  if (isset($css['misc/vertical-tabs-rtl.css'])) {
//    $css['misc/vertical-tabs-rtl.css']['data'] = drupal_get_path('theme', 'seven') . '/vertical-tabs-rtl.css';
//    $css['misc/vertical-tabs-rtl.css']['type'] = 'file';
//  }
//  // Use Seven's jQuery UI theme style instead of the default one.
//  if (isset($css['misc/ui/jquery.ui.theme.css'])) {
//    $css['misc/ui/jquery.ui.theme.css']['data'] = drupal_get_path('theme', 'seven') . '/jquery.ui.theme.css';
//    $css['misc/ui/jquery.ui.theme.css']['type'] = 'file';
//  }



//function portland_preprocess_field(&$vars) {
//  if($vars['element']['#field_name'] == 'field_links') {
//    print "test";
//    $vars['element']['#prefix'] = '<div class="pageMenu">';
//    $vars['element']['#suffix'] = '</div>';
//  }
//};
//
//function portland_preprocess_node(&$vars) {
//  if($vars['element']['#field_name'] == 'field_links') {
//    print "test";
//    $vars['element']['#prefix'] = '<div class="pageMenu">';
//    $vars['element']['#suffix'] = '</div>';
//  }
//};
//

//function portland_field($variables) {
//  $output = '';
//
//  // Render the label, if it's not hidden.
//  if (!$variables ['label_hidden']) {
//    $output .= '<div' . $variables ['title_attributes'] . '>' . $variables ['label'] . ':&nbsp;</div>';
//  }
//
//  // Render the items.
//  $output .= '<div' . $variables ['content_attributes'] . '>';
//  foreach ($variables ['items'] as $delta => $item) {
//    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
//    $output .= '<div class="' . $classes . '"' . $variables ['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
//  }
//  $output .= '</div>';
//
//  // Render the top-level DIV.
//  $output = '<div class="' . $variables ['classes'] . '"' . $variables ['attributes'] . '>' . $output . '</div>';
//
//  return $output;
//}

/**
 * Implements hook_preprocess_field()
 */

//function portland_preprocess_field(&$vars) {
//  /* Set shortcut variables. Hooray for less typing! */
//  $name = $vars['field_links']['#field_name'];
//  $bundle = $vars['field_links']['#bundle'];
//  $mode = $vars['field_links']['#view_mode'];
//  $classes = &$vars['classes_array'];
//  $title_classes = &$vars['title_attributes_array']['class'];
//  $content_classes = &$vars['content_attributes_array']['class'];
//  $item_classes = array();
//
//  /* Global field classes */
//  $classes[] = 'field-wrapper';
//  $title_classes[] = 'field-label';
//  $content_classes[] = 'field-items';
//  $item_classes[] = 'field-item';
//
//  /* Uncomment the lines below to see variables you can use to target a field */
//   print '<strong>Name:</strong> ' . $name . '<br/>';
//   print '<strong>Bundle:</strong> ' . $bundle  . '<br/>';
//   print '<strong>Mode:</strong> ' . $mode .'<br/>';
//
//  /* Add specific classes to targeted fields */
//  switch ($mode) {
//    /* All teasers */
//    case 'teaser':
//      switch ($name) {
//        /* Teaser read more links */
//        case 'node_link':
//          $item_classes[] = 'more-link';
//          break;
//        /* Teaser descriptions */
//        case 'body':
//        case 'field_description':
//          $item_classes[] = 'description';
//          break;
//      }
//      break;
//  }
//
//  switch ($name) {
//    case 'field_authors':
//      $title_classes[] = 'inline';
//      $content_classes[] = 'authors';
//      $item_classes[] = 'author';
//      break;
//  }

//  // Apply odd or even classes along with our custom classes to each item */
//  foreach ($vars['items'] as $delta => $item) {
//    $vars['item_attributes_array'][$delta]['class'] = $item_classes;
//    $vars['item_attributes_array'][$delta]['class'][] = $delta % 2 ? 'even' : 'odd';
//  }
//}




