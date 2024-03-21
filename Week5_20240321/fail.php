<head>
<meta charset="utf8">
<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
  }
</style>

<center>
<?php
echo "<style>body { font-size: 20px; }</style>";
echo "登入失敗<br/>";
echo "1秒鐘之後回登入畫面";
header("Refresh:1;url=login.php");

?>
</center>