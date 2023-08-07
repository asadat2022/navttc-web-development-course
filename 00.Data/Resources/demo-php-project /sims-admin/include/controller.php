<?php
if (empty($_REQUEST["page"])) {
  $_REQUEST["page"]=null;
}
switch ($_REQUEST["page"]) {
  case '1':
    include"pages/admin/admin_view.php";
    break;
  case '2':
    include"pages/admin/add_admin.php";
    break;
  case '3':
    include"pages/admin/del_admin.php";
    break;
  case '4':
    include"pages/admin/edit_main.php";
    break;
  case '5':
    include"pages/admin/edit_admin.php";
    break;
  case '6':
    include"pages/teacher/teacher_view.php";  //Teacher View
    break;
  case '7':
    include"pages/teacher/add_teacher.php"; //Teacher Add
    break;
  case '8':
    include"pages/teacher/del_teacher.php"; //Teacher del
    break;
  case '9':
    include"pages/teacher/edit_teacher.php"; //EDIT Teacher
    break;
  case '10':
    include"pages/std/std_view.php";  //Student View
    break;
  case '11':
    include"pages/std/add_std.php"; //Student Add
    break;
  case '12':
     include"pages/std/del_std.php"; //Student del
     break;
  case '13':
    include"pages/std/edit_std.php"; //EDIT Student
    break;




  case '13':
    include"pages/std/edit_std.php"; //EDIT Student
    break;
  case '13':
    include"pages/std/edit_std.php"; //EDIT Student
    break;




  default:
    include"pages/admin/main.php";
}

 ?>
