<?php  require_once("index.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    选择要删除的用户编号：<input type="text" name ="delete_id">
    <input type="submit" value="提交" name="submit">
    </form>
</body>
</html>



<?php
    if(empty($_POST['delete_id'])){
        die("选择要删除的id");
    }

    $the_delete_user_id = ($_POST['delete_id']);
    echo "$the_delete_user_id";
    $sql = "delete from user where id=";
    $q = $sql.$the_delete_user_id;

    if(mysqli_query($link,$q)){
        echo "删除成功<br>";
    }else{
        echo "删除失败";
    }

?>