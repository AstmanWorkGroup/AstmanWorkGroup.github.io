 <?PHP
$_OPTIMIZATION["title"] = "������� - �����";
$usid = $_SESSION["user_id"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();

	if(isset($_POST["sbor"])){
	
		if($user_data["last_sbor"] < (time() - 600) ){
		
			$tomat_s = $func->SumCalc($sonfig_site["a_in_h"], $user_data["a_t"], $user_data["last_sbor"]);
			$straw_s = $func->SumCalc($sonfig_site["b_in_h"], $user_data["b_t"], $user_data["last_sbor"]);
			$pump_s = $func->SumCalc($sonfig_site["c_in_h"], $user_data["c_t"], $user_data["last_sbor"]);
			$peas_s = $func->SumCalc($sonfig_site["d_in_h"], $user_data["d_t"], $user_data["last_sbor"]);
			$pean_s = $func->SumCalc($sonfig_site["e_in_h"], $user_data["e_t"], $user_data["last_sbor"]);
			$super_s = $func->SumCalc($sonfig_site["f_in_h"], $user_data["f_t"], $user_data["last_sbor"]);
			
			$db->Query("UPDATE db_users_b SET 
			a_b = a_b + '$tomat_s', 
			b_b = b_b + '$straw_s', 
			c_b = c_b + '$pump_s', 
			d_b = d_b + '$peas_s', 
			e_b = e_b + '$pean_s', 
			f_b = f_b + '$super_s', 
			all_time_a = all_time_a + '$tomat_s',
			all_time_b = all_time_b + '$straw_s',
			all_time_c = all_time_c + '$pump_s',
			all_time_d = all_time_d + '$peas_s',
			all_time_e = all_time_e + '$pean_s',
			all_time_f = all_time_f + '$super_s',
			last_sbor = '".time()."' 
			WHERE id = '$usid' LIMIT 1");
			
			echo "<center><font color = 'green'><b>�� ������� ���</b></font></center><BR />";
			
			$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
			$user_data = $db->FetchArray();
			
		}else echo "<center><font color = 'red'><b>��� ����� �������� �� ���� 1�� ���� �� 10 �����</b></font></center><BR />";
	
	}



?>
    <div class="cl-left"><div class="profmenu"><div class="prof-title"><?=$_SESSION["user"]; ?></div>
		<div class="field-gr #f8e485"><a href="/account"><font color = "#f8e485">�������</font></a></div>
        <div class="field-gr #f8e485"><a href="/account/config"><font color = "#f8e485">���������</font></a></div>
        <div class="field-rd"><a href="/account/exit"><font color = "#f8e485">�����</font></a></div></div>
		
		
    <div class="secondprofmenu">
	<div class="field-gr kupit"><a href="/account/farm">������ ����</a></div>
	<div class="field-gr sklad"><a href="/account/store">����� ���</a></div>
	<div class="field-gr prod"><a href="/account/market">������� ���</a></div>
	<div class="field-gr black"><a href="/account/bonus">���������� �����</a></div>
	<div class="field-gr"><a href="/account/bonus2">����� � ������</a></div>
    	<?php
		if($user_data["f_t"] < 1) {
		print '
	<div class="fr-te-gr">
	 <div class="field-gr red"><a href="/account/gono4ki">����� �����</a></div> </div>';
		} else {
		
		?>

	<div class="field-gr red"><a href="/account/bes">������ �������</a></div>
<?php } ?>
	</div>
	
	       <div class="profmenu"><div class="prof-title">����</div>
	       <div class="field-gr"><a href="/account/auc"><font color = "#f8e485">�������</font></a></div>
	      <div class="field-gr"><a href="/account/knb"><font color = "#f8e485">�/�/�</font></a></div>
	      <div class="field-gr"><a href="/account/lottery"><font color = "#f8e485">�������</font></a></div></div>
		  
		  <div class="secondprofmenu">
<div class="field-gr"><a href="/competition">������� ���������</a></div>
	<div class="field-gr"><a href="/account/swap">��������</a></div>
	<div class="field-gr"><a href="/account/referals">���� ��������</a></div>
	<div class="field-gr"><a href="/account/set">���������� ����</a></div>
	<div class="field-gr"><a href="/account/back">������������� ����</a></div>
	<div class="field-gr red"><a href="/account/reklam">��������� ������</a></div></div>
	
	<div class="lastprofmenu"><div class="field-gr red"><a href="/account/insert">��������� ������</a></div>
	<div class="field-gr"><a href="/account/payment">�������� �������</a></div></div>
	<div class="balance">
	<div class="bal-title">��������� �����</div>
	<div class="field-ar"><a href="/account/insert">{!BALANCE_B!}</a>  <span style="margin:3px 10px 0px 0px;">[��� �������]</span></div>
	<div class="field-ars"><a href="/account/payment">{!BALANCE_P!}</a> <span style="margin:3px 10px 0px 0px;">[�� �����]</span></div>
	</div>

