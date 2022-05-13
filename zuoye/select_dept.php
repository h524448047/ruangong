<?php require_once("index.php")?>
<?php
    if(empty($_POST['show_dept_name'])){
        die ("<script>alert('请输入班级编号')</script>");
    }
    $get_dept_Name = $_POST['show_dept_name'];

    $sql = "select * from dept where name='"."$get_dept_Name"."'";
    $tem = mysqli_query($link,$sql);

    if(!($tem)){
        die ("数据读取出错，请从新输入");
    }else{
        if(!$row = mysqli_fetch_array($tem)){
            echo "<script>alert('无此班级')</script>";
        }else{
            echo ("<script>alert('查询成功')</script>");
            echo "班级编号为："."{$row['id']}<br>";
            echo "班级名字为："."{$row['name']}<br>";
            echo "班级领导人为："."{$row['leader']}<br>";
            echo "班级位置为："."{$row['location']}<br>";
        }
    }


?>