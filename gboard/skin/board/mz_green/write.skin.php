<?
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ� 
?>
<style type="text/css">
<!--
.w_title    { font-family:����; font-size:9pt; color:#9A9A9A; background-color: #F9F9F9; }
.w_title2    { font-family:����; font-size:9pt; color:#9A9A9A; }
.w_text     { BORDER: #D3D3D3 1px solid; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff; }
.w_textarea { BORDER: #D3D3D3 1px solid; BACKGROUND-COLOR: #ffffff; WIDTH: 98%; WORD-BREAK: break-all; }
.w_message  { font-family:����; font-size:9pt; color:#4B4B4B; }
.w_norobot  { font-family:����; font-size:9pt; color:#BB4681; }
.w_hand     { cursor:pointer; }
.line_bg {  background-color: #EBF3EE; }
-->
</style>
<script language="JavaScript">
// ���ڼ� ����
var char_min = parseInt(<?=$write_min?>); // �ּ�
var char_max = parseInt(<?=$write_max?>); // �ִ�
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
    <td height="50" align="center" background="<?=$board_skin_path?>/img/write_top_bg.gif"><font style="font-family:����; font-size:9pt; color:#7D7D7D"><strong>[ <?=$title_msg?> ]</strong></font></td>
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
                <td width="94" height="26" align="center" class="w_title">�̸�</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text maxLength=20 size=15 name=wr_name itemname="�̸�" required value="<?=$name?>"></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_password) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">�н�����</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text type=password maxLength=20 size=15 name=wr_password itemname="�н�����" <?=$password_required?>></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_email) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">�̸���</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text maxLength=100 size=36 name=wr_email email itemname="�̸���" value="<?=$email?>">
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_homepage) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">Ȩ������</td>
                <td width="20">&nbsp;</td>
                <td><input class=w_text size=36 name=wr_homepage itemname="Ȩ������" value="<?=$homepage?>">
                </td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
			  <? if ($is_category) { ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">�з�</td>
                <td width="20">&nbsp;</td>
                <td><select name=ca_name required itemname="�з�"><option value="">�����ϼ���<?=$category_option?></select></td>
              </tr>
              <tr>
                <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
              </tr>
			  <? } ?>
              <tr>
                <td width="94" height="26" align="center" class="w_title">����</td>
                <td width="20">&nbsp;</td>
                <td><input name=wr_subject class=w_text  value="<?=$subject?>" size="36" itemname="����" required>
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
                    <td align="center" class="w_title2" background="<?=$board_skin_path?>/img/write_op_bg.gif"><strong>����ɼ�</strong></td>
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
                <td height="22" class="w_title2"><input type=checkbox name=notice value="1" <?=$notice_checked?>> �������� �ۼ�</td>
              </tr>
			  <? } ?>
			  <? if ($is_html) { ?>
              <tr>
                <td height="22" class="w_title2"><input onclick="html_auto_br(this);" type=checkbox value="<?=$html_value?>" name="html" <?=$html_checked?>> HTML ���</td>
              </tr>
			  <? } ?>
			  <? if ($is_secret) { ?>
              <tr>
                <td height="22" class="w_title2"><input type=checkbox value="secret" name="secret" <?=$secret_checked?>> ��б� �ۼ�</td>
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
          <td width="94" align="center" class="w_title">����</td>
          <td width="20">&nbsp;</td>
          <td>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20%" height="30">
				<span style="CURSOR: pointer;" onclick="textarea_decrease('wr_content', 10);"><img src="<?=$board_skin_path?>/img/up.gif" width="16" height="16"></span> 
                <span style="CURSOR: pointer;" onclick="textarea_original('wr_content', 10);"><img src="<?=$board_skin_path?>/img/start.gif" width="16" height="16"></span> 
                <span style="CURSOR: pointer;" onclick="textarea_increase('wr_content', 10);"><img src="<?=$board_skin_path?>/img/down.gif" width="16" height="16"></span></td>

				<td width="78%" align="right">
				<img src="<?=$board_skin_path?>/insert_img/insert_img4.gif" width="29" height="26" onclick="imgtaginsert('����ԡ�');" style="cursor:hand;">&nbsp;
				<img src="<?=$board_skin_path?>/insert_img/insert_img3.gif" width="29" height="26" onclick="imgtaginsert('������~��');" style="cursor:hand;">&nbsp;
				<img src="<?=$board_skin_path?>/insert_img/insert_img2.gif" width="29" height="26" onclick="imgtaginsert('����ũ~��');" style="cursor:hand;">&nbsp;
				<img src="<?=$board_skin_path?>/insert_img/insert_img1.gif" width="29" height="26" onclick="imgtaginsert('������1��');" style="cursor:hand;">
				</td>
				<td width="2%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3"><textarea id=wr_content name=wr_content class=w_textarea rows=8 itemname="����" required ><?=$content?></textarea></td>
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
          <td width="94" height="26" align="center" class="w_title">��ũ <?=$i?></td>
          <td width="20">&nbsp;</td>
          <td><input type='text' class=w_text size=61 name='wr_link<?=$i?>' itemname='��ũ <?=$i?>' value='<?=$write["wr_link{$i}"]?>'>
          </td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
        </tr>
		<? } ?>
		<? } ?>
		<? if ($is_file) { ?>
        <tr>
          <td width="94" height="26" align="center" class="w_title">÷������ <span onclick="add_file();" class=w_hand>+</span>&nbsp;<span onclick="del_file();" class=w_hand>-</span></td>
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

                objCell.innerHTML = "<input type='file' class=w_text size=30 name='bf_file[]' title='���� �뷮 <?=$upload_max_filesize?> ���ϸ� ���ε� ����'>";
                if (delete_code) 
                    objCell.innerHTML += delete_code;
                else
                {
                    <? if ($is_file_content) { ?>
                    objCell.innerHTML += "<br>���ϼ���: <input type='text' class=w_text size=36 name='bf_content[]' title='���ε� �̹��� ���Ͽ� �ش� �Ǵ� ������ �Է��ϼ���.'>";
                    <? } ?>
                    ;
                }
            }

            <?=$file_script; //�����ÿ� �ʿ��� ��ũ��Ʈ?>

            function del_file()
            {
                // file_length ���Ϸδ� �ʵ尡 �������� �ʾƾ� �մϴ�.
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
          <td width="94" height="26" align="center" class="w_title">Ʈ���� �ּ�</td>
          <td width="20">&nbsp;</td>
          <td><input class=w_text size=44 name=wr_trackback itemname="Ʈ����" value="<?=$trackback?>">
		  <? if ($w=="u") { ?><input type=checkbox name="re_trackback" value="1"><span class=w_message>�� ����</span><? } ?></td>
        </tr>
		<tr>
          <td height="1" colspan="3" background="<?=$board_skin_path?>/img/dot_bg.gif"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td>
        </tr>
		<? } ?>
		<? if ($is_norobot) { ?>
        <tr>
          <td width="94" height="26" align="center"><?=$norobot_str?></td>
          <td width="20">&nbsp;</td>
          <td><input class=w_text type=input size=10 name=wr_key itemname="�ڵ���Ϲ���" required>&nbsp;&nbsp;<font class="mystyle">* ������ ������ <font COLOR="red">�������ڸ�</font> ������� �Է��ϼ���.</font></td>
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
        result = confirm("�ڵ� �ٹٲ��� �Ͻðڽ��ϱ�?\n\n�ڵ� �ٹٲ��� �Խù� ������ �ٹٲ� ����<br>�±׷� ��ȯ�ϴ� ����Դϴ�.");
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
        alert("���� �����ܾ�('"+s+"')�� ���ԵǾ��ֽ��ϴ�");
        return;
    }

    if (s = word_filter_check(f.wr_content.value)) {
        alert("���뿡 �����ܾ�('"+s+"')�� ���ԵǾ��ֽ��ϴ�");
        return;
    }

    if (char_min > 0 || char_max > 0)
    {
        var cnt = parseInt(document.getElementById('char_count').innerHTML);
        if (char_min > 0 && char_min > cnt)
        {
            alert("������ "+char_min+"���� �̻� ���ž� �մϴ�.");
            return;
        } else if (char_max > 0 && char_max < cnt)
        {
            alert("������ "+char_max+"���� ���Ϸ� ���ž� �մϴ�.");
            return;
        }
    }

    if (typeof(f.wr_key) != "undefined") {
        if (hex_md5(f.wr_key.value) != md5_norobot_key) {
            alert("�ڵ���Ϲ����� �������ڰ� ������� �Էµ��� �ʾҽ��ϴ�.");
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
