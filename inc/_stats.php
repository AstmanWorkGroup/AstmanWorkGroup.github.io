<?PHP
$tfstats = time() - 60*60*24;
$db->Query("SELECT 
(SELECT COUNT(*) FROM db_users_a) all_users,
(SELECT SUM(insert_sum) FROM db_users_b) all_insert, 
(SELECT SUM(payment_sum) FROM db_users_b) all_payment, 
(SELECT COUNT(*) FROM db_users_a WHERE date_reg > '$tfstats') new_users");
$stats_data = $db->FetchArray();

?>

	
<div class="statistic">
	<div class="st-lf">
	<div class="line">Всего участников: </div>
	<div class="line">Новых за 24 часа: </div>
	<div class="line">Выплачено всего: </div>
	<div class="line">Резерв проекта: </div>
	<div class="line">Серверное время: </div>
	</div>
	<div class="st-rg">
	<div class="line-st"><?=$stats_data["all_users"]; ?> чел.</div>
	<div class="line-st"><?=$stats_data["new_users"]; ?> чел.</div>
	<div class="line-st"><a href="/payments" style="text-decoration:none; color: blue;"><?=sprintf("%.2f",$stats_data["all_payment"]); ?></a> </div>
	<div class="line-st"><?=sprintf("%.2f",$stats_data["all_insert"]); ?> </div>
	<div class="line-st" id="stattime"><?= str_replace('0','', date('H:i:s')); ?></div>
	</div>
	<div class="clr"></div>
    <div class="st-time">Старт проекта: <font color="#f77827">26.07.2014</font></div>
</div>




<div class="stat">
	<div class="h-title">Платежные системы:</div>
	<div class="cntrl-ps">
	<div class="clr"></div>
	</div>
<div class="clr"></div>
</div>
</div>


<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>
<div data-background-alpha="0.0" data-buttons-color="ff9300" data-counter-background-color="ffffff" data-share-counter-size="11" data-share-counter-type="common" data-top-button="true" data-share-style="9" data-mode="share" data-follow-vk="moneybirds" data-like-text-enable="false" data-hover-effect="rotate-cw" data-icon-color="ffffff" data-orientation="fixed-left" data-text-color="000000" data-share-shape="round" data-sn-ids="fb.tw.ok.vk.gp.mr.lj.bl.my.ln.ya." data-background-color="ededed" data-share-size="30" data-pid="1269393" data-counter-background-alpha="1.0" data-following-enable="true" data-selection-enable="true" class="uptolike-buttons" ></div>

<br><center><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t28.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано количество просмотров и"+
" посетителей' "+
"border='0' width='88' height='120'><\/a>")
//--></script><!--/LiveInternet-->
<!-- "SeoSle.ru" --> <a href="http://www.seosle.ru/" title="Бесплатная раскрутка"><img alt="Бесплатная регистрация в поисковых системах" src="http://seosle.ru/logseo.gif" border=0></a> <!-- "SeoSle.ru" --> 
<a href="http://raskrutka-sajta.ucoz.com/" title="Бесплатная раскрутка сайтов"><img src="http://raskrutka-sajta.ucoz.com/banner.gif" border="0"></a>
<a href="http://www.prodvin-sam.ru"><img src="http://www.prodvin-sam.ru/bann1_1.jpg"></a>











