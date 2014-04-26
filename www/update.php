<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/my_style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <title>Update</title>
</head>
<body>

<?php include("navbar.php") ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="menu_bar">
<?php include("menu.php") ?>
        </div>
        <div class="col-md-10">
            <h3>更新履歴</h3>
            <!--<div class="hero-unit">-->
<?php 
include("getupdate.php");
getupdate("update.csv", 0);
?>
            <!--</div>-->
        </div>
    </div>
</div>
</body>
</html>
