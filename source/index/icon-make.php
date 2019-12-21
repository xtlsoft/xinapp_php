<!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
<meta name="keywords" content="<?php echo IN_KEYWORDS; ?>" />
<meta name="description" content="<?php echo IN_DESCRIPTION; ?>" />
<title>APP图标在线制作 - 工具箱 - <?php echo IN_NAME; ?> - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>
<link rel="stylesheet" href="<?php echo IN_PATH;?>index/css/font.css" />
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/spectrum.css" />
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo IN_PATH;?>index/css/h5.css" />
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/vue.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/js.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/spectrum.js"></script>
<script type="text/javascript" src="<?php echo IN_PATH;?>index/js/jquery.lazyload.js"></script>
<script>        
	isHideFooter = false;
</script>
</head>
<body>
<?php include 'source/index/header_gongju.php'; ?>
<span class="icon-menu iconfont phone-menu visible-xs"></span>
<div class="phone-shadow"></div>
<script src="<?php echo IN_PATH;?>index/js/html2canvas.js"></script>
<script src="<?php echo IN_PATH;?>index/js/canvas2image.js"></script>
<div class="toolkit-common-wrap">
<div class="container">

<div class="crumbs"><a href="/index.php/utils">工具箱</a><span>/</span>图标制作</div>

<div class="toolkit-make-icon">
<div class="make-icon">
<div class="clearfix row">
<div class="col-sm-3">
<div class="m-left">
<div class="m-tit">预览效果</div>
<div id="iconPreview" class="m-icon" style="background-image: url(/img/m-0.png);">
<div class="m-icon-con">
<div class="i-name1"></div>
<img src="/img/make/0.png">
<div class="i-name2"></div>
</div>
<div class="m-name"></div>
</div>
</div>
</div>
<div class="col-sm-9">
<div class="m-right">
<div class="m-tit">图标背景色</div>
<div class="icon-bg">
<dl class="clearfix m-icon-bg1">
<dt class="fl">背景图色值</dt>
<dd class="fl">
<input type="text" id="colorPicker6">
</dd>
</dl>
<dl class="clearfix m-icon-bg2">
<dt class="fl">背景图效果</dt>
<dd class="fl">
<ul class="clearfix small-bg-list">
<li class="active" data-bg="0" data-container="body" data-toggle="popover" data-placement="bottom" data-content="纯色" data-trigger="hover">
<div class="small-bg">
<img src="/img/m-0.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="1" data-container="body" data-toggle="popover" data-placement="top" data-content="菱形" data-trigger="hover">
<div class="small-bg">
<img src="/img/m-1.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="2" data-container="body" data-toggle="popover" data-placement="bottom" data-content="不规则" data-trigger="hover">
<div class="small-bg">
<img src="/img/m-2.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="3" data-container="body" data-toggle="popover" data-placement="top" data-content="同心圆" data-trigger="hover">
<div class="small-bg"><img src="/img/m-3.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="4" data-container="body" data-toggle="popover" data-placement="bottom" data-content="斜线" data-trigger="hover">
<div class="small-bg"><img src="/img/m-4.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="5" data-container="body" data-toggle="popover" data-placement="top" data-content="六边形" data-trigger="hover">
<div class="small-bg"><img src="/img/m-5.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="6" data-container="body" data-toggle="popover" data-placement="bottom" data-content="箭头" data-trigger="hover">
<div class="small-bg"><img src="/img/m-6.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="7" data-container="body" data-toggle="popover" data-placement="top" data-content="五角星" data-trigger="hover">
<div class="small-bg"><img src="/img/m-7.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="8" data-container="body" data-toggle="popover" data-placement="bottom" data-content="旋转" data-trigger="hover">
<div class="small-bg"><img src="/img/m-8.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
<li data-bg="9" data-container="body" data-toggle="popover" data-placement="top" data-content="对角线" data-trigger="hover">
<div class="small-bg">
<img src="/img/m-9.png" class="img-responsive">
</div>
<span class="icon icon-checkbox-small"></span>
</li>
</ul>
</dd>
</dl>
</div>
<div class="foreground-map">
<div class="m-tit">前景图</div>
<div class="f-tab">
<ul class="tab clearfix">
<li class="active">使用图形</li>
<li>使用文字</li>
</ul>
<div class="tab-con">
<div class="tab1" style="display: block;">
<div class="form-horizontal">
<div class="form-group">
<label class="col-sm-2 control-label">选择图形</label>
<div class="col-sm-10">
<div>

