<?php
/**
 * Created by Vladimir Hryvinskyy.
 * Site: http://codice.in.ua/
 * Date: 03.06.2016
 * Project: oakcms
 * File name: DateTimeAsset.php
 */

namespace oakcms\datetimepicker;

use yii\web\AssetBundle;

class DateTimeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/eonasdan-bootstrap-datetimepicker';
    /**
     * @var array
     */
    public $css = [
        'build/css/bootstrap-datetimepicker.min.css'
    ];
    /**
     * @var array
     */
    public $js = [
        'build/js/bootstrap-datetimepicker.min.js',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'oakcms\datetimepicker\MomentAsset'
    ];
}
