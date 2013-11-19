<?php
/**
 * @file
 * appventure_theme.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function appventure_theme_image_default_styles() {
  $styles = array();

  // Exported image style: 12u.
  $styles['12u'] = array(
    'name' => '12u',
    'label' => '12u (1200x444)',
    'effects' => array(
      7 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1200,
          'height' => 444,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 4u.
  $styles['4u'] = array(
    'name' => '4u',
    'label' => '4u (367x255)',
    'effects' => array(
      3 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 367,
          'height' => 255,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 4u_small.
  $styles['4u_small'] = array(
    'name' => '4u_small',
    'label' => '4u small (367x172)',
    'effects' => array(
      6 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 367,
          'height' => 172,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 6u.
  $styles['6u'] = array(
    'name' => '6u',
    'label' => '6u (575x270)',
    'effects' => array(
      4 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 575,
          'height' => 270,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 8u.
  $styles['8u'] = array(
    'name' => '8u',
    'label' => '8u (783x290)',
    'effects' => array(
      5 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 783,
          'height' => 290,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
