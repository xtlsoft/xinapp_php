<?php
if (!defined('IN_ROOT')) {
    exit('Access denied');
}
if (!$GLOBALS['userlogined']) {
    exit(header('location:' . IN_PATH . 'index.php/login'));
}
$ios = $GLOBALS['db']->num_rows($GLOBALS['db']->query("select count(*) from " . tname('app') . " where in_form='iOS' and shan=0 and in_uid=" . $GLOBALS['erduo_in_userid']));
$android = $GLOBALS['db']->num_rows($GLOBALS['db']->query("select count(*) from " . tname('app') . " where in_form='Android' and shan=0 and in_uid=" . $GLOBALS['erduo_in_userid']));
$home = explode('/', $_SERVER['PATH_INFO']);
$string = isset($home[2]) ? $home[2] : NULL;
if (empty($string)) {
    $query = $GLOBALS['db']->query("select * from " . tname('app') . " where in_uid=" . $GLOBALS['erduo_in_userid'] . " and shan=0 order by in_addtime desc");
} elseif (is_numeric($string)) {
    $form = $string == 1 ? 'iOS' : 'Android';
    $query = $GLOBALS['db']->query("select * from " . tname('app') . " where in_form='" . $form . "' and in_uid=" . $GLOBALS['erduo_in_userid'] . " and shan=0 order by in_addtime desc");
} else {
    $key = SafeSql(trim(is_utf8($string)));
    $query = $GLOBALS['db']->query("select * from " . tname('app') . " where in_name like '%" . $key . "%' and in_uid=" . $GLOBALS['erduo_in_userid'] . " and shan=0 order by in_addtime desc");
}
$ron = $GLOBALS['db']->getrow("select * from " . tname('user') . " where in_userid=".$GLOBALS['erduo_in_userid']);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta charset="<?php echo IN_CHARSET;?>">
<title>我的应用 - <?php echo IN_NAME;?></title>
<link href="<?php echo IN_PATH;?>static/index/icons.css" rel="stylesheet">
<link href="<?php echo IN_PATH;?>static/index/bootstrap.css" rel="stylesheet">
<link href="<?php echo IN_PATH;?>static/index/manage.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo IN_PATH;?>static/pack/layer/jquery.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/pack/layer/confirm-lib.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/index/uploadify.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/index/profile.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>static/index/drop.js"></script>
</head>
<body>  
<script type="text/javascript">
var in_path = '<?php echo IN_PATH;?>';
var in_time = '<?php echo $GLOBALS['erduo_in_userid'].'-'.time(); ?>';
var in_upw = '<?php echo $GLOBALS['erduo_in_userpassword'];?>';
var in_uid = <?php echo $GLOBALS['erduo_in_userid'];?>;
var in_id = 0;
var in_size = '<?php echo '500';//intval(ini_get('upload_max_filesize'));?>';
var remote = {'open':'<?php echo IN_REMOTE;?>','dir':'<?php echo IN_REMOTEPK;?>','version':'<?php echo version_compare(PHP_VERSION,'5.5.0');?>'};
layer.use('confirm-ext.js');
</script>
<div class="navbar-wrapper ng-scope">
	<div class="ng-scope">
		<div class="navbar-header-wrap">
			<div class="middle-wrapper">
				<sidebar class="avatar-dropdown">
				<img class="img-circle" src="<?php echo getavatar($GLOBALS['erduo_in_userid']);?>">
				<div class="name"><span class="ng-binding"><?php echo $ron['in_nick'];//substr($GLOBALS['erduo_in_username'],0,strpos($GLOBALS['erduo_in_username'],'@'));?></span></div>
				<div class="email"><span class="ng-binding"><?php echo $GLOBALS['erduo_in_username'];?></span></div>
				<div class="dropdown-menus">
					<ul>
						<li><a href="<?php echo IN_PATH.'index.php/profile_info';?>" class="ng-binding">个人资料</a></li>
						<li><a href="<?php echo IN_PATH.'index.php/profile_pwd';?>">修改密码</a></li>
						<li><a href="<?php echo IN_PATH.'index.php/profile_verify';?>">实名认证</a></li>
						<li><a href="<?php echo IN_PATH.'index.php/logout';?>" class="ng-binding">退出</a></li>
					</ul>
				</div>
				</sidebar>
				<nav>
				<h1 class="navbar-title logo"><span onclick="location.href='<?php echo IN_PATH;?>'"><?php echo IN_NAME;//$_SERVER['HTTP_HOST'];?></span></h1>
				<i class="icon-angle-right"></i>
				<div class="navbar-title primary-title"><a href="<?php echo IN_PATH.'index.php/home';?>" class="ng-binding">我的应用</a></div>
				</nav>
			</div>
		</div>
		<div class="pop-up-mask apitoken;height:800px;" style="display:none"></div>
		<div class="pop-up-layer ng-scope" style="display:none">
			<div class="apitoken-win ng-scope">
				<h2 class="apitoken-title">已用：<?php echo formatsize($GLOBALS['erduo_in_spaceuse']);?></h2>
				<h2 class="apitoken-title">总量：<?php echo $GLOBALS['erduo_in_spacetotal'] >0 ?$GLOBALS['erduo_in_spacetotal'] / 1048576 : 0;?> MB ≈ <?php echo formatsize($GLOBALS['erduo_in_spacetotal']);?></h2>
				<div class="apitoken-desc">每 <big style="color:#f87335">MB</big> 扩充需扣除 <big style="color:#f87335"><?php echo IN_SPACEPOINTS;?></big> 下载点数</div>
				<div class="apitoken-action"><a class="apitoken-build rounded ng-hide" style="cursor:pointer" onclick="add_space(0, 0)">扩充容量</a></div>
				<i class="icon-cross" onclick="$('.pop-up-mask').hide(),$('.pop-up-layer').hide()"></i>
			</div>
		</div>
	</div>
