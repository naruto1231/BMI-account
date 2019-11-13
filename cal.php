<?php
/*-------------------
*Class作成
-------------------*/
class Cal{

  public $height;
  public $weight;

  /*
  * BMI計算関数
  */
  function bmi(){
    #cmをmに変換
    $height =$this->height/100;
    #BMI計算
    $bmi = $this->weight/($height * $height);
    #小数点以下を四捨五入
    $bmi =round($bmi);
    return"$bmi";
  }
  /*
  *BMI判定関数
  */
  function hantei(){
    #cmをmに変換
    $height = $this->height/100;
    #BMI計算
    $bmi = $this->weight/($height * $height);
    #小数点以下を四捨五入
    $bmi = round($bmi,1);

    BMi判定
    if($bmi < 18.5){
      $result = "低体重(やせ)";
    }else if($bmi < 25){
      $result = "標準";
    }else if($bmi < 30){
      $result = "肥満度1度";
    }
    else if($bmi < 35){
      $result = "肥満2度";
    }
    else if($bmi < 40){
      $result = "肥満3度";
    }
    else if($bmi >= 40){
      $result = "肥満4度";
    }
    return"$result";
  }
}
/*----------------------------
インスタンス生成
----------------------------*/
$cal = new Cal();
$cal->height = htmlspecialchars($_POST['height']);
$cal->weight = htmlspecialchars($_POST['weight']);

?>
