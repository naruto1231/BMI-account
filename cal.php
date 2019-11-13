
<?php
/*--------------------------------------------------
 * Class作成
 -------------------------------------------------*/
class Cal{
    public $height;
    public $weight;
	
	/*
	 * BMI計算関数
	 */
    function bmi(){
      #cmをmに変換
      $height = $this->height/100;
      #BMI計算
      $bmi = $this->weight/($height * $height);
      #小数点以下を四捨五入
      $bmi = round($bmi);
      return "$bmi";
    }
	
	/*
	 * BMI判定関数
	 */
    function hantei(){
      #cmをmに変換
      $height = $this->height/100;
      #BMI計算
      $bmi = $this->weight/($height * $height);
      #小数点以下を四捨五入
      $bmi = round($bmi,1);
      
      #BMI判定
      if($bmi < 18.5){
	    $result = "低体重(やせ)";
	  
	  }else if($bmi < 25){
        $result = "標準";
	  
	  }else if($bmi < 30){
        $result = "肥満1度";
	  
	  }else if($bmi < 35){
	    $result = "肥満2度";
	  
	  }else if($bmi < 40){
	    $result = "肥満3度";
	  
	  }else if($bmi >= 40){
	    $result = "肥満4度";
	  }
	  return "$result";
    }
	
}
/*--------------------------------------------------
 * インスタンス生成
 -------------------------------------------------*/
$cal = new Cal();
$cal->height = htmlspecialchars($_POST['height']);
$cal->weight = htmlspecialchars($_POST['weight']);
?>

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

      <!-- 
        navbar-fixed-top : トップに固定するためのクラスを追加
        navbar-fixed-bottom : フッターに固定
        固定する場合はbodyのスタイルに padding-top: 70px; などのように追加する
      -->
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

<p>あなたのBMIは <span style="color:tomato; font-size:24px; font-weight:bold;"><?php echo $cal->bmi(); ?></span> です。</p>

<br><br>

<p>判定は <span style="color:tomato; font-size:24px; font-weight:bold;"><?php echo $cal->hantei(); ?></span> です。</p>

<br><br>

<a href="form.php"><button class="btn btn-default">戻る</button></a>

    </div>
    <!-- /container -->

    <footer style="padding: 20px 0;">
      <div class="container" style="text-align: center;">
        copy 2016 <a href="http://laraweb.com/">laraweb.com</a>
      </div>
    </footer>

</body>
</html>
