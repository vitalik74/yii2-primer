<?php
/**
 * @copyright Copyright (c) 2014
 */

namespace vitalik74\primer;


use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class ButtonsWidget
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/buttons
 */
class Button extends Object
{
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
     * @param string $content content to put between <button></button>
     * @param string $typeButton possible values @see $_typeButtons
     * @param array $options html options in terms of name-value pairs
     * @return string
     * @see http://primercss.io/buttons/#default-buttons
     */
    public static function button($content = '', $typeButton = 'default', $options = [])
    {
        return Html::tag('button', $content, ArrayHelper::merge($options, ['class' => static::getTypeButtonClass($typeButton), 'type' => 'button']));
    }

    /**
     * Render link button
     * @param string $content $content content to put between <a></a>
     * @param string $typeButton possible values 'default, primary, smallPrimary, small, smallDanger, danger'
     * @param array|string|null $url route from link
     * @param array $options html options in terms of name-value pairs
     * @return string
     * @see http://primercss.io/buttons/#default-buttons
     */
    public static function linkButton($content = '', $typeButton = 'default', $url = null, $options = [])
    {
        return Html::a($content, $url, ArrayHelper::merge($options, ['class' => static::getTypeButtonClass($typeButton), 'role' => 'button']));
    }

    /**
     * Provide css class from type button
     * @param $typeButton
     * @return mixed
     */
    private static function getTypeButtonClass($typeButton)
    {
        return static::$_typeButtons[$typeButton] ?: static::$_typeButtons['default'];
    }
}