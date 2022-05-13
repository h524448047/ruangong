<?php require_once("index.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>添加小组</h3>
    <form action="insert_usergroup.php" method="post" name="add_usergroup">
        小组名：<input type="text" name="add_group_name"><br>
        小组描述：<input type="text" name="add_group_desc"><br>

        <input type="submit" value="添加">
    </form>
</body>
</html>