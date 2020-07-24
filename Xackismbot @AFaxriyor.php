<?php
/*
                    Дастурчилар : 
@Cleaver_Boy     |       @Pro_koder

Манбасиз каналинда курсам каналим йук деб уйлайвер 😂(хазил емас)
Манба : @PHP_OWN   |    @AFaxriyor

Кодни ишлаши 100%

*/
ob_start();
$API = "1110732554:AAF2BXesW8vJa2ovPU6BgKMyew3uT6lD6o8";
define("API_KEY",$API);
$admin = "1163637440"; // админ ID
$habarchi = "1163637440"; 
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}
function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD💵 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "1 EURO💶 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY💴 - " . $val->Rate . " sum\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB💴 - " . $val->Rate . " sum\n";
           }
       }

       return $response;
   }   function Parse($p1, $p2, $p3) {
$num1 = strpos($p1, $p2);
if($num1 === false) return 0;
$num2 = substr($p1, $num1);
return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
$String = file_get_contents('http://obhavo.uz/namangan');
$tt = '<h2>'.Parse($String, '<h2>', '</h2>').'</h2><div class="current-day">'.Parse($String, '<div class="current-day">', '</div>').'</div>
<div class="current-forecast">
            	<span><img src="http://obhavo.uz/images/icons/partlycloudy.png" /></span> <span><strong>'.Parse($String, '<div class="current-forecast">', '</div>').'</strong></span></div><div class="current-forecast-desc">';
$ttt = Parse($String, '<div class="current-forecast-desc">', '</div>').'</div>';
$step = file_get_contents("azo.dat");

$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$message_id2 = $update->callback_query->message->message_id;
$data1 = $update->callback_query->data;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$text = $message->text;
$text1 = $message->text;
$step=file_get_contents("data/$fadmin/name.txt");
$name = $message->from->first_name;
$Ch = "AsianUz_Hackers"; // Канал усер
$Adn = "Web_Cyber";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@AFaxriyor&user_id=".$from_id);
$u = explode("\n",file_get_contents("azo.dat"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("azo.dat", $chat_id."\n",FILE_APPEND);
  }

if(mb_stripos($text,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if(mb_stripos($text,"Статистика 📊")!==false){
	  $soat = date("H:i:s", strtotime("2 hour"));
	  $bugun = date("d-M Y",strtotime("2 hour"));
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $tx = "<b>📡 Бот фойдаланувчилари :
👤 Усерлар: $all
👮 Админ : @Web_Cyber
📣 Канал : @AsianUz_Hackers </b> 
⏰ $soat $bugun";
  bot("sendMessage",[
   "chat_id"=>$chat_id,
   "text"=>$tx,
   "parse_mode"=>"html",
    "disable_web_page_preview"=>"true",
    "reply_markup"=>json_encode([
    "resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"🏠 Бош меню"],],
]])]);}


if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
    'text'=>"📛┇Кечирасиз дустим  😿💔

🔰┇Ботдан фойдаланиш учун каналимизга аьзо булишингиз керак !

📡┇Каналимиз : 
t.me/$Ch

⚠┇Обуна булгандан сунг { /start } буйругини босинг" ,
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"Аьзо булиш ✅","url"=>"t.me/AsaianUz_Hackers"]],
]])
]);return false;}


if($text == "Админ 👮"){
bot("sendMessage",[
 "chat_id"=>$chat_id,
  "parse_mode"=>"MarkDown",
 "text"=>"• Бот админи :
 <b>@$Adn</b>
 • Бот дастурчилари : 
 <b>@$Adn</b>
 <b>@Web_Cyber</b>
Агарда сизга хам шу каби мураккаб ботлар керак булса мурожаат килишингиз мумкин ✅",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"1-дастурчи 👮","url"=>"t.me/$Adn"]],
[["text"=>"2-дастурчи 👮","url"=>"t.me/Web_Cyber"]],
]])]);}

