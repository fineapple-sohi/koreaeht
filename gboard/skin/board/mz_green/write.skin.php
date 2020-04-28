<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>
<style type="text/css">
<!--
.w_title    { font-family:돋움; font-size:9pt; color:#9A9A9A; background-color: #F9F9F9; }
.w_title2    { font-family:돋움; font-size:9pt; color:#9A9A9A; }
.w_text     { BORDER: #D3D3D3 1px solid; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff; }
.w_textarea { BORDER: #D3D3D3 1px solid; BACKGROUND-COLOR: #ffffff; WIDTH: 98%; WORD-BREAK: break-all; }
.w_message  { font-family:돋움; font-size:9pt; color:#4B4B4B; }
.w_norobot  { font-family:돋움; font-size:9pt; color:#BB4681; }
.w_hand     { cursor:pointer; }
.line_bg {  background-color: #EBF3EE; }
-->
</style>
<script language="JavaScript">
// 글자수 제한
var char_min = parseInt(<?=$write_min?>); // 최소
var char_max = parseInt(<?=$write_max?>); // 최대
</script>

<form name="fwrite" method="post" action="javascript:fwrite_check(document.fwrite);" enctype="multipart/form-data" autocomplete="off">
<table width="<?=$width?>"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1" class="line_bg"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td height="4"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td height="50" align="center" background="<?=$board_skin_path?>/img/write_top_bg.gif"><font style="font-family:돋움; font-size:9pt; color:#7D7D7D"><strong>[ <?=$title_msg?> ]</strong></font></td>
  </tr>
  <tr>
    <td height="1"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="380" valign="top">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
			<input type=hidden name=w        value="<?=$w?>">
            <input type=hidden name=bo_table value="<?=$bo_table?>">
            <input type=hidden name=wr_id    value="<?=$wr_id?>">
            <input type=hidden name=sfl      value="<?=$sfl?>">
            <input type=hidden name=stx      value="<?=$stx?>">
            <input type=hidden name=spt      value="<?=$spt?>">
            <input type=hidden name=sst      value="<?=$sst?>">
            <input type=hidden name=sod      value="<?=$sod?>">
            <input type=hidden name=page     value="<?=$page?>">
			<input type=hidden name=wr_10 required value="<?=$write[wr_10]?>">
              <? if ($is_name) { ?>
			  <tr>
                <td width="94" height="26" align="center" class="w_title">이름</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text maxLength=20 size=15 name=wr_name itemname="이름" required value="<?=$name?>"></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_password) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">패스워드</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text type=password maxLength=20 size=15 name=wr_password itemname="패스워드" <?=$password_required?>></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_email) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">이메일</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text maxLength=100 size=36 name=wr_email email itemname="이메일" value="<?=$email?>">
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_homepage) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">홈페이지</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text size=36 name=wr_homepage itemname="홈페이지" value="<?=$homepage?>">
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_category) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">분류</td>
                <td width="20">&nbsp;</td>
                <td><select name=ca_name required itemname="분류"><option value="">선택하세요<?=$category_option?></select></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">제목</td>
                <td width="20">&nbsp;</td>
                <td><input name=wr_subject class=w_text  value="<?=$subject?>" size="36" itemname="제목" required>
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
            </table>
          </td>
          <td width="20" valign="top">&nbsp;</td>
          <td valign="top">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26">
				<table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="10" height="26"><img src="<?=$board_skin_path?>/img/write_op_left.gif" width="10" height="26"></td>
                    <td align="center" class="w_title2" background="<?=$board_skin_path?>/img/write_op_bg.gif"><strong>쓰기옵션</strong></td>
                    <td width="10"><img src="<?=$board_skin_path?>/img/write_op_right.gif" width="10" height="26"></td>
                  </tr>
                </table>
				</td>
              </tr>
              <tr>
                <td height="4"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? if ($is_notice) { ?>
              <tr>
                <td height="22" class="w_title2"><input type=checkbox name=notice value="1" <?=$notice_checked?>> 공지사항 작성</td>
              </tr>
			  <? } ?>
			  <? if ($is_html) { ?>
              <tr>
                <td height="22" class="w_title2"><input onclick="html_auto_br(this);" type=checkbox value="<?=$html_value?>" name="html" <?=$html_checked?>> HTML 사용</td>
              </tr>
			  <? } ?>
			  <? if ($is_secret) { ?>
              <tr>
                <td height="22" class="w_title2"><input type=checkbox value="secret" name="secret" <?=$secret_checked?>> 비밀글 작성</td>
              </tr>
			  <? } ?>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="5"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="94" align="center" class="w_title">내용</td>
          <td width="20">&nbsp;</td>
          <td>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20%" height="30">
				<span style="CURSOR: pointer;" onclick="textarea_decrease('wr_content', 10);"><img src="<?=$board_skin_path?>/img/up.gif" width="16" height="16"></span> 
                <span style="CURSOR: pointer;" onclick="textarea_original('wr_content', 10);"><img src="<?=$board_skin_path?>/img/start.gif" width="16" height="16"></span> 
                <span style="CURSOR: pointer;" onclick="textarea_increase('wr_content', 10);"><img src="<?=$board_skin_path?>/img/down.gif" width="16" height="16"></span></td>

				<td width="78%" align="right">
				<img src="<?=$board_skin_path?>/insert_img/insert_img4.gif" width="29" height="26" onclick="imgtaginsert('『울먹』');" style="cursor:hand;">&nbsp;
				<img src="<?=$board_skin_path?>/insert_img/insert_img3.gif" width="29" height="26" onclick="imgtaginsert('『으앙~』');" style="cursor:hand;">&nbsp;
				<img src="<?=$board_skin_path?>/insert_img/insert_img2.gif" width="29" height="26" onclick="imgtaginsert('『윙크~』');" style="cursor:hand;">&nbsp;
				<img src="<?=$board_skin_path?>/insert_img/insert_img1.gif" width="29" height="26" onclick="imgtaginsert('『웃음1』');" style="cursor:hand;">
				</td>
				<td width="2%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3"><textarea id=wr_content name=wr_content class=w_textarea rows=8 itemname="내용" required ><?=$content?></textarea></td>
              </tr>
            </table>
          </td>
        </tr>
		<tr>
          <td height="5" colspan="3"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
        </tr>
		<? if ($is_link) { ?>
		<? for ($i=1; $i<=$g4[link_count]; $i++) { ?>
        <tr>
          <td width="94" height="26" align="center" class="w_title">링크 <?=$i?></td>
          <td width="20">&nbsp;</td>
          <td><input type='text' class=w_text size=61 name='wr_link<?=$i?>' itemname='링크 <?=$i?>' value='<?=$write["wr_link{$i}"]?>'>
          </td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
        </tr>
		<? } ?>
		<? } ?>
		<? if ($is_file) { ?>
        <tr>
          <td width="94" height="26" align="center" class="w_title">첨부파일 <span onclick="add_file();" class=w_hand>+</span>&nbsp;<span onclick="del_file();" class=w_hand>-</span></td>
          <td width="20">&nbsp;</td>
          <td><table id="variableFiles" cellpadding=0 cellspacing=0></table>
		    <script language="JavaScript">
            function add_file(delete_code) 
            {
                var objTbl;
                var objRow;
                var objCell;
                if (document.getElementById)
                    objTbl = document.getElementById("variableFiles");
                else
                    objTbl = document.all["variableFiles"];

                objRow = objTbl.insertRow(objTbl.rows.length);
                objCell = objRow.insertCell(0);

                objCell.innerHTML = "<input type='file' class=w_text size=30 name='bf_file[]' title='파일 용량 <?=$upload_max_filesize?> 이하만 업로드 가능'>";
                if (delete_code) 
                    objCell.innerHTML += delete_code;
                else
                {
                    <? if ($is_file_content) { ?>
                    objCell.innerHTML += "<br>파일설명: <input type='text' class=w_text size=36 name='bf_content[]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
                    <? } ?>
                    ;
                }
            }

            <?=$file_script; //수정시에 필요한 스크립트?>

            function del_file()
            {
                // file_length 이하로는 필드가 삭제되지 않아야 합니다.
                var file_length = <?=(int)$file_length?>;
                var objTbl = document.getElementById("variableFiles");
                if (objTbl.rows.length - 1 > file_length)
                    objTbl.deleteRow(objTbl.rows.length - 1);
            }
            </script>
		  </td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
        </tr>
		<? } ?>
		<? if ($is_trackback) { ?>
        <tr>
          <td width="94" height="26" align="center" class="w_title">트랙백 주소</td>
          <td width="20">&nbsp;</td>
          <td><input class=w_text size=44 name=wr_trackback itemname="트랙백" value="<?=$trackback?>">
		  <? if ($w=="u") { ?><input type=checkbox name="re_trackback" value="1"><span class=w_message>핑 보냄</span><? } ?></td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
        </tr>
		<? } ?>
		<? if ($is_norobot) { ?>
        <tr>
          <td width="94" height="26" align="center"><?=$norobot_str?></td>
          <td width="20">&nbsp;</td>
          <td><input class=w_text type=input size=10 name=wr_key itemname="자동등록방지" required>&nbsp;&nbsp;<font class="mystyle">* 왼쪽의 글자중 <font COLOR="red">빨간글자만</font> 순서대로 입력하세요.</font></td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
        </tr>
		<? } ?>
      </table>
    </td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type=image id="btn_submit" src="<?=$board_skin_path?>/img/ok_btn.gif" border=0 accesskey='s'>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./board.php?bo_table=<?=$bo_table?>"><img id="btn_list" src="<?=$board_skin_path?>/img/list_btn.gif" border=0></a></td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table>
</form>


<script language="Javascript">
with (document.fwrite) {
    if (typeof(wr_name) != "undefined") 
        wr_name.focus();
    else if (typeof(wr_subject) != "undefined") 
        wr_subject.focus();
    else if (typeof(wr_content) != "undefined") 
        wr_content.focus();

    if (typeof(ca_name) != "undefined") 
        if (w.value == "u") 
            ca_name.value = "<?=$write[ca_name]?>";
}

function html_auto_br(obj)
{
    if (obj.checked) {
        result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
        if (result) 
            obj.value = "html2";
        else 
            obj.value = "html1";
    } 
    else 
        obj.value = "";
}

function fwrite_check(f)
{
    var s = "";
    if (s = word_filter_check(f.wr_subject.value)) {
        alert("제목에 금지단어('"+s+"')가 포함되어있습니다");
        return;
    }

    if (s = word_filter_check(f.wr_content.value)) {
        alert("내용에 금지단어('"+s+"')가 포함되어있습니다");
        return;
    }

    if (char_min > 0 || char_max > 0)
    {
        var cnt = parseInt(document.getElementById('char_count').innerHTML);
        if (char_min > 0 && char_min > cnt)
        {
            alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
            return;
        } else if (char_max > 0 && char_max < cnt)
        {
            alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
            return;
        }
    }

    if (typeof(f.wr_key) != "undefined") {
        if (hex_md5(f.wr_key.value) != md5_norobot_key) {
            alert("자동등록방지용 빨간글자가 순서대로 입력되지 않았습니다.");
            f.wr_key.focus();
            return;
        }
    }

    f.action = "./write_update.php";
    f.submit();
}
</script>

<script language='javascript'>
    function imgtaginsert(tag) 
    {
        if (typeof(document.fwrite.wr_content) != 'undefined') {
            document.fwrite.wr_content.value += tag;
        }
    }

	function bgimage(imgsource,imgname) 
    {
        if (typeof(document.bgimgsource.bgimg) != 'undefined') {
            document.bgimgsource.bgimg.value = imgsource;
			document.bgimgsource.imgname.value = imgname;
        }
    }
</script>
