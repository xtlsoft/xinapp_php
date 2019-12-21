<?php
if(!defined('IN_ROOT'))
{
	exit('Access denied');
}
$ssl = is_ssl() ?'https://': 'http://';
$link = $ssl.$_SERVER['HTTP_HOST'].IN_PATH;
?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"/>
<meta name="keywords" content="<?php echo IN_KEYWORDS; ?>" />
<meta name="description" content="<?php echo IN_DESCRIPTION; ?>" />
<title>价格 - <?php echo IN_NAME; ?> - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>
<?php include 'source/index/static.php'; ?>
<body>
<?php include 'source/index/header_jiage.php'; ?>
<div class="hidden-xs">
<div class="new-price-banner">
	<div class="container">
		<div class="banner-con">
			<h3><?php echo IN_NAME; ?>价格与服务</h3>
			<p>开启高效的移动APP解决方案，全程自助服务</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="price-tab">
		<ul class="clearfix">
			<li class="active">分发套餐</li>
			<li>企业签名</li>
			<li>会员套餐</li>
		</ul>
	</div>
	<div class="price-con">
		<div class="tab-1" style="display: block;">
			<div class="buy-number">
				<div class="price-common">
					<h1>应用分发套餐</h1>
					<p class="p1">不限使用时间，免费每天赠送<?php echo IN_LOGINPOINTS; ?>次下载</p>
					<div class="row clearfix">
						<div class="col-sm-4">
							<div class="con">
								<div class="gradient gradient1">
								</div>
								<div class="c-top">
									<div class="text">充值</div>
									<div class="num"><?php echo number_format(IN_RMBPOINTS * IN_BEESCOINONE); ?><span>云币</span>
									</div>
									<span class="recommended" style="display: none;"><img src="/static/default/img/icon-17.png"></span>
								</div>
								<div class="bottom-con">
									<dl>
										<dd><span class="iconfont icon-gou color-hover"></span>下载次数不受时间影响</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>6个专享模板使用</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>APP可以永久保存</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>自定义短连接</dd>
									</dl>
									<div class="b-price">
										<span><?php echo IN_BEESCOINONE; ?></span>元
									</div>
								</div>
								<div class="bottom">
									<a href="/index.php/price_cloud?id=1003" target="_blank" class="btn-buy ms-btn-secondary ms-btn">购买</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="con">
								<div class="gradient gradient2">
								</div>
								<div class="c-top">
									<div class="text">充值</div>
									<div class="num"><?php echo number_format(IN_RMBPOINTS * IN_BEESCOINTWOY); ?><span>云币</div>
									<span class="recommended" style="display: block;"><img src="/static/default/img/icon-17.png"></span>
								</div>
								<div class="bottom-con">
									<dl>
                                        <dd><span class="iconfont icon-gou color-hover"></span>下载次数不受时间影响</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>6个专享模板使用</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>APP可以永久保存</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>自定义短连接</dd>
                                        <dd><span class="iconfont icon-gou color-hover"></span>CDN加速下载</dd>
									</dl>
									<div class="b-price">
										<span><?php echo IN_BEESCOINTWOX; ?></span>元
									</div>
								</div>
								<div class="bottom">
									<a href="/index.php/price_cloud?id=1004" target="_blank" class="btn-buy ms-btn-secondary ms-btn">购买</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="con">
								<div class="gradient gradient3">
								</div>
								<div class="c-top">
									<div class="text">充值</div>
									<div class="num"><?php echo number_format(IN_RMBPOINTS * IN_BEESCOINTHREEY); ?><span>云币</div>
									<span class="recommended" style="display: none;"><img src="/static/default/img/icon-17.png"></span>
								</div>
								<div class="bottom-con">
									<dl>
										<dd><span class="iconfont icon-gou color-hover"></span>下载次数不受时间影响</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>6个专享模板使用</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>APP可以永久保存</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>自定义短连接</dd>
                                        <dd><span class="iconfont icon-gou color-hover"></span>CDN加速下载</dd>
									</dl>
									<div class="b-price">
										<span><?php echo IN_BEESCOINTHREEX; ?></span>元
									</div>
								</div>
								<div class="bottom">
									<a href="/index.php/price_cloud?id=1005" target="_blank" class="btn-buy ms-btn-secondary ms-btn">购买</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="price-common">
				<h1>常见问题</h1>
				<div class="help">
					<dl>
						<dt class="clearfix">
						<span class="left">Q ：</span>
						<span class="right">支持安卓和苹果同一个二维码下载吗？</span>
						</dt>
						<dd class="clearfix">
						<span class="left">A ：</span>
						<span class="right"><?php echo IN_QUESTIONONE; ?></span>
						</dd>
					</dl>
					<dl>
						<dt class="clearfix">
						<span class="left">Q ：</span>
						<span class="right">如何查看剩余云币？</span>
						</dt>
						<dd class="clearfix">
						<span class="left">A ：</span>
						<span class="right">登录<?php echo $link; ?><?php echo IN_QUESTIONTWO; ?></span>
						</dd>
					</dl>
					<dl>
						<dt class="clearfix">
						<span class="left">Q ：</span>
						<span class="right">有时候iOS APP不能下载，是下载链接的问题吗？</span>
						</dt>
						<dd class="clearfix">
						<span class="left">A ：</span>
						<span class="right"><?php echo IN_QUESTIONTHREE; ?></span>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="tab-2">
			<div class="table-wrap">
				<div class="price-common">
					<h1>企业签名</h1>
					<p class="p1">选择最适合您的服务套餐</p>
					<div class="table-responsive">
						<table class="table table-bordered">
						<tr>
							<th>套餐</th>
							<th>基础版</th>
							<th><span class="badge-basis">升级版<span class="badge">推荐</span></span></th>
							<th>独立版</th>
						</tr>
						<tr>
							<td>1个月</td>
							<td><span class="font20"><?php echo IN_FOUNDATION; ?></span>元</td>
							<td><span class="font20"><?php echo IN_UPGRADE; ?></span>元</td>
							<td><span class="font20"><?php echo IN_INDEPENDENCE; ?></span>元</td>
						</tr>
						<tr>
							<td>3个月</td>
							<td><span class="font20"><?php echo IN_BASEQUARTER; ?></span>元</td>
							<td><span class="font20"><?php echo IN_UPGRADEQUATER; ?></span>元</td>
							<td><span class="font20"><?php echo IN_INDEPENDENTQUARTER; ?></span>元</td>
						</tr>
						<tr>
							<td>6个月</td>
							<td><span class="font20"><?php echo IN_BASICHALF; ?></span>元</td>
							<td><span class="font20"><?php echo IN_UPGRADEFOR; ?></span>元</td>
							<td><span class="font20"><?php echo IN_INDEPENDENTHAIF; ?></span>元</td>
						</tr>
						<tr>
							<td>1年<span class="badge-basis"><span class="badge"><?php echo IN_DISCOUNTS; ?></span></span></td>
							<td><span class="font20"><?php echo IN_BASICANNUAL; ?></span>元</td>
							<td><span class="font20"><?php echo IN_UPGRADEANNUAL; ?></span>元</td>
							<td><span class="font20"><?php echo IN_INDEPENDENTANNUAL; ?></span>元</td>
						</tr>
						<tr>
							<td>更新<span class="badge-basis"><span class="badge">活动价</span></span></td>
							<td><span class="free"><?php echo IN_BASICUPDATE; ?></span></td>
							<td><span class="free"><?php echo IN_UPGRADEAND; ?></span></td>
							<td><span class="free"><?php echo IN_INDEPENDENTTO; ?></span></td>
						</tr>
						</table>
					</div>
				</div>
				<div class="price-common">
					<h1>服务介绍</h1>
					<p class="p1">APP无需越狱或者上架商店，即可直接安装到设备上</p>
					<div class="table-responsive">
						<table class="table table-bordered">
						<tr>
							<th>服务</th>
							<th>基础版</th>
							<th>升级版</th>
							<th>独立版</th>
						</tr>
						<tr>
							<td>官方手动签名</td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>IPA包检测（检测系统、版本）</td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>真机测试（常用机型真机测试）</td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>证书分类签名</td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>提供备用证书签名</td>
							<td></td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>应用扩展（App Extension）</td>
							<td></td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>网络代理（Packet Tunnel）</td>
							<td></td>
							<td><span class="iconfont icon-duihao"></span></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>数据共享（App Groups）</td>
							<td></td>
							<td></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>计步器（HealthKit）</td>
							<td></td>
							<td></td>
							<td><span class="iconfont icon-duihao"></span></td>
						</tr>
						<tr>
							<td>稳定性</td>
							<td>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing2"></span>
								<span class="iconfont icon-xingxing2"></span>
							</td>
							<td>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing2"></span>
							</td>
							<td>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
								<span class="iconfont icon-xingxing"></span>
							</td>
						</tr>
						<tr>
							<td>适用于</td>
							<td>测试使用、中短期运营</td>
							<td>长期稳定运营</td>
							<td>长期稳定运营</td>
						</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="price-common">
				<h1>常见问题</h1>
				<div class="help">
					<dl>
						<dt class="clearfix">
						<span class="left">Q ：</span>
						<span class="right">企业签名是怎样的操作流程？</span>
						</dt>
						<dd class="clearfix">
						<span class="left">A ：</span>
						<span class="right"><?php echo IN_QUESTIONFOUR; ?></span>
						</dd>
					</dl>
					<dl>
						<dt class="clearfix">
						<span class="left">Q ：</span>
						<span class="right">签名到期后，APP还能继续使用吗？</span>
						</dt>
						<dd class="clearfix">
						<span class="left">A ：</span>
						<span class="right"><?php echo IN_QUESTIONFIVE; ?></span>
						</dd>
					</dl>
					<dl>
						<dt class="clearfix">
						<span class="left">Q ：</span>
						<span class="right">签名是否支持推送通知？</span>
						</dt>
						<dd class="clearfix">
						<span class="left">A ：</span>
						<span class="right"><?php echo IN_QUESTIONSIX; ?></span>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="tab-3">
			<div class="buy-number">
				<div class="price-common">
					<h1>会员套餐</h1>
					<p class="p1">一次开通使用一年</p>
					<div class="row clearfix">
						<div class="col-sm-4">
							<div class="con">
								<div class="gradient gradient1">
								</div>
								<div class="c-top">
									<div class="text">初级会员</div>
									<div class="num"><span><img src="/static/default/img/user_1.png" style="width: 50px;"></span>
									</div>
									<span class="recommended" style="display: none;"><img src="/static/default/img/icon-17.png"></span>
								</div>
								<div class="bottom-con">
									<dl>
										<dd><span class="iconfont icon-gou color-hover"></span><?php echo IN_PVIPCAPACITY; ?>M存储容量</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>可上传<?php echo IN_PVIPUPLOAD; ?>M应用</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>下载页有广告</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>CDN加速下载</dd>
									</dl>
									<div class="b-price">
										<span><?php echo IN_BEESCOINP; ?></span>元/年
									</div>
								</div>
								<div class="bottom">
									<a href="/index.php/price_vip?id=1006" target="_blank" class="btn-buy ms-btn-secondary ms-btn">购买</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="con">
								<div class="gradient gradient2">
								</div>
								<div class="c-top">
									<div class="text">中级会员</div>
									<div class="num"><span><img src="/static/default/img/user_2.png" style="width: 50px;"></span>
									</div>
									<span class="recommended" style="display: none;"><img src="/static/default/img/icon-17.png"></span>
								</div>
								<div class="bottom-con">
									<dl>
										<dd><span class="iconfont icon-gou color-hover"></span><?php echo IN_IVIPCAPACITY; ?>M存储容量</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>可上传<?php echo IN_IVIPUPLOAD; ?>M应用</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>下载页无广告</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>CDN加速下载</dd>
									</dl>
									<div class="b-price">
										<span><?php echo IN_BEESCOINI; ?></span>元/年
									</div>
								</div>
								<div class="bottom">
									<a href="/index.php/price_vip?id=1007" target="_blank" class="btn-buy ms-btn-secondary ms-btn">购买</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="con">
								<div class="gradient gradient3">
								</div>
								<div class="c-top">
									<div class="text">高级会员</div>
									<div class="num"><span><img src="/static/default/img/user_3.png" style="width: 50px;"></span>
									</div>
									<span class="recommended" style="display: none;"><img src="/static/default/img/icon-17.png"></span>
								</div>
								<div class="bottom-con">
									<dl>
										<dd><span class="iconfont icon-gou color-hover"></span><?php echo IN_SVIPCAPACITY; ?>M存储容量</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>可上传<?php echo IN_SVIPUPLOAD; ?>M应用</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>下载页无广告</dd>
										<dd><span class="iconfont icon-gou color-hover"></span>CDN加速下载</dd>
									</dl>
									<div class="b-price">
										<span><?php echo IN_BEESCOINS; ?></span>元/年
									</div>
								</div>
								<div class="bottom">
									<a href="/index.php/price_vip?id=1008" target="_blank" class="btn-buy ms-btn-secondary ms-btn">购买</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="price-common">
				<h1>常见问题</h1>
				<div class="help">
					<dl>
						<dt class="clearfix">
						<span class="left">Q ：</span>
						<span class="right">会员有有效期吗？</span>
						</dt>
						<dd class="clearfix">
						<span class="left">A ：</span>
						<span class="right"><?php echo IN_QUESTIONSEVEN; ?>
