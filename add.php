<html>
	<head>
		<title>江海妇联权益咨询平台</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏 ?>
			
			<h3>后台发布咨询</h3>
			<form action="action.php?action=add" method="post">
				<table width="640" border="0">
					<tr>
						<td align="right">*标题:</td>
						<td><input style="width:500px" type="text" name="title"/></td>
					</tr>
					<tr>
						<td align="right">*分类:</td>
						<td><input  type="text" name="alinks"/></td>
					</tr>
					<tr>
						<td align="right">*咨询人:</td>
						<td><input type="text" name="author"/></td>
					</tr>
					<tr>
						<td align="right">*联系电话:</td>
						<td><input type="text" name="phone"/></td>
					</tr>


					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="50" rows="5" name="content"></textarea></td>
					</tr>
					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="50" rows="5" name="content2"></textarea></td>
					</tr>
					<tr>
						<td align="right">是否公开:</td>
						<td><input type="text" name="hot"/></td>
					</tr>

					
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="添加"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
			
			<hr><BR>
			  1、婚姻家庭 &nbsp;&nbsp; 2、邻里  &nbsp;&nbsp;3、合同  &nbsp;&nbsp;4、生产经营  &nbsp;&nbsp;5、损害赔偿  &nbsp;&nbsp;6、山林土地 &nbsp;&nbsp; 7、房产 &nbsp;&nbsp;8、环境污染<BR>
			  9、劳动争议 &nbsp;&nbsp;10、医疗纠纷&nbsp;&nbsp;11、消费&nbsp;&nbsp 12、其他
		</center>
	</body>
</html>