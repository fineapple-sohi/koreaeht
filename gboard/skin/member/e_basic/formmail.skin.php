<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "메일 쓰기";

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
<form name="fformmail" method="post" action="javascript:fformmail_submit(document.fformmail);" enctype="multipart/form-data">
<input type="hidden" name="to"     value="<?=$email?>">
<input type="hidden" name="attach" value="2">
	<tr>
		<td style="padding:10px; border:5px solid #F3F3F3;">
			<? if ($is_member) { // 회원이면 ?>
			<table width="100%" border="0" cellspacing="4" cellpadding="0">
			<?} else {?>
			<table width="100%" border="0" cellspacing="2" cellpadding="0">
			<?} ?>
				<tr>
					<td width="80" height="27" align="center"><b>받는이</b></td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><b><?=$name?></b></td>
				</tr>
				<tr>
					<td colspan="3" height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
				</tr>
				<? if ($is_member) { // 회원이면 ?>
				<input type='hidden' name='fnick' value='<?=$member[mb_nick]?>'>
				<input type='hidden' name='fmail' value='<?=$member[mb_email]?>'>
				<? } else { ?>
				<tr> 
					<td width="80" height="27" align="center"><b>보내는이</b></td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><input type=text class=ed style='width:100%;' name='fnick' required minlength=2 itemname='이름'></td>
				</tr>
				<tr> 
                    <td width="80" height="27" align="center"><b>E-mail</b></td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><input type=text class=ed style='width:100%;' name='fmail' required email itemname='E-mail'></td>
                </tr>
				<? } ?>
				<tr> 
					<td width="80" height="27" align="center"><b>제목</b></td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><input type=text class=ed style='width:100%;' name='subject' required itemname='제목'></td>
                </tr>
				<tr> 
                    <td colspan="3" height="1" bgcolor="#E9E9E9"></td>
				</tr>
				<tr> 
                    <td width="80" height="28" align="center"><b>선택</b></td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><input type='radio' name='type' value='0' checked> TEXT <input type='radio' name='type' value='1' > HTML <input type='radio' name='type' value='2' > TEXT+HTML</td>
                </tr>
				<tr> 
                    <td colspan="3" height="1" bgcolor="#E9E9E9"></td>
                </tr>
				<tr> 
                    <td width="80" height="150" align="center"><b>내용</b></td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><textarea name="content" style="width:100%; BORDER: #D3D3D3 1px solid; BACKGROUND-COLOR: #ffffff; WORD-BREAK: break-all;" rows='9' required itemname='내용'></textarea></td>
                </tr>
				<tr> 
                    <td colspan="3" height="1" bgcolor="#E9E9E9"></td>
                </tr>
				<tr> 
                    <td width="80" height="27" align="center">첨부파일 #1</td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><input class=ed type=file style='width:100%;' name='file1'></td>
                </tr>
				<tr> 
                    <td colspan="3" height="1" bgcolor="#E9E9E9"></td>
                </tr>
                <tr> 
                    <td width="80" height="27" align="center">첨부파일 #2</td>
                    <td width="10" valign="bottom"><img src="<?=$member_skin_path?>/img/line_row.gif" width="1" height="8"></td>
                    <td width="450"><input type=file class=ed style='width:100%;' name='file2'></td>
                </tr>
				<tr> 
                    <td colspan="3" height="1" bgcolor="#E9E9E9"></td>
                </tr>
			</table>
		</td>
    </tr>
	<tr><td height="10"></td></tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<input id=btn_submit type="image" src="<?=$member_skin_path?>/img/btn_mail_send.gif" width="67" height="18">&nbsp;&nbsp;<a href="javascript:window.close();"><img src="<?=$member_skin_path?>/img/btn_close.gif" width="47" height="18" border="0"></a>
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
with (document.fformmail) {
    if (typeof fname != "undefined")
        fname.focus();
    else if (typeof subject != "undefined")
        subject.focus();
}

function fformmail_submit(f)
{
    if (f.file1.value || f.file2.value) {
        // 4.00.11
        if (!confirm("첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.\n\n메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오."))
            return;
    }

    document.getElementById('btn_submit').disabled = true;

    f.action = "./formmail_send.php";
    f.submit();
}
</script>
