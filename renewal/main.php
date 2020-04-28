<?
$g4_path = "../gboard";
include_once("$g4_path/common.php");
include_once("$g4[path]/lib/latest.lib.php");
?>

<HTML>
<HEAD>
<TITLE>- KOREA EHT -</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=EUC-kr">
<LINK HREF="./include/style.css" rel="stylesheet">
<script language="JavaScript" src="./include/fla.js"></script>
</HEAD>
<body background=./images/bg.gif style="background-repeat:repeat-y;">


        <div id="divpop1" style="position:absolute; left:240px; top:123px; z-index:100;">
        <table cellpadding=0 cellspacing=0 border=0>
        <tr>
            <td><script>rei('./include/text_img.swf','./include/text_img.swf','364','100','#FFFFFF','high','text')</script></td></tr>
        </table>
        </div>

        <div id="divpop2" style="position:absolute; left:612px; top:85px; z-index:1;">
        <table cellpadding=0 cellspacing=0 border=0>
        <tr>
            <td><img src=./images/map.gif></td></tr>
        </table>
        </div>

        <div id="divpop4" style="position:absolute; left:299px; top:257px; z-index:2;">
        <table cellpadding=0 cellspacing=0 border=0 class=c>
        <tr><!-- search -->
            <td background=./images/search_bg.gif style="background-repeat:no-repeat;" width=334 height=65>
                <table cellpadding=0 cellspacing=0 border=0 width=290>
                <tr>
                    <td><img src=./images/search_t.gif></td>
                    <td background=./images/input_bg.gif  style="padding : 0 0 0 5;" width=133 height=16><input type="text" class="Box03 TxtTahoma"  maxlength="24" style="width:130px;"></td>
                    <td class=r><a href="/renewal/ehts/ehts_c.php"><img src=./images/btn_search.gif></a></td>
                </tr>
                <tr><td height=5></td></tr>
                </table>
            </td>
        </tr>
        </table>
        </div>

