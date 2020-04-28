<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$g4[title] = "회원가입";

?>
<style type="text/css">
<!--
.tta { font-family:굴림; font-size:9pt; line-height:16pt; background:#ffffff; scrolling:no; border:1px solid #D0D0D0; } 
-->
</style>

<!-- Line top start -->
<br>
<table width="781" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td><img src="<?=$member_skin_path?>/img/out_bco01.gif" width="7" height="6"></td>
		<td background="<?=$member_skin_path?>/img/out_bbg01.gif"></td>
		<td><img src="<?=$member_skin_path?>/img/out_bco02.gif" width="6" height="6"></td>
	</tr>
	<tr>
		<td background="<?=$member_skin_path?>/img/out_bbg02.gif"></td>
		<td>
<!-- Line top end -->
<!-- Title start -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr height="28">
		<td class="small">
			<img src="<?=$member_skin_path?>/img/icon_dot01.gif" width="3" height="3" align="absmiddle" style="margin:0px 5px 2px 5px"><a href="http://koreaeht.com/">Home</a> > <b><?=$g4[title]?></b>
		</td>
		<td align="right" style="padding-right:10px;"><a href="javascript:history.back();"><img src="<?=$member_skin_path?>/img/btn_prepage.gif" width="77" height="18" border="0" align="absmiddle"></a></td>
	</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="10"></td></tr>
</table>
<!-- Title end -->

<table width="665" cellpadding="0" cellspacing="5" border="0" align="center">
<form name="fregister" method="post" action="javascript:fregister_submit(document.fregister);" autocomplete="off">
	<tr>
		<td align="center"><img src="<?=$member_skin_path?>/img/join_title01.gif" width="650" height="65"></td>
	</tr>
	<tr>
		<td align="center" style="padding:10px 10px 0px 10px;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr> 
					<td><img src="<?=$member_skin_path?>/img/join_title02.gif" width="106" height="22"></td>
				</tr>
				<tr> 
					<td style="padding-left:8px;"><textarea class="tta" name="textarea" cols="101" rows="8" readonly><?=get_text($config[cf_stipulation])?></textarea></td>
				</tr>
				<tr> 
					<td style="padding-left:8px;"><input type="checkbox" value="1" name="agree" id="agree"><label for="agree">예, 이용약관의 내용에 동의합니다</label></td>
				</tr>
			</table>
			<br><br>
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr> 
					<td><img src="<?=$member_skin_path?>/img/privacy.gif" width="106" height="22"></td>
				</tr>
				<tr> 
					<td style="padding-left:8px;"><textarea cols="101" rows=8 readonly class=tta><?=get_text($config[cf_privacy])?></textarea></td>
				</tr>
				<tr> 
					<td style="padding-left:8px;"><input type=checkbox value=1 name=agree2 id=agree2>&nbsp;<label for=agree2>개인정보보호정책을 읽었으며 내용에 동의합니다.</label></td>
				</tr>
			</table>
			
		</td>
	</tr>
	<? if ($config[cf_use_jumin]) { //주민등록번호를 사용한다면 ?>
	<tr>
		<td style="padding:0px 10px 0px 10px;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr> 
					<td><img src="<?=$member_skin_path?>/img/join_title03.gif" width="121" height="22"></td>
				</tr>
				<tr>
					<td style="padding-left:8px;">
						<table width=100% cellpadding="0" cellspacing="0" border="0" style='background:#F5F5F5; border:1px solid #D0D0D0;'>
							<tr>
								<td width="35" style='padding:10px 0px 10px 10px'><b>이름</b></td>
								<td width="90"><input class="ed" type="text" name="mb_name" itemname="이름" required minlength="2" nospace hangul style='width:80;'></td>
								<td width="90"><b>주민등록번호 </b></td>
								<td width="140"><input class="ed" type="text" name="mb_jumin" itemname="주민등록번호" required jumin minlength="13" maxlength="13" style='width:120;'></td>
								<td><font style="font-family:돋움; font-size:9pt; color:#FF7800;">※ 숫자 13자리 중간에 - 없이 입력하세요.</font></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr><td height="10"></td></tr>
				<tr>
					<td style="padding-left:8px;">※ 2001년 1월 26일 개정 공포된 '주민등록법'에 따라 주민등록번호를 프로그램으로 생성하거나<br />
					&nbsp;&nbsp;&nbsp;&nbsp;타인의 주민등록번호를 도용하는 경우에는 3년 이하의 징역 또는 1천만원 이하의 벌금에 처하게 됩니다.</td>
				</tr>
			</table>
		</td>
	</tr>
	<? } ?>
	<tr>
		<td style="padding:0px 10px 0px 10px;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td align="left"><img src="<?=$member_skin_path?>/img/join_title05.gif" width="258" height="22"></td>
					<td align="right">
					<input type="image" width="90" height="25" src="<?=$member_skin_path?>/img/btn_join_agreed.gif" border="0">
					<a href="<?=$g4['path']?>/"><img src="<?=$member_skin_path?>/img/btn_join_cancel.gif" width="90" height="25" border="0"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<!-- Line bottom start -->
		</td>
		<td background="<?=$member_skin_path?>/img/out_bbg03.gif"></td>
	</tr>
	<tr>
		<td><img src="<?=$member_skin_path?>/img/out_bco03.gif" width="7" height="6"></td>
		<td background="<?=$member_skin_path?>/img/out_bbg04.gif"></td>
		<td><img src="<?=$member_skin_path?>/img/out_bco04.gif" width="6" height="6"></td>
	</tr>
</table>
<!-- Line bottom end -->

</form>

<script language="javascript">
function fregister_submit(f) {
    if (!f.agree.checked) {
        alert("회원가입약관의 내용에 동의해야 회원가입 하실 수 있습니다.");
        f.agree.focus();
        return;
    }

    if (!f.agree2.checked) {
        alert("개인정보보호정책의 내용에 동의해야 회원가입 하실 수 있습니다.");
        f.agree2.focus();
        return;
    }

    f.action = "./register_form.php";
    f.submit();
}

if (typeof(document.fregister.mb_name) != "undefined")
    document.fregister.mb_name.focus();
</script>
