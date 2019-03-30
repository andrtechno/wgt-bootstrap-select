<?php

/**
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 */

namespace panix\ext\bootstrapselect;

use yii\web\View;
use yii\helpers\Json;
use yii\base\Widget;

/**
 * Class BootstrapSelect
 * @package panix\ext\bootstrapselect
 */
class BootstrapSelect extends Widget
{

    public $target;
    public $options = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $js = [];
        $view = $this->getView();

        BootstrapSelectAsset::register($view);
        $options = Json::encode($this->options);
        $js[] = "$('$this->target').selectpicker($options);";
        $view->registerJs(implode("\n", $js), View::POS_END);
    }

}
