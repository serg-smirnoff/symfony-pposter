<?php

/**
 * Faq form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseFaqForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meta_id'    => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'question'   => new sfWidgetFormInput(),
      'answer'     => new sfWidgetFormInput(),
      'ord'        => new sfWidgetFormInput(),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'id'         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'meta_id'    => new sfValidatorPropelChoice(array('model' => 'Meta', 'column' => 'id', 'required' => false)),
      'question'   => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'answer'     => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'ord'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_active'  => new sfValidatorBoolean(),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'id'         => new sfValidatorPropelChoice(array('model' => 'Faq', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('faq[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Faq';
  }


}
