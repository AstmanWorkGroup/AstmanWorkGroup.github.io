<?PHP
$_OPTIMIZATION["title"] = "Аккаунт";
$_OPTIMIZATION["description"] = "Аккаунт пользователя";
$_OPTIMIZATION["keywords"] = "Аккаунт, личный кабинет, пользователь";

# Блокировка сессии
if(!isset($_SESSION["user_id"])){ Header("Location: /"); return; }

if(isset($_GET["sel"])){
		
	$smenu = strval($_GET["sel"]);
			
	switch($smenu){
		
		case "404": include("pages/_404.php"); break; // Страница ошибки  
		case "bes": include("pages/account/_bes.php"); break; // Беседка
		case "otv": include("pages/account/_otv.php"); break; // Ответы на тех. поддержку
		case "rabot": include("pages/account/_rabot.php"); break; // Лтчный кабинет
		case "referals": include("pages/account/_referals.php"); break; // Рефералы
		case "referals2": include("pages/account/_referals2.php"); break; // Рефералы2
		case "farm": include("pages/account/_farm.php"); break; // Моя ферма
		case "gono4ki": include("pages/account/_gono4ki.php"); break; // Гонки машин
case "add_bil": include("pages/account/_add_bil.php"); break; // Покупка билетов для КФ
		case "bonus2": include("pages/account/_bonus2.php"); break; // Бонус с риском
		case "store": include("pages/account/_store.php"); break; // Склад
                case "knb": include("pages/_knb.php"); break; // КНБ
		case "swap": include("pages/account/_swap.php"); break; // Обменный пункт
                case "back": include("pages/account/_back.php"); break; // Накопительный банк
		case "market": include("pages/account/_market.php"); break; // Рынок
		case "payment": include("pages/account/_payment.php"); break; // Выплата WM
                case "auc": include("pages/account/_auc.php"); break; // аукцион
		case "insert": include("pages/account/_insert.php"); break; // Пополнение баланса
		case "config": include("pages/account/_config.php"); break; // Настройки
		case "bonus": include("pages/account/_bonus.php"); break; // Ежедневный бонус
                case "set": include("pages/account/_set.php"); break; // Сэты
		case "lottery": include("pages/account/_lottery.php"); break; // Лотерея
		case "reklam": include("pages/account/_reklam.php"); break; // reklam
		case "conf_qiwi": include("pages/account/_conf_qiwi.php"); break; // r23
		case "conf_payeer": include("pages/account/_conf_payeer.php"); break; // r23
		case "payeercreate": include("pages/account/_payeercreate.php"); break; // Payeer tutor
				
		case "exit": @session_destroy(); Header("Location: /"); return; break; // Выход
				
	# Страница ошибки
	default: @include("pages/_404.php"); break;
			
	}
			
}else @include("pages/account/_user_account.php");

?>