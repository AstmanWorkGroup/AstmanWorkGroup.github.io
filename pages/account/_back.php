<?PHP
$_OPTIMIZATION["title"] = "������� - ������������� ����";
$usid = $_SESSION["user_id"];
$uname = $_SESSION["user"];

$um = 11;

$db->Query("SELECT * FROM db_config WHERE id = '1'");
$data_c = $db->FetchArray();
$db->FreeMemory();

# ����������� �������� �� ����� '������������� ����'
$c_date = date("Ymd",time());
$c_date_begin = strtotime($c_date." 00:00:00");
$c_date_end = strtotime($c_date." 23:59:59");

$db->Query("SELECT sum(serebro) FROM db_insert_money WHERE date_add >='".$c_date_begin."' AND  date_add <='".$c_date_end."'");
if($db->NumRows() == 0) $sum_c = 0;
else $sum_c = $db->FetchRow();

if($sum_c == '') $sum_c = 0;
?>
<div class="s-bk-lf">
	<div class="acc-title">������������� ����</div>
</div>
<div class="silver-bk">
<div class="clr"></div>	

������������� ���� - ��� ���������� ����������� �������� �������������� ����� ��� ���������� �� 100 RUB! 
<br>�� ����� ������ ���������� � ��� ������ ���������� ������� ����� �������� ���� ���������, ��� ���� �����, ������ � ����, �� ���������� � ��������� 
<br>��� ������ ����� ���������� � ��� ���� ����������� ������� ���� �������� ����, ����������� �������������� �� ��������� �������: (����� ���������� / 100) = (���� ����������� � ���������, �� �� ����� 50%)
<br>����� �������� �������� �� ���� ��� �������.<br><br><center><h2><font color = red>������� ����: <?=$sum_c?> �������</font></h2></center>
<table cellpadding='3' cellspacing='0' border='0' bordercolor='#336633' align='center' width="99%">
  <tr>
    <td colspan="5" align="center"><h4>��������� 20 �����������</h4></td>
    </tr>
  <tr>
    <td align="center" class="m-tb">ID</td>
    <td align="center" class="m-tb">������������</td>	
    <td align="center" class="m-tb">�����</td>
	<td align="center" class="m-tb">����</td>
  </tr>

<?PHP
$db->Query("SELECT a.id as id, a.sum as sum, a.bank as bank, a.date_add as date_add, b.user as user FROM db_back a LEFT OUTER JOIN db_users_a b ON b.id = a.user_id ORDER BY a.id DESC LIMIT 20");


if($db->NumRows() > 0) {
	$count = 0;
	
	while($bon = $db->FetchArray()) {
		if($count%2 == 0) {
?>
		<tr class="htt">
    		<td align="center"><?=$bon["id"]; ?></td>
    		<td align="center"><?=$bon["user"]; ?></td>			
    		<td align="center"><?=$bon["sum"]; ?></td>
    		<td align="center"><?=date("d.m.Y",$bon["date_add"]); ?></td>
  		</tr>

<?PHP
		} else {
?>

		<tr class="htt">
    		<td align="center"><?=$bon["id"]; ?></td>
    		<td align="center"><?=$bon["user"]; ?></td>			
    		<td align="center"><?=$bon["sum"]; ?></td>
    		<td align="center"><?=date("d.m.Y",$bon["date_add"]); ?></td>
  		</tr>

<?PHP
		}
		
		$count ++;
	}
} else echo '<tr><td align="center" colspan=5>��� �������</td></tr>'
?>

</table>
<div class="clr"></div>		
</div>
