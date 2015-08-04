      <td><?php echo link_to($photos->getId() ? $photos->getId() : __('-'), 'pp_photos/edit?id='.$photos->getId()) ?></td>
      <td><?php echo $photos->getPartId() ?></td>
      <td><?php echo $photos->getAuthorId() ?></td>
      <td><?php echo $photos->getOrd() ?></td>
      <td><img src="http://p-poster.com/uploads/photos/posters/small/<?php echo $photos->getPhotoS() ?>" alt="" /></td>
      <td><?php echo $photos->getSize() ?></td>
      <td><?php echo $photos->getPrice() ?></td>
      <td><?php echo $photos->getName() ?></td>
      <td><?php echo $photos->getIsNew() ? image_tag(sfConfig::get('sf_admin_web_dir').'/images/tick.png') : '&nbsp;' ?></td>
      <td><?php echo $photos->getIsSpec() ? image_tag(sfConfig::get('sf_admin_web_dir').'/images/tick.png') : '&nbsp;' ?></td>
      <td><?php echo $photos->getIsActive() ? image_tag(sfConfig::get('sf_admin_web_dir').'/images/tick.png') : '&nbsp;' ?></td>
      <td><?php echo ($photos->getCreatedAt() !== null && $photos->getCreatedAt() !== '') ? format_date($photos->getCreatedAt(), "f") : '' ?></td>
