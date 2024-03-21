<?php
session_start();
?>

<meta charset="utf-8">
<?php
$sId="1093376";
$sPwd="123456";

$uId=$_POST["uId"];
$uPwd=$_POST["uPwd"];

if($sId==$uId && $sPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
?>