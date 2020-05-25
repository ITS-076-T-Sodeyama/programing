<?php
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}

$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];

$s = ("$name , $mail");
//$r ="***";
echo $s. '<br>';

//FILE書き込み
$file = fopen("data/data.txt","a");//ファイル読み込み
fwrite($file, $str."\r\n");//書き込み
fclose($file);//
?>
