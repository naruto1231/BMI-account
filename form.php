<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMI計算</title>
<!--CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<!--JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--自作CSS -->
    <style>
      /* Navbarを固定しているので、その分空ける */
      body{
        padding-top: 70px;
      }
    </style>
	</head>
 
<body>

    <div class="container">
      <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      
      <div class="jumbotron">
        <h1>BMI計算</h1>
        <p>BMI 計算を自動でいたします。ダイエットにお役立てください。</p>
		<p>BMI＝体重(kg) ÷ {身長(m) Ｘ 身長(m)}</p>
      </div>
      <!--=================================================
                             Navbar
      ==================================================-->
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu-3">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- タイトルなどのテキスト -->
            <a class="navbar-brand" href="#">BMI計算アプリ</a>
          </div>
        </div>
      </nav>
      <!--=================================================
                             Form
      ==================================================-->
      <form  action="cal.php" method="post" role="form">
        <div class="form-group">
          <label for="InputHeight">身長(cm)</label>
          <input type="text" name="height" class="form-control" id="InputHeight" placeholder="半角英数字のみ">
        </div>
        <div class="form-group">
          <label for="InputWeight">体重(kg)</label>
          <input type="text" name="weight" class="form-control" id="InputWeight" placeholder="半角英数字のみ">
        </div>
        <button type="submit" class="btn btn-default">BMI計算</button>
      </form>
    </div>
    <!-- /container -->
    <footer style="padding: 20px 0;">
      <div class="container" style="text-align: center;">
        copy 2016 <a href="http://laraweb.com/">laraweb.com</a>
      </div>
    </footer>
</body>
</html>
