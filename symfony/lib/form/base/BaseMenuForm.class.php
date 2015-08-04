<?php

/**
 * Menu form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseMenuForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'parent_id'  => new sfWidgetFormInput(),
      'name'       => new sfWidgetFormInput(),
      'announce'   => new sfWidgetFormInput(),
      'text'       => new sfWidgetFormTextarea(),
      'ord'        => new sfWidgetFormInput(),
      'url'        => new sfWidgetFormInput(),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Menu', 'column' => 'id', 'required' => false)),
      'parent_id'  => new sfValidatorInteger(array('required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'announce'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'text'       => new sfValidatorString(array('required' => false)),
      'ord'        => new sfValidatorInteger(array('required' => false)),
      'url'        => new sfValidatorString(array('max_length' => 255)),
      'is_active'  => new sfValidatorBoolean(),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('menu[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Menu';
  }


}
