<?
if (!defined("_GNUBOARD_")) exit;
?>
<link rel="stylesheet" href="<?=$board_skin_path?>/style.css" type="text/css">

<table width="<?=$width?>" border="0" align="center" cellpadding="0" cellspacing="0"> 
  <tr> 
    <td height="27"> 
      <table width="100%" cellspacing="0" cellpadding="0"> 
        <tr> 
          <? if ($is_category) { ?> 
          <form name="fcategory" method="get"> 
            <td width="50%"> 
              <select name=sca onchange="location='<?=$category_location?>'+this.value;"> 
                <option value=''>전체</option> 
                <?=$category_option?> 
              </select> 
            </td> 
          </form> 
          <? } ?> 
          <td height=25 align="right"><font class=num3>total: <?=number_format($total_count)?></font>&nbsp; 
            <? if ($admin_href) { ?> 
            <a href="<?=$admin_href?>"><img src="<?=$board_skin_path?>/img/admin_button.gif" title="관리자" width="63" height="22" border="0" align="absmiddle"></a> 
            <? } ?> 
          </td> 
        </tr> 
      </table> 
    </td> 
  </tr> 
  <tr> 
    <td height="1" class="line_bg"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr>
  <tr> 
    <td height="42"> 
      <table width="100%"  border="0" cellpadding="0" cellspacing="0" background="<?=$board_skin_path?>/img/list_title_bg.gif" id="title"> 
        <form name="fboardlist" method="post">
        <input type="hidden" name="bo_table" value="<?=$bo_table?>">
        <input type="hidden" name="sfl"  value="<?=$sfl?>">
        <input type="hidden" name="stx"  value="<?=$stx?>">
        <input type="hidden" name="spt"  value="<?=$spt?>">
        <input type="hidden" name="page" value="<?=$page?>">
        <input type="hidden" name="sw"   value="">
		<tr align="center"> 
          <td width="4" height="42"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
          <td width="40" class="title">번호</td>
		  <? if ($is_category) { ?> 
          <td width="80" class="title">분류</td>
		  <? } ?>
		  <? if ($is_checkbox) { ?>
          <td width="30"><input onclick="if (this.checked) all_checked(true); else all_checked(false);" type=checkbox></td>
		  <? } ?>
          <td class="title">제목</td> 
          <td width="100" class="title">이름</td> 
          <td width="45" class="title">날짜</td> 
          <td width="35" class="title">조회</td>
		  <? if ($is_good) { ?> 
          <td width="40" class="title">추천</td>
		  <? } ?>
		  <? if ($is_nogood) { ?> 
          <td width="40" class="title">비추천</td>
		  <? } ?> 
          <td width="4"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
        </tr> 
      </table> 
    </td> 
  </tr> 
  <tr> 
    <td height="1"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr>
  <tr> 
    <td> 
      <table width="100%"  border="0" cellpadding="0" cellspacing="0" background="<?=$board_skin_path?>/img/list_nt_bg.gif" id="nt">
	   <? for ($i=0; $i<5; $i++) { // 공지 (5개 까지만 표시한다.) 
         if ($list[$i][is_notice]) {
       ?>
        <tr> 
          <td width="4" height="31"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
          <td width="40" align="center"><img src="<?=$board_skin_path?>/img/ico_nt.gif" width="21" height="21"></td>
		  <? if ($is_checkbox) { ?>
          <td width="30" align="center"><? echo "&nbsp;"; //공지는 리스트에서 삭제 하지않도록..;; ?></td>
		  <? } ?>
          <td>&nbsp;<a href="<?=$list[$i][href]?>"><font class="list_nt">:: <?=$list[$i][subject]?></font></a></td> 
          <td width="45" align="center"><font class="num"><strong><?=$list[$i][datetime2]?></strong></font></td> 
          <td width="35" align="center"><font class="num"><?=$list[$i][wr_hit]?></font></td> 
          <td width="4"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
        </tr>
		<? } } // end for,if (공지) ?>
      </table> 
    </td> 
  </tr>
  <tr> 
    <td height="1" bgcolor="#F6F3EC"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr>
  <? for ($i=0; $i<count($list); $i++) { //리스트 시작
     if (!$list[$i][is_notice]) { 
  ?> 
  <tr> 
    <td height="32"> 
      <table width="100%"  border="0" cellpadding="0" cellspacing="0" id="row">
        <tr align="center"> 
          <td width="4" height="32" align="center"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
          <td width="40" align="center">
		  <? if ($wr_id == $list[$i][wr_id]) { //내용 밑에 목록보기에서 현재위치?>
		  <font color="#FF9900"><strong><?=$list[$i][num]?></strong></font>
		  <? } else { ?>
		  <font class="no"><?=$list[$i][num]?></font>
		  <? } ?>
		  </td>
		  <? if ($is_category) { ?> 
          <td width="80" align="center"><strong><a href="<?=$list[$i][ca_name_href]?>"><?=$list[$i][ca_name]?></a></strong></td>
		  <? } ?>
		  <? if ($is_checkbox) { ?>
          <td width="30" align="center">
          <input type=checkbox name=chk_wr_id[] value="<?=$list[$i][wr_id]?>"></td>
		  <? } ?> 
          <td align="left">&nbsp;
		   <? 
             echo $list[$i][reply];
             echo $list[$i][icon_reply] . "&nbsp;" ;
             echo "<a href='{$list[$i][href]}'>";
             echo "{$list[$i][subject]}";
             echo "</a>";
			 
             if ($list[$i][comment_cnt]) 
                 echo " <a href=\"{$list[$i][comment_href]}\"><span class=w_comment_cnt>{$list[$i][comment_cnt]}</a>";

             echo " " . $list[$i][icon_new];
             echo " " . $list[$i][icon_file];
             echo " " . $list[$i][icon_link];
             echo " " . $list[$i][icon_hot];
             echo " " . $list[$i][icon_secret];
             ?>
		  </td> 
          <td width="100" align="center"><?=$list[$i][name]?></td> 
          <td width="45" align="center"><font class="num"><?=$list[$i][datetime2]?></font></td> 
          <td width="35" align="center"><font class="num"><?=$list[$i][wr_hit]?></font</td>
		  <? if ($is_good) { ?> 
          <td width="40" align="center"><?=$list[$i][wr_good]?></td>
		  <? } ?>
		  <? if ($is_nogood) { ?> 
          <td width="40" align="center"><?=$list[$i][wr_nogood]?></td>
		  <? } ?> 
          <td width="4" align="center"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
        </tr>
      </table> 
    </td> 
  </tr> 
  <tr> 
    <td height="1" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr>
  <? } } //end for,if 리스트 끝 ?>
  </form>
  <tr> 
    <td height="1"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr>
  <tr>
    <td height="42" align="center" background="<?=$board_skin_path?>/img/list_page_bg.gif">
	<? if ($prev_part_href) { echo "<a href='$prev_part_href'><img src='$board_skin_path/img/btn_search_prev.gif' width=50 height=20 border=0 align=absmiddle title='이전검색'></a>"; } ?>
                <?
                // 기본으로 넘어오는 페이지를 아래와 같이 변환하여 이미지로도 출력할 수 있습니다.
                //echo $write_pages;
                $write_pages = str_replace("처음", "<img src='$board_skin_path/img/begin.gif' border='0' align='absmiddle' title='처음'>", $write_pages);
                $write_pages = str_replace("이전", "<img src='$board_skin_path/img/prev.gif' border='0' align='absmiddle' title='이전'>", $write_pages);
                $write_pages = str_replace("다음", "<img src='$board_skin_path/img/next.gif' border='0' align='absmiddle' title='다음'>", $write_pages);
                $write_pages = str_replace("맨끝", "<img src='$board_skin_path/img/end.gif' border='0' align='absmiddle' title='맨끝'>", $write_pages);
                $write_pages = preg_replace("/<span>([0-9]*)<\/span>/", "<font style=\"font-family:돋움; font-size:9pt; color:#797979\">$1</font>", $write_pages);
                $write_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<font style=\"font-family:돋움; font-size:9pt; color:orange;\">$1</font>", $write_pages);
                ?>
                <strong><?=$write_pages?></strong>
                <? if ($next_part_href) { echo "<a href='$next_part_href'><img src='$board_skin_path/img/btn_search_next.gif' width=50 height=20 border=0 align=absmiddle title='다음검색'></a>"; } ?>
	</td>
  </tr>
  <tr>
    <td height="1"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0" background="<?=$board_skin_path?>/img/list_btn_bg.gif">
        <tr>
          <td width="220" height="42">&nbsp;
		  <? if ($list_href) { ?><a href="<?=$list_href?>"><img src="<?=$board_skin_path?>/img/btn_list.gif" border="0" align="absmiddle"></a><? } ?>
          <? if ($write_href) { ?><a href="<?=$write_href?>"><img src="<?=$board_skin_path?>/img/btn_write.gif" border="0" align="absmiddle"></a><? } ?>
          <? if ($is_checkbox) { ?>
            <a href="javascript:select_delete();"><img src="<?=$board_skin_path?>/img/btn_select_delete.gif" border="0" align="absmiddle"></a>
            <a href="javascript:select_copy('copy');"><img src="<?=$board_skin_path?>/img/btn_select_copy.gif" border="0" align="absmiddle"></a>
            <a href="javascript:select_copy('move');"><img src="<?=$board_skin_path?>/img/btn_select_move.gif" border="0" align="absmiddle"></a>
         <? } ?>
		  </td>
		  <form name=fsearch method=get>
          <input type=hidden name=bo_table value="<?=$bo_table?>">
          <input type=hidden name=sca      value="<?=$sca?>">
          <td align="right">
		  <select name=sfl>
            <option value='wr_subject'>제목</option>
            <option value='wr_content'>내용</option>
            <option value='mb_id'>회원아이디</option>
            <option value='wr_name'>이름</option>
        </select>
        <input maxLength=15 size=10 name=stx itemname="검색어" required value="<?=$stx?>">
        <select name=sop>
            <option value=and>And</option>
            <option value=or>Or</option>
        </select>
		  </td>
          <td width="34" align="center">&nbsp;<input type=image src="<?=$board_skin_path?>/img/search_btn.gif" align="middle" width="22" height="23" border=0>&nbsp;</td>
        </form>
		</tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="1" bgcolor="#F6F3EC"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr> 
</table> 

<script language="JavaScript">
if ("<?=$sca?>") document.fcategory.sca.value = "<?=$sca?>";
if ("<?=$stx?>") {
    document.fsearch.sfl.value = "<?=$sfl?>";
    document.fsearch.sop.value = "<?=$sop?>";
}
</script>

<? if ($is_checkbox) { ?>
<script language="JavaScript">
function all_checked(sw)
{
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function check_confirm(str)
{
    var f = document.fboardlist;
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(str + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }
    return true;
}

// 선택한 게시물 삭제
function select_delete()
{
    var f = document.fboardlist;

    str = "삭제";
    if (!check_confirm(str))
        return;

    if (!confirm("선택한 게시물을 정말 "+str+" 하시겠습니까?\n\n한번 "+str+"한 자료는 복구할 수 없습니다"))
        return;

    f.action = "./delete_all.php";
    f.submit();
}

// 선택한 게시물 복사 및 이동
function select_copy(sw)
{
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";
                       
    if (!check_confirm(str))
        return;

    var sub_win = window.open("", "move", "left=50, top=50, width=396, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<? } ?>
