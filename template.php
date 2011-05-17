<?php
  function overrides_breadcrumb($variables){
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
      $bc = implode(' <span class="divider">&raquo;</span> ', $breadcrumb);
      $bc = str_replace('/%2A', '', $bc);
      return $bc;
    }
  }
