<?php
if (!defined('IN_ROOT')) {
    exit('Access denied');
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="<?php echo IN_CHARSET;?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<meta name="keywords" content="<?php echo IN_KEYWORDS;?>">
<meta name="description" content="<?php echo IN_DESCRIPTION;?>">
<title>封装价格 - <?php echo IN_NAME;?></title>
<link href="<?php echo IN_PATH;?>static/index/icons.css" rel="stylesheet">
<link href="<?php echo IN_PATH;?>static/index/bootstrap.css" rel="stylesheet">
<link href="<?php echo IN_PATH;?>static/index/main.css" rel="stylesheet">
<link href="<?php echo IN_PATH;?>static/pack/colpick/colpick.css" rel="stylesheet">
<link href="<?php echo IN_PATH;?>static/pack/webview/manage.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo IN_PATH;?>static/index/main.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/pack/layer/jquery.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/pack/layer/lib.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/pack/colpick/colpick.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/pack/webview/lib.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/pack/mobileconfig/lib.js"></script>
<script type="text/javascript">
var in_path = '<?php echo IN_PATH;?>';
var in_login = <?php echo $GLOBALS['userlogined'] ?'1': '-1';?>;
function change(type) {
    if (type == 1) {
        $("#webview").hide();
        $("#mobileconfig").show();
    } else {
        $("#webview").show();
        $("#mobileconfig").hide();
    }
}
</script>
</head>
<body class="page-Pricing">

<div id="root-packages">
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/font.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/swiper.min.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/base.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/main.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/h5.css" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/main.css" />
		<?php include 'source/index/head.php'; ?>
	<div class="section packages-content">
		<section class="ng-scope">
		<div class="page-app app-info">
			<div class="ng-scope">
				<div class="page-tabcontent apps-app-info">
					<div class="middle-wrapper">
						<div class="app-info-form">
							<div class="field app-name">
								<div class="value">
									<input type="radio" name="mc_type" onclick="change(0)" checked>&nbsp;标准封装&nbsp;&nbsp;
									<input type="radio" name="mc_type" onclick="change(1)">&nbsp;免签封装
								</div>
							</div>
						</div>
						<div class="app-info-form" id="webview">
							<div class="field app-name">
								<div class="value">
									<input type="text" placeholder="应用名称" id="in_title">
								</div>
							</div>
							<div class="field app-name">
								<div class="value">
									<input type="text" placeholder="域名地址" id="in_url" onkeyup="if(!value.match(/^https?:///)){value='http://'+value}" onblur="if(!value.match(/^https?:///)){value='http://'+value}">
								</div>
							</div>
							<div class="field app-name">
								<div class="value">
									<input type="text" placeholder="顶部颜色" id="in_b_color" onmousedown="$(this).colpick({layout:'hex',submit:0,colorScheme:'dark',onChange:function(hsb,hex,rgb,el,bySetColor){if(!bySetColor)$(el).val(hex);}}).keyup(function(){$(this).colpickSetColor(this.value);})" onkeyup="value=value.replace(/[W|_]/g,'')" onblur="value=value.replace(/[W|_]/g,'')">
								</div>
							</div>
							<div class="field app-name">
								<div class="value">
									<input type="text" placeholder="标题颜色" id="in_t_color" onmousedown="$(this).colpick({layout:'hex',submit:0,colorScheme:'dark',onChange:function(hsb,hex,rgb,el,bySetColor){if(!bySetColor)$(el).val(hex);}}).keyup(function(){$(this).colpickSetColor(this.value);})" onkeyup="value=value.replace(/[W|_]/g,'')" onblur="value=value.replace(/[W|_]/g,'')">
								</div>
							</div>
							<div class="field app-short">
								<div class="value">
									<div class="apps-app-security" id="preview_a_icon">
										<input type="file" id="upload_a_icon" onchange="upload_a_icon()" style="display:none">
										<div class="btn-invite-member"  id="tips_a_icon" onclick="$('#upload_a_icon').click()">上传应用图标</div>
									</div>
								</div>
							</div>
							<div class="field app-short">
								<div class="value">
									<div class="apps-app-security" id="preview_l_image">
										<input type="file" id="upload_l_image" onchange="upload_l_image()" style="display:none">
										<div class="btn-invite-member" id="tips_l_image" onclick="$('#upload_l_image').click()">上传启动图片</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="field actions">
								<div class="value">
									<button class="save ng-binding" onclick="web_view()">一键封装</button>
								</div>
							</div>
						</div>
						<div class="app-info-form" id="mobileconfig" style="display:none">
							<div class="field app-name">
								<div class="value">
									<input type="text" placeholder="应用名称" id="mc_title">
								</div>
							</div>
							<div class="field app-name">
								<div class="value">
									<input type="text" placeholder="域名地址" id="mc_url" onkeyup="if(!value.match(/^https?:///)){value='http://'+value}" onblur="if(!value.match(/^https?:///)){value='http://'+value}">
								</div>
							</div>
							<div class="field app-short">
								<div class="value">
									<div class="apps-app-security" id="preview_mc_a_icon">
										<input type="file" id="upload_mc_a_icon" onchange="upload_mc_a_icon()" style="display:none">
										<div class="btn-invite-member"  id="tips_mc_a_icon" onclick="$('#upload_mc_a_icon').click()">上传应用图标</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="field actions">
								<div class="value">
									<button class="save ng-binding mc-btn" onclick="mobile_config()">一键封装</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
	</div>
	<div class="section packages-cert">
		<div class="cert-header">
			<i class="icon-users"></i>
		</div>
		<div class="cret-row-wrap">
			<div class="cert-row">
				<div class="half text-right">
					<div class="cert-item">封装方式</div>
					<ul class="list-unstyled cert-list">
						<li>WAP网站生成APP应用</li>
						<li>我的应用中预览</li>
					</ul>
				</div>
				<div class="half text-left">
					<div class="cert-item">收费方式</div>
					<ul class="list-unstyled cert-list">
						<li>单次扣除 <?php echo IN_WEBVIEWPOINTS;?> 下载点数</li>
						<li>购买点数包获取</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include 'source/index/faq.php';?>
  </div>
<?php include 'source/index/bottom.php';?></body>
</html>
