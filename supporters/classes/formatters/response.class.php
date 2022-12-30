<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Formatters;


use \Common\FieldToPropertyTrait;
#uns#


class Response{

  public $code;
  public $status;
  public $message;
  public $data;

  // use traits
  
  use FieldToPropertyTrait;
  #ut#

  public function __construct(){
      // code...
      $this->code(200);
  }

  public function json($status, $message = "", $data = []){
    http_response_code($this->code);
    return json_encode(
      [
        "code" => $this->code,
        "status" => $status,
        "message" => $message,
        "data" => $data
      ]
    );
  }
}

?>