<? define('API_KEY', 'MTQ0NDc3NzE5OTpBQUYtd0VZcjJBTGJ1dUFManIxejV5Q0ZTc1RkcHRTRDZZTQ');

// echo "https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];

function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch))
    {
        var_dump(curl_error($ch));
    }
    else
    {
        return json_decode($res);
    }
}

function ted($chat_id,$st,$texa){

$kun = date('d', strtotime('2 hour'));
$oy = date('m', strtotime('2 hour'));
$res = file_get_contents("https://islom.uz/vaqtlar/$st/1");

$res = explode('Хуфтон', $res);
$d = explode('style="margin-top:20px;">', $res[5]);
$f = explode("<tr", $d[0]);

//oyni olish
$hk = explode("header_table", $res[4]);
$a4 = explode(">", $hk[2]);
$c4 = explode("<", $a4[1]);
//sikl
$tex= "*$texa:*\n\n";

for($l=0;$l<count($f);$l++){

$bir = explode("<td", $f[$l]);

for($i=0;$i<count($bir);$i++){
$a = explode(">", $bir[$i]);
$c = explode("<", $a[1]);
$bir[$i] = $c[0];
}

$gh = trim($bir[2]);
if($gh>=$kun and $gh<$kun+7){
$tex.="*{$bir[2]} - {$c4[0]}* 
*Ҳафта куни:*  {$bir[3]}
*🛐 Тонг(Саҳарлик):*  {$bir[4]}
*🛐 Қуёш:*  {$bir[5]}
*🛐 Пешин:*  {$bir[6]}
*🛐 Аср:*  {$bir[7]}
*🛐 Шом(Ифтор):*  {$bir[8]}
*🛐 Хуфтон:*  {$bir[9]}\n\n";
}

}


bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$tex",
'parse_mode'=>"markdown"
]);
}





$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$username = $message->from->username;
$first_name = $message->from->first_name;

$callback = $update->callback_query;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $callback->message->message_id;
$data = $update->callback_query->data;
$cqid = $update->callback_query->id;

if(!$chat_id)
{
    $chat_id = $chat_id2;
    $message_id = $message_id2;
}

