<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000">
<link rel="apple-touch-icon-precomposed" href="/inc/style/img/app-icon.png">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/inc/style/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Хостинг, Посуточный оплата,  Мобильный Хостинг,Мобильный Хостинг,, php 7, ffmpeg, GD,(pdo) MySQL(i), sqlite, Curl,IonCube, выбор версии php"/>
<meta name="description" content="Хостинг от  – качественный веб hosting сайтов c круглосуточной поддержкой. Надежный linux хостинг в Азие []"/> 
<meta name="author" content=""/>
<meta name="copyright" content="!"/>
<meta http-equiv="content-language" content="ru"/>
<title>Менеджер Файлов</title></head><body><header>
         <table>
            <tr>
               <td class="l_bar">
<a href="/"><img src="/inc/style/img/home.png" width="23"  alt="home"></a>
               </td>
               <td class="c_bar">
                  <h1 id="logo"><b>MyXvest.Ru - Менеджер сайтов</b></h1>
               </td>
               <td class="r_bar">
<a href="https://MyXvest.Ru/user/menu" title="Кабинет"><img width="25" src="/img/us2.png" alt="Кабинет"></a>
</td> </tr>
         </table>
      </header><div class="mOm"><div class="block first"><?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$ricon = array('01d'=>'🌞','02d'=>'🌤','03d'=>'☁️','04d'=>'🌥','09d'=>'🌦','10d'=>'🌧','11d'=>'⛈','13d'=>'❄️','50d'=>'💨','01n'=>'🌙','02n'=>'☁️','03n'=>'☁️','04n'=>'🌩','09n'=>'🌧','10n'=>'🌧','11n'=>'⛈','13n'=>'❄️','50n'=>'💨');

$obuhavo = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Zarkent,UZ&units=metric&appid=a9d86a9dc54f8caf39ac424735ffc2e6"),true);

$temp = $obuhavo['main']['temp'];
$icon = $obuhavo['weather'][0]['icon'];

$r1=date("H:i",strtotime("4 hour"));
$r1 = str_replace('1', '❶', $r1);
$r1 = str_replace('2', '❷', $r1);
$r1 = str_replace('3', '❸', $r1);
$r1 = str_replace('4', '❹', $r1);
$r1 = str_replace('5', '❺', $r1);
$r1 = str_replace('6', '❻', $r1);
$r1 = str_replace('7', '❼', $r1);
$r1 = str_replace('8', '❽', $r1);
$r1 = str_replace('9', '❾', $r1);
$r1 = str_replace('0', 'ⓞ', $r1);

$r1s=date("s",strtotime("4 hour"));
$r1s = str_replace('1', '❶', $r1s);
$r1s = str_replace('2', '❷', $r1s);
$r1s = str_replace('3', '❸', $r1s);
$r1s = str_replace('4', '❹', $r1s);
$r1s = str_replace('5', '❺', $r1s);
$r1s = str_replace('6', '❻', $r1s);
$r1s = str_replace('7', '❼', $r1s);
$r1s = str_replace('8', '❽', $r1s);
$r1s = str_replace('9', '❾', $r1s);
$r1s = str_replace('0', 'ⓞ', $r1s);

$r2=date("H:i",strtotime("4 hour"));
$r2 = str_replace('1', '①', $r2);
$r2 = str_replace('2', '②', $r2);
$r2 = str_replace('3', '③', $r2);
$r2 = str_replace('4', '④', $r2);
$r2 = str_replace('5', '⑤', $r2);
$r2 = str_replace('6', '⑥', $r2);
$r2 = str_replace('7', '⑦', $r2);
$r2 = str_replace('8', '⑧', $r2);
$r2 = str_replace('9', '⑨', $r2);
$r2 = str_replace('0', 'ⓞ', $r2);

$r2s=date("s",strtotime("4 hour"));
$r2s = str_replace('1', '①', $r2s);
$r2s = str_replace('2', '②', $r2s);
$r2s = str_replace('3', '③', $r2s);
$r2s = str_replace('4', '④', $r2s);
$r2s = str_replace('5', '⑤', $r2s);
$r2s = str_replace('6', '⑥', $r2s);
$r2s = str_replace('7', '⑦', $r2s);
$r2s = str_replace('8', '⑧', $r2s);
$r2s = str_replace('9', '⑨', $r2s);
$r2s = str_replace('0', 'ⓞ', $r2s);


$r3=date("H:i",strtotime("4 hour"));
$r3 = str_replace('1', '¹', $r3);
$r3 = str_replace('2', '²', $r3);
$r3 = str_replace('3', '³', $r3);
$r3 = str_replace('4', '⁴', $r3);
$r3 = str_replace('5', '⁵', $r3);
$r3 = str_replace('6', '⁶', $r3);
$r3 = str_replace('7', '⁷', $r3);
$r3 = str_replace('8', '⁸', $r3);
$r3 = str_replace('9', '⁹', $r3);
$r3 = str_replace('0', '⁰', $r3);

$r3s=date("s",strtotime("4 hour"));
$r3s = str_replace('1', '¹', $r3s);
$r3s = str_replace('2', '²', $r3s);
$r3s = str_replace('3', '³', $r3s);
$r3s = str_replace('4', '⁴', $r3s);
$r3s = str_replace('5', '⁵', $r3s);
$r3s = str_replace('6', '⁶', $r3s);
$r3s = str_replace('7', '⁷', $r3s);
$r3s = str_replace('8', '⁸', $r3s);
$r3s = str_replace('9', '⁹', $r3s);
$r3s = str_replace('0', '⁰', $r3s);


