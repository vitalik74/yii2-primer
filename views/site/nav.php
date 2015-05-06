<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 28.04.2015 16:48
 */
use vitalik74\primer\Nav;

?>

<div class="site-nav">
    <?= Nav::widget([
        'items' => [
            ['label' => 'Account', 'url' => ['log/in'], 'active' => true],
            ['label' => 'Profile', 'url' => 'log/out']
        ]
    ]) ?>
</div>