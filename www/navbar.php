<?php
//include("/home/arc680/public_html/www/getrootdir.php");
//$cd = getrootdir($_SERVER['SCRIPT_NAME']);
//echo $cd;
// 階層が変わったら，その階層用のナビゲーションバーを作成しよう
$filename = basename($_SERVER['SCRIPT_NAME']);
$pagelist = array(
    "index.php" => "Home",
    "profile.php" => "Profile",
    "update.php" => "Update"
);
?>
<!-- ナビゲーションバー -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://arc680.info">arc680.info</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
<?php
foreach($pagelist as $name => $title) {
    $str = "                    <li";
    if($filename == $name) {
        $str = $str . " class=\"active\"";
    }
    $str = $str . "><a href=\"";
    if($name == "index.php") {
        $str = $str . $cd . "./";
    } else {
        $str = $str . $cd . $name;
    }
    $str = $str . "\">" . $title . "</a></li>\n";
    print $str;
}
?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
