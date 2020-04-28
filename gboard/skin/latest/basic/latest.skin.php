<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>

<table width=100% cellpadding=0 cellspacing=0>
  <colgroup width=14>
  <colgroup>
  <colgroup width=37>
  <colgroup width=14>
  <!-- 최신글 목록 -->
  <? for ($i=0; $i<count($list); $i++) { ?>
  <tr>
    <td colspan=4 align=left valign><img src="<?=$latest_skin_path?>/img/blank.gif" width="1" height="14">
      <?

						//날짜표시
						$date1 = substr($list[$i][datetime],0,10); //날짜표시형식변경
						$date = explode("-", $date1); 
						$year = $date[0];
						$month = $date[1]; 
						$day = $date[2]; 
						$latest_date = $year."-".$month."-".$day."";

						echo $list[$i]['icon_reply'] . " ";
						//echo "<a href='{$list[$i]['href']}'>"; 원본 링크
						echo "<a href='javascript:void(0);' onclick=\"document.getElementById('popup').style.display = 'block'; divif.location.href='$g4[bbs_path]/board.php?bo_table=$board[bo_table]&wr_id={$list[$i][wr_id]}'\">"; 
						// 레이어 팝업시
												
						if ($list[$i]['is_notice'])
							echo "<font style='font-family:돋움; font-size:9pt; color:#FFFFFF;'>ㆍ<strong>{$list[$i]['subject']}</strong></font>";
						else
							echo "<font style='font-family:돋움; font-size:9pt; color:#FFFFFF;'>ㆍ{$list[$i]['subject']}</font>";
						echo "</a>";

						if ($list[$i]['comment_cnt']) 
							echo " <a href=\"{$list[$i]['comment_href']}\"><span style='font-family:돋움; font-size:8pt; color:#9A9A9A;'>{$list[$i]['comment_cnt']}</span></a>";

						// if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
						// if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

						echo " " . $list[$i]['icon_new'];
						?></td>
  </tr>
  <? } ?>
  <? if (count($list) == 0) { ?>
  <tr>
    <td colspan=4 align=center height=95><font color=#FFFFFF>게시물이 없습니다.</a></td>
  </tr>
  <? } ?>
</table>
<!--// div 팝업 //-->
<style>
#popup { 
   display: none;
   border: 1px solid gray;
   background-color: #FFFFFF;
   font: 12px verdana;
   filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color=#999999, Positive=true);
}
.toolbar { 
   font: 12px verdana;
   border-bottom: 0px solid white;
   background-color: #000000;
   padding: 1px;
}
</style>
<script>
clicked = false;
function startDrag(cx,cy) {
        clicked = true;
        pleft=parseInt(document.getElementById("popup").style.left);
   ptop=parseInt(document.getElementById("popup").style.top);
        dragxcoor=cx;        
   dragycoor=cy;        
}
                
function stopDrag() { 
        clicked = false;
}
        
function dragBox(evt) {
e = evt || event;
        if (clicked == true) {
      newx = pleft+e.clientX-dragxcoor;
           newy = ptop+e.clientY-dragycoor;
                document.getElementById("popup").style.left=newx;
                document.getElementById("popup").style.top=newy;
                return false;
   }
}
document.onmousemove        = dragBox;
</script>
<div id="popup" style="position:absolute; top:0px; width:100%; z-index:100; margin-left:5px; margin-top:20px">
  <div class="toolbar" style="z-index:99; display: table; cursor: move;" onmousedown="startDrag(event.clientX,event.clientY)" onmouseup="stopDrag()">
    <table width="700" border="0" cellpadding="0" cellspacing="0" align=center valign=top>
      <tr>
        <td width="500" style="table-layout:fixed;"><font style="font-family:arial;font-size:8pt;color:#FFFFFF;">&nbsp;&nbsp;&nbsp;- Latest News</font></td>
        <td></td>
        <td width=11><a href="javascript:void(0)" onclick="document.getElementById('popup').style.display='none'"><font style="font-family:arial;font-size:9pt;color:white;">×</font></a> </td>
      </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#FFFFFF">
      <tr>
        <td><?
		echo "<iframe name='divif' width='700' height='450' frameborder='0' scrolling='yes'></iframe>";
		// 아이프레임  src는 제목링크에서 타겟으로
		?>
        </td>
      </tr>
      <!-- tr>
        <td height="30" align="center"><a href="javascript:void(0)" onclick="document.getElementById('popup').style.display='none'"><font style="font-family:arial;font-size:9pt;color:#000000;"><strong>[창닫기]</strong></font></a></td>
      </tr-->
    </table>
  </div>
</div>
<!--// div 팝업 //-->
