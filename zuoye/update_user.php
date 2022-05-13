<?php require_once("index.php")?>
<?php
    $get_user_id = ($_POST['the_user_id']);
    $get_user_name = ($_POST['the_user_name']);
    $get_user_psw = ($_POST['the_user_psw']);
    $get_user_sex = ($_POST['the_user_sex']);
    $get_user_age = ($_POST['the_user_age']);
    $get_user_dept = ($_POST['the_user_dept']);
    $get_user_group = ($_POST['the_user_group']);

    echo "$get_user_name";

    $sql = "update user set name='".
    $get_user_name."',password='".
    $get_user_psw."',gender='".
    $get_user_sex."',num='".
    $get_user_age."',class='".
    $get_user_dept."',group='".
    $get_user_group."'"."where id='";

    $sql = $sql.$get_user_id;

    $sql = "update user set name='".
    $get_user_name."',password='".
    $get_user_psw."',gender='".
    $get_user_sex."',num='".
    $get_user_age."',class='".
    $get_user_dept."'"."where id=";
//,group='".$get_user_group."'

    $sql = $sql.$get_user_id.";";

    if(mysqli_query($link,$sql)){
        echo "用户修改成功<br>";
    }else{
        echo "用户修改失败";
        echo $sql;
    }

?>