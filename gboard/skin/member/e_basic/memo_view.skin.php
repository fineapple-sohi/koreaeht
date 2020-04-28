<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "받은 쪽지 보기";

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
	<tr><td height="13"></td></tr>
</table>
<!-- Title end -->

<table width="557" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr> 
		<td style="padding:10px 10px 15px 10px; border:1 solid #E9E9E9;" height="355" valign="top">
			<table width="100%" cellpadding=0 cellspacing=0>
				<tr> 
					<td height="29" align="left">
						<?
							//$nick = cut_str($mb[mb_nick], $config[cf_cut_name]);
							$nick = get_sideview($mb[mb_id], $mb[mb_nick], $mb[mb_email], $mb[mb_homepage]);
							if ($kind == "recv")
								echo "<img src='$member_skin_path/img/icon_next02.gif' width='8' height='9'>&nbsp;&nbsp;<b>$nick</b> 님께서 {$memo[me_send_datetime]}에 보내온 쪽지의 내용입니다.";
							if ($kind == "send") 
								echo "<img src='$member_skin_path/img/icon_next02.gif' width='8' height='9'>&nbsp;&nbsp;<b>$nick</b> 님께 {$memo[me_send_datetime]}에 보낸 쪽지의 내용입니다."; 
						?>
					</td>
					<td align="righ"t valign="middle">
						<?
							echo "<a href=\"$prev_link\"><img src='$member_skin_path/img/btn_prev.gif' border='0'></a>&nbsp;&nbsp;";
							echo "<a href=\"$next_link\"><img src='$member_skin_path/img/btn_next.gif' border='0'></a>";
						?>
					</td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
				<tr>
					<td colspan="2" height="1" background="<?=$member_skin_path?>/img/line_dot.gif"></td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
				<tr> 
					<td colspan="2" style="padding-left:10px;" align="left" class=lh><?=conv_content($memo[me_memo], 0)?></td>
			    </tr>
			</table>
		</td>
	</tr>
	<tr><td height="10"></td></tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<? if ($kind == "recv") echo "<a href='./memo_form.php?me_recv_mb_id=$mb[mb_id]&me_id=$memo[me_id]'><img src='$member_skin_path/img/btn_reply.gif' border='0'></a>&nbsp;&nbsp;";?><a href="./memo.php?kind=<?=$kind?>"><img src="<?=$member_skin_path?>/img/btn_list_view.gif" width="58" height="18" border="0"></a>&nbsp;&nbsp;<a href="javascript:window.close();"><img src="<?=$member_skin_path?>/img/btn_close.gif" width="47" height="18" border="0"></a>
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

