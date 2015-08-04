<?php

/**
 * Pages form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePagesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'meta_id'    => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'url'        => new sfWidgetFormInput(),
      'title'      => new sfWidgetFormInput(),
      'announce'   => new sfWidgetFormInput(),
      'text'       => new sfWidgetFormInput(),
      'ord'        => new sfWidgetFormInput(),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Pages', 'column' => 'id', 'required' => false)),
      'meta_id'    => new sfValidatorPropelChoice(array('model' => 'Meta', 'column' => 'id', 'required' => false)),
      'url'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'announce'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'text'       => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'ord'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_active'  => new sfValidatorBoolean(),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pages[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pages';
  }


}
