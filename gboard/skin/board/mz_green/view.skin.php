<?
if (!defined("_GNUBOARD_")) exit; 
$this_homepage = set_http($view[wr_homepage]);

if (strstr($view[content], "������1��"))  //�̸�Ƽ�� ��ȯ
$view[content] = str_replace("������1��", "<img src='$board_skin_path/insert_img/insert_img1.gif'width='29' height='26' align='absmiddle'>", $view[content]);
if (strstr($view[content], "����ũ~��"))
$view[content] = str_replace("����ũ~��", "<img src='$board_skin_path/insert_img/insert_img2.gif'width='29' height='26' align='absmiddle'>", $view[content]);
if (strstr($view[content], "������~��"))
$view[content] = str_replace("������~��", "<img src='$board_skin_path/insert_img/insert_img3.gif'width='29' height='26' align='absmiddle'>", $view[content]);
if (strstr($view[content], "����ԡ�"))
$view[content] = str_replace("����ԡ�", "<img src='$board_skin_path/insert_img/insert_img4.gif'width='29' height='26' align='absmiddle'>", $view[content]);
?>
<link rel="stylesheet" href="<?=$board_skin_path?>/style.css" type="text/css">
<table width="<?=$width?>" border="0" align="center" cellpadding="0" cellspacing="0"> 
  <tr> 
    <td height="35"> 
      <!-- ��ũ ��ư --> 
      <? ob_start(); ?> 
      <table width='100%' cellpadding=0 cellspacing=0> 
        <tr> 
          <td width=75% height=35> 
            <? if ($search_href) { echo "<a href=\"$search_href\"><img src='$board_skin_path/img/btn_search_list.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? echo "<a href=\"$list_href\"><img src='$board_skin_path/img/btn_list.gif' border='0' align='absmiddle'></a> "; ?> 
            <? if ($write_href) { echo "<a href=\"$write_href\"><img src='$board_skin_path/img/btn_write.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? if ($reply_href) { echo "<a href=\"$reply_href\"><img src='$board_skin_path/img/btn_reply.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? if ($update_href) { echo "<a href=\"$update_href\"><img src='$board_skin_path/img/btn_update.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? if ($delete_href) { echo "<a href=\"$delete_href\"><img src='$board_skin_path/img/btn_delete.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? if ($good_href) { echo "<a href=\"$good_href\" target='hiddenframe'><img src='$board_skin_path/img/btn_good.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? if ($nogood_href) { echo "<a href=\"$nogood_href\" target='hiddenframe'><img src='$board_skin_path/img/btn_nogood.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? if ($copy_href) { echo "<a href=\"$copy_href\"><img src='$board_skin_path/img/btn_copy.gif' border='0' align='absmiddle'></a> "; } ?> 
            <? if ($move_href) { echo "<a href=\"$move_href\"><img src='$board_skin_path/img/btn_move.gif' border='0' align='absmiddle'></a> "; } ?> 
          </td> 
          <td width=25% align=right> 
            <? if ($prev_href) { echo "<a href=\"$prev_href\" title=\"$prev_wr_subject\"><img src='$board_skin_path/img/btn_prev.gif' border='0' align='absmiddle'></a>&nbsp;"; } ?> 
            <? if ($next_href) { echo "<a href=\"$next_href\" title=\"$next_wr_subject\"><img src='$board_skin_path/img/btn_next.gif' border='0' align='absmiddle'></a>&nbsp;"; } ?> 
          </td> 
        </tr> 
      </table> 
      <?
	  $link_buttons = ob_get_contents();
	  ob_end_flush();
	  ?> 
    </td> 
  </tr> 
  <tr> 
    <td height="1" class="line_bg"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr> 
  <tr> 
    <td height="83" align="center" valign="top" background="<?=$board_skin_path?>/img/view_top_bg.gif"> 
      <table width="97%"  border="0" cellspacing="0" cellpadding="0"> 
        <tr align="center"> 
          <td height="32" colspan="2" class="title"><? if ($this_category) { echo ($category_name ? "[$view[ca_name]] " : ""); } ?><?=$view[subject]?></td> 
        </tr> 
        <tr> 
          <td width="250" height="24" align="left">�ø���: <?=$view[name]?> 
           <font class="tma8">
            <? if ($this_ip_view) { echo "&nbsp;($ip)"; } ?></font>
          </td> 
          <td align="right">��¥: <font class="tma8"> 
            <?=substr($view[wr_datetime],2,14)?> 
            </font></td> 
        </tr> 
        <tr> 
          <td height="24" colspan="2">
		  <table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
            <tr>
              <td width="100" height="24" align="left">��ȸ: <font class="tma8">(<?=$view[wr_hit]?>)</font></td>
              <td align="right"> Ʈ���� �ּ� : <a href="javascript:clipboard_trackback('<?=$trackback_url?>');" style="letter-spacing:0;" title='�� �ּҸ� Ŭ�����忡 �����մϴ�'><font class="tma8"><?=$trackback_url?></font> </a></td>
           </tr>
          </table>
		  </td> 
        </tr> 
      </table> 
    </td> 
  </tr> 
  <tr> 
    <td height="1"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr> 
  <tr> 
    <td height="32"> 
      <table width="100%"  border="0" cellpadding="0" cellspacing="0" background="<?=$board_skin_path?>/img/view_md_bg.gif"> 
        <tr> 
          <td width="10" height="32"><img src="<?=$board_skin_path?>/img/view_md_left.gif" width="10" height="32"></td> 
          <td>
		  <? if ($this_homepage) { //Ȩ������ ?>
		  <img src="<?=$board_skin_path?>/img/home.gif" width="14" height="14" align="absmiddle">&nbsp;Ȩ������: <a href="<?=$this_homepage?>" target="_blank"><font class="tma8"><u><?=cut_str($this_homepage, 40);?></u></font></a>
		  <? } else echo "&nbsp;"; ?>
		  </td> 
          <td width="30" align="right"><? echo "<a href=\"javascript:;\" onclick=\"win_scrap('./scrap_popin.php?bo_table=$bo_table&wr_id=$wr_id');\"><img src='$board_skin_path/img/view_btn_scr.gif' alt='��ũ��' width='21' height='21' border='0' align='absmiddle'></a>"; ?></td> 
          <td width="10"><img src="<?=$board_skin_path?>/img/view_md_right.gif" width="10" height="32"></td> 
        </tr> 
      </table> 
    </td> 
  </tr>
  <?
   // ÷������ (![view])
   for ($i=0; $i<count($view[file]); $i++) {
     if ($view[file][$i][source] && !$view[file][$i][view]) {
  ?>
  <tr> 
    <td height="30" align="right"><img src="<?=$board_skin_path?>/img/disk.gif" width="14" height="13" align="absmiddle">&nbsp;&nbsp;<a href="<?=$view[file][$i][href]?>" title="<?=$view[file][$i][content]?>"><font class="num3"><?=$view[file][$i][source]?> (<?=$view[file][$i][size]?>), Down:<?=$view[file][$i][download]?></font></a>&nbsp;</td> 
  </tr>
  <? } } ?>

  <?
   // ��ũ
   $cnt = 0;
   for ($i=1; $i<=$g4[link_count]; $i++) {
     if ($view[link][$i]) {
		 $cnt++;
         $link = cut_str($view[link][$i], 70);
  ?>
  <tr> 
    <td height="30" align="right">��ũ#<?=$cnt?>&nbsp;&nbsp;<a href="<?=$view[link_href][$i]?>" target="_blank"><font class="num"><u><?=$link?></u> (<?=$view[link_hit][$i]?>)</font></a>&nbsp;</td> 
  </tr>
  <? } } ?>
  <tr> 
    <td height="18"><img src="<?=$board_skin_path?>/img/t.gif" width="1" height="1"></td> 
  </tr>
  <tr> 
    <td valign="top"> 
      <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" <?=$bg_img?> class="bg_img"> 
        <tr> 
          <td height="180" valign="top">
		    <? 
             // ���� ���([view])
             for ($i=0; $i<=count($view[file]); $i++) {
                if ($view[file][$i][view]) 
                    echo $view[file][$i][view] . "<br>";
            }
            ?> 
            <?=$view[content];?>
			<!-- �׷� �±� ������ --></xml></xmp><a href=""></a><a href=''></a> 
          </td> 
        </tr> 
      </table> 
    </td> 
  </tr> 
  <tr> 
    <td><? include_once("./view_comment.php");?></td> 
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr> 
  <tr> 
    <td>
      <?=$link_buttons?>
    </td> 
  </tr> 
</table> 
<script language="JavaScript">
function clipboard_trackback(str) {
   if (g4_is_gecko)
       prompt("�� ���� �����ּ��Դϴ�. Ctrl+C�� ���� �����ϼ���.", str);
       else if (g4_is_ie) {
           window.clipboardData.setData("Text", str);
           alert("Ʈ���� �ּҰ� ����Ǿ����ϴ�.\n\n<?=$trackback_url?>");

           }
         }
</script> 

<script language="JavaScript">
// HTML �� �Ѿ�� <img ... > �±��� ���� ���̺������� ũ�ٸ� ���̺����� �����Ѵ�.
function resize_image()
{
    var target = document.getElementsByName('target_resize_image[]');
    var image_width = parseInt('<?=$board[bo_image_width]?>');
    var image_height = 0;

    for(i=0; i<target.length; i++) { 
        // ���� ����� ������ ���´�
        target[i].tmp_width  = target[i].width;
        target[i].tmp_height = target[i].height;
        // �̹��� ���� ���̺� ������ ũ�ٸ� ���̺����� �����
        if(target[i].width > image_width) {
            image_height = parseFloat(target[i].width / target[i].height)
            target[i].width = image_width;
            target[i].height = parseInt(image_width / image_height);
        }
    }
}

window.onload = resize_image;
</script>
