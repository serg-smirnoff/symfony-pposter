<?php if (sizeOf ($menu) > 0) {?><div id="fmenu"><?php foreach ($menu as $mitem) {?><a href="http://p-poster.com/<?php echo $mitem->getUrl(); ?>" title="<?php echo $mitem->getName(); ?>" class="fpunkt"><?php echo $mitem->getName(); ?></a> <?php if ($mitem->getId() != 5) {echo"&nbsp;&nbsp;|&nbsp;&nbsp;";}?><?php }?></div><?php }?>
