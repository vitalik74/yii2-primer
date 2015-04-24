<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 23.04.2015 17:05
 */
use vitalik74\primer\Button;

?>

<div class="site-button">
    <?= Button::button('simple button') ?>
    <?= Button::button('primary button', 'primary', ['id' => 'primary_button']) ?>
    <?= Button::button('smallPrimary button', 'smallPrimary', ['id' => 'smallPrimary_button']) ?>
    <?= Button::button('small button', 'small', ['id' => 'small_button']) ?>
    <?= Button::button('smallDanger button', 'smallDanger', ['id' => 'smallDanger_button']) ?>
    <?= Button::button('danger button', 'danger', ['id' => 'danger_button']) ?>
</div>
