<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$g4[title] = "회원 비밀번호 확인";

?>

<style type="text/css">
<!--
.tit1 { padding-right:5px; font:bold 8pt 돋움; width:95; text-align:right; letter-spacing:-1; }
.tit2 { padding:5px; font: 8pt 돋움; }
-->
</style>

<!-- Line top start -->

<table width="678" cellpadding="0" cellspacing="0" border="0">
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
			<img src="<?=$member_skin_path?>/img/icon_dot01.gif" width="3" height="3" align="absmiddle" style="margin:0px 5px 2px 5px"><a href="<?=$g4['path']?>/">Home</a> > <b><?=$g4[title]?></b>
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
<form name=fmemberconfirm method=post action="javascript:fmemberconfirm_submit(document.fmemberconfirm);">
<input type=hidden name=mb_id value='<?=$member[mb_id]?>'>
<input type=hidden name=w     value='u'>
	<tr>
		<td align="right"><img src="<?=$member_skin_path?>/img/login_title01.gif" width="330" height="190"></td>
		<td width="300" style="padding:10px; border:5px solid #F3F3F3;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td colspan="3" class="tit2"><img src="<?=$member_skin_path?>/img/confirm_title01.gif"></td>
				</tr>
				<tr>
					<td class="tit1">아이디</td>
					<td class="tit2"><b><?=$member[mb_id]?></b></td>
					<td width="60" rowspan="2" align="right"><input type="image" width="45" height="45" src="<?=$member_skin_path?>/img/btn_ok.gif" id="btn_submit" border="0" align="absmiddle"></td>
				</tr>
				<tr>
					<td class="tit1">비밀번호</td>					
					<td class="tit2"><input type="password" class="ed" maxLength="20" size="20" name="mb_password" itemname="비밀번호" required></td>
				</tr>
				<tr>
					<td colspan="3" height="5"></td>
				</tr>
				<tr>
					<td colspan="3" height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
				</tr>
				<tr>
					<td colspan="3" height="15"></td>
				</tr>
				<tr>
					<td colspan="3" class="tit2" align="center"><img src="<?=$member_skin_path?>/img/confirm_title02.gif"></td>
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
document.onload = document.fmemberconfirm.mb_password.focus();

function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    f.action = "<?=$url?>";
    f.submit();
}
</script>
