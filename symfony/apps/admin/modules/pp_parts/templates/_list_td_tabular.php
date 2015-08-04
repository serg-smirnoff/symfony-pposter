    <td><?php echo link_to($parts->getId() ? $parts->getId() : __('-'), 'pp_parts/edit?id='.$parts->getId()) ?></td>
    <td><?php echo $parts->getOrd() ?></td>
      <td><?php echo $parts->getName() ?></td>
      <td><?php echo $parts->getDescription() ?></td>
      <td><img src="http://p-poster.com/uploads/photos/<?php echo $parts->getPhoto() ?>" alt="" /></td>
      <td><?php echo $parts->getIsActive() ? image_tag(sfConfig::get('sf_admin_web_dir').'/images/tick.png') : '&nbsp;' ?></td>
      <td><?php echo ($parts->getCreatedAt() !== null && $parts->getCreatedAt() !== '') ? format_date($parts->getCreatedAt(), "f") : '' ?></td>
