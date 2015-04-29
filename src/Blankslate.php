<?php
/**
 * Class Blankslate
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 24.04.2015 16:07
 */

namespace vitalik74\primer;


use yii\base\Object;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Blankslate extends Object
{
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
     * @param $content
     * @param array $options
     * @return string
     * @see http://primercss.io/blankslate/#basic-example
     */
    public static function blankslate($content, $options = [], $type = '')
    {
        return Html::tag('div', $content, ArrayHelper::merge($options, ['class' => 'blankslate ' . static::getTypeBlankslate($type)]));
    }

    /**
     * @param $content
     * @param array $options
     * @param array $typesOcticon
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

    /**
     * Find and return additional optional
     * @param $type
     * @return string
     */
    private static function getTypeBlankslate($type)
    {
        return in_array($type, array_keys(static::$_typesBlankslate)) ? static::$_typesBlankslate[$type]: '';
    }
}