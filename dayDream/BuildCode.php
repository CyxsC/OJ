<?php
namespace dayDream;

class BuildCode{

    /**
     *  dayDream\Code\Class实例
     */
    private $code;

    public function __construct(string $type, string $title, string $code){
        $class = 'dayDream\Code\\'.$type;
        $this->code = new $class($code, $title);
    }

    public function init($data){
        
    }

    /**
     * chuck answer
     */
    private function chuck(){
        // $count = 1;
        // for($i = 0;$i < $count;$i++){
        //     $this->run();
        //     if($this->error)return $this->error;
        // }
        // if(!$ans)return false;
    }

    public function __get($e){
        
    }
}