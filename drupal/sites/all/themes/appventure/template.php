<?php

/**
 * template_preprocess_html
 * 
 * @param type $variables
 */
function appventure_preprocess_html(&$variables) {	
  $variables['theme_path'] = '/'.path_to_theme().'/';  
}
?>