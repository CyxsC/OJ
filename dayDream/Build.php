<?php
namespace dayDream;

use dayDream\Code\Code;

class Build{
    public function __construct($type){
        new Code($type);
    }

    public function init($data){
        
    }

    private function build(){
        
    }

    /**
     * chuck answer
     */
    private function chuck(){
        $count = 1;
        for($i = 0;$i < $count;$i++){
            $this->run();
            if($this->error)return $this->error;
        }
        // if(!$ans)return false;
    }

    public function __get($e){
        
    }
}
?>