$key = json_encode([
  'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Намоз вақтлари Андижон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Бекобод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Бишкек вақти бўйича"]], 
[['text'=>"Намоз вақтлари Бухоро вақти бўйича"]], 
[['text'=>"Намоз вақтлари Гулистон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Денов вақти бўйича"]], 
[['text'=>"Намоз вақтлари Жалолобод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Жамбул вақти бўйича"]], 
[['text'=>"Намоз вақтлари Жиззах вақти бўйича"]], 
[['text'=>"Намоз вақтлари Жомбой вақти бўйича"]], 
[['text'=>"Намоз вақтлари Каттақўрғон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Конибодом вақти бўйича"]], 
[['text'=>"Намоз вақтлари Марғилон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Навоий вақти бўйича"]], 
[['text'=>"Намоз вақтлари Наманган вақти бўйича"]], 
[['text'=>"Намоз вақтлари Нукус вақти бўйича"]], 
[['text'=>"Намоз вақтлари Нурота вақти бўйича"]], 
[['text'=>"Намоз вақтлари Самарқанд вақти бўйича"]], 
[['text'=>"Намоз вақтлари Туркистон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ўш вақти бўйича"]], 
[['text'=>"Намоз вақтлари Хива вақти бўйича"]], 
[['text'=>"Намоз вақтлари Хўжанд вақти бўйича"]], 
[['text'=>"Намоз вақтлари Чимкент вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қарши вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қўқон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Тошкент вақти бўйича"]], 
[['text'=>"Намоз вақтлари Шаҳрихон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Хўжаобод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қўрғонтепа вақти бўйича"]], 
[['text'=>"Намоз вақтлари Хонобод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Поп вақти бўйича"]], 
[['text'=>"Намоз вақтлари Чуст вақти бўйича"]], 
[['text'=>"Намоз вақтлари Косонсой вақти бўйича"]], 
[['text'=>"Намоз вақтлари Чортоқ вақти бўйича"]], 
[['text'=>"Намоз вақтлари Учқўрғон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Фарғона вақти бўйича"]], 
[['text'=>"Намоз вақтлари Олтиариқ вақти бўйича"]], 
[['text'=>"Намоз вақтлари Риштон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қува вақти бўйича"]], 
[['text'=>"Намоз вақтлари Олмаота вақти бўйича"]], 
[['text'=>"Намоз вақтлари Сайрам вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ангрен вақти бўйича"]], 
[['text'=>"Намоз вақтлари Бурчмулла вақти бўйича"]], 
[['text'=>"Намоз вақтлари Олот вақти бўйича"]], 
[['text'=>"Намоз вақтлари Газли вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қоровулбозор вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қоракўл вақти бўйича"]], 
[['text'=>"Намоз вақтлари Пахтаобод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Зомин вақти бўйича"]], 
[['text'=>"Намоз вақтлари Дўстлик вақти бўйича"]], 
[['text'=>"Намоз вақтлари Арнасой вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ўсмат вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ғаллаорол вақти бўйича"]], 
[['text'=>"Намоз вақтлари Учтепа вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ўғиз вақти бўйича"]], 
[['text'=>"Намоз вақтлари Томди вақти бўйича"]], 
[['text'=>"Намоз вақтлари Конимех вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қизилтепа вақти бўйича"]], 
[['text'=>"Намоз вақтлари Зарафшон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Узунқудуқ вақти бўйича"]], 
[['text'=>"Намоз вақтлари Учқудуқ вақти бўйича"]], 
[['text'=>"Намоз вақтлари Мингбулоқ вақти бўйича"]], 
[['text'=>"Намоз вақтлари Тўрткўл вақти бўйича"]], 
[['text'=>"Намоз вақтлари Тахтакўпир вақти бўйича"]], 
[['text'=>"Намоз вақтлари Чимбой вақти бўйича"]], 
[['text'=>"Намоз вақтлари Мўйноқ вақти бўйича"]], 
[['text'=>"Намоз вақтлари Олтинкўл вақти бўйича"]], 
[['text'=>"Намоз вақтлари Шуманай вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қўнғирот вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ургут вақти бўйича"]], 
[['text'=>"Намоз вақтлари Булоқбоши вақти бўйича"]], 
[['text'=>"Намоз вақтлари Термиз вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қумқўрғон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Бойсун вақти бўйича"]], 
[['text'=>"Намоз вақтлари Шеробод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Урганч вақти бўйича"]], 
[['text'=>"Намоз вақтлари Хазорасп вақти бўйича"]], 
[['text'=>"Намоз вақтлари Хонқа вақти бўйича"]], 
[['text'=>"Намоз вақтлари Янгибозор вақти бўйича"]], 
[['text'=>"Намоз вақтлари Шовот вақти бўйича"]], 
[['text'=>"Намоз вақтлари Деҳқонобод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ғузор вақти бўйича"]], 
[['text'=>"Намоз вақтлари Косон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Таллимаржон вақти бўйича"]], 
[['text'=>"Намоз вақтлари Муборак вақти бўйича"]], 
[['text'=>"Намоз вақтлари Душанбе вақти бўйича"]], 
[['text'=>"Намоз вақтлари Ашхабод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Туркманобод вақти бўйича"]], 
[['text'=>"Намоз вақтлари Тошҳовуз вақти бўйича"]], 
[['text'=>"Намоз вақтлари Қарши вақти бўйича"]], 
[['text'=>"Намоз вақтлари Навои вақти бўйича"]]
]
]);


if($text=='/start'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Ассалому алайкум",
'reply_markup'=>$key

]);

}





