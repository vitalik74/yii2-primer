<?php

namespace vitalik74\primer;

use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Provide html-code with tooltip.
 *
 * ```
 * <?php
 * use vitalik74\primer\Tooltip;
 * ?>
 * <div class="site-tooltip">
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip') ?>
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'ne') ?>
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'e') ?>
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'se') ?>
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 's') ?>
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'sw') ?>
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'w') ?>
 * <?= Tooltip::tooltip('simple tooltip', 'simple tooltip', 'nw') ?>
 * </div>
 * ```
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/tooltips/
 */
class Tooltip extends Object
{
    /**
     * Return html code tooltip
     *
     * @param string $content content to include in container
     * @param string $tooltipContent content to include in container
     * @param string $tooltipType type tooltip @see http://primercss.io/tooltips/
     * @param array $options keys-values pair of options use in [[Html::tag()]]
     * @return string
     * @see http://primercss.io/tooltips/
     */
    public static function tooltip($content, $tooltipContent, $tooltipType = 'n', $options = [])
    {
        return Html::tag('span', $content, ArrayHelper::merge($options, ['class' => 'tooltipped tooltipped-' . $tooltipType, 'aria-label' => $tooltipContent]));
    }
}