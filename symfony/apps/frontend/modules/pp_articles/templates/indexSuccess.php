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
<?php if (sizeOf ($pager) > 0) {?>
<div id="items">
<div id="itemsInner">
<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;Статьи</div>
<?php if ($pager->getLinks()) {?>
<div class="paginator">
<?php foreach ($pager->getLinks() as $page){ ?>
<div class="page"><a href="http://p-poster.com/articles/?page=<?php echo $page;?>" <?php if ($page == $pager->getPage()) { echo "id=\"active\""; }?>><?php echo $page; ?></a></div>
<?php }?>
</div>
<div class="clear"></div>
<?php }?>
<br /><br />
<?php if (sizeOf ($pager) > 0) {?><div class="item"><?php foreach ($pager->getResults() as $item) {?>
<div class="newsBlock">
<table>
	<tr>
		<td><?php echo format_date($item->getCreatedAt(), "MM.dd.yyyy"); ?></td>
		<td>&nbsp;&nbsp;</td>
		<td><a href="http://p-poster.com/articles/id/<?php echo $item->getId();?>" title="<?php echo $item->getTitle(); ?>"><?php echo $item->getTitle(); ?></a></td>
	</tr>
	<tr>
		<td></td>
		<td>&nbsp;&nbsp;</td>
		<td><?php echo $item->getAnnounce(); ?></td>
	</tr>
</table>
<br /><br />
</div>
<?php }?>
</div>
<div class="clear"></div>
<br />
<?php if ($pager->getLinks()) {?>
<div class="paginator">
<?php foreach ($pager->getLinks() as $page){ ?>
<div class="page"><a href="http://p-poster.com/articles/?page=<?php echo $page;?>" <?php if ($page == $pager->getPage()) { echo "id=\"active\""; }?>><?php echo $page; ?></a></div>
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