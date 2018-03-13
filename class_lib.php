<?php
//đối tượng chỉ có 2 cái là thuộc tính và phương thức

  class ConNguoi{
    var $ten;      //var là accsess modifi <==> public
    var $gioitinh;
    var $tuoi;
    var $phoneNumber;

    public function __construct ($ten, $gioitinh, $tuoi, $phoneNumber){ // nếu functuion không khai báo public thì mạc định là public
      $this->ten = $ten;
      $this->gioitinh = $gioitinh;
      $this->tuoi = $tuoi;
      $this->phoneNumber = $phoneNumber;
    }

    function getPhoneNumber(){
      return $this->phoneNumber;
    }
    function setPhoneNumber($value){
      $this->phoneNumber = $value;
    }

    // public function __construct ($value ){
    //   $this->ten = $value;
    // }

    function getTen(){
      return $this->ten;
    }
    function setTen($par){
      $this->ten = $par;
    }

    function getGioitinh(){
      return $this->gioitinh;
    }
    function setGioitinh($value){
      $this->gioitinh = $value;
    }

    function getTuoi(){
      return $this->tuoi;
    }
    function setTuoi($value){
      $this->tuoi = $value;
    }
  }
 ?>
