<?php

/**
 * Photos form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePhotosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'meta_id'     => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'name'        => new sfWidgetFormInput(),
      'description' => new sfWidgetFormInput(),
      'part_id'     => new sfWidgetFormPropelChoice(array('model' => 'Parts', 'add_empty' => true)),
      'author_id'   => new sfWidgetFormPropelChoice(array('model' => 'Authors', 'add_empty' => true)),
      'photo_s'     => new sfWidgetFormInput(),
      'photo_b'     => new sfWidgetFormInput(),
      'size'        => new sfWidgetFormInput(),
      'price'       => new sfWidgetFormInput(),
      'ord'         => new sfWidgetFormInput(),
      'is_new'      => new sfWidgetFormInputCheckbox(),
      'is_spec'     => new sfWidgetFormInputCheckbox(),
      'is_active'   => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Photos', 'column' => 'id', 'required' => false)),
      'meta_id'     => new sfValidatorPropelChoice(array('model' => 'Meta', 'column' => 'id', 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'description' => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'part_id'     => new sfValidatorPropelChoice(array('model' => 'Parts', 'column' => 'id', 'required' => false)),
      'author_id'   => new sfValidatorPropelChoice(array('model' => 'Authors', 'column' => 'id', 'required' => false)),
      'photo_s'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'photo_b'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'size'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'       => new sfValidatorInteger(array('required' => false)),
      'ord'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_new'      => new sfValidatorBoolean(),
      'is_spec'     => new sfValidatorBoolean(),
      'is_active'   => new sfValidatorBoolean(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('photos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Photos';
  }


}
