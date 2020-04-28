<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "자기소개";

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
<table width="557" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> 
		<td style="padding:0px 10px 10px 10px;">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="174" height="149" align="left" background="<?=$member_skin_path?>/img/self_intro_bg.gif">
		                <table width="100%" height="130" border="0" cellpadding="0" cellspacing="0">
							<tr> 
								<td align="center" valign="middle"><?=$mb_nick?></td>
			                </tr>
					    </table>
					</td>
					<td width="15" height="149"></td>
					<td width="351" height="149" align="right" background="<?=$member_skin_path?>/img/self_intro_bg_1.gif">
		                <table width="100%" border="0" cellspacing="0" cellpadding="0">
					        <tr> 
								<td width="30" height="25" align="center"><img src="<?=$member_skin_path?>/img/icon_next02.gif" width="8" height="9"></td>
			                    <td width="270">회원권한 : <?=$mb[mb_level]?></td>
						    </tr>
			                <tr> 
						        <td colspan="2" height="1" bgcolor="#FFFFFF"></td>
			                </tr>
						    <tr> 
			                    <td width="30" height="25" align="center"><img src="<?=$member_skin_path?>/img/icon_next02.gif" width="8" height="9"></td>
			                    <td width="270">포인트 : <?=number_format($mb[mb_point])?> 점</td>
						    </tr>
			                <tr>
						        <td colspan="2" height="1" bgcolor="#FFFFFF"></td>
							</tr>
							<? if ($mb_homepage) { ?>
							<tr> 
								<td width="30" height="25" align="center"><img src="<?=$member_skin_path?>/img/icon_next02.gif" width="8" height="9"></td>
								<td width="270">홈페이지 : <a href="<?=$mb_homepage?>" target="<?=$config[cf_link_target]?>"><?=$mb_homepage?></a></td>
							</tr>
							<tr> 
						        <td colspan="2" height="1" bgcolor="#FFFFFF"></td>
							</tr>
							<? } ?>
							<tr> 
								<td width="30" height="25" align="center"><img src="<?=$member_skin_path?>/img/icon_next02.gif" width="8" height="9"></td>
			                    <td width="270">회원가입일 : <?=($member[mb_level] >= $mb[mb_level]) ?  substr($mb[mb_datetime],0,10) ." (".$mb_reg_after." 일)" : "알 수 없음"; ?></td>
							</tr>
							<tr>
						        <td colspan="2" height="1" bgcolor="#FFFFFF"></td>
							</tr>
							<tr>
								<td width="30" height="25" align="center"><img src="<?=$member_skin_path?>/img/icon_next02.gif" width="8" height="9"></td>
								<td width="270">최종접속일 : <?=($member[mb_level] >= $mb[mb_level]) ? $mb[mb_today_login] : "알 수 없음";?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td height="15"></td>
				</tr>
				<tr> 
					<td height="15" bgcolor="#FFFFFF"><img src="<?=$member_skin_path?>/img/line_top.gif" width="540" height="15"></td>
				</tr>
				<tr align="center" valign="top">
					<td background="<?=$member_skin_path?>/img/line_mid.gif" bgcolor="#FFFFFF">
						<table width="500" border="0" cellspacing="0" cellpadding="0">
							<tr> 
								<td height="30" valign="top"><img src="<?=$member_skin_path?>/img/self_intro_icon_01.gif" width="81" height="24"></td>
		                    </tr>
							<tr>
								<td height="170" valign="top"><?=$mb_profile?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr> 
					<td height="15" bgcolor="#FFFFFF"><img src="<?=$member_skin_path?>/img/line_down.gif" width="540" height="15"></td>
		        </tr>
			</table>
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
