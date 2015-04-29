<?php
/**
 * Class ${NAME}
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 29.04.2015 9:27
 */
use vitalik74\primer\ActiveForm;

?>

<div class="site-state">
    <? $form = ActiveForm::begin([]); ?>

    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'checkbox')->checkbox() ?>
    <?= $form->field($model, 'checkboxList')->checkboxList([1, 2, 3]) ?>
    <?= $form->field($model, 'select')->dropDownList([4, 5, 6]) ?>
    <?= $form->field($model, 'radio')->radio() ?>
    <?= $form->field($model, 'radioList')->radioList([7, 8, 9]) ?>

    <?php ActiveForm::end() ?>
</div>