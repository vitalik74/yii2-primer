<?php
/**
 * Class Tooltip
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 27.04.2015 9:46
 */

namespace vitalik74\primer;


use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class Tooltip
 * @package vitalik74\primer
 */
class Tooltip extends Object
{
    /**
     * @param $content
     * @param $tooltipContent
     * @param string $tooltipType
     * @param array $options
     * @return string
     * @see http://primercss.io/tooltips/
     */
    public static function tooltip($content, $tooltipContent, $tooltipType = 'n', $options = [])
    {
        return Html::tag('span', $content, ArrayHelper::merge($options, ['class' => 'tooltipped tooltipped-' . $tooltipType, 'aria-label' => $tooltipContent]));
    }

}