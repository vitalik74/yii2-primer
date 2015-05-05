<?php
/**
 * Class Alerts
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 05.05.2015 17:53
 */

namespace vitalik74\primer;


use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class Alerts
 * @package vitalik74\primer
 * @see http://primercss.io/alerts/
 */
class Alerts extends Object
{
    private static $_types = [
        'warm' => 'flash-warn',
        'error' => 'flash-warn',//synonym 'warm'
        'icon' => 'flash-with-icon'
    ];
    /**
     * @param $content
     * @param array $options
     * @param string $type
     * @return string
     */
    public static function alert($content, $options = [], $type = '')
    {
        return Html::tag('div', $content, ArrayHelper::merge($options, ['class' => 'flash ' . $type]));
    }

    /**
     * @param $content
     * @param array $options
     * @param string $type
     * @param string $contentIcon
     * @return string
     */
    public static function alertWithIcon($content, $options = [], $type = '', $contentIcon = '')
    {
        if (empty($contentIcon)) {
            $contentIcon = '<span class="octicon octicon-alert"></span>';
        }

        return static::alert($contentIcon . $content, $options, 'icon');
    }

    /**
     * @param $content
     * @param array $options
     * @param string $type
     * @return string
     */
    public static function alertWithDismiss($content, $options = [], $type = '')
    {
        $dismissContent = '<span class="octicon octicon-x flash-close js-flash-close"></span>';

        return static::alert($dismissContent . $content, $options, $type);
    }
}