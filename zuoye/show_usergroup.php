<?php require_once("index.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看小组</title>
</head>
<body>
    <h2>查看小组</h2>
    <form action="select_usergroup.php" method="post" name="show_usergroup">
        小组编号：<input type="text" name="show_group_id"><br>
        <input type="submit" value="查看">
    </form>
</body>
</html>