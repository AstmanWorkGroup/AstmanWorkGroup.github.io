<?PHP
######################################
# Скрипт Fruit Farm
# Автор Rufus
# ICQ: 819-374
# Skype: Rufus272
######################################
$_OPTIMIZATION["title"] = "Игровой раздел";
$_OPTIMIZATION["description"] = "Игры, развлечения";
$_OPTIMIZATION["keywords"] = "Игры, развлечения";
$user_id = $_SESSION["user"];
$db->Query("SELECT * FROM db_users_a, db_users_b WHERE db_users_a.id = db_users_b.id AND db_users_a.id = '$user_id'");
$prof_data = $db->FetchArray();
?>
<div class="s-bk-lf">
	<div class="acc-title">Контроль</div>
</div>
<div class="silver-bk">

<center><div class="field-gr"><a href="/admin/chat">Модерация ЧАТА</a></div></center>

</a><p><center><div class="field-gr"><a href="/admin/tik">Тех. поддержка</a></div></center>

<br><center><div class="field-gr"><a href="/admin/video">Видео</a></div></center>

</a><p><center><div class="field-gr"><a href="/admin/bes">Работа</a></div></center>

<br><center><div class="field-gr"><a href="/admin/knb">Модерация К/Н/Б</a></div></center>

</td></tr></tbody></table><br></div><br>

</div>
