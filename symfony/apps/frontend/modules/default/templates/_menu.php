<div id="menu"><?php if (sizeOf ($menu) > 0) {?><div id="menuI"><?php foreach ($menu as $mitem) {?><a href="http://p-poster.com/<?php echo $mitem->getUrl(); ?>" title="<?php echo $mitem->getName(); ?>" class="punkt"><?php echo $mitem->getName(); ?></a>&nbsp;&nbsp;&nbsp;<?php }?></div><?php }?><div id="smenu"><?php foreach ($parts as $item) {?>&nbsp;&nbsp;<a href="http://p-poster.com/parts/id/<?php echo $item->getId(); ?>/" title="<?php echo $item->getName(); ?>" class="punkt"><?php echo $item->getName(); ?></a><?php }?></div></div>
