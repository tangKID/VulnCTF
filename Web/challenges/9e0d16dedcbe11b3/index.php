<html xmlns="http://www.w3.org/1999/xhtml"><!--This file has been created with toxhtml.xsl-->
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
</head>
<body>
<?php
ini_set("display_errors",0);

$uri = $_SERVER['REQUEST_URI'];  //REQUEST_URI的作用是取得当前URI，也就是除域名外后面的完整的地址路径

if(stripos($uri,".")){  //查找 "php" 在字符串中第一次出现的位置：
	die("Unkow RUI.");
}

if(!parse_url($uri, PHP_URL_HOST)){  //解析 URL，返回其组成部分
	$uri = "http://".$_SERVER['REMOTE_ADDR'].$_SERVER['REQUEST_URI'];
}

$host = parse_url($uri,PHP_URL_HOST);

if($host === "c7f.zhuque.com"){
	echo "flag{qwertyasdfgh}";
	setcookie("AuthFlag","flag{qwertyasdfgh}");
}

?>
</body>
<a href="index.txt">Source code</a>
</html>