<?
// ##################################################
//#########      수환이가 만들었습니다.   ###########
//#########       016-567-1084            ###########
//#########       suhan@kebi.com          ###########
//#########     만든놈: 이수환            ###########
//###################################################
function alert_msg($msg){
	echo("<script>
		alert('$msg');
		history.go(-1);
		</script>
	");
}
if($mod=='admin' and ( $mod=='admin' and $passwd != '1234')){
	alert_msg("비밀번호가 틀렸습니다.");
}

//날짜구함
$y=date(y);
$m=date(m);
$d=date(d);
$h=date(H);


$data_file="gong.txt";
$str = file($data_file);
$max = sizeof($str);
$count=$max-1;

if(!$mode){   /// 모드가 없을때 초기 보기 모드

if( !isset($numb) ) $view=$count;

else{ 
  if($numb < 0) $numb = 0;
  else if($numb > $count )$numb=$count;
 $view=$numb;
}

$k = $str[$view];
$line = explode("|",$k);  

   echo("<html><head><title>공지 사항 관리자 모드</title></head>   
<body bgcolor='white' text='black' link='blue' vlink='purple' alink='red' leftmargin='0' marginwidth='0' topmargin='12' marginheight='0'>
<center>
   <table border='0' width='300'>
    <tr><td width='21'>
	     <img border=0 src=admin.gif width='21' alt='관리자 모드'>
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
     <img border='0' src='write.gif' alt='새글적기'></a>&nbsp;
	 
	 <a href='$PHP_SELF?mode=del&n=$view'>
	 <img border='0' src='del.gif'  alt='지우기'></a>
  </td>
  <td width='200' align='center'>");
  $pre= $view-1;
echo ("<font size=2 color=#006666>
       <a href='$PHP_SELF?numb=$pre'>
       이전</a></font>");

$cur = $view + 1;
echo '&nbsp;'.$cur.'/'.$max.'&nbsp;';

echo ("<font size=2 color=#006666>
       <a href='$PHP_SELF?numb=$cur'>
	    다음</a></font>
		</td>
       </tr></table>");

}else if($mode=='new'){  // mode=가 새글쓰기
  echo("<html><head><title>공지 사항 관리자 모드</title></head>   
   <body bgcolor='white' text='black' link='blue' vlink='purple' alink='red' leftmargin='0' marginwidth='0' topmargin='12' marginheight='0'>
   <center>
   <form action='$PHP_SELF'>
   <input type='hidden' name='mode' value='insert'>
    <table border='0' width='300'>
     <tr><td width='21'>
	     <img border=0 src=admin.gif width='21' alt='관리자 모드'>
	 	</td>
        <td width='200' bgcolor='#B7A4A4'>
            <p align='center'>제목<input name=subject size=20 ></p>
        </td>
        <td width='69' bgcolor='teal'>
            <p align='center'><font size=2>&nbsp;$y/$m/$d</p>
        </td>
    </tr>
    <tr>
        <td width='294' height='105' colspan='3' bgcolor='#DEDE96'>
            <p>내용<textarea name=content cols=33 rows=4></textarea></p>
        </td>
    </tr>
  </table><br>
  <input type = 'submit' value='글쓰기'>
  </form>");

}else if($mode == 'del'){  // mode 가 지우기.

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
		alert('삭제 되었습니다.');
	     </script>
	 <meta http-equiv='Refresh' content='0; URL=./admin.php'>
	");
		  exit;
}else if($mode == 'insert'){

    $fw=fopen($data_file,"a");
	fwrite($fw,"$subject|$content|$y/$m/$d\r\n");
	fclose($fw);

    echo("<script>
		alert('입력되었습니다.');
	     </script>
	 <meta http-equiv='Refresh' content='0; URL=./admin.php'>
	");
		  exit;
}

echo("<input type='button' value='닫기' onclick='window.close()'>
</center></body>
</html>
"); 
?>	
