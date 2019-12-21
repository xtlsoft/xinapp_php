<?php
if (!defined('IN_ROOT')) {
    exit('Access denied');
}
$in_pay = empty($_COOKIE['in_adminid']) && $GLOBALS['userlogined'] && $GLOBALS['erduo_in_userid'] > 2 ? 3 : IN_PAY;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo IN_CHARSET; ?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<meta name="keywords" content="<?php echo IN_KEYWORDS; ?>">
<meta name="description" content="<?php echo IN_DESCRIPTION; ?>">
<title>签名价格 - <?php echo IN_NAME;?></title>
<link rel="stylesheet" type="text/css" href="/static/index/install/css/style.css" />
<script type="text/javascript" src="<?php echo IN_PATH; ?>static/index/main.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH; ?>static/pack/layer/jquery.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH; ?>static/pack/layer/lib.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH; ?>static/index/lib.js"></script>
<script type="text/javascript">
var in_path = '<?php echo IN_PATH; ?>';
var in_pay = <?php echo $in_pay; ?>;
</script>
</head>

	<body>
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/font.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/swiper.min.css" /> 
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/bootstrap.min.css" /> 
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/base.css" /> 
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/main.css" /> 
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/h5.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/main.css" /> 
		<?php include 'source/index/head.php'; ?>
	<div class="m-product-panel" style="background-image: url(/static/index/install/images/bg.jpg);">
		<h3 class="c-title-large light">
			<p class="c-title-main">企业签名</p>
			<small style="color:#ffffff;"><?php if(!$GLOBALS['userlogined']){echo '您登录后购买的密钥将显示在此处';}elseif(is_file(IN_ROOT.'./data/tmp/buy_key_'.$GLOBALS['erduo_in_userid'].'.txt')){echo '您最近购买的密钥为【<b style="color:#ec4242">'.file_get_contents(IN_ROOT.'./data/tmp/buy_key_'.$GLOBALS['erduo_in_userid'].'.txt').'</b>】，请及时保存或使用';}else{echo '您最近购买的密钥将显示在此处';}?>
        	</small>
		</h3>
		
		<div class="c-wrapper">
			<ul class="c-row m-product-panel-list">

				<li class="c-col6">
					<div>
						<a href="#">
							<h4 class="c-line-clamp">￥<?php echo IN_SIGN;?></h4>
							<p class="m-product-panel-list-note">包月签名</p>
							<ul class="m-product-panel-list-detail">

								<li>
									<i class="c-icon"></i><span>签名免费使用分发</span>
								</li>

								<li>
									<i class="c-icon"></i><span>联系客服增加点数即可</span>
								</li>

								<li>
									<i class="c-icon"></i><span>量大请咨询客服更优惠</span>
								</li>

							</ul>
							<p class="m-product-panel-list-button"><button onclick="buy(1)">立即购买</button></p>
						</a>
					</div>
				</li>

				<li class="c-col6 active">
					<div>
						<a href="#">
							<h4 class="c-line-clamp">￥<?php echo IN_SIGN * 3;?></h4>
							<p class="m-product-panel-list-note">包季签名</p>
							
							<ul class="m-product-panel-list-detail">

								<li>
									<i class="c-icon"></i><span>签名免费使用分发</span>
								</li>

								<li>
									<i class="c-icon"></i><span>联系客服增加点数即可</span>
								</li>

								<li>
									<i class="c-icon"></i><span>量大请咨询客服更优惠</span>
								</li>

							</ul>
							<p class="m-product-panel-list-button"><button onclick="buy(2)">立即购买</button></p>
						</a>
					</div>
				</li>

				<li class="c-col6">
					<div>
						<a href="#">
							<h4 class="c-line-clamp">￥<?php echo IN_SIGN * 12;?></h4>
							<p class="m-product-panel-list-note">包年签名</p>
							<ul class="m-product-panel-list-detail">

								<li>
									<i class="c-icon"></i><span>签名免费使用分发</span>
								</li>

								<li>
									<i class="c-icon"></i><span>联系客服增加点数即可</span>
								</li>

								<li>
									<i class="c-icon"></i><span>量大请咨询客服更优惠</span>
								</li>

							</ul>
							<p class="m-product-panel-list-button"><button onclick="buy(3)">立即购买</button></p>
						</a>
					</div>
				</li>

			</ul>

			<p class="m-product-panel-more">
				需线下付款购买，请联系QQ16644138  <!--&nbsp;<a href="mailto:<?php echo IN_MAIL; ?>"><?php echo IN_MAIL; ?></a>-->
			</p>

		</div>
	</div>
	
	<div class="dialog-mask" style="display:none"></div>
		<link href="<?php echo IN_PATH; ?>static/index/icons.css" rel="stylesheet">
<link href="<?php echo IN_PATH; ?>static/index/bootstrap.css" rel="stylesheet">
<link href="<?php echo IN_PATH; ?>static/index/main.css" rel="stylesheet">
<div id="buy-confirm-wx" class="dialog buy-confirm" style="display:none">
	<header class="text-center">微信扫码支付</header>
    <div class="content"><center><img src="<?php echo IN_PATH;?>static/index/qq/wxsk.jpg"/><imgs id="qrcode"/></center></div>
	<header class="text-center">支付成功请联系QQ或微信<br>734963311 充值</header>
	<div class="actions text-center"><button class="btn btn-yellow" style="margin-bottom:10px" onclick="location.reload()">好的</button>
		<!--button class="btn btn-default" style="margin-bottom:10px" onclick="$('.dialog-mask').hide(),$('#buy-confirm-wx').hide()">放弃购买</button><button class="btn btn-yellow" style="margin-bottom:10px" onclick="location.reload()">购买成功，立即查看</button-->
	</div>
  </div>
<div id="buy-confirm-zfb" class="dialog buy-confirm" style="display:none">
	<header class="text-center">跳转到支付宝支付</header>
	<div class="actions text-center">
		<button class="btn btn-default" style="margin-bottom:10px" onclick="$('.dialog-mask').hide(),$('#buy-confirm-zfb').hide()">放弃购买</button><button class="btn btn-yellow" style="margin-bottom:10px">立即购买</button>
	</div>
</div>
<div id="buy-confirm-mzf" class="dialog buy-confirm" style="display:none">
	<header class="text-center">选择支付方式</header>
	<div class="actions text-center">
	  <button class="btn btn-zfb" style="margin-bottom:10px">支付宝扫码购买（推荐）</button><button class="btn btn-wx" style="margin-bottom:10px">微信扫码购买</button>
      <header class="text-center">支付成功请联系QQ或微信<br>734963311 充值</header>
      <button class="btn btn-default" style="margin-bottom:10px" onclick="$('.dialog-mask').hide(),$('#buy-confirm-mzf').hide()">放弃购买</button>
	</div>
</div>

	<script src="/static/index/install/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function() {
			$('.m-product-panel-list li').hover(function() {
				$(this).addClass('active').siblings().removeClass('active');
			})
		})
	</script>
		
		
	</body>

</html>