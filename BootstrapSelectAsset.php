<?php
/**
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 */

namespace panix\ext\bootstrapselect;

use panix\engine\web\AssetBundle;

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
        'yii\web\JqueryAsset',
    ];
}
