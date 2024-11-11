<?php

namespace App\usually;

use think\Response;

use function PHPSTORM_META\type;

/**
 * Class Json
 * 转json格式
 */
class Json{

    /**
     * status code
     * @var int
     */
    private $code = 200;

    /**
     * change status code
     * @param int $code
     * @return \App\usually\Json
     */
    public function code(int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * switch json 
     * @param number $code 状态码
     * @param mixed $msg 返回信息
     * @param array $data 返回数据
     * @return Response
     */
    public function make(int $status, string $msg, ?array $data = null, ?array $replace = []): Response
    {
        $res = compact('status', 'msg');

        if (!is_null($data))
            $res['data'] = $data;

        if (is_numeric($res['msg'])) {
            $res['code'] = $res['msg'];
            $res['msg'] = getLang($res['msg'], $replace);
        }


        return Response::create($res, 'json', $this->code);
    }

    /**
     * success
     * @param  $msg 返回信息
     * @return Response
     */
    public function success($msg = 'success', ?array $data = null, ?array $replace = []){
        if(is_array($msg)){
            $data = $msg;
            $msg = 'success';
        }
        
        return $this->make('200', $msg, $data, $replace);
    }

    /**
     * fail
     * @param  $msg 返回信息
     * @return Response
     */
    public function fail($msg = 'fail', ?array $data = null, ?array $replace = []){
        if(is_array($msg)){
            $data = $msg;
            $msg = 'fail';
        }

        return $this->make('400', $msg, $data);
    }
}