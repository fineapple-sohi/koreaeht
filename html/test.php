<?php 

if (!$to) $to = "tomato@dankun.co.kr"; 
$sub= "HTML ���Ͽ���"; 
$body .= "content-Type: text/html; charset=euc-kr\r\n"; 	
$body .= "content-Transfer-Encoding: 8bit\r\n\r\n";
$body .= "<html><body>< font size=2 color=red> HTML ���Ͽ����Դϴ� </font></body></html>"; 
$mail_body .= "Content-Type: text/html; charset=euc-kr\n"; 
$from = "From:FAQ ������Ʈ<FAQProject@phpschool.com>";
$from.= "Content-Type: text/html; charset=euc-kr\n"; 
$result = mail("$to", "$sub", "$body", "$from"); 
if($result) 
{ 
echo("������ ���������ϴ�."); 
} 

?> 
