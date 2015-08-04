<?php

/**
 * pp_news actions.
 *
 * @package    sf_sandbox
 * @subpackage pp_news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class pp_newsActions extends sfActions
{

  public function executeIndex(sfWebRequest $request)
  {
    $this->menu = MenuPeer::doSelect(new Criteria());
    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);
    unset ($c);

	$c1 = new Criteria();
	$c1->add(NewsPeer::IS_ACTIVE, 1);
	$c1->addDescendingOrderByColumn (NewsPeer::CREATED_AT);
	$pager = new sfPropelPager('News', 5);
	$pager->setCriteria($c1);
	$pager->setPage($this->getRequestParameter('page', 1));
	$pager->init();
	$this->pager = $pager;
    unset($c1);
  }

  public function executeNew(sfWebRequest $request){

    $this->menu = MenuPeer::doSelect(new Criteria());

    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);
    unset ($c);

	$id = $request->getParameter('id');

    $c0 = new Criteria();
    $c0->add(NewsPeer::IS_ACTIVE, 1);
    $c0->add(NewsPeer::ID, $id);

    $this->new = NewsPeer::doSelect($c0);
    $this->new = $this->new[0];

    unset ($c0);

  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $news = $form->save();

      $this->redirect('news/edit?id='.$news->getId());
    }
  }
}
