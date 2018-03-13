<?php

  //require_once 'class_lib.php';
  require_once 'gianvien.php';

  $john = new ConNguoi("John Smith", 1 , 19 , "0123123123");
  // $john->setTen('John Smith');
  // $john->setGioitinh(1);
  // $john->setTuoi(19);

  $tung = new ConNguoi("Nguyễn Văn Tùng", 2, 19, "01688185284");
  // $tung->setTen('Nguyễn Văn Tùng');
  // $tung->setGioitinh(2);
  // $tung->setTuoi(19);

  $gianvien = new GianVien("Binh", 1, 29, "1231234231", "công nghệ thông tin");
  echo $gianvien->getKhoa() . "<br/>";

  echo "Name: " . $john->getTen() . "<br/>Giới tính: " . ($john->getGioitinh()==1 ? "Nam" : "Nữ") . "<br/>Tuổi: " . $john->getTuoi() . "<br/>Phone: " .$john->getPhoneNumber() .  "<br/>==========================================================================================<br/>";

  /*
    Name: John Smith
    Giới tính: Nam
    Tuổi: 19
  */

  echo "Name: " . $tung->getTen() . "<br/>Giới tính: " . ($tung->getGioitinh()==1 ? "Nam" : "Nữ") . "<br/>Tuổi: " . $tung->getTuoi() . "<br/>==========================================================================================<br/>";

  /*
    Name: Nguyễn Văn Tùng
    Giới tính: Nữ
    Tuổi: 19
  */
 ?>
