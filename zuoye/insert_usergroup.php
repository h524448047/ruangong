<?php  require_once("index.php")?>
<?php
    if(empty($_POST['add_group_name'])||empty($_POST['add_group_desc'])){
        die("请将信息补充完整");
    }else{
        $Groupname = ($_POST['add_group_name']);
        $Groupdesc = ($_POST['add_group_desc']);

        $sql = "insert into usergroup(group_name,group_desc)values('$Groupname','$Groupdesc')";

        if(!(mysqli_query($link,$sql))){
            echo "<script>alert('插入失败')</script>";
        }else{
            echo "<script>alert('插入成功')</script>";

            $q = "select * from usergroup where group_name = '".$Groupname."'";
            $result = mysqli_query($link,$q);
            $row = mysqli_fetch_assoc($result);



            echo "小组编号:".$row['id']."<br>";
            echo "小组名字:".$row['group_name']."<br>";
            echo "小组信息:".$row['group_desc']."<br>";

        }
    }



?>