$r4=date("H:i",strtotime("4 hour"));
$r4 = str_replace('1', '1⃣', $r4);
$r4 = str_replace('2', '2⃣', $r4);
$r4 = str_replace('3', '3⃣', $r4);
$r4 = str_replace('4', '4⃣', $r4);
$r4 = str_replace('5', '5⃣', $r4);
$r4 = str_replace('6', '6⃣', $r4);
$r4 = str_replace('7', '7⃣', $r4);
$r4 = str_replace('8', '8⃣', $r4);
$r4 = str_replace('9', '9⃣', $r4);
$r4 = str_replace('0', '0⃣', $r4);

$r4s=date("s",strtotime("4 hour"));
$r4s = str_replace('1', '1⃣', $r4s);
$r4s = str_replace('2', '2⃣', $r4s);
$r4s = str_replace('3', '3⃣', $r4s);
$r4s = str_replace('4', '4⃣', $r4s);
$r4s = str_replace('5', '5⃣', $r4s);
$r4s = str_replace('6', '6⃣', $r4s);
$r4s = str_replace('7', '7⃣', $r4s);
$r4s = str_replace('8', '8⃣', $r4s);
$r4s = str_replace('9', '9⃣', $r4s);
$r4s = str_replace('0', '0⃣', $r4s);

$sana1=date("H:i",strtotime("4 hour"));
$sana1 = str_replace('1', '❶', $sana1);
$sana1 = str_replace('2', '❷', $sana1);
$sana1 = str_replace('3', '❸', $sana1);
$sana1 = str_replace('4', '❹', $sana1);
$sana1 = str_replace('5', '❺', $sana1);
$sana1 = str_replace('6', '❻', $sana1);
$sana1 = str_replace('7', '❼', $sana1);
$sana1 = str_replace('8', '❽', $sana1);
$sana1 = str_replace('9', '❾', $sana1);
$sana1 = str_replace('0', 'ⓞ', $sana1);

$raqamlist = ["$r1","$r2","$r3","$r4"];
$raqamm = array_rand($raqamlist);
$raqam = "$raqamlist[$raqamm]";
$randoms = ["$r1:$r2s","$r2:$r3s","$r3:$r4s","$r4:$r1s"];
$randomm = array_rand($randoms);
$random = "$randoms[$randomm]";

$input = ["⌚$raqam </> 📆$kun </> 📅$hafta <\> ⛅$obhavo °C🗓 𝓨𝓲𝓵𝓷𝓲𝓷𝓰 $sana2- 𝓴𝓾𝓷𝓲 ","🎁🎊 𝗧𝘂𝗴'𝗶𝗹𝗴𝗮𝗻 𝗸𝘂𝗻𝗶𝗺𝗴𝗮 $s2- 𝗸𝘂𝗻 𝗾𝗼𝗹𝗱𝗶"];
 $random"," 🍃: + $temp C° $ricon[$icon] ","⏳❄ 𝚈𝚊𝚗𝚐𝚒 𝚢𝚒𝚕𝚐𝚊 📅$c2 𝚔𝚞𝚗 ☃️$c3 𝚜𝚘𝚊𝚝 ⏰ 🎅$c1 𝚖𝚒𝚗𝚞𝚝 🎁$d1 𝚜𝚎𝚔𝚞𝚗𝚍 𝚚𝚘𝚕𝚍𝚒!⌛","𝕊𝕠𝕒𝕥:<$h:$m:$sss><$xh:$xm><$time><$xxh:$xxm>
  $rand=array_rand($input);
  $text="$input[$rand]";
  
 $nik = ("★ 👊Bakhshulloev👊 ★","🥀✯ 𝗡𝗮𝘇𝗶𝗿𝗷𝗼𝗡 ✯🥀","✵ Iᴍᴘᴇʀᴀᴛᴏʀ ✵"," #ᏢαᎠιនᎻαᏦн 👑","🖤 #_ᏢʀεᏃɪᎠεɴᎢ 🌙","🖤 #_𝙽𝚊𝚉𝚒𝚁𝙹𝚘𝙽✵ Ᏼ̱ʀ̱σ̱Ꭲ̱н̱ε̱Ꭱ̱ ✵","👑 ᗰᑕ 🖤 Gᖇᗩᖴᖴ 👑","🖤 #_Aᴍᴇᴘиᴋᴀнᴇц 🗽","🦁 #_しɪᴏɴ ✵ Ꮶɪɴɢ 👑","😎♂ Kнйᴀз ☪ [ Tᴏлᴋᴏвый ] 🌛","✷ Бᴘᴀτ Зᴀ Бᴘᴀτᴀ ✷","😈 ͟ ͟𖣘̱͟𝙽̱͟𝚊̱͟𝚣̱͟𝚒̱͟𝚛̱͟𝚓̱͟𝚘̱͟𝚗̱͟𖣘̱𝚇̱͟𝚞̱͟𝙻̱͟𝚒̱͟𝙼̱͟𝚊̱͟𝙶̱͟𝚊̱͟𝙽̱͟ ͟𖣘̱͟😈","𖣘̱ ͟𝙽̱͟𝚊͟𝚣͟𝚒͟𝚛͟𝚓͟𝚘͟𝚗͟ ͟𖣘𝕠͟𝕜͟𝕖͟𝕟͟ ͟✯̱͟𝙱͟𝚎͟𝚖͟𝚎͟𝚑͟�");