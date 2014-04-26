<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="arc680.info">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/my_style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<title>arc680.info</title>
</head>
<body>

<?php include("navbar.php") ?>

<div class="container-fluid">
<div class="row">
<div class="col-md-2" id="menu_bar">
<?php include("menu.php") ?>
</div>
<div class="col-md-10">
<h3>プロフィール</h3>
<dl>
<dt>Name</dt>
<dd>あーく</dd>
<dt>Job</dt>
<dd>しがないエンジニアのようなもの</dd>
</dl>
<p><a class="btn btn-primary" href="./profile.php">詳しくはこちら &raquo;</a></p>
</div>
</div>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-10">
<h3>更新履歴</h3>
<!--<div class="hero-unit">-->
<?php 
include("getupdate.php");
getupdate("update.csv", 5);
?>
<!--</div>-->
</div>
</div>
</div>
</body>
</html>
