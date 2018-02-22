<ul class="hd-menu">
    <li><a href="/" <?=(!isset($_GET["menu"]) OR strtolower($_GET["menu"]) == "index") ? 'class="current"' : False; ?>>Главная</a></li></ul> 
	<ul class="hd-menu1">
    <li><a href="/news" <?=(isset($_GET["menu"]) AND strtolower($_GET["menu"]) == "news") ? 'class="current"' : False; ?>>Новости</a></li></ul> 
	<ul class="hd-menu2">
    <li><a href="/rules" <?=(isset($_GET["menu"]) AND strtolower($_GET["menu"]) == "rules") ? 'class="current"' : False; ?>>Правила</a></li></ul> 
	<ul class="hd-menu3">
    <li><a href="/about" <?=(isset($_GET["menu"]) AND strtolower($_GET["menu"]) == "about") ? 'class="current"' : False; ?>>О ферме</a></li></ul> 
	<ul class="hd-menu4">
	<li><a href="/contacts" <?=(isset($_GET["menu"]) AND strtolower($_GET["menu"]) == "contacts") ? 'class="current"' : False; ?>>Контакты</a></li> 
	<ul class="hd-menu5">
	<li><a href="/otziv" <?=(isset($_GET["menu"]) AND strtolower($_GET["menu"]) == "otziv") ? 'class="current"' : False; ?>>Отзыв</a></li>
</ul> 