<?php

//van de hien tai la href cua nav dang hardcore -> CSS hien thi cung 1 kieu tren nhieu trang
//Can sua lai de CSS hien thi tuy vao url cua trang -> Kiem tra url hien tai roi hien thi dung navbar cua muc
//Nhieu trang co cung mot kieu hien thi -> dung function de tai su dung
//Function kiem tra url chung chung nen cho vao functions.php
//Kiem tra bang Global Variable -> Dung ham DD -> ham DD chung chung nen cung cho vao funcions.php

//PHP se load url
//  Neu ten mien co ten.php co trong local folder thi se load file do
//  Khong thi tu dong load file index.php nhung van giu ten mien

require "functions.php";

$heading = "Home";

require "views/index.view.php";