<?
// ##################################################
//#########      ��ȯ�̰� ��������ϴ�.   ###########
//#########       016-567-1084            ###########
//#########       suhan@kebi.com          ###########
//#########     �����: �̼�ȯ            ###########
//###################################################
function alert_msg($msg){
	echo("<script>
		alert('$msg');
		history.go(-1);
		</script>
	");
}
if($mod=='admin' and ( $mod=='admin' and $passwd != '1234')){
	alert_msg("��й�ȣ�� Ʋ�Ƚ��ϴ�.");
}

//��¥����
$y=date(y);
$m=date(m);
$d=date(d);
$h=date(H);


$data_file="gong.txt";
$str = file($data_file);
$max = sizeof($str);
$count=$max-1;

if(!$mode){   /// ��尡 ������ �ʱ� ���� ���

if( !isset($numb) ) $view=$count;

else{ 
  if($numb < 0) $numb = 0;
  else if($numb > $count )$numb=$count;
 $view=$numb;
}

$k = $str[$view];
$line = explode("|",$k);  

   echo("<html><head><title>���� ���� ������ ���</title></head>   
<body bgcolor='white' text='black' link='blue' vlink='purple' alink='red' leftmargin='0' marginwidth='0' topmargin='12' marginheight='0'>
<center>
   <table border='0' width='300'>
    <tr><td width='21'>
	     <img border=0 src=admin.gif width='21' alt='������ ���'>
	 	</td>
        <td width='200' bgcolor='#B7A4A4'>
            <p align='center'>&nbsp;<font color='blue' size=2 color=#434013>
               $line[0]</font></p>
        </td>
        <td width='69' bgcolor='teal'>
            <p align='center'><font size=2>&nbsp;$line[2]</font></p>
        </td>
    </tr>
    <tr>
        <td width='294' height='105' colspan='3' bgcolor='#DEDE96'>
            <p><font size=2 color=#324123>$line[1]</font></p>
        </td>
    </tr>
</table>
  <table border='0' width='300'><tr>
  <td width='100' align='center'>
     
	 <a href='$PHP_SELF?mode=new'>
     <img border='0' src='write.gif' alt='��������'></a>&nbsp;
	 
	 <a href='$PHP_SELF?mode=del&n=$view'>
	 <img border='0' src='del.gif'  alt='�����'></a>
  </td>
  <td width='200' align='center'>");
  $pre= $view-1;
echo ("<font size=2 color=#006666>
       <a href='$PHP_SELF?numb=$pre'>
       ����</a></font>");

$cur = $view + 1;
echo '&nbsp;'.$cur.'/'.$max.'&nbsp;';

echo ("<font size=2 color=#006666>
       <a href='$PHP_SELF?numb=$cur'>
	    ����</a></font>
		</td>
       </tr></table>");

}else if($mode=='new'){  // mode=�� ���۾���
  echo("<html><head><title>���� ���� ������ ���</title></head>   
   <body bgcolor='white' text='black' link='blue' vlink='purple' alink='red' leftmargin='0' marginwidth='0' topmargin='12' marginheight='0'>
   <center>
   <form action='$PHP_SELF'>
   <input type='hidden' name='mode' value='insert'>
    <table border='0' width='300'>
     <tr><td width='21'>
	     <img border=0 src=admin.gif width='21' alt='������ ���'>
	 	</td>
        <td width='200' bgcolor='#B7A4A4'>
            <p align='center'>����<input name=subject size=20 ></p>
        </td>
        <td width='69' bgcolor='teal'>
            <p align='center'><font size=2>&nbsp;$y/$m/$d</p>
        </td>
    </tr>
    <tr>
        <td width='294' height='105' colspan='3' bgcolor='#DEDE96'>
            <p>����<textarea name=content cols=33 rows=4></textarea></p>
        </td>
    </tr>
  </table><br>
  <input type = 'submit' value='�۾���'>
  </form>");

}else if($mode == 'del'){  // mode �� �����.

  $fr = fopen($data_file,"w");
  fwrite($fr,"");
  fclose($fr);

  for($i=0; $i < $max ; $i++){
 
	$ins = fopen($data_file,"a");
      if($n==$i) continue;
      fwrite($ins,$str[$i]);
  } 
    fclose($ins);
    echo("<script>
		alert('���� �Ǿ����ϴ�.');
	     </script>
	 <meta http-equiv='Refresh' content='0; URL=./admin.php'>
	");
		  exit;
}else if($mode == 'insert'){

    $fw=fopen($data_file,"a");
	fwrite($fw,"$subject|$content|$y/$m/$d\r\n");
	fclose($fw);

    echo("<script>
		alert('�ԷµǾ����ϴ�.');
	     </script>
	 <meta http-equiv='Refresh' content='0; URL=./admin.php'>
	");
		  exit;
}

echo("<input type='button' value='�ݱ�' onclick='window.close()'>
</center></body>
</html>
"); 
?>	
