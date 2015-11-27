<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Xfree内部社工库查询系统</title>
<link href="/searchku/Public//css/style3.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="/searchku/Public/js/jquery-1.11.1.min.js"></script>
<script defer="defer" src="/searchku/Public/js/menu_jquery.js"></script>
</head>
<body>
<div id="d1" class="result">
	<h2 align="center">查询结果</h2>
<table align="center">
	<tr>
		<th>姓名</th>
		<th>常用密码</th>
		<th>qq</th>
		<th>手机</th>
		<th>网站</th>
		<th>银行卡</th>
		<th>出生年月</th>
		<th>家庭住址</th>
		<th>身份证号码</th>
		<th>邮箱</th>
		<th>常用登录IP</th>
		<th>其他</th>
	</tr>
	<tr>
		<?php if(is_array($result)): foreach($result as $key=>$v): ?><td><?php echo ($v['name']); ?></td>
			<td><?php echo ($v['pass']); ?></td>
			<td><?php echo ($v['qq']); ?></td>
			<td><?php echo ($v['phone']); ?></td>
			<td><?php echo ($v['website']); ?></td>
			<td><?php echo ($v['card']); ?></td>
			<td><?php echo ($v['birth']); ?></td>
			<td><?php echo ($v['idcard']); ?></td>
			<td><?php echo ($v['email']); ?></td>
			<td><?php echo ($v['ip']); ?></td>
			<td><?php echo ($v['other']); ?></td><?php endforeach; endif; ?>
	</tr>

</table>
</div>
</body>
</html>