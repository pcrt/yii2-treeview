<?php

/**
 * @link http://www.protocollicreativi.it
 * @copyright Copyright (c) 2017 Protocolli Creativi s.n.c.
 * @license LICENSE.md
 */

namespace pcrt\widgets\treeview;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\InputWidget;

/**
 * Yii2 implementation of flatpicker library (https://flatpickr.js.org/)
 * @author Marco Petrini <marco@bhima.eu>
 */

class Treeview extends InputWidget
{

    /**
     * @var array the options for the fancytree JS plugin.
     *            Please refer to the plugin Web page for possible options.
     *
     * @see http://wwwendt.de/tech/fancytree/demo/
     */
    public $clientOptions = [];
    public $template = "";

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
    /**
     * @inheritdoc
     */
    public function run()
    {
        $id = $this->options['id'];
        echo '<div id="'.$id.'">';
        if ($this->options['template'] == "") {
            echo $this->options['template'];
        }
        echo '</div>';
        $this->registerClientScript();
    }

    /**
     * @inheritdoc
     */
    public function registerClientScript()
    {
        $view = $this->getView();

        $this->registerBundle($view);

        $options = !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : '';

        $id = $this->options['id'];

        $js[] = ";jQuery('#$id').fancytree($options);";

        $view->registerJs(implode("\n", $js));
    }

    /**
     * Registers asset bundle
     *
     * @param View $view
     */
    protected function registerBundle(View $view)
    {
        TreeviewAsset::register($view);
    }
}
