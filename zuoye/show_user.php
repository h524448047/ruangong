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
    <h2>查看用户</h2>
    <form action="select_user.php" method="post" name="show_user" id="show_user">
        用户姓名: <input type="text" name="show_user_name"><br>
        所属班级：<select name="show_user_dept">
            <option value=0>所有班级</option>
            <?php
            $sql = "select * from dept";
            $result = mysqli_query($link,$sql);
            while($rows = mysqli_fetch_row($result)){
                echo "<option value=".$rows[0].">".$rows[1]."</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="查看"/>
    </form>
</body>
</html>