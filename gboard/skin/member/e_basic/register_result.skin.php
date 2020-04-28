<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 

$g4[title] = "회원가입완료";

?>
<!-- Line top start -->
<meta http-equiv=refresh content="3;url='<?=$g4['path']?>/'"> <!-- 3초후 페이지 자동 이동 -->
<table width="678" border="0" cellpadding="0" cellspacing="0">
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
			<img src="<?=$member_skin_path?>/img/icon_dot01.gif" width="3" height="3" align="absmiddle" style="margin:0px 5px 2px 5px"><a href="<?=$g4['path']?>/">Home</a> > <b><?=$g4[title]?></b>
		</td>
		<td align="right" style="padding-right:10px;"><a href="<?=$g4[url]?>/"><img src="<?=$member_skin_path?>/img/btn_go_home.gif" width="67" height="18" border="0" align="absmiddle"></a></td>
	</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="15"></td></tr>
</table>
<!-- Title end -->

<table width="665" cellpadding="0" cellspacing="5" border="0" align="center">
<form name="fregister" method="post" action="javascript:fregister_submit(document.fregister);" autocomplete="off">
	<tr>
		<td colspan=3 align="center"><img src="<?=$member_skin_path?>/img/join_result_title01.gif" width="650" height="65"></td>
	</tr>
	<tr><td colspan=3 height="10"></td></tr>
	<tr>
		<td width="5"></td>
		<td style="padding:10px; border:5px solid #F3F3F3;">
			<b><?=$mb[mb_name]?></b> 님의 회원가입을 진심으로 축하합니다.
			<p>회원님의 아이디는 <b><?=$mb[mb_id]?></b> 입니다.
			<p>회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.
			<p>아이디, 비밀번호 분실시에는 회원가입시 입력하신 비밀번호 분실시 질문, 답변을 이용하여 찾을 수 있습니다.
			<? if ($config[cf_use_email_certify]) { ?>
			<p>E-mail(<?=$mb[mb_email]?>)로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.
			<? } ?>
			<p>회원의 탈퇴는 언제나 가능하며 탈퇴 후 일정기간이 지난 후, 회원님의 모든 소중한 정보는 삭제하고 있습니다.
			<p>감사합니다.
		</td>
		<td width="5"></td>
	</tr>
	<tr><td colspan=3 height="5"></td></tr>
	<tr>
		<td colspan=3 style="padding-left:10px"><img src="<?=$member_skin_path?>/img/join_result_title02.gif" width="180" height="22"></td>
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
