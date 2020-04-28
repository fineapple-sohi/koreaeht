<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "우편번호 검색";

?>
<style type="text/css"> 
#scrollbox {
	width: 510;
	height: 175;
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
	<tr><td height="15"></td></tr>
</table>
<!-- Title end -->

<table width="558" cellpadding="0" cellspacing="0" border="0" align="center">
<form name="fzip" method="get" autocomplete="off">
<input type=hidden name=frm_name  value='<?=$frm_name?>'>
<input type=hidden name=frm_zip1  value='<?=$frm_zip1?>'>
<input type=hidden name=frm_zip2  value='<?=$frm_zip2?>'>
<input type=hidden name=frm_addr1 value='<?=$frm_addr1?>'>
<input type=hidden name=frm_addr2 value='<?=$frm_addr2?>'>
	<tr>
		<td><img src="<?=$member_skin_path?>/img/zip_img_01.gif" width="292" height="44"></td>
	</tr>
	<tr>
		<td style="padding:10px 0px 10px 16px; border:5px solid #F3F3F3;">
			<img src="<?=$member_skin_path?>/img/zip_img_02.gif" width="44" height="22" align=absmiddle>
			<input type=text name=addr1 value='<?=$addr1?>' required minlength=2 itemname='동(읍/면/리)' size=35> <input type=image src='<?=$member_skin_path?>/img/btn_search.gif' width="38" height="18" border=0 align=absmiddle></td>
	</tr>
	<tr><td height="10"></td></tr>
	<tr>
		<td height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
	</tr>
	<tr><td height="10"></td></tr>
	<tr>
		<td><img src="<?=$member_skin_path?>/img/zip_img_03.gif" width="292" height="44"></td>
	</tr>
</table>
	
<!-- 검색결과 여기서부터 -->

<script language='javascript'>
document.fzip.addr1.focus();
</script>

<? if ($search_count > 0) { ?>

<table width="440" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr> 
		<td style="border:5px solid #F3F3F3;">
		<div id="scrollbox">
			<table width="100%" cellpadding="0" cellspacing="1" border="0" bgcolor="#E9E9E9">
				<tr height=26 align=center>
					<td style='background:#FFFFFF;' width="80">우편번호</td>
					<td style='background:#FFFFFF;'>주소</td>
				</tr>
				<?
				for ($i=0; $i<count($list); $i++) 
				{
				echo "<tr height=29 align=center><td style='background:#FFFFFF;'>{$list[$i][zip1]}-{$list[$i][zip2]}</td>";
				echo "<td style='background:#FFFFFF; text-align:left; padding-left:10px;'><a href='javascript:;' onclick=\"find_zip('{$list[$i][zip1]}', '{$list[$i][zip2]}', '{$list[$i][addr]} {$list[$i][bunji]}');\">{$list[$i][addr]} {$list[$i][bunji]}</a></td></tr>\n";
				}
				?>
	        </table>
		</div>
		</td>
	</tr>
</table>

<script language="javascript">
function find_zip(zip1, zip2, addr1)
{
    var of = opener.document.<?=$frm_name?>;

    of.<?=$frm_zip1?>.value  = zip1;
    of.<?=$frm_zip2?>.value  = zip2;

    of.<?=$frm_addr1?>.value = addr1;

    of.<?=$frm_addr2?>.focus();
    window.close();
    return false;
}
</script>
<? } else { ?>
<table width="440" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
	<td height=185></td>
<tr>
<? } ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr><td height="10"></td></tr>
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

</form>
