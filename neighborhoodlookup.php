<?php

require_once 'neighborhoodlookup.civix.php';


function neighborhoodlookup_civicrm_geocoderFormat($geoProvider, &$values, $xml) {
  if($geoProvider !== 'Google') {
    exit;
  }
  foreach ($xml->result->address_component as $test) {
    $type = (string) $test->type[0];
    if ($type == 'neighborhood') {
      $values['custom_7_1'] = (string) $test->long_name;
      $values['custom_7_-1'] = (string) $test->long_name;
    }
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function neighborhoodlookup_civicrm_config(&$config) {
  _neighborhoodlookup_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function neighborhoodlookup_civicrm_xmlMenu(&$files) {
  _neighborhoodlookup_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function neighborhoodlookup_civicrm_install() {
  _neighborhoodlookup_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function neighborhoodlookup_civicrm_uninstall() {
  _neighborhoodlookup_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function neighborhoodlookup_civicrm_enable() {
  _neighborhoodlookup_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function neighborhoodlookup_civicrm_disable() {
  _neighborhoodlookup_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function neighborhoodlookup_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _neighborhoodlookup_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function neighborhoodlookup_civicrm_managed(&$entities) {
  _neighborhoodlookup_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function neighborhoodlookup_civicrm_caseTypes(&$caseTypes) {
  _neighborhoodlookup_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function neighborhoodlookup_civicrm_angularModules(&$angularModules) {
_neighborhoodlookup_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function neighborhoodlookup_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _neighborhoodlookup_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function neighborhoodlookup_civicrm_preProcess($formName, &$form) {

}

*/
