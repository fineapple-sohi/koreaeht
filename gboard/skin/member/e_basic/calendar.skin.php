<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "달력";

?>

<!-- Line top start -->
<table width="220" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:10px;">
	<tr>
		<td><img src="<?=$member_skin_path?>/img/out_bco01.gif" width="7" height="6"></td>
		<td background="<?=$member_skin_path?>/img/out_bbg01.gif"></td>
		<td><img src="<?=$member_skin_path?>/img/out_bco02.gif" width="6" height="6"></td>
	</tr>
	<tr>
		<td background="<?=$member_skin_path?>/img/out_bbg02.gif"></td>
		<td>
<!-- Line top end -->
<form name=fcalendar autocomplete=off>
<input type=hidden name=fld value='<?=$fld?>'>
<input type=hidden name=cur_date value='<?=$cur_date?>'>
<input type=hidden id=delimiter name=delimiter value='<?=$delimiter?>'>
<!-- Title start -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr height="28">
		<td align="center" height=30>
			<a href='<?=$yyyy_before_href?>'><img src="<?=$member_skin_path?>/img/icon_prev02.gif" width="8" height="9" border="0" align="absmiddle"></a>
			<a href='<?=$mm_before_href?>'><img src="<?=$member_skin_path?>/img/icon_prev01.gif" width="8" height="9" border="0" align="absmiddle"></a>&nbsp;<?=$yyyy_select?>&nbsp;<?=$mm_select?>
			<a href='<?=$mm_after_href?>'><img src="<?=$member_skin_path?>/img/icon_next01.gif" width="8" height="9" border="0" align="absmiddle"></a>
			<a href='<?=$yyyy_after_href?>'><img src="<?=$member_skin_path?>/img/icon_next02.gif" width="8" height="9" border="0" align="absmiddle"></a>
		</td>
	</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0" > 
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="5"></td></tr>
</table>
<!-- Title end -->
<table width="207" cellpadding="0" cellspacing="0" border="0" align="center" >
	<tr>
		<td valign="top">
			<table width=100% cellpadding=0 cellspacing=1 border=0 bgcolor="#E9E9E9">
				<tr height="24" bgcolor="#F6F6F6" align="center">
					<td width=14% style="color:<?=$sunday_color?>"><?=$yoil[0];?></td>
					<td width=14% style="color:<?=$weekday_color?>"><?=$yoil[1];?></td>
					<td width=14% style="color:<?=$weekday_color?>"><?=$yoil[2];?></td>
					<td width=14% style="color:<?=$weekday_color?>"><?=$yoil[3];?></td>
					<td width=14% style="color:<?=$weekday_color?>"><?=$yoil[4];?></td>
					<td width=14% style="color:<?=$weekday_color?>"><?=$yoil[5];?></td>
					<td width=14% style="color:<?=$saturday_color?>"><?=$yoil[6];?></td>
				</tr>
			<?
			$cnt = $day = 0;
			for ($i=0; $i<6; $i++)
			{
				echo "<tr>";
				for ($k=0; $k<7; $k++)
				{
					$cnt++;
					echo "<td style='background:#FFFFFF;' align=center>";
					if ($cnt > $dt[wday])
					{
						$day++;
						if ($day <= $last_day)
						{
							$mm2 = substr("0".$mm,-2);
							$day2 =  substr("0".$day,-2);
							echo "<table width=100% height=100% cellpadding=0 cellspacing=0><tr><td style='padding:3px;font-size:8pt;' id='id$i$k' onclick=\"date_send('$yyyy', '$mm2', '$day2', '$k', '$yoil[$k]');\" align=center style='cursor:pointer;'>$day</td></tr></table>";
							if ($k==0)
								echo "<script language='JavaScript'>document.getElementById('id$i$k').style.color='$sunday_color';</script>";
							else if ($k==6)
								echo "<script language='JavaScript'>document.getElementById('id$i$k').style.color='$saturday_color';</script>";
							else
								echo "<script language='JavaScript'>document.getElementById('id$i$k').style.color='$weekday_color';</script>";
							$tmp_date = $yyyy.substr("0".$mm,-2).substr("0".$day,-2);
							$tmp = $mm2."-".$day2;
							if ($nal[$tmp])
							{
								$title = trim($nal[$tmp][1]);
								//echo $title;
								echo "<script language='JavaScript'>document.getElementById('id$i$k').title='{$title}';</script>";
								if (trim($nal[$tmp][2]) == "*") 
									echo "<script language='JavaScript'>document.getElementById('id$i$k').style.color='$sunday_color';</script>";
								}
								// 오늘이라면
								if ($today[year] == $yyyy && $today[mon] == $mm && $today[mday] == $day)
								{
									echo "<script language='JavaScript'>document.getElementById('id$i$k').style.backgroundColor='$today_bgcolor';</script>";
									echo "<script language='JavaScript'>document.getElementById('id$i$k').title+='[오늘]';</script>";
								}
								// 선택일(넘어온 값) 이라면
								else if ($tmp_date == $cur_date)
								{
									echo "<script language='JavaScript'>document.getElementById('id$i$k').style.backgroundColor='$select_bgcolor';</script>";
									echo "<script language='JavaScript'>document.getElementById('id$i$k').title+='[선택일]';</script>";
								}
							} else
								echo "&nbsp;";
					} else
						echo "&nbsp;";
						echo "</td>";
				}
					echo "</tr>\n";
					if ($day >= $last_day)
						break;
			}
			?>
			</table>
		</td>
	</tr>
	<tr><td height="5"></td></tr>
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