<?
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ� 

$g4[title] = "ȸ�����̵�/��й�ȣ ã�� 2�ܰ�";

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
	    <td align="right" bgcolor="#FFFFFF" ><img src="<?=$member_skin_path?>/img/step_02.gif" width="110" height="16"></td>
	</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0" > 
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="15"></td></tr>
</table>
<!-- Title end -->

<table width="557" cellpadding="0" cellspacing="0" border="0" align="center">
<form name=fpasswordforget2 method=post action="javascript:fpasswordforget2_submit(document.fpasswordforget2);" autocomplete=off>
<input type=hidden name=bo_table   value='<?=$bo_table?>'>
<input type=hidden name=pass_mb_id value='<?=$mb[mb_id]?>'>
	<tr>
		<td style="padding:10px 50px 10px 50px; border:5px solid #F3F3F3;">
			<table width="100%" height="40" border="0" cellspacing="4" cellpadding="0">
				<tr>
                    <td width="130"><img src="<?=$member_skin_path?>/img/password2_title01.gif" width="66" height="22"></td>
                    <td width="200"><b><?=$mb[mb_id]?></b></td>
                </tr>
				<tr>
					<td colspan="2" height="5"></td>
				</tr>
				<tr>
					<td colspan="2" height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
				</tr>
				<tr>
					<td colspan="2" height="10"></td>
				</tr>
                <tr> 
                    <td><img src="<?=$member_skin_path?>/img/password2_title02.gif" width="121" height="22"></td>
                    <td><?=$mb[mb_password_q]?></td>
                </tr>
                <tr> 
                    <td><img src="<?=$member_skin_path?>/img/password2_title03.gif" width="121" height="22"></td>
					<td></td>
				</tr>
				<tr>
                    <td style="padding-left:15px;" colspan="2" align="left"><input type=text name='mb_password_a'class="ed" style="width:100%;" required itemname='�н����� �нǽ� �亯' value=''></td>
				</tr>

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

<script language='JavaScript'>
function fpasswordforget2_submit(f)
{
    f.action = "./password_forget3.php";
    f.submit();
}

document.fpasswordforget2.mb_password_a.focus();
</script>