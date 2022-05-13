<?php require_once ("index.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加班级</title>
</head>
<body>
    <h3>添加班级</h3>
    <form action="insert_dept.php" id="insert_dept" name="insert_dept" method="post">
        班级名:<input type="text" name="get_dept_name"><br>
        班级负责人:<input type="text" name="get_dept_leader"><br>
        班级位置:<input type="text" name="get_dept_location"><br>


        <input type="submit" value="添加">
    </form>

    
</body>
</html>