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
     * @serverConfig array[] 
     */
    public $serverConfig = [];
    
    /**
     * 
     * @auth boolean. Authentication that ensures can/can't use RichFilemanager
     */
    public $auth = true;
    
    /**
     * Initializes the widget.
     */
    public function init()
    {
        //INFO: Do nothing
    }
    
    public function run()
    {
        $this->fm = \Fm::app()->getInstance(ArrayHelper::merge(['auth'=> $this->auth], $this->serverConfig)); 
        $this->fm->setFileRoot(
                $this->serverConfig['options']['fileRoot'], 
                isset($this->serverConfig['options']['serverRoot']) && $this->serverConfig['options']['fileRoot'] ? true : false
            );
        $this->fm->handleRequest();
    }
    
}
