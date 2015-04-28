<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 28.04.2015 10:47
 */
use vitalik74\primer\Tooltip;

?>
<br/><br/><br/>
<div class="site-tooltip">
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip') ?>
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'ne') ?>
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'e') ?>
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'se') ?>
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 's') ?>
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'sw') ?>
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'w') ?>
    <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'nw') ?>
</div>