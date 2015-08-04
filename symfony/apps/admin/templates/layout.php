<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>
<div id="navigation">
<table>
<tr>
<td id="td0">
	<span class="menuPunktA"><a href="" title="">На главную</a></span>
</td>
<td id="td1" onload="position('sub2',this);" onmouseover="hmOn('sub2',this);" onmouseout="hmOff('sub2');">
	<span class="menuPunkt">Фотографии</span>
	<div class="sub" id="sub2" onmouseover="hmDivOn(this);" onmouseout="hmDivOff(this);" style="position: absolute;visibility: hidden;">
		<div class="sPunkt"><?php echo link_to('Разделы', 'pp_parts/index') ?></div>
		<div class="sPunkt"><?php echo link_to('Фотографии', 'pp_photos/index') ?></div>
		<div class="sPunkt"><?php echo link_to('Авторы', 'pp_authors/index') ?></div>
	</div>
</td>
<td id="td3" onload="position('sub3',this);" onmouseover="hmOn('sub3',this);" onmouseout="hmOff('sub3');">
	<span class="menuPunkt">Страницы</span>
	<div class="sub" id="sub3" onmouseover="hmDivOn(this);" onmouseout="hmDivOff(this);" style="position: absolute;visibility: hidden;">
		<div class="sPunkt"><?php echo link_to('Страницы', 'pp_pages/index') ?></div>
		<div class="sPunkt"><?php echo link_to('Статьи', 'pp_articles/index') ?></div>
		<div class="sPunkt"><?php echo link_to('Новости', 'pp_news/index') ?></div>
		<div class="sPunkt"><?php echo link_to('Вопросы', 'pp_faq/index') ?></div>
	</div>
</td>
<td id="td5" onload="position('sub5',this);" onmouseover="hmOn('sub5',this);" onmouseout="hmOff('sub5');">
	<span class="menuPunkt">Настройки</span>
	<div class="sub" id="sub5" onmouseover="hmDivOn(this);" onmouseout="hmDivOff(this);" style="position: absolute;visibility: hidden;">
		<div class="sPunkt"><?php echo link_to('Меню', 'pp_menu/index') ?></div>
		<div class="sPunkt"><?php echo link_to('Meta теги', 'pp_meta/index') ?></div>
		<div class="sPunkt"><?php echo link_to('Настройки', 'pp_config/index') ?></div>
	</div>
</td>
<td id="tdX">
	<span class="menuPunktA"><a href="/logout" title="Выход">Выход</a></span>
</td>
</tr>
</table>
</div>
<div id="content">
<?php echo $sf_content ?>
</div>
</body>
</html>