<?PHP
$_OPTIMIZATION["title"] = "������";
$_OPTIMIZATION["description"] = "����� � ��������������";
$_OPTIMIZATION["keywords"] = "����� � �������������� �������";
?>
<div class="s-bk-lf">
	<div class="acc-title">������</div>
</div>
<div class="silver-bk"><div class="clr"></div>	
<?PHP

$db->Query("SELECT contacts FROM db_conabrul WHERE id = '1'");
$xt = $db->FetchRow();
echo $xt;
?>

<?PHP
$_OPTIMIZATION["title"] = "���";
$usid = $_SESSION["user_id"];
$uname = $_SESSION["user"];
$avp = $_SESSION["user_avp"];
$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();
$dadd = time();
?>
<?PHP

if(isset($_POST["tik"])) {

	$text =$_POST["ntext"];
if($user_data["money_b"] >0) # ��������� ������� �����
{	
if (preg_match("/[\>|\<]/",$text)) # ��������� ������� < � >
{ echo "<center><b><font color = 'red'>��������� �������� ����������� �������</font></b></center><BR />";
} else {	
	
		
			$db->Query("INSERT INTO db_tik (user, tekst, date_add) VALUES ('$uname','$text','$dadd')");
			$db->Query("UPDATE db_users_b SET money_b = money_b - 0 WHERE id = '$usid'");
			echo "<center><b><font color = 'blue'>��������� ����������</font></b></center><BR />";
			
}
} else echo "<center><b><font color = 'red'>������ ��� ���������� � ����������� ���������, ����������, ���������������!</font></b></center><BR />";
} 
?>
<center>���. ���������<br>(<font color="blue">��� ��������� �� ������ ��������� ��������, ��� ������� ��� ����� ������!</font>)</center>
<center><?PHP if($user_data["money_b"] >-1) {?><form action="" method="post"><BR />
<textarea  name="ntext" cols="70" rows="5"><?=(isset($_POST["ntext"])) ? $_POST["ntext"] : false; ?></textarea><BR />
<center><input type="submit" name="tik" value="���������" /></center><br><center><div class="field-gr"><a href="/account/otv">��� ������ �� ������ ������� �����</a></div></center> <?PHP } else {	?> <br>������ ��� ���������� � ����������� ���������, ����������, ���������������!<?PHP } ?></center>
<div class="clr"></div>	

</div>