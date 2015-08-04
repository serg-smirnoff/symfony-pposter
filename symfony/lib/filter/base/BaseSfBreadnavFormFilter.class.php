<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * SfBreadnav filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseSfBreadnavFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'page'        => new sfWidgetFormFilterInput(),
      'title'       => new sfWidgetFormFilterInput(),
      'module'      => new sfWidgetFormFilterInput(),
      'action'      => new sfWidgetFormFilterInput(),
      'credential'  => new sfWidgetFormFilterInput(),
      'catchall'    => new sfWidgetFormFilterInput(),
      'tree_left'   => new sfWidgetFormFilterInput(),
      'tree_right'  => new sfWidgetFormFilterInput(),
      'tree_parent' => new sfWidgetFormFilterInput(),
      'scope'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'page'        => new sfValidatorPass(array('required' => false)),
      'title'       => new sfValidatorPass(array('required' => false)),
      'module'      => new sfValidatorPass(array('required' => false)),
      'action'      => new sfValidatorPass(array('required' => false)),
      'credential'  => new sfValidatorPass(array('required' => false)),
      'catchall'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_left'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_right'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_parent' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'scope'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sf_breadnav_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfBreadnav';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'page'        => 'Text',
      'title'       => 'Text',
      'module'      => 'Text',
      'action'      => 'Text',
      'credential'  => 'Text',
      'catchall'    => 'Number',
      'tree_left'   => 'Number',
      'tree_right'  => 'Number',
      'tree_parent' => 'Number',
      'scope'       => 'Number',
    );
  }
}
