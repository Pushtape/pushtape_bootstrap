<?php
/**
 * @file
 * Theme settings.
 */

/**
 * Implements theme_settings().
 */
// Panels styles style plugin settings.
$form['pane_styles'] = array(
    '#type' => 'fieldset',
    '#title' => t('Pane and Region Styles'),
    '#weight' => 43,
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#description' => t('If toggled on, the bootstrapcustomize style plugin will allow the user to set a class for panels panes and regions.'),
);
$form['pane_styles']['pane_styles_toggle'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use panels styles.'),
    '#default_value' => theme_get_setting('pane_styles_toggle'),
    '#description' => t('Check here if you want to set the class for each panels pane or region.'),
);
$form['pane_styles']['pane_styles_settings'] = array(
    '#type' => 'container',
    '#states' => array(
        'invisible' => array(
            ':input[name="pane_styles_toggle"]' => array('checked' => TRUE),
        ),
    ),
);


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
    '#default_value' => $copyright['value'] ? $copyright['value'] : t('Powered by Pushtape'),
  );

  // Return the additional form widgets.
  return $form;
}
