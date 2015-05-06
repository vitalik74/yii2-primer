<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 06.05.2015 9:18
 */
use vitalik74\primer\Alerts;

?>
<div class="site-avatar">
    <?= Alerts::alert('simple alert', ['id' => 'simple_alert'], 'warm') ?>
    <?= Alerts::alert('simple alert2', ['id' => 'simple_alert2'], 'error') ?>
    <?= Alerts::alertWithIcon('simple alert icon', ['id' => 'simple_alert_icon']) ?>
    <?= Alerts::alertWithDismiss('simple alert dismiss', ['id' => 'simple_alert_dismiss'], 'warm') ?>
    <?= Alerts::alertWithDismiss('simple alert', ['id' => 'simple_alert_dismiss2'], 'error') ?>
</div>