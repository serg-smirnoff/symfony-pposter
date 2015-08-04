<div id="main">
<div id="top">
<div id="topInner">
<?php include_partial('default/logo0'); ?>
<?php include_partial('default/menu', array('menu' => $menu, 'parts' => $parts)); ?>

<div id="basket" alt="Корзина" title="Корзина"><img src="/images/i-cart.png" width="18" height="15" alt="Корзина" title="Корзина" />
    <div id="basketInner">
	<?php
	if (isset($_COOKIE["sfCart"])){
		$positions = explode(":", $_COOKIE["sfCart"]);
   		$countPositions = sizeOf($positions);
    }
	$totalPrice = 0;
	foreach ($positions as $k => $v){
   		$posC = new Criteria();
		$posC->add(PhotosPeer::ID, $v);
   		$photo = PhotosPeer::doSelect($posC);
        if (sizeOf($photo) > 0)
          	$totalPrice = $totalPrice+$photo[0]->getPrice();
 		}
  	?>
		<a href="http://p-poster.com/cart">В корзине <strong><?php echo $countPositions; ?></strong> постеров<br /> на сумму <strong><?php echo $totalPrice; ?></strong> руб.</a>	<div id="basketOrder">
		<a style="text-decoration: none;" href="http://p-poster.com/cart/clear/" title="очистить корзину">[ x ] очистить</a><br />
		<strong id="order"><a href="http://p-poster.com/cart/order/" title="оформить заказ">оформить заказ</a></strong>
	</div>
	</div>
</div>
</div>
</div>
<div id="items">
<div id="itemsInner">
<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;<a href="/cart" title="Корзина">Корзина</a>&nbsp;/&nbsp;Оформление заказа</div>

<?php if (isset($_COOKIE["sfCart"])){?>
<div style="padding-bottom: 40px;">У вас <a href="http://p-poster.com/cart" title="в корзине">в корзине</a> <strong><?php echo $countPositions; ?></strong> постеров на сумму <strong><?php echo $totalPrice; ?></strong> рублей. Заполните форму для завершения заказа. Все поля обязательны к заполнению.</div>

<div class="fValid"><?php echo $message; ?></div>

<form method="post" enctype="multipart/form-data" action="http://p-poster.com/cart/order/">
<input type="hidden" name="param0" value="<?php echo $_COOKIE["sfCart"]; ?>" />
<table id="order">
<tr>
	<td class="inputText">Фамилия</td>
	<td class="inputData"><input type="text" name="param1" value="<?php echo $param1; ?>" /></td>
</tr>
<tr>
	<td class="inputText">Имя</td>
	<td class="inputData"><input type="text" name="param2" value="<?php echo $param2; ?>" /></td>
</tr>
<tr>
	<td class="inputText">Отчество</td>
	<td class="inputData"><input type="text" name="param3" value="<?php echo $param3; ?>" /></td>
</tr>
<tr>
	<td class="inputText"><br /><br /></td>
	<td class="inputData"></td>
</tr>
<tr>
	<td class="inputText">Индекс</td>
	<td class="inputData"><input type="text" name="param4" value="<?php echo $param4; ?>" /></td>
</tr>
<tr>
	<td class="inputText">Страна</td>
	<td class="inputData"><input type="text" name="param5" value="Россия" disabled="disabled" /></td>
</tr>
<tr>
	<td class="inputText">Область</td>
	<td class="inputData"><input type="text" name="param6" value="<?php echo $param6; ?>"/></td>
</tr>
<tr>
	<td class="inputText">Город</td>
	<td class="inputData"><input type="text" name="param7" value="<?php echo $param7; ?>" /></td>
</tr>
<tr>
	<td class="inputText">Улица</td>
	<td class="inputData"><input type="text" name="param8" value="<?php echo $param8; ?>" /></td>
</tr>
<tr>
	<td class="inputText">Дом</td>
	<td class="inputData"><input type="text" name="param9" value="<?php echo $param9; ?>" /></td>
</tr>
<tr>
	<td class="inputText">Корпус</td>
	<td class="inputData"><input type="text" name="param10" value="<?php echo $param10; ?>" /></td>
</tr>
<tr>
	<td class="inputText">Квартира</td>
	<td class="inputData"><input type="text" name="param11" value="<?php echo $param11; ?>" /></td>
</tr>
<tr>
	<td class="inputText"><br /><br /></td>
	<td class="inputData"></td>
</tr>
<tr>
	<td class="inputText">Контактный телефон</td>
	<td class="inputData"><input type="text" name="param12" value="<?php echo $param12; ?>" /></td>
</tr>
<tr>
	<td colspan="2" class="inputSubmit"><input type="submit" name="submit" value="Оформить заказ" /></div></td>
</tr>
</table>
</form>
<?php } else {?>
<div style="padding-bottom: 40px;">Ваша корзина пуста.</div>

<?php }?>
</div>
</div>
<?php include_partial('default/bmenu0'); ?>
<div id="footer">
<div id="footerInner">
<div id="footerInner2">
<?php include_partial('default/bmenu1', array('menu' => $menu)); ?>
<?php include_partial('default/copy'); ?>
</div>
<div id="counters"><?php include_partial('default/counters'); ?></div>
<div id="flogo"><?php include_partial('default/logo1'); ?></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>