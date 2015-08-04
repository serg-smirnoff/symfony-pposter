<?php

/**
 * cart actions.
 *
 * @package    sf_sandbox
 * @subpackage cart
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class cartActions extends sfActions
{
  public function executeIndex(sfWebRequest $request) {

    $response = $this->getResponse();
    $response->setTitle('Фото постеры. Купить фото постер. Корзина.');
    $response->addMeta('robots', 'Фото постеры. Купить фото постер. Корзина.');
    $response->addMeta('keywords', 'Фото постеры. Купить фото постер. Корзина.');

    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);

    $this->menu = MenuPeer::doSelect(new Criteria());

	if (isset($_COOKIE["sfCart"])){
		$arr = explode(":", $_COOKIE["sfCart"]);
    }

    $cr = new Criteria();

	foreach ($arr as $k => $v){
 		$cr->add(PhotosPeer::ID, $v);
	    $c = PhotosPeer::doSelect($cr);
	    $items[$k] = $c[0];
    }

	$this->items = $items;

  }

  public function executeClear(sfWebRequest $request) {
    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);

    $this->menu = MenuPeer::doSelect(new Criteria());
	sfContext::getInstance()->getResponse()->setCookie("sfCart");
    $this->redirect($_SERVER["HTTP_REFERER"]);
  }

  public function executeOrderok(sfWebRequest $request) {

    $response = $this->getResponse();
    $response->setTitle('Фото постеры. Купить фото постер. Корзина. Ваш заказ отправлен.');
    $response->addMeta('robots', 'Фото постеры. Купить фото постер. Корзина. Ваш заказ отправлен.');
    $response->addMeta('keywords', 'Фото постеры. Купить фото постер. Корзина. Ваш заказ отправлен.');

    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);

    $this->menu = MenuPeer::doSelect(new Criteria());
  }

  public function executeOrder(sfWebRequest $request) {
    $c = new Criteria();
    $c->add(PartsPeer::IS_ACTIVE, 1);
    $this->parts = PartsPeer::doSelect($c);

    $this->menu = MenuPeer::doSelect(new Criteria());

   	if($this->getRequest()->getMethod() === sfRequest::POST) {

		$this->param0 = $this->getRequestParameter('param0');
		$this->param1 = $this->getRequestParameter('param1');
        $this->param2 = $this->getRequestParameter('param2');
        $this->param3 = $this->getRequestParameter('param3');
        $this->param4 = $this->getRequestParameter('param4');
        $this->param5 = $this->getRequestParameter('param5');
        $this->param6 = $this->getRequestParameter('param6');
        $this->param7 = $this->getRequestParameter('param7');
        $this->param8 = $this->getRequestParameter('param8');
        $this->param9 = $this->getRequestParameter('param9');
        $this->param10 = $this->getRequestParameter('param10');
        $this->param11 = $this->getRequestParameter('param11');
        $this->param12 = $this->getRequestParameter('param12');

		$this->message = "";

		if (!$this->param1) $this->message = "Вы не заполнили поле Фамилия.";
		if (!$this->param2) $this->message = "Вы не заполнили поле Имя.";
		if (!$this->param3) $this->message = "Вы не заполнили поле Отчество.";
		if (!$this->param4) $this->message = "Вы не заполнили поле Индекс.";
		if (!$this->param6) $this->message = "Вы не заполнили поле Область.";
		if (!$this->param7) $this->message = "Вы не заполнили поле Город.";
		if (!$this->param8) $this->message = "Вы не заполнили поле Улица.";
		if (!$this->param9) $this->message = "Вы не заполнили поле Дом.";
		if (!$this->param11) $this->message = "Вы не заполнили поле Квартира.";
		if (!$this->param12) $this->message = "Вы не заполнили поле Контактный телефон.";

		if ($this->message == "") {

		$subject = "Заказ с сайта P-POSTER.COM";
		$message = "Фамилия: ".$this->param1."
Имя: ".$this->param2."
Отчество: ".$this->param3."
Индекс: ".$this->param4."
Страна: ".$this->param5."
Область: ".$this->param6."
Город: ".$this->param7."
Улица: ".$this->param8."
Дом: ".$this->param9."
Корпус: ".$this->param10."
Квартира: ".$this->param11."
Телефон: ".$this->param12."
Заказ (Список ID по БД): ".$this->param0;

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
		$headers .= "Content-Transfer-Encoding: 8bit\r\n";
		$headers .= "From: info@p-poster.com$SERVER_NAME\r\n"."Reply-To: info@p-poster.com\r\n"."X-Mailer: PHP/";

		mail("info@p-poster.com", $subject, $message, $headers.phpversion());

  		$this->redirect('/cart/orderok');

        }


     }

   }

}
