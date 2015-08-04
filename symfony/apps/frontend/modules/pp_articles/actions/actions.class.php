<?php

/**
 * pp_articles actions.
 *
 * @package    sf_sandbox
 * @subpackage pp_articles
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class pp_articlesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->menu = MenuPeer::doSelect(new Criteria());
    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);

	$c1 = new Criteria();
	$c1->add(ArticlesPeer::IS_ACTIVE, 1);
	$c1->addAscendingOrderByColumn (ArticlesPeer::ORD);
	$pager = new sfPropelPager('Articles', 5);
	$pager->setCriteria($c1);
	$pager->setPage($this->getRequestParameter('page', 1));
	$pager->init();
	$this->pager = $pager;
  }

  public function executeNew(sfWebRequest $request){

    $this->menu = MenuPeer::doSelect(new Criteria());

    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);
    unset ($c);

	$id = $request->getParameter('id');

    $c0 = new Criteria();
    $c0->add(ArticlesPeer::IS_ACTIVE, 1);
    $c0->add(ArticlesPeer::ID, $id);

    $this->new = ArticlesPeer::doSelect($c0);
    $this->new = $this->new[0];

    unset ($c0);

  }

  public function executeCreate(sfWebRequest $request)
  {
  }

  public function executeEdit(sfWebRequest $request)
  {
  }

  public function executeUpdate(sfWebRequest $request)
  {
  }

  public function executeDelete(sfWebRequest $request)
  {
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $articles = $form->save();

      $this->redirect('articles/edit?id='.$articles->getId());
    }
  }
}
