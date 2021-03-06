<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Parts filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePartsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meta_id'     => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'ord'         => new sfWidgetFormFilterInput(),
      'photo'       => new sfWidgetFormFilterInput(),
      'name'        => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'is_active'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'meta_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Meta', 'column' => 'id')),
      'ord'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'photo'       => new sfValidatorPass(array('required' => false)),
      'name'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'is_active'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('parts_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parts';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'meta_id'     => 'ForeignKey',
      'ord'         => 'Number',
      'photo'       => 'Text',
      'name'        => 'Text',
      'description' => 'Text',
      'is_active'   => 'Boolean',
      'created_at'  => 'Date',
    );
  }
}
