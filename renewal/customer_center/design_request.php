<?
$page_type = "type3";
include "../include/head.php";
?>


<script>

 function check_submit()
 {

  if(!write.name1.value) {
     alert("Please Input Name!!");
     write.name1.focus();
     return false;
  }
  if(!write.email.value) {
     alert("Please Input E-mail!!");
     write.email.focus();
     return false;
  }

  return true;
  }

</script>
    <!-- CONTENT  -->
    <table cellpadding=0 cellspacing=0 border=0>
    <tr>
        <td colspan=2 height=203></td>
    </tr>
    <tr>
        <td rowspan=3 width=48></td>
        <td><img src=./images/box_01.gif></td>
    </tr>
    <tr>
        <td background=./images/box_02.gif style="background-repeat:repeat-y;">
            <table cellpadding=0 cellspacing=0 border=0>
            <tr>
                <td class=st width=185>
				<? include "../include/left_menu_c.php"; ?>
                </td>
                <td valign=top><img src=./images/line.gif></td>
                <td valign=top>
                    <!-- content -->
                    <table cellpadding=0 cellspacing=0 border=0>
                    <tr>
                        <td background=./images/st_bg.gif style="background-repeat:no-repeat;" width=688 height=100>
                            <!-- sst -->
                            <table cellpadding=0 cellspacing=0 border=0 width=100%>
                            <tr>
                                <td class=sst><img src=./images/sst/sst03_02.gif></td>
                            </tr>
                            </table>
                        </td>
                    <tr>
                        <td class=c>
                        <!-- content -->
   <table cellSpacing="0" cellPadding="0" width="650" border="0">
      <tr>
        <td align="middle">
        <b>&nbsp;<font face="����" size="3">Electric Heat Trace System Design Requests</font><br>
