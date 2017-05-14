yii2-richfilemanager
======
Yii 2 wrapper for servocoder/RichFilemanager

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist triawarman/yii2-richfilemanager "*"
```

or add

```
"triawarman/yii2-richfilemanager": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use yii\web\Controller;
use triawarman\richFilemanager\FileManagerAction;

class MediaManagerController extends Controller
{    

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    
    public function actions() {
        return[
            'file-manager'=>[
                'class' => FileManagerAction::className(),
                'auth' => true, //INFO: Default true, you could pass this option
                'serverConfig' => [
                    'options' =>[
                        "serverRoot" => true,
                        "fileRoot" => "/user_folder/"
                    ]
                ],
            ]
        ];
    }
}
```

and in the view


```php
<?= triawarman\richFilemanager\RichFilemanagerView::widget(); ?>

if you want passing some plugin parameters

<?= triawarman\richFilemanager\RichFilemanagerView::widget({
"config":{
    "options":{
        "culture":"it",
        "theme":"flat-dark"
    },
    "viewer":{
        "absolutePath":true,
        "previewUrl":"yourdomain.com/path/to/public_folder/",
        "pathToFileOnly": true
    },
}
}); ?>

```

Configuration that you can sets are :
1 options => culture
2 options => theme
3 options => connectorUrl
4 viewer => absolutePath
5 viewer => previewUrl
6 viewer => pathToFileOnly

Default connectorUrl is your {active control}/file-manager if you want to change, do :

```php
<?= triawarman\richFilemanager\RichFilemanagerView::widget({"apiConnectorUrl": "your_absolute_url"}); ?>

or

<?= triawarman\richFilemanager\RichFilemanagerView::widget({"config":{"api":{"connectorUrl": "your_absolute_url"}}}); ?>

```

When doing 

```php
<?= triawarman\richFilemanager\RichFilemanagerView::widget({
"config":{
    "viewer":{
        "absolutePath":true,
        "previewUrl":"yourdomain.com/path/to/public_folder/",
        "pathToFileOnly": true
    },
}
}); ?>

```

the selected image will provide short address e.g image.png or folder/image.png


Documentation
------------

More documentation can get at [https://github.com/servocoder/RichFilemanager] (https://github.com/servocoder/RichFilemanager).

Demo
------------

Filemanager live example: [http://fm.devale.pro] (http://fm.devale.pro).