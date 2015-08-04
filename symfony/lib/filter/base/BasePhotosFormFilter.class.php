<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Photos filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePhotosFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'meta_id'     => new sfWidgetFormPropelChoice(array('model' => 'Meta', 'add_empty' => true)),
      'name'        => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'part_id'     => new sfWidgetFormPropelChoice(array('model' => 'Parts', 'add_empty' => true)),
      'author_id'   => new sfWidgetFormPropelChoice(array('model' => 'Authors', 'add_empty' => true)),
      'photo_s'     => new sfWidgetFormFilterInput(),
      'photo_b'     => new sfWidgetFormFilterInput(),
      'size'        => new sfWidgetFormFilterInput(),
      'price'       => new sfWidgetFormFilterInput(),
      'ord'         => new sfWidgetFormFilterInput(),
      'is_new'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_spec'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_active'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'meta_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Meta', 'column' => 'id')),
      'name'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'part_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Parts', 'column' => 'id')),
      'author_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Authors', 'column' => 'id')),
      'photo_s'     => new sfValidatorPass(array('required' => false)),
      'photo_b'     => new sfValidatorPass(array('required' => false)),
      'size'        => new sfValidatorPass(array('required' => false)),
      'price'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ord'         => new sfValidatorPass(array('required' => false)),
      'is_new'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_spec'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_active'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('photos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Photos';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'meta_id'     => 'ForeignKey',
      'name'        => 'Text',
      'description' => 'Text',
      'part_id'     => 'ForeignKey',
      'author_id'   => 'ForeignKey',
      'photo_s'     => 'Text',
      'photo_b'     => 'Text',
      'size'        => 'Text',
      'price'       => 'Number',
      'ord'         => 'Text',
      'is_new'      => 'Boolean',
      'is_spec'     => 'Boolean',
      'is_active'   => 'Boolean',
      'created_at'  => 'Date',
    );
  }
}
