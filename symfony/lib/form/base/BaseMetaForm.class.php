<?php

/**
 * Meta form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseMetaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'       => new sfWidgetFormInput(),
      'keywords'    => new sfWidgetFormInput(),
      'description' => new sfWidgetFormTextarea(),
      'is_active'   => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'id'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'keywords'    => new sfValidatorString(array('max_length' => 255)),
      'description' => new sfValidatorString(array('required' => false)),
      'is_active'   => new sfValidatorBoolean(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'id'          => new sfValidatorPropelChoice(array('model' => 'Meta', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('meta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Meta';
  }


}
