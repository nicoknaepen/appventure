<?php
function ds_teaser() {
  return array(
    'label' => t('Appventure teaser'),
    'regions' => array(
      'image' => t('Image'),
      'title' => t('Title'),
      'text' => t('Text'),
      'buttons' => t('Buttons'),    
    ),
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}