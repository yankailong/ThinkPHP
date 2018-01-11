<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>zhanshi</title>
</head>
<body>
	
	姓名:<?php echo ((isset($name) && ($name !== ""))?($name):"kongkong"); ?>
	性别:
	<?php if( $sex == 1 ): ?>男<?php else: ?>女<?php endif; ?>


	<table>
		<tr>
			<td>商品id</td>
			<td>商品名称</td>
		</tr>
		<?php if(is_array($data)): foreach($data as $key=>$vol): ?><tr>
				<td><?php echo ($vol["id"]); ?></td>
				<td><?php echo ($vol["goods_name"]); ?></td>
				<td><?php echo (date("Y-m-d H:i:s",$vol["goods_create_time"])); ?></td>
				<td><?php echo date("Y-m-d H:i:s", $vol['goods_create_time']);?></td>
			</tr><?php endforeach; endif; ?>
	</table>
	<br>
	当前页码:<?php echo ($_GET['page']); ?>
</body>
</html>