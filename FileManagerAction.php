<?php
namespace triawarman\richFilemanager;

use yii\base\Action;
use yii\helpers\ArrayHelper;

require_once(dirname(__FILE__). '/connector/application/Fm.php');

/**
 * Description of FileManagerAction
 *
 * @author Triawarman <i.triawarman@gmail.com>
 */
class FileManagerAction extends Action
{
    private $fm;
    
    /**
     * 
     * @var array[] 
     */
    public $serverConfig = [];
    
    public $auth = true;
    
    /**
     * Initializes the widget.
     */
    public function init()
    {
        /*
         * TODO: Should make default cant upload/download/seeing files
         */
        $this->fm = \Fm::app()->getInstance(ArrayHelper::merge(['auth'=> $this->auth], $this->serverConfig)); 
    }
    
    public function run()
    {
        if(!empty($this->serverConfig)){
            if(isset($this->serverConfig['options']['fileRoot'])){
                $this->fm->setFileRoot($this->serverConfig['options']['fileRoot'],
                    isset($this->serverConfig['options']['serverRoot']) && $this->serverConfig['options']['fileRoot'] ? true : false);
            }
        }
        
        $this->fm->handleRequest();
    }
    
}
