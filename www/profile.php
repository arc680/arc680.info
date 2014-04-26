<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/my_style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Profile</title>
</head>
<body>
<!-- バーのところ -->
<?php include("navbar.php") ?>

    <!-- メインのところ -->
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
                   <dt>Interest</dt>
                        <dd>Linux，mikutter，プログラミング</dd>
                </dl>
            </div>
        </div>
    </div>
</body>
</html>
