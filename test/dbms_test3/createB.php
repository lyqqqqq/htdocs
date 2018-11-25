<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/2
 * Time: 8:12
 */
error_reporting(0);
if ($_POST)//create table student
    $str = $_POST['text'];
    $databasel = explode(' ',$str);
//    print_r($databasel);
    $name = $databasel[3];
    $newstr1 = substr($name,0,strlen($name));
    $name1 = array();
    $type = array();
    $i = 5;
    $j = 0;
    while($databasel[$i]){
        $name1[$j] = $databasel[$i];
        $type[$j] = $databasel[++$i];
        $i++;
        $j++;
    }
//    print_r($name1);
//    print_r($type);
//    print_r($j);
    $j--;
    chdir($databasel[0]);
    $file = fopen("./".$newstr1."123.txt","w");  //fopen会自己创建文件
    $zidian = fopen("./".$newstr1."zidian.txt","w");
//print_r($type[0]);
//print_r(sizeof($type[0]));
//print_r(sizeof($type[2]));
for ($e = 0;$e<$j;$e++)
{
    if ($type[$e] == 'int'){
        fwrite($file,$name1[$e],3);
        fwrite($zidian,$name1[$e],3);
        fwrite($zidian," ");
        fwrite($zidian,$type[$e]);
        fwrite($zidian,"\r\n");
    }

    else{
        fwrite($file,$name1[$e],10);
        fwrite($zidian,$name1[$e],10);
        fwrite($zidian," ");
        fwrite($zidian,$type[$e]);
        fwrite($zidian,"\r\n");
    }
    fwrite($file,'  ');
}
fwrite($zidian,$e."个属性");
fwrite($file,"\r\n");


    $address = $databasel[0];
//if(!file_exists("$address/$newstr1")) {
//    print_r("$address/$newstr1");
//
//    if(mkdir("$address/$newstr1")) {
//
//        echo "<script>alert('success')>;</script>";
//
//
//    }else{
//
//        echo"<script>alert('fail');</script>";
//
//    }
//
//} else {
//
//    echo "<script>alert('already ok');</script>";
//
//}
$addressnew = "$address/$newstr1";
//print_r($addressnew);

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
    <textarea type="text" name="text" id="" cols="30" rows="10" ><?=$addressnew?> </textarea>
    <input type="submit" name="sub" >
</form>
</body>
</html>

