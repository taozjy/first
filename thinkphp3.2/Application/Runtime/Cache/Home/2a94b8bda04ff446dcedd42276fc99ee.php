<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
 	<link rel="stylesheet" href="/thinkphp3.2/Public/css/bootstrap.css"  type="text/css" />
	<link rel="stylesheet" href="/thinkphp3.2/Public/css/bootstrap-responsive.css"  type="text/css" />
 	<script type="text/javascript" src="/thinkphp3.2/Public/js/jquery.js"></script>
	<script type="text/javascript" src="/thinkphp3.2/Public/js/bootstrap.js"></script>
	<style type="text/css">
		
		#yuan{
			
		}
		#yuan .span1{ 
			 	margin: auto;
				width: 18px;
				height: 18px;	
				border: 1px solid #111111;
				border-radius: 50%;
				background-color: pink;
		}
		#hong_red{
			
			width:100px;  
			height:32px;  
			margin:auto;	
			margin-top:220px;
			list-style: none;
			text-align: center;
		}
		#hong_red li{
			width: 10px;
			height: 10px;
			border-radius: 50%;
			border: 1px solid #000000;
			float: left;
			margin: 8px;
		}
		.xian{
			width:45%;
			height: 1px;
			display: block;
			background-color: black;
			float: left;
			margin-top: 20px;
			
		}
		
		/*.footer_xian{
			margin-top:8px;
			width: 1px;
			height: 20px;
			background-color: cornflowerblue;
			float: left;
		}*/
		.fooder_kuer{
			width: 100%;
			margin: auto;
			height: 50px;
		}
		
	</style>
 	<title>Document</title>
 </head>
 <body>
 	<div class='container'  >				<!--head-->
 		<div class='navbar'> 
 			<div class='navbar-inner'>
 				<ul>
 					<li class='brand'><img src="/thinkphp3.2/Public/img/logo.jpg"></li>
 					<li class='brand'><a href="#">登录</a></li>
 					<li class='brand'><a href="#">注册</a></li>	
 					<li class='brand left'><span><img src='phone'></span><span>帮助电话 010-63325297</span></li>
 				</ul>
 			</div>
 		</div>
 	</div>
 	<div class='container'>
 		
 			<ul class='nav nav-pills'>
 				<li class='active'><a href="#">首页</a></li>
 				<li><a href="#">新闻首页</a></li>
 			</ul>
 		
 	</div>
	
 		<div class="row" style="height:300px; background-image: url(/thinkphp3.2/Public/img/logo.jpg);">
 			<ul id="hong_red">
 				<li></li>
 				<li></li>
 				<li></li>
 			</ul>
 		</div>
	<!--body-->
	<div class='row' style="height: 450px;">	
		<div class="container" style="height: 100%;"><h3>中式服装</h3>
		<ul class="nav nav-pills">
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
		</ul>
		</div>
	</div>
	


	<div class='row' style="height: 450px;">	
		<div class="container" style="height: 100%;"><h3>日韩款式</h3>
		<ul class="nav nav-pills">
			<li class="span4" style="width:20%; height:200px;">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				 <img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				 <img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
			</li>
		</ul>
		</div>
	</div>
	
	
	<div class='row' style="height: 450px;">	
		<div class="container" style="height: 100%;"><h3>欧美款式</h3>
		<ul class="nav nav-pills">
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				<img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				 <img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
			<li class="span4" style="width:20%; height:200px;">
				<a href="#">
				 <img style="width: 100%; height: 100%;" src="/thinkphp3.2/Public/img/logo.jpg">
				<div >
					<p>名称</p>
					<p>价格</p>
					<p>产品说明</p>
				</div>
				</a>
			</li>
		</ul>
		</div>
	</div>


 	<div class="row" >
	 	<div class='container' ><!--foot-->
	 		<div class="fooder_kuer">
	 			<span class="xian"></span>
	 			<p style=" float: left; margin: 10px 20px 20px 20px;">合作机构</p>
	 			<span class="xian" ></span>
	 			
	 		</div>
	 		<ul class="nav nav-pills">
		 		<li class="span4" style="width:20%; ">
					<a href="#">
					 <img style=" width: 100%; height: 100px;" src="/thinkphp3.2/Public/img/logo.jpg">
					</a>
				</li>
				<li class="span4" style="width:20%; ">
					<a href="#">
					 <img style=" width: 100%; height: 100px;"  src="/thinkphp3.2/Public/img/logo.jpg">
					</a>
				</li>
				<li class="span4" style="width:20%; ">
					<a href="#">
					 <img  style=" width: 100%; height: 100px;"  src="/thinkphp3.2/Public/img/logo.jpg">
					</a>
				</li>
				<li class="span4" style="width:20%; ">
					<a href="#">
					 <img style=" width: 100%; height: 100px;"   src="/thinkphp3.2/Public/img/logo.jpg">
					</a>
				</li>
	 		</ul>
	 	</div>
	 	
	 	<div class="container text-center">
	 		<ul class="nav nav-pills" style="display: inline-block;">
	 			<li><a href="#">关于我们</a></li>
	 			<li class="footer_xian" ></li>
	 			<li><a href="#">联系我们</a></li>
	 			<li class="footer_xian"></li>
	 			<li><a href="#">法律声明</a></li>
	 			<li class="footer_xian"></li>
	 			<li><a href="#">订单说明</a></li>
	 			<li class="footer_xian" ></li>
	 			<li><a href="">友情链接</a></li>
	 		</ul>
	 		<p>Copyright © 2005-2018 华衣网 www.ef360.com 版权所有　沪ICP备07503963号 沪公网安备31010702003197号 </p>
	 	</div>
 	</div>
 </body>
 </html>