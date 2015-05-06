<?php

namespace vitalik74\primer;

use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class provide simple interface for show container with class `blankslate`.
 *
 * In class use trait [[vitalik74\primer\UtilsTrait]].
 *
 * Example use in your view:
 * ```
 * <?php
 * use vitalik74\primer\Blankslate;
 * ?>
 * <div class="site-blankslate">
 * <?= Blankslate::blankslate('Text', ['id' => 'blankslate']) ?>
 * <?= Blankslate::blankslate('Text', ['id' => 'spacious'], 'spacious') ?>
 * <?= Blankslate::blankslate('Text', ['id' => 'clean'], 'clean') ?>
 * <?= Blankslate::blankslate('Text', ['id' => 'capped'], 'capped') ?>
 * <?= Blankslate::blankslate('Text', ['id' => 'fixed'], 'fixed') ?>
 * <?= Blankslate::blankslate('Text', ['id' => 'no_set'], 'no_set') ?>
 * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons']) ?>
 * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_commit'], ['commit']) ?>
 * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_branch'], ['branch']) ?>
 * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_tag'], ['tag']) ?>
 * </div>
 * ```
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * @see http://primercss.io/blankslate/
 */
class Blankslate extends Object
{
    use UtilsTrait;

    /**
     * Types of additional optional
     * @var array
     */
    private static $_typesBlankslate = [
        'spacious' => 'spacious',
        'clean' => 'clean-background',
        'capped' => 'capped',
        'fixed' => 'has-fixed-width'
    ];

    /**
     * Types of Octicon
     * @var array
     */
    private static $_typesOcticon = [
        'commit' => 'git-commit',
        'tag' => 'tag',
        'branch' => 'git-branch'
    ];

    /**
     * Return Html-code
     *
     * ```
     * <?php
     * use vitalik74\primer\Blankslate;
     * ?>
     *
     * <?= Blankslate::blankslate('Text', ['id' => 'blankslate']) ?>
     * <?= Blankslate::blankslate('Text', ['id' => 'spacious'], 'spacious') ?>
     * <?= Blankslate::blankslate('Text', ['id' => 'clean'], 'clean') ?>
     * <?= Blankslate::blankslate('Text', ['id' => 'capped'], 'capped') ?>
     * <?= Blankslate::blankslate('Text', ['id' => 'fixed'], 'fixed') ?>
     * <?= Blankslate::blankslate('Text', ['id' => 'no_set'], 'no_set') ?>
     * ```
     *
     * @param string $content content to include in container
     * @param array $options keys-values pair of options use in [[Html::tag()]]
     * @param string $type see [[Blankslate::_typesBlankslate]]
     * @return string
     * @see http://primercss.io/blankslate/#basic-example
     */
    public static function blankslate($content, $options = [], $type = '')
    {
        return Html::tag('div', $content, ArrayHelper::merge($options, ['class' => 'blankslate ' . static::getTypeFromArray($type, static::$_typesBlankslate)]));
    }

    /**
     * Return Html-code with icons (octicons)
     *
     * ```
     * <?php
     * use vitalik74\primer\Blankslate;
     * ?>
     *
     * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons']) ?>
     * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_commit'], ['commit']) ?>
     * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_branch'], ['branch']) ?>
     * <?= Blankslate::blankslateWithOcticons('Text', ['id' => 'blankslateWithOcticons_tag'], ['tag']) ?>
     * ```
     *
     * @param string $content content to include in container
     * @param array $options keys-values pair of options use in [[Html::tag()]]
     * @param array $typesOcticon types icons to show. Maybe `commit`, `tag`, `branch`
     * @return string
     * @see http://primercss.io/blankslate/#with-octicons
     */
    public static function blankslateWithOcticons($content, $options =[], $typesOcticon = [])
    {
        if (empty($typesOcticon)) {
            $typesOcticon = static::$_typesOcticon;
        }

        foreach ($typesOcticon as $type) {
            $content .= Html::tag('span', '', ['class' => 'mega-octicon octicon-' . $type]);
        }

        return static::blankslate($content, $options);
    }
}