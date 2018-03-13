<?php
  class Hinh{
    var $canh;
    var $canh2;

    function __call($method, $args){
      if ($method == "DienTich") {

        switch (count($args)) {
          case 1:
            # code...
          return $args[0] * $args[0];
            break;
          case 2:
            return $args[0] * $args[1];
            break;
        }
      }
    }

    function setCanh($value){
      $this->canh = $value;
    }
    function getCanh(){
      return $this->canh;
    }
  }

 ?>
