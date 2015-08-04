<?php

/**
 * Config form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseConfigForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'param'       => new sfWidgetFormInput(),
      'value'       => new sfWidgetFormInput(),
      'description' => new sfWidgetFormInput(),
      'is_active'   => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'id'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'param'       => new sfValidatorString(array('max_length' => 255)),
      'value'       => new sfValidatorString(array('max_length' => 3000)),
      'description' => new sfValidatorString(array('max_length' => 500)),
      'is_active'   => new sfValidatorBoolean(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'id'          => new sfValidatorPropelChoice(array('model' => 'Config', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('config[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Config';
  }


}
