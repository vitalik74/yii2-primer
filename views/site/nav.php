<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 28.04.2015 16:48
 */
?>

<div class="site-nav">
    <?= \vitalik74\primer\Nav::widget([
        'items' => [
            ['label' => 'Account', 'url' => ['log/in'], 'active' => true],
            ['label' => 'Profile', 'url' => 'log/out']
        ]
    ]) ?>
</div>