<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Comments filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCommentsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_active' => new sfWidgetFormFilterInput(),
      'item_id'   => new sfWidgetFormFilterInput(),
      'title'     => new sfWidgetFormFilterInput(),
      'text'      => new sfWidgetFormFilterInput(),
      'ip'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'is_active' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'item_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'title'     => new sfValidatorPass(array('required' => false)),
      'text'      => new sfValidatorPass(array('required' => false)),
      'ip'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('comments_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comments';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'is_active' => 'Number',
      'item_id'   => 'Number',
      'title'     => 'Text',
      'text'      => 'Text',
      'ip'        => 'Number',
    );
  }
}
