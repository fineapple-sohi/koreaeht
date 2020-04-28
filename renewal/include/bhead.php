<HTML>
<HEAD>
<TITLE>- KOREA EHT -</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=EUC-kr">
<LINK HREF="/renewal/include/style.css" rel="stylesheet">
<script language="JavaScript" src="/include/fla.js"></script>
</HEAD>
<body background=../../../../renewal/images/bg.gif style="background-repeat:repeat-y;">
<!-- 스크롤 배너 내용 시작-->

<div id=divMenu style="position:absolute; left:970; top:500" z-index:1000;>
<a href=#><img src=/renewal/include/top.gif></a>
</div>
<!-- 스크롤 배너 내용 끝 -->



<!-- 스크롤 배너 스크립트 시작 -->
<script language="javascript">
<!--
var bNetscape4plus = (navigator.appName == "Netscape" && navigator.appVersion.substring(0,1) >= "4");
var bExplorer4plus = (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.substring(0,1) >= "4");
function CheckUIElements(){
      var yMenuFrom, yMenuTo, yButtonFrom, yButtonTo, yOffset, timeoutNextCheck;

      if ( bNetscape4plus ) {
              yMenuFrom   = document["divMenu"].top;
              yMenuTo     = top.pageYOffset + 500; //넷스케이프용 최초 레이어 좌표 값
      }
      else if ( bExplorer4plus ) {
              yMenuFrom   = parseInt (divMenu.style.top, 10);
              yMenuTo     = document.body.scrollTop + 500; //익스플로러용 최초 레이어 좌표 값
      }

      timeoutNextCheck = 500;

      if ( Math.abs (yButtonFrom - (yMenuTo + 152)) < 6 && yButtonTo < yButtonFrom ) {
              setTimeout ("CheckUIElements()", timeoutNextCheck);
              return;
      }

      if ( yButtonFrom != yButtonTo ) {
              yOffset = Math.ceil( Math.abs( yButtonTo - yButtonFrom ) / 10 );
              if ( yButtonTo < yButtonFrom )
                      yOffset = -yOffset;

              if ( bNetscape4plus )
                      document["divLinkButton"].top += yOffset;
              else if ( bExplorer4plus )
                      divLinkButton.style.top = parseInt (divLinkButton.style.top, 10) + yOffset;

              timeoutNextCheck = 10;
      }
      if ( yMenuFrom != yMenuTo ) {
              yOffset = Math.ceil( Math.abs( yMenuTo - yMenuFrom ) / 20 );
              if ( yMenuTo < yMenuFrom )
                      yOffset = -yOffset;

              if ( bNetscape4plus )
                      document["divMenu"].top += yOffset;
              else if ( bExplorer4plus )
                      divMenu.style.top = parseInt (divMenu.style.top, 10) + yOffset;

              timeoutNextCheck = 10;
      }

      setTimeout ("CheckUIElements()", timeoutNextCheck);
}

function OnLoad()
{
      var y;
      if ( top.frames.length )
      if ( bNetscape4plus ) {
              document["divMenu"].top = top.pageYOffset + 286; //넷스케이프용 로딩시 시작 레이어 좌표 값
              document["divMenu"].visibility = "visible";
      }
      else if ( bExplorer4plus ) {
              divMenu.style.top = document.body.scrollTop + 286; //익스플로러용 로딩시 시작 레이어 좌표 값
              divMenu.style.visibility = "visible";
      }
      CheckUIElements();
      return true;
}
OnLoad();
//-->
</script>
<!-- 스크롤 배너 스크립트 끝 -->

        <div id="textimg" style="position:absolute; left:240px; top:123px; z-index:100;">
        <table cellpadding=0 cellspacing=0 border=0>
        <tr>
            <td><script>rei('/renewal/include/text_img.swf','/include/text_img.swf','364','100','#FFFFFF','high','text_img')</script></td></tr>
        </table>
        </div>

        <div id="map" style="position:absolute; left:612px; top:85px; z-index:1;">
        <table cellpadding=0 cellspacing=0 border=0>
        <tr>
            <td><img src=/renewal/images/map.gif></td></tr>
        </table>
        </div>

        <div id="scable" style="position:absolute; left:0px; top:52px; z-index:10;">
        <table cellpadding=0 cellspacing=0 border=0>
        <tr>
            <td><script>rei('/include/scable_img.swf','/include/scable_img.swf','250','350','#FFFFFF','high','scable')</script></td></tr>
        </table>
        </div>


        <div id="search" style="position:absolute; left:285px; top:257px; z-index:30;">
        <table cellpadding=0 cellspacing=0 border=0 class=c>
        <tr><!-- search -->
            <td background=/renewal/images/s_search_bg.gif style="background-repeat:no-repeat;" width=334 height=65>
                <table cellpadding=0 cellspacing=0 border=0 width=290>
                <tr>
                    <td><img src=/renewal/images/s_search_t.gif></td>
                    <td background=/renewal/images/s_input_bg.gif  style="padding : 0 0 0 5;" width=133 height=16><input type="text" class="Box03 TxtTahoma"  maxlength="24" style="width:130px;"></td>
                    <td class=r><a href="/renewal/ehts/ehts_c.php"><img src=/renewal/images/btn_s_search.gif></a></td>
                </tr>
                <tr><td height=5></td></tr>
                </table>
            </td>
        </tr>
        </table>
        </div>

<table cellpadding=0 cellspacing=0 border=0 width =100% height=100%>
<tr>
<td background=/renewal/images/mbg.jpg style="background-repeat:no-repeat;" valign=top>
    <!-- TOP  -->
    <table cellpadding=0 cellspacing=0 border=0 height=84>
    <tr>
        <td class=logo><a href=/index.php><img src=/renewal/images/logo.gif></a></td>
        <td><!-- menu -->
            <table cellpadding=0 cellspacing=0 border=0>
            <tr>
                <td background=/renewal/images/menu_bg.gif style="background-repeat:no-repeat;" width=714 height=38>
                    <div id="menu" style="position:relative; visibility: visible;left:0px; top:-2px; z-index:20;">
                    <table cellpadding=0 cellspacing=0 border=0>
                    <tr>
                        <td><script>rei('/renewal/include/menu.swf?pageNum=<?=substr($page_type,4,1)?>"','/renewal/include/menu.swf','714','38','#FFFFFF','high','menu')</script></td>
                    </tr>
                    </table>
                    </div>
                </td>
            </tr>
            </table><!-- menu -->
        </td>
    </tr>
    </table>
    <!-- TOP -->

