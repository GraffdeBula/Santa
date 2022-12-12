<?php
define('CONFIG_ROOT', __DIR__);
define('UPPER_ROOT', dirname(CONFIG_ROOT));

class autoloader {
    protected $paths=[        
        UPPER_ROOT.'/services',   
        UPPER_ROOT.'/controllers',                                
        UPPER_ROOT.'/models',                        
    ];
    public function getClass($className){
        
        foreach($this->paths as $path){
            //echo("<br>ищем в  {$path}");
            $fileName="{$path}/{$className}.php";            
            if (file_exists($fileName)){
                //echo("<br> нашли {$className} в {$fileName}");
                include $fileName;                
                //echo("<br> подключили {$fileName}");
                break;
            } else {
                //echo("<br> не подключили {$fileName}");
            }
        }
    }
}