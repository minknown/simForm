<html>
<head>
    <!------------杂七杂八配置------------>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalabel=0">
  <style>
  	html{width:100%;border:0;padding:0;margin:0;box-sizing: border-box;}
  	body{
  		width:100%;
  		text-align: center;padding:0px;color:gray;line-height:32px;margin:0;border:0;box-sizing: border-box;
		background-color:#efefef;
  	}
	

	
	.title {
	    width: 100%;
	    height: 50px;
	    background-color:#009883; border-bottom:1px solid #efefef;
	}
	
	.font {
	    color: #fff;
	    line-height: 50px;
	    font-size: 18px;
	    text-indent: -2em;
	    text-align: center
	}
	
	.nav-left {
	    float: left;
	}
	  
	.arrow-box{
	    width: 50px;  
	    height: 26px;
	    position: relative;  
	    border-radius: 10% 10%;  
	 
	    text-align: center;
	    
	    top: 9px;
	    font-size: 14px;
	    left: 5px;
	}
	
	.button {
	    background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 6px 32px;
		width:70%;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
		background-color: #009883;
		margin:10px;
	
		border-radius:3px;
		
	}


.l{
	margin:10px 0;
	padding:8px 15px;
	border-top:1px dashed gray;
	
	width:100%;
	line-height:26px;
	text-align: left;
	font-size:16px;
	color:black;
	border-left:0;
	border-righet:0;
	background-color: white;
	box-sizing: border-box;
	
}
.f{
	background-color: white;
	font-size:14px;
	padding:6px;
}
a,a:visited{
	text-decoration:none;
	color:blue;
	
	
}

  	</style>
	<title>
		农行住房金融
		</title>
		
		
</head>
<body>
	

	<div class="title">
	     <a href="#" onclick="alert('请检查网络!');">
	         <div class="arrow-box nav-left">
	             <span><img src="fanh.png" width="32" height="32"></span>
	         </div>
	     </a>
	     <p class="font">还款计划</p>
	 </div>
		<div class='f'>
			
			列表仅显示近一年的还款计划 <a href='#'>详细还款明细</a>
			</div>

		<?php
		
		for ($x=1; $x<=12; $x++) {
		  echo "<div class='l' style='margin-top:0px' id='".$x."'>";
		  echo "期数：".$x."/".(12*20);
		  echo "<br>贷款合约号：99183572831";
		
		  echo "<br>还款日期：".date("Y-m-d",strtotime("+".($x-1)." month")+3600*24*5);
		  echo "<br>还款金额：￥10,559.29";
		 // echo "";
		  echo "</div>";
		} 
		
			
			
			
			
			
		
			
			
			
		?>	
	
		<div class='button' onclick='location.href="qian.php";'>提前还款</div>
		<div class='button'>返回首页</div>
		<p style='height:20px;'></p>
	</html>