<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Member/MembershipType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Member_DAO_MembershipType extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_membership_type';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Membership Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Which Domain is this match entry for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * Name of Membership Type
   *
   * @var string
   */
  public $name;
  /**
   * Description of Membership Type
   *
   * @var string
   */
  public $description;
  /**
   * Owner organization for this membership type. FK to Contact ID
   *
   * @var int unsigned
   */
  public $member_of_contact_id;
  /**
   * If membership is paid by a contribution - what financial type should be used. FK to civicrm_financial_type.id
   *
   * @var int unsigned
   */
  public $financial_type_id;
  /**
   * Minimum fee for this membership (0 for free/complimentary memberships).
   *
   * @var float
   */
  public $minimum_fee;
  /**
   * Unit in which membership period is expressed.
   *
   * @var string
   */
  public $duration_unit;
  /**
   * Number of duration units in membership period (e.g. 1 year, 12 months).
   *
   * @var int
   */
  public $duration_interval;
  /**
   * Rolling membership period starts on signup date. Fixed membership periods start on fixed_period_start_day.
   *
   * @var string
   */
  public $period_type;
  /**
   * For fixed period memberships, month and day (mmdd) on which subscription/membership will start. Period start is back-dated unless after rollover day.
   *
   * @var int
   */
  public $fixed_period_start_day;
  /**
   * For fixed period memberships, signups after this day (mmdd) rollover to next period.
   *
   * @var int
   */
  public $fixed_period_rollover_day;
  /**
   * FK to Relationship Type ID
   *
   * @var string
   */
  public $relationship_type_id;
  /**
   *
   * @var string
   */
  public $relationship_direction;
  /**
   * Maximum number of related memberships.
   *
   * @var int
   */
  public $max_related;
  /**
   *
   * @var string
   */
  public $visibility;
  /**
   *
   * @var int
   */
  public $weight;
  /**
   * Receipt Text for membership signup
   *
   * @var string
   */
  public $receipt_text_signup;
  /**
   * Receipt Text for membership renewal
   *
   * @var string
   */
  public $receipt_text_renewal;
  /**
   * 0 = No auto-renew option; 1 = Give option, but not required; 2 = Auto-renew required;
   *
   * @var boolean
   */
  public $auto_renew;
  /**
   * Is this membership_type enabled
   *
   * @var boolean
   */
  public $is_active;
  /**
   * class constructor
   *
   * @return civicrm_membership_type
   */
  function __construct()
  {
    $this->__table = 'civicrm_membership_type';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'member_of_contact_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'financial_type_id', 'civicrm_financial_type', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type ID') ,
          'description' => 'Membership Id',
          'required' => true,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type Domain') ,
          'description' => 'Which Domain is this match entry for',
          'required' => true,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'membership_type' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type') ,
          'description' => 'Name of Membership Type',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_membership_type.name',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Description') ,
          'description' => 'Description of Membership Type',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'member_of_contact_id' => array(
          'name' => 'member_of_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type Organization') ,
          'description' => 'Owner organization for this membership type. FK to Contact ID',
          'required' => true,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'financial_type_id' => array(
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Financial Type') ,
          'description' => 'If membership is paid by a contribution - what financial type should be used. FK to civicrm_financial_type.id',
          'required' => true,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'minimum_fee' => array(
          'name' => 'minimum_fee',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('membership Type Minimum Fee') ,
          'description' => 'Minimum fee for this membership (0 for free/complimentary memberships).',
          'precision' => array(
            20,
            2
          ) ,
        ) ,
        'duration_unit' => array(
          'name' => 'duration_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Duration Unit') ,
          'description' => 'Unit in which membership period is expressed.',
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::membershipTypeUnitList',
          )
        ) ,
        'duration_interval' => array(
          'name' => 'duration_interval',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type Duration Interval') ,
          'description' => 'Number of duration units in membership period (e.g. 1 year, 12 months).',
        ) ,
        'period_type' => array(
          'name' => 'period_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Plan') ,
          'description' => 'Rolling membership period starts on signup date. Fixed membership periods start on fixed_period_start_day.',
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::periodType',
          )
        ) ,
        'fixed_period_start_day' => array(
          'name' => 'fixed_period_start_day',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Fixed Period Start Day') ,
          'description' => 'For fixed period memberships, month and day (mmdd) on which subscription/membership will start. Period start is back-dated unless after rollover day.',
        ) ,
        'fixed_period_rollover_day' => array(
          'name' => 'fixed_period_rollover_day',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Fixed Period Rollover Day') ,
          'description' => 'For fixed period memberships, signups after this day (mmdd) rollover to next period.',
        ) ,
        'relationship_type_id' => array(
          'name' => 'relationship_type_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Relationship') ,
          'description' => 'FK to Relationship Type ID',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'relationship_direction' => array(
          'name' => 'relationship_direction',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Relationship Direction') ,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'max_related' => array(
          'name' => 'max_related',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Max Related Members for Type') ,
          'description' => 'Maximum number of related memberships.',
        ) ,
        'visibility' => array(
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Visible') ,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::memberVisibility',
          )
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
        ) ,
        'receipt_text_signup' => array(
          'name' => 'receipt_text_signup',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Receipt Text') ,
          'description' => 'Receipt Text for membership signup',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'receipt_text_renewal' => array(
          'name' => 'receipt_text_renewal',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Renewal Text') ,
          'description' => 'Receipt Text for membership renewal',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'auto_renew' => array(
          'name' => 'auto_renew',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Auto Renew') ,
          'description' => '0 = No auto-renew option; 1 = Give option, but not required; 2 = Auto-renew required;',
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::memberAutoRenew',
          )
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active') ,
          'description' => 'Is this membership_type enabled',
          'default' => '1',
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'domain_id' => 'domain_id',
        'name' => 'membership_type',
        'description' => 'description',
        'member_of_contact_id' => 'member_of_contact_id',
        'financial_type_id' => 'financial_type_id',
        'minimum_fee' => 'minimum_fee',
        'duration_unit' => 'duration_unit',
        'duration_interval' => 'duration_interval',
        'period_type' => 'period_type',
        'fixed_period_start_day' => 'fixed_period_start_day',
        'fixed_period_rollover_day' => 'fixed_period_rollover_day',
        'relationship_type_id' => 'relationship_type_id',
        'relationship_direction' => 'relationship_direction',
        'max_related' => 'max_related',
        'visibility' => 'visibility',
        'weight' => 'weight',
        'receipt_text_signup' => 'receipt_text_signup',
        'receipt_text_renewal' => 'receipt_text_renewal',
        'auto_renew' => 'auto_renew',
        'is_active' => 'is_active',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['membership_type'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['membership_type'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
