<?php

namespace vitalik74\primer;

use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class provide simple interface for show alert.
 *
 * In class use trait [[vitalik74\primer\UtilsTrait]].
 *
 * Example use in your view:
 *
 * ```
 * <?php
 * use vitalik74\primer\Alerts;
 * ?>
 *
 * <div class="site-avatar">
 * <?= Alerts::alert('simple alert', ['id' => 'simple_alert'], 'warm') ?>
 * <?= Alerts::alert('simple alert2', ['id' => 'simple_alert2'], 'error') ?>
 * <?= Alerts::alertWithIcon('simple alert icon', ['id' => 'simple_alert_icon']) ?>
 * <?= Alerts::alertWithDismiss('simple alert dismiss', ['id' => 'simple_alert_dismiss'], 'warm') ?>
 * <?= Alerts::alertWithDismiss('simple alert', ['id' => 'simple_alert_dismiss2'], 'error') ?>
 * </div>
 * ```
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/alerts/
 */
class Alerts extends Object
{
    use UtilsTrait;

    /**
     * Key-values pairs to show special class
     * @var array
     */
    private static $_types = [
        'warm' => 'flash-warn',
        'error' => 'flash-warn',// synonym 'warm'
        'icon' => 'flash-with-icon'
    ];

    /**
     * Return html code with alert
     *
     * ```
     * <?php
     * use vitalik74\primer\Alerts;
     * ?>
     *
     * <?= Alerts::alert('simple alert', ['id' => 'simple_alert'], 'warm') ?>
     * ```
     *
     * @param string $content content to include in container
     * @param array $options keys-values pair of options use in [[Html::tag()]]
     * @param string $type type of special class. Possible values: warm, error, icon. Note: warm and error is a synonym
     * @return string
     * @see http://primercss.io/alerts/#default
     */
    public static function alert($content, $options = [], $type = '')
    {
        return Html::tag('div', $content, ArrayHelper::merge($options, ['class' => 'flash ' . static::getType($type, static::$_types)]));
    }

    /**
     * Return html code with alert with icon
     *
     * ```
     * <?php
     * use vitalik74\primer\Alerts;
     * ?>
     *
     * <?= Alerts::alertWithIcon('simple alert icon', ['id' => 'simple_alert_icon']) ?>
     * ```
     *
     * @param string $content content to include in container
     * @param array $options keys-values pair of options use in [[Html::tag()]]
     * @param string $contentIcon content container
     * @return string
     * @see http://primercss.io/alerts/#with-icon
     */
    public static function alertWithIcon($content, $options = [], $contentIcon = '')
    {
        if (empty($contentIcon)) {
            $contentIcon = '<span class="octicon octicon-alert"></span>';
        }

        return static::alert($contentIcon . $content, $options, 'icon');
    }

    /**
     * Return html code with alert with dismiss
     *
     * ```
     * <?php
     * use vitalik74\primer\Alerts;
     * ?>
     *
     * <?= Alerts::alertWithDismiss('simple alert', ['id' => 'simple_alert_dismiss2'], 'error') ?>
     * ```
     *
     * @param string $content content to include in container
     * @param array $options keys-values pair of options use in [[Html::tag()]]
     * @param string $type type of special class. Possible values: warm, error, icon. Note: warm and error is a synonym
     * @return string
     * @see http://primercss.io/alerts/#dismiss
     */
    public static function alertWithDismiss($content, $options = [], $type = '')
    {
        $dismissContent = '<span class="octicon octicon-x flash-close js-flash-close"></span>';

        return static::alert($dismissContent . $content, $options, $type);
    }
}