<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
     $link = mysqli_connect('localhost','root','123456','itheima','3306');
     mysqli_set_charset($link,'utf8');
    
    $name = $_GET['name'];
    $password = $_GET['password'];

    //$result =  mysqli_query($link,"select * from h_user where name='$name'");

    $value_name = "select * from h_user where name = '"."$name"."'"."and passward='"."$password"."'";
    //echo "$value_name";
    $sql = mysqli_query($link,$value_name);
    $row = mysqli_fetch_array($sql);
    //$data = mysqli_fetch_array($result);
    if($row){
        echo "$row";
        if(($_GET['name']==$row['name'])&&($_GET['password'] == $row['passward'])){
           echo "<script language='javascript'>location.href='../zuoye/index.html'</script>";
        }else{
            echo "<script>alert('账号密码错误，请重新输入')</script>";
            echo "<script language='javascript'>location.href='../zuoye/login.html'</script>";
    
    }
        //echo "<script language='javascript'>location.href='../zuoye/login.html'</script>";
    }else{
        echo "<script>alert('账号密码错误，请重新输入')</script>";
    	echo "<script language='javascript'>location.href='../zuoye/login.html'</script>";

        //mysqli_query ($link,"INSERT INTO h_user(name,passward)values('$name','$password')");
    }






   // $sql = "select * from user where name='"."$get_user_name1"."'"."and class='"."$get_user_dept1"."'";

    // $value_name = "select name from h_user where name = '"."$name"."'"."and passward='"."$password"."'";
    // $sql = mysqli_query($link,$value_name);
    // $row = mysqli_fetch_array($sql);

//     if(($_POST['name']==$row['name']){
//     	echo "<script language='javascript'>location.href='../zuoye/index.html'</script>";
//     }else{
//     	//echo "有误";
//         echo "<script>alert('账号密码错误，请重新输入')</script>";
// }





//     if(($_POST['name']==$row['name'])&&($_POST['password'] == $row['passward'])){
//     	echo "<script language='javascript'>location.href='../zuoye/index.html'</script>";
//     }else{
//         echo "<script>alert('账号密码错误，请重新输入')</script>";
//     	echo "<script language='javascript'>location.href='../zuoye/login.html'</script>";

// }



?>