</span>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="visible-xs">
<div class="mobile-price">
	<div class="new-price-tab">
		<ul class="tab clearfix">
			<li class="active"><a href="javascript:;">分发套餐</a></li>
			<li><a href="javascript:;">企业签名</a></li>
			<li><a href="javascript:;">会员套餐</a></li>
		</ul>
	</div>
	<div class="m-price-banner">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: url(/static/default/img/m-price-1.jpg)">
					<div class="tit"><?php echo IN_NAME; ?>价格与服务</div>
					<p>开启高效的移动APP解决方案，全程<br>自助服务</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="new-price-con">
			<div class="tab-4" style="display: block;">
				<div class="m-price-common m-publish">
					<div class="tit-wrap">
						<ul class="tit clearfix">
							<li class="left"><img src="/static/default/img/m-price-4.png"></li>
							<li class="center">应用分发套餐</li>
							<li class="right"><img src="/static/default/img/m-price-5.png"></li>
						</ul>
						<div class="p2">实名认证后，每天免费赠送<span><?php echo IN_LOGINPOINTS; ?></span>云币</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<div class="con con0">
								<div class="level"><?php echo number_format(IN_RMBPOINTS * IN_BEESCOINONE); ?><span>云币</span></div>
								<div class="msg">套餐一</div>
								<div class="num"><span><?php echo IN_BEESCOINONE; ?></span>元</div>								
							</div>
						</div>
						<div class="col-xs-4">
							<div class="con con1">
								<div class="level"><?php echo number_format(IN_RMBPOINTS * IN_BEESCOINTWOX); ?><span>云币</span></div>
								<div class="msg">套餐二</div>
								<div class="num"><span><?php echo IN_BEESCOINTWOX; ?></span>元</div>
								<span class="recommended">推荐</span>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="con con2">
								<div class="level"><?php echo number_format(IN_RMBPOINTS * IN_BEESCOINTHREEX); ?><span>云币</span></div>
								<div class="msg">套餐三</div>
								<div class="num"><span><?php echo IN_BEESCOINTHREEX; ?></span>元</div>
							</div>
						</div>						
					</div>
				</div>	
