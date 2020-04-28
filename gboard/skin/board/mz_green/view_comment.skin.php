<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>
<style>
.vc_textarea { 
	BORDER: #D3D3D3 1px solid; 
	BACKGROUND-COLOR: #ffffff; 
	WIDTH: 100%; 
	WORD-BREAK: break-all; 
}

.date {
	font-family: Tahoma;
	font-size: 7pt;
	font-weight: bold;
	color: #999999;
}
.input_box1 {
	border-top-style: none;
	border-right-style: none;
	border-left-style: none;
	border-top-color: #FFFFFF;
	border-right-color: #FFFFFF;
	border-left-color: #FFFFFF;
}
</style>
<script language="JavaScript">
// 글자수 제한
var char_min = parseInt(<?=$comment_min?>); // 최소
var char_max = parseInt(<?=$comment_max?>); // 최대
</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
  <? if ($is_comment_write) { ?> 
  <tr> 
    <td height="40" align="right"><a href="javascript:comment_box('', 'c');"><img src='<?=$board_skin_path?>/img/btn_comment_insert.gif' border=0 align=absmiddle></a></td> 
  </tr> 
  <? } //end if $is_comment_write?> 
  <? 
   for ($i=0; $i<count($list); $i++) { 
   $comment_id = $list[$i][wr_id];
 ?> 
  <tr> 
    <td> 
      <table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
        <tr> 
          <td valign="top"> 
            <? for ($k=0; $k<strlen($list[$i][wr_comment_reply]); $k++) echo "&nbsp;&nbsp;&nbsp;&nbsp;"; ?> 
          </td> 
          <td width="100%"> 
            <table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td height="32"> 
                  <table width="100%"  border="0" cellpadding="0" cellspacing="0" background="<?=$board_skin_path?>/img/view_md_bg.gif" >
				  <a name="c_<?=$comment_id?>"></a>
                    <tr>
					<? if ($list[$i][wr_comment_reply]) { ?>
                      <td width="32" height="32"><img src="<?=$board_skin_path?>/img/view_md_left_re.gif" width="32" height="32"></td>
					  <? } else { ?>
					  <td width="10" height="32"><img src="<?=$board_skin_path?>/img/view_md_left.gif" width="10" height="32"></td>
					  <? } ?> 
                      <td>&nbsp;이름:
                        <?=$list[$i][name]?> 
                        <? if ($is_ip_view) { echo "&nbsp;({$list[$i][ip]})"; } ?> 
                      </td> 
                      <td width="160" align="right"> 
                        <!-- 답변,삭제 버튼 --> 
                        <? if ($list[$i][is_reply]) { echo "<a href=\"javascript:comment_box('{$comment_id}', 'c');\"><img src='$board_skin_path/img/btn_comment_reply.gif' border=0 align=absmiddle></a> "; } ?> 
                        <? if ($list[$i][is_edit]) { echo "<a href=\"javascript:comment_box('{$comment_id}', 'cu');\"><img src='$board_skin_path/img/btn_comment_update.gif' border=0 align=absmiddle></a> "; } ?> 
                        <? if ($list[$i][is_del])  { echo "<a href=\"javascript:comment_delete('{$list[$i][del_link]}');\"><img src='$board_skin_path/img/btn_comment_delete.gif' border=0 align=absmiddle></a> "; } ?> 
                      </td> 
                      <td width="100" align="right" class="date"> 
                        <?=$list[$i][datetime]?> 
                      </td> 
                      <td width="10"><img src="<?=$board_skin_path?>/img/view_md_right.gif" width="10" height="32"></td> 
                    </tr> 
                  </table> 
                </td> 
              </tr> 
              <tr> 
                <td height="1"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
              </tr> 
              <tr> 
                <td bgcolor="#FAFAFA"> 
                  <table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                    <tr> 
                      <td height="4" colspan="3"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
                    </tr> 
                    <tr> 
                      <td width="10">&nbsp;</td> 
                      <td> 
                        <!-- 코멘트 내용 --> 
                        <?=$list[$i][content]?> 
                        <? if ($list[$i][trackback]) { echo "<p>".$list[$i][trackback]."</p>"; } ?> 
                        <textarea id='save_comment_<?=$comment_id?>' style='display:none;'><?=get_text($list[$i][wr_content], 0)?></textarea> 
                        <span id='edit_<?=$comment_id?>' style='display:none;'></span> 
                        <!-- 수정 --> 
                        <span id='reply_<?=$comment_id?>' style='display:none;'></span> 
                        <!-- 답변 --> 
                      </td> 
                      <td width="10">&nbsp;</td> 
                    </tr>
					<tr> 
                      <td height="4" colspan="3"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
                    </tr> 
                  </table> 
                </td> 
              </tr> 
            </table> 
          </td> 
        </tr> 
      </table> 
    </td> 
  </tr> 
  <tr> 
    <td height="10"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr> 
  <? } //end for commentlist?> 
  <? // if ($is_comment_write) { //입력 버튼을 누르지 않으면 입력 테이블을 볼 수 없으므로 삭제?> 
  <tr> 
    <td height="6"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr> 
  <tr> 
    <td> <span id=comment_write style='display:none;'> 
      <form name="fviewcomment" method="post" action="./write_comment_update.php" onsubmit="return fviewcomment_submit(this);" autocomplete="off"> 
        <input type=hidden name=w           id=w value='c'> 
        <input type=hidden name=bo_table    value='<?=$bo_table?>'> 
        <input type=hidden name=wr_id       value='<?=$wr_id?>'> 
        <input type=hidden name=comment_id  id='comment_id' value=''> 
        <input type=hidden name=sfl         value='<?=$sfl?>' > 
        <input type=hidden name=stx         value='<?=$stx?>'> 
        <input type=hidden name=spt         value='<?=$spt?>'> 
        <input type=hidden name=page        value='<?=$page?>'> 
        <input type=hidden name=cwin        value='<?=$cwin?>'> 
        <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" id="form_input"> 
          <? if ($is_guest) { ?> 
          <tr> 
            <td> 
              <table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                <tr> 
                  <td width="150" height="28">이름:
                    <input name="wr_name" type=text class="input_box1" size=12 maxLength=20 itemname="이름" required> 
                  </td> 
                  <td width="170">패스워드:
                    <input name="wr_password" type=password class="input_box1" size=12 maxLength=20 itemname="패스워드" required> 
                  </td> 
                  <? if ($is_norobot) { ?> 
                  <td align="right"> 
                    <?=$norobot_str?>&nbsp;
                    <input name="wr_key" type="input" size=12 title="왼쪽의 글자중 빨간글자만 순서대로 입력하세요." itemname="자동등록방지" required> 
                  </td> 
                  <? } //end if $is_norobot?> 
                </tr> 
              </table> 
            </td> 
          </tr> 
          <? } //end if $is_guest?> 
          <tr> 
            <td> 
              <table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                <tr> 
                  <td width="80%" valign="top"> 
                    <textarea id='wr_content' name='wr_content' class='vc_textarea' rows="4" itemname="내용" required ></textarea> 
                  </td> 
                  <td width="20">&nbsp;</td> 
                  <td align="center"> 
                    <input type="image" width="61" height="64" src="<?=$board_skin_path?>/img/ok_button.gif" border=0 accesskey='s'> 
                  </td> 
                </tr> 
              </table> 
            </td> 
          </tr> 
        </table> 
      </form> 
      </span> </td> 
  </tr> 
  <? // } //end if $is_comment_write?> 
  <tr> 
    <td height="6"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr> 
