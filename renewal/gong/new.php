<?
// ##################################################
//#########      ��ȯ�̰� ��������ϴ�.   ###########
//#########       016-567-1084            ###########
//#########       suhan@kebi.com          ###########
//#########     �����: �̼�ȯ            ###########
//###################################################
if(!$md){
$data_file="gong.txt";
$str = file($data_file);
//$max = sizeof($str);
//$count=$max-1;

$k = $str[$num];
$line = explode("|",$k); 
   echo("<html><head><title>���� ����</title></head>   
<body bgcolor='white' text='black' link='blue' vlink='purple' alink='red' leftmargin='0' marginwidth='0' topmargin='12' marginheight='0'>
<center>
   <table border='0' width='300'>
    <tr><td width='21'><a href=$PHP_SELF?md=admin>
	                   <img border=0 src=admin.gif width='21' alt='������ ��� ����'></a>
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
<input type=button value=�ݱ� onclick=window.close()>
</center></body>
</html>
"); 
}else if($md==admin){
echo("<html><head><title>������ ��� ����</title></head>  
<body><center>
     <br>
	  ������ ��ȣ�� �Է����ּ���<br>
   <form action=admin.php>
   <input type='hidden' name='mod'>
   <input type='password'  name='passwd'><br>
   <input type=submit value='Ȯ��'>
   <input type=button value='���' onclick='history.go(-1)'></center>
   </form>
</body>
</html>
");
}

?>	
