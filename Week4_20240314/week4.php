<html>
<head>
<meta charset="utf8">

<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
  }
</style>

</head>

<center>
  <h1 style="font-size: 40px;">國立高雄大學資訊管理學系晚會報名表</h1>
</center>

<center>
  <h2 style="font-size: 30px;">晚會時間:2024/05/20 18:00~21:00</h2>
</center>

<center>
<form action="week4-1.php" method="post" style="font-size: 25px;">

姓名：<input type="text" name="fullName" style="font-size: 15px;" value="" placeholder="請輸入您的姓名" required><br/>
學號：<input type="text" name="studentID" style="font-size: 15px;" placeholder="請輸入您的學號" required><br/>
系級：<input type="text" name="department" style="font-size: 15px;" placeholder="請輸入您的系級" required><br/>
性別：
<input type="radio" name="gender" style="font-size: 15px;" value="男">男
<input type="radio" name="gender" style="font-size: 15px;" value="女">女
<br/>
出生日期：
<input type="date" name="birthdate" style="font-size: 15px;" value=""><br/>
電子郵件：
<input type="email" name="email" style="font-size: 15px;" placeholder="請輸入您的電子郵件" value=""><br/>
手機號碼：
<input type="tel" name="phone" style="font-size: 15px;" placeholder="請輸入您的手機號碼" required><br/>
選擇年級：
<select name="class" style="font-size: 15px;">
<option value="資管大一">資管大一</option>
<option value="資管大二">資管大二</option>
<option value="資管大三">資管大三</option>
<option value="資管大四">資管大四</option>
</select>
<br/>
是否攜伴：
<input type="radio" name="withPartner" style="font-size: 15px;" value="是">是
<input type="radio" name="withPartner" style="font-size: 15px;" value="否" checked>否
<br/>
攜伴姓名：<input type="text" name="partnerName" style="font-size: 15px;" placeholder="請輸入攜伴姓名"><br/>
參加人數：<input type="number" name="numAttendees" style="font-size: 15px;" placeholder="請輸入您的參加人數" required><br/>

飲食選擇：
<input type="checkbox" name="dietaryPreference[]" style="font-size: 15px;" value="素食">素食
<input type="checkbox" name="dietaryPreference[]" style="font-size: 15px;" value="葷食">葷食
<br/>

交通需求：
<input type="radio" name="transportation" style="font-size: 15px;" value="需要">需要
<input type="radio" name="transportation" style="font-size: 15px;" value="不需要" checked>不需要
<br/>

服裝選擇：
<input type="radio" name="dressCode" style="font-size: 15px;" value="正式">正式
<input type="radio" name="dressCode" style="font-size: 15px;" value="休閒" checked>休閒
<input type="radio" name="dressCode" style="font-size: 15px;" value="派對">派對
<br/>

活動選擇：
<input type="checkbox" name="activity[]" style="font-size: 15px;" value="活動A-團康">活動A-團康
<input type="checkbox" name="activity[]" style="font-size: 15px;" value="活動B-大地遊戲">活動B-大地遊戲
<input type="checkbox" name="activity[]" style="font-size: 15px;" value="活動C-跳舞唱歌">活動C-跳舞唱歌
<br/>

酒精飲品：
<input type="radio" name="alcohol" style="font-size: 15px;" value="飲用">飲用
<input type="radio" name="alcohol" style="font-size: 15px;" value="不飲用" checked>不飲用
<br/>

其他事項問題：<br/>
<textarea name="specialRequest" rows="4" cols="50" style="font-size: 15px;" placeholder="請輸入您的其他事項問題"></textarea><br/>

上傳照片：
<input type="file" name="image" style="font-size: 15px;"><br/>

<br/>
<input type="submit" style="font-size: 25px;" value="報名">
<input type="reset" style="font-size: 25px;" value="清除">

</center>

</form>

</html>



