<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "스크랩하기";

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
<form name=f_scrap_popin method=post action="./scrap_popin_update.php">
<input type="hidden" name="bo_table" value="<?=$bo_table?>">
<input type="hidden" name="wr_id"    value="<?=$wr_id?>">
	<tr> 
		<td style="padding:0px 50px 10px 50px;">
			<table width="100%" height="40" border="0" cellspacing="2" cellpadding="0">
				<tr>
					<td><img src="<?=$member_skin_path?>/img/scrap_title01.gif" width="77" height="22"></td>
					<td style='word-break:break-all;'><?=get_text(cut_str($write[wr_subject], 255))?></td>
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
					<td valign="top"><img src="<?=$member_skin_path?>/img/scrap_title02.gif" width="77" height="22"></td>
					<td width=360><textarea name="wr_content" rows="23" style="width:100%; BORDER: #D3D3D3 1px solid; BACKGROUND-COLOR: #ffffff; WORD-BREAK: break-all;"></textarea></td>
				</tr>
			</table>
		</td>
    </tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<INPUT type=image width="38" height="18" src="<?=$member_skin_path?>/img/btn1_ok.gif" border=0>
			<a href="javascript:window.close();"><img src="<?=$member_skin_path?>/img/btn_cancel.gif" width="38" height="18" border="0"></a>
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