</table> 
<? if($cwin==1) { ?> 
<p align=center><a href="javascript:window.close();"><img src="<?=$board_skin_path?>/<?=$board_skin_path?>/img/btn_close.gif" width="48" height="20" border="0"></a> 
  <? } ?> 
  <script language='JavaScript'>
var save_before = '';
var save_html = document.getElementById('comment_write').innerHTML;
function fviewcomment_submit(f)
{
    var pattern = /(^\s*)|(\s*$)/g; // \s 공백 문자

    var s;
    if (s = word_filter_check(document.getElementById('wr_content').value))
    {
        alert("내용에 금지단어('"+s+"')가 포함되어있습니다");
        document.getElementById('wr_content').focus();
        return false;
    }

    if (char_min > 0 || char_max > 0)
    {
        var cnt = parseInt(document.getElementById('char_count').innerHTML);
        if (char_min > 0 && char_min > cnt)
        {
            alert("코멘트는 "+char_min+"글자 이상 쓰셔야 합니다.");
            return false;
        } else if (char_max > 0 && char_max < cnt)
        {
            alert("코멘트는 "+char_max+"글자 이하로 쓰셔야 합니다.");
            return false;
        }
    }

    if (typeof(f.wr_name) != 'undefined')
    {
        f.wr_name.value = f.wr_name.value.replace(pattern, "");
        if (f.wr_name.value == '')
        {
            alert('이름이 입력되지 않았습니다.');
            f.wr_name.focus();
            return false;
        }
    }

    if (typeof(f.wr_password) != 'undefined')
    {
        f.wr_password.value = f.wr_password.value.replace(pattern, "");
        if (f.wr_password.value == '')
        {
            alert('패스워드가 입력되지 않았습니다.');
            f.wr_password.focus();
            return false;
        }
    }

    if (typeof(f.wr_key) != 'undefined') 
    {
        if (hex_md5(f.wr_key.value) != md5_norobot_key) 
        {
            alert('자동등록방지용 빨간글자가 순서대로 입력되지 않았습니다.');
            f.wr_key.focus();
            return false;
        }
    }

    return true;
}

function comment_box(comment_id, work)
{
    var el_id;
    // 코멘트 아이디가 넘어오면 답변, 수정
    if (comment_id)
    {
        if (work == 'c')
            el_id = 'reply_' + comment_id;
        else
            el_id = 'edit_' + comment_id;
    }
    else
        el_id = 'comment_write';

    if (save_before != el_id)
    {
        if (save_before)
        {
            document.getElementById(save_before).style.display = 'none';
            document.getElementById(save_before).innerHTML = '';
        }

        document.getElementById(el_id).style.display = '';
        document.getElementById(el_id).innerHTML = save_html;
        // 코멘트 수정
        if (work == 'cu')
        {
            document.getElementById('wr_content').value = document.getElementById('save_comment_' + comment_id).value;
            if (typeof char_count != 'undefined')
                check_byte('wr_content', 'char_count');
        }

        document.getElementById('comment_id').value = comment_id;
        document.getElementById('w').value = work;
		

        save_before = el_id;
    }
}

function comment_delete(url)
{
    if (confirm("이 코멘트를 삭제하시겠습니까?")) location.href = url;
}
</script> 
