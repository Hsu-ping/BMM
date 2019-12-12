<!DOCTYPE html>	

<html>
<head>
	<meta charset="utf-8"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"></meta>
	<!--網頁名稱-->
	<title>BlueMyMind</title>
	<!--網頁icon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<style type="text/css">
	a{text-decoration:none}
	a:visited{color:#FFFFFF}
	div{font-family:Microsoft JhengHei}
	.TopListBackground{
		position:fixed;left:0px;top:0px;z-index:10;
		width:100%;height:50px;background-color:black}
	.HomeLink{position:fixed;top:0px;left:5%;z-index:11;}
	.TopList{
		position:fixed;left:30%;top:0px;right:0px;z-index:11;
		width:100%-100px;height:50px}
	.TopListButton{
		height:50px;width:auto;text-align:center;margin-left:4%;margin-right:4%;background-color:black;z-index:11;
		display:inline-block;vertical-align:top;line-height:50px}
	.ClassList{
		position:absolute;top:100px;left:20%;right:20%;bottom:0px;background-color:#696969;
		width:60%px;height:100%-200px}
	.MyClass{
		background-color:paleturquoise;border-radius:10px;margin-top:10px;
		width:100%;height:150px}
		
	</style>
	<script type="text/javascript">
	var phplist;
	function forphp(string){
		var list=[];
		list=(JSON.parse(string));
		phplist=list;
		alert('OK');
	}
	function OK(number)
	{
		alert(number);
		var ar=[];
		ar=(JSON.parse(number));
		//alert(ar[1]);
	}
	function Class (ID,name,teacher){
		this.ID=ID;
		this.name=name;
		this.teacher=teacher;
		
		
	}
	function NewClass(){
		
		var i;
		for(i=0;i<4;i++){
			AddClass(phplist[i],phplist[i],phplist[i]);
		}
	}

	function AddClass(id,cname,tname) {
　　var parent = window.document.getElementById("parent");
　　var div = document.createElement("div");//新增 div
　　div.setAttribute("class", "MyClass");	//設定 div 屬性，如 id,type,name
　　div.innerHTML = cname+"<p>"+tname;	
　　parent.appendChild(div);//把div放進去parent
　　}
</script>

</head>
<body style="background-color:#696969" onload="NewClass()">
	<?php
	$string = $_POST['name'];
	$array = array();
	$array = json_decode($string);
	echo "<script type='text/javascript'>;
	forphp('$string');
	</script>";
	?>
	<a href="HomePage.html"><img class="HomeLink" title="回到首頁" src="BlueMyMind.png"></img></a>
	<div class="TopListBackground"></div>
	<div class="TopList">
	<div class="TopListButton"><a href="MyClass.html">我的課程</a></div>
	<div class="TopListButton"><a href="">公佈欄</a></div>
	<div class="TopListButton"><a href="">關於我們</a></div>
	<div class="TopListButton"><a href="">更改個人資訊</a></div>
	<div class="TopListButton"><a href="">登出</a></div>
	</div>
	<div class="ClassList" id="parent">
	
	
	
	</div>

	
	
</body>
</html>