</div>
<div class="ng-scope" id="dialog-uploadify" style="display:none">
	<div class="upload-modal-mask ng-scope"></div>
	<div class="upload-modal-container ng-scope">
		<div class="flip-container flip">
			<div class="modal-backend plane-ready upload-modal">
				<div class="btn-close" onclick="location.reload()"><i class="icon-cross"></i></div>
				<div class="plane-wrapper">
					<img class="plane" src="<?php echo IN_PATH;?>static/index/plane.svg">
					<div class="rotate-container">
						<img class="propeller" src="<?php echo IN_PATH;?>static/index/propeller.svg">
					</div>
				</div>
				<div class="progress-container">
					<p class="speed ng-binding" id="speed-uploadify"></p>
					<p class="turbo-upload"></p>
					<div class="progress">
						<div class="growing" style="width:0%"></div>
					</div>
				</div>
				<div class="redirect-tips ng-binding" style="display:none">正在解析应用，请稍等...</div>
			</div>
		</div>
	</div>
</div>
<section class="ng-scope">
<div class="page-apps ng-scope">
	<div class="middle-wrapper">
		<div class="filter-group">
			<div class="filter-set">
				<span class="filter<?php if($string == 1){echo ' active';}?>" onclick="location.href='<?php echo IN_PATH.'index.php/home/1';?>'"><i class="icon-apple"></i></span>
				<i class="split"></i>
				<span class="filter<?php if($string == 2){echo ' active';}?>" onclick="location.href='<?php echo IN_PATH.'index.php/home/2';?>'"><i class="icon-android"></i></span>
			</div>
			<div class="search-form">
				<i class="icon-search" onclick="s_earch()"></i>
				<input type="text" id="k_eyword" onkeydown="if(event.keyCode==13){s_earch()}" placeholder="输入名称搜索">
			</div>
			<div class="surplus-wrap">
				<div class="surplus"> 
				    <div class="apps-app-security">
                        <div class="btn-invite-member" style="margin-left:5px;border:1px solid red;color:#000fff">
                          <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo QQHAO;?>&site=qq&menu=yes" target="view_window"><font color="red">有任何问题点此联系站长</font></a>
                        </div>
                    </div>
					<div class="surplus-card">
						<div class="name"><span>剩余下载点数</span></div>
						<div class="value"><span class="ng-binding"><?php echo $GLOBALS['erduo_in_points'];?></span></div>
					</div>
					<div class="surplus-card">
						<div class="name">购买点数包</div>
						<button type="button" onclick="location.href='<?php echo IN_PATH.'index.php/install';?>'" class="btn action"><i class="icon icon-cart"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-apps-top">
			<div class="col-xs-2">
				<a href="<?php echo IN_PATH.'index.php/home/1';?>" class="banner-column">
					<div class="font-en">iOS应用</div>
					<div><?php echo $ios;?></div>
				</a>
			</div>
			<div class="col-xs-2">
				<a href="<?php echo IN_PATH.'index.php/home/2';?>" class="banner-column">
					<div class="font-en">Android应用</div>
					<div><?php echo $android;?></div>
				</a>
			</div>
			<div class="col-xs-2">
				<a class="banner-column" style="cursor:pointer" onclick="$('.pop-up-mask').show(),$('.pop-up-layer').show()">
					<div class="font-en">已用容量</div>
					<div style="font-weight:bold"><?php echo $GLOBALS['erduo_in_spaceuse'] >0 ?round($GLOBALS['erduo_in_spaceuse'] / $GLOBALS['erduo_in_spacetotal'] * 100,2) : 0;?>%</div>
				</a>
			</div>
			<div class="col-xs-2">
				<a href="<?php echo IN_PATH.'index.php/profile_verify';?>" class="banner-column">
					<div class="font-en">实名认证</div>
					<div style="font-weight:bold"><?php echo $GLOBALS['erduo_in_verify'] >0 ?$GLOBALS['erduo_in_verify'] >1 ?'审核中': '已认证': '未认证';?></div>
				</a>
			</div>
			<div class="col-xs-3">
                <a class="banner-column" style="cursor:pointer">
					<div class="font-en">单文件允许上传</div>
					<div>500 MB</div>
              </a>
			</div>
		</div>
	</div>
	<div class="middle-wrapper container-fluid">
		<div class="apps row">
			<upload-card class="components-upload-card col-xs-4 col-sm-4 col-md-4 app-animator">
			<div class="card text-center">
				<input type="file" id="upload_app" onchange="upload_app()" style="display:none">
				<div class="dashed-space" onclick="$('#upload_app').click()">
					<table><tbody><tr><td>
						<i class="icon-upload-cloud2"></i>
						<div class="text drag-state"><span id="_drop1">点击这里上传<br>或拖拽文件到这里上传<br>{ ipa，apk }</span><span id="_drop2"></span></div>
					</td></tr></tbody></table>
				</div>
			</div>
			<div class="upload-guied"<?php if(!$ios &&!$android){ echo 'style="display:block"'; }?>>
				<span class="ng-scope">在这里上传你的第一个应用</span>
				<img src="<?php echo IN_PATH;?>static/index/arrow.png">
			</div>
			</upload-card>
          <?php
