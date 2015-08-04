<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Items filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseItemsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'catalog_id'  => new sfWidgetFormFilterInput(),
      'city_id'     => new sfWidgetFormFilterInput(),
      'name'        => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'photo'       => new sfWidgetFormFilterInput(),
      'is_active'   => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'ord'         => new sfWidgetFormFilterInput(),
      'fio'         => new sfWidgetFormFilterInput(),
      'phone'       => new sfWidgetFormFilterInput(),
      'address'     => new sfWidgetFormFilterInput(),
      'email'       => new sfWidgetFormFilterInput(),
      'item_id'     => new sfWidgetFormFilterInput(),
      'is_sale'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'catalog_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'city_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'photo'       => new sfValidatorPass(array('required' => false)),
      'is_active'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'ord'         => new sfValidatorPass(array('required' => false)),
      'fio'         => new sfValidatorPass(array('required' => false)),
      'phone'       => new sfValidatorPass(array('required' => false)),
      'address'     => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
      'item_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_sale'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('items_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Items';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'catalog_id'  => 'Number',
      'city_id'     => 'Number',
      'name'        => 'Text',
      'description' => 'Text',
      'photo'       => 'Text',
      'is_active'   => 'Number',
      'created_at'  => 'Date',
      'ord'         => 'Text',
      'fio'         => 'Text',
      'phone'       => 'Text',
      'address'     => 'Text',
      'email'       => 'Text',
      'item_id'     => 'Number',
      'is_sale'     => 'Number',
    );
  }
}
