<?
set_time_limit(0);

include_once ("../config.php");

// ������ �����Ѵٸ� ��ġ�� �� ����.
if (file_exists("../dbconfig.php")) {
    echo "<meta http-equiv='content-type' content='text/html; charset=$g4[charset]'>";
    echo <<<HEREDOC
    <script language="JavaScript">
    alert("��ġ�Ͻ� �� �����ϴ�.");
    location.href="../";
    </script>
HEREDOC;
    exit;
}

$gmnow = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: 0"); // rfc2616 - Section 14.21
header("Last-Modified: " . $gmnow);
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

$mysql_host  = $_POST[mysql_host];
$mysql_user  = $_POST[mysql_user];
$mysql_pass  = $_POST[mysql_pass];
$mysql_db    = $_POST[mysql_db];
$admin_id    = $_POST[admin_id];
$admin_pass  = $_POST[admin_pass];
$admin_name  = $_POST[admin_name];
$admin_email = $_POST[admin_email];

$dblink = @mysql_connect($mysql_host, $mysql_user, $mysql_pass);
if (!$dblink) {
    echo "<meta http-equiv='content-type' content='text/html; charset=$g4[charset]'>";
    echo "<script language='JavaScript'>alert('MySQL Host, User, Password �� Ȯ���� �ֽʽÿ�.');history.back();</script>"; 
    exit;
}

$select_db = @mysql_select_db($mysql_db, $dblink);
if (!$select_db) {
    echo "<meta http-equiv='content-type' content='text/html; charset=$g4[charset]'>";
    echo "<script language='JavaScript'>alert('MySQL DB �� Ȯ���� �ֽʽÿ�.');history.back();</script>"; 
    exit;
}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?=$g4[charset]?>">
<title>�״�����4 ��ġ (3/3) - DB</title>
<style type="text/css">
<!--
.body {
	font-size: 12px;
}
.box {
	background-color: #FCFCFC;
    color:#18307B;
	font-size: 12px;
}
.nobox {
	background-color: #FCFCFC;
    border-style:none;
    font-size: 12px;
}
-->
</style>
</head>

<body background="img/all_bg.gif" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="587" border="0" cellspacing="0" cellpadding="0">
    <form name=frminstall2>
    <tr> 
                <td colspan="3"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="587" height="22">
                        <param name="movie" value="img/top.swf">
                        <param name="quality" value="high">
                        <embed src="img/top.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="587" height="22"></embed></object></td>
    </tr>
    <tr> 
      <td width="3"><img src="img/box_left.gif" width="3" height="340"></td>
      <td width="581" valign="top" bgcolor="#FCFCFC"><table width="581" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td><img src="img/box_title.gif" width="581" height="56"></td>
          </tr>
        </table>
        <br>
        <table width="541" border="0" align="center" cellpadding="0" cellspacing="0" class="body">
          <tr> 
            <td>��ġ�� �����մϴ�. <font color="#CC0000">��ġ�� �۾��� �ߴ����� ���ʽÿ�. </font></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td><div align="left">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="status_bar" type="text" class="box" size="76" readonly></div></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td><table width="350" border="0" align="center" cellpadding="5" cellspacing="0" class="body">
                <tr> 
                  <td width="50"> </td>
                  <td width="300"><input type=text name=job1 class=nobox size=80 readonly></td>
                </tr>
                <tr> 
                  <td width="50"> </td>
                  <td width="300"><input type=text name=job2 class=nobox size=80 readonly></td>
                </tr>
                <tr> 
                  <td width="50"> </td>
                  <td width="300"><input type=text name=job3 class=nobox size=80 readonly></td>
                </tr>
                <tr> 
                  <td width="50"> 
                    <div align="center"></div></td>
                  <td width="300"><input type=text name=job4 class=nobox size=80 readonly></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td><input type=text name=job5 class=nobox size=90 readonly></td>
          </tr>
        </table>
        <table width="562" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height=20><img src="img/box_line.gif" width="562" height="2"></td>
          </tr>
        </table>
        <table width="551" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td align="right"> 
              <input type="button" name="btn_next" disabled value="����ȭ��" onclick="location.href='../';">
            </td>
          </tr>
        </table></td>
      <td width="3"><img src="img/box_right.gif" width="3" height="340"></td>
    </tr>
    <tr> 
      <td colspan="3"><img src="img/box_bottom.gif" width="587" height="3"></td>
    </tr>
    </form>
  </table>
</div>
<?
flush(); usleep(50000); 

/*
// �״����� ���̺� ���� --------------------------------
$sql = " desc $cfg[table_default] ";
$result = @mysql_query($sql);
// �״����� �缳ġ�� üũ�ϼ̰ų� �״����尡 ��ġ�Ǿ� ���� �ʴٸ�
if ($del_gnuboard || !$result) {
    $file = implode("", file("./sql_schema.sql"));
    eval("\$file = \"$file\";");

    $f = explode(";", $file);
    for ($i=0; $i<count($f); $i++) {
        if (trim($f[$i]) == "") continue;
        mysql_query($f[$i]) or die(mysql_error());
    }
}
// �״����� ���̺� ���� end --------------------------------
*/