<ul class="clearfix icons-ul">
<li data-icon="0">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/0.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="1">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/1.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="2">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/2.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="3">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/3.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="4">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/4.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="5">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/5.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="6">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/6.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="7">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/7.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="8">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/8.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="9">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/9.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="10">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/10.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="11">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/11.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="12">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/12.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="13">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/13.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
 <li data-icon="14">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/14.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="15">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/15.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="16">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/16.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="17">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/17.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="18">
 <div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/18.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="19">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/19.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="20">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/20.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="21">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/21.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="22">
<div class="t-con">
 <img src="/img/loading.gif" data-original="/img/make/22.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="23">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/23.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="24">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/24.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="25">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/25.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="26">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/26.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="27">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/27.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="28">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/28.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="29">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/29.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="30">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/30.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="31">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/31.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="32">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/32.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="33">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/33.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="34">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/34.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="35">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/35.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="36">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/36.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="37">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/37.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="38">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/38.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
 <li data-icon="39">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/39.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="40">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/40.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="41">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/41.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="42">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/42.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="43">
 <div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/43.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="44">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/44.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="45">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/45.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="46">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/46.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="47">
<div class="t-con">
 <img src="/img/loading.gif" data-original="/img/make/47.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="48">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/48.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="49">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/49.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="50">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/50.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="51">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/51.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="52">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/52.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="53">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/53.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="54">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/54.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="55">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/55.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="56">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/56.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="57">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/57.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="58">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/58.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="59">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/59.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="60">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/60.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="61">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/61.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="62">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/62.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="63">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/63.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
 <li data-icon="64">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/64.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="65">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/65.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="66">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/66.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="67">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/67.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="68">
 <div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/68.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="69">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/69.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="70">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/70.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="71">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/71.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="72">
<div class="t-con">
 <img src="/img/loading.gif" data-original="/img/make/72.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="73">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/73.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="74">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/74.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="75">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/75.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="76">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/76.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="77">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/77.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="78">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/78.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="79">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/79.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="80">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/80.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="81">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/81.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="82">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/82.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="83">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/83.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="84">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/84.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="85">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/85.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="86">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/86.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="87">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/87.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="88">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/88.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
 <li data-icon="89">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/89.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="90">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/90.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="91">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/91.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="92">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/92.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="93">
 <div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/93.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="94">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/94.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="95">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/95.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="96">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/96.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="97">
<div class="t-con">
 <img src="/img/loading.gif" data-original="/img/make/97.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="98">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/98.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
<li data-icon="99">
<div class="t-con">
<img src="/img/loading.gif" data-original="/img/make/99.png" class="img-responsive">
<span class="icon icon-checkbox-small"></span>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">前景图位置</label>
<div class="col-sm-10">
<ul class="prospects">
<li data-p="0"><span class="icon icon-radio icon-radio-checked"></span>居中
</li>
<li data-p="1"><span class="icon icon-radio"></span>居上</li>
<li data-p="2"><span class="icon icon-radio"></span>居下</li>
</ul>
</div>
</div>
<div class="form-group written-content">
 <label class="col-sm-2 control-label">文字内容</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="最多支持5个字以内的中文字，或者10个以内的字母/数字">
