<!DOCTYPE html>
<html lang="zh">
<head> 
<title>Plist文件在线制作 - 工具箱 - <?php echo IN_NAME; ?> - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title> 
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
<meta name="renderer" content="webkit" /> 
<meta name="keywords" content="<?php echo IN_KEYWORDS; ?>" />
<meta name="description" content="<?php echo IN_DESCRIPTION; ?>" />
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/font.css" />
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/base.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/h5.css"/>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/vue.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/js.js"></script>
<script>        
	isHideFooter = false;
</script></head>
<body>
<?php include 'source/index/header_gongju.php'; ?>					
			</div>
            <span class="icon-menu iconfont phone-menu visible-xs"></span>
            <div class="phone-shadow"></div>
        </div>
    </div>
</header><div class="toolkit-common-wrap">
    <div class="container">
        <!--面包屑导航-->
        <div class="crumbs"><a href="/index.php/utils">工具箱</a><span>/</span>苹果Plist文件在线制作</div>
            <!--/面包屑导航-->
            <div class="toolkit-new">
                <div class="con">
                    <div class="tit">苹果Plist文件在线制作</div>
                    <form class="form-horizontal" id="plist_form" action="/source/index/ajax_utils.php?ac=plist" method="post">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><span>*</span>APP名称</label>
                            <div class="col-sm-9"><input type="text" name="app" class="form-control" placeholder="请输入您的APP名称"></div>
                            <div class="error col-sm-9 col-sm-push-3">请输入您的APP名称</div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><span>*</span>包名（Bundle ID）</label>
                            <div class="col-sm-9"><input type="text" name="bundle" class="form-control" placeholder="请输入所填写包的Bundle ID"></div>
                            <div class="error col-sm-9 col-sm-push-3">请输入所填写包的Bundle ID</div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><span>*</span>IPA下载地址</label>
                            <div class="col-sm-9"><input type="text" name="downloadLink" class="form-control" placeholder="请输入您的APP的下载链接，https://开头"></div>
                            <div class="error col-sm-9 col-sm-push-3">请输入您的APP的下载链接，https://开头</div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><span>*</span>ICON链接地址</label>
                            <div class="col-sm-9"><input type="text" name="link" class="form-control" placeholder="请输入APP ICON的链接地址"></div>
                            <div class="error col-sm-9 col-sm-push-3">请输入APP ICON的链接地址</div>
                        </div>
                        <div class="text-center"><button type="button" id="submitButton" class="ms-btn ms-btn-primary plist-submit">生成文件</button></div>
                    </form>
                </div>
                <div class="p1">
                    <span class="bold">什么是Plist文件？</span>通过Plist文件实现itms-services协议在线安装IPA，在iOS7以后，plist文件必须部署到HTTPS服务器上，才能下载IPA。
                </div>
            </div>
            <div class="con">
                <div class="list-bottom-common">
                    <div class="index-common">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="con" onclick="window.open('http://wpa.qq.com/msgrd?v=3&uin=<?php echo IN_CONTACT; ?>&site=qq&menu=yes')" style="cursor: pointer">
                                    <img src="<?php echo IN_PATH;?>index/img/icon-12.png" class="img-responsive" alt="">
                                    <h4>iOS企业证书签名</h4>
                                    <p>
                                        使用企业证书可免提交AppStore，即可安装，不限制iOS设备，不限制下载次数，无限制安装。
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="con" onclick="window.open('/index.php/apps')" style="cursor: pointer">
                                    <img src="<?php echo IN_PATH; ?>index/img/icon-13.png" class="img-responsive" alt="">
                                    <h4>APP下载</h4>
                                    <p>
                                        提供App多套下载模板，提高用户下载转化率，自动判断设备类型区分安卓或者苹果，快速无广告急速下载。
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="con" onclick="window.open('/index.php/publish')" style="cursor: pointer">
                                    <img src="<?php echo IN_PATH;?>index/img/icon-14.png" class="img-responsive" alt="">
                                    <h4>APP托管</h4>
                                    <p>
                                        一键上传App，迅速生成下载链接和二维码，立即上线，让您的App尽快与用户见面，为您提供免费、快捷的应用托管分发服务。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
<script>
$(".toolkit-new .plist-submit").click(function () {
    var appName = $("input[name=app]").val();
    var bundle = $("input[name=bundle]").val();
    var ipaLink = $("input[name=downloadLink]").val();
    var iconLink = $("input[name=link]").val();

    if (appName.length > 0) {
        $("input[name=app]").parents(".form-group").removeClass("form-error");
    } else {
        $("input[name=app]").parents(".form-group").addClass("form-error");
    }

    if (verifyBundle(bundle)) {
        $("input[name=bundle]").parents(".form-group").removeClass("form-error");
    } else {
        $("input[name=bundle]").parents(".form-group").addClass("form-error");
    }

    if (verifyUrl(ipaLink)) {
        $("input[name=downloadLink]").parents(".form-group").removeClass("form-error");
    } else {
        $("input[name=downloadLink]").parents(".form-group").addClass("form-error");
    }

    if (verifyUrl(iconLink)) {
        $("input[name=link]").parents(".form-group").removeClass("form-error");
    } else {
        $("input[name=link]").parents(".form-group").addClass("form-error");
    }

    var errorLength = $(".toolkit-new .form-error").length;
    if (errorLength == 0) {
        $("form").submit();
    }
});
</script>
  <!--底部-->
<?php include 'source/index/footer.php'; ?>
  <!--底部-->
</script>
<script type="text/javascript" src="//js.users.51.la/20124329.js"></script></body>
</html>