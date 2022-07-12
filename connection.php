<?php
$user name = $p_post['user name'];
$email = $p_post['email'];
$mobile.No= $p_post['mobile.No'];
$password = $p_post['password'];
$confirm password = $p_post['confirm password'];
$conn=new mysqli('localhost','',;,'registation');
if($conn->connected_error){
    die ('connection failed :'.$conn->connected_error);
}else{
    $stmt = ->prepair("insert into registation (username,email,mobile.No,password,confirmpassword)values(?,?,?,?,?)");
    $stmt->bind_parm("ssiss",$username,$email,$mobile.No,$password$confirmpassword);
    $stmt->execute();
    echo"registation sucessful...";
    $stmt->close();
    $conn->close();
}
?>


