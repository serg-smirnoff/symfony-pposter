<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * News filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseNewsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meta_id'    => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'title'      => new sfWidgetFormFilterInput(),
      'announce'   => new sfWidgetFormFilterInput(),
      'text'       => new sfWidgetFormFilterInput(),
      'ord'        => new sfWidgetFormFilterInput(),
      'is_active'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'meta_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Meta', 'column' => 'id')),
      'title'      => new sfValidatorPass(array('required' => false)),
      'announce'   => new sfValidatorPass(array('required' => false)),
      'text'       => new sfValidatorPass(array('required' => false)),
      'ord'        => new sfValidatorPass(array('required' => false)),
      'is_active'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('news_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'News';
  }

  public function getFields()
  {
    return array(
      'meta_id'    => 'ForeignKey',
      'title'      => 'Text',
      'announce'   => 'Text',
      'text'       => 'Text',
      'ord'        => 'Text',
      'is_active'  => 'Boolean',
      'created_at' => 'Date',
      'id'         => 'Number',
    );
  }
}
