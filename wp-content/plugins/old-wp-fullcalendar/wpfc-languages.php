<?php

function wpfc_get_calendar_languages(){

    $calendar_languages = array(

    	'nl'=>array('closeText'=>'Sluiten','prevText'=>'←','nextText'=>'→','currentText'=>'Vandaag','monthNames'=>array('januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'),'monthNamesShort'=>array('jan','feb','maa','apr','mei','jun','jul','aug','sep','okt','nov','dec'),'dayNames'=>array('zondag','maandag','dinsdag','woensdag','donderdag','vrijdag','zaterdag'),'dayNamesShort'=>array('zon','maa','din','woe','don','vri','zat'),'dayNamesMin'=>array('zo','ma','di','wo','do','vr','za'),'weekHeader'=>'Wk','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'af'=>array('closeText'=>'Selekteer','prevText'=>'Vorige','nextText'=>'Volgende','currentText'=>'Vandag','monthNames'=>array('Januarie','Februarie','Maart','April','Mei','Junie','Julie','Augustus','September','Oktober','November','Desember'),'monthNamesShort'=>array('Jan','Feb','Mrt','Apr','Mei','Jun','Jul','Aug','Sep','Okt','Nov','Des'),'dayNames'=>array('Sondag','Maandag','Dinsdag','Woensdag','Donderdag','Vrydag','Saterdag'),'dayNamesShort'=>array('Son','Maa','Din','Woe','Don','Vry','Sat'),'dayNamesMin'=>array('So','Ma','Di','Wo','Do','Vr','Sa'),'weekHeader'=>'Wk','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'ar'=>array('closeText'=>'إغلاق','prevText'=>'<السابق','nextText'=>'التالي>','currentText'=>'اليوم','monthNames'=>array('كانون الثاني','شباط','آذار','نيسان','آذار','حزيران','تموز','آب','أيلول','تشرين الأول','تشرين الثاني','كانون الأول'),'monthNamesShort'=>array('1','2','3','4','5','6','7','8','9','10','11','12'),'dayNames'=>array('السبت','الأحد','الاثنين','الثلاثاء','الأربعاء','الخميس','الجمعة'),'dayNamesShort'=>array('سبت','أحد','اثنين','ثلاثاء','أربعاء','خميس','جمعة'),'dayNamesMin'=>array('سبت','أحد','اثنين','ثلاثاء','أربعاء','خميس','جمعة'),'weekHeader'=>'أسبوع','dateFormat'=>'dd/mm/yy','firstDay'=>0,'isRTL'=>true,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'az'=>array('closeText'=>'Bağla','prevText'=>'<Geri','nextText'=>'İrəli>','currentText'=>'Bugün','monthNames'=>array('Yanvar','Fevral','Mart','Aprel','May','İyun','İyul','Avqust','Sentyabr','Oktyabr','Noyabr','Dekabr'),'monthNamesShort'=>array('Yan','Fev','Mar','Apr','May','İyun','İyul','Avq','Sen','Okt','Noy','Dek'),'dayNames'=>array('Bazar','Bazar ertəsi','Çərşənbə axşamı','Çərşənbə','Cümə axşamı','Cümə','Şənbə'),'dayNamesShort'=>array('B','Be','Ça','Ç','Ca','C','Ş'),'dayNamesMin'=>array('B','B','Ç','С','Ç','C','Ş'),'weekHeader'=>'Hf','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'bg'=>array('closeText'=>'затвори','prevText'=>'<назад','nextText'=>'напред>','nextBigText'=>'>>','currentText'=>'днес','monthNames'=>array('Януари','Февруари','Март','Април','Май','Юни','Юли','Август','Септември','Октомври','Ноември','Декември'),'monthNamesShort'=>array('Яну','Фев','Мар','Апр','Май','Юни','Юли','Авг','Сеп','Окт','Нов','Дек'),'dayNames'=>array('Неделя','Понеделник','Вторник','Сряда','Четвъртък','Петък','Събота'),'dayNamesShort'=>array('Нед','Пон','Вто','Сря','Чет','Пет','Съб'),'dayNamesMin'=>array('Не','По','Вт','Ср','Че','Пе','Съ'),'weekHeader'=>'Wk','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'bs'=>array('closeText'=>'Zatvori','prevText'=>'<','nextText'=>'>','currentText'=>'Danas','monthNames'=>array('Januar','Februar','Mart','April','Maj','Juni','Juli','August','Septembar','Oktobar','Novembar','Decembar'),'monthNamesShort'=>array('Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aug','Sep','Okt','Nov','Dec'),'dayNames'=>array('Nedelja','Ponedeljak','Utorak','Srijeda','Četvrtak','Petak','Subota'),'dayNamesShort'=>array('Ned','Pon','Uto','Sri','Čet','Pet','Sub'),'dayNamesMin'=>array('Ne','Po','Ut','Sr','Če','Pe','Su'),'weekHeader'=>'Wk','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'ca' => array('closeText'=> 'Tancar','prevText'=> '&#x3c;Ant','nextText'=> 'Seg&#x3e;','currentText'=> 'Avui','monthNames'=> array('Gener','Febrer','Mar&ccedil;','Abril','Maig','Juny','Juliol','Agost','Setembre','Octubre','Novembre','Desembre'),'monthNamesShort'=> array('Gen','Feb','Mar','Abr','Mai','Jun','Jul','Ago','Set','Oct','Nov','Des'),'dayNames'=> array('Diumenge','Dilluns','Dimarts','Dimecres','Dijous','Divendres','Dissabte'),'dayNamesShort'=> array('Dug','Dln','Dmt','Dmc','Djs','Dvn','Dsb'),'dayNamesMin'=> array('Dg','Dl','Dt','Dc','Dj','Dv','Ds'),'weekHeader'=> 'Sm','dateFormat'=> 'dd/mm/yy','firstDay'=> 1,'isRTL'=> false,'showMonthAfterYear'=> false,'yearSuffix'=> ''),

    	'cs'=>array('closeText'=>'Zavřít','prevText'=>'<Dříve','nextText'=>'Později>','currentText'=>'Nyní','monthNames'=>array('leden','únor','březen','duben','květen','červen','červenec','srpen','září','říjen','listopad','prosinec'),'monthNamesShort'=>array('led','úno','bře','dub','kvě','čer','čvc','srp','zář','říj','lis','pro'),'dayNames'=>array('neděle','pondělí','úterý','středa','čtvrtek','pátek','sobota'),'dayNamesShort'=>array('ne','po','út','st','čt','pá','so'),'dayNamesMin'=>array('ne','po','út','st','čt','pá','so'),'weekHeader'=>'Týd','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'da'=>array('closeText'=>'Luk','prevText'=>'<Forrige','nextText'=>'Næste>','currentText'=>'Idag','monthNames'=>array('Januar','Februar','Marts','April','Maj','Juni','Juli','August','September','Oktober','November','December'),'monthNamesShort'=>array('Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aug','Sep','Okt','Nov','Dec'),'dayNames'=>array('Søndag','Mandag','Tirsdag','Onsdag','Torsdag','Fredag','Lørdag'),'dayNamesShort'=>array('Søn','Man','Tir','Ons','Tor','Fre','Lør'),'dayNamesMin'=>array('Sø','Ma','Ti','On','To','Fr','Lø'),'weekHeader'=>'Uge','dateFormat'=>'dd-mm-yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'de'=>array('closeText'=>'schließen','prevText'=>'<zurück','nextText'=>'Vor>','currentText'=>'heute','monthNames'=>array('Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'),'monthNamesShort'=>array('Jan','Feb','Mär','Apr','Mai','Jun','Jul','Aug','Sep','Okt','Nov','Dez'),'dayNames'=>array('Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'),'dayNamesShort'=>array('So','Mo','Di','Mi','Do','Fr','Sa'),'dayNamesMin'=>array('So','Mo','Di','Mi','Do','Fr','Sa'),'weekHeader'=>'Wo','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'el'=>array('closeText'=>'Κλείσιμο','prevText'=>'Προηγούμενος','nextText'=>'Επόμενος','currentText'=>'Τρέχων Μήνας','monthNames'=>array('Ιανουάριος','Φεβρουάριος','Μάρτιος','Απρίλιος','Μάιος','Ιούνιος','Ιούλιος','Αύγουστος','Σεπτέμβριος','Οκτώβριος','Νοέμβριος','Δεκέμβριος'),'monthNamesShort'=>array('Ιαν','Φεβ','Μαρ','Απρ','Μαι','Ιουν','Ιουλ','Αυγ','Σεπ','Οκτ','Νοε','Δεκ'),'dayNames'=>array('Κυριακή','Δευτέρα','Τρίτη','Τετάρτη','Πέμπτη','Παρασκευή','Σάββατο'),'dayNamesShort'=>array('Κυρ','Δευ','Τρι','Τετ','Πεμ','Παρ','Σαβ'),'dayNamesMin'=>array('Κυ','Δε','Τρ','Τε','Πε','Πα','Σα'),'weekHeader'=>'Εβδ','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'en_GB'=>array('closeText'=>'Done','prevText'=>'Prev','nextText'=>'Next','currentText'=>'Today','monthNames'=>array('January','February','March','April','May','June','July','August','September','October','November','December'),'monthNamesShort'=>array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'),'dayNames'=>array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'),'dayNamesShort'=>array('Sun','Mon','Tue','Wed','Thu','Fri','Sat'),'dayNamesMin'=>array('Su','Mo','Tu','We','Th','Fr','Sa'),'weekHeader'=>'Wk','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'eo'=>array('closeText'=>'Fermi','prevText'=>'<Anta','nextText'=>'Sekv>','currentText'=>'Nuna','monthNames'=>array('Januaro','Februaro','Marto','Aprilo','Majo','Junio','Julio','Aŭgusto','Septembro','Oktobro','Novembro','Decembro'),'monthNamesShort'=>array('Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aŭg','Sep','Okt','Nov','Dec'),'dayNames'=>array('Dimanĉo','Lundo','Mardo','Merkredo','Ĵaŭdo','Vendredo','Sabato'),'dayNamesShort'=>array('Dim','Lun','Mar','Mer','Ĵaŭ','Ven','Sab'),'dayNamesMin'=>array('Di','Lu','Ma','Me','Ĵa','Ve','Sa'),'weekHeader'=>'Sb','dateFormat'=>'dd/mm/yy','firstDay'=>0,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'et'=>array('closeText'=>'Sulge','prevText'=>'Eelnev','nextText'=>'Järgnev','currentText'=>'Täna','monthNames'=>array('Jaanuar','Veebruar','Märts','Aprill','Mai','Juuni','Juuli','August','September','Oktoober','November','Detsember'),'monthNamesShort'=>array('Jaan','Veebr','Märts','Apr','Mai','Juuni','Juuli','Aug','Sept','Okt','Nov','Dets'),'dayNames'=>array('Pühapäev','Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede','Laupäev'),'dayNamesShort'=>array('Pühap','Esmasp','Teisip','Kolmap','Neljap','Reede','Laup'),'dayNamesMin'=>array('P','E','T','K','N','R','L'),'weekHeader'=>'Sm','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'eu'=>array('closeText'=>'Egina','prevText'=>'<Aur','nextText'=>'Hur>','currentText'=>'Gaur','monthNames'=>array('Urtarrila','Otsaila','Martxoa','Apirila','Maiatza','Ekaina','Uztaila','Abuztua','Iraila','Urria','Azaroa','Abendua'),'monthNamesShort'=>array('Urt','Ots','Mar','Api','Mai','Eka','Uzt','Abu','Ira','Urr','Aza','Abe'),'dayNames'=>array('Igandea','Astelehena','Asteartea','Asteazkena','Osteguna','Ostirala','Larunbata'),'dayNamesShort'=>array('Iga','Ast','Ast','Ast','Ost','Ost','Lar'),'dayNamesMin'=>array('Ig','As','As','As','Os','Os','La'),'weekHeader'=>'Wk','dateFormat'=>'yy/mm/dd','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'fa'=>array('closeText'=>'بستن','prevText'=>'<قبلي','nextText'=>'بعدي>','currentText'=>'امروز','monthNames'=>array('فروردين','ارديبهشت','خرداد','تير','مرداد','شهريور','مهر','آبان','آذر','دي','بهمن','اسفند'),'monthNamesShort'=>array('1','2','3','4','5','6','7','8','9','10','11','12'),'dayNames'=>array('يکشنبه','دوشنبه','سه‌شنبه','چهارشنبه','پنجشنبه','جمعه','شنبه'),'dayNamesShort'=>array('ي','د','س','چ','پ','ج','ش'),'dayNamesMin'=>array('ي','د','س','چ','پ','ج','ش'),'weekHeader'=>'هف','dateFormat'=>'yy/mm/dd','firstDay'=>6,'isRTL'=>true,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'fi'=>array('closeText'=>'Sulje','prevText'=>'<Edel','nextText'=>'Seur>','currentText'=>'Tänään','monthNames'=>array('Tammikuu','Helmikuu','Maaliskuu','Huhtikuu','Toukokuu','Kesäkuu','Heinäkuu','Elokuu','Syyskuu','Lokakuu','Marraskuu','Joulukuu'),'monthNamesShort'=>array('Tammi','Helmi','Maalis','Huhti','Touko','Kesä','Heinä','Elo','Syys','Loka','Marras','Joulu'),'dayNames'=>array('Sunnuntai','Maanantai','Tiistai','Keskiviikko','Torstai','Perjantai','Lauantai'),'dayNamesShort'=>array('Su','Ma','Ti','Ke','To','Pe','La'),'dayNamesMin'=>array('Su','Ma','Ti','Ke','To','Pe','La'),'weekHeader'=>'Sm','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'fo'=>array('closeText'=>'Lat aftur','prevText'=>'<Fyrra','nextText'=>'Næsta>','currentText'=>'Í dag','monthNames'=>array('Januar','Februar','Mars','Apríl','Mei','Juni','Juli','August','September','Oktober','November','Desember'),'monthNamesShort'=>array('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Aug','Sep','Okt','Nov','Des'),'dayNames'=>array('Sunnudagur','Mánadagur','Týsdagur','Mikudagur','Hósdagur','Fríggjadagur','Leyardagur'),'dayNamesShort'=>array('Sun','Mán','Týs','Mik','Hós','Frí','Ley'),'dayNamesMin'=>array('Su','Má','Tý','Mi','Hó','Fr','Le'),'weekHeader'=>'Vk','dateFormat'=>'dd-mm-yy','firstDay'=>0,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'fr_CH'=>array('closeText'=>'Fermer','prevText'=>'<Préc','nextText'=>'Suiv>','currentText'=>'Courant','monthNames'=>array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'),'monthNamesShort'=>array('Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'),'dayNames'=>array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'),'dayNamesShort'=>array('Dim','Lun','Mar','Mer','Jeu','Ven','Sam'),'dayNamesMin'=>array('Di','Lu','Ma','Me','Je','Ve','Sa'),'weekHeader'=>'Sm','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'fr'=>array('closeText'=>'Fermer','prevText'=>'<Préc','nextText'=>'Suiv>','currentText'=>'Courant','monthNames'=>array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'),'monthNamesShort'=>array('Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'),'dayNames'=>array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'),'dayNamesShort'=>array('Dim','Lun','Mar','Mer','Jeu','Ven','Sam'),'dayNamesMin'=>array('Di','Lu','Ma','Me','Je','Ve','Sa'),'weekHeader'=>'Sm','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'he'=>array('closeText'=>'סגור','prevText'=>'<הקודם','nextText'=>'הבא>','currentText'=>'היום','monthNames'=>array('ינואר','פברואר','מרץ','אפריל','מאי','יוני','יולי','אוגוסט','ספטמבר','אוקטובר','נובמבר','דצמבר'),'monthNamesShort'=>array('1','2','3','4','5','6','7','8','9','10','11','12'),'dayNames'=>array('ראשון','שני','שלישי','רביעי','חמישי','שישי','שבת'),'dayNamesShort'=>array('א\'','ב\'','ג\'','ד\'','ה\'','ו\'','שבת'),'dayNamesMin'=>array('א\'','ב\'','ג\'','ד\'','ה\'','ו\'','שבת'),'weekHeader'=>'Wk','dateFormat'=>'dd/mm/yy','firstDay'=>0,'isRTL'=>true,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'hu'=>array('closeText'=>'Kész','prevText'=>'Előző','nextText'=>'Következő','currentText'=>'Ma','monthNames'=>array('január','február','március','április','május','június','július','augusztus','szeptember','október','november','cecember'),'monthNamesShort'=>array('jan','febr','márc','ápr','máj','jún','júl','aug','szept','okt','nov','dec'),'dayNames'=>array('vasárnap','hétfő','kedd','szerda','csütörtök','péntek','szombat'),'dayNamesShort'=>array('va','hé','k','sze','csü','pé','szo'),'dayNamesMin'=>array('v','h','k','sze','cs','p','szo'),'weekHeader'=>'Wk','dateFormat'=>'yy.mm.dd.','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>true,'yearSuffix'=>''),

    	'hr'=>array('closeText'=>'Zatvori','prevText'=>'<','nextText'=>'>','currentText'=>'Danas','monthNames'=>array('Siječanj','Veljača','Ožujak','Travanj','Svibanj','Lipanj','Srpanj','Kolovoz','Rujan','Listopad','Studeni','Prosinac'),'monthNamesShort'=>array('Sij','Velj','Ožu','Tra','Svi','Lip','Srp','Kol','Ruj','Lis','Stu','Pro'),'dayNames'=>array('Nedjelja','Ponedjeljak','Utorak','Srijeda','Četvrtak','Petak','Subota'),'dayNamesShort'=>array('Ned','Pon','Uto','Sri','Čet','Pet','Sub'),'dayNamesMin'=>array('Ne','Po','Ut','Sr','Če','Pe','Su'),'weekHeader'=>'Tje','dateFormat'=>'dd.mm.yy.','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'ja'=>array('closeText'=>'閉じる','prevText'=>'<前','nextText'=>'次>','currentText'=>'今日','monthNames'=>array('1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'),'monthNamesShort'=>array('1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'),'dayNames'=>array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'),'dayNamesShort'=>array('日','月','火','水','木','金','土'),'dayNamesMin'=>array('日','月','火','水','木','金','土'),'weekHeader'=>'週','dateFormat'=>'yy/mm/dd','firstDay'=>0,'isRTL'=>false,'showMonthAfterYear'=>true,'yearSuffix'=>'年'),

    	'ro'=>array('closeText'=>'Închide','prevText'=>'« Luna precedentă','nextText'=>'Luna următoare »','currentText'=>'Azi','monthNames'=>array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie'),'monthNamesShort'=>array('Ian','Feb','Mar','Apr','Mai','Iun','Iul','Aug','Sep','Oct','Nov','Dec'),'dayNames'=>array('Duminică','Luni','Marţi','Miercuri','Joi','Vineri','Sâmbătă'),'dayNamesShort'=>array('Dum','Lun','Mar','Mie','Joi','Vin','Sâm'),'dayNamesMin'=>array('Du','Lu','Ma','Mi','Jo','Vi','Sâ'),'weekHeader'=>'Săpt','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'sk'=>array('closeText'=> 'Zavrieť','prevText'=> '&#x3c;Predchádzajúci','nextText'=> 'Nasledujúci&#x3e;','currentText'=> 'Dnes','monthNames'=> array('Január','Február','Marec','Apríl','Máj','Jún','Júl','August','September','Október','November','December'),'monthNamesShort'=> array('Jan','Feb','Mar','Apr','Máj','Jún','Júl','Aug','Sep','Okt','Nov','Dec'),'dayNames'=> array('Nedel\'a','Pondelok','Utorok','Streda','Štvrtok','Piatok','Sobota'),'dayNamesShort'=> array('Ned','Pon','Uto','Str','Štv','Pia','Sob'),'dayNamesMin'=> array('Ne','Po','Ut','St','Št','Pia','So'),'weekHeader'=> 'Ty','dateFormat'=> 'dd.mm.yy','firstDay'=> 1,'isRTL'=> false,'showMonthAfterYear'=> false,'yearSuffix'=> ''),

    	'sq'=>array('closeText'=>'mbylle','prevText'=>'<mbrapa','nextText'=>'Përpara>','currentText'=>'sot','monthNames'=>array('Janar','Shkurt','Mars','Prill','Maj','Qershor','Korrik','Gusht','Shtator','Tetor','Nëntor','Dhjetor'),'monthNamesShort'=>array('Jan','Shk','Mar','Pri','Maj','Qer','Kor','Gus','Sht','Tet','Nën','Dhj'),'dayNames'=>array('E Diel','E Hënë','E Martë','E Mërkurë','E Enjte','E Premte','E Shtune'),'dayNamesShort'=>array('Di','Hë','Ma','Më','En','Pr','Sh'),'dayNamesMin'=>array('Di','Hë','Ma','Më','En','Pr','Sh'),'weekHeader'=>'Ja','dateFormat'=>'dd.mm.yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'sr_SR'=>array('closeText'=>'Zatvori','prevText'=>'<','nextText'=>'>','currentText'=>'Danas','monthNames'=>array('Januar','Februar','Mart','April','Maj','Jun','Jul','Avgust','Septembar','Oktobar','Novembar','Decembar'),'monthNamesShort'=>array('Jan','Feb','Mar','Apr','Maj','Jun','Jul','Avg','Sep','Okt','Nov','Dec'),'dayNames'=>array('Nedelja','Ponedeljak','Utorak','Sreda','Četvrtak','Petak','Subota'),'dayNamesShort'=>array('Ned','Pon','Uto','Sre','Čet','Pet','Sub'),'dayNamesMin'=>array('Ne','Po','Ut','Sr','Če','Pe','Su'),'weekHeader'=>'Sed','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'sr'=>array('closeText'=>'Затвори','prevText'=>'<','nextText'=>'>','currentText'=>'Данас','monthNames'=>array('Јануар','Фебруар','Март','Април','Мај','Јун','Јул','Август','Септембар','Октобар','Новембар','Децембар'),'monthNamesShort'=>array('Јан','Феб','Мар','Апр','Мај','Јун','Јул','Авг','Сеп','Окт','Нов','Дец'),'dayNames'=>array('Недеља','Понедељак','Уторак','Среда','Четвртак','Петак','Субота'),'dayNamesShort'=>array('Нед','Пон','Уто','Сре','Чет','Пет','Суб'),'dayNamesMin'=>array('Не','По','Ут','Ср','Че','Пе','Су'),'weekHeader'=>'Сед','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'sv'=>array('closeText'=>'Stäng','prevText'=>'«Förra','nextText'=>'Nästa»','currentText'=>'Idag','monthNames'=>array('Januari','Februari','Mars','April','Maj','Juni','Juli','Augusti','September','Oktober','November','December'),'monthNamesShort'=>array('Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aug','Sep','Okt','Nov','Dec'),'dayNamesShort'=>array('Sön','Mån','Tis','Ons','Tor','Fre','Lör'),'dayNames'=>array('Söndag','Måndag','Tisdag','Onsdag','Torsdag','Fredag','Lördag'),'dayNamesMin'=>array('Sö','Må','Ti','On','To','Fr','Lö'),'weekHeader'=>'Ve','dateFormat'=>'yy-mm-dd','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'ta'=>array('closeText'=>'மூடு','prevText'=>'முன்னையது','nextText'=>'அடுத்தது','currentText'=>'இன்று','monthNames'=>array('தை','மாசி','பங்குனி','சித்திரை','வைகாசி','ஆனி','ஆடி','ஆவணி','புரட்டாசி','ஐப்பசி','கார்த்திகை','மார்கழி'),'monthNamesShort'=>array('தை','மாசி','பங்','சித்','வைகா','ஆனி','ஆடி','ஆவ','புர','ஐப்','கார்','மார்'),'dayNames'=>array('ஞாயிற்றுக்கிழமை','திங்கட்கிழமை','செவ்வாய்க்கிழமை','புதன்கிழமை','வியாழக்கிழமை','வெள்ளிக்கிழமை','சனிக்கிழமை'),'dayNamesShort'=>array('ஞாயிறு','திங்கள்','செவ்வாய்','புதன்','வியாழன்','வெள்ளி','சனி'),'dayNamesMin'=>array('ஞா','தி','செ','பு','வி','வெ','ச'),'weekHeader'=>'Не','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'th'=>array('closeText'=>'ปิด','prevText'=>'« ย้อน','nextText'=>'ถัดไป »','currentText'=>'วันนี้','monthNames'=>array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฏาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'),'monthNamesShort'=>array('ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'),'dayNames'=>array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'),'dayNamesShort'=>array('อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'),'dayNamesMin'=>array('อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'),'weekHeader'=>'Wk','dateFormat'=>'dd/mm/yy','firstDay'=>0,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'vi'=>array('closeText'=>'Đóng','prevText'=>'<Trước','nextText'=>'Tiếp>','currentText'=>'Hôm nay','monthNames'=>array('Tháng Một','Tháng Hai','Tháng Ba','Tháng Tư','Tháng Năm','Tháng Sáu','Tháng Bảy','Tháng Tám','Tháng Chín','Tháng Mười','Tháng Mười Một','Tháng Mười Hai'),'monthNamesShort'=>array('Tháng 1','Tháng 2','Tháng 3','Tháng 4','Tháng 5','Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'),'dayNames'=>array('Chủ Nhật','Thứ Hai','Thứ Ba','Thứ Tư','Thứ Năm','Thứ Sáu','Thứ Bảy'),'dayNamesShort'=>array('CN','T2','T3','T4','T5','T6','T7'),'dayNamesMin'=>array('CN','T2','T3','T4','T5','T6','T7'),'weekHeader'=>'Tu','dateFormat'=>'dd/mm/yy','firstDay'=>0,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'zh-TW'=>array('closeText'=>'關閉','prevText'=>'<上月','nextText'=>'下月>','currentText'=>'今天','monthNames'=>array('一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'),'monthNamesShort'=>array('一','二','三','四','五','六','七','八','九','十','十一','十二'),'dayNames'=>array('星期日','星期一','星期二','星期三','星期四','星期五','星期六'),'dayNamesShort'=>array('周日','周一','周二','周三','周四','周五','周六'),'dayNamesMin'=>array('日','一','二','三','四','五','六'),'weekHeader'=>'周','dateFormat'=>'yy/mm/dd','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>true,'yearSuffix'=>'年'),

    	'es'=>array('closeText'=>'Cerrar','prevText'=>'<Ant','nextText'=>'Sig>','currentText'=>'Hoy','monthNames'=>array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'),'monthNamesShort'=>array('Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'),'dayNames'=>array('Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'),'dayNamesShort'=>array('Dom','Lun','Mar','Mié','Juv','Vie','Sáb'),'dayNamesMin'=>array('Do','Lu','Ma','Mi','Ju','Vi','Sá'),'weekHeader'=>'Sm','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'it'=>array('closeText'=>'Fatto','prevText'=>'Precedente','nextText'=>'Prossimo','currentText'=>'Oggi','monthNames'=>array('Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'),'monthNamesShort'=>array('Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic'),'dayNames'=>array('Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato'),'dayNamesShort'=>array('Dom','Lun','Mar','Mer','Gio','Ven','Sab'),'dayNamesMin'=>array('Do','Lu','Ma','Me','Gi','Ve','Sa'),'weekHeader'=>'Wk','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'ru'=>array('closeText'=>'Готово','prevText'=>'Пред.','nextText'=>'След.','currentText'=>'Сегодня','monthNames'=>array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'),'monthNamesShort'=>array('Янв','Фев','Март','Апр','Май','Июнь','Июль','Авг','Сен','Окт','Ноя','Дек'),'dayNames'=>array('Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'),'dayNamesShort'=>array('Вск','Пн','Вт','Ср','Чтв','Птн','Сбт'),'dayNamesMin'=>array('Вс','Пн','Вт','Ср','Чт','Пт','Сб'),'weekHeader'=>'нед','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>''),

    	'pt'=>array('closeText'=>'Fechar','prevText'=>'Anterior','nextText'=>'Próximo','currentText'=>'Hoje','monthNames'=>array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'monthNamesShort'=>array('Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'),'dayNames'=>array('Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'),'dayNamesShort'=>array('Dom','Seg','Ter','Qua','Qui','Sex','Sáb'),'dayNamesMin'=>array('Do','Se','Te','Qu','Qu','Se','Sa'),'weekHeader'=>'Sem','dateFormat'=>'dd/mm/yy','firstDay'=>1,'isRTL'=>false,'showMonthAfterYear'=>false,'yearSuffix'=>'')

    );

    //extra WP FUllCalendar translations here please:

    $wp_fullcalendar_languages = array(

    	'es' => array('buttonText' => array('today'=>'Hoy','month'=>'Mes','week'=>'Semana','day'=>'Dia')),

    	'pt' => array('buttonText' => array('today'=>'Hoje','month'=>'Mes','week'=>'Semana','day'=>'Dia')),

    	'fr' => array('buttonText' => array('today'=>'Aujourd\'hui','month'=>'Mois','week'=>'Semaine','day'=>'Jour', 'titleFormat'=> array('month'=>'MMMM yyyy','week'=>'\'Du\' d[ MMMM][ yyyy] \'au\' {d MMMM[ yyyy]}','day'=>'dddd d MMMM yyyy'), 'columnFormat'=> array('month'=>'ddd','week'=>'ddd d/M','day'=>'dddd d MMMM yyyy'))),

    	'de' => array('buttonText' => array('today'=>'Heute','month'=>'Monat','week'=>'Woche','day'=>'Tag')),

    	'it' => array('buttonText' => array('today'=>'Oggi','month'=>'Mese','week'=>'Settimana','day'=>'Giorno')),

    	'ru' => array('buttonText' => array('today'=>'Сегодня','month'=>'Месяц','week'=>'Неделя','day'=>'День')),

    	'fi' => array('buttonText' => array('today'=>'Tänään','month'=>'Kuukausi','week'=>'Viikko','day'=>'Päivä')),

    	'pt' => array('buttonText' => array('today'=>'Hoje','month'=>'Mês','week'=>'Semana','day'=>'Dia')),

    );

    return array_merge_recursive($calendar_languages, $wp_fullcalendar_languages);

}