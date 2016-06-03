Yii2 DateTime Widget
====================
Yii2 DateTime Widget

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist oakcms/yii2-datetimepicker "*"
```

or add

```
"oakcms/yii2-datetimepicker": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use oakcms\yii2-datetimepicker\DateTimeWidget;

<?= $form->field($model, 'field')->widget(
        DateTimeWidget::className(),
        [
            'phpDatetimeFormat' => 'dd.MM.yyyy, HH:mm'
        ]
    ); 
?>
```
