<?PHP
######################################
# ������ Fruit Farm
# ����� Rufus
# ICQ: 819-374
# Skype: Rufus272
######################################
$_OPTIMIZATION["title"] = "������� ������";
$_OPTIMIZATION["description"] = "����, �����������";
$_OPTIMIZATION["keywords"] = "����, �����������";
$user_id = $_SESSION["user"];
$db->Query("SELECT * FROM db_users_a, db_users_b WHERE db_users_a.id = db_users_b.id AND db_users_a.id = '$user_id'");
$prof_data = $db->FetchArray();
?>
<div class="s-bk-lf">
	<div class="acc-title">��������</div>
</div>
<div class="silver-bk">

<center><div class="field-gr"><a href="/admin/chat">��������� ����</a></div></center>

</a><p><center><div class="field-gr"><a href="/admin/tik">���. ���������</a></div></center>

<br><center><div class="field-gr"><a href="/admin/video">�����</a></div></center>

</a><p><center><div class="field-gr"><a href="/admin/bes">������</a></div></center>

<br><center><div class="field-gr"><a href="/admin/knb">��������� �/�/�</a></div></center>

</td></tr></tbody></table><br></div><br>

</div>
