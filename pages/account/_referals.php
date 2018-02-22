<div class="s-bk-lf">
	<div class="acc-title">Партнерская программа</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "Видео конкурс";
$usid = $_SESSION["user_id"];
$uname = $_SESSION["user"];
$avp = $_SESSION["user_avp"];
$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();
$dadd = time();
$knbItem[1] = 'Камень';
$knbItem[2] = 'Ножницы';
$knbItem[3] = 'Бумага';
if(isset($_POST['del'])) {
	$del=intval($_POST['del']);
	$db->Query("SELECT * FROM `db_bes` WHERE `id` = ".$del);
	$row = $db->FetchArray();
	$db->Query("DELETE FROM `db_bes` WHERE `id` = ".$del);
	$deleted=1;
}
if(isset($_POST['del2'])) {
	$del=intval($_POST['del2']);
	$db->Query("DELETE FROM `db_bes` WHERE `id` = ".$del);
	$deleted=1;
}
?>
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Партнерская программа";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id = '$user_id'");
$refs = $db->FetchRow();
?>  

<div class="silver-bk">Приглашайте в игру своих друзей и знакомых, Вы будете получать 15% от каждого пополнения баланса  
приглашенным Вами человеком. Доход ни чем не ограничен. Даже несколько приглашенных могут 
принести вам более 100 000 серебра. 
Ниже представлена ссылка для привлечения и количество приглашенных Вами людей.<br /><br />
<center><img src="/img/piar-link.png" style="vertical-align:-2px; margin-right:5px;" /><font color="#000;">http://<?=$_SERVER['HTTP_HOST']; ?>/?i=<?=$_SESSION["user_id"]; ?></font><br>

<div class="clr"></div>	
<p><center>Количество ваших рефералов: <font color="#000;"><?=$refs; ?> чел.</font></center></p>

<table cellpadding='3' cellspacing='0' border='0' bordercolor='#336633' align='center' width='98%'>
<tr height='25' valign=top align=center>
	<td class="m-tb"> Псевдоним </td>
	<td class="m-tb"> Email </td>
	<td class="m-tb"> Дата регистрации </td>
	<td class="m-tb"> Доход от партнера </td>
</tr>

<?PHP
  $all_money = 0;
  $db->Query("SELECT db_users_a.user, db_users_a.email, db_users_a.date_reg, db_users_b.to_referer FROM db_users_a, db_users_b 
  WHERE db_users_a.id = db_users_b.id AND db_users_a.referer_id = '$user_id' ORDER BY to_referer DESC");
  
	if($db->NumRows() > 0){
  
  		while($ref = $db->FetchArray()){
		
		?>
		<tr height="25" class="htt" valign="top" align="center">
			<td align="center"> <?=$ref["user"]; ?> </td>
			<td align="center"> <?=$ref["email"]; ?> </td>
			<td align="center"> <?=date("d.m.Y в H:i:s",$ref["date_reg"]); ?> </td>
			<td align="center"> <?=sprintf("%.2f",$ref["to_referer"]); ?> </td>
		</tr>

		<?PHP
		$all_money += $ref["to_referer"];
		}
  
	}else echo '<tr><td align="center" colspan="3"><center>У вас нет рефералов</center></td></tr>'
  ?>

</table>

<div class="clr"></div>	
</div>

<div class="clr"></div>	