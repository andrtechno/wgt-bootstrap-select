<?php
/**
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 */

namespace panix\ext\bootstrapselect;

use panix\engine\web\AssetBundle;
use yii\helpers\ArrayHelper;

/**
 * Class BootstrapSelectAsset
 * @package panix\ext\bootstrapselect
 */
class BootstrapSelectAsset extends AssetBundle
{
    public $sourcePath = '@vendor/snapappointments/bootstrap-select/dist';

    public $css = [
        'css/bootstrap-select.min.css'
    ];

    public $js = [
        'js/bootstrap-select.min.js'
    ];

    public $depends = [
        //'yii\web\JqueryAsset',
        //'app\web\themes\autima\ThemeAsset',
        //'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];

    public function init()
    {
        if(\Yii::$app->has('languageManager')){
            $lang = str_replace('-', '_', \Yii::$app->languageManager->active->locale);
        }else{
            $lang = 'ru_RU';
        }
        $this->js = ArrayHelper::merge($this->js, ["js/i18n/defaults-{$lang}.min.js"]);
        parent::init();
    }
}
