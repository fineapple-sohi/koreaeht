<?
// E-mail ������ ���� ���� (ȸ���Բ� �߼�)
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ� 
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?=$g4[charset]?>">
<title>���� ����</title>
</head>

<style>
body, th, td, form, input, select, text, textarea, caption { font-size: 12px; font-family:����;}
.line {border: 1px solid #868F98;}
</style>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="600" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="25" height="25"></td>
    <td height="25"></td>
    <td width="25" height="25"></td>
</tr>
<tr>
    <td width="25" valign="top"></td>
    <td align="center" class="line" >
        <br>
        <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <table width="500" border="0" cellspacing="0" cellpadding="4">
                <tr> 
                    <td width="100%" height="25" bgcolor=#F7F1D8>���� �����Դϴ�.</td>
                </tr>
                </table>
                <p>

                <table width="500" border="0" align="center" cellpadding="4" cellspacing="0">
                <tr><td height="150">
                    <b><?=$mb_name?></b> ���� E-mail �ּҰ� ����Ǿ����ϴ�.

                    <p>�Ʒ��� �ּҸ� Ŭ���Ͻø� ������ �Ϸ�˴ϴ�.
                    <p><a href='<?=$certify_href?>'><b><?=$certify_href?></b></a>

                    <p>ȸ������ ������ �����ϰ��� ���� �� ������ �ϰڽ��ϴ�.
                    <p>�����մϴ�.
                    </td></tr>
                </table>
                <p>

                <table width="500" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed">
                <tr>
                    <td height="2" bgcolor="#E0E0E0" align="center"></td>
                </tr>
                <tr> 
                    <td height="25" bgcolor="#EDEDED" align="center">�α��� �� ��� ������ �̿��Ͻ� �� �ֽ��ϴ�.[<a href="<?=$g4[url]?>/<?=$g4[bbs]?>/login.php">�ٷΰ���</a>]</td>
                </tr>
                </table>
            </td>
        </tr>
        </table>
        <br>
    </td>
    <td width="25" valign="top"></td>
</tr>
</table>

</body>
</html>