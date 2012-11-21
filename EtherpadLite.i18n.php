<?php
/**
 * Internationalisation file for extension EtherpadLite
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Thomas Gries
 */
$messages['en'] = array(
	'etherpadlite-desc' => 'Adds &lt;eplite&gt; parser tag to embed one or many Etherpad Lite pads (which are hosted on local or external Etherpad Lite server/s) on pages',
	'etherpadlite-tracking-category' => 'Pages with an embedded Etherpad',
	'etherpadlite-invalid-pad-url' => '"$1" is not a valid Etherpad Lite URL or pad name.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" is not in the whitelist of allowed Etherpad Lite servers. {{PLURAL:$3|$2 is the only allowed server|The allowed servers are as follows: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" is not in the whitelist of allowed Etherpad Lite servers. There are no allowed servers in the whitelist.',
	'etherpadlite-pad-used-more-than-once' => 'The pad "$1" has already been used before on this page; you can have many pads on a page, but only if they are different pads.',
);

/** Message documentation (Message documentation)
 * @author Beta16
 * @author Siebrand
 */
$messages['qqq'] = array(
	'etherpadlite-desc' => '{{desc}}',
	'etherpadlite-tracking-category' => 'The name of a category for all pages which use the &lt;eplite&gt; parser extension tag. The category is automatically added unless the feature is disabled.',
	'etherpadlite-invalid-pad-url' => "Error if the url did not meet validation (for example, if it didn't start with an allowed protocol). $1 is the invalid url",
	'etherpadlite-url-is-not-whitelisted' => "Error if URL isn't in list of allowed URLs. Parameters:
* $1 is name of url specified by user
* $2 is a comma separated list of allowed URLs
* $3 is the number of URLs in the allowed list",
	'etherpadlite-empty-whitelist' => 'Parameters:
* $1 is a URL not in the whitelist for Etherpad Lite servers.',
	'etherpadlite-pad-used-more-than-once' => 'Error if users try to show multiple frames of the very same pad. Each pad must be unique on a wiki page. Parameters:
* $1 is a full pad URL (server/padid).',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'etherpadlite-desc' => 'Дадае падтрымку парсэрам тэгу &lt;eplite&gt;, з дапамогай якога можна дадаваць на старонку адзін ці некалькі сшыткаў Etherpad Lite, якія разьмяшчаюцца на лякальным або вонкавым сэрвэры (сэрвэрах) Etherpad Lite.',
	'etherpadlite-tracking-category' => 'Старонкі з уключаным Etherpad',
	'etherpadlite-invalid-pad-url' => '«$1» не зьяўляецца слушным URL або назовам сшытку Etherpad Lite.',
	'etherpadlite-url-is-not-whitelisted' => '«$1» не пазначаны ў сьпісе дазволеных сэрвэраў Etherpad Lite. {{PLURAL:$3|Дазволеным сэрвэрам зьяўляецца толькі $2|Дазволеныя сэрвэры: $2}}.',
	'etherpadlite-empty-whitelist' => '«$1» не пазначаны ў белым сьпісе дазволеных сэрвэраў Etherpad Lite. У белым сьпісе няма ніводнага сэрвэра.',
	'etherpadlite-pad-used-more-than-once' => 'Сшытак «$1» ужо быў выкарыстаны на гэтай старонцы; вы можаце мець шмат сшыткаў на старонцы, але гэта мусяць быць розныя сшыткі.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Tiin
 */
$messages['de'] = array(
	'etherpadlite-desc' => 'Ergänzt das Tag &lt;eplite&gt; zum Einbetten eines oder mehrerer, entweder lokal oder extern auf EtherPad-Lite-Servern gehosteter, EtherPad-Lite-Editierflächen in eine Seite',
	'etherpadlite-tracking-category' => 'Seiten mit einem eingebetten EtherPad',
	'etherpadlite-invalid-pad-url' => '„$1“ ist keine gültige EtherPad-Lite-URL oder ein Editierfeldname.',
	'etherpadlite-url-is-not-whitelisted' => '„$1“ befindet sich nicht in der Liste zulässiger EtherPad-Lite-Server. {{PLURAL:$3|$2 ist der einzige mögliche Server|Die folgenden Server sind möglich: $2}}.',
	'etherpadlite-empty-whitelist' => '„$1“ befindet sich nicht in der Liste zulässiger EtherPad-Lite-Server. Es gibt keine zulässigen Server in der Liste.',
	'etherpadlite-pad-used-more-than-once' => 'Das Pad „$1“ wurde früher bereits auf dieser Seite verwendet. Es können viele Pads auf einer Seite genutzt werden, jedoch nur, sofern es unterschiedliche sind.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'etherpadlite-desc' => 'Pśidawa parserowu toflicku &lt;eplite&gt;, za zasajźenje jadneje pisańskeje płoniny abo někotarych płoninow Etherpad Lite (kótarež su na lokalnych abo eksternych serwerach Etherpad Lite zaměstnjone) na bokach',
	'etherpadlite-tracking-category' => 'Boki ze zasajźonym Ehterpadom',
	'etherpadlite-invalid-pad-url' => '"$1" njejo płaśiwy URL Etherpad Lite abo płaśiwe mě pisańskeje płoniny.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" njejo w lisćinje dowólonych serwerow Etherpad Lite. {{PLURAL:$3|$2 jo jadnucki dowólony serwer|Slědujucej serwera stej móžno: $2|Slědujuce serwery su móžno: $2|Slědujuce serwery su móžno: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" njejo w lisćinje dowólonych serwerow Etherpad Lite. W lisćinje dowólone serwery njejsu.',
	'etherpadlite-pad-used-more-than-once' => 'Pisańska płonina "$1" jo se južo do togo na toś tom boku wužyła; móžoš wjele pisańskich płoninow na boku měś, ale jano, jolic su rozdźělne płoniny-',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'etherpadlite-desc' => 'Añade la etiqueta del analizador &lt;eplite&gt; para incrustar uno o varios bloques Etherpad Lite (que están alojados en servidor/es Etherpad Lite locales o externos) en las páginas',
	'etherpadlite-tracking-category' => 'Páginas con un Etherpad incrustado',
	'etherpadlite-invalid-pad-url' => '"$1" no es un nombre válido de dirección URL o nombre de bloque de Etherpad Lite.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" no está en la lista blanca de servidores de Etherpad Lite permitidos.  {{PLURAL:$3|$2  es el único servidor permitido|Los servidores permitidos son los siguientes:  $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" no está en la lista blanca de servidores de Etherpad Lite permitidos. No hay servidores autorizados en la lista blanca.',
	'etherpadlite-pad-used-more-than-once' => 'El bloque "$1" ya ha sido utilizado antes en esta página; puede tener muchos bloques en una página, pero sólo si son bloques diferentes.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'etherpadlite-desc' => "Ajoute la balise de l'analyseur &lt;eplite&gt; pour incorporer un ou plusieurs blocs d'Etherpad Lite (qui sont hébergés sur des serveurs Etherpad Lite locaux ou externes) dans les pages",
	'etherpadlite-tracking-category' => 'Pages avec un Etherpad inclus',
	'etherpadlite-invalid-pad-url' => '"$1" n\'est pas une URL ou un nom de bloc Etherpad Lite valide.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" ne fait pas partie de la liste des serveurs Etherpad Lite autorisés. {{PLURAL:$3|$2 est le seul serveur autorisé|Les serveurs autorisés sont les suivants: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" n\'est pas dans la liste des serveurs d\'application Lite autorisés. Il n\'y a pas de serveur dans la liste autorisée.',
	'etherpadlite-pad-used-more-than-once' => 'Le bloc "$1" a déjà été utilisé sur cette page, vous pouvez avoir plusieurs blocs sur une page, mais seulement s\'ils sont de types différents.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'etherpadlite-desc' => 'Engade a etiqueta analítica &lt;eplite&gt; para incorporar un ou moitos documentos de Etherpad Lite (aloxados nun ou en varios servidores de Etherpad Lite) nas páxinas',
	'etherpadlite-tracking-category' => 'Páxinas con Etherpad incorporado',
	'etherpadlite-invalid-pad-url' => '"$1" non é un nome de documento ou enderezo URL de Etherpad Lite válido.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" non se atopa na lista branca dos servidores de Etherpad Lite permitidos. {{PLURAL:$3|$2 é o único servidor permitido|Os servidores permitidos son os seguintes: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" non se atopa na lista branca dos servidores de Etherpad Lite permitidos. Non hai servidores permitidos na lista branca.',
	'etherpadlite-pad-used-more-than-once' => 'O documento "$1" utilizouse nesta páxina con anterioridade; pode ter varios documentos nunha páxina, pero unicamente se son diferentes.',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'etherpadlite-desc' => 'הוספת תג מפענח &lt;eplite&gt; שמטמיע בדפים לוח כתיבה אחד או יותר של אתרפד לייט (שמתארחים בשרת Etherpad Lite מקומי או חיצוני)',
	'etherpadlite-tracking-category' => "דפים עם את'רפד מובנה",
	'etherpadlite-invalid-pad-url' => '"$1" אינה כתובת תקינה של את\'רפד לייט או שם תקין של לוח כתיבה',
	'etherpadlite-url-is-not-whitelisted' => '"$1" לא נמצא ברשימת שרתי את\'רפד לייט מורשים. {{PLURAL:$3|השרת המותר היחיד הוא $2|מותרים השרתים הבאים: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" לא נמצא ברשימת שרתי את\'רפד לייט מורשים. אין שום שרת מורשה ברשימה.',
	'etherpadlite-pad-used-more-than-once' => 'לוח הכתיבה "$1" כבר נמצא בדף הזה; אפשר לשים מספר לוחות כתיבה בדף, אבל הם צריכים להיות שונים.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'etherpadlite-desc' => 'Přidawa parserowu tafličku &lt;eplite&gt;, za zasadźenje jedneje pisanskeje płoniny abo wjacorych płoninow Etherpad Lite (kotrež su na lokalnych abo eksternych serwerach Etherpad Lite zaměstnjene) na stronach',
	'etherpadlite-tracking-category' => 'Strony ze zasadźenym Etherpadom',
	'etherpadlite-invalid-pad-url' => '"$1" płaćiwy URL Etherpad Lite abo płaćiwe mjeno pisanskeje płoniny njeje.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" njeje w lisćinje dowolenych serwerow Etherpad Lite. {{PLURAL:$3|$2 je jenički dowoleny serwer|Slědowacej serweraj stej móžno: $2|Slědowace serwery su móžno: $2|Slědowace serwery su móžno: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" njeje w lisćinje dowolenych serwerow Etherpad Lite. W lisćinje dowolene serwery njejsu.',
	'etherpadlite-pad-used-more-than-once' => 'Pisanska płonina "$1" je so hižo do toho na tutej stronje wužiła; móžeš wjele pisanskich płoninow na stronje měć, ale jenož, jeli su rozdźělne płoniny-',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'etherpadlite-desc' => 'Adde un etiquetta &lt;eplite&gt; al analysator syntactic que incorpora un o plure documentos collaborative de Etherpad Lite (le quales es albergate in servitor(es) externe de Etherpad Lite) in paginas',
	'etherpadlite-tracking-category' => 'Paginas con Etherpad incorporate',
	'etherpadlite-invalid-pad-url' => '"$1" non es un URL de Etherpad Lite o nomine de documento valide.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" non es in le lista de servitores Etherpad Lite autorisate. {{PLURAL:$3|Solmente le servitor $2 es autorisate|Le servitores autorisate es: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" non es in le lista de servitores Etherpad Lite autorisate. Nulle servitor es autorisate.',
	'etherpadlite-pad-used-more-than-once' => 'Le documento collaborative "$1" ha jam essite usate in iste pagina; il pote haber multe documentos collaborative in un pagina, ma solmente si illos es differente.',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'etherpadlite-desc' => 'Aggiunge il parser tag &lt;eplite&gt; per incorporare uno o più blocchi Etherpad Lite (che sono ospitati in server Etherpad Lite locali o esterni) nelle pagine',
	'etherpadlite-tracking-category' => 'Pagine con Etherpad incorporato',
	'etherpadlite-invalid-pad-url' => '"$1" non è un URL Etherpad Lite valido o nome di un pad.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" non si trova nella lista dei server Etherpad Lite consentiti. {{PLURAL:$3|$2 è l\'unico server consentito|I server consentiti sono: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" non si trova nella lista dei server Etherpad Lite consentiti. Non ci sono server consentiti.',
	'etherpadlite-pad-used-more-than-once' => 'Il pad "$1" è già stato usato su questa pagina; puoi avere più pad su una pagina, ma solo se sono diversi fra loro.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'etherpadlite-desc' => '1つまたは複数の Etherpad Lite パッドを埋め込むための &lt;eplite&gt; パーサー タグを追加する。パッドはローカルまたは外部の Etherpad Lite サーバー(群)でホスティングされる',
	'etherpadlite-tracking-category' => '埋め込みEtherpadがあるページ',
	'etherpadlite-invalid-pad-url' => '「$1」は Etherpad Lite の URL またはパッド名として無効です。',
	'etherpadlite-url-is-not-whitelisted' => '「$1」は許可された Etherpad Lite サーバーのホワイトリストに含まれていません。{{PLURAL:$3|許可されているサーバーは $2 のみです。|許可されているサーバー群は以下の通りです: $2}}',
	'etherpadlite-empty-whitelist' => '「$1」は許可された Etherpad Lite サーバーのホワイトリストに含まれていません。ホワイトリストではどのサーバーも許可されていません。',
	'etherpadlite-pad-used-more-than-once' => 'パッド「$1」はこのページで既に使用されています; 1 ページに複数のパッドを配置できますが、それは異なるパッドのみです。',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'etherpadlite-desc' => 'Deiht dä Befähl &lt;eplite&gt; en et Wiki, womet mer <i lang="en>etherpad</i> Pädds en Wiki-Sigge enboue kann. Di Pädds wääde ob em eije odder op främde <i lang="en>Etherpad Lite</i> ẞöövere jehallde.',
	'etherpadlite-tracking-category' => 'Sigge med enem <i lang="en>etherpad</i> dren.',
	'etherpadlite-invalid-pad-url' => '„$1“ es keine jöltijje <i lang="en>URL</i> för <i lang="en>Etherpad Lite</i> udder dä Naame för et Pädd es verkiehrt.',
	'etherpadlite-url-is-not-whitelisted' => '„$1“ es keine zohjelohße ẞööver för <i lang="en>Etherpad Lite</i>. Em Momang {{PLURAL:$3|es bloß $2 zohjelohße.|sin zohjelohße: $2|es jaa keine ẞööver zohjelohße.}}.',
	'etherpadlite-empty-whitelist' => '„$1“ es keine zohjelohße ẞööver för <i lang="en>Etherpad Lite</i>. Et sinn_er em Momang jaa kein ẞööver zohjelohße.',
	'etherpadlite-pad-used-more-than-once' => 'Dat <i lang="en>etherpad</i> „$1“ es ald en heh dä Sigg. Mer kann esu vill <i lang="en>etherpads</i> en en Sigg han, wi mer well, ävver se möße ongerscheidlesch sin.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'etherpadlite-desc' => 'Ја додава парсерската ознака &lt;eplite&gt; за вметнување на една или повеќе тетратки Etherpad Lite (кои се вдомени на локални или надворешни опслужувачи на Etherpad Lite) во страниците',
	'etherpadlite-tracking-category' => 'Страници со вметнат EtherPad',
	'etherpadlite-invalid-pad-url' => '„$1“ не е важечко име на тетратка или URL на Etherpad Lite.',
	'etherpadlite-url-is-not-whitelisted' => '„$1“ не е на белиот список на дозволени опслужувачи за Etherpad Lite. {{PLURAL:$3|Единствениот дозволен е $2|Дозволени се следниве: $2}}.',
	'etherpadlite-empty-whitelist' => '„$1“ не е на белиот список на дозволени опслужувачи за Etherpad Lite. На списокот нема ниеден дозволен осплужувач.',
	'etherpadlite-pad-used-more-than-once' => 'Тетратката „$1“ е веќе користена на оваа страница. На страницава може да имате повеќе тетратки, но само ако се различни.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'etherpadlite-desc' => "Voegt de parsertag &lt;eplite&gt; toe om één of meer pagina's uit Etherpad Lite toe te voegen aan een pagina die lokaal of extern gehost worden op één of meerdere servers",
	'etherpadlite-tracking-category' => "Pagina's met een ingevoegde Etherpad",
	'etherpadlite-invalid-pad-url' => '"$1" is geen geldige URL voor Etherpad Lite of een padnaam.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" staat niet in de witte lijst voor Etherpad Lite-servers. {{PLURAL:$3|$2 is de enige server die gebruikt kan worden|De volgende servers kunnen gebruikt worden: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" staat niet in de witte lijst voor Etherpad Lite-servers. Er zijn op het moment geen servers die gebruikt kunnen worden.',
	'etherpadlite-pad-used-more-than-once' => 'De pad "$1" wordt al gebruikt op deze pagina. U kunt meerdere pads op een pagina toevoegen, maar elke pad slechts één keer.',
);

/** Polish (polski)
 * @author BeginaFelicysym
 */
$messages['pl'] = array(
	'etherpadlite-desc' => 'Dodaje tag analizatora składni &lt;eplite&gt; w celu osadzenia na stronach jednej lub wielu konsol Etherpad Lite (które są hostowane na lokalnych lub zewnętrznych serwerach Etherpad Lite)',
	'etherpadlite-tracking-category' => 'Strony z osadzonym Etherpadem',
	'etherpadlite-invalid-pad-url' => '"$1" nie jest prawidłową nazwą adresu URL Etherpad Lite ani nazwą konsoli.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" nie występuje na białej liście dozwolonych serwerów Etherpad Lite.  {{PLURAL:$3|$2  jest jedynym dozwolonym serwerem|Dozwolone są następujące serwery: $2|Dozwolone są następujące serwery: $2}}.',
	'etherpadlite-empty-whitelist' => '" $1 " nie występuje na białej liście dozwolonych serwerów Etherpad Lite. Na białej liście nie ma dozwolonych serwerów.',
	'etherpadlite-pad-used-more-than-once' => 'Konsola "$1" została już użyta powyżej na tej stronie; można mieć wiele konsol na stronie, ale tylko wtedy, jeżeli są to różne konsole.',
);

/** Russian (русский)
 * @author Eleferen
 * @author Express2000
 */
$messages['ru'] = array(
	'etherpadlite-desc' => 'Добавляет метку синтаксического анализа &lt;eplite&gt; для встраивания в страницы одного или нескольких блокнотов Etherpad Lite (расположенных на локальном или внешнем сервере Etherpad Lite)',
	'etherpadlite-tracking-category' => 'Страницы с встроенным Etherpad',
	'etherpadlite-invalid-pad-url' => '"$1" не является действительным именем блокнота или адресом Etherpad Lite.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" не входит в белый список разрешенных серверов Etherpad Lite. {{PLURAL:$3|Только $2 является разрешенным сервером|Разрешены следующие сервера: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" не входит в белый список разрешенных серверов Etherpad Lite. В белом списке нет ни одного сервера.',
	'etherpadlite-pad-used-more-than-once' => 'Блокнот "$1" был уже использован на этой странице; можно использовать несколько блокнотов на одной странице, но при этом они не должны быть одинаковыми.',
);

/** Swedish (svenska)
 * @author Ainali
 */
$messages['sv'] = array(
	'etherpadlite-desc' => 'Lägger till &lt;eplite&gt; parsertagg om du vill bädda in ett eller flera Etherpad Lite block (vilka finns på lokala eller externa Etherpad Lite server/s) på sidor',
	'etherpadlite-tracking-category' => 'Sidor med en inbäddad Etherpad',
	'etherpadlite-invalid-pad-url' => '"$1" är inte en giltig Etherpad Lite URL eller blocknamn.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" finns inte i vitlistan med tillåtna Etherpad Lite servrar. {{PLURAL:$3|$2 är den enda tillåtna servern|De tillåtna servrarna är följande: $2}}.',
	'etherpadlite-empty-whitelist' => '"$1" finns inte i vitlistan med tillåtna Etherpad Lite servrar. Det finns inga tillåtna servrar i vitlistan.',
	'etherpadlite-pad-used-more-than-once' => 'Blocket "$1" har redan använts på den här sidan, du kan ha många block på en sida, men endast om de är olika block.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'etherpadlite-desc' => 'Nagdaragdag ng &lt;eplite&gt; tatak na pambanghay upang maibaon ang isa o maraming mga sapin ng Etherpad Lite (na mga pinasisinayahan sa [mga] tagapaghain ng katutubo o panlabas na Etherpad Lite) sa mga pahina',
	'etherpadlite-tracking-category' => 'Mga pahinang mayroong nakabaon na Etherpad',
	'etherpadlite-invalid-pad-url' => 'Ang "$1" ay isang hindi katanggap-tanggap na URL o pangalan ng sapin ng Etherpad Lite.',
	'etherpadlite-url-is-not-whitelisted' => 'Ang "$1" ay wala sa listahan ng mga hindi pinagbabawalan ng pinahihintulutang mga tagapaghain ng Etherpad Lite. Ang {{PLURAL:$3|$2 lang ang pinapayagang tagapaghain|Ang pinapahintulutang mga tagapaghain ay ang mga sumusunod: $2}}.',
	'etherpadlite-empty-whitelist' => 'Ang "$1" ay wala sa talaan ng mga hindi pinagbabawalan ng pinahihintulutang mga tagapaghain ng Etherpad Lite. Walang mga pinapahintulutang mga tagapaghain sa loob ng talaan ng mga hindi pinagbabawalan.',
	'etherpadlite-pad-used-more-than-once' => 'Ang sapin na "$1" ay nagamit na dati sa pahinang ito; maaari kang magkaroon ng maraming mga sapin sa ibabaw ng isang pahina, subalit kung magkakaiba lamang na mga sapin ang mga ito.',
);
