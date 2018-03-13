<?php
include 'hinh.php';
  $dientich = new Hinh();

  echo "diện tích hình vuông cạnh = 5 là: " . $dientich->DienTich(5) . "<br/>";
  echo "diện tích hình chữ nhật dài = 5, rông = 6 là: " . $dientich->DienTich(6,5);

 ?>
