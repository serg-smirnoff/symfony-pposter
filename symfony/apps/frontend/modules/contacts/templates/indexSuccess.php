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
<div id="bc"><a href="http://p-poster.com" title="Главная">Главная</a>&nbsp;/&nbsp;Контакты</div>
	<div>
	<p>Часть наших <strong>фото постеров</strong> представлена в магазине Либра. <br />Адрес магазина: <span id="aSpan">г. Тула, пр. Ленина, 103-А</span></p>
	<p>
	<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту  (начало) -->
	<script src="http://api-maps.yandex.ru/1.1/?key=AOO8PEwBAAAACYdLeQIAwfB2eDYDpRjMUqd7zETGyZAHimwAAAAAAAAAAAByWsCbqm5PAVmW_5gXBZqUMwcB2g==&wizard=constructor" type="text/javascript"></script>
	<script type="text/javascript">
	    YMaps.jQuery(window).load(function () {
	        var map = new YMaps.Map(YMaps.jQuery("#YMapsID-223")[0]);
	        map.setCenter(new YMaps.GeoPoint(37.588877,54.168624), 16, YMaps.MapType.MAP);
	        map.addControl(new YMaps.Zoom());
	        map.addControl(new YMaps.ToolBar());
	        map.addControl(new YMaps.TypeControl());

	        YMaps.Styles.add("constructor#pmlbmPlacemark", {
	            iconStyle : {
	                href : "http://api-maps.yandex.ru/i/0.3/placemarks/pmlbm.png",
	                size : new YMaps.Point(28,29),
	                offset: new YMaps.Point(-8,-27)
	            }
	        });

	       map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(37.590207,54.167377), "constructor#pmlbmPlacemark", "Магазин \"Либра\""));

	        function createObject (type, point, style, description) {
	            var allowObjects = ["Placemark", "Polyline", "Polygon"],
	                index = YMaps.jQuery.inArray( type, allowObjects),
	                constructor = allowObjects[(index == -1) ? 0 : index];
	                description = description || "";

	            var object = new YMaps[constructor](point, {style: style, hasBalloon : !!description});
	            object.description = description;

	            return object;
	        }
	    });
	</script>
	<div id="YMapsID-223" style="width:450px;height:350px"></div>
	<div style="width:450px;text-align:right;font-family:Arial"><a href="http://api.yandex.ru/maps/tools/constructor/" style="color:#1A3DC1">Создано с помощью инструментов Яндекс.Карт</a></div>
	<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
	</p>
	<br />
	<p>По всем вопросам пишите на почтовый адрес <a href="maillto:info@p-poster.com" title="info@p-poster.com">info@p-poster.com</a></p>
	<p>Постеры доставляются по всей территории РФ почтой. Оплата осуществляется наложенным платежем, при получении посылки на почте. Стоимость пересылки входит в цену указанную на сайте.</p>
	</div>
	<br />
	<p>Аккаунты в социальных сетях</p>
	<table><tr>
	<td><div><a href="http://vkontakte.ru/club18588782" title="ВКонтакте" target="_blank"><img src="http://p-poster.com/images/social/vk.png" alt="ВКонтакте" /></a></div></td>
	<td><div><a href="http://twitter.com/p_poster_com" title="Twitter" target="_blank"><img src="http://p-poster.com/images/social/twitter.png" alt="Twitter" /></a></div></td>
	<td><div><a href="http://community.livejournal.com/pposter/" title="LiveJournal" target="_blank"><img src="http://p-poster.com/images/social/lj.jpg" alt="Livejournal" /></a></div></td>
	<td><div><a href="http://www.facebook.com/group.php?gid=140945432589492" title="Facebook" target="_blank"><img src="http://p-poster.com/images/social/fb.png" alt="Facebook" /></a></div></td>
	</tr></table>
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
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>