</div>
<div class="error col-sm-10 col-sm-push-2">
最多支持5个字以内的中文字，或者10个以内的字母/数字
</div>
</div>
<div class="form-group text-color">
<label class="col-sm-2 control-label">文字颜色</label>
<div class="col-sm-10">
<input type="text" id="colorPicker8">
</div>
</div>
</div>
</div>
<div class="tab2">
<div class="form-horizontal">
<div class="form-group edit-text">
<label class="control-label col-sm-2">编辑文字</label>
<div class="col-sm-6">
<input type="text" name="editText" class="form-control" placeholder="请输入1-12个字符，支持英文/字母/数字">
<div class="error">输入1个或2个字符，支持中文/字母/数字</div>
</div>
</div>
<div class="form-group set-text-color">
<label class="control-label col-sm-2">文字颜色</label>
<div class="col-sm-6">
<input type="text" id="colorPicker7">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="m-tit">形状选择</div>
<ul class="m-icon-radio clearfix shape-choose">
<li class="active">方角图标<span class="icon-checkbox-small icon"></span></li>
<li>圆角图标<span class="icon-checkbox-small icon"></span></li>
</ul>
<div class="m-tit">格式选择</div>
<ul class="m-icon-radio clearfix format-choose">
<li data-value="jpg">JPG格式<span class="icon-checkbox-small icon"></span></li>
<li class="active" data-value="png">PNG格式<span class="icon-checkbox-small icon"></span></li>
</ul>
<div class="m-tit img-size-tit">选择下方图片尺寸，点击下载</div>
<dl class="clearfix img-size" style="margin-top: 5px;">

