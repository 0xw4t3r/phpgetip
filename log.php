<?php

function logIP()
{
     $ipLog="logfile.php"; // Your logfiles name here (.txt, .html, .htm & .php extensions ok; others may work too)

     // IP logging function orignallt by Dave Lauderdale edited by rowrz (Alex Goodkind)
     // Originally published at: www.digi-dl.com

     $register_globals = (bool) ini_get('register_gobals');
     if ($register_globals) $ip = getenv(REMOTE_ADDR);
     else $ip = $_SERVER['REMOTE_ADDR'];

     $date=date ("d F Y H:i:s");
     $log=fopen("$ipLog", "a+");
     $timezone=date_default_timezone_get();

     if (preg_match("/\bhtm\b/i", $ipLog) || preg_match("/\bhtml\b/i", $ipLog))
     {
          fputs($log, "Logged IP address: $ip - Date logged: $date $timezone <br />");
     }
     else fputs($log, "Logged IP address: $ip - Date logged: $date $timezone <br />");

     fclose($log);
}
// Place the below function call wherever you want the script to fire.
logIp();


?>
