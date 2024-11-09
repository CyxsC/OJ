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
        $filePath = __DIR__.'/Test.php';
        $n = 1;
        ini_set('disable_functions', 'eval');
        echo json_encode(ini_get('disable_functions'));
        echo json_encode(ini_get('post_max_size'));
        // echo json_encode(ini_set('display_errors', '1'));
        try{
            // run code
            eval($this->codes);
        }catch(Exception $e){               // 检查文件是否成功执行
            return $e;
        }
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

    private function format(){

    }
}
?>