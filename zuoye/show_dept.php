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
    <h2>查看班级</h2>
    <form action="select_dept.php" name="show_dept" method="post" id="show_dept">
        班级序号: <input type="text" name="show_dept_name">
    
    <br>
    <input type="submit" value="提交">
    </form>
</body>
</html>