<br>
<br>		
				<div class="m-publish-buy clearfix">
					<a href="/index.php/price_cloud?id=1003" class="small1"><span class="iconfont icon-gouwuche"></span>购买套餐一</a>
					<a href="/index.php/price_cloud?id=1004" class="big1"><span class="iconfont icon-gouwuche"></span>购买套餐二</a>
					<a href="/index.php/price_cloud?id=1005" class="big2"><span class="iconfont icon-gouwuche"></span>购买套餐三</a>
				</div>				
			</div>
			<div class="tab-5">
				<div class="m-price-common m-pack-price">
					<div class="tit-wrap">
						<ul class="tit clearfix">
							<li class="left"><img src="/static/default/img/m-price-4.png"></li>
							<li class="center">应用签名</li>
							<li class="right"><img src="/static/default/img/m-price-5.png"></li>
						</ul>
					<br>
			      <br>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<div class="con">
								<div class="level">暂未开启</div>
								<div class="img-wrap">
									<img src="/static/default/img/m-price-7.png">
								</div>
								<div class="msg">待开启</div>
								<div class="num"><span>100</span>元</div>	
<br>
<br>
<br>
<br>
<br>								
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="tab-6">
				<div class="m-price-common m-publish">
					<div class="tit-wrap">
						<ul class="tit clearfix">
							<li class="left"><img src="/static/default/img/m-price-4.png"></li>
							<li class="center">会员套餐</li>
							<li class="right"><img src="/static/default/img/m-price-5.png"></li>
						</ul>
						<div class="p2">实名认证后，每天免费赠送<span><?php echo IN_LOGINPOINTS; ?></span>云币</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<div class="con con0">
								<div class="level">
									初级会员
								</div>
								<div class="img-wrap">
									<img src="/static/default/img/m-price-7.png">
								</div>
								<div class="msg">&nbsp;&nbsp;&nbsp;<?php echo IN_PVIPCAPACITY; ?>M存储容量</div>
								<div class="msg">可上传<?php echo IN_PVIPUPLOAD; ?>M应用</div>
								<div class="msg">下载页有广告</div>
								<div class="msg">CDN加速下载</div>
								<div class="num">
									<span><?php echo IN_BEESCOINP; ?>元</span>/年
								</div>
								<span class="recommended" style="display: none;">限时特惠</span>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="con con1">
								<div class="level">
									中级会员
								</div>
								<div class="img-wrap">
									<img src="/static/default/img/m-price-7.png">
								</div>
								<div class="msg"><?php echo IN_IVIPCAPACITY; ?>M存储容量</div>
								<div class="msg">可上传<?php echo IN_IVIPUPLOAD; ?>M应用</div>
								<div class="msg">下载页无广告</div>
								<div class="msg">CDN加速下载</div>
								<div class="num">
									<span><?php echo IN_BEESCOINI; ?>元</span>/年
								</div>
								<span class="recommended" style="display: none;">限时特惠</span>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="con con2">
								<div class="level">
									高级会员
								</div>
								<div class="img-wrap">
									<img src="/static/default/img/m-price-7.png">
								</div>
								<div class="msg"><?php echo IN_SVIPCAPACITY; ?>M存储容量</div>
								<div class="msg">可上传<?php echo IN_SVIPUPLOAD; ?>M应用</div>
								<div class="msg">下载页无广告</div>
								<div class="msg">CDN加速下载</div>
								<div class="num">
									<span><?php echo IN_BEESCOINS; ?>元</span>/年
								</div>
								<span class="recommended">限时特惠</span>
					    </div>
					</div>						
				</div>
				</div>	
				<div class="m-publish-buy clearfix">
					<a href="/index.php/price_vip?id=1006" class="small1"><span class="iconfont icon-gouwuche"></span>购买初级会员</a>
					<a href="/index.php/price_vip?id=1007" class="big1"><span class="iconfont icon-gouwuche"></span>购买中级会员</a>
					<a href="/index.php/price_vip?id=1008" class="big2"><span class="iconfont icon-gouwuche"></span>购买高级会员</a>
				</div>	
			</div>
		</div>
</div>
</div>
<?php include 'source/index/footer.php'; ?>
<br>
<br>
</body>
</html>