<?php
/**
 * @copyright Copyright (c) 2014
 */

namespace vitalik74\primer;


use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class ButtonsWidget
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/buttons
 */
class Buttons
{
    /**
     * Render button
     * @param string $content content to put between <button></button>
     * @param array $options html options in terms of name-value pairs
     * @see http://primercss.io/buttons/#default-buttons
     * @return string
     */
    public function button($content = '', $options = [])
    {
        return Html::tag('button', $content, ArrayHelper::merge(['class' => 'btn', 'type' => 'button'], $options));
    }

    /**
     * Render link button
     * @param string $content $content content to put between <a></a>
     * @param array|string|null $url route from link
     * @param array $options html options in terms of name-value pairs
     * @return string
     * @see http://primercss.io/buttons/#default-buttons
     */
    public function linkButton($content = '', $url = null, $options = [])
    {
        return Html::a($content, $url, ArrayHelper::merge(['class' => 'btn'], $options));
    }
}