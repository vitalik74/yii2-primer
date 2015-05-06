<?php

namespace vitalik74\primer;

use yii\helpers\Html;

/**
 * Provide to active form in Yii2. Class based on [[\yii\bootstrap\Nav]] and override him.
 *
 * Example use in your view:
 *
 * ```
 * <?php
 * use vitalik74\primer\ActiveForm;
 * ?>
 *
 * <div class="site-state">
 * <? $form = ActiveForm::begin([]); ?>
 * <?= $form->field($model, 'username') ?>
 * <?= $form->field($model, 'password')->passwordInput() ?>
 * <?= $form->field($model, 'checkbox')->checkbox() ?>
 * <?= $form->field($model, 'checkboxList')->checkboxList([1, 2, 3]) ?>
 * <?= $form->field($model, 'select')->dropDownList([4, 5, 6]) ?>
 * <?= $form->field($model, 'radio')->radio() ?>
 * <?= $form->field($model, 'radioList')->radioList([7, 8, 9]) ?>
 * <?php ActiveForm::end() ?>
 * </div>
 * ```
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/forms/
 */
class ActiveField extends \yii\widgets\ActiveField
{
    /**
     * @inheritdoc
     */
    public $options = ['class' => 'form'];

    /**
     * @inheritdoc
     */
    public $inputOptions = ['class' => ''];

    /**
     * @inheritdoc
     */
    public function begin()
    {
        $result = parent::begin();

        return str_replace('<div', '<dl', $result);
    }

    /**
     * @inheritdoc
     */
    public function end()
    {
        $result = parent::end();

        return str_replace('</div', '</dl', $result);
    }

    /**
     * @inheritdoc
     */
    public function render($content = null)
    {
        if ($content === null) {
            if (!isset($this->parts['{input}'])) {
                $this->parts['{input}'] = Html::activeTextInput($this->model, $this->attribute, $this->inputOptions);
            }
            if (!isset($this->parts['{label}'])) {
                $this->parts['{label}'] = Html::activeLabel($this->model, $this->attribute, $this->labelOptions);
            }
            if (!isset($this->parts['{error}'])) {
                $this->parts['{error}'] = Html::error($this->model, $this->attribute, $this->errorOptions);
            }
            if (!isset($this->parts['{hint}'])) {
                $this->parts['{hint}'] = '';
            }

            $this->parts['{input}'] = Html::tag('dd', $this->parts['{input}']);
            $this->parts['{label}'] = Html::tag('dt', $this->parts['{label}']);

            $content = strtr($this->template, $this->parts);
        } elseif (!is_string($content)) {
            $content = call_user_func($content, $this);
        }

        return $this->begin() . "\n" . $content . "\n" . $this->end();
    }
}