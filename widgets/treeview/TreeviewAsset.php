<?php

namespace pcrt\widgets\treeview;

use yii\web\AssetBundle;

class TreeviewAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'js/jquery.fancytree-all-deps.min.js',
    ];

    public $css = [
        'css/ui.fancytree.min.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
