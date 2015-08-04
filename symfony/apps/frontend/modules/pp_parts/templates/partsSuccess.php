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
<?php if (!isset($p)) {?>
<div id="items">
<div id="itemsInner">
	<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;Каталог</div>
	<div class="clear"></div>
</div>
</div>
<div id="catalog" style="position: relative; top: -50px;">
	<div id="catalogInner">
	<?php $i = 1;?>
	<?php if (sizeOf ($parts) > 0) {?><div class="parts"><?php foreach ($parts as $item) {?><div <?php if (($i!=3) && ($i!=6)) echo "class=\"part\""; ?>><a href="http://p-poster.com/parts/id/<?php echo $item->getId(); ?>/" title="<?php echo $item->getName(); ?>"><img src="/uploads/photos/<?php echo $item->getPhoto(); ?>" alt="<?php echo $item->getName(); ?>" /></a><span class="descr"><?php echo $item->getName(); ?></span></div><?php $i++; }?></div><?php }?>
	</div>
</div>
<?php }?>

<?php if (sizeOf ($pager) > 0) {?>
<div id="items">
<div id="itemsInner">
<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;<a href="/parts/" title="Каталог">Каталог</a><?php if ($part) {?>&nbsp;/&nbsp;<?php echo $part[0]->getName(); ?><?php }?></div>
<?php if (sizeOf ($pager) > 0) {?><div class="item"><?php foreach ($pager->getResults() as $item) {?>
<div class="itemP"><a href="/uploads/photos/posters/big/<?php echo $item->getPhotoB(); ?>" title="Фотопостер"><img src="/uploads/photos/posters/small/<?php echo $item->getPhotoS(); ?>" alt="" /></a><span class="descr"><?php echo $item->getName(); ?></span></div>
<div class="itemD"><div class="small"><strong>Параметры постера</strong></div>
<br /><br />
<div style="height: 220px;">
<div class="small">Размер: <strong>20 x 30</strong></div><br />
<div class="small">Размер с рамой: <strong><?php echo $item->getSize(); ?></strong></div><br />
<div class="small">Наличие на складе: <strong><?php if (isset($sklad)) echo "нет"; else echo "да"; ?></strong></div>
</div>
<div class="small">Цена: <strong><span class="price"><?php echo $item->getPrice(); ?></span></strong> руб.</div>
</div>
<div class="itemK">
<div class="small2">Ключевые слова</div>
<br /><br />
<div style="height: 220px;"><div class="small2"><?php echo $item->getDescription(); ?></div></div>
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
<div class="page"><a href="http://p-poster.com/parts/id/<?php echo $part[0]->getId(); ?>/<?php echo $id; ?>?page=<?php echo $page;?>" <?php if ($page == $pager->getPage()) { echo "id=\"active\""; }?>><?php echo $page; ?></a></div>
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