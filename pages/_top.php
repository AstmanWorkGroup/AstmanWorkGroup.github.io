<?PHP
$_OPTIMIZATION["title"] = "Топ 10 по вводам/выводам";
$_OPTIMIZATION["description"] = "Топ 10 по вводам/выводам";
$_OPTIMIZATION["keywords"] = "Топ 10, по вводам, по выводам";
?>
<div class="s-bk-lf">
	<div class="acc-title">Топ 10 по вводам</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<table width="99%" border="0" align="center">
  <tr bgcolor="#efefef">
    <td align="center" class="m-tb"><b>Логин</b></td>
    <td align="center" class="m-tb"><b>Дата регистрации</b></td>
    <td align="center" class="m-tb"><b>Сумма</b></td>
  </tr>
<?php
	$db->Query("SELECT * FROM `db_users_b`,`db_users_a` WHERE db_users_b.id = db_users_a.id ORDER BY `insert_sum` DESC LIMIT 10 ");
	while($data = $db->FetchArray()){
	?>
	<tr class="htt" >
		<td align="center" width="75"><?=$data['user']; ?></td>
		<td align="center"><b><?=date("d.m.Y в H:i",$data["date_reg"]); ?></b></td>
		<td align="center"><b><font color="green"><?=$data["insert_sum"]; ?></font></b></td>
	</tr>
	<?php
	}
?>
</table>
</div>
<br/>
<div class="s-bk-lf">
	<div class="acc-title">Топ 10 по выводам</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<table width="99%" border="0" align="center">
  <tr bgcolor="#efefef">
    <td align="center" class="m-tb"><b>Логин</b></td>
    <td align="center" class="m-tb"><b>Дата регистрации</b></td>
    <td align="center" class="m-tb"><b>Сумма</b></td>
  </tr>
<?php
	$db->Query("SELECT * FROM `db_users_b`,`db_users_a` WHERE db_users_b.id = db_users_a.id ORDER BY `payment_sum` DESC LIMIT 10 ");
	while($data = $db->FetchArray()){
	?>
	<tr class="htt" >
		<td align="center" width="75"><?=$data['user']; ?></td>
		<td align="center"><b><?=date("d.m.Y в H:i",$data["date_reg"]); ?></b></td>
		<td align="center"><b><font color="green"><?=$data["payment_sum"]; ?></font></b></td>
	</tr>
	<?php
	}
?>
</table>
</div>
<br/>
<div class="s-bk-lf">
	<div class="acc-title">Топ 10 по рефералам</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<table width="99%" border="0" align="center">
  <tr bgcolor="#efefef">
    <td align="center" class="m-tb"><b>Логин</b></td>
    <td align="center" class="m-tb"><b>Заработано на рефералах (серебра)</b></td>
    <td align="center" class="m-tb"><b>Кол-во</b></td>
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