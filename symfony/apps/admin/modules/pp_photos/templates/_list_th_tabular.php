  <th id="sf_admin_list_th_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'id'): ?>
      <?php echo link_to(__('Id'), 'pp_photos/list?sort=id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Id'), 'pp_photos/list?sort=id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_part_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'part_id'): ?>
      <?php echo link_to(__('Категория'), 'pp_photos/list?sort=part_id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Категория'), 'pp_photos/list?sort=part_id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_author_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'author_id'): ?>
      <?php echo link_to(__('Фотограф'), 'pp_photos/list?sort=author_id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Фотограф'), 'pp_photos/list?sort=author_id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_ord">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'ord'): ?>
      <?php echo link_to(__('Сорт.'), 'pp_photos/list?sort=ord&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Сорт.'), 'pp_photos/list?sort=ord&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_photo_s">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'photo_s'): ?>
      <?php echo link_to(__('Фотография мал.'), 'pp_photos/list?sort=photo_s&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Фотография мал.'), 'pp_photos/list?sort=photo_s&type=asc') ?>
      <?php endif; ?>
        <?php echo image_tag(sfConfig::get('sf_admin_web_dir').'/images/help.png', array('align' => 'absmiddle', 'alt' => __('фотография 216 х 298'), 'title' => __('фотография 216 х 298'))) ?>  </th>
  <th id="sf_admin_list_th_size">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'size'): ?>
      <?php echo link_to(__('Размер'), 'pp_photos/list?sort=size&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Размер'), 'pp_photos/list?sort=size&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_price">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'price'): ?>
      <?php echo link_to(__('Цена'), 'pp_photos/list?sort=price&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Цена'), 'pp_photos/list?sort=price&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_name">
        <?php echo __('Наименование.') ?>
          </th>
  <th id="sf_admin_list_th_is_active">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'is_active'): ?>
      <?php echo link_to(__('Акт.'), 'pp_photos/list?sort=is_active&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Акт.'), 'pp_photos/list?sort=is_active&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_is_spec">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'is_spec'): ?>
      <?php echo link_to(__('Спецпредложение'), 'pp_photos/list?sort=is_spec&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Спецпредложение'), 'pp_photos/list?sort=is_spec&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_is_new">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'is_new'): ?>
      <?php echo link_to(__('Новинка'), 'pp_photos/list?sort=is_new&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Новинка'), 'pp_photos/list?sort=is_new&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_created_at">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/photos/sort') == 'created_at'): ?>
      <?php echo link_to(__('Дата'), 'pp_photos/list?sort=created_at&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/photos/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Дата'), 'pp_photos/list?sort=created_at&type=asc') ?>
      <?php endif; ?>
          </th>
