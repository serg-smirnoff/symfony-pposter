<div id="main">
<div id="top">
<div id="topInner">
<?php include_partial('default/logo0'); ?>
<?php include_partial('default/menu', array('menu' => $menu, 'parts' => $parts)); ?>

<div id="basket" alt="Корзина" title="Корзина"><img src="http://p-poster.com/images/i-cart.png" width="18" height="15" alt="Корзина" title="Корзина" />
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
  	В корзине <strong><?php echo $countPositions; ?></strong> постеров<br /> на сумму <strong><?php echo $totalPrice; ?></strong> руб.
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
	<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;<a href="http://p-poster.com/parts/" title="Каталог">Каталог</a>&nbsp;/&nbsp;<a href="http://p-poster.com/parts/id/<?php echo $item->getPartId(); ?>/" alt="<?php echo $partName; ?>"><?php echo $partName; ?></a>&nbsp;/&nbsp;<?php echo $item->getName(); ?></div>
	<div><a href="http://p-poster.com/parts/id/<?php echo $item->getPartId(); ?>/"><img src="http://p-poster.com/uploads/photos/posters/big/<?php echo $item->getPhotoB(); ?>" alt="" /></a><span class="descr"><?php echo $item->getName(); ?></span></div>
	<br /><br /><br /><br />
	<div>
		<div class="small">Размер: <strong>20 x 30</strong></div><br />
		<div class="small">Размер с рамой: <strong><?php echo $item->getSize(); ?></strong></div><br />
		<div class="small">Наличие на складе: <strong><?php if (isset($sklad)) echo "нет"; else echo "да"; ?></strong></div><br />
		<div class="small">Фотограф: <strong><?php echo $item->getAuthors(); ?></strong></div>
	</div>
	<br /><br />
	<div>
	<script type="text/javascript"><!--
	google_ad_client = "pub-9062153382342362";
	/* 728x90, создано 22.10.10 */
	google_ad_slot = "1345771366";
	google_ad_width = 728;
	google_ad_height = 90;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	</div>
	<div id="big"><?php echo $item->getDescription(); ?></div>
<!--
	<br /><br /><br />
	<div class="small">Цена: <strong><span class="price"><?php echo $item->getPrice(); ?></span></strong> руб.</div>
	<br /><br />
    <div><a href="http://p-poster.com/photos/cart/id/<?php echo $item->getId(); ?>/" title="Добавить в корзину"><img src="/images/b-addtocard.jpg" alt="Добавить в корзину" /></a></div>
-->
	</div>

	<div class="clear"></div>
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