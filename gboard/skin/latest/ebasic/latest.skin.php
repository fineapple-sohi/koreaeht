<?
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ� 
?>

<table width=100% cellpadding=0 cellspacing=0>

<? for ($i=0; $i<count($list); $i++) { ?>
<tr>
    <td align=left valign=top>
            <span style='font-family:����; font-size:7pt; color:#FFFFFF;'>��</span></td>
    <td align=left>            
            <?
            echo $list[$i]['icon_reply'] . " ";
            echo "<a href='{$list[$i]['href']}'>";
            if ($list[$i]['is_notice'])
                echo "<font style='font-family:verdana; font-size:7pt; color:#cee4fa;'><strong>{$list[$i]['subject']}</strong></font>";
            else
                echo "<font style='font-family:verdana; font-size:7pt; color:#cee4fa;'>{$list[$i]['subject']}</font>";
            echo "</a>";

            if ($list[$i]['comment_cnt']) 
                echo " <a href=\"{$list[$i]['comment_href']}\"><span style='font-family:����; font-size:8pt; color:#9A9A9A;'>{$list[$i]['comment_cnt']}</span></a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            echo " " . $list[$i]['icon_new'];
            ?></td>
</tr>
<? } ?>

<? if (count($list) == 0) { ?><tr><td align=center height=95><font color=#6A6A6A>No Articles</a></td></tr><? } ?>

</table>
