<?
$page_type = "type1";
include "../include/head.php";
?>


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
				<? include "../include/left_menu_a.php"; ?>
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
                                <td class=sst><img src=./images/sst/sst01_05.gif></td>
                            </tr>
                            </table>
                        </td>
                    <tr>
                        <td class=c>
                        <!-- content -->
                            <br>
                            <table cellpadding=0 cellspacing=0 border=0>
                            <tr>
                                <td background=company/cer_bg.gif style="background-repeat:no-repeat;" width=623 height=476 valign=top>
                                    <script>
                                    function ShowInsu(ix){

                                    for(i=1;i<=9;i++){

                                    var obj = document.getElementById("subins" + i );
                                    var obj_img  = document.getElementById("img_" + i );

                                    if(i == ix){
                                    obj.style.display = "";
                                    obj_img.src = "company/cerbar_0"+ i +".gif"
                                    }else{
                                    obj.style.display = "none";
                                    obj_img.src = "company/cerbar_0"+ i +".gif"
                                    }
                                    }
                                    }
                                    </script>

                                    <table cellpadding=0 cellspacing=0 border=0 width=100%>
                                    <tr><td height=10></td></tr>
                                    <tr>
                                        <td class=l_20 width=303>
                                            <table cellpadding=0 cellspacing=0 border=0>
                                            <tr><td><img id="img_1" style="cursor:hand;" onmouseover="ShowInsu(1)" src="company/cerbar_01.gif"></td></tr>
                                            <tr><td><img id="img_2" style="cursor:hand;" onmouseover="ShowInsu(2)" src="company/cerbar_02.gif"></td></tr>
                                            <tr><td><img id="img_3" style="cursor:hand;" onmouseover="ShowInsu(3)" src="company/cerbar_03.gif"></td></tr>
                                            <tr><td><img id="img_4" style="cursor:hand;" onmouseover="ShowInsu(4)" src="company/cerbar_04.gif"></td></tr>
                                            <tr><td><img id="img_5" style="cursor:hand;" onmouseover="ShowInsu(5)" src="company/cerbar_05.gif"></td></tr>
                                            <tr><td><img id="img_6" style="cursor:hand;" onmouseover="ShowInsu(6)" src="company/cerbar_06.gif"></td></tr>
                                            <tr><td><img id="img_7" style="cursor:hand;" onmouseover="ShowInsu(7)" src="company/cerbar_07.gif"></td></tr>
                                            <tr><td><img id="img_8" style="cursor:hand;" onmouseover="ShowInsu(8)" src="company/cerbar_08.gif"></td></tr>
                                            <tr><td><img id="img_9" style="cursor:hand;" onmouseover="ShowInsu(9)" src="company/cerbar_09.gif"></td></tr>                                                                                        
                                            <tr><td height="80"></td></tr>
                                            </table>
                                        </td>
                                        <td class=l_10 width=320>
                                            <table cellpadding=0 cellspacing=0 border=0>
                                            <tr id="subins1" style="display:;">
                                            <td><img src=company/cerimg_01.gif></a></td>
                                            </tr>

                                            <tr id="subins2" style="display:none;">
                                            <td><img src=company/cerimg_02.gif></a></td>
                                            </tr>

                                            <tr id="subins3" style="display:none;">
                                            <td><img src=company/cerimg_03.gif></a></td>
                                            </tr>

                                            <tr id="subins4" style="display:none;">
                                            <td><img src=company/cerimg_04.gif></a></td></tr>

                                            <tr id="subins5" style="display:none;">
                                            <td><img src=company/cerimg_05.gif></a></td></tr>

                                            <tr id="subins6" style="display:none;">
                                            <td><img src=company/cerimg_06.gif></a></td></tr>

                                            <tr id="subins7" style="display:none;">
                                            <td><img src=company/cerimg_07.gif></a></td></tr>

                                            <tr id="subins8" style="display:none;">
                                            <td><img src=company/cerimg_08.gif></a></td></tr>
                                            
                                            <tr id="subins9" style="display:none;">
                                            <td><img src=company/cerimg_09.gif></a></td></tr>                                                                                        

                                            </table>
                                        </td>
                                    </tr>
                                    </table>
                                </td>
                            </tr>
                            </table>
                        <!-- content -->
                        </td>
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