while ($row = $GLOBALS['db']->fetch_array($query)) {
    $class = ($row['in_form'] == 'iOS'|| $row['in_form'] == 'mobileconfig') ? 'icon-apple' : 'icon-android';
    echo '<div class="col-xs-4 col-sm-4 col-md-4 app-animator ng-scope"><div class="card app card-ios">';
    echo '<i class="type-icon ' . $class . '"></i><div class="type-mark"></div>';
    echo '<a class="appicon" href="' . IN_PATH . 'index.php/each_app/' . $row['in_id'] . '"><img class="icon ng-isolate-scope" width="100" height="100" src="' . geticon($row['in_icon']) . '" onerror="this.src=\'' . IN_PATH . 'static/app/' . $row['in_form'] . '.png\'"></a>';
    if ($row['in_kid']) {
        echo '<div class="combo-info ng-scope"><i class="icon-combo"></i><img class="icon ng-isolate-scope" width="45" height="45" src="' . geticon(getfield('app', 'in_icon', 'in_id', $row['in_kid'])) . '" onerror="this.src=\'' . IN_PATH . 'static/app/' . getfield('app', 'in_form', 'in_id', $row['in_kid']) . '.png\'"></div>';
    }
    echo '<br><p class="appname"><i class="icon-owner"></i><span class="ng-binding">' . $row['in_name'] . '</span></p>';
    echo '<table><tbody>';
    if (IN_SIGN && $row['in_form'] == 'iOS') {
        echo '<tr><td class="ng-binding">签名期限：</td><td><span class="ng-binding"><a href="' . IN_PATH . 'index.php/sign_app/' . $row['in_id'] . '">' . ($row['in_sign'] ? date('Y-m-d H:i:s', $row['in_sign']) : '未开通') . '</a></span></td></tr>';
    }// else {
        echo '<tr><td class="ng-binding">应用大小：</td><td><span class="ng-binding">' . formatsize($row['in_size']) . '</span></td></tr>';
   // }
    echo '<tr><td class="ng-binding">应用平台：</td><td><span class="ng-binding">' . $row['in_form'] . '</span></td></tr>';
    echo '<tr><td class="ng-binding">应用标识：</td><td><span class="ng-binding">' . $row['in_bid'] . '</span></td></tr>';
    echo '<tr><td class="ng-binding">最新版本：</td><td><span class="ng-binding">' . $row['in_bsvs'] . '（Build ' . $row['in_bvs'] . '）</span></td></tr>';
    echo '</tbody></table>';
    echo '<div class="action"><a class="ng-binding" href="' . IN_PATH . 'index.php/profile_app/' . $row['in_id'] . '"><i class="icon-pen"></i> 管理</a><a href="' . getlink($row['in_id']) . '" target="_blank" class="ng-binding"><i class="icon-eye"></i> 预览</a><button class="btn btn-remove ng-scope" onclick="del_app(' . $row['in_id'] . ', 1)"><i class="icon icon-trash"></i></button></div>';
    echo '</div></div>';
}?>
</div>
</div>
</div>
</section>
<?php if(IN_VERIFY >0 &&$GLOBALS['erduo_in_verify'] <1){?>
  <div class="alert-bar">
	<div class="action close_bar" onclick="$('.alert-bar').hide()"></div>
	<div class="inner"><p class="ng-binding">应上级要求，未实名认证用户无法上传应用<a href="<?php echo IN_PATH.'index.php/profile_verify';?>" class="btn btn-lemon" style="margin-left:20px">马上认证</a></p></div>
</div><?php } include 'source/index/bottom.php';?>
</body>
</html>
