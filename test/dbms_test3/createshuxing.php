<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/2
 * Time: 8:12
 */

if ($_POST)//create table student
    $str = $_POST['text'];
//    print_r($_POST);
$database = explode(' ',$str);
//    print_r($database);
$name = $database[3];
$newstr1 = substr($name,0,strlen($name));
//    print_r($newstr1);
$i = 6;
$j = 0;
for ($j = 0;$database[$j] != ');';$j++);
$address = $database[0];
$file = fopen($address.".txt","a");
$addressnew = "$address/$newstr1";
//for ($i;$i<$j;$i++){
//    fwrite($file,$database[$i]);
//    fwrite($file,'  ');
//}
//fwrite($file,"\r\n");
//    $newstr1 = substr($name,0,strlen($name)-1);
//    chdir($databasel[0]);
//    $file = fopen("./".$newstr1.".txt","w");  //fopen会自己创建文件
//    fwrite($file,$newstr1);
//    $address = $databasel[0];
//    $addressnew = "$address/$newstr1";
//    print_r($addressnew);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="createneirong.php" method="post" enctype="multipart/form-data">
    <textarea type="text" name="text" id="" cols="30" rows="10" ><?=$address?> </textarea>
    <input type="submit" name="sub" >
</form>
</body>
</html>

