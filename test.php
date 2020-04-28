<?php 

if (!$to) $to = "tomato@dankun.co.kr"; 
$sub= "HTML 메일연습"; 
$body .= "content-Type: text/html; charset=euc-kr\r\n"; 	
$body .= "content-Transfer-Encoding: 8bit\r\n\r\n";
$body .= "<html><body>< font size=2 color=red> HTML 메일연습입니다 </font></body></html>"; 
$mail_body .= "Content-Type: text/html; charset=euc-kr\n"; 
$from = "From:FAQ 프로젝트<FAQProject@phpschool.com>";
$from.= "Content-Type: text/html; charset=euc-kr\n"; 
$result = mail("$to", "$sub", "$body", "$from"); 
if($result) 
{ 
echo("메일이 보내졌습니다."); 
} 

?> 
