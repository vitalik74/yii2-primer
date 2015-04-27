<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 24.04.2015 15:54
 */
use vitalik74\primer\Avatar;

?>

<div class="site-avatar">
    <?= Avatar::avatar('//avatar.jpg', ['width' => 30, 'height' => 80]) ?>
    <?= Avatar::avatarSmall('//avatar.jpg', ['width' => 30, 'height' => 80]) ?>
    <?= Avatar::avatarParent(['parent' => ['src' => '//avatar.jpg', 'options' => ['width' => 30, 'height' => 80, 'id' => 'parent_avatar']], 'child' => ['src' => '//avatar2.jpg', 'options' => [['width' => 15, 'height' => 40]]]], 'left') ?>
</div>