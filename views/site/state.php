<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 24.04.2015 10:28
 */
use vitalik74\primer\State;

?>

<div class="site-state">
    <?= State::open('open', '', ['id' => 'open']) ?>
    <?= State::open('proposed', 'proposed', ['id' => 'proposed']) ?>
    <?= State::open('reopened', 'reopened', ['id' => 'reopened']) ?>
    <?= State::closed('closed', ['id' => 'closed']) ?>
    <?= State::merged('merged', ['id' => 'merged']) ?>
</div>