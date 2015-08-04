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
  	<a href="http://p-poster.com/cart">В корзине <strong><?php echo $countPositions; ?></strong> постеров<br /> на сумму <strong><?php echo $totalPrice; ?></strong> руб.</a>
	<div id="basketOrder">
		<a style="text-decoration: none;" href="http://p-poster.com/cart/clear/" title="очистить корзину">[ x ] очистить</a><br />
		<strong id="order"><a href="http://p-poster.com/cart/order/" title="оформить заказ">оформить заказ</a></strong>
	</div>
	</div>
</div>
</div>
</div>
<?php if (sizeOf ($pager) > 0) {?>
<div id="items">
<div id="itemsInner">
<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;<a href="/parts/" title="Каталог">Каталог</a>&nbsp;/&nbsp;Новинки</div>
<div style="padding-bottom: 40px;">Раздел новинки содержит последние <strong>фото постеры</strong> из общего каталога.</div>
<?php if ($pager->getLinks()) {?>
<div class="paginator">
<?php foreach ($pager->getLinks() as $page){ ?>
<div class="page"><a href="http://p-poster.com/parts/new/?page=<?php echo $page;?>" <?php if ($page == $pager->getPage()) { echo "id=\"active\""; }?>><?php echo $page; ?></a></div>
<?php }?>
</div>
<div class="clear"></div>
<?php }?>
<br /><br />
<?php if (sizeOf ($pager) > 0) {?><div class="item"><?php foreach ($pager->getResults() as $item) {?>
<div class="itemP" id="bl<?php echo $item->getId(); ?>">
	<table>
		<tr>
			<td class="b0" id="b0<?php echo $item->getId(); ?>"><img src="http://p-poster.com/images/borders/b1/b1-0.jpg" width="23" height="23" alt="" /></td>
			<td class="b1" id="b1<?php echo $item->getId(); ?>"></td>
			<td class="b2" id="b2<?php echo $item->getId(); ?>"><img src="http://p-poster.com/images/borders/b1/b1-2.jpg" width="23" height="23" alt="" /></td>
		</tr>
		<tr>
			<td class="b3" id="b3<?php echo $item->getId(); ?>"></td>
			<td class="b4" id="b4<?php echo $item->getId(); ?>"><div id="paspartu<?php echo $item->getId(); ?>"><a href="/uploads/photos/posters/big/<?php echo $item->getPhotoB(); ?>" title="Фотопостер"><img src="/uploads/photos/posters/small/<?php echo $item->getPhotoS(); ?>" alt="" /></a></div></td>
			<td class="b5" id="b5<?php echo $item->getId(); ?>"></td>
		</tr>
		<tr>
			<td class="b6" id="b6<?php echo $item->getId(); ?>"><img src="http://p-poster.com/images/borders/b1/b1-6.jpg" width="23" height="23" alt="" /></td>
			<td class="b7" id="b7<?php echo $item->getId(); ?>"></td>
			<td class="b8" id="b8<?php echo $item->getId(); ?>"><img src="http://p-poster.com/images/borders/b1/b1-4.jpg" width="23" height="23" alt="" /></td>
		</tr>
	</table>
	<span class="descr"><?php echo $item->getName(); ?></span>
</div>
<div class="itemD"><div class="small"><strong><a href="http://p-poster.com/photos/id/<?php echo $item->getId(); ?>" title="Параметры постера">Параметры постера</a></strong></div>
<br /><br />
<div class="posterDesc">
<div class="small">
	<div class="fL"><span class="decor">Размер фото:&nbsp;</span></div>
	<div class="fL">

	<form name="fSize" id="fSize<?php echo $item->getId(); ?>" method="post">
		<input type="radio" name="size" value="10x15" onclick='size1(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);' checked="yes" /><strong class="srel">10x15</strong>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="size" value="15x20" onclick='size2(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);' /><strong class="srel">15x20</strong>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="size" value="20x30" onclick='size3(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);' /><strong class="srel">20x30</strong>
	</form>

	</div>
	<div class="clear"></div>
</div>
<br />
<div class="small">
	<div class="fL"><span class="decor">Рама:&nbsp;</span></div>
	<div class="fL">

	<form name="fBorder" id="fBorder<?php echo $item->getId(); ?>" method="post">
		<input id="bord0<?php echo $item->getId(); ?>" type="radio" name="border" value="Пластик" onclick='border1_0(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);' checked="yes" /><strong class="srel">Пластик</strong>&nbsp;&nbsp;&nbsp;&nbsp;
		<input id="bord1<?php echo $item->getId(); ?>" type="radio" name="border" value="Дерево" onclick='border1_1(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);' /><strong class="srel">Дерево</strong>
	</form>

	</div>
	<div class="clear"></div>
</div>
<br />

<div class="small">
	<div class="fL"><span class="decor">Паспарту:&nbsp;</span></div>
	<div class="fL">

	<form name="fPaspartu" id="fPaspartu<?php echo $item->getId(); ?>" method="post">
		<input id="radioY<?php echo $item->getId(); ?>" type="radio" name="paspartu" value="Есть" onclick='radioY(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);' /><strong class="srel">Есть</strong>&nbsp;&nbsp;&nbsp;&nbsp;
		<input id="radioN<?php echo $item->getId(); ?>" type="radio" name="paspartu" value="Нет" onclick='radioN(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);' checked="yes" /><strong class="srel">Нет</strong>
	</form>

</div>
<div class="clear">
</div></div>
<br />
<br />
<div class="small">Фотограф:&nbsp;<strong><?php echo $item->getAuthors(); ?></strong></div>
</div>
<div class="small">Цена:&nbsp;<strong><span class="price" id="price<?php echo $item->getId(); ?>"><script>startPrice(<?php echo $item->getId(); ?>,<?php echo $item->getPrice(); ?>);</script></span></strong> руб.</div>
</div>
<div class="itemK">
<div class="small2">&nbsp;</div>
<br /><br />
<div style="height: 220px;"><div class="small2"><a href="http://p-poster.com/photos/id/<?php echo $item->getId(); ?>" title="<?php echo $item->getDescription(); ?>"><?php echo $item->getDescription(); ?></a></div></div>
<div><a href="http://p-poster.com/photos/cart/id/<?php echo $item->getId(); ?>/" title="Добавить в корзину"><img src="/images/b-addtocard.jpg" alt="Добавить в корзину" /></a></div>
</div>
<div class="clear"></div>
<?php }?>
</div>
<div class="clear"></div>
<br />
<?php if ($pager->getLinks()) {?>
<div class="paginator">
<?php foreach ($pager->getLinks() as $page){ ?>
<div class="page"><a href="http://p-poster.com/parts/new/?page=<?php echo $page;?>" <?php if ($page == $pager->getPage()) { echo "id=\"active\""; }?>><?php echo $page; ?></a></div>
<?php }?>
</div>
<?php }?>
<?php }?>
</div>
</div>
<?php }?>
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