<?php
//(8回目授業＝課題)
//１．PHP
//[users_select.php]のPHPコードをマルっとコピーしてきます。
//※SQLとデータ取得の箇所を修正します。

$id = $_GET["id"];

//1.  DB接続します
try {
    //dbname=gs_db
    //host=localhost
    //Password:MAMP='root', XAMPP=''
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
    exit('DB Error'.$e->getMessage());
}

//２．テーブル名"gs_user_table"のSQLを作成
//課題：ソート降順/5レコードのみ取得 ORDER BY id DESC
$sql = "SELECT * FROM gs_user_table ORDER BY id DESC LIMIT 5";
$stmt = $pdo->prepare($sql);
// $stmt->bindValue(":id", $id);
$status = $stmt->execute();

//３．データ表示
$view=""; //表示用文字列を格納する変数
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("*SQLError:".$error[2]);
}else{
  $res = $stmt->fetch();//1行だけ取得する
}

    

    // Selectデータで取得したレコードの数だけ自動でループする
    // while( $res = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     $view .= '<tr>';
    //     $view .= '<td>';
    //     $view .= '<a href="users_detail.php?id='.$res["id"].'">';
    //     $view .= $res["id"];
    //     $view .= '</a>';//1ブロック

    //     $view .= '<td>';
    //     $view .= '<a href="users_detail.php?name='.$res["name"].'">';
    //     $view .= $res["name"];
    //     $view .= '</a>';//1ブロック

    //     $view .= '<td>';
    //     $view .= '<a href="users_detail.php?lid='.$res["lid"].'">';
    //     $view .= $res["lid"];
    //     $view .= '</a>';//1ブロック

    //     $view .= '<td>';
    //     $view .= '<a href="users_detail.php?lpw='.$res["lpw"].'">';
    //     $view .= $res["lpw"];
    //     $view .= '</a>';//1ブロック

    //     $view .= '<td>';
    //     $view .= '<a href="users_detail.php?kanri_flg='.$res["kanri_flg"].'">';
    //     $view .= $res["kanri_flg"];
    //     $view .= '</a>';//1ブロック

    //     $view .= '<td>';
    //     $view .= '<a href="users_detail.php?life_flg='.$res["life_flg"].'">';
    //     $view .= $res["life_flg"];
    //     $view .= '</a>';//1ブロック

    //     $view .= '</td>';

        // $view .= '<tr>';
        // $view .= '<td>'.$res["id"].'</td>';
        // $view .= '<td>'.$res["name"].'</td>';
        // $view .= '<td>'.$res["lid"].'</td>';
        // $view .= '<td>'.$res["lpw"].'</td>';
        // $view .= '<td>'.$res["kanri_flg"].'</td>';
        // $view .= '<td>'.$res["life_flg"].'</td>';
//         $view .= '</tr>'.PHP_EOL;  //PHP_EOLは改行コード!!
//     }
// }
?>
<!--
２．HTML
以下に[users.html]のHTMLをまるっと貼り付ける！
理由：入力項目は「登録/更新」はほぼ同じになるからです。
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="users_update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USERデータ登録</title>
  <style>label{display: block; padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Main[Start] -->
<form method="post" action="users_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>A学校：先生/学生登録</legend>
     <label>名前：<input type="text" name="name" size="20" value="<?=$res["name"]?>"></label><br>
     <label>Login ID：<input type="text" name="lid" size="20" value="<?=$res["lid"]?>"></label><br>
     <label>Login PW<input type="text" name="lpw" size="20" value="<?=$res["lpw"]?>"></label><br>
     <label>管理FLG：
      一般（学生）<input type="radio" name="kanri_flg" value="0">　
      管理者（先生）<input type="radio" name="kanri_flg" value="1">
    </label>
    <br>
     <label>在学FLG：
      在学<input type="radio" name="life_flg" value="0">　
      卒業<input type="radio" name="life_flg" value="1">
    </label>
    <input type="hidden" name="id" value="<?=$id?>">
    <br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>



