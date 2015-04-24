<?php
/**
 * @copyright Copyright (c) 2014
 */

namespace vitalik74\primer\assets;


use yii\web\AssetBundle;
/**
 * PrimerAsset is declare source to Primer-css
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 */
class PrimerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/primer-css';
    /**
     * @inheritdoc
     */
    public $css = [
        'css/primer.css',
    ];
}