/*
$str = implode("", file("../common.php"));
$filename = "db" . substr(md5(uniqid("")),0,8) . ".php";
$str = str_replace("dbconfig.php", $filename, $str);
$f = fopen("../common.php", "w");
fputs($f, $str);
fclose($f);
*/


// ���̺� ���� ------------------------------------
$file = implode("", file("./sql_gnuboard4.sql"));
eval("\$file = \"$file\";");

$f = explode(";", $file);
for ($i=0; $i<count($f); $i++) {
    if (trim($f[$i]) == "") continue;
    mysql_query($f[$i]) or die(mysql_error());
}
// ���̺� ���� ------------------------------------

echo "<script>document.frminstall2.job1.value='��ü ���̺� ������';</script>";
flush(); usleep(50000); 

// ������ȣ INSERT
/*
$zipfile = fopen("../$g4[admin]/sql_zip.sql", "r");
$i = 0;
while (!feof($zipfile)) {
    $zipline = fgetss($zipfile, 1024);
    if (!preg_match("/^INSERT/i", $zipline)) {
        continue;
    }

    $zipline = preg_replace("/_TABLE_ZIP_/", $g4[zip_table], $zipline);
    $zipline = preg_replace("/;/", "", $zipline);
    //@mysql_query($zipline) or die(mysql_error() . "<p>" . $zipline);
    @mysql_query($zipline);

    if ($i++%1000==0) {
        echo "<script language='JavaScript'>document.frminstall2.status_bar.value += '��';</script>\n";
        flush();
        usleep(500); 
    }
}
fclose($zipfile);
*/

for ($i=0; $i<45; $i++)
{
    echo "<script language='JavaScript'>document.frminstall2.status_bar.value += '��';</script>\n";
    flush();
    usleep(500); 
}

echo "<script>document.frminstall2.job1.value='��ü ���̺� ���� �Ϸ�';</script>";
flush(); usleep(50000); 

$read_point = -1;
$write_point = 5;
$comment_point = 1;
$download_point = -20;

//-------------------------------------------------------------------------------------------------
// config ���̺� ����
$sql = " insert into $g4[config_table]
            set cf_title = '�״�����4',
                cf_admin = '$admin_id',
                cf_use_point = '1',
                cf_use_norobot = '1',
                cf_use_copy_log = '1',
                cf_login_point = '100',
                cf_memo_send_point = '500',
                cf_cut_name = '10',
                cf_nick_modify = '60',
                cf_new_skin = 'basic',
                cf_new_rows = '15',
                cf_search_skin = 'basic',
                cf_connect_skin = 'basic',
                cf_read_point = '$read_point',
                cf_write_point = '$write_point',
                cf_comment_point = '$comment_point',
                cf_download_point = '$download_point',
                cf_search_bgcolor = 'YELLOW',
                cf_search_color = 'RED',
                cf_write_pages = '10',
                cf_link_target = '_blank',
                cf_delay_sec = '30',
                cf_filter = '18��,18��,18����,18��,18��,18��,18��,18��,����,����,����,����,������,������,������,������,����,����,����Ű,���ڽ�,����,�Ի���,�Ի���,����,��,����,���̷�,�ϱ͹�,�ϱ��,�Ϲ�,����,������,������,������,������,������,������,����,����,��ť,��ť,��ť,�߸���,����,����,����,����,����,����ŷ,����,�ù�,�úζ�,�úη�,�úθ�,�ú�,�ú��,����,����,����,�ǹ�,��8,�ʽ�,��â,�;�,�Գ�,���,�س�,�߾�,��,���,������,�겥,�꿢,����,����,����,����,��8,����,����,����,����,������,���ζ�,���η�,���η�,���θ�,����,�����,����,����,���Ƕ�,����,����,����,��,�ư���,�ư���,��â,����,���,���,���ֱ�,����,����,������,������,������,������,����,����,����,����,��,��,��,���,���,���,����,����,����,���̶�,�λ�,��,��ť,��ť,��ť,��������',
                cf_possible_ip = '',
                cf_intercept_ip = '',
                cf_member_skin = 'basic',
                cf_register_level = '2',
                cf_register_point = '1000',
                cf_icon_level = '2',
                cf_leave_day = '30',
                cf_search_part = '10000',
                cf_email_use = '1',
                cf_prohibit_id = 'admin,administrator,������,���,����,������,webmaster,��������,sysop,�û�,�ü�,manager,�Ŵ���,�޴���,root,��Ʈ,su,guest,�湮��',
                cf_prohibit_email = 'hanmail.net\\ndaum.net',
                cf_new_del = '30',
                cf_memo_del = '180',
                cf_visit_del = '180',
                cf_popular_del = '180',
                cf_use_member_icon = '2',
                cf_member_icon_size = '5000',
                cf_member_icon_width = '22',
                cf_member_icon_height = '22',
                cf_login_minutes = '10',
                cf_image_extension = 'gif|jpg|jpeg|png',
                cf_flash_extension = 'swf',
                cf_movie_extension = 'asx|asf|wmv|wma|mpg|mpeg|mov|avi|mp3',
                cf_formmail_is_member = '1',
                cf_page_rows = '15',
                cf_stipulation = '�ش� Ȩ�������� �´� ȸ�����Ծ���� �Է��մϴ�.',
                cf_privacy = '�ش� Ȩ�������� �´� ����������ȣ��å�� �Է��մϴ�.'
                ";
