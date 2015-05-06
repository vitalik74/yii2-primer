<?php

namespace vitalik74\primer;

use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Provide html-code to state indicators.
 *
 * Example use in your view:
 * ```
 * <?php
 * use vitalik74\primer\State;
 * ?>
 *
 * <div class="site-state">
 * <?= State::open('open', '', ['id' => 'open']) ?>
 * <?= State::open('proposed', 'proposed', ['id' => 'proposed']) ?>
 * <?= State::open('reopened', 'reopened', ['id' => 'reopened']) ?>
 * <?= State::closed('closed', ['id' => 'closed']) ?>
 * <?= State::merged('merged', ['id' => 'merged']) ?>
 * </div>
 * ```
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/states/
 */
class State extends Object
{
    /**
     * Default html-class of state
     * @var string
     */
    private static $_stateClass = 'state ';

    /**
     * Return html-code with state indicator
     *
     * ```
     * <?php
     * use vitalik74\primer\State;
     * ?>
     *
     * <?= State::open('open', '', ['id' => 'open']) ?>
     * ```
     *
     * @param string $content content to include in container
     * @param string $type type indicator. Possible type open, closed, merged
     * @param array $options keys-values pair of options use in [[Html::tag()]]
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
     * Synonim of [[open()]]. This is syntactic sugar.
     *
     * ```
     * <?php
     * use vitalik74\primer\State;
     * ?>
     *
     * <?= State::closed('closed', ['id' => 'closed']) ?>
     * ```
     *
     * @param string $content
     * @param array $options
     * @return string
     * @see http://primercss.io/states/#closed-red
     */
    public static function closed($content, $options = [])
    {
        return static::open($content, 'closed', $options);
    }

    /**
     * Synonim of [[open()]]. This is syntactic sugar.
     *
     * ```
     * <?php
     * use vitalik74\primer\State;
     * ?>
     *
     * <?= State::merged('merged', ['id' => 'merged']) ?>
     * ```
     *
     * @param string $content
     * @param array $options
     * @return string
     * @see http://primercss.io/states/#merged-purple
     */
    public static function merged($content, $options = [])
    {
        return static::open($content, 'merged', $options);
    }
}