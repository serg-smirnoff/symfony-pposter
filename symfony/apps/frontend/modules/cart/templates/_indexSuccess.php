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
<a href="http://p-poster.com/cart">В корзине <strong><?php echo $countPositions; ?></strong> постеров<br /> на сумму <strong><?php echo $totalPrice; ?></strong> руб.</a>
	<div id="basketOrder">
		<a style="text-decoration: none;" href="http://p-poster.com/cart/clear/" title="очистить корзину">[ x ] очистить</a><br />
		<strong id="order"><a href="http://p-poster.com/cart/order/" title="оформить заказ">оформить заказ</a></strong>
	</div>
	</div>
</div>
</div>
</div>
<div id="items">
<div id="itemsInner">
<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;Корзина</div>
<?php if (sizeOf ($items) > 0) {?><div class="item"><?php foreach ($items as $item) {?>
<div class="itemP"><a href="/uploads/photos/posters/big/<?php echo $item->getPhotoB(); ?>" title="Фотопостер" rel="lightbox"><img src="/uploads/photos/posters/small/<?php echo $item->getPhotoS(); ?>" alt="" /></a></div>
<div class="itemD">
<div style="height: 267px;"><a href="http://p-poster.com/photos/index/id/<?php echo $item->getId(); ?>" title="Параметры постера">Параметры постера</a></div>
<div class="small">Цена: <strong><span class="price"><?php echo $item->getPrice(); ?></span></strong> руб.</div>
</div>
<div class="itemK">
<div style="height: 267px;"></div>
<div><a href="http://p-poster.com/photos/cartdel/id/<?php echo $item->getId(); ?>/" title="Удалить из корзины"><img src="/images/b-delfromcard.jpg" width="126" height="26" alt="Удалить из корзины" /></a></div>
</div>
<?php }?>
</div>
<div class="clear"></div>
<br />
<?php } else {?>
<div>
<p>Если вы хотите купить один из наших фото постеров себе домой, перейдите в <strong><a href="http://p-poster.com/pp_parts" title="каталог">каталог</a></strong> и добавьте постер в корзину. Это делается простым нажатием на кнопку <strong>добавить в корзину</strong>, справа от фотографии постера.</p><p>Стоимости и колличество постеров суммируются и отображаются в блоке корзина справа в верху.  Нажатие на ссылку <strong><a href="http://p-poster.com/cart/order/" title="оформить заказ">оформить заказ</a></strong> позволяет перейти к форме-заявке, заполнение которой является финальным шагом оформления заказа.</p>
</div>
<?php }?>
<?php if (sizeOf ($items) > 0) {?><div style="padding-left: 603px;"><a href="http://p-poster.com/cart/order/" title="Оформить заказ"><img src="/images/b-ordercard.jpg" width="126" height="26" alt="Оформить заказ" /></a></div><?php }?>
</div>
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