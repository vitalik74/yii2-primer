<?php
/**
 * Class FilterList
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 29.04.2015 9:05
 */

namespace vitalik74\primer;

/*
<ul class="filter-list">
  <li>
    <a href="#" class="filter-item selected">
      <span class="count">21</span>
      First filter
    </a>
  </li>
  <li>
    <a href="#" class="filter-item">
      <span class="count">3</span>
      Second filter
    </a>
  </li>
  <li>
    <a href="#" class="filter-item">
      Third filter
    </a>
  </li>
</ul>
*/
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class FilterList
 * @see http://primercss.io/nav/#filter-list
 */
class FilterList extends \yii\bootstrap\Nav
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
        $this->options = ArrayHelper::merge($this->options, ['class' => 'filter-list']);
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

        return Html::tag('ul', implode("\n", $items), $this->options);
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
        $items = ArrayHelper::getValue($item, 'items');
        $url = ArrayHelper::getValue($item, 'url', '#');
        $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);

        if (isset($item['active'])) {
            $active = ArrayHelper::remove($item, 'active', false);
        } else {
            $active = $this->isItemActive($item);
        }

        Html::addCssClass($linkOptions, 'filter-item');

        if ($this->activateItems && $active) {
            Html::addCssClass($linkOptions, 'selected');
        }

        return Html::tag('li', Html::a($label, $url, $linkOptions) . $items, $options);
    }
}