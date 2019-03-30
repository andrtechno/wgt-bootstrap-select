wgt-bootstrap-select
===========
Widget for PIXELION CMS 2.x to use [bootstrap-select](https://github.com/snapappointments/bootstrap-select)

[![Latest Stable Version](https://poser.pugx.org/panix/wgt-bootstrap-select/v/stable)](https://packagist.org/packages/panix/wgt-bootstrap-select)
[![Total Downloads](https://poser.pugx.org/panix/wgt-bootstrap-select/downloads)](https://packagist.org/packages/panix/wgt-bootstrap-select)
[![Monthly Downloads](https://poser.pugx.org/panix/wgt-bootstrap-select/d/monthly)](https://packagist.org/packages/panix/wgt-bootstrap-select)
[![Daily Downloads](https://poser.pugx.org/panix/wgt-bootstrap-select/d/daily)](https://packagist.org/packages/panix/wgt-bootstrap-select)
[![Latest Unstable Version](https://poser.pugx.org/panix/wgt-bootstrap-select/v/unstable)](https://packagist.org/packages/panix/wgt-bootstrap-select) 
[![License](https://poser.pugx.org/panix/wgt-bootstrap-select/license)](https://packagist.org/packages/panix/wgt-bootstrap-select)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist panix/wgt-bootstrap-select "*"
```

or add

```
"panix/wgt-bootstrap-select": "*"
```

to the require section of your `composer.json` file.



Usage
-----

Once the extension is installed, simply use it in your code by :

```php
<?php
echo \panix\ext\bootstrapselect\BootstrapSelect::widget([
    'name' => 'items',
    'value' => array_keys($test2['assigned']),
    'items' => $items,
    'options' => [
        'multiple' => true
    ],
    'jsOptions' => [
        /*...*/
    ]
]);
 ?>
```
