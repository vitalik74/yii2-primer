<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 29.04.2015 9:08
 */
use vitalik74\primer\FilterList;

?>
<div class="site-state">
    <?= FilterList::widget([
        'items' => [
            ['label' => 'Account', 'url' => ['log/in'], 'active' => true],
            ['label' => 'Profile', 'url' => 'log/out']
        ]
    ]) ?>
</div>