if($text == "Ботлар 🔅"){
bot("sendMessage",[
 "chat_id"=>$chat_id,
  "parse_mode"=>"MarkDown",
 "text"=>"Бизнинг ботлар 🔅
@KerakliUzRobot- лого ясаш учун
@ExlusiveBot - пост ясаш учун
@COPHPBOT - бот ясащ учун

Бизда хозирча шулар⚠
Тез орада янгиликлар киламиз 🔝
Бирча янгиликлар @AsianUz_Hackers каналида ♻",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"Пост ясаш 📝","url"=>"t.me/ExlusiveBot"]],
]])]);}


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button2 = json_encode([
			'inline_keyboard'=>[ 
			[['text'=>'Валюта курси 💱','callback_data'=>'kurs']],[['text'=>'Енг сунги янгилик 🔎','callback_data'=>'yan']]
			]
		]);

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button3 = json_encode([
			'inline_keyboard'=>[ 
			[['text'=>'Янгилаш ♻','callback_data'=>'yangilash']]
			]
		]);



if ($text == "Соат ⏰ ва Сана 📆") {
  $bugun = date("d-M Y",strtotime("2 hour"));
  $soat = date("H:i:s", strtotime("2 hour"));
  bot("sendMessage", [
    "chat_id"=>$chat_id,
    "text"=>"⏰ Узбекистондаги аник вакт : $soat
📆 Узбекистондаги аник сана : $bugun",
    "parse_mode"=>"MarkDown",
    "reply_markup"=>$button3
    ]);
}  

if ($text == "Курс 💱 ва янгилик 🔎") {
  $bugun = date("d-M Y",strtotime("2 hour"));
  $soat = date("H:i:s", strtotime("2 hour"));
  bot("sendMessage", [
    "chat_id"=>$chat_id,
    "text"=>"• Хуш келибсиз:  [$name](tg://user?id=$chat_id)

- Ушбу булимлар оркали сиз курс валютасини ва янгиликларни билиб олишингиз мумкин ✅
- Курс ёки янгиликларни билиш учун керакли булимлардаг бирини танланг ✅
- Енг сунги янгиликларни @AsianUz_Hackers каналида кузатиб боринг ♻
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[🎈Каналимиз🎈](t.me/$Ch)",
    "parse_mode"=>"MarkDown",
    "reply_markup"=>$button2
    ]);
}  

if($text == "/start"){
bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"• Хуш келибсиз:  [$name](tg://user?id=$chat_id)

- Бизнинг ботдан фойдаланаётганигиз учун ташаккур 😊
- Сиз бизнинг ботда ажойиб логотиплар ясашингиз мумкин ✅
- Енг сунги янгиликларни @AsianUz_Hackers каналида кузатиб боринг ♻
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[🎈Каналимиз🎈](t.me/$Ch)",
 "parse_mode"=>"MarkDown",
"disable_web_page_preview"=>"true",
"reply_markup"=>json_encode([
"resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"Логотип ясаш 🔝"], ["text"=>"Статистика 📊"]],
[["text"=>"Соат ⏰ ва Сана 📆"]],
[["text"=>"Курс 💱 ва янгилик 🔎"]],
[["text"=>"Ботлар 🔅"], ["text"=>"Админ 👮"]],
]])]);}

if($text == "🏠 Бош меню"){
bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"🏠 Бош менюдасиз
Керакли булимни танланг ♻",
 "parse_mode"=>"MarkDown",
"disable_web_page_preview"=>"true",
"reply_markup"=>json_encode([
"resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"Логотип ясаш 🔝"], ["text"=>"Статистика 📊"]],
[["text"=>"Соат ⏰ ва Сана 📆"]],
[["text"=>"Курс 💱 ва янгилик 🔎"]],
[["text"=>"Ботлар 🔅"], ["text"=>"Админ 👮"]],
]])]);}



