<html>
<head>
<meta charset="utf-8">
<title>POST(受信)</title>
</head>
<body>
お名前: <?php eho h($name) ;?>
EMAIL: <?php eho h($mail) ;?>
<?php
   if(flg == 0){
    ?>
      <botton>登録</botton>
    <?php   
   }
?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>