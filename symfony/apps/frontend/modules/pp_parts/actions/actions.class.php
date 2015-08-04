<?php

/**
 * pp_parts actions.
 *
 * @package    sf_sandbox
 * @subpackage pp_parts
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class pp_partsActions extends sfActions
{
  public function executeNew(sfWebRequest $request){
    $this->menu = MenuPeer::doSelect(new Criteria());

    $c0 = new Criteria();
    $c0->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c0);
    unset($c0);

    $response = $this->getResponse();
    $response->setTitle('Фото постеры. Купить фото постер. Каталог. Новинки');
    $response->addMeta('robots', 'Фото постеры. Купить фото постер. Каталог. Новинки');
    $response->addMeta('keywords', 'Фото постеры. Купить фото постер. Каталог. Новинки');

    $c = new Criteria();
    $c->add(PhotosPeer::IS_NEW, 1);
    $c->add(PhotosPeer::IS_ACTIVE, 1);
   	$pager = new sfPropelPager('Photos', 5);
   	$pager->setCriteria($c);
   	$pager->setPage($this->getRequestParameter('page', 1));
   	$pager->init();
   	$this->pager = $pager;
	unset ($c);
  }

  public function executeIndex(sfWebRequest $request)
  {
    $response = $this->getResponse();

    $part_id = $request->getParameter('id');
    $this->p = $part_id;

    $response->setTitle('Фото постеры. Купить фото постер. Каталог');
    $response->addMeta('robots', 'Фото постеры. Купить фото постер. Каталог');
    $response->addMeta('keywords', 'Фото постеры. Купить фото постер. Каталог');


    $this->menu = MenuPeer::doSelect(new Criteria());
    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);
    unset ($c);

    $c1 = new Criteria();
    $this->items = PhotosPeer::doSelect($c1);

    if ($part_id) {

		$cc1 = new Criteria();
		$cc1->add(PartsPeer::ID, $part_id);
		$cc1->add(PartsPeer::IS_ACTIVE, 1);
		$meta = PartsPeer::doSelect($cc1);
		$meta_id = $meta[0]->getMetaId();
		unset ($cc1);

		$m = new Criteria();
		$m->add(MetaPeer::ID, $meta_id);
		$m->add(MetaPeer::IS_ACTIVE, 1);
		$meta = MetaPeer::doSelect($m);
		unset ($m);

	    $response = $this->getResponse();

	    $response->setTitle($meta[0]->getTitle());
	    $response->addMeta('robots', $meta[0]->getKeywords());
	    $response->addMeta('keywords', $meta[0]->getDescription());

        $c1 = new Criteria();
        $c1->add(PhotosPeer::PART_ID, $part_id);
        $c1->add(PhotosPeer::IS_ACTIVE, 1);
    	$pager = new sfPropelPager('Photos', 5);
    	$pager->setCriteria($c1);
    	$pager->setPage($this->getRequestParameter('page', 1));
    	$pager->init();
    	$this->pager = $pager;
    	$c2 = new Criteria();
 		$c2->add(PartsPeer::ID, $part_id);
    	$this->part = PartsPeer::doSelect($c2);

  }
  unset ($c1);
  }

  public function executeParts(sfWebRequest $request)
  {
    $response = $this->getResponse();
    $response->setTitle('Фото постеры. Купить фото постер. Каталог');
    $response->addMeta('robots', 'Фото постеры. Купить фото постер. Каталог');
    $response->addMeta('keywords', 'Фото постеры. Купить фото постер. Каталог');

    $part_id = $request->getParameter('id');
    $this->p = $part_id;

    $this->menu = MenuPeer::doSelect(new Criteria());
    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);

    $c1 = new Criteria();
    $this->items = PhotosPeer::doSelect($c1);

    if ($part_id) {
        $c1 = new Criteria();
        $c1->add(PhotosPeer::PART_ID, $part_id);
    	$pager = new sfPropelPager('Photos', 5);
    	$pager->setCriteria($c1);
    	$pager->setPage($this->getRequestParameter('page', 1));
    	$pager->init();
    	$this->pager = $pager;
    	$c2 = new Criteria();
 		$c2->add(PartsPeer::ID, $part_id);
    	$this->part = PartsPeer::doSelect($c2);
  }
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $parts = $form->save();
      $this->redirect('pp_parts/edit?id='.$parts->getId());
    }
  }
}