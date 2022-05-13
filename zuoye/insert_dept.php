<?php require_once ("index.php")?>
<?php
if(empty($_POST['get_dept_name'])||empty($_POST['get_dept_leader'])||empty($_POST['get_dept_location'])){
    die ("将信息填写完整");
}else{
    $Deptname = ($_POST['get_dept_name']);
    $DeptLdr = ($_POST['get_dept_leader']);
    $DeptLct = ($_POST['get_dept_location']);


    $sql = "insert into dept(name,leader,location)values('$Deptname','$DeptLdr','$DeptLct')";
    if(!(mysqli_query($link,$sql))){
        echo "<script>alert('数据库插入失败!')</script>";

    }else{
        echo "<script>alert('班级添加成功!')</script>";

        $q = "select * from dept where name = '".$Deptname."'";
        $result = mysqli_query($link,$q);
        $row = mysqli_fetch_assoc($result); //从结果集中取得一行作为关联数组
        echo "班级编号：".$row['id']."<br>";
        echo "班级名字：".$row['name']."<br>";
        echo "班级领导人：".$row['leader']."<br>";
        echo "班级位置：".$row['location']."<br>";
    }
    



}





?>