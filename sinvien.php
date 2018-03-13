<?php
  include 'class_lib.php';

  class SinhVien extends ConNguoi{
    var $lop;
    var $khoa;
    var $diachi;

    function __construct ($ten, $gioitinh, $tuoi , $sodienthoai, $lop, $khoa, $diachi){
      $this->ten = $ten;
      $this->gioitinh = $gioitinh;
      $this->tuoi = $tuoi;
      $this->phoneNumber = $phoneNumber;
      $this->lop = $lop;
      $this->khoa = $khoa;
      $this->diachi = $diachi;
    }

    function getLop(){
      return $this->lop;
    }
    function setLop($value){
      $this->lop = $value;
    }

    function getKhoa(){
      return $this->khoa;
    }
    function setKhoa($value){
      $this->khoa = $value;
    }

    function getDiachi(){
      return $this->diachi;
    }
    function setDiachi($value){
      $this->diachi = $value;
    }

  }

 ?>
