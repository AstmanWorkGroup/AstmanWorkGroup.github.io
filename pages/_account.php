<?PHP
$_OPTIMIZATION["title"] = "�������";
$_OPTIMIZATION["description"] = "������� ������������";
$_OPTIMIZATION["keywords"] = "�������, ������ �������, ������������";

# ���������� ������
if(!isset($_SESSION["user_id"])){ Header("Location: /"); return; }

if(isset($_GET["sel"])){
		
	$smenu = strval($_GET["sel"]);
			
	switch($smenu){
		
		case "404": include("pages/_404.php"); break; // �������� ������  
		case "bes": include("pages/account/_bes.php"); break; // �������
		case "otv": include("pages/account/_otv.php"); break; // ������ �� ���. ���������
		case "rabot": include("pages/account/_rabot.php"); break; // ������ �������
		case "referals": include("pages/account/_referals.php"); break; // ��������
		case "referals2": include("pages/account/_referals2.php"); break; // ��������2
		case "farm": include("pages/account/_farm.php"); break; // ��� �����
		case "gono4ki": include("pages/account/_gono4ki.php"); break; // ����� �����
case "add_bil": include("pages/account/_add_bil.php"); break; // ������� ������� ��� ��
		case "bonus2": include("pages/account/_bonus2.php"); break; // ����� � ������
		case "store": include("pages/account/_store.php"); break; // �����
                case "knb": include("pages/_knb.php"); break; // ���
		case "swap": include("pages/account/_swap.php"); break; // �������� �����
                case "back": include("pages/account/_back.php"); break; // ������������� ����
		case "market": include("pages/account/_market.php"); break; // �����
		case "payment": include("pages/account/_payment.php"); break; // ������� WM
                case "auc": include("pages/account/_auc.php"); break; // �������
		case "insert": include("pages/account/_insert.php"); break; // ���������� �������
		case "config": include("pages/account/_config.php"); break; // ���������
		case "bonus": include("pages/account/_bonus.php"); break; // ���������� �����
                case "set": include("pages/account/_set.php"); break; // ����
		case "lottery": include("pages/account/_lottery.php"); break; // �������
		case "reklam": include("pages/account/_reklam.php"); break; // reklam
		case "conf_qiwi": include("pages/account/_conf_qiwi.php"); break; // r23
		case "conf_payeer": include("pages/account/_conf_payeer.php"); break; // r23
		case "payeercreate": include("pages/account/_payeercreate.php"); break; // Payeer tutor
				
		case "exit": @session_destroy(); Header("Location: /"); return; break; // �����
				
	# �������� ������
	default: @include("pages/_404.php"); break;
			
	}
			
}else @include("pages/account/_user_account.php");

?>