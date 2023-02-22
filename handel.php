<?php
echo '<pre>';
print_r ($_FILES);
echo '</pre>';
$myimg=$_FILES['img'];
$myimgname=$myimg['name'];
$mytempimg=$myimg['tmp_name'];
$t=time();
$nowDate=date('Y-m-d',$t);
$randomString="nowDate".hexdec(uniqid());
$ext=pathinfo($myimgname,PATHINFO_EXTENSION);
$newImgName="$randomString.$ext";
move_uploaded_file($mytempimg,"assests/upload/user/$newImgName");
echo $myimgname;

?>
