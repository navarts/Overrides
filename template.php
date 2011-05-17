<?php
  function overrides_breadcrumb($variables){
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
      $bc = implode(' <span class="divider">&raquo;</span> ', $breadcrumb);
      $bc = str_replace('/%2A', '', $bc);
      return $bc;
    }
  }

/**
 *  Taken from Bartik theme template.php to try to get support for color.module in place.
 */

function overrides_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}
function overrides_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
}
