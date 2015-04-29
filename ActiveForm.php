<?php
/**
 * Class ActiveForm
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 29.04.2015 9:24
 */

namespace vitalik74\primer;


class ActiveForm extends \yii\widgets\ActiveForm
{
    public $fieldClass = 'vitalik74\primer\ActiveField';
}