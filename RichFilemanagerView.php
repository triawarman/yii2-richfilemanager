<?php
namespace triawarman\richFilemanager;
        
use Yii;
use yii\base\Widget;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;


/**
 * Description of Filemanager
 *
 * @author Triawarman <i.triawarman@gmail.com>
 */
Class RichFilemanagerView extends Widget
{
    /**
     *
     * @var string that holds AssetsBundle.
     */
    private $bundle;
    
    /**
     *
     * @var string of absolute url to serve data transaction 
     */
    public $apiConnectorUrl;
    
    /**
     *
     * @var array. Each array element represents the richFilemanager configuration,
     * altough only can manipulate culture(language) and theme (for now).
     */
    public $clientConfig = [];
    
    //public $clientCallBacks; //TODO: will enable this in the future
    
    
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();        
        $this->bundle = RichFilemanagerViewAsset::register($this->getView());
    }
    
    /**
     * Renders the widget.
     */
    public function run()
    {
        /*
        $this->getView()->registerCss("
            .fm-container .fm-loading-wrap {
                position: fixed;
                height: 100%;
                width: 100%;
                overflow: hidden;a
                top: 0;
                left: 0;
                display: block;
                background: white url($bundle->baseUrl/images/spinner.gif) no-repeat center center;
                z-index: 999;
            }
        ");
        */
                
        $pluginParams = [];
        
        if(!empty($this->clientConfig)){
            $config =['config' => $this->clientConfig];
            $pluginParams = ArrayHelper::merge($pluginParams, $config ); 
        } 

        if(isset($this->apiConnectorUrl)){
            if(!empty($pluginParams)){
                $pluginParams['config']['api']['connectorUrl'] =  $this->apiConnectorUrl;
            } else {
                $pluginParams = [
                    'config' =>[
                        'api' =>[
                            'connectorUrl' => $this->apiConnectorUrl
                        ]
                    ]
                ];
            }
        }else{
            //INFO: set default api connectorUrl
            if(!empty($pluginParams)){
                $pluginParams['config']['api']['connectorUrl'] =  Url::to([Yii::$app->controller->id.'/file-manager'], true);
            } else {
                $pluginParams = [
                    'config' =>[
                        'api' =>[
                            'connectorUrl' => Url::to([Yii::$app->controller->id.'/file-manager'], true)
                        ]
                    ]
                ];
            }
        }
              
        if(!empty($pluginParams)){
            $script = '$(".fm-container").richFilemanager('. json_encode($pluginParams) .');' ;
        }else{
            $script = '$(".fm-container").richFilemanager();';
        }
       
        $this->getView()->registerJs('
            $(function() {
                '. 
                $script 
                .'
            });
        ', \yii\web\View::POS_END);
        
        
        return $this->render('interface');
    }
    
    public function getPublishedPath()
    {
        return $this->bundle->baseUrl;
    }
}