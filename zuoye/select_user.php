<?php require_once("index.php");?>
<?php
    if(empty($_POST['show_user_name'])){
        die("请输入用户姓名");
    }
$get_user_name1 = ($_POST['show_user_name']);

$get_user_dept1=($_POST['show_user_dept']);

if($get_user_dept1==0){//默认查询所有班级中的学生,否则查询指定班级学生；
    $sql = "select * from user where name='"."$get_user_name1"."'";
}else{
    $sql = "select * from user where name='"."$get_user_name1"."'"."and class='"."$get_user_dept1"."'";
}

$tem = mysqli_query($link,$sql);
if(!($tem)){
    die('数据出错，重新查询');
}else{
    if(!$row=mysqli_fetch_array($tem)){
        echo "<script>alert('无此用户')</script>";
    }else{
        echo ("<script>alert('查询成功')</script>");
        do{
            echo "用户编号为:"."{$row['id']}<br>";
            echo "用户名字为:"."{$row['name']}<br>";
            echo "用户密码为:"."{$row['password']}<br>";
            echo "用户年龄为:"."{$row['num']}<br>";
            echo "用户性别为:"."{$row['gender']}<br>";
            echo "用户班级为:"."{$row['class']}<br>";
            echo "用户小组为:"."{$row['group']}<br>";
        }while($row=mysqli_fetch_array($tem));
    }
}

?>



