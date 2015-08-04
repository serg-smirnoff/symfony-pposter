<?php

/**
 * default actions.
 *
 * @package    sf_sandbox
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class defaultActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $response = $this->getResponse();

    $response->setTitle('Фото постеры. Купить фото постер. Главная');
    $response->addMeta('robots', 'Фото постеры. Купить фото постер. Главная');
    $response->addMeta('keywords', 'Фото постеры. Купить фото постер. Главная');

	$this->menu = MenuPeer::doSelect(new Criteria());
    $c = new Criteria();
 	$c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);
	unset($c);

    $c1 = new Criteria();
 	$c1->add(ConfigPeer::PARAM, maintext);
    $text = ConfigPeer::doSelect($c1);
	$this->text = $text[0]->getValue();
    unset ($c1);
  }

  public function executeError404(sfWebRequest $request)
  {
    $response = $this->getResponse();

    $response->setTitle('Фото постеры. 404. Документ не найден на сервере.');
    $response->addMeta('robots', 'Фото постеры. 404. Документ не найден на сервере.');
    $response->addMeta('keywords', 'Фото постеры. 404. Документ не найден на сервере.');

  	//echo "404. Error";
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->config = ConfigPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->config);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $config = $form->save();

      $this->redirect('default/edit?id='.$config->getId());
    }
  }
}
