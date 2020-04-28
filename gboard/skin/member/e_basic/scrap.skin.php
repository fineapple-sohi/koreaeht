<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "스크랩";

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
	<tr> 
		<td height=380 valign="top">
			<table width=100% cellpadding=0 cellspacing=1 border=0 bgcolor="#E9E9E9">
				<tr height="36" bgcolor="#F6F6F6" align="center"> 
					<td width="10%" height="24"><b>번호</b></td>
					<td width="12%"><b>게시판</b></td>
					<td width="38%"><b>제목</b></td>
					<td width="25%"><b>보관일시</b></td>
					<td width="10%"><b>삭제</b></td>
				</tr>
				<? for ($i=0; $i<count($list); $i++) { ?>
				<tr style='background:#FFFFFF;' height="32" align="center"> 
					<td><?=$list[$i][num]?></td>
					<td><a href="javascript:;" onclick="opener.document.location.href='<?=$list[$i][opener_href]?>';"><?=$list[$i][bo_subject]?></a></td>
					<td align="left" style='word-break:break-all;'>&nbsp;<a href="javascript:;" onclick="opener.document.location.href='<?=$list[$i][opener_href_wr_id]?>';"><?=$list[$i][subject]?></a></td>
					<td><?=$list[$i][ms_datetime]?></td>
					<td><a href="javascript:del('<?=$list[$i][del_href]?>');"><img src="<?=$member_skin_path?>/img/btn_delete.gif" width="38" height="18" border="0" align="absmiddle"></a></td>
				</tr>
				<? } ?>
				<? if ($i == 0) echo "<tr style='background:#FFFFFF;'><td colspan=5 align=center height=100>자료가 없습니다.</td></tr>"; ?>
			</table>
		</td>
	</tr>
	<tr><td height="10"></td></tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr> 
		<td align="center"><?=get_paging($config[cf_write_pages], $page, $total_page, "?$qstr&page=");?></td>
	</tr>
	<? if ($total_page) {?>
	<tr><td height="10"></td></tr>
	<? } ?>
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
	<tr><td height="10"></td></tr>
</table>
<!-- Line bottom end -->
