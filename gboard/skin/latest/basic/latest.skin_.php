<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>

<table width=100% cellpadding=0 cellspacing=0>
<colgroup width=14>
<colgroup>
<colgroup width=37>
<colgroup width=14>

<? for ($i=0; $i<count($list); $i++) { ?>
<tr>
    <td colspan=4 align=left><img src="<?=$latest_skin_path?>/img/blank.gif" width="1" height="14">
            <?
            echo $list[$i]['icon_reply'] . " ";
            echo "<a href='javascript:onClick='board_open()'>";			
            // echo "<a href='{$list[$i]['href']}'>";
            if ($list[$i]['is_notice'])
                echo "<font style='font-family:돋움; font-size:9pt; color:#FFFFFF;'>ㆍ<strong>{$list[$i]['subject']}</strong></font>";
            else
                echo "<font style='font-family:돋움; font-size:9pt; color:#FFFFFF;'>ㆍ{$list[$i]['subject']}</font>&nbsp;";
            echo "</a>";

            if ($list[$i]['comment_cnt']) 
                echo " <a href=\"{$list[$i]['comment_href']}\"><span style='font-family:돋움; font-size:8pt; color:#FFFFFF;'>{$list[$i]['comment_cnt']}</span></a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            echo " " . $list[$i]['icon_new'];
            ?></td>
</tr>
<? } ?>

<? if (count($list) == 0) { ?><tr><td colspan=4 align=center height=95><font color=#6A6A6A>게시물이 없습니다.</a></td></tr><? } ?>

</table>
