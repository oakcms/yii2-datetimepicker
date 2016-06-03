<?php
/**
 * Created by Vladimir Hryvinskyy.
 * Site: http://codice.in.ua/
 * Date: 03.06.2016
 * Project: oakcms
 * File name: MomentAsset.php
 */

namespace oakcms\datetimepicker;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/moment';
    /**
     * @var array
     */
    public $js = [
        'min/moment-with-locales.min.js',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
