<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html> 
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>社工裤后台登录</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/searchku/Public/css/bootstrap.min.css" rel="stylesheet">
		<link href="/searchku/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="/searchku/Public/css/site.css" rel="stylesheet">
		<script src="/searchku/Public/js/jquery.min.js"></script>
		<script src="/searchku/Public/js/bootstrap.min.js"></script>
		<script src="/searchku/Public/js/site.js"></script>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script type="text/javascript">
			$(function (){
				$('#img1').click(function (){
					var imgsrc = "<?php echo U('Login/verity', '', '');?>" + '?' + Math.random();
					$('#img1').attr('src', imgsrc);
				});
			})
		</script>

	</head>
<body>
	<div id="login-page" class="container">
		<h1>社工裤后台登录</h1>
		<form id="login-form" method="post" class="well" action="<?php echo U('Login/check', '', '');?>">
			<label><input type="text" class="span2" name="username"  placeholder="username" /><br /></label>
			<label><input type="password" class="span2" name="password" placeholder="password" /><br />
			</label>
			<label>
			<input type="text" class="span2" name="verity" placeholder="verity" />
			<img src="<?php echo U('Login/verity', '', '');?>" id="img1" />
			</label>
			<label class="checkbox">
				<input type="checkbox" /> Remember me 
			</label>
			<button type="submit" class="btn btn-primary">Sign in</button>
			<button type="submit" class="btn">Forgot Password</button>
	</form>	
	</div>
	</body>
</html>