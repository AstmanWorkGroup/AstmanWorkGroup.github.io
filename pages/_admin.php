<?PHP
$_OPTIMIZATION["title"] = "���������������� ������";
$_OPTIMIZATION["description"] = "������� ������������";
$_OPTIMIZATION["keywords"] = "�������, ������ �������, ������������";
$not_counters = true;
# ���������� ������
if(!isset($_SESSION["admin"])){ include("pages/admin/_login.php"); return; }

if(isset($_GET["sel"])){
		
	$smenu = strval($_GET["sel"]);
			
	switch($smenu){
		
		case "404": include("pages/_404.php"); break; // �������� ������
		case "control": include("pages/admin/_control.php"); break; // ��������
		case "chat": include("pages/admin/_chat.php"); break; // ���
		case "bes": include("pages/admin/_bes.php"); break; // ������ �������
		case "otv": include("pages/admin/_otv.php"); break; // ������� �� ���. ���������
		case "tik": include("pages/admin/_tik.php"); break; // ���. ���������
		case "video": include("pages/admin/_video.php"); break; // �����
		case "stats": include("pages/admin/_stats.php"); break; // ����������
		case "config": include("pages/admin/_config.php"); break; // ���������
		case "contacts": include("pages/admin/_contacts.php"); break; // ��������
		case "rules": include("pages/admin/_rules.php"); break; // �������
		case "about": include("pages/admin/_about.php"); break; // � �����
		case "story_buy": include("pages/admin/_story_buy.php"); break; // ������� ������� ��������
		case "story_swap": include("pages/admin/_story_swap.php"); break; // ������� ������ � ���������
                case "compconfig": include("pages/admin/_compconfig.php"); break; // ���������� ����������
		case "story_insert": include("pages/admin/_story_insert.php"); break; // ������� ���������� �������
		case "story_sell": include("pages/admin/_story_sell.php"); break; // ������� �����
		case "news": include("pages/admin/_news_a.php"); break; // �������	
		case "knb": include("pages/admin/_knb.php"); break; // �������
		case "users": include("pages/admin/_users.php"); break; // ������ �������������
		case "pay_systems": include("pages/admin/_pay_systems.php"); break; // ������ ��������� ������
		case "payments": include("pages/admin/_payments.php"); break; // �������
		case "payments2": include("pages/admin/_payments2.php"); break; // �������2
		case "sender": include("pages/admin/_sender.php"); break; // �������� �������������	
		case "pay_systems": include("pages/admin/_pay_systems.php"); break; // ��������� �������
			
	# �������� ������
	default: @include("pages/_404.php"); break;
			
	}
			
}else @include("pages/admin/_stats.php");

?>