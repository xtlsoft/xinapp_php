  <!--底部-->
<footer>
<div class="container">
	<div class="footer hidden-xs">
		<div class="clearfix">
			<div class="fl left clearfix">
				<dl class="fl">
					<dt>产品服务</dt>
					<dd class="line"></dd>
					<dd><a href="/index.php/publish" target="_blank">托管分发</a></dd>
					<dd><a href="/index.php/price" target="_blank">价格服务</a></dd>
					<dd><a href="/index.php/feedback" target="_blank">建议和反馈</a></dd>
				</dl>
				<dl class="fl">
					<dt>关于我们</dt>
					<dd class="line"></dd>
					<dd><a href="/index.php/about" target="_blank">公司简介</a></dd>
					<dd><a href="/index.php/about/privacy" target="_blank">隐私政策</a></dd>
					<dd><a href="/index.php/about/log" target="_blank">更新日志</a></dd>
				</dl>
				<dl class="fl">
					<dt>联系我们</dt>
					<dd class="line"></dd>
					<dd>
					<a href="javascript:;" target="_blank" class="chatQQ">联系扣扣：<?php echo QQHAO; ?></a>
					</dd>
					<dd>联系邮箱：<?php echo IN_MAIL; ?></dd>
					<dd>合作邮箱：<?php echo IN_MAILS; ?></dd>
				</dl>
			</div>

			<div class="right fr clearfix">
				<a href="/">
				<img src="/static/default/img/phone-logo.png" class="img-responsive visible-xs">
				</a>
				<div class="clearfix">
				</div>
				<div class="wechat clearfix fr hidden-xs">
					<img src="/static/default/img/weixin.png" alt="" class="fr">
				</div>
				<div class="clearfix">
				</div>
				<p class="hidden-xs">
			    微信扫描二维码  
				</p>
				<div style="text-align: left; color: #fff; line-height: 28px;" class="visible-xs">
					<a href="/index.php/about" target="_blank" class="color-white">公司简介</a>
					<div>
						地址：<?php echo IN_ADDRESS; ?></span>
					</div>
				</div>
			</div>
		</div>

		<div class="record">
			<div class="inline-block">
				<span class="fl">Copyright &copy; <?php echo IN_BUSINESS; ?> <?php echo IN_COMPANY; ?> 版权所有 <a style="color:#ffffff" href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo IN_ICP; ?></a></span>
				<a target="_blank" href="http://www.beian.gov.cn/" style="text-decoration:none; height:20px; line-height:20px; float: left; margin-left: 10px;">
				<img src="/static/default/img/jh.png" style="float:left;" />
				<p style="float:left; height:20px; line-height:20px; margin: 0px 0px 0px 5px; color:#fff;"><?php echo IN_GANICP; ?></p>
				</a>
			</div>
<div class="down_ico" style="
    margin-top: 10px;
    margin-right: 10px;
">

        <a href="https://ss.knet.cn/" target="_blank"><img src="/static/default/images/cnnic.png" height="30" alt="可信网站" title="可信网站" style="
    margin-right: 10px;
"></a>
        <a href="https://credit.szfw.org/" target="_blank"><img src="/static/default/images/cxlogos.jpg" height="30" alt="诚信网站" title="诚信网站" style="
    margin-right: 10px;
"></a>
        <a href="http://si.trustutn.org/" target="_blank"><img border="0" height="30" src="/static/default/images/bottom_large_img.png" style="
    margin-right: 10px;
"></a><a href="http://www.anquan.org/" target="_blank"><img border="0" height="30" src="/static/default/images/aqlmlogo.png" style="
    margin-right: 10px;
"></a><a href="http://wangzhan.360.cn/" target="_blank"><img border="0" height="30" src="/static/default/images/360logo.gif" style="
    margin-right: 10px;
"></a><a href="http://www.internic.net/" target="_blank"><img src="/static/default/images/reglogo.gif" height="30" title="ICANN授权注册服务机构" style="
    margin-right: 10px;
"></a>
          <a href="http://www.cnnic.cn/" target="_blank"><img src="/static/default/images/cnnic.gif" height="30" title="中国互联网络信息中心合作" style="
    margin-right: 10px;
"></a>
</div>
		</p>
	</div>
</div>
<div class="footer visible-xs">
	<div class="con">
		<a href="/index.php/about" target="_blank">公司简介</a><span>|</span><a href="/index.php/about/agreement" target="_blank">服务协议</a><span>|</span><a href="/index.php/about/log" target="_blank">更新日志</a><span>|</span><a href="/index.php/about/privacy" target="_blank">隐私政策</a>
	</div>
	<p class="p1">
		Copyright © <?php echo IN_BUSINESS; ?> <?php echo IN_NAME; ?> <a style="color:#ffffff" href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo IN_ICP; ?></a>
	</p>
	<p class="p2">
		<a target="_blank" href="http://www.beian.gov.cn/" style="text-decoration:none; height:20px; line-height:20px; margin-left: 10px;"><img src="/static/default/img/jh.png"><span style="height:20px; line-height:20px; margin: 0px 0px 0px 5px; color:#fff;"><?php echo IN_GANICP; ?></p></span></a>
	</p>
</div>
</div>
</footer>
  <!--底部-->
<ul class="fixed-right right-float-window" style>
<li>
<a href="javascript:;" target="_blank" class="chatQQ">
<span class="iconfont icon-qq"></span>
</a>
</li>
<li>
<a href="javascript:;">
<span class="iconfont icon-weixin1"></span>
<div class="wechat">
<img src="/static/default/img/weixingongzhonghao.png" alt="">
</div>
</a>
</li>
<li class="go-top" style="display: none;">
<a href="javascript:;"><span class="iconfont icon-go-top"></span></a>
</li>
</ul>
<script src="/static/default/js/clipboard.js"></script>
<script>
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

            $.post('/index.php/check-pay', {order_sn: order_sn}, function (result) {
                if (result.code != 200) {
                    $('#myModalPay').modal('hide');
                } else {
                    if (result.data.service_type == 1 || result.data.service_type == 2) {
                        window.location.href = '/index.php/publish';
                    } else if (result.data.service_type == 2) {
                        window.location.href = '/sign/upload?step=4&sign_id=' + result.data.goods_id;
                    }
                }
            })

        });	
		
		var windowWidth = $(window).width();
		$("body").on('click', '.chatQQ', function () {
			console.info(windowWidth);
			if (windowWidth <= 750) {
				/*1234567对应的就是需要聊天的客服*/
				window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin=<?php echo QQHAO; ?>&version=1&src_type=web&web_src=oicqzone.com";
			} else {
				window.location.href = "http://wpa.qq.com/msgrd?v=3&uin=<?php echo QQHAO; ?>&site=qq&menu=yes";
			}
		});
        var source_login = 0;
        if (windowWidth <= 750 && source_login) {
            Modal.templateModal({
                imgName: "modal-bg-3.jpg",
                title1: '提示',
                title2: '',
                p: '建议您：<br>尽快<span class="color-danger">电脑</span>登录<?php echo IN_NAME; ?>网站，即可享受<br><span class="iconfont icon-xingxing" style="color: #fec323; font-size: 12px; margin-right: 5px;"></span>免费试用应用分发APP<br><span class="iconfont icon-xingxing" style="color: #fec323; font-size: 12px; margin-right: 5px;"></span>每天免费赠送<span class="color-danger">10</span>次分发下载次数',
                align: 'left', // 居左 left, 居中 center, 居右 right
                btnText: '知道了',
                btnClass: "modal-btn2"
            });
        }		
    });
	
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