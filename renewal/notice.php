<?
// ##################################################
//#########      수환이가 만들었습니다.   ###########
//#########       016-567-1084            ###########
//#########       suhan@kebi.com          ###########
//#########     만든놈: 이수환            ###########
//###################################################
$data_file="./gong/gong.txt";
$str = file($data_file);
$max = sizeof($str);
$count=$max-1;
 echo("
                  <table border=0 cellpadding=0 cellspacing=0 align='center'>
                    <tr> 
                      <td> <img src='images/event_boxs_01.gif' width=1 height=17></td>
                      <td> <img src='images/event_boxs_02.gif' width=195 height=17></td>
                      <td> <img src='images/event_boxs_03.gif' width=1 height=17></td>
                    </tr>
                    <tr> 
                      <td> <img src='images/event_boxs_04.gif' width=1 height=1></td>
                      <td background='images/event_boxs_04.gif'><img src='images/event_boxs_05.gif' width=195 height=1></td>
                      <td><img src='images/event_boxs_06.gif' width=1 height=1></td>
                    </tr>
					<tr> 
                      <td background='images/event_boxs_04.gif'> <img src='images/event_boxs_04.gif' width=1 height=1></td>
                      <td height='99' valign='top'>");

for( $i=1 ; $i < 7 ; $i++){
$k = $str[$count];
$line = explode("|",$k);    
   echo("<br>&nbsp;&nbsp;<img src='images/flower_icon_yellow.gif' width='11' height='10'>
          <font size=2 color=#595959><a href='#k' onclick=\"window.open('./gong/new.php?num=$count','pop','status=no,scrollbars=yes,width=330,height=200')\">
		  $line[0]</a></font>"); 
if($count==0) exit;                       
$count--;
}
		 	echo(" </td>
                      <td background='images/event_boxs_06.gif'> <img src='images/event_boxs_06.gif' width=1 height=1></td>
                    </tr>
                    <tr> 
                      <td> <img src='images/event_boxs_10.gif' width=1 height=1></td>
                      <td background='images/event_boxs_10.gif'> <img src='images/event_boxs_10.gif' width=195 height=1></td>
                      <td> <img src='images/event_boxs_12.gif' width=1 height=1></td>
                    </tr>
                  </table>
				  ");

?>	