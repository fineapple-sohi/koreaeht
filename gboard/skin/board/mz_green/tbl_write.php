<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
</head>
<style type="text/css">
<!--
.w_title    { font-family:돋움; font-size:9pt; color:#9A9A9A; background-color: #F9F9F9; }
.w_title2    { font-family:돋움; font-size:9pt; color:#9A9A9A; }
.w_padding  { PADDING-LEFT: 15px; PADDING-BOTTOM: 5px; PADDING-TOP: 5px; }
.w_padding2 { PADDING-LEFT: 15px; PADDING-TOP: 5px; }
.w_text     { BORDER: #D3D3D3 1px solid; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff; }
.w_textarea { BORDER: #D3D3D3 1px solid; BACKGROUND-COLOR: #ffffff; WIDTH: 98%; WORD-BREAK: break-all; }
.w_message  { font-family:돋움; font-size:9pt; color:#4B4B4B; }
.w_norobot  { font-family:돋움; font-size:9pt; color:#BB4681; }
.w_hand     { cursor:pointer; }
-->
</style>
<body>
<table width="560"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1" bgcolor="#CCBE99"><img src="img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td height="4"><img src="img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td>
      <table width="100%"  border="0" cellpadding="1" cellspacing="0" bgcolor="#CCBE99">
        <tr>
          <td height="40">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#F2EFE6">
              <tr>
                <td height="40" align="center"><font style="font-family:돋움; font-size:9pt; color:#7D7D7D"><strong>[ <?=$title_msg?> ]</strong></font></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="1"><img src="img/t.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="380" valign="top">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="94" height="26" align="center" class="w_title">이름</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text maxLength=20 size=15 name=wr_name itemname="이름" required value="<?=$name?>"></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td height="26" align="center" class="w_title">패스워드</td>
                <td>&nbsp;</td>
                <td><input class=w_text type=password maxLength=20 size=15 name=wr_password itemname="패스워드" <?=$password_required?>></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td height="26" align="center" class="w_title">이메일</td>
                <td>&nbsp;</td>
                <td><input class=w_text maxLength=100 size=36 name=wr_email email itemname="이메일" value="<?=$email?>">
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td height="26" align="center" class="w_title">홈페이지</td>
                <td>&nbsp;</td>
                <td><input class=w_text size=36 name=wr_homepage itemname="홈페이지" value="<?=$homepage?>">
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td height="26" align="center" class="w_title">분류</td>
                <td>&nbsp;</td>
                <td><select name=ca_name required itemname="분류"><option value="">선택하세요<?=$category_option?></select></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td height="26" align="center" class="w_title">제목</td>
                <td>&nbsp;</td>
                <td><input name=wr_subject class=w_text  value="<?=$subject?>" size="36" itemname="제목" required>
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
              </tr>
            </table>
          </td>
          <td width="20" valign="top">&nbsp;</td>
          <td valign="top">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26" align="center" bgcolor="#F2EFE6" class="w_title2"><strong>옵션</strong></td>
              </tr>
              <tr>
                <td height="7"><img src="img/t.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td height="28" class="w_title2"><input type=checkbox name=notice value="1" <?=$notice_checked?>> 공지사항 작성</td>
              </tr>
              <tr>
                <td height="28" class="w_title2"><input onclick="html_auto_br(this);" type=checkbox value="<?=$html_value?>" name="html" <?=$html_checked?>> HTML 사용</td>
              </tr>
              <tr>
                <td height="28" class="w_title2"><input type=checkbox value="secret" name="secret" <?=$secret_checked?>> 비밀글 작성</td>
              </tr>
              <tr>
                <td height="28" class="w_title2"><input type=checkbox value="mail" name="mail" <?=$recv_email_checked?>> 답변메일받기</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="10"><img src="img/t.gif" width="1" height="1"></td>
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
                <td>텍스트 에리어 조정 </td>
              </tr>
              <tr>
                <td><textarea id=wr_content name=wr_content class=w_textarea rows=10 itemname="내용" required ONKEYUP="check_byte('wr_content', 'char_count');"><?=$content?></textarea></td>
              </tr>
            </table>
          </td>
        </tr>
		<tr>
          <td height="10" colspan="3"><img src="img/t.gif" width="1" height="1"></td>
        </tr>
        <tr>
          <td height="26" align="center" class="w_title">사이트 주소</td>
          <td>&nbsp;</td>
          <td><input type='text' class=w_text size=60 name='wr_link<?=$i?>' itemname='링크 #<?=$i?>' value='<?=$write["wr_link{$i}"]?>'>
          </td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
        </tr>
        <tr>
          <td height="26" align="center" class="w_title">베너 이미지</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
        </tr>
        <tr>
          <td height="26" align="center" class="w_title">사이트 이미지</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
        </tr>
        <tr>
          <td height="26" align="center" class="w_title">트랙백 주소</td>
          <td>&nbsp;</td>
          <td><input class=w_text size=50 name=wr_trackback itemname="트랙백" value="<?=$trackback?>"></td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="img/dot_bg.gif"><img src="img/t.gif" width="1" height="1"></td>
        </tr>
        <tr>
          <td><?=$norobot_str?></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table>
</body>
</html>
