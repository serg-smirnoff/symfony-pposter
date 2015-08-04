<?php

/**
 * pp_photos actions.
 *
 * @package    sf_sandbox
 * @subpackage pp_photos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class pp_photosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	$this->menu = MenuPeer::doSelect(new Criteria());

    $this->photos_list = PhotosPeer::doSelect(new Criteria());
	$this->id = $request->getParameter('id');

    $c = new Criteria();
    $c->add(PhotosPeer::ID, $this->id);
    $this->item = PhotosPeer::doSelect($c);
    $this->item = $this->item[0];
    unset ($c);

	$part_id = $this->item->getPartId();

    $c2 = new Criteria();
    $c2->add(PartsPeer::IS_ACTIVE, 1);
    $c2->add(PartsPeer::ID, $part_id);
    $this->part = PartsPeer::doSelect($c2);
    unset ($c2);

    $this->partName = $this->part[0]->getName();

    $c0 = new Criteria();
    $c0->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c0);
	unset($c0);

    $c1 = new Criteria();
    $c1->add(PartsPeer::ID, $this->item->getPartId());
    $this->part = PartsPeer::doSelect($c1);
    $this->part = $this->part[0];
	unset ($c1);

 	$response = $this->getResponse();
    $response->setTitle("Фото постеры. Купить фото постер. Каталог. ".$this->partName.". ".$this->item->getName());
    $response->addMeta("robots", "Фото постеры. Купить фото постер. Каталог. ".$this->partName.". ".$this->item->getName());
    $response->addMeta("keywords", "Фото постеры. Купить фото постер. Каталог. ".$this->partName.". ".$this->item->getName());

  }

  public function executeCart(sfWebRequest $request)
  {

    $this->photo_id = $request->getParameter('id');
    //$this->price = $request->getParameter('price');

    $cookie = sfContext::getInstance()->getRequest()->getCookie("sfCart");
	if (isset($cookie)) {
	    $c = $cookie.":".$this->photo_id;
	    sfContext::getInstance()->getResponse()->setCookie("sfCart", $c, 0x6FFFFFFF);
    }
	else {
	    sfContext::getInstance()->getResponse()->setCookie("sfCart", $this->photo_id, 0x6FFFFFFF);
	}

    if ($_SERVER["HTTP_REFERER"])
    	$this->redirect($_SERVER["HTTP_REFERER"]);
    else
        $this->forward404();
  }

  public function executeCartdel(sfWebRequest $request)
  {
	$this->photo_id = $request->getParameter('id');
    $cookie = sfContext::getInstance()->getRequest()->getCookie("sfCart");
    $arr = explode (":", $cookie);
	$k = array_search($this->photo_id,$arr);
    unset ($arr[$k]);
    $cookie = implode (":",$arr);
    sfContext::getInstance()->getResponse()->setCookie("sfCart", $cookie, 0x6FFFFFFF);
    $this->redirect($_SERVER["HTTP_REFERER"]);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $photos = $form->save();
      $this->redirect('pp_photos/edit?id='.$photos->getId());
    }
  }
}
