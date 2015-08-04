<?php

/**
 * Items form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseItemsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'catalog_id'  => new sfWidgetFormInput(),
      'city_id'     => new sfWidgetFormInput(),
      'name'        => new sfWidgetFormInput(),
      'description' => new sfWidgetFormInput(),
      'photo'       => new sfWidgetFormInput(),
      'is_active'   => new sfWidgetFormInput(),
      'created_at'  => new sfWidgetFormDateTime(),
      'ord'         => new sfWidgetFormInput(),
      'fio'         => new sfWidgetFormInput(),
      'phone'       => new sfWidgetFormInput(),
      'address'     => new sfWidgetFormInput(),
      'email'       => new sfWidgetFormInput(),
      'item_id'     => new sfWidgetFormInput(),
      'is_sale'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Items', 'column' => 'id', 'required' => false)),
      'catalog_id'  => new sfValidatorInteger(array('required' => false)),
      'city_id'     => new sfValidatorInteger(array('required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'photo'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_active'   => new sfValidatorInteger(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'ord'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fio'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'item_id'     => new sfValidatorInteger(array('required' => false)),
      'is_sale'     => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('items[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Items';
  }


}
