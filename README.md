# yii2-richfilemanager
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
                'auth' => true, //INFO: Default true
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

<?= triawarman\richFilemanager\RichFilemanagerView::widget({"config":{"options":{"culture":"it","theme":"flat-dark"}}}); ?>

```

For now you can only set culture, theme, and connectorUrl parameter for client side plugin.


make sure you make folder named "userfiles" in document root.
ex: advanced/userfiles or basic/userfiles

Documentation
------------

More documentation can get at [https://github.com/servocoder/RichFilemanager] (https://github.com/servocoder/RichFilemanager).

Demo
------------

Filemanager live example: [http://fm.devale.pro] (http://fm.devale.pro).