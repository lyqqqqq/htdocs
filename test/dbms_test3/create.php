<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/2
 * Time: 8:12
 */
//error_reporting(0);
if ($_POST)//create database test
    $str = $_POST['text'];
    $databasel = explode(' ',$str);
    $name = $databasel[2];
    $newstr = substr($name,0,strlen($name)-1);
    print_r($newstr);
    if(!file_exists("../new_dbms/$newstr")) {

        if(mkdir("../new_dbms/$newstr")) {

            echo "<script>alert('success')>;</script>";


        }else{

            echo"<script>alert('fail');</script>";

        }

    } else {

        echo "<script>alert('already ok');</script>";

    }
//echo getcwd() . "<br>";
//chdir("../new_dbms/$newstr");

//    $a = $newstr.'123.txt';
//    file_put_contents($a,"hello,text");
//    if (file_put_contents($a,"hello,text"))
//        die("<script>alert('success');history.back();</script>");
//    else
//        die("<script>alert('fail');history.back();</script>")
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
<form action="createB.php" method="post" enctype="multipart/form-data">
    <textarea type="text" name="text" id="" cols="30" rows="10" >../new_dbms/<?=$newstr?> </textarea>
    <input type="submit" name="sub" >
</form>
</body>
</html>