if($text == "Логотип ясаш 🔝"){
bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"• Хуш келибсиз:  [$name](tg://user?id=$chat_id)

- Бот сизнинг исмингизни 10 хил логога ёзиб беради. ✅
- Хохлаган булимингиз оркали кириб исминигиз ёзинг. ✅
- Исмингизни факат лотин тилида юборирг намунадагидек. ✅
- Намуна : *Web Cyber*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[🎈Каналимиз🎈](t.me/$Ch)",
 "parse_mode"=>"MarkDown",
"disable_web_page_preview"=>"true",
"reply_markup"=>json_encode([
"resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"🎈Chaqmoq logo"], ["text"=>"🎈Pecheni Logo"]],
[["text"=>"🎈Gold logo"], ["text"=>"🎈Bronza logo"]],
[["text"=>"🎈Texno logo"], ["text"=>"🎈Space logo"]],
[["text"=>"🎈Silver logo"], ["text"=>"🎈Lion logo"]],
[["text"=>"🎈Grunge Logo"], ["text"=>"🎈Qonli logo"]],
[["text"=>"🏠 Бош меню"],],
]])]);}

if($text =="🎈Gold logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Gold` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Qonli logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Qonli` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Grunge Logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Grunge` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Lion logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Lion` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Texno logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Texno` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Silver logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Silver` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Pecheni Logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Cake` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Space logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Square` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Bronza logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Bronza` Сузидан сунг исмингизни юборинг", 
    ]);
}
if($text =="🎈Chaqmoq logo" ){
    bot("sendMessage",[
        "chat_id"=>$chat_id,
"parse_mode"=>"markdown",
        "text"=>"🎨 Лого яратиш учун 
`/Chaqmoq` Сузидан сунг исмингизни юборинг", 
    ]);
}
if(mb_stripos($text,"/Gold") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/cake-text-158.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/XACKISMBOT"]],
]
])
]);
}
if(mb_stripos($text,"/Qonli") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-77.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Grunge") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-110.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Lion") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/royal-text-effect-online-free-471.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Bronza") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/cake-text-395.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Cake") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.photo360.com/cake-text-127.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Silver") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/glossy-chrome-text-effect-online-424.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Texno") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/cake-text-208.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Silver") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.photo360.com/cake-text-438.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}
if(mb_stripos($text,"/Chaqmoq") !== false){ 
$ex = explode(" ",$text);
bot("SendPhoto",[
"chat_id"=>$chat_id, 
"reply_to_message_id"=>$mid,
"photo"=>"https://muhiddin.xvest.ru/Ephoto/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/cake-text-97.html&text= $ex[1] $ex[2] $ex[3] ",
"caption"=>"🎉 $ex[1] Номли логотипингиз таййор булди
📥 Яратувчи : @KerakliUzRobot ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻ Дустларга юбориш", "url"=>"https://t.me/share/url?url=https://telegram.me/KerakliUzRobot"]],
]
])
]);
}


//------янгилик------//

$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
    break;
}  
if($data1 == 'yan'){
$soat = date("H:i:s", strtotime("2 hour"));
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🆕 $line\n\n⏰Soat : $soat",
'show_alert'=>true
]);
    }
    
$soat = date('H:i', strtotime('2 hour')); $data1 = $update->callback_query->data;   if($data1 == 'kurs'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>kurs()."\n\n soat⏰: $soat",
'show_alert'=>true
]);
    }
    
    if($data1 == 'yangilash'){
  $bugun = date("d-M Y",strtotime("2 hour"));
  $soat = date("H:i:s", strtotime("2 hour"));
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"⏰ Узбекистондаги аник вакт : $soat\n📆 Узбекистондаги аник сана : $bugun\n\n@KerakliUzRobot",
'show_alert'=>true
]);
    }
    

if($text == '/code' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'document'=>new CURLFile(__FILE__),
'caption'=>"my <b>code</b>", 
]);
} 

 /*
                    Дастурчилар : 
@Cleaver_Boy     |       @Pro_koder

Манбасиз каналинда курсам каналим йук деб уйлайвер 😂(хазил емас)
Манба : @PHP_OWN   |    @AFaxriyor

Айтганча хабар юбориш булими йук, узиз учун тугирлаб оларсиз )
*/
 