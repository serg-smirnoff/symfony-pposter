<?php

/**
 * SfBreadnav form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseSfBreadnavForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'page'        => new sfWidgetFormInput(),
      'title'       => new sfWidgetFormInput(),
      'module'      => new sfWidgetFormInput(),
      'action'      => new sfWidgetFormInput(),
      'credential'  => new sfWidgetFormInput(),
      'catchall'    => new sfWidgetFormInput(),
      'tree_left'   => new sfWidgetFormInput(),
      'tree_right'  => new sfWidgetFormInput(),
      'tree_parent' => new sfWidgetFormInput(),
      'scope'       => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'SfBreadnav', 'column' => 'id', 'required' => false)),
      'page'        => new sfValidatorString(array('max_length' => 255)),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'module'      => new sfValidatorString(array('max_length' => 128)),
      'action'      => new sfValidatorString(array('max_length' => 128)),
      'credential'  => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'catchall'    => new sfValidatorInteger(array('required' => false)),
      'tree_left'   => new sfValidatorInteger(),
      'tree_right'  => new sfValidatorInteger(),
      'tree_parent' => new sfValidatorInteger(),
      'scope'       => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('sf_breadnav[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfBreadnav';
  }


}
