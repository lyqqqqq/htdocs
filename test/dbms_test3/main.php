<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .xuanze{
            font-size: 14px;
        }
    </style>
</head>
<body>
<input type="checkbox" value="1" name="mycheckbox[]" class="xuanze">建database<br>
<input type="checkbox" value="2" name="mycheckbox[]" class="xuanze">查看当前使用的数据库<br>
<input type="checkbox" value="3" name="mycheckbox[]" class="xuanze">查看当前数据库信息<br>
<input type="checkbox" value="4" name="mycheckbox[]" class="xuanze">建立一个表<br>
<input type="checkbox" value="5" name="mycheckbox[]" class="xuanze">插入一个属性<br>
<input type="checkbox" value="6" name="mycheckbox[]" class="xuanze">查询表中所有数据<br>
<input type="checkbox" value="7" name="mycheckbox[]" class="xuanze">删除<br>
<input type="checkbox" value="8" name="mycheckbox[]" class="xuanze">更改<br>
<input type="checkbox" value="9" name="mycheckbox[]" class="xuanze">在表中添加字段
<form action="create.php" method="post" enctype="multipart/form-data">
    <textarea type="text" name="text" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="sub">
</form>
<script>
    var ivalue = document.getElementsByClassName("xuanze");
    var iaction = document.getElementsByTagName("form");
    for (var i = 0;i<9;i++){
        if (ivalue[i].value == '1' && ivalue[i].checked == true)
            iaction.action = "create.php";
        else if (ivalue[i].value == '4' && ivalue[i].checked == true)
            iaction.action = "createB.php";
    }
    console.log(iaction.action);
</script>
</body>
</html>
