<?php
  include 'class_lib.php';

  class GianVien extends ConNguoi{
    var $khoa;

   public function __construct ($ten, $gioitinh, $tuoi, $phoneNumber, $khoa){ // nếu functuion không khai báo public thì mạc định là public
      parent::__construct($ten, $gioitinh, $tuoi, $phoneNumber);
      $this->khoa = $khoa;
    }

      //overide phương thức getName của lớp cha
    public function getTen(){
      return "Tên gian viên là: " . $this->ten;
    }

    function setKhoa($value){
      $this->khoa = $value;
    }
    function getKhoa(){
      return $this->khoa;
    }

    function __ToString(){
      return $this->getTen() . "<br/>Giới tính: " . (($this->gioitinh==1) ? "Nam" : "Nữ") . "<br/>Tuổi: " . $this->tuoi . "<br/>Số điện thoai: " . $this->phoneNumber . "<br/>Khoa: " . $this->khoa;
    }
  }

 ?>
