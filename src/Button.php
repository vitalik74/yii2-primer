<?php

namespace vitalik74\primer;

use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Provide html code to show buttons.
 *
 * In class use trait [[vitalik74\primer\UtilsTrait]].
 *
 * Example use in your view:
 *
 * ```
 * <?php
 * use vitalik74\primer\Button;
 * ?>
 *
 * <div class="site-button">
 * <?= Button::button('simple button') ?>
 * <?= Button::button('primary button', 'primary', ['id' => 'primary_button']) ?>
 * <?= Button::button('smallPrimary button', 'smallPrimary', ['id' => 'smallPrimary_button']) ?>
 * <?= Button::button('small button', 'small', ['id' => 'small_button']) ?>
 * <?= Button::button('smallDanger button', 'smallDanger', ['id' => 'smallDanger_button']) ?>
 * <?= Button::button('danger button', 'danger', ['id' => 'danger_button']) ?>
 * </div>
 * ```
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/buttons
 */
class Button extends Object
{
    use UtilsTrait;

    /**
     * Possible value for types. Key-value pairs for convert to class
     * @var array
     */
    private static $_typeButtons = [
        'default' => 'btn',
        'primary' => 'btn btn-primary',
        'smallPrimary' => 'btn btn-sm btn-primary',
        'small' => 'btn btn-sm',
        'smallDanger' => 'btn btn-sm btn-danger',
        'danger' => 'btn btn-danger'
    ];

    /**
     * Render button
     *
     * ```
     * <?php
     * use vitalik74\primer\Button;
     * ?>
     *
     * <?= Button::button('simple button') ?>
     * ```
     *
     * @param string $content content to put between <button></button>
     * @param string $typeButton possible values @see $_typeButtons
     * @param array $options html options in terms of name-value pairs
     * @return string
     * @see http://primercss.io/buttons/#default-buttons
     */
    public static function button($content = '', $typeButton = 'default', $options = [])
    {
        return Html::tag('button', $content, ArrayHelper::merge($options, ['class' => static::getType($typeButton, static::$_typeButtons, 'default'), 'type' => 'button']));
    }

    /**
     * Render link button
     *
     * ```
     * <?php
     * use vitalik74\primer\Button;
     * ?>
     *
     * <?= Button::linkButton('simple button') ?>
     * ```
     *
     * @param string $content $content content to put between <a></a>
     * @param string $typeButton possible values 'default, primary, smallPrimary, small, smallDanger, danger'
     * @param array|string|null $url route from link
     * @param array $options html options in terms of name-value pairs
     * @return string
     * @see http://primercss.io/buttons/#default-buttons
     */
    public static function linkButton($content = '', $typeButton = 'default', $url = null, $options = [])
    {
        return Html::a($content, $url, ArrayHelper::merge($options, ['class' => static::getType($typeButton, static::$_typeButtons, 'default'), 'role' => 'button']));
    }
}