<?php

namespace vitalik74\primer;

use yii\helpers\Html;

/**
 * Class ActiveField
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