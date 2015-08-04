<?php

/**
 * pp_pages actions.
 *
 * @package    sf_sandbox
 * @subpackage pp_pages
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class pp_pagesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->menu = MenuPeer::doSelect(new Criteria());

    $c0 = new Criteria();
    $c0->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c0);
    unset($c0);

  	$params = $request->getpathInfoArray();
  	$url = $params["REQUEST_URI"];
    $url = str_replace("/", "", $url);

    $c = new Criteria();
    $c->add(PagesPeer::IS_ACTIVE, 1);
    $c->add(PagesPeer::URL, $url);
    $this->item = PagesPeer::doSelect($c);
    $this->item = $this->item[0];
    unset($c);

  }

  public function executeShow(sfWebRequest $request)
  {
    $this->pages = PagesPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->pages);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $pages = $form->save();

      $this->redirect('pp_pages/edit?id='.$pages->getId());
    }
  }
}
