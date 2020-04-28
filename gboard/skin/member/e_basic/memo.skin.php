<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "내 쪽지함";

?>
<style type="text/css"> 
#scrollbox {
	width: 557;
	height: 327;
	overflow: auto;
	color: black; font-size:9pt;} 
</style>
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
	<tr><td height="22"></td></tr>
</table>
<!-- Title end -->

<table width="557" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td>
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="70" valign="bottom">
						<a href="./memo.php?kind=recv"><img src="<?=$member_skin_path?>/img/btn_recv_paper_<?=$recv_img?>.gif" width="70" height="24" border="0"></a><br />
					</td>
					<td width="70" valign="bottom">
						<a href="./memo.php?kind=send"><img src="<?=$member_skin_path?>/img/btn_send_paper_<?=$send_img?>.gif" width="70" height="24" border="0"></a><br />
					</td>
					<td width="70" valign="bottom">
						<a href="./memo_form.php"><img src="<?=$member_skin_path?>/img/btn_write_paper_off.gif" width="70" height="24" border="0"></a><br />
					</td>
					<td width="100%" align="right">
						<img src="<?=$member_skin_path?>/img/icon_next02.gif" width="8" height="9">	전체 <?=$kind_title?> 쪽지 [ <B><?=$total_count?></B> ]통
					</td>
				</tr>
			</table>
		</td>
	<tr> 
		<td height=335 valign="top">
		<div id="scrollbox">
			<table width=100% cellpadding=0 cellspacing=1 border=0 bgcolor="#E9E9E9">
				<tr height="29" bgcolor="#F6F6F6" align="center"> 
					<td width="30%" height="24"><b><?= ($kind == "recv") ? "보낸사람" : "받는사람"; ?></b></td>
                    <td width="25%"><b>보낸시간</b></td>
                    <td width="25%"><b>읽은시간</b></td>
                    <td width="20%"><b>쪽지삭제</b></td>
				</tr>
				</tr>
				<? for ($i=0; $i<count($list); $i++) { ?>
				<tr style='background:#FFFFFF;' height=27 align=center> 
					<td width="30%"><?=$list[$i][name]?></td>
					<td width="25%"><a href="<?=$list[$i][view_href]?>"><?=$list[$i][send_datetime]?></font></td>
					<td width="25%"><a href="<?=$list[$i][view_href]?>"><?=$list[$i][read_datetime]?></font></td>
					<td width="20%"><a href="javascript:del('<?=$list[$i][del_href]?>');"><img src="<?=$member_skin_path?>/img/btn_delete.gif" width="38" height="18" border="0"></a></td>
				</tr>
				<? } ?>
				<? if ($i==0) { echo "<tr style='background:#FFFFFF;'><td height=100 align=center colspan=4>자료가 없습니다.</td></tr>"; } ?>
			</table>
			</div>
		</td>
	</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<a href="javascript:window.close();"><img src="<?=$member_skin_path?>/img/btn_close.gif" width="47" height="18" border="0"></a>
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
