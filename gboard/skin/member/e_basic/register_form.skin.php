<?php
if (!defined("_GNUBOARD_")) exit; // ���� ������ ���� �Ұ�

$g4[title] = "ȸ���������";

?>

<style type="text/css">
<!--
.m_title    { PADDING-LEFT: 20px; PADDING-TOP: 2px; PADDING-BOTTOM: 2px; width:120; BACKGROUND-COLOR: #F5F5F5; border: #ffffff 1px solid; }
.m_padding  { PADDING:5px; background-color: #FFFFFF; }
.m_padding2 { PADDING-LEFT: 0px; PADDING-top: 5px; PADDING-BOTTOM: 0px; }
.m_padding3 { PADDING-LEFT: 0px; PADDING-top: 5px; PADDING-BOTTOM: 5px; }
.m_text     { BORDER: #D3D3D3 1px solid; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff; }
.m_text2    { BORDER: #D3D3D3 1px solid; HEIGHT: 18px; BACKGROUND-COLOR: #F5F5F5; }
.m_textarea { BORDER: #D3D3D3 1px solid; BACKGROUND-COLOR: #ffffff; WIDTH: 100%; WORD-BREAK: break-all; }
.w_message  { font-family:����; font-size:9pt; color:#4B4B4B; }
.w_norobot  { font-family:����; font-size:9pt; color:#BB4681; }
.w_hand     { cursor:pointer; }
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
			<img src="<?=$member_skin_path?>/img/icon_dot01.gif" width="3" height="3" align="absmiddle" style="margin:0px 5px 2px 5px"><a href="<?=$g4['path']?>/">Home</a> > <b><?=$g4[title]?></b>
		</td>
		<td align="right" style="padding-right:10px;"><a href="javascript:history.back();"><img src="<?=$member_skin_path?>/img/btn_prepage.gif" width="77" height="18" border="0" align="absmiddle"></a></td>
	</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr><td height="1" bgcolor="#E9E9E9"></td></tr>
	<tr><td height="10"></td></tr>
</table>
<!-- Title end -->

<script language="javascript" src="<?=$g4[path]?>/js/md5.js"></script>
<script language="javascript" src="<?=$g4[path]?>/js/sideview.js"></script>

<table width="665" cellpadding="0" cellspacing="5" border="0" align="center">
<form name=fregisterform method=post action="javascript:fregisterform_submit(document.fregisterform);" enctype="multipart/form-data" autocomplete="off">
<input type=hidden name=w                value="<?=$w?>">
<input type=hidden name=url              value="<?=$urlencode?>">
<input type=hidden name=mb_jumin         value="<?=$jumin?>">
<input type=hidden name=mb_id_enabled    value="" id="mb_id_enabled">
<input type=hidden name=mb_nick_enabled  value="" id="mb_nick_enabled">
<input type=hidden name=mb_email_enabled value="" id="mb_email_enabled">
	<tr>
		<td align="center"><img src="<?=$member_skin_path?>/img/join_title01.gif" width="650" height="65"></td>
	</tr>
	<tr>
		<td align="center" style="padding:10px 10px 0px 10px;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td align="left"><img src="<?=$member_skin_path?>/img/join_form_title02.gif" width="79" height="22"></td>
				</tr>
				<tr>	
					<td colspan="2" height="1" bgcolor="#D6D6D6"></td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
				<tr>
					<TD class=m_title>������̵�</TD>
					<TD class=m_padding>
						<INPUT class=m_text maxLength=20 size=20 name="mb_id" minlength="3" alphanumericunderline itemname="���̵�" required value="<?=$member[mb_id]?>" <?= ($w == '') ? 'required' : "readonly style='background-color:#F5F5F5;'";?> onchange="fregisterform.mb_id_enabled.value='';">
						&nbsp;<? if ($w == "") { ?><a href="javascript:mb_id_check();"><img width="58" height="18" src="<?=$member_skin_path?>/img/btn_repeat_check.gif" border=0 align=absmiddle></a><? } ?>
							<table height=25 cellspacing=0 cellpadding=0 border=0>
								<tr><td><font color="#66A2C8">�� ������, ����, _ �� �Է� ����. �ּ� 3���̻� �Է��ϼ���.</font></td></tr>
							</table>
					</TD>
				</tr>
				<tr>
					<TD class=m_title>��й�ȣ</TD>
					<TD class=m_padding><INPUT class=m_text type=password name="mb_password" size=20 maxlength=20 <?=($w=="")?"required":"";?> itemname="��й�ȣ"></TD>
				</tr>
				<tr>
					<TD class=m_title>��й�ȣ Ȯ��</TD>
					<TD class=m_padding><INPUT class=m_text type=password name="mb_password_re" size=20 maxlength=20 <?=($w=="")?"required":"";?> itemname="��й�ȣ Ȯ��"></TD>
				</tr>
				<tr>
					<TD class=m_title>��й�ȣ �нǽ� ����</TD>
					<TD class=m_padding>
					<select name=mb_password_q_select onchange="this.form.mb_password_q.value=this.value;">
						<option value="">�����Ͻʽÿ�.</option>
						<option value="���� �����ϴ� ĳ���ʹ�?">���� �����ϴ� ĳ���ʹ�?</option>
						<option value="Ÿ���� �𸣴� �ڽŸ��� ��ü����� �ִٸ�?">Ÿ���� �𸣴� �ڽŸ��� ��ü����� �ִٸ�?</option>
						<option value="�ڽ��� �λ� �¿����?">�ڽ��� �λ� �¿����?</option>
						<option value="�ʵ��б� �� ��￡ ���� ¦�� �̸���?">�ʵ��б� �� ��￡ ���� ¦�� �̸���?</option>
						<option value="������� ���� �������� ģ�� �̸���?">������� ���� �������� ģ�� �̸���?</option>
						<option value="���� ��￡ ���� ������ ������?">���� ��￡ ���� ������ ������?</option>
						<option value="ģ���鿡�� �������� ���� � �� ������ �ִٸ�?">ģ���鿡�� �������� ���� � �� ������ �ִٸ�?</option>
						<option value="�ٽ� �¾�� �ǰ� ���� ����?">�ٽ� �¾�� �ǰ� ���� ����?</option>
						<option value="���� ������ �� ��ȭ��?">���� ������ �� ��ȭ��?</option>
						<option value="���� å �߿��� �����ϴ� ������ �ִٸ�?">���� å �߿��� �����ϴ� ������ �ִٸ�?</option>
						<option value="��￡ ���� �߾��� ��Ҵ�?">��￡ ���� �߾��� ��Ҵ�?</option>
						<option value="�λ� ��� ���� å �̸���?">�λ� ��� ���� å �̸���?</option>
						<option value="�ڽ��� ���� ��1ȣ��?">�ڽ��� ���� ��1ȣ��?</option>
						<option value="�޾Ҵ� ���� �� ��￡ ���� ��Ư�� ������?">�޾Ҵ� ���� �� ��￡ ���� ��Ư�� ������?</option>
						<option value="�ڽ��� �ι�°�� �����ϴ� �ι���?">�ڽ��� �ι�°�� �����ϴ� �ι���?</option>
						<option value="�ƹ����� ������?">�ƹ����� ������?</option>
						<option value="��Ӵ��� ������?">��Ӵ��� ������?</option>
					</select>
						<table width="350" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class=m_padding2><input class=m_text type=text name="mb_password_q" size=55 required itemname="��й�ȣ �нǽ� ����" value="<?=$member[mb_password_q]?>"></td>
							</tr>
						</table>
					</TD>
				</tr>
				<tr>
					<TD class=m_title>��й�ȣ �нǽ� �亯</TD>
					<TD class=m_padding><input class=m_text type=text name='mb_password_a' size=38 required itemname='��й�ȣ �нǽ� �亯' value='<?=$member[mb_password_a]?>'></TD>
				</tr>
				<tr>
					<TD class=m_title>�̸�</TD>
					<TD class=m_padding>
					<!-- �ѱ۸� �Է¹��� ��� <INPUT name=mb_name itemname="�̸�" required minlength="2" nospace hangul value="<?=$member[mb_name]?>" <?=$member[mb_name]?"readonly class=m_text2":"class=m_text";?>> -->
					<INPUT name=mb_name itemname="�̸�" required minlength="2" nospace value="<?=$member[mb_name]?>" <?=$member[mb_name]?"readonly class=m_text2":"class=m_text";?>>
					</TD>
				</tr>

				<? if ($member[mb_nick_date] <= date("Y-m-d", $g4[server_time] - ($config[cf_nick_modify] * 86400))) { // ����������� �����ٸ� �������� ?>
				<input type=hidden name=mb_nick_default value='<?=$member[mb_nick]?>'>
				<tr>
					<TD class=m_title>�г���(����)</TD>
					<TD class='m_padding lh'>
					<input class=m_text type=text name='mb_nick' maxlength=20 minlength="2" required hangulalphanumeric itemname="�г���(����)" value='<?=$member[mb_nick]?>' onchange="fregisterform.mb_nick_enabled.value='';">
					&nbsp;<a href="javascript:mb_nick_check();"><img width="58" height="18" src="<?=$member_skin_path?>/img/btn_repeat_check.gif" border=0 align=absmiddle></a> (�ѱ�, ����, ���ڸ� ����)
					<br>������ �ٲٽø� ������ <?=(int)$config[cf_nick_modify]?>�� �̳����� ������ �ȵ˴ϴ�.
					</TD>
				</tr>
				<? } else { ?>
				<input type=hidden name="mb_nick" value="<?=$member[mb_nick]?>">
				<? } ?>

				<? if ($w=="") { ?>
				<tr>
					<TD class=m_title>�������</TD>
					<TD class=m_padding><input class=m_text type=text id=mb_birth name='mb_birth' size=8 maxlength=8 minlength=8 required numeric itemname='�������' value='<?=$member[mb_birth]?>' readonly title='���� �޷� �������� Ŭ���Ͽ� ��¥�� �Է��ϼ���.'>
					<a href="javascript:win_calendar('mb_birth', document.getElementById('mb_birth').value, '');"><img src='<?=$member_skin_path?>/img/calendar.gif' border=0 align=absmiddle title='�޷� - ��¥�� �����ϼ���'></a></TD>
				</tr>
				<? } else { ?>
				<input type=hidden name=mb_birth value='<?=$member[mb_birth]?>'>
				<? } ?>

				<? if ($member[mb_sex]) { ?>
				<input type=hidden name=mb_sex value='<?=$member[mb_sex]?>'>
				<? } else { ?>
				<tr>
					<TD class=m_title>����</TD>
					<TD class=m_padding>
						<select id=mb_sex name=mb_sex required itemname='����'>
							<option value=''>�����ϼ���
							<option value='F'>����
							<option value='M'>����
						</select>
		<script language="JavaScript">//document.getElementById('mb_sex').value='<?=$member[mb_sex]?>';</script>
                    </TD>
				</tr>
				<? } ?>

				<? if ($member[mb_level] >= $config[cf_icon_level]) { ?>
				<tr>
					<TD width="160" class=m_title>ȸ��������</TD>
					<TD class=m_padding><INPUT class=m_text type=file name='mb_icon' size=30>
						<table width="350" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class=m_padding3>* �̹��� ũ��� ����(<?=$config[cf_member_icon_width]?>�ȼ�)x����(<?=$config[cf_member_icon_height]?>�ȼ�) ���Ϸ� ���ּ���.<br>&nbsp;&nbsp;(gif�� ���� / �뷮:<?=number_format($config[cf_member_icon_size])?>����Ʈ ���ϸ� ��ϵ˴ϴ�.)
								<? if ($w == "u" && file_exists($mb_icon)) { ?>
								<br /><img src='<?=$mb_icon?>' align=absmiddle> <input type=checkbox name='del_mb_icon' value='1'>����
								<? } ?>
								</td>
							</tr>
						</table>
					</TD>
				</tr>
				<? } ?>

				<input type=hidden name='old_email' value='<?=$member[mb_email]?>'>
				<tr>
					<TD class=m_title>E-mail</TD>
					<TD class='m_padding lh'>
						<INPUT class=m_text type=text name='mb_email' size=38 maxlength=100 email required itemname='E-mail' value='<?=$member[mb_email]?>'>
						&nbsp;<a href="javascript:mb_email_check();"><img width="58" height="18" src="<?=$member_skin_path?>/img/btn_repeat_check.gif" border=0 align="absmiddle"></a>
						<? if ($config[cf_use_email_certify]) { ?>
						<? if ($w=='') { echo "<br>E-mail �� �߼۵� ������ Ȯ���� �� �����ϼž� ȸ�������� �Ϸ�˴ϴ�."; } ?>
						<? if ($w=='u') { echo "<br>E-mail �ּҸ� �����Ͻø� �ٽ� �����ϼž� �մϴ�."; } ?>
						<? } ?>
					</TD>
				</tr>
				
				<? if ($config[cf_use_homepage]) { ?>
				<tr>
					<TD class=m_title>Ȩ������</TD>
					<TD class=m_padding><input class=m_text type=text name='mb_homepage' size=38 maxlength=255 <?=$config[cf_req_homepage]?'required':'';?> itemname='Ȩ������' value='<?=$member[mb_homepage]?>'></TD>
				</tr>
				<? } ?>

				<? if ($config[cf_use_tel]) { ?>
				<tr>
					<TD class=m_title>������ȭ</TD>
					<TD class=m_padding><input class=m_text type=text name='mb_tel' size=20 maxlength=20 <?=$config[cf_req_tel]?'required':'';?> itemname='������ȭ' value='<?=$member[mb_tel]?>'></TD>
				</tr>
				<? } ?>
				
				<? if ($config[cf_use_hp]) { ?>
				<tr>
					<TD class=m_title>�޴���ȭ</TD>
					<TD class=m_padding><input class=m_text type=text name='mb_hp' size=20 maxlength=20 <?=$config[cf_req_hp]?'required':'';?> itemname='�޴���ȭ' value='<?=$member[mb_hp]?>'></TD>
				</tr>
				<? } ?>
				
				<? if ($config[cf_use_addr]) { ?>
				<tr>
					<TD class=m_title>�����ּ�</TD>
					<TD valign="middle" class=m_padding>
					<table width="330" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td height="25"><input class=m_text type=text name='mb_zip1' size=4 maxlength=3 readonly <?=$config[cf_req_addr]?'required':'';?> itemname='�����ȣ ���ڸ�' value='<?=$member[mb_zip1]?>'>
							- 
							<input class=m_text type=text name='mb_zip2' size=4 maxlength=3 readonly <?=$config[cf_req_addr]?'required':'';?> itemname='�����ȣ ���ڸ�' value='<?=$member[mb_zip2]?>'>
							&nbsp;<a href="javascript:;" onclick="win_zip('fregisterform', 'mb_zip1', 'mb_zip2', 'mb_addr1', 'mb_addr2');"><img width="58" height="18" src="<?=$member_skin_path?>/img/btn_post_search.gif" border=0 align=absmiddle></a></td>
						</tr>
						<tr>
							<td height="25" colspan="2"><input class=m_text type=text name='mb_addr1' size=60 readonly <?=$config[cf_req_addr]?'required':'';?> itemname='�ּ�' value='<?=$member[mb_addr1]?>'></td>
						</tr>
						<tr>
							<td height="25" colspan="2"><input class=m_text type=text name='mb_addr2' size=60 <?=$config[cf_req_addr]?'required':'';?> itemname='���ּ�' value='<?=$member[mb_addr2]?>'></td>
						</tr>
					</table>
					</TD>
				</tr>
				<? } ?>

				<? if ($config[cf_use_profile]) { ?>
				<tr>
					<TD class=m_title>�ڱ�Ұ�</TD>
					<TD class=m_padding><textarea name=mb_profile class=m_textarea rows=3 style='width:95%;' <?=$config[cf_req_profile]?'required':'';?> itemname='�ڱ� �Ұ�'><?=$member[mb_profile]?></textarea></TD>
				</tr>
				<? } ?>

				<? if ($config[cf_use_signature]) { ?>
				<tr>
					<TD class=m_title>����</TD>
					<TD class=m_padding><textarea name=mb_signature class=m_textarea rows=3 style='width:95%;' <?=$config[cf_req_signature]?'required':'';?> itemname='����'><?=$member[mb_signature]?></textarea></TD>
				</tr>
				<? } ?>
				
				<tr>
					<TD class=m_title>���ϸ�����</TD>
					<TD class=m_padding><input type=checkbox name=mb_mailling value='1' <?=($w=='' || $member[mb_mailling])?'checked':'';?>>���� ������ �ްڽ��ϴ�.</TD>
				</tr>
				<tr>
					<TD class=m_title>SMS ���ſ���</TD>
					<TD class=m_padding><input type=checkbox name=mb_sms value='1' <?=($w=='' || $member[mb_sms])?'checked':'';?>>�ڵ��� ���ڸ޼����� �ްڽ��ϴ�.</TD>
				</tr>

				<? if ($member[mb_open_date] <= date("Y-m-d", $g4[server_time] - ($config[cf_open_modify] * 86400))) { // �������� �������� �����ٸ� �������� ?>
				<input type=hidden name=mb_open_default value='<?=$member[mb_open]?>'>
				<tr>
					<TD class=m_title>��������</TD>
					<TD class=m_padding><input type=checkbox name=mb_open value='1' <?=($w=='' || $member[mb_open])?'checked':'';?>>�ٸ��е��� ���� ������ �� �� �ֵ��� �մϴ�.
					<br>&nbsp;&nbsp;&nbsp;&nbsp; ���������� �ٲٽø� ������ <?=(int)$config[cf_open_modify]?>�� �̳����� ������ �ȵ˴ϴ�.</TD>
				</tr>
				<? } else { ?>
				<input type=hidden name="mb_open" value="<?=$member[mb_open]?>">
				<? } ?>

				<? if ($w == "" && $config[cf_use_recommend]) { ?>
				<tr>
					<TD class=m_title>��õ�ξ��̵�</TD>
					<TD class=m_padding><input type=text name=mb_recommend size=20 class=m_text></TD>
				</tr>
				<? } ?>
				<? if ($w == "" && $config[cf_use_norobot]) { ?>
				<tr>
					<td height="28" class=m_title><?=$norobot_str?></td>
					<td class=m_padding><input class=m_text type=text name='wr_key' required itemname='�ڵ���Ϲ���' size=20>&nbsp;&nbsp;* ������ ������ <FONT COLOR="red">��������</font>�� ������� �Է��ϼ���.</td>
				</tr>
				<? } ?>
				<tr><td colspan="2" height="5"></td></tr>
				<tr>	
					<td colspan="2" height="1" bgcolor="#D6D6D6"></td>
				</tr>
			</table>
		</td>	
	</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<? if ($w=="") { ?>
	<tr>
		<td align="center">
			<INPUT type=image width="90" height="25" src="<?=$member_skin_path?>/img/btn_join_ok.gif" border=0 accesskey='s'> 
			<a href="javascript:history.back();"><img src="<?=$member_skin_path?>/img/btn_join_prev.gif" width="90" height="25" border="0"></a>
		</td>
	</tr>
	<? } else { ?>
	<tr>
		<td align="center">
			<INPUT type=image width="90" height="25" src="<?=$member_skin_path?>/img/btn_member_upd.gif" border=0 accesskey='s'> 
			<? if ($member[mb_level] <= $member[mb_id]) { ?>
			<a href="javascript:member_leave();"><img src="<?=$member_skin_path?>/img/btn_member_leave.gif" width="90" height="25" border=0></a> 
			<? } ?>
		</td>
	</tr>
	<? } ?>
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

<script language="Javascript">
with (document.fregisterform) {
    if (w.value == "")
        mb_id.focus();
    else {
        mb_password.focus();
        mb_nick_enabled.value = 1;
    }
}

// submit ���� ��üũ
function fregisterform_submit(f)
{
    if (f.w.value == "") {
        if (f.mb_id_enabled.value == "") {
            alert("ȸ�����̵� �ߺ�Ȯ���� ���ֽʽÿ�.");
            f.mb_id.focus();
            return;
        } else if (f.mb_id_enabled.value == -1) {
            alert("'"+f.mb_id.value+"'��(��) �̹� ���Ե� ȸ�����̵��̹Ƿ� ����Ͻ� �� �����ϴ�.");
            f.mb_id.focus();
            return;
        }
    }

    if ((f.w.value == "" && f.mb_nick_enabled.value == "") || 
        (f.w.value == "u" && f.mb_nick_enabled.value == "" && f.mb_nick.defaultValue != f.mb_nick.value)) {
        alert("���� �ߺ�Ȯ���� ���ֽʽÿ�.");
        f.mb_nick.focus();
        return;
    } else if (f.mb_nick_enabled.value == -1) {
        alert("'"+f.mb_nick.value+"'��(��) �̹� ��ϵ� �����̹Ƿ� ����Ͻ� �� �����ϴ�.");
        f.mb_nick.focus();
        return;
    }

    var id = prohibit_id_check(f.mb_id.value);
    if (id) {
        alert("'"+id+"'��(��) ����Ͻ� �� ���� ȸ�����̵��Դϴ�.");
        f.mb_id.focus();
        return;
    }

    if (f.mb_password.value != f.mb_password_re.value) {
        alert("�н����尡 ���� �ʽ��ϴ�.");
        f.mb_password_re.focus();
        return;
    }

    /*
    // ����� �� ���� ������ ����ϰ��� �ϴ� ��쿡�� �� �ּ��� �����Ͻʽÿ�.
    if (prohibit_id_check(f.mb_nick.value))
    {
        alert("'"+f.mb_nick.value + "'��(��) ����Ͻ� �� ���� �����Դϴ�.");
        f.mb_nick.focus();
        return;
    }
    */

    var domain = prohibit_email_check(f.mb_email.value);
    if (domain) {
        alert("'"+domain+"'��(��) ����Ͻ� �� ���� �����Դϴ�.");
        f.mb_email.focus();
        return;
    }

    if ((f.w.value == "" && f.mb_email_enabled.value == "") || 
        (f.w.value == "u" && f.mb_email_enabled.value == "" && f.mb_email.defaultValue != f.mb_email.value)) {
        alert("E-mail �ߺ�Ȯ���� ���ֽʽÿ�.");
        f.mb_email.focus();
        return;
    } else if (f.mb_email_enabled.value == -1) {
        alert("'"+f.mb_email.value+"'��(��) �̹� �ٸ� ȸ���� ����ϴ� E-mail�̹Ƿ� ����Ͻ� �� �����ϴ�.");
        return;
    }

    if (typeof f.mb_icon != "undefined") 
    {
        if (f.mb_icon.value) 
        {
            if (!f.mb_icon.value.toLowerCase().match(/.(gif)$/i)) 
            {
                alert("ȸ���������� gif ������ �ƴմϴ�.");
                f.mb_icon.focus();
                return;
            }
        }
    }

    if (typeof(f.mb_recommend) != 'undefined')
    {
        if (f.mb_id.value == f.mb_recommend.value)
        {
            alert("������ ��õ�� �� �����ϴ�.");
            f.mb_recommend.focus();
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

    f.action = "./register_form_update.php";
    f.submit();
}

// ȸ�����̵� �˻�
function mb_id_check()
{
    var f = document.fregisterform;

    if (f.mb_id.value == "") {
        alert("ȸ�� ���̵� �Է��ϼ���.");
        f.mb_id.focus();
        return;
    }

    var id = prohibit_id_check(f.mb_id.value);
    if (id) {
        alert("'"+id + "'��(��) ����Ͻ� �� ���� ȸ�����̵��Դϴ�.");
        f.mb_id.focus();
        return;
    }

    if (g4_charset.toUpperCase() == "UTF-8")
        win_open(g4_path+"/"+g4_bbs+"/member_id_check.php?mb_id="+encodeURI(document.fregisterform.mb_id.value), "hiddenframe");
    else
        win_open(g4_path+"/"+g4_bbs+"/member_id_check.php?mb_id="+document.fregisterform.mb_id.value, "hiddenframe");
}

// ���� �˻�
function mb_nick_check()
{
    var f = document.fregisterform;

    if (f.mb_nick.value == "") {
        alert("������ �Է��ϼ���.");
        f.mb_nick.focus();
        return;
    }

    var id = prohibit_id_check(f.mb_nick.value);
    if (id) {
        alert("'"+id + "'��(��) ����Ͻ� �� ���� �����Դϴ�.");
        f.mb_nick.focus();
        return;
    }

    if (f.mb_nick.defaultValue == f.mb_nick.value && f.mb_nick.value != "") {
        alert("������ �ٲ��� �ʾ����Ƿ� �ߺ�Ȯ�� �Ͻ� �ʿ䰡 �����ϴ�.");
        return;
    }

    if (g4_charset.toUpperCase() == "UTF-8")
        win_open(g4_path+"/"+g4_bbs+"/member_nick_check.php?mb_nick="+encodeURI(document.fregisterform.mb_nick.value), "hiddenframe");
    else
        win_open(g4_path+"/"+g4_bbs+"/member_nick_check.php?mb_nick="+document.fregisterform.mb_nick.value, "hiddenframe");
}

// E-mail �˻�
function mb_email_check()
{
    if (document.fregisterform.mb_email.value == "") {
        alert("E-mail�� �Է��ϼ���.");
        return;
    }

    if (g4_charset.toUpperCase() == "UTF-8")
        win_open(g4_path+"/"+g4_bbs+"/member_email_check.php?mb_email="+encodeURI(document.fregisterform.mb_email.value), "hiddenframe");
    else
        win_open(g4_path+"/"+g4_bbs+"/member_email_check.php?mb_email="+document.fregisterform.mb_email.value, "hiddenframe");
}

function mb_id_change()
{
    if (document.fregisterform.mb_id.value != document.fregisterform.mb_id.defaultValue)
        document.fregisterform.mb_id_enabled.value = "";
}

// ���� ���̵�, ���� �˻�
function prohibit_id_check(id)
{
    id = id.toLowerCase();

    var prohibit_id = "<?=trim(strtolower($config[cf_prohibit_id]))?>";
    var s = prohibit_id.split(",");
    var tmp_id;

    for (i=0; i<s.length; i++) 
    {
        /* �ΰ�����, ������2 �� ���� ���̵�� ���� ������� ���ϰ� �� ��쿡 �ּ��� �����ϼ���.
        tmp_id = s[i].toLowerCase();
        if (id.indexOf(tmp_id, 0) > -1)
        {
            return id;
        }
        */
        if (s[i] == id) 
            return id;
    }
    return "";
}

// ���� ���� ������ �˻�
function prohibit_email_check(email)
{
    email = email.toLowerCase();

    var prohibit_email = "<?=trim(strtolower(preg_replace("/(\r\n|\r|\n)/", ",", $config[cf_prohibit_email])));?>";
    var s = prohibit_email.split(",");
    var tmp = email.split("@");
    var domain = tmp[tmp.length - 1]; // ���� �����θ� ��´�

    for (i=0; i<s.length; i++) {
        if (s[i] == domain)
            return domain;
    }
    return "";
}

// ȸ��Ż��
function member_leave() 
{ 
    if (confirm("���� ȸ������ Ż�� �Ͻðڽ��ϱ�?")) 
            location.href = "<?=$g4[bbs_path]?>/member_confirm.php?url=member_leave.php"; 
} 
</script>
