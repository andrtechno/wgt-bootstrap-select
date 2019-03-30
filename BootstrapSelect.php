<?php

/**
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 */

namespace panix\ext\bootstrapselect;

use yii\web\View;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use panix\ext\bootstrapselect\BootstrapSelectAsset;

/**
 * Class BootstrapSelect
 * @package panix\ext\bootstrapselect
 */
class BootstrapSelect extends InputWidget
{

    /**
     * Dropdownlist options
     * @var array
     */
    public $options = [];

    public $items = [];

    /**
     * See: https://developer.snapappointments.com/bootstrap-select/options/#bootstrap-version
     * @var array
     */
    public $jsOptions = [
        'liveSearch' => false,
        'tickIcon'=>'icon-check'
    ];

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
        $this->registerClientScript();
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        $assets = BootstrapSelectAsset::register($view);


        //  $this->view->registerJsFile($assets->baseUrl.'');
        //     $this->jsOptions['utilsScript'] = $assets->baseUrl . '/js/utils.js';


        $jsOptions = Json::encode($this->jsOptions);
        $js[] = "$('#{$this->options['id']}').selectpicker({$jsOptions});";
        $view->registerJs(implode("\n", $js));
    }

}
