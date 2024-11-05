<?php

namespace dayDream\Code;

use Test;

class Code{

    /**
     * file path
     */
    private $filePath = __DIR__. "\code.txt";

    /**
     * error message
     */
    private $error = false;

    /**
     * would run code
     */
    private $codes;

    /**
     * build
     */
    private $build;

    /**
     * read file and get intel
     * @return Integer
     */
    public function __construct(){
        $this->codes = file_get_contents($this->filePath);
        return $this->chuck();
    }

    /**
     * @param Integer $n
     * @return avoid
     */
    private function getCode(){
        return $this->codes;
    }

    /**
     * run code
     * @param Integer $n
     * @return avoid
     */
    private function run(){
        // set file path
        try{
            // run code
            $output = shell_exec('../compile/php.c++');
            echo $output;
            echo "-----";
            // 检查文件是否成功执行
        }catch(Exception $e){
            return $e;
        }
    }

    /**
     * chuck answer
     */
    private function chuck(){
        $count = 5;
        for($i = 1;$i < $count;$i++){
            $this->run();
            if($this->error)return $this->error;
        }
        // if(!$ans)return false;
    }

    private function format(){

    }
}
?>