<table cellpadding=0 cellspacing=0 border=0 width =100% height=100%>
<tr>
<td background=./images/mbg.jpg style="background-repeat:no-repeat;" valign=top>
    <!-- TOP  -->
    <table cellpadding=0 cellspacing=0 border=0 height=84>
    <tr>
        <td class=logo><img src=./images/logo.gif></td>
        <td><!-- menu -->
            <table cellpadding=0 cellspacing=0 border=0>
            <tr>
                <td background=./images/menu_bg.gif style="background-repeat:no-repeat;" width=714 height=38>
                    <div id="divpop3" style="position:relative; visibility: visible;left:0px; top:-2px; z-index:2;">
                    <table cellpadding=0 cellspacing=0 border=0>
                    <tr>
                        <td><script>rei('./include/menu.swf','./include/menu.swf','714','38','#FFFFFF','high','menu')</script></td></tr>
                    </table>
                    </div>
                </td>
            </tr>
            </table><!-- menu -->
        </td>
    </tr>
    </table>
    <!-- TOP -->

    <!-- CONTENT  -->
    <table cellpadding=0 cellspacing=0 border=0>
    <tr>
        <td width=266 valign=top>
            <!-- left -->
            <table cellpadding=0 cellspacing=0 border=0>
            <tr>
                <td>
                    <div id="divpop3" style="position:relative; visibility: visible;left:0px; top:0px; z-index:2;" >
                    <table cellpadding=0 cellspacing=0 border=0>
                    <tr>
                        <td><script>rei('./include/cable_img.swf','./include/cable_img.swf','266','371','#FFFFFF','high','cable')</script></td></tr>
                    </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td class=cb>
                    <table cellpadding=0 cellspacing=0 border=0>
                    <tr>
                        <td background=./images/news_bg.gif style="background-repeat:no-repeat;" width=246 height=247 class=c>
                            <!-- news -->
                            <table cellpadding=0 cellspacing=0 border=0 width=210>
                            <tr>
                              <td class=newst><img src=./images/news_t.gif></td>
                            </tr>
                            <tr>
                              <td valign="top"><?=latest("ebasic", "notice", 3, 150);?></td>
                            </tr>
                            </table>
                          <!-- news -->
                        </td>
                    </tr>
                    </table>
                </td>
            </tr>
            </table>
            <!-- left -->
        </td>
        <td width=705>
            <!-- right -->
            <table cellpadding=0 cellspacing=0 border=0>
            <tr>
                <td colspan=2 class=rv height=212></td>
            </tr>
            <tr>
              <td colspan=2 background=./images/goods_bg_top.gif style="padding-top:15px;background-repeat:no-repeat;" height=388 align=center><table cellpadding=0 cellspacing=0 border=0 width=670>
                <tr>
                  <td width="17" class=c>&nbsp;</td>
                  <td class=c><!-- 01 -->
                    <table width="325" border=0 cellpadding=0 cellspacing=0>
                      <tr>
                        <td colspan=2><a href="ehts/ehts_a.php"><img src=./images/goods01_t.gif></a></td>
                      </tr>
                      <tr>
                        <td width="120"><a href="ehts/ehts_a.php"><img src=./images/goods01_img.gif></a></td>
                        <td class=l_10><a href="ehts/sr_a.php"><font color="#FFFFFF">- SR(Self Regulating) Heating Cable</font></a><br>
                          <a href="ehts/mi_a.php"><font color="#FFFFFF">- Mineral Insulated (MI) Heating Cable</font></a><br>
                          <a href="ehts/cw_a.php"><font color="#FFFFFF">- Constant Wattage Heating Cable</font></a><br>
                          <a href="ehts/smfw.php"><font color="#FFFFFF">- Series Resistance heating cable</font></a><br>
                          <a href="ehts/tub_a.php"><font color="#FFFFFF">- Tubing Bundle</font></a></td>
                      </tr>
                    </table></td>
                  <td class=c><!-- 02 -->
                    <table width="325" border=0 cellpadding=0 cellspacing=0>
                      <tr>
                        <td colspan=2><a href="frwc/frwc_a.php"><img src=./images/goods02_t.gif></a></td>
                      </tr>
                      <tr>
                        <td width="120"><a href="frwc/frwc_a.php"><img src=./images/goods04_img.gif></a></td>
                        <td class=l_10><a href="frwc/frwc_a.php"><font color="#FFFFFF">- MI Fire Resistance Cable</font></a><br>
                          <a href="frwc/kme_mic_a.php"><font color="#FFFFFF">- Light Duty Cables (300/500V)</font></a><br>
                          <a href="frwc/kme_mic_b.php"><font color="#FFFFFF">- Heavy Duty Cables (450/750V)</font></a><br>
                          <a href="frwc/kme_mic_c.php"><font color="#FFFFFF">- Mineral Insulated cables accessories</font></a><br>
                          <a href="frwc/kme_mihc_a.php"><font color="#FFFFFF">- Mineral Insulated Heating Cables</font></a><br></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td></td>
                  <td height=7></td>
                </tr>
                <tr>
                  <td class=c>&nbsp;</td>
                  <td class=c><table width="325" border=0 cellpadding=0 cellspacing=0>
                    <tr>
                      <td colspan=2><a href="tc/tc_a.php"><img src=./images/goods03_t.gif></a></td>
                    </tr>
                    <tr>
                      <td width="120"><a href="tc/tc_a.php"><img src=./images/goods03_img.gif></a></td>
                      <td class=l_10><a href="tc/tc_a.php"><font color=#FFFFFF>- Type denotation ISOMIL-T</font></a><br>
                        <a href="tc/tc_b.php"><font color=#FFFFFF>- Processing of MI Cables</font></a><br>
                        <a href="tc/tc_c.php"><font color=#FFFFFF>- Material Designation</font></a><br>
                        <a href="tc/tc_c.php"><font color=#FFFFFF>- Composition and Physical Properties</font></a><br>
                        <a href="tc/tc_d.php"><font color=#FFFFFF>- Standard Program ISOMIL-T</font></a></td>
                    </tr>
                  </table></td>
                  <td class=c><table width="325" border=0 cellpadding=0 cellspacing=0>
                    <tr>
                      <td colspan=2><a href="wms/wms_a.php"><img src=./images/goods04_t.gif></a></td>
                    </tr>
                    <tr>
                      <td width="120"><a href="wms/wms_a.php"><img src=./images/goods02_img.gif></a></td>
                      <td class=l_10><a href="wms/wms_a.php"><font color=#FFFFFF>- Mechanism of Water Mist System</font></a><br>
                        <a href="wms/wms_d.php"><font color=#FFFFFF>- Power Unit (Pump/Cylinder type)</font></a><br>
                        <a href="wms/wms_e.php"><font color=#FFFFFF>- System Installation</font></a><br>
                        <a href="wms/wms_f.php"><font color=#FFFFFF>- AQUASYS Water-mist system</font></a><br>
                        <a href="wms/wms_i.php"><font color=#FFFFFF>- System example</font></a></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="7" class=c></td>
                  <td class=c></td>
                  <td class=c></td>
                </tr>
                <tr>
                  <td class=c>&nbsp;</td>
                  <td class=c><!-- 03 -->
                    <table width="325" border=0 cellpadding=0 cellspacing=0>
                      <tr>
                        <td colspan=2><a href="soc/soc_a.php"><img src=./images/soc_t.gif></a></td>
                      </tr>
                      <tr>
                        <td width="120"><a href="soc/soc_a.php"><img src=./images/soc_img.gif></a></td>
                        <td class=l_10><a href="soc/soc_a.php"><font color=#FFFFFF>- Application for Rail safety</font></a><br>
                          <a href="soc/soc_b.php"><font color=#FFFFFF>- Conductor Rail</font></a><br>
                          <a href="soc/soc_c.php"><font color=#FFFFFF>-  Fire fighting system for metro</font></a><br>
                          <a href="soc/soc_d.php"><font color=#FFFFFF>- Fire resistance system for metro</font></a><br>
                          <a href="soc/soc_e.php"><font color=#FFFFFF>- Platform screen door</font></a></td>
                      </tr>
                    </table></td>
                  <td class=c><!-- 06 -->
                    <table width="325" border=0 cellpadding=0 cellspacing=0>
                      <tr>
                        <td colspan=2><img src=./images/goods06_t.gif></td>
                      </tr>
                      <tr>
                        <td height="3"></td>
                      </tr>                      
                      <tr>
                        <td width="120"><a href="sm/sm_a.php"><img src=./images/goods06_img.gif></a></td>
                        <td class=l_10 valign="top"><a href="sm/sm_a.php"><font color=#FFFFFF>- Patent Registration No.10-0923663</font></a><br>
                         <!--a href="sm/sm_a.php"><font color=#FFFFFF>- Introduction</font></a><br>
                         <a href="sm/sm_b.php"><font color=#FFFFFF>- Reference</font></a><br--></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
            </tr>
            <tr>
                <td colspan=2 background=./images/goods_bg_bottom.gif style="background-repeat:no-repeat;" width=705 height=24 align=center>
                    <!--  goods -->
                    <!--  goods -->
                </td>
            </tr>
            <tr>
                <td height=12></td>
            </tr>
            <tr>
                <td><img src=./images/history.gif border="0" usemap="#Map"></td>
                <td><img src=./images/icon.gif usemap=#icon></td>
            </tr>
            </table>

            <map name="icon">
            <area shape="rect" coords="1,1,142,68" href="/renewal/customer_center/design_request.php" >
            <area shape="rect" coords="1,75,142,122" href="/renewal/contact_us/contact_info.php" >
            </map>
            <!-- right -->
        </td>
    </tr>
    </table>
    <!-- CONTENT  -->

    <!--  BOTTOM -->
    <table cellpadding=0 cellspacing=0 border=0 width=980>
    <tr><td colspan=2 height=20></td></tr>
    <tr>
      <td></td>
      <td><img src=./images/copy.gif></td>
    </tr>
    <tr>
        <td width=211></td>
        <td height="20">&nbsp;</td>
    </tr>
    </table>
    <!--  BOTTOM -->
    </td>
</tr>
</table>
</center>

<div id="visual" style="position:absolute; top:865px; margin-left:800px; z-index:1;" align="center">
<img src="images/gsi_banner.gif" border="0" usemap="#gsi_link"></a>
<map name="gsi_link" id="gsi_link">
  <area shape="rect" coords="11,9,57,32" href="http://glastone21.com" target="_blank">
  <area shape="rect" coords="62,8,153,34" href="http://gsidoor.com" target="_blank">
</map>
</div>

<map name="Map">
  <area shape="rect" coords="25,31,145,64" href="http://www.koreaeht.com/renewal/pdf/Chromalox.pdf" target="_blank">
  <area shape="rect" coords="152,31,273,64" href="http://www.koreaeht.com/renewal/pdf/ISOMIL.pdf" target="_blank"">
  <area shape="rect" coords="282,31,402,64" href="http://www.koreaeht.com/renewal/pdf/AQUASYS.pdf" target="_blank">
  <area shape="rect" coords="410,31,530,64" href="http://www.koreaeht.com/renewal/pdf/KME.pdf" target="_blank">
</map>
</BODY>
</HTML>