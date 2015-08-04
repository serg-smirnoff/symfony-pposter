<?php

/**
 * Parts form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePartsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'meta_id'     => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'ord'         => new sfWidgetFormInput(),
      'photo'       => new sfWidgetFormInput(),
      'name'        => new sfWidgetFormInput(),
      'description' => new sfWidgetFormInput(),
      'is_active'   => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Parts', 'column' => 'id', 'required' => false)),
      'meta_id'     => new sfValidatorPropelChoice(array('model' => 'Meta', 'column' => 'id', 'required' => false)),
      'ord'         => new sfValidatorInteger(array('required' => false)),
      'photo'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'description' => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'is_active'   => new sfValidatorBoolean(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('parts[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parts';
  }


}
