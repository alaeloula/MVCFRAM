<?php 
namespace app\core;
class Response{
    public function setStautsCode(int $code)
    {
       http_response_code($code); 
    }
}