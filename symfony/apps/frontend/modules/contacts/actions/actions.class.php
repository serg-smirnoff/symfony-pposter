<?php

/**
 * default actions.
 *
 * @package    sf_sandbox
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class contactsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {

    $response = $this->getResponse();
    $response->setTitle('��������� ��������� ���� ��������. ��������');
    $response->addMeta('robots', '��������� ��������� ���� ��������. ��������');
    $response->addMeta('keywords', '��������� ��������� ���� ��������. ��������');

	$this->menu = MenuPeer::doSelect(new Criteria());

    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);

  }

}