mysql_query($sql) or die(mysql_error() . "<p>" . $sql);

// ��� ȸ������
$sql = " insert into $g4[member_table]
            set mb_id = '$admin_id',
                mb_password = PASSWORD('$admin_pass'),
                mb_name = '$admin_name',
                mb_nick = '$admin_name',
                mb_email = '$admin_email',
                mb_jumin = PASSWORD('1111111111118'),
                mb_level = '10',
                mb_mailling = '1',
                mb_open = '1',
                mb_email_certify = '$g4[time_ymdhis]',
                mb_datetime = '$g4[time_ymdhis]',
                mb_ip = '$_SERVER[REMOTE_ADDR]' 
                ";
@mysql_query($sql);

echo "<script>document.frminstall2.job2.value='DB���� �Ϸ�';</script>";
flush(); usleep(50000); 
//-------------------------------------------------------------------------------------------------

// DB ���� ���� ����
$file = "../dbconfig.php";
$f = @fopen($file, "w");

fwrite($f, "<?\n");
//fwrite($f, "if (!preg_match('/^'.str_replace('/', '\/', dirname(__FILE__)).'/', \$_SERVER['SCRIPT_FILENAME'])) die('�������� ������ �ƴ�.');\n");
//fwrite($f, "if (\$dbconfig_file != str_replace(\$dirname, '', __FILE__)) die('�������� ������ �ƴ�');\n");
fwrite($f, "\$mysql_host = \"$mysql_host\";\n");
fwrite($f, "\$mysql_user = \"$mysql_user\";\n");
fwrite($f, "\$mysql_password = \"$mysql_pass\";\n");
fwrite($f, "\$mysql_db = \"$mysql_db\";\n");
fwrite($f, "?>");

fclose($f);
@chmod($file, 0606);
echo "<script>document.frminstall2.job3.value='DB���� ���� ���� �Ϸ�';</script>";

/*
$str = implode("", file("../common.php"));
$str = str_replace("__MYSQL_HOST__", $mysql_host, $str);
$str = str_replace("__MYSQL_USER__", $mysql_user, $str);
$str = str_replace("__MYSQL_PASS__", $mysql_pass, $str);
$str = str_replace("__MYSQL_DB__",   $mysql_db,   $str);
$f = fopen("../common.php", "w");
fputs($f, $str);
fclose($f);
echo "<script>document.frminstall2.job3.value='DB������ ��ȯ �Ϸ�';</script>";
*/

flush(); usleep(50000); 


// 1.00.09 - data/log ����
// ���丮 ����
$dir_arr = array ("../extend",
                  "../data",
                  "../data/file",
                  "../data/log",
                  "../data/member",
                  "../data/session",
                  "../data/$g4[editor]");
for ($i=0; $i<count($dir_arr); $i++) 
{
    @mkdir($dir_arr[$i], 0707);
    @chmod($dir_arr[$i], 0707);

    // ���丮�� �ִ� ������ ����� ������ �ʰ� �Ѵ�.
    $file = $dir_arr[$i] . "/index.php";
    $f = @fopen($file, "w");
    @fwrite($f, "");
    @fclose($f);
    @chmod($file, 0606);
}

@rename("../install", "../install.bak");
//-------------------------------------------------------------------------------------------------

echo "<script language='JavaScript'>document.frminstall2.status_bar.value += '��';</script>\n";
flush();
sleep(1);

echo "<script>document.frminstall2.job4.value='�ʿ��� Table, File, ���丮 ������ ��� �Ϸ� �Ͽ����ϴ�.';</script>";
echo "<script>document.frminstall2.job5.value='* ����ȭ�鿡�� ��� �α����� �� �� ��� ȭ������ �̵��Ͽ� ȯ�漳���� ������ �ֽʽÿ�.';</script>";
flush(); usleep(50000); 
?>

<script>document.frminstall2.btn_next.disabled = false;</script>
<script>document.frminstall2.btn_next.focus();</script>

</body>
</html>