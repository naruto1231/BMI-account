<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="device-width", initial-scale=1>
<title>BMI計算</title>
 </head>
<!---
form
--->
 <body>
<form action="cal.php" method="post" role="form">
  <label for="InputHeight">身長(cm)</label>
  <input type="text" name="height" class="form-control" id="InputHeight" placeholder="半角数字のみ">
<label for"Inputweight">体重(kg)</label>
<input type="text" name="weight" class="form-control" id="Inputweight" placeholder="半角数字のみ">
<button type="submit" class="btn btn-default">BMI計算</button>
</body>
</html>
