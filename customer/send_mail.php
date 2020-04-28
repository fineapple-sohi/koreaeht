<?php 

if (!$to) $to = "koreaeht@koreaeht.com"; 
$sub= "EHTS Design Requests"; 
$body = "Name :";
$body .= $name1;
$body .= "\nAddress : ";
$body .= $address;
$body .= "\nCountry : ";
$body .= $country;
$body .= "\nPhone : ";
$body .= $phone;
$body .= "\nFax : ";
$body .= $fax;
$body .= "\nE-mail : ";
$body .= $email;
$body .= "\nPreferred method of contact : ";
$body .= $Pmc;
$body .= "\nProject Name : ";
$body .= $project;
$body .= "\nApplication : ";
if ($AOther!=""){
   $body .= $AOther;
}
else{   
   $body .= $App;
}
$body .= "\nSite : ";
$body .= $site;
$body .= "\nArea Approval : ";
$body .= $AA;
$body .= "\nPower supply : ";
if ($vol!=""){
  $body .= $vol;   
  $body .= "Volage, ";   
}
if ($pha!=""){
  $body .= $pha;
  $body .= "Phase";
}
$body .= "\nNorminal Size : ";
if ($nsOther!=""){
  $body .= "Others -  ";
  $body .= $nsOther;
}else{
   $body .= $ns;   
   if ($pipe!="" && $ns=="Pipe line"){
      $body .= $pipe;
   }
   if ($silo!="" && $ns!="Pipe line"){
      $body .= $silo;
   }  
}  
$body .= "\nTemperature : ";
if ($MaxTemp!=""){
  $body .= "Max Temp ";	
  $body .= $MaxTemp;
  $body .= "℃,  ";	
} 
if ($MinTemp!=""){
  $body .= "Min Temp ";	
  $body .= $MinTemp;
  $body .= "℃,  ";	
} 
if ($OTemp!=""){
  $body .= "Operating Temp ";	
  $body .= $OTemp;
  $body .= "℃";	
} 
$body .= "\nInsulation Type : ";
$body .= $itype;   

$body .= "\nInsulation Thickness :";
$body .= $ithick;   

$body .= "\nOptions : ";

if ($cp==1){
  $body .= "Control panel, ";	
} 
if ($ek==2){
  $body .= "End seal kit, ";	
} 
if ($tc==3){
  $body .= "Thermostat controller, ";	
} 
if ($gf==4){
  $body .= "Glass Fiber Tape, ";	
} 
if ($ftd==5){
  $body .= "FTD Sensor, ";	
} 
if ($at==6){
  $body .= "Aluminum Tape, ";	
} 
if ($fc==7){
  $body .= "Power connection kit, ";	
} 
if ($optionOthers!=""){
  $body .= "\nOthers ";	
  $body .= $optionOthers;	
}

$body .= "\nNotes : ";	
$body .= $notes;


$from = "From:";
$from .= $name1;
$from .= "님의 Order 멜입니다.";
$from .= "<";
$from .= $email;
$from .= ">";

$result = mail("$to", "$sub", "$body", "$from"); 
if($result) {
  echo("
   <script language='javascript'>
	alert('메일을 보냈습니다.');
	history.back();
  </script>
 ");
} 

else {
  echo("	
   <script language='javascript'>
	alert('메일 보내기에 실패했습니다.');
	history.back();
 </script>
 ");
} 
?> 
