<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Pages filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePagesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meta_id'    => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'url'        => new sfWidgetFormFilterInput(),
      'title'      => new sfWidgetFormFilterInput(),
      'announce'   => new sfWidgetFormFilterInput(),
      'text'       => new sfWidgetFormFilterInput(),
      'ord'        => new sfWidgetFormFilterInput(),
      'is_active'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'meta_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Meta', 'column' => 'id')),
      'url'        => new sfValidatorPass(array('required' => false)),
      'title'      => new sfValidatorPass(array('required' => false)),
      'announce'   => new sfValidatorPass(array('required' => false)),
      'text'       => new sfValidatorPass(array('required' => false)),
      'ord'        => new sfValidatorPass(array('required' => false)),
      'is_active'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('pages_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pages';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'meta_id'    => 'ForeignKey',
      'url'        => 'Text',
      'title'      => 'Text',
      'announce'   => 'Text',
      'text'       => 'Text',
      'ord'        => 'Text',
      'is_active'  => 'Boolean',
      'created_at' => 'Date',
    );
  }
}
