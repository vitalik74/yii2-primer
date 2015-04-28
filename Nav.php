<?php
/**
 * Class Nav
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 28.04.2015 16:36
 */

namespace vitalik74\primer;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

//@todo add <span class="menu-heading">Menu heading</span>
/**
 * Class Nav
 * @see http://primercss.io/nav/
 */
class Nav extends \yii\bootstrap\Nav
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        return $this->renderItems();
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->options = ArrayHelper::merge($this->options, ['class' => 'menu']);
    }

    /**
     * @inheritdoc
     */
    public function renderItems()
    {
        $items = [];
        foreach ($this->items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                continue;
            }
            $items[] = $this->renderItem($item);
        }

        return Html::tag('nav', implode("\n", $items), $this->options);
    }

    /**
     * @inheritdoc
     */
    public function renderItem($item)
    {
        if (is_string($item)) {
            return $item;
        }
        if (!isset($item['label'])) {
            throw new InvalidConfigException("The 'label' option is required.");
        }
        $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
        $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
        $options = ArrayHelper::getValue($item, 'options', []);
        $url = ArrayHelper::getValue($item, 'url', '#');
        $linkOptions = ArrayHelper::getValue($item, 'linkOptions', ['class' => 'menu-item']);

        if (isset($item['active'])) {
            $active = ArrayHelper::remove($item, 'active', false);
        } else {
            $active = $this->isItemActive($item);
        }

        if ($this->activateItems && $active) {
            Html::addCssClass($linkOptions, 'selected');
        }

        return Html::a($label, $url, $linkOptions);
    }
}