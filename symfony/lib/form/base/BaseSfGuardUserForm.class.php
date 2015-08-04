<?php

/**
 * SfGuardUser form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseSfGuardUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'username'       => new sfWidgetFormInput(),
      'algorithm'      => new sfWidgetFormInput(),
      'salt'           => new sfWidgetFormInput(),
      'password'       => new sfWidgetFormInput(),
      'created_at'     => new sfWidgetFormDateTime(),
      'last_login'     => new sfWidgetFormDateTime(),
      'is_active'      => new sfWidgetFormInput(),
      'is_super_admin' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'SfGuardUser', 'column' => 'id', 'required' => false)),
      'username'       => new sfValidatorString(array('max_length' => 128)),
      'algorithm'      => new sfValidatorString(array('max_length' => 128)),
      'salt'           => new sfValidatorString(array('max_length' => 128)),
      'password'       => new sfValidatorString(array('max_length' => 128)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'last_login'     => new sfValidatorDateTime(array('required' => false)),
      'is_active'      => new sfValidatorInteger(),
      'is_super_admin' => new sfValidatorInteger(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'SfGuardUser', 'column' => array('username')))
    );

    $this->widgetSchema->setNameFormat('sf_guard_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfGuardUser';
  }


}
