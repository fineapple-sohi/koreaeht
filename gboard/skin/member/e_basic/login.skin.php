<?php

if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ�

$g4[title] = "�α���";

?>

<style type="text/css">
<!--
.tit1 { padding-right:5px; font:bold 8pt ����; width:95; text-align:right; letter-spacing:-1; }
.tit2 { padding:5px; font: 8pt ����; }
-->
</style>

<!-- Line top start -->
<br>
<table width="781" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td><img src="<?=$member_skin_path?>/img/out_bco01.gif" width="7" height="6"></td>
		<td background="<?=$member_skin_path?>/img/out_bbg01.gif"></td>
		<td><img src="<?=$member_skin_path?>/img/out_bco02.gif" width="6" height="6"></td>
	</tr>
	<tr>
		<td background="<?=$member_skin_path?>/img/out_bbg02.gif"></td>
		<td align="center">
<!-- Line top end -->

<!-- Title start -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr height="28">
		<td class="small">
			<img src="<?=$member_skin_path?>/img/icon_dot01.gif" width="3" height="3" align="absmiddle" style="margin:0px 5px 2px 5px"><a href="http://koreaeht.com/">Home</a> > <b><?=$g4[title]?></b>
		</td>
		<td align="right" style="padding-right:10px;"><a href="javascript:history.back();"><img src="<?=$member_skin_path?>/img/btn_prepage.gif" width="77" height="18" border="0" align="absmiddle"></a></td>
	</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="15"></td></tr>
</table>
<!-- Title end -->

<table width="665" cellpadding="0" cellspacing="0" border="0">
<form name="flogin" method="post" action="javascript:flogin_submit(document.flogin);" autocomplete="off">
<input type="hidden" name="url" value='<?=$urlencode?>'>
	<tr>
		<td align="right"><img src="<?=$member_skin_path?>/img/login_title01.gif" width="330" height="190"></td>
		<td width="300" style="padding:10px; border:5px solid #F3F3F3;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td class="tit2" colspan="3"><img src="<?=$member_skin_path?>/img/login_title02.gif"></td>
				</tr>
				<tr>
					<td class="tit1">���̵�</td>
					<td class="tit2"><input type="text" class="ed" maxLength="20" size="20" name="mb_id" itemname="���̵�" required minlength="2"></td>
					<td width="60" rowspan="2" align="right"><input type="image" width="45" height="45" src="<?=$member_skin_path?>/img/btn_login.gif" border="0" align="absmiddle"  onfocus="javascript:mb_password.focus();"></td>
				</tr>
				<tr>
					<td class="tit1">��й�ȣ</td>					
					<td class="tit2"><input type="password" class="ed" maxLength="20" size="20" name="mb_password" itemname="��й�ȣ" required></td>
				</tr>
				<!--
				<tr>
					<td class="tit1">�ڵ��α���</td>
					<td class="tit2" colspan="2" height="26"><input class="ed" onclick="if (this.checked) { if (confirm('�ڵ��α����� ����Ͻø� �������� ȸ�����̵�� �н����带 �Է��Ͻ� �ʿ䰡 �����ϴ�.\n\n\������ҿ����� ���������� ����� �� ������ ����� �����Ͽ� �ֽʽÿ�.\n\n�ڵ��α����� ����Ͻðڽ��ϱ�?')) { this.checked = true; } else { this.checked = false;} }" type="checkbox" name="auto_login" > ���</td>
				</tr>
				-->
				<tr>
					<td colspan="3" height="5"></td>
				</tr>
				<tr>
					<td colspan="3" height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
				</tr>
				<tr>
					<td colspan="3" height="5"></td>
				</tr>
				<tr>
					<td class="tit2" colspan="3" nowrap><li>���� ȸ���� �ƴϽʴϱ�?&nbsp;&nbsp;<a href="./register.php"><img width="58" height="18" src="<?=$member_skin_path?>/img/btn_register.gif" border="0" align="absmiddle"></a></li></td>
				</tr>
				<tr>
					<td class="tit2" colspan="3" nowrap><li>���̵�/��й�ȣ�� �����̽��ϱ�?&nbsp;&nbsp;<a href="javascript:;" onclick="win_password_forget('./password_forget.php');"><img src="<?=$member_skin_path?>/img/btn_password_forget.gif" width="92" height="18" border="0" align="absmiddle"></li></td>
                </tr>
			</table>
		</td>
		<td width="30"></td>
	</tr>
	<tr><td height="10"></td></tr>
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

<script language='Javascript'>
document.flogin.mb_id.focus();

function flogin_submit(f)
{
    f.action = "./login_check.php";
    f.submit();
}
</script>

