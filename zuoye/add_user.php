<?php
require_once "index.php";  //加载文件一次,已经加载过则不会加载；


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>添加用户</h2>
    <form id="add_user" name="add_user" method="post" action="insert_user.php">
    添加用户   <input type="text" name="name"><br>
    用户密码    <input type="text" name="password"><br>
    添加学号    <input type="text" name="num"><br>
    添加性别    <input type="text" name="gender"><br>
    所属班级    <select name="class">

   <?php
   $sql="select * from dept";
   $result = mysqli_query($link,$sql);   //执行查询
while($rows = mysqli_fetch_row($result)){//从结果集中取得行
    echo "<option value=".$rows[0].">".$rows[1]."</option>";
}
   
   ?>



    </select><br>
<input type="submit" value="提交">
小组名：<select name="group">
<?php   
$sql = "select * from usergroup";
$result = mysqli_query($link,$sql);
while($rows = mysqli_fetch_row($result)){
    echo "<option value=".$rows[0].">".$rows[1]."</option>";
}

?>

</select><br>
<br>





    </form>
</body>
</html>
