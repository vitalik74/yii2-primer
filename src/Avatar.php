<?php

namespace vitalik74\primer;

use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Provide show avatar.
 *
 * Example use in your view:
 *
 * ```
 * <?php
 * use vitalik74\primer\Avatar;
 * ?>
 * <div class="site-avatar">
 * <?= Avatar::avatar('//avatar.jpg', ['width' => 30, 'height' => 80]) ?>
 * <?= Avatar::avatarSmall('//avatar.jpg', ['width' => 30, 'height' => 80]) ?>
 * <?= Avatar::avatarParent([
 *      'parent' => [
 *          'src' => '//avatar.jpg',
 *          'options' => [
 *              'width' => 30,
 *              'height' => 80,
 *              'id' => 'parent_avatar']
 *          ],
 *      'child' => [
 *          'src' => '//avatar2.jpg',
 *          'options' => [
 *              ['width' => 15, 'height' => 40]
 *          ]
 *      ]
 *  ], 'left') ?>
 * </div>
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see @see http://primercss.io/avatars/
 */
class Avatar extends Object
{
    /**
     * Return img Html-code with avatar
     * @param string $src path to avatar
     * @param array $options keys-values pair of options use in [[Html::tag()]]
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
     * @param string $src path to avatar
     * @param array $options keys-values pair of options use in [[Html::tag()]]
     * @return string
     * @see http://primercss.io/avatars/#small-avatars
     */
    public static function avatarSmall($src, $options = [])
    {
        return static::avatar($src, $options, 'avatar-small');
    }

    /**
     * Return img Html-code with avatar and child
     * @param array $options['parent' => ['src' => '...', 'options' => []], 'child' => ['src' => '...', 'options' => []]] input array with parent and child
     * @param string $positionChild position child. Possible values `right` or `left`
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