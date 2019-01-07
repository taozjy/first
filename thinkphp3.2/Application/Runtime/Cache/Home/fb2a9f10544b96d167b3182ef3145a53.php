<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>客服信息</title>
		<script type="text/javascript" src="../../../public/js/jquery.js"></script>
		<script type="text/javascript" src="../../../public/js/vue.js"></script>
		<style>
			*{
				margin: 0;
				padding: 0;
				list-style: none;
				text-decoration: none;
			}
			.wai{
				width: 600px;
				height: 450px;
				border: 1px solid #333333;
				margin: auto;
				margin-top:10%;
			}
			.wai .wai_title{
				width: 100%;
				height: 50px;
				display: flex;
				align-items: center;
			}
			.wai .wai_text{
				width:100%;
				height:280px;
				border: 1px solid royalblue;
				overflow-y:scroll;
			}
			.wai .wai_text_x{
				display: flex;
				flex-wrap: wrap;
				justify-content: flex-end;
				position: relative;
			}
			.wai .wai_text_x .shuru{
				 width:100%;
				 height:70px;
				 box-sizing: border-box;
			}
			.anniu{
			 	 width:5rem;
			 	 height: 2rem;
			 	 background-color: #646464;
			 	 display: flex;
			 	 justify-content: center;
			 	 align-items: center;
			 	 margin-top: 1rem;
			 	 color:  white;
			}
			.yonghu{
				position: absolute;
				width:100px;
				height:450px;
				left: -110px;
				bottom:0px;
				border:1px solid #000000;
				list-style: none;
				display: flex;
				flex-direction: column;
			}
			.yonghu li{
				 width:100%;
				 height:150px;
				 border:1px solid #333333;
			}
			.wb{
				position:absolute;
				left: 0px;
				bottom: 0;
			}
		</style>
	</head>
	<body>
	<div id="vues">
			<div class="wai">
				<div class="wai_title">
					客服001
				</div>
				<div class="wai_text" >
					<div v-for=" (item,index) in users">
							<div class="user">{{item.name}}&nbsp;{{item.time}}<br>{{item.text}}</div>
							<!--<div class="kefu">{{item.shijian}}<br>{{item.wenben}}</div>-->
					</div>
				</div>
				<div class="wai_text_x" >
					<ul class="yonghu">
						<li v-for="(items,index) in user" @click='huanren(items.user_ip)' >
							<div>{{items.user_ip}}</div>
							<p>关闭对话</p>
						</li>
					</ul>
					<textarea class="shuru" ></textarea>
					<input class="wb" type="text" value=""  placeholder="请输入用户ip地址"/>
					<bottom class="anniu" @click="fasongdy()" >发送</bottom>
				</div>
			</div>
	</div>
		<script>
			 //4807
			var ve = new Vue({
			 	el:'#vues',
			 	data:{
					user:[],
			 		users:[],
					ipsdq:"",
			 	},
				created:function(){
					
					this.$options.methods.dyh();
				},
			 	methods:{
							fasongdy:function(){
								var ips = ve.$data.ipsdb
								if(ips){
									ve.$options.methods.fasong(ips)
								}else{
									alert('请输入用户名称');
								}
								
							},
					 		fasong:function(math){
							 	var text = $('.shuru').val();
							 	$.ajax({
							 		type:"POST",
							 		url:"/thinkphp3.2/index.php/Home/index/lt_add_kefu",
							 		data:{
							 		 'text':text,
									 'ip':math
							 		},
							 		success:function(res){
							 			var res = JSON.parse(res);
							 		 	if(res.type==200){
							 		 		ve.$data.users=ve.$data.users.concat(res);
											ve.$options.methods.ycxl();
											$(".shuru").val("");
							 		 	}else{
							 		 		alert("网络出错");
							 		 	}
							 		}
							 	});	
							},
							monitor:function(ips){
								//客服名字  用户名字  
								$.ajax({
									type:"POST",
									url:"/thinkphp3.2/index.php/Home/index/demonstration_acquisition",
									data:{
										'ips':ips
									},
									success:function(res){
										var res = JSON.parse(res)
										ve.$data.users = res;
										setTimeout(function(){
											 ve.$options.methods.monitor(ve.$data.ipsdb)
										},5000)
										ve.$options.methods.ycxl();		
									}
								})
							},
							ycxl:function(){
								setTimeout(function(){
									$('.wai_text').scrollTop($(".wai_text")[0].scrollHeight);
								},500)
							},
							dyh:function(){
								$.ajax({
									type:"POST",
									url:"/thinkphp3.2/index.php/Home/index/dyh",
									data:{
										'wenzi':""
									},
									success:function(res){
										var res = JSON.parse(res)
										ve.$data.ipsdb = res[0].user_ip;
										ve.$data.user=ve.$data.user.concat(res);
										ve.$options.methods.monitor(res[0].user_ip);
										ve.$options.methods.dyh_xh();
									}
								})
							},
							dyh_xh:function(){
								$.ajax({
									type:"POST",
									url:"/thinkphp3.2/index.php/Home/index/dyh",
									data:{
										'wenzi':""
									},
									success:function(res){
										var res = JSON.parse(res)
										ve.$data.user=res;
										setTimeout(function(){
											ve.$options.methods.dyh_xh()
										},5000)
									}
								})
							},	
							huanren:function(ip){
								
								$.ajax({
									type:'POST',
									url:'/thinkphp3.2/index.php/Home/index/huanren',
									data:{
										'ip':ip
									},
									success:function(res){
										var res = JSON.parse(res)
										ve.$data.users=res;
										ve.$data.ipsdb = ip;
									}
								})
									
								
							}
									
			 	}
			 })
			 // console.log(ve);
		</script>
	</body>
</html>