<dd data-value="16"><span class="iconfont icon-download font20 color-hover"></span>16*16</dd>
<dd data-value="44"><span class="iconfont icon-download font20  color-hover"></span>44*44</dd>
<dd data-value="66"><span class="iconfont icon-download font20 color-hover"></span>66*66</dd>
<dd data-value="114"><span class="iconfont icon-download font20 color-hover"></span>114*114</dd>
<dd data-value="180"><span class="iconfont icon-download font20 color-hover"></span>180*180</dd>
<dd data-value="1024"><span class="iconfont icon-download font20 color-hover"></span>1024*1024</dd>
</dl>
</div>
<div class="text-center">
<input type="hidden" name="image-content">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="view"></div>
<script>
    $(function () {
        Layout.initToolkit();
    });
    var canvasWidth = 360;
    var canvasHeight = 360;
    $(".toolkit-common-wrap .icon-download").parent().on('click', function () {
        main.init();
        canvasWidth = $(this).data('value');
        canvasHeight = $(this).data('value');
    });

    var main = {
        init: function () {
            main.setListener();
        },
        //設置監聽事件
        setListener: function () {
            main.html2Canvas();
        },
        //獲取像素密度
        getPixelRatio: function (context) {
            var backingStore = context.backingStorePixelRatio ||
                context.webkitBackingStorePixelRatio ||
                context.mozBackingStorePixelRatio ||
                context.msBackingStorePixelRatio ||
                context.oBackingStorePixelRatio ||
                context.backingStorePixelRatio || 1;
            return (window.devicePixelRatio || 1) / backingStore;
        },
        //繪製dom 元素，生成截圖canvas
        html2Canvas: function () {
            var shareContent = document.getElementById("iconPreview");// 需要繪製的部分的 (原生）dom 對象 ，注意容器的寬度不要使用百分比，使用固定寬度，避免縮放問題
            var width = shareContent.offsetWidth;  // 獲取(原生）dom 寬度
            var height = shareContent.offsetHeight; // 獲取(原生）dom 高
            var offsetTop = shareContent.offsetTop + 999;  //元素距離頂部的偏移量

            var canvas = document.createElement('canvas');  //創建canvas 對象
            var context = canvas.getContext('2d');
            var scaleBy = main.getPixelRatio(context);  //獲取像素密度的方法 (也可以採用自定義縮放比例)
            canvas.width = width * scaleBy + 999;   //這裏 由於繪製的dom 為固定寬度，居中，所以沒有偏移
            canvas.height = (height + offsetTop) * scaleBy;  // 注意高度問題，由於頂部有個距離所以要加上頂部的距離，解決圖像高度偏移問題
            context.scale(scaleBy, scaleBy);

            var opts = {
                // 允許加載跨域的圖片
                useCORS: true,
                tainttest: true, //檢測每張圖片都已經加載完成
                scale: scaleBy, // 添加的scale 參數
                canvas: canvas, //自定義 canvas
                logging: false, //日誌開關，發佈的時候記得改成false
                width: width, //dom 原始寬度
                height: height //dom 原始高度
            };
            html2canvas(shareContent, opts).then(function (canvas) {
                var type = $(".format-choose li.active").data('value');
                console.info(type);
                Canvas2Image.saveAsImage(canvas, canvasWidth, canvasHeight, type, canvasWidth + 'x' + canvasHeight);
            });
        }
    };
    if (!isHideFooter) {
        $('.right-float-window').show();
    }

    $(function () {

        $("body").on('click', '.fail-pay', function () {
            $(".pay-money a:last").removeClass("disabled");
            $(".pay-money a:last").addClass("toPay");
        });
        $("body").on('click', '.complete-pay', function () {
            $(".toPay").removeClass('disabled');
            order_sn = $('#myModalPay').find('input[name="order_sn"]').val();
            if (!order_sn) {
                $('#myModalPay').modal('hide');
                return;
            }

            $.post('/order/check-pay', {order_sn: order_sn}, function (result) {
                if (result.code != 200) {
                    $('#myModalPay').modal('hide');
                } else {
                    if (result.data.service_type == 3 || result.data.service_type == 4) {
                        window.location.href = '/publish';
                    } else if (result.data.service_type == 2) {
                        window.location.href = '/sign/upload?step=4&sign_id=' + result.data.goods_id;
                    } else if (result.data.service_type == 1) {
                        window.location.href = '/pack?step=5&id=' + result.data.goods_id;
                    } else if (result.data.service_type == 5) {
                        window.location.href = '/user/order';
                    }

                }
            })

        });

 

        var num = 3;
        var linkTime = null;
        clearInterval(linkTime);

        function linkfun() {
            if ($("#paySuccessModal").is(":visible")) {
                $("#paySuccessModal a").text('确定（' + num + ')');
                num--;
                if (num <= 0) {
                    var href = $("#paySuccessModal a").attr('href');
                    window.location.href = href;
                }
            }
        }

        linkTime = setInterval(linkfun, 1000);

        $.post("/user/messages/dialog", function (data) {
            if(data.code == 200 && data.data) {
                console.log(data.data.message);
                Modal.generalModal({
                    backdrop: false, // 点击阴影是否关闭弹窗， // true 开启； false 关闭
                    iconClass: "",  // success: icon-modal-success1,  error: icon-modal-error2
                    title: data.data.subject,  // 弹窗标题
                    p: data.data.message, // 弹窗内容
                    align: 'left', // 弹窗内容排列顺序 left center right
                    cancelBtnText: '关闭',    // 取消按钮文字
                    successBtnText: '知道了',  // 确定按钮文字
                    successBtnModal: true, // 点击确定按钮是否关闭弹窗 true 关闭 false 不关闭
                    cancelBtnModal: true, // 点击取消按钮是否关闭弹窗 true 关闭 false 不关闭
                    style:'width:528px',
                    successCallback: function () {

                    },
                    cancelCallback: function () {

                    }
                });
            }
        })
    });


    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?932e6e061f7d4ac477e82f20fd3778c6";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128185075-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-128185075-1');
</script>

<script>
    window.ga = window.ga || function () {
        (ga.q = ga.q || []).push(arguments)
    };
    ga.l = +new Date;
    ga('create', 'UA-128185075-1', 'auto');
    ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<script>

    function alert(msg, callback, cancelCallback, align, successBtn, cancelBtn) {
        if (!align) align = 'center';
        if (!successBtn) successBtn = '确定';
        Modal.generalModal({
            backdrop: true, // 点击阴影是否关闭弹窗， // true 开启； false 关闭
            iconClass: "",  // success: icon-modal-success1,  error: icon-modal-error2
            title: '',  // 弹窗标题
            p: msg, // 弹窗内容
            align: align, // 弹窗内容排列顺序 left center right
            cancelBtnText: cancelBtn,    // 取消按钮文字
            successBtnText: successBtn,  // 确定按钮文字
            successBtnModal: true, // 点击确定按钮是否关闭弹窗 true 关闭 false 不关闭
            cancelBtnModal: true, // 点击取消按钮是否关闭弹窗 true 关闭 false 不关闭
            successCallback: callback,
            cancelCallback: cancelCallback
        });
    }
</script>
<?php include 'source/index/footer.php'; ?>
</body>
</html>