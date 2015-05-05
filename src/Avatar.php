<?php
/**
 * Class Avatar
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 24.04.2015 11:33
 */

namespace vitalik74\primer;


use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class Avatar
 * @see @see http://primercss.io/avatars/
 */
class Avatar extends Object
{
    /**
     * Return img Html-code with avatar
     * @param $src
     * @param array $options
     * @param string $type possible values 'avatar-small' or ''
     * @return string
     * @see http://primercss.io/avatars/#basic-example
     */
    public static function avatar($src, $options = [], $type = '')
    {
        return Html::img($src, ArrayHelper::merge($options, ['class' => 'avatar ' . $type]));
    }

    /**
     * Return img Html-code with avatar small
     * @param $src
     * @param array $options
     * @return string
     * @see http://primercss.io/avatars/#small-avatars
     */
    public static function avatarSmall($src, $options = [])
    {
        return static::avatar($src, $options, 'avatar-small');
    }

    /**
     * Return img Html-code with avatar and child
     * @param $options['parent' => ['src' => '...', 'options' => []], 'child' => ['src' => '...', 'options' => []]]
     * @param string $positionChild
     * @return string
     * @see http://primercss.io/avatars/#parent-child-avatars
     */
    public static function avatarParent($options, $positionChild = 'left')
    {
        $content = static::avatar($options['parent']['src'], $options['parent']['options'])
            . static::avatar($options['child']['src'], $options['child']['options'], 'avatar-child');

        return Html::tag('div', $content, ['class' => 'avatar-parent-child ' . $positionChild]);
    }
}