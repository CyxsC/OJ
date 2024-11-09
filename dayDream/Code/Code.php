<?php

namespace dayDream\Code;

use Test;

class Code{

    /**
     * file path
     */
    private $filePath = __DIR__;

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
     * @param $type code type
     * @return Integer
     */
    public function __construct($type, $title = "txt"){
        fopen("$title.$type", "w"); // create file
        $this->codes = file_get_contents($this->filePath);//Db get data in the future

        call_user_func([$this, $type]);

        $answer = $this->chuck();
        fclose();   // close file
        unlink("$title.$type"); // delete file;
        return $answer;
    }

    /**
     * @param Integer $n
     * @return avoid
     */
    private function &getCode(){
        return $this->codes;
    }

    private function php (){
        $code =  "<?php \n" . $this->getCode() . "\n ?>";
        $command = "php " . $this->filePath;
        return $this->run($command);
    }

    private function py(){

    }

    private function js(){
        
    }

    private function cpp(){


    }

    private function c (){

    }

    /**
     * run code
     * @param Integer $n
     * @param String $command file path
     * @return avoid
     */
    private function run(string $command){
        try{
            // run code
            $output = shell_exec($command);
            return $output;
        }catch(Exception $e){               // 检查文件是否成功执行
            return $e;
        }
    }

    private function format(){

    }
}
?>