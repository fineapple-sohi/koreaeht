<?
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ� 

$g4[title] = "ȸ�����̵�/��й�ȣ ã��";

?>

<!-- Line top start -->
<table width="570" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:10px;">
	<tr>
		<td><img src="<?=$member_skin_path?>/img/out_bco01.gif" width="7" height="6"></td>
		<td background="<?=$member_skin_path?>/img/out_bbg01.gif"></td>
		<td><img src="<?=$member_skin_path?>/img/out_bco02.gif" width="6" height="6"></td>
	</tr>
	<tr>
		<td background="<?=$member_skin_path?>/img/out_bbg02.gif"></td>
		<td>
<!-- Line top end -->

<!-- Title start -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr height="28">
		<td class="small">
			<img src="<?=$member_skin_path?>/img/icon_dot01.gif" width="3" height="3" align="absmiddle" style="margin:0px 5px 2px 5px"><b><?=$g4[title]?></b>
		</td>
	    <td align="right" bgcolor="#FFFFFF" ><img src="<?=$member_skin_path?>/img/step_01.gif" width="110" height="16"></td>
	</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0" > 
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="15"></td></tr>
</table>
<!-- Title end -->

<table width="557" cellpadding="0" cellspacing="0" border="0" align="center">
<form name=fpasswordforget method=post action="javascript:fpasswordforget_submit(document.fpasswordforget);" autocomplete=off>
	<tr>
		<td style="padding:10px 50px 10px 50px; border:5px solid #F3F3F3;">
			<table width="100%" height="40" border="0" cellspacing="2" cellpadding="0">
				<tr> 
					<td colspan="2"><img src="<?=$member_skin_path?>/img/password1_title01.gif" width="149" height="22"></td>
				</tr>
				<tr>
					<td width="100" align="center"><b>ȸ�����̵�</b></td>
					<td width="250"><input class="ed" type=text name='pass_mb_id' size=20 maxlength=20 itemname='ȸ�����̵�'></td>
				</tr>
				<tr>
					<td colspan="2" height="5"></td>
				</tr>
				<tr>
					<td colspan="2" height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
				</tr>
				<tr>
					<td colspan="2" height="5"></td>
				</tr>
				<tr> 
					<td colspan="2"><img src="<?=$member_skin_path?>/img/password1_title02.gif" width="149" height="22"></td>
				</tr>
				<tr> 
					<td width="100" height="14" align="center"><b>�̸�</b></td>
					<td width="250" height="14"><INPUT name=mb_name itemname="�̸�" class="ed" size=20></td>
				</tr>
				<? if ($config[cf_use_jumin]) { // �ֹε�Ϲ�ȣ�� ����Ѵٸ�(�Է� �޾Ҵٸ�) ?>
				<tr> 
					<td width="100" height="14" align="center"><b>�ֹε�Ϲ�ȣ</b></td>
					<td width="250" height="14"><INPUT name=mb_jumin itemname="�ֹε�Ϲ�ȣ" jumin class="ed" size=20 maxlength=13> �� - ���� �Է��ϼ���.</td>
				</tr>
				<? } else { ?>
                <tr> 
					<td width="100" height="14" align="center"><b>E-mail</b></td>
					<td width="250" height="14"><INPUT name=mb_email itemname="E-mail" email class="ed" size=30></td>
				</tr>
				<? } ?>
			</table>
		</td>
    </tr>
	<tr><td height="10"></td></tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<input type="image" src="<?=$member_skin_path?>/img/btn_next.gif" width="38" height="18">&nbsp;&nbsp;<a href="javascript:window.close();"><img src="<?=$member_skin_path?>/img/btn_close.gif" width="47" height="18" border="0"></a>
		</td>
	</tr>
</table>

<!-- Line bottom start -->
		</td>
		<td background="<?=$member_skin_path?>/img/out_bbg03.gif"></td>
	</tr>
	<tr>
		<td><img src="<?=$member_skin_path?>/img/out_bco03.gif" width="7" height="6"></td>
		<td background="<?=$member_skin_path?>/img/out_bbg04.gif"></td>
		<td><img src="<?=$member_skin_path?>/img/out_bco04.gif" width="6" height="6"></td>
	</tr>
</table>
<!-- Line bottom end -->

</form>

<script language="JavaScript">
function fpasswordforget_submit(f)
{
    if (f.pass_mb_id.value == "") {
        if (typeof f.mb_jumin != "undefined") {
            if (f.mb_name.value == "" || f.mb_jumin.value == "") {
                alert("ȸ�����̵�\n\n�ƽ� ��쿡�� ȸ�����̵�\n\n�𸣽� ��쿡�� �̸��� �ֹε�Ϲ�ȣ��\n\n�Է��Ͽ� �ֽʽÿ�.");
                return;
            }
        } else if (typeof f.mb_email != "undefined") {
            if (f.mb_name.value == "" || f.mb_email.value == "") {
                alert("ȸ�����̵�\n\n�ƽ� ��쿡�� ȸ�����̵�\n\n�𸣽� ��쿡�� �̸��� E-mail ��\n\n�Է��Ͽ� �ֽʽÿ�.");
                return;
            }
        }
    }

    f.action = "./password_forget2.php";
    f.submit();
}

document.fpasswordforget.pass_mb_id.focus();
</script>