if($text and $text!="/start"){
switch ($text) {
case "Намоз вақтлари Андижон вақти бўйича":ted($chat_id,1,$text); break;
case "Намоз вақтлари Бекобод вақти бўйича":ted($chat_id,2,$text); break;
case "Намоз вақтлари Бишкек вақти бўйича":ted($chat_id,3,$text); break;
case "Намоз вақтлари Бухоро вақти бўйича":ted($chat_id,4,$text); break;
case "Намоз вақтлари Гулистон вақти бўйича":ted($chat_id,5,$text); break;
case "Намоз вақтлари Денов вақти бўйича":ted($chat_id,6,$text); break;
case "Намоз вақтлари Жалолобод вақти бўйича":ted($chat_id,7,$text); break;
case "Намоз вақтлари Жамбул вақти бўйича":ted($chat_id,8,$text); break;
case "Намоз вақтлари Жиззах вақти бўйича":ted($chat_id,9,$text); break;
case "Намоз вақтлари Жомбой вақти бўйича":ted($chat_id,10,$text); break;
case "Намоз вақтлари Каттақўрғон вақти бўйича":ted($chat_id,11,$text); break;
case "Намоз вақтлари Конибодом вақти бўйича":ted($chat_id,12,$text); break;
case "Намоз вақтлари Марғилон вақти бўйича":ted($chat_id,13,$text); break;
case "Намоз вақтлари Навоий вақти бўйича":ted($chat_id,14,$text); break;
case "Намоз вақтлари Наманган вақти бўйича":ted($chat_id,15,$text); break;
case "Намоз вақтлари Нукус вақти бўйича":ted($chat_id,16,$text); break;
case "Намоз вақтлари Нурота вақти бўйича":ted($chat_id,17,$text); break;
case "Намоз вақтлари Самарқанд вақти бўйича":ted($chat_id,18,$text); break;
case "Намоз вақтлари Туркистон вақти бўйича":ted($chat_id,19,$text); break;
case "Намоз вақтлари Ўш вақти бўйича":ted($chat_id,20,$text); break;
case "Намоз вақтлари Хива вақти бўйича":ted($chat_id,21,$text); break;
case "Намоз вақтлари Хўжанд вақти бўйича":ted($chat_id,22,$text); break;
case "Намоз вақтлари Чимкент вақти бўйича":ted($chat_id,23,$text); break;
case "Намоз вақтлари Қарши вақти бўйича":ted($chat_id,25,$text); break;
case "Намоз вақтлари Қўқон вақти бўйича":ted($chat_id,26,$text); break;
case "Намоз вақтлари Тошкент вақти бўйича":ted($chat_id,27,$text); break;
case "Намоз вақтлари Шаҳрихон вақти бўйича":ted($chat_id,28,$text); break;
case "Намоз вақтлари Хўжаобод вақти бўйича":ted($chat_id,29,$text); break;
case "Намоз вақтлари Қўрғонтепа вақти бўйича":ted($chat_id,30,$text); break;
case "Намоз вақтлари Хонобод вақти бўйича":ted($chat_id,31,$text); break;
case "Намоз вақтлари Поп вақти бўйича":ted($chat_id,32,$text); break;
case "Намоз вақтлари Чуст вақти бўйича":ted($chat_id,33,$text); break;
case "Намоз вақтлари Косонсой вақти бўйича":ted($chat_id,34,$text); break;
case "Намоз вақтлари Чортоқ вақти бўйича":ted($chat_id,35,$text); break;
case "Намоз вақтлари Учқўрғон вақти бўйича":ted($chat_id,36,$text); break;
case "Намоз вақтлари Фарғона вақти бўйича":ted($chat_id,37,$text); break;
case "Намоз вақтлари Олтиариқ вақти бўйича":ted($chat_id,38,$text); break;
case "Намоз вақтлари Риштон вақти бўйича":ted($chat_id,39,$text); break;
case "Намоз вақтлари Қува вақти бўйича":ted($chat_id,40,$text); break;
case "Намоз вақтлари Олмаота вақти бўйича":ted($chat_id,41,$text); break;
case "Намоз вақтлари Сайрам вақти бўйича":ted($chat_id,42,$text); break;
case "Намоз вақтлари Ангрен вақти бўйича":ted($chat_id,43,$text); break;
case "Намоз вақтлари Бурчмулла вақти бўйича":ted($chat_id,44,$text); break;
case "Намоз вақтлари Олот вақти бўйича":ted($chat_id,45,$text); break;
case "Намоз вақтлари Газли вақти бўйича":ted($chat_id,46,$text); break;
case "Намоз вақтлари Қоровулбозор вақти бўйича":ted($chat_id,47,$text); break;
case "Намоз вақтлари Қоракўл вақти бўйича":ted($chat_id,48,$text); break;
case "Намоз вақтлари Пахтаобод вақти бўйича":ted($chat_id,49,$text); break;
case "Намоз вақтлари Зомин вақти бўйича":ted($chat_id,50,$text); break;
case "Намоз вақтлари Дўстлик вақти бўйича":ted($chat_id,51,$text); break;
case "Намоз вақтлари Арнасой вақти бўйича":ted($chat_id,52,$text); break;
case "Намоз вақтлари Ўсмат вақти бўйича":ted($chat_id,53,$text); break;
case "Намоз вақтлари Ғаллаорол вақти бўйича":ted($chat_id,55,$text); break;
case "Намоз вақтлари Учтепа вақти бўйича":ted($chat_id,56,$text); break;
case "Намоз вақтлари Ўғиз вақти бўйича":ted($chat_id,57,$text); break;
case "Намоз вақтлари Томди вақти бўйича":ted($chat_id,58,$text); break;
case "Намоз вақтлари Конимех вақти бўйича":ted($chat_id,59,$text); break;
case "Намоз вақтлари Қизилтепа вақти бўйича":ted($chat_id,60,$text); break;
case "Намоз вақтлари Зарафшон вақти бўйича":ted($chat_id,61,$text); break;
case "Намоз вақтлари Узунқудуқ вақти бўйича":ted($chat_id,62,$text); break;
case "Намоз вақтлари Учқудуқ вақти бўйича":ted($chat_id,63,$text); break;
case "Намоз вақтлари Мингбулоқ вақти бўйича":ted($chat_id,64,$text); break;
case "Намоз вақтлари Тўрткўл вақти бўйича":ted($chat_id,65,$text); break;
case "Намоз вақтлари Тахтакўпир вақти бўйича":ted($chat_id,66,$text); break;
case "Намоз вақтлари Чимбой вақти бўйича":ted($chat_id,67,$text); break;
case "Намоз вақтлари Мўйноқ вақти бўйича":ted($chat_id,68,$text); break;
case "Намоз вақтлари Олтинкўл вақти бўйича":ted($chat_id,69,$text); break;
case "Намоз вақтлари Шуманай вақти бўйича":ted($chat_id,70,$text); break;
case "Намоз вақтлари Қўнғирот вақти бўйича":ted($chat_id,71,$text); break;
case "Намоз вақтлари Ургут вақти бўйича":ted($chat_id,72,$text); break;
case "Намоз вақтлари Булоқбоши вақти бўйича":ted($chat_id,73,$text); break;
case "Намоз вақтлари Термиз вақти бўйича":ted($chat_id,74,$text); break;
case "Намоз вақтлари Қумқўрғон вақти бўйича":ted($chat_id,75,$text); break;
case "Намоз вақтлари Бойсун вақти бўйича":ted($chat_id,76,$text); break;
case "Намоз вақтлари Шеробод вақти бўйича":ted($chat_id,77,$text); break;
case "Намоз вақтлари Урганч вақти бўйича":ted($chat_id,78,$text); break;
case "Намоз вақтлари Хазорасп вақти бўйича":ted($chat_id,79,$text); break;
case "Намоз вақтлари Хонқа вақти бўйича":ted($chat_id,80,$text); break;
case "Намоз вақтлари Янгибозор вақти бўйича":ted($chat_id,81,$text); break;
case "Намоз вақтлари Шовот вақти бўйича":ted($chat_id,82,$text); break;
case "Намоз вақтлари Деҳқонобод вақти бўйича":ted($chat_id,84,$text); break;
case "Намоз вақтлари Ғузор вақти бўйича":ted($chat_id,85,$text); break;
case "Намоз вақтлари Косон вақти бўйича":ted($chat_id,86,$text); break;
case "Намоз вақтлари Таллимаржон вақти бўйича":ted($chat_id,87,$text); break;
case "Намоз вақтлари Муборак вақти бўйича":ted($chat_id,88,$text); break;
case "Намоз вақтлари Душанбе вақти бўйича":ted($chat_id,89,$text); break;
case "Намоз вақтлари Ашхабод вақти бўйича":ted($chat_id,90,$text); break;
case "Намоз вақтлари Туркманобод вақти бўйича":ted($chat_id,91,$text); break;
case "Намоз вақтлари Тошҳовуз вақти бўйича":ted($chat_id,92,$text); break;
case "Намоз вақтлари Қарши вақти бўйича":ted($chat_id,93,$text); break;
case "Намоз вақтлари Навои вақти бўйича":ted($chat_id,94,$text); break;
    
    default:
        bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Вилоятни танланг",
'reply_markup'=>$key
        ]);
        break;
}
}
else{
  bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Вилоятни танланг",
'reply_markup'=>$key

]);
}