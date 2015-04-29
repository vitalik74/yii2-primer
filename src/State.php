<?php
/**
 * Class State
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 24.04.2015 10:19
 */

namespace vitalik74\primer;


use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class State extends Object
{
    private static $_stateClass = 'state ';

    /**
     * @param $content
     * @param string $type
     * @param array $options
     * @return string
     * @see http://primercss.io/states/#open-green
     */
    public static function open($content, $type = 'open', $options = [])
    {
        if (empty($type)) {
            $type = 'open';
        }

        return Html::tag('span', $content, ArrayHelper::merge($options, ['class' => static::$_stateClass . 'state-' . $type]));
    }

    /**
     * @param $content
     * @param array $options
     * @return string
     * @see http://primercss.io/states/#closed-red
     */
    public static function closed($content, $options = [])
    {
        return Html::tag('span', $content, ArrayHelper::merge($options, ['class' => static::$_stateClass . 'state-closed']));
    }

    /**
     * @param $content
     * @param array $options
     * @return string
     * @see http://primercss.io/states/#merged-purple
     */
    public static function merged($content, $options = [])
    {
        return Html::tag('span', $content, ArrayHelper::merge($options, ['class' => static::$_stateClass . 'state-merged']));
    }
}