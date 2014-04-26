<?php 
include("/home/arc680/public_html/www/getrootdir.php");
$cd = getrootdir($_SERVER['SCRIPT_NAME']);
//$cd = "ababa";
//echo $cd;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $cd; ?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo $cd; ?>bootstrap/js/bootstrap.js"></script>
    <title>arc680</title>
</head>
<body>

<?php include($cd . "navbar.php"); ?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
<?php include($cd . "menu.php"); ?>
        </div>
        <div class="span10">
            <div class="row-fluid">
                <div class="span6">
                    <h2>プロフィール</h2>
                    <p>Name: あーく</p>
                    <p>Job: しがない情報系大学院生</p>
                    <p><a class="btn" href="./profile.php">詳しくはこちら &raquo;</a></p>
                </div>
                <div class="span4">
                <h2>ふぁぼふぁぼ</h2>
                    <p>ふぁぼれよ</p>
                    <p><a class="btn" href="#">(´へεへ`*) &raquo;</a></p>
                    </div>
                </div>
            </div>
		</div>
    </div>
</body>
</html>
