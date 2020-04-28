<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "내 쪽지함";

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
	</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0" > 
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="15"></td></tr>
</table>
<!-- Title end -->

<table width="557" cellpadding="0" cellspacing="0" border="0" align="center">
<form name=fmemoform method=post action="javascript:fmemoform_submit(document.fmemoform);">
	<tr>
		<td>
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="70" valign="bottom">
						<a href="./memo.php?kind=recv"><img src="<?=$member_skin_path?>/img/btn_recv_paper_off.gif" width="70" height="24" border="0"></a><br />
					</td>
					<td width="70" valign="bottom">
						<a href="./memo.php?kind=send"><img src="<?=$member_skin_path?>/img/btn_send_paper_off.gif" width="70" height="24" border="0"></a><br />
					</td>
					<td width="70" valign="bottom">
						<a href="./memo_form.php"><img src="<?=$member_skin_path?>/img/btn_write_paper_on.gif" width="70" height="24" border="0"></a><br />
					</td>
					<td width="100%" align="right"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="20"></td></tr>
	<tr> 
		<td valign="top">
			<table width="100%" cellpadding=0 cellspacing=0>
				<tr height="29" align="center"> 
				    <td width="30%" height="29" rowspan="2" align="center"><b>받는 회원아이디</b></td>
					<td width="70%"><input type=text class=ed name="me_recv_mb_id" required itemname="받는 회원아이디" value="<?=$me_recv_mb_id?>" style="width:100%;"></td>
				</tr>
				<tr height="18" align="left"> 
                    <td>※ 여러 회원에게 보낼때는 컴마(,)로 구분하세요.</td>
                </tr>
				<tr><td colspan="2" height="15"></td></tr>
				<tr>
					<td colspan="2" height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
				</tr>
				<tr><td height="15"></td></tr>
				<tr> 
                    <td align="center"><b>내용</b></td>
					<td align="center">
						<textarea name=me_memo rows=15 style="width:100%; BORDER: #D3D3D3 1px solid; BACKGROUND-COLOR: #ffffff; WORD-BREAK: break-all;" required itemname='내용'><?=$content?></textarea>
				</td>
        </tr>
			</table>
		</td>
	</tr>
	<tr><td height="10"></td></tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<input id=btn_submit type=image src="<?=$member_skin_path?>/img/btn_paper_send.gif" border=0>&nbsp;&nbsp;<a href="javascript:window.close();"><img src="<?=$member_skin_path?>/img/btn_close.gif" width="47" height="18" border="0"></a>
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
with (document.fmemoform) {
    if (me_recv_mb_id.value == "")
        me_recv_mb_id.focus();
    else
        me_memo.focus();
}

function fmemoform_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    f.action = "./memo_form_update.php";
    f.submit();
}
</script>