<?PHP
$_OPTIMIZATION["title"] = "��� 10 �� ������/�������";
$_OPTIMIZATION["description"] = "��� 10 �� ������/�������";
$_OPTIMIZATION["keywords"] = "��� 10, �� ������, �� �������";
?>
<div class="s-bk-lf">
	<div class="acc-title">��� 10 �� ������</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<table width="99%" border="0" align="center">
  <tr bgcolor="#efefef">
    <td align="center" class="m-tb"><b>�����</b></td>
    <td align="center" class="m-tb"><b>���� �����������</b></td>
    <td align="center" class="m-tb"><b>�����</b></td>
  </tr>
<?php
	$db->Query("SELECT * FROM `db_users_b`,`db_users_a` WHERE db_users_b.id = db_users_a.id ORDER BY `insert_sum` DESC LIMIT 10 ");
	while($data = $db->FetchArray()){
	?>
	<tr class="htt" >
		<td align="center" width="75"><?=$data['user']; ?></td>
		<td align="center"><b><?=date("d.m.Y � H:i",$data["date_reg"]); ?></b></td>
		<td align="center"><b><font color="green"><?=$data["insert_sum"]; ?></font></b></td>
	</tr>
	<?php
	}
?>
</table>
</div>
<br/>
<div class="s-bk-lf">
	<div class="acc-title">��� 10 �� �������</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<table width="99%" border="0" align="center">
  <tr bgcolor="#efefef">
    <td align="center" class="m-tb"><b>�����</b></td>
    <td align="center" class="m-tb"><b>���� �����������</b></td>
    <td align="center" class="m-tb"><b>�����</b></td>
  </tr>
<?php
	$db->Query("SELECT * FROM `db_users_b`,`db_users_a` WHERE db_users_b.id = db_users_a.id ORDER BY `payment_sum` DESC LIMIT 10 ");
	while($data = $db->FetchArray()){
	?>
	<tr class="htt" >
		<td align="center" width="75"><?=$data['user']; ?></td>
		<td align="center"><b><?=date("d.m.Y � H:i",$data["date_reg"]); ?></b></td>
		<td align="center"><b><font color="green"><?=$data["payment_sum"]; ?></font></b></td>
	</tr>
	<?php
	}
?>
</table>
</div>
<br/>
<div class="s-bk-lf">
	<div class="acc-title">��� 10 �� ���������</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<table width="99%" border="0" align="center">
  <tr bgcolor="#efefef">
    <td align="center" class="m-tb"><b>�����</b></td>
    <td align="center" class="m-tb"><b>���������� �� ��������� (�������)</b></td>
    <td align="center" class="m-tb"><b>���-��</b></td>
  </tr>
<?php
	$db->Query("SELECT * FROM `db_users_b`,`db_users_a` WHERE db_users_b.id = db_users_a.id ORDER BY `referals` DESC LIMIT 10 ");
	while($data = $db->FetchArray()){
	?>
	<tr class="htt" >
		<td align="center" width="75"><?=$data['user']; ?></td>
		<td align="center"><b><?=$data["from_referals"]; ?></b></td>
		<td align="center"><b><font color="green"><?=$data["referals"]; ?></font></b></td>
	</tr>
	<?php
	}
?>
</table>
</div>
<div class="clr"></div>	