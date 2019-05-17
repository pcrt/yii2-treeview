Yii2-Datepicker
========

[Treeview](http://wwwendt.de/tech/fancytree/demo/#sample-multi-ext.html) gives you a customizable treeview with support for multicolumn, filtering, checkbox and many other highly used options.

##Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require pcrt/yii2-treeview "*"
```

or add

```
"pcrt/yii2-treeview": "*"
```

to the require section of your `composer.json` file.

## Usage

Once the extension is installed, modify your application configuration to include:

```php
use pcrt\widgets\treeview\Treeview:


// with \yii\bootstrap\ActiveForm;
echo $form
    ->field($model, 'attribute')
    ->widget(
        Treeview::class,
        [
          'clientOptions' => [
            'source' => "http://www.xxxxx.it/out.json",
          ]
        ]
    );

// as widget
echo Treeview::widget([
    'id'=>'treeview',
    'name'=>'treeview',
    'clientOptions' => [
      'source' => "http://www.xxxxx.it/out.json",
    ]
]);
```

## License

Yii2-Treeview is released under the BSD-3 License. See the bundled `LICENSE.md` for details.

Enjoy!
