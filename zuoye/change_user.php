<?php require_once("index.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <h2>修改用户</h2>
    <form action="update_user.php" method="post" name="add_user" id="add_user">
        需要修改的用户的id:<input type="text" name="the_user_id"><br>
        用户姓名：<input type="text" name="the_user_name"><br>
        用户密码：<input type="text" name="the_user_psw"><br>
        用户性别：<input type="text" name="the_user_sex"><br>
        用户年龄：<input type="text" name="the_user_age"><br>
        所属班级：<select name="the_user_dept" id="">
            <option value=0>请选择班级</option>
            <?php
            $sql = "select * from dept";
            $result = mysqli_query($link,$sql);
            while($rows = mysqli_fetch_row($result)){
                echo "<option value=".$rows[0].">".$rows[1]."</option>";
            }
            ?>
        </select><br>
        小组名:<select name="the_user_group">
        <option value=0>请选择小组</option>
            <?php
            $sql = "select * from usergroup";
            $result = mysqli_query($link,$sql);
            while($rows = mysqli_fetch_row($result)){
                echo "<option value=".$rows[0].">".$rows[1]."</option>";
            }
            ?>
        </select><br>
        <br>
        <input type="submit" value="修改用户信息">
    </form>
</body>
</html>