<?php
/**
 * @file
 * Theme settings.
 */


function pushtape_bootstrap_form_system_theme_settings_alter(&$form, &$form_state) {
  // Ensure this include file is loaded when the form is rebuilt from the cache.
  $form_state['build_info']['files']['form'] = drupal_get_path('theme', 'default') . '/theme-settings.php';

  // Add theme settings here.
  $form['pushtape_bootstrap_theme_settings'] = array(
    '#title' => t('Theme Settings'),
    '#type' => 'fieldset',
  );

  // Copyright.
  $copyright = theme_get_setting('copyright');
  $form['pushtape_bootstrap_theme_settings']['copyright'] = array(
    '#title' => t('Copyright'),
    '#type' => 'text_format',
    '#format' => $copyright['format'],
    '#default_value' => $copyright['value'] ? $copyright['value'] : t('Powered by Pushtape and Panopoly'),
  );

  // Return the additional form widgets.
  return $form;
}