��      </b>
        <table cellSpacing="1" cellPadding="2" width="98%" align="center" bgColor="#f2f2f2" border="0">
          <tr>
            <td bgColor="#f7f7f7">
            <table cellSpacing="1" cellPadding="10" width="100%" align="center" bgColor="#e2e2e2" border="0">
              <tr>
                <td class="ver12px" bgColor="#ffffff"><font color="#555555">
                <img src="images/dot.gif" width="6" height="7">
                Use this form to request a bundle design and quotation.<br>
                <img src="images/dot.gif" width="6" height="7">
                Please provide this following contact information.</font></td>
              </tr>
            </table>
            </td>
          </tr>
        </table>
        <br>
        <table style="PADDING-LEFT: 8px" cellSpacing="0" cellPadding="0" width="650" border="0">
          <tr>
            <td>
            <table cellSpacing="0" cellPadding="0" width="650" align="center" border="0">
              <form style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; MARGIN: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" name="write" onsubmit="return check_submit();" action="send_mail.php" method="post" encType="multipart/form-data">
                <tr>
                  <td colSpan="2" height="24">
                  <img src="images/bu01.gif" width="11" height="11" align="absmiddle">
                  <b>Required Input Facts </b></td>
                </tr>
                <tr>
                  <td bgColor="#cccccc" colSpan="2" height="1">��</td>
                </tr>
                <tr>
                  <td colSpan="2" height="10"></td>
                </tr>
                <tr align="right" height="24">
                  <td><font color="red">*</font> Name&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="name1" size="36"> </td>
                </tr>
                 <tr align="right" height="24">
                  <td><font color="red">*</font> Address&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="address" size="50"> </td>
                </tr>
                 <tr align="right" height="24">
                  <td><font color="red">*</font> Country&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="country" size="36"> </td>
                </tr>
                 <tr align="right" height="24">
                  <td><font color="red">*</font> Phone&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="phone" size="36"> </td>
                </tr>
                 <tr align="right" height="24">
                  <td><font color="red">*</font> Fax&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="fax" size="36"> </td>
                </tr>
                <tr align="right" height="24">
                  <td><font color="red">*</font> E-mail&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" maxLength="255" size="50" name="email"></td>
                </tr>
                   <tr align="right" height="24">
                  <td><font color="red">*</font> Preferred method of contact&nbsp;</td>
                  <td align="left">&nbsp;<input type="radio" value="e-mail" name="Pmc">e-mail  &nbsp;<input type="radio" value="phone" name="Pmc">phone  &nbsp;<input type="radio" value="fax" checked name="Pmc">fax  &nbsp;<input type="radio" value="mail" checked name="Pmc">mail </td>
                </tr>

                <tr>
                  <td colSpan="2" height="10"></td>
                </tr>
                <tr>
                  <td colSpan="2" height="24">
                  <img src="images/bu01.gif" width="11" height="11" align="absmiddle">
                  <b>Basic Input Facts </b></td>
                </tr>
                <tr>
                  <td bgColor="#cccccc" colSpan="2" height="1">��</td>
                </tr>
                <tr>
                  <td colSpan="2" height="10"></td>
                </tr>
                <tr align="right" height="24">
                  <td>Project Name&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" maxLength="255" size="50"  name="project" ></td>
                </tr>
                <tr align="right">
                   <td background="images/hline.gif" colspan="2" >&nbsp;</td>
                </tr>
                <tr align="right" height="24">
                  <td>Application&nbsp;</td>
                  <td align="left">&nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Freeze Protection" name="App">
                  Freeze Protection &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Temperature Maintaince" name="App">
                  Temperature Maintaince <br> &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Snow and Ice Melting" name="App">
                  Snow and Ice Melting&nbsp;&nbsp;&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Floor warming" name="App">
                  Floor warming<br>  &nbsp; Others&nbsp;<input class="input" type="text" maxLength="20"  name="AOther" size="49"> </td>
                </tr>
                 <tr align="right">
                   <td background="images/hline.gif" colspan="2" >&nbsp;</td>
                </tr>
                <tr align="right" height="24">
                  <td>Site&nbsp;</td>
                  <td align="left">&nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Indoor" name="site">
                  Indoor&nbsp;&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Outdoor" name="site"> Outdoor
                </td>
                </tr>
                 <tr align="right">
                   <td background="images/hline.gif" colspan="2" >&nbsp;</td>
                </tr>
                <tr align="right" height="24">
                  <td>Area Approval&nbsp;</td>
                  <td align="left">&nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="None" name="AA">None
                    &nbsp;&nbsp;&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="General Purpose" name="AA">
                   General Purpose&nbsp;&nbsp; &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Zone1" name="AA">
                  Zone1.Div1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Zone2" name="AA">
                  Zone2.Div2</td>
                </tr>
                 <tr align="right">
                   <td background="images/hline.gif" colspan="2" >&nbsp;</td>
                </tr>
                <tr align="right" height="24">
                  <td><font color="red"></font> Power Supply&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="vol" size="16"> Voltage &nbsp;&nbsp;&nbsp;<input class="input" type="text" maxLength="20"  name="pha" size="16"> Phase</td>
                </tr>
                 <tr align="right">
                   <td background="images/hline.gif" colspan="2" >&nbsp;</td>
                </tr>
                <tr align="right" height="24">
                  <td>Norminal Size&nbsp;</td>
                  <td align="left">&nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Pipe line" name="ns">
                  Pipe line&nbsp;&nbsp;<input class="input" type="text" maxLength="20"  name="pipe" size="26"><br>
                  &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Tank" name="ns">
                  Tank&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Hopper" name="ns">
                  Hopper &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Vessel" name="ns">
                  Vessel&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="radio"  value="Silo" name="ns">
                  Silo&nbsp;&nbsp;&nbsp; <input class="input" type="text" maxLength="20"  name="silo" size="26"> <br>  &nbsp; Others&nbsp;<input class="input" type="text" maxLength="20"  name="nsOther" size="49"> </td>
                </tr>
                 <tr align="right">
                   <td background="images/hline.gif" colspan="2" >&nbsp;</td>
                </tr>
                 <tr align="right" height="24">
                  <td>Temperature&nbsp;</td>
                  <td align="left">&nbsp;Max Temp'
                  <input class="input" type="text" maxLength="20"  name="MaxTemp" size="8">
                  <font face="����">��&nbsp; Min Temp</font>'
                  <input class="input" type="text" maxLength="20"  name="MinTemp" size="8">
                  <font face="����">��&nbsp; Opreating Temp'&nbsp;
                  <input class="input" type="text" maxLength="20"  name="OTemp" size="8"> ��
                  </font></td>
                </tr>
                 <tr align="right" height="24">
                  <td>Insulation Type&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="itype" size="36"> </td>
                </tr>
                 <tr align="right" height="24">
                  <td>Insulation Thickness&nbsp;</td>
                  <td align="left">&nbsp;<input class="input" type="text" maxLength="20"  name="ithick" size="36"> </td>
                </tr>

                <tr>
                  <td colSpan="2" height="10"></td>
                </tr>
                <tr>
                  <td colSpan="2" height="24">
                  ��</td>
                </tr>
                <tr>
                  <td bgColor="#cccccc" colSpan="2" height="1">��</td>
                </tr>
                <tr>
                  <td colSpan="2" height="10"></td>
                </tr>
                <tr align="right" height="24">
                  <td>Options&nbsp;</td>
                  <td align="left">&nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="checkbox"  value="1" name="cp">
                 Control panel &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="checkbox"  value="2" name="ek">
                End seal kit&nbsp;&nbsp;&nbsp; <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="checkbox"  value="3" name="tc">
                  Thermostat controller<br> &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="checkbox"  value="4" name="gf">
                  Glass Fiber Tape&nbsp;&nbsp;&nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="checkbox"  value="5" name="ftd">
                  FTD Sensor&nbsp;&nbsp; &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="checkbox"  value="6" name="at">
                  Aluminum Tape<br>  &nbsp;<input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="checkbox"  value="7" name="fc">
                  Power connection kit<br>
                  &nbsp; Others&nbsp;<input class="input" type="text" maxLength="20" value name="optionOthers" size="36"> </td>
                </tr>
                <tr align="right" height="70">
                  <td>Notes&nbsp;</td>
                  <td align="left">&nbsp;<textarea class="checkbox" name="notes" rows="4" cols="80"></textarea></td>
                </tr>
                <tr height="30">
                  <td align="middle" colSpan="2">
                  <input style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" type="image" src="/image/submit.gif" border="0" width="73" height="25"></td>
                </tr>
              </form>
            </table>
            <br>
            </td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
                        <!-- content -->                        </td>
                    </tr>
                    </table>
                    <!-- content -->
                </td>
            </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td><img src=./images/box_03.gif></td>
    </tr>
    </table>
    <!-- CONTENT  -->

<? include "../include/foot.php"; ?>