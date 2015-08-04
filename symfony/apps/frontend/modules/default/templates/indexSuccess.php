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
<div id="pics">
<div id="pics-1" class="picsI"><img src="images/pics/pic-1.jpg" width="879" height="335" alt="" /></div>
<div id="pics-2" class="picsI"><img src="images/pics/pic-2.jpg" width="879" height="335" alt="" /></div>
<div id="pics-3" class="picsI"><img src="images/pics/pic-3.jpg" width="879" height="335" alt="" /></div>
</div>
<div id="catalog" style="margin-top: 390px;">
<div id="catalogInner">
<?php $i = 1;?>
<?php if (sizeOf ($parts) > 0) {?><div class="parts"><?php foreach ($parts as $item) {?><div <?php if (($i!=3) && ($i!=6)) echo "class=\"part\""; ?>><a href="http://p-poster.com/parts/id/<?php echo $item->getId(); ?>/" title="<?php echo $item->getName(); ?>"><img src="http://p-poster.com/uploads/photos/<?php echo $item->getPhoto(); ?>" alt="<?php echo $item->getName(); ?>" /></a>
<a href="http://p-poster.com/parts/id/<?php echo $item->getId(); ?>/" title="<?php echo $item->getName(); ?>">
<span class="descr">
<?php
 $cc = new Criteria();
 $cc->add(PhotosPeer::PART_ID, $item->getID());
 $count = PhotosPeer::doSelect($cc);
 $count = sizeOf($count);
?>
<?php echo $item->getName(); ?> (<?php echo $count ?>)</span></a>
</div><?php $i++; }?></div><?php }?>
</div>
</div>
<div id="text">
<div>
<?php echo $text; ?>
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