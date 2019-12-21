<?php
 if(!defined('IN_ROOT')){exit('Access denied');}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo IN_CHARSET;?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<meta name="keywords" content="<?php echo IN_KEYWORDS;?>">
<meta name="description" content="<?php echo IN_DESCRIPTION;?>">
<title>立即登录 - <?php echo IN_NAME;?></title>
<link rel="stylesheet" type="text/css" href="/static/index/login/css/index.css" />
<script type="text/javascript" src="<?php echo IN_PATH;?>static/index/lib.js"></script>
<script type="text/javascript">
var in_path = '<?php echo IN_PATH;?>';
var home_link = '<?php echo IN_PATH.'index.php/home';?>';
</script>
</head>

<body>

<img class="bgone" src="/static/index/login/img/1.jpg" />
<img class="pic" src="/static/index/login/img/a.png" />

<div class="table">
	<div class="wel"><?php echo IN_NAME;//$_SERVER['HTTP_HOST'];?></div>
	<div class="wel1">您的专业APP分发</div>
	
	<form class="form-float-label" onsubmit="login();return false">
		<div class="alert-warning hidden" id="alert-warning"></div>
		<!--<ul class="user" style="top:100px;"><li style="color:#e2644c;">222ss</li></ul>-->
		<div class="user">
			<div id="yonghu" style=""><img src="/static/index/login/img/yhm.png" /></div>
			<input type="text"  id="mail" placeholder="邮箱" />
		</div>
	<!--	<ul class="password" style="top:180px;"><li style="color:#e2644c;">22333</li></ul>-->
		<div class="password">
			<div id="yonghu"><img src="/static/index/login/img/mm.png" /></div>
			<input type="password" id="pwd" placeholder="密码"/>
		</div>

		<button type="submit" class="btn btn-block btn-primary">立即登录</button>
	</form>
</div>

</body>
</html>