<?php

namespace dayDream\Code;

class php{

    /**
     * file path
     */
    private $filePath = __DIR__;

    /**
     * question name
     * @var 
     */
    public $title;

    /**
     * error message
     */
    private $error = false;

    /**
     * would run code
     */
    private $codes;

    /**
     * file
     */
    private $file;

    /**
     * read file and get intel
     * @param $code code
     * @return $answer | It could be any type
     */
    public function __construct(string $code, string $title){
        $this->codes = $code;
        $this->title = $title;
        // fopen("$title.$type", "w"); // create file
        // $this->codes = file_get_contents($this->filePath);//Db get data in the future

        // $answer = $this->chuck();
        // fclose();   // close file
        // unlink("$title.$type"); // delete file;
        // return $answer;
    }

    /**
     * initialization
     * @return void
     */
    public function init(){
        $this->fileSet();
    }

    private function fileSet(){
        $this->file = fopen("$this->title.php", "w"); // create file
        fwrite($this->file, $this->getCode() );
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