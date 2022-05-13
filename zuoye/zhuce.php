<html>
    <head>
        <meta charset=utf_8> 
        <link href="/denglu.css">
    </head>

    <script src = "http://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>


</html>

<?php
 $link = mysqli_connect('localhost','root','123456','itheima','3306');
 mysqli_set_charset($link,'utf8');

$name = $_GET['name'];
$password = $_GET['password'];
if(empty($name)||empty($password)){
    echo "<script>alert('账号或密码不能为空')</script>";
    echo "<script language='javascript'>location.href='../zuoye/login.html'</script>";
}

//mysqli_query($link,"INSERT INTO h_user (passward) VALUES ('$password')");
//$result = mysqli_query($link,"SELECT * FROM h_user where name='$name'" );
$result = mysqli_query($link,"SELECT * from h_user where name = '"."$name"."'");

$data = mysqli_fetch_assoc($result);
if($data){
    echo "<script>alert('该用户名已存在')</script>";
    echo "<script language='javascript'>location.href='../zuoye/login.html'</script>";
}else{
   mysqli_query($link,"INSERT INTO h_user (name ,passward) VALUES ('$name','$password')");
   echo "<script>alert('注册成功')</script>";
   echo "<script language='javascript'>location.href='../zuoye/login.html'</script>";
}







?>