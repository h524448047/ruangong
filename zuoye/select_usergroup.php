<?php require_once("index.php")?>
<?php
    if(empty($_POST['show_group_id'])){
        echo "<script>alert('输入小组编号')</script>";
    }else{
        $Show_id = ($_POST['show_group_id']);


        $sql = "select * from usergroup where id='"."$Show_id"."'";
        $result = mysqli_query($link,$sql);
        if(!($result)){
            die("数据读取出错");
        }else{
            if(!$row=mysqli_fetch_array($result)){
                echo "<script>alert('查无小组')</script>";
            }else {
                echo "<script>alert('查询成功')</script>";
                echo "小组编号为："."{$row['id']}<br>";
                echo "小组成员为："."{$row['group_name']}<br>";
                echo "小组信息为："."{$row['group_desc']}<br>";
            }
        }
    }


?>