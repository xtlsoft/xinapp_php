<?php
if(!defined('IN_ROOT'))
{
	exit('Access denied');
}
?>
<header>
    <div class="container">
        <div class="header clearfix">
            <a class="header-left block fl" href="<?php echo IN_PATH; ?>">
                <img src="<?php echo IN_PATH; ?>static/default/img/logo-top.png" class="img-responsive hidden-xs">
                <img src="<?php echo IN_PATH; ?>static/default/img/phone-logo.png" class="img-responsive visible-xs">
            </a>
            <div class="phone-nav-wrap">
                <a class="header-left block fl" href="/">
                    <img src="<?php echo IN_PATH; ?>static/default/img/phone-logo.png" class="img-responsive visible-xs">
                </a>
                <ul class="ms-nav fl clearfix">
						<li class=""> <a href="<?php echo IN_PATH; ?>">首页</a> </li>
						<?php if($GLOBALS['userlogined']){ ?>
						<li class=""> <a href="<?php echo IN_PATH.'index.php/home'; ?>">我的应用</a> </li>
						<?php } ?>						
						<li class=""> <a href="<?php echo IN_PATH.'index.php/sign'; ?>">企业签名</a> </li>
						<li class=""> <a href="<?php echo IN_PATH.'index.php/install'; ?>">分发价格</a> </li> 
						<li class=""> <a href="<?php echo IN_PATH.'index.php/webview'; ?>">在线封装</a> </li>
				        <li class=""> <a href="<?php echo IN_PATH.'index.php/utils'; ?>">工具箱</a> </li>
						
				<?php if($GLOBALS['userlogined']){ ?>
						<li class="visible-xs phone-user-center">
                            <div class="clearfix user1">
                                <a href="<?php echo IN_PATH.'index.php/profile'; ?>" class="fl">用户中心</a>
                                <span class="fr icon-arrow-down iconfont"></span>
                            </div>
                            <dl>
                                <dd><a href="<?php echo IN_PATH.'index.php/home'; ?>">我的应用</a></dd>
                                <dd><a href="<?php echo IN_PATH.'index.php/profile_info'; ?>">我的资料</a></dd>                                
								<dd><a href="<?php echo IN_PATH.'index.php/profile_verify'; ?>">实名认证</a></dd>
                            </dl>
                        </li>						
				</ul>
				<!--登录后-->
                    <div class="login-in clearfix" style="display: block;">			
							<?php if($GLOBALS['erduo_in_verify'] != 1){ ?>
							<a class="name-certified fl" href="/index.php/certification">未实名认证</a>
							<?php } ?>
                        <div class="notification fl">
                            <span class="iconfont">
							<?php if($GLOBALS['erduo_in_svip'] == 0){ ?>
								<img src="<?php echo IN_PATH; ?>static/default/img/user.png" width="22px">
							<?php } ?>
							<?php if($GLOBALS['erduo_in_svip'] == 1){ ?>
								<img src="<?php echo IN_PATH; ?>static/default/img/user_1.png" width="22px">
							<?php } ?>
							<?php if($GLOBALS['erduo_in_svip'] == 2){ ?>
								<img src="<?php echo IN_PATH; ?>static/default/img/user_2.png" width="22px">
							<?php } ?>
							<?php if($GLOBALS['erduo_in_svip'] == 3){ ?>
								<img src="<?php echo IN_PATH; ?>static/default/img/user_3.png" width="22px">
							<?php } ?>						
							</span>
                            <span class="ms-badge"></span>
                            <div class="n-drop-down">
                                <div class="n-con">
                                    <!--用户等级-->
                                    <div class="yes" style="/*display: none;*/">
									<?php if($GLOBALS['erduo_in_svip'] == 0){ ?>
                                        <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体验会员</div>
									<?php } ?>
									<?php if($GLOBALS['erduo_in_svip'] == 1){ ?>
                                        <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初级会员</div>
									<?php } ?>	
									<?php if($GLOBALS['erduo_in_svip'] == 2){ ?>
                                        <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中级会员</div>
									<?php } ?>	
									<?php if($GLOBALS['erduo_in_svip'] == 3){ ?>
                                        <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高级会员</div>
									<?php } ?>										
									<?php if($GLOBALS['erduo_in_svip'] != 0){ ?>
										<div class="y-tit">&nbsp;&nbsp;&nbsp;<?php echo date("Y-m-d",$GLOBALS['erduo_in_viptime']); ?></div>
										<div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;到期</div>
									<?php } ?>	
                                    </div>
									<?php if($GLOBALS['erduo_in_svip'] == 0){ ?>
                                    <a href="<?php echo IN_PATH; ?>index.php/price" class="m-more">购买会员</a>
									<?php } ?>				
									<?php if($GLOBALS['erduo_in_svip'] == 1 or $GLOBALS['erduo_in_svip'] == 2){ ?>
                                    <a href="<?php echo IN_PATH; ?>index.php/price" class="m-more">升级会员</a>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="login-user clearfix fl">
                            <span class="fl"><?php echo $GLOBALS['erduo_in_username']; ?>
							<?php if($GLOBALS['erduo_in_verify'] == 1){ ?>
							<span class="certified">(已实名)</span><?php } ?>
							</span>
                            <a class="visible-xs fl logout1" href="<?php echo IN_PATH.'index.php/logout'; ?>">退出</a>
                            <span class="iconfont icon-arrow-bottom fl hidden-xs"></span>
                            <div class="user-wrap">
                                <dl>
						                                <dd><a href="<?php echo IN_PATH.'index.php/home'; ?>">我的应用</a></dd>
                                <dd><a href="<?php echo IN_PATH.'index.php/profile_info'; ?>">我的资料</a></dd>                                
								<dd><a href="<?php echo IN_PATH.'index.php/profile_verify'; ?>">实名认证</a></dd>
                 
									<dt><a href="<?php echo IN_PATH.'index.php/logout'; ?>"><span class="iconfont"></span>退出</a></dt>
                                </dl>
                            </div>
                        </div>
                    </div>
				<!--/登录后-->				
				<?php }else{ ?>
				</ul>
					<ul class="login clearfix fr">
						<li><a href="<?php echo IN_PATH.'index.php/login'; ?>" class="ms-btn ms-btn-default">登录</a></li> 
						<li><a href="<?php echo IN_PATH.'index.php/reg'; ?>" class="ms-btn ms-btn-primary ml10">注册</a></li>
                    </ul>
				<?php } ?>				
			</div>
            <span class="icon-menu iconfont phone-menu visible-xs"></span>
            <div class="phone-shadow"></div>
        </div>
    </div>
</header>