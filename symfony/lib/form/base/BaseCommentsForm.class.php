<?php

/**
 * Comments form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCommentsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'is_active' => new sfWidgetFormInput(),
      'item_id'   => new sfWidgetFormInput(),
      'title'     => new sfWidgetFormInput(),
      'text'      => new sfWidgetFormInput(),
      'ip'        => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorPropelChoice(array('model' => 'Comments', 'column' => 'id', 'required' => false)),
      'is_active' => new sfValidatorInteger(),
      'item_id'   => new sfValidatorInteger(array('required' => false)),
      'title'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'text'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ip'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comments[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comments';
  }


}
