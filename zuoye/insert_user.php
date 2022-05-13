<?php
require_once "index.php";
?>
<?php
if(empty($_POST['name'])||empty($_POST['password'])||empty($_POST['num'])||empty($_POST['gender'])){
   die ("请将信息补充完整；");
}else{

    $name = ($_POST['name']);
    $password = ($_POST['password']);
    $num = ($_POST['num']);
    $gender = ($_POST['gender']);
    $class = ($_POST['class']);
    $group = ($_POST['group']);

    $sql = "insert into user(name,password,num,gender,class,`group`)values(
        '$name','$password','$num','$gender','$class','$group')";
    echo $sql;
    if(!(mysqli_query($link,$sql))){
        echo "<script> alert('数据库插入失败')</script>";
    }else{
        echo "<script>alert('注册成功!')</script>";
    
        $q = "select * from user where name = '".$name."'";
        $result = mysqli_query($link,$q);
        $row = mysqli_fetch_assoc($result);     //从结果集中取得一行作为关联数组
    
        echo "用户编号:".$row['id']."<br>";
        echo "用户姓名:".$name."<br>";
        echo "用户密码:".$password."<br>";
        echo "用户性别:".$gender."<br>";
        echo "用户年龄:".$num."<br>";
        echo "用户班级:".$class."<br>";
        echo "用户小组:".$group."<br>";
    
    }

    
}





?>



<!-- ||empty($_POST["class"]) -->