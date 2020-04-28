-- MySQL dump 8.22
--
-- Host: localhost    Database: koreaeht
---------------------------------------------------------
-- Server version	3.23.53

--
-- Table structure for table 'zetyx_admin_table'
--

CREATE TABLE zetyx_admin_table (
  no int(11) NOT NULL auto_increment,
  group_no int(20) unsigned NOT NULL default '0',
  name varchar(40) NOT NULL default '',
  total_article int(20) NOT NULL default '0',
  skinname varchar(255) default NULL,
  header text,
  footer text,
  title varchar(255) default NULL,
  header_url varchar(255) default NULL,
  footer_url varchar(255) default NULL,
  bg_image varchar(255) default NULL,
  bg_color varchar(255) default '#ffffff',
  table_width int(4) NOT NULL default '95',
  memo_num int(3) NOT NULL default '15',
  page_num int(3) NOT NULL default '8',
  only_board char(1) NOT NULL default '1',
  cut_length int(11) NOT NULL default '0',
  use_category char(1) NOT NULL default '0',
  use_html char(1) NOT NULL default '1',
  use_filter char(1) NOT NULL default '1',
  use_status char(1) NOT NULL default '1',
  max_upload_size int(11) default '2097152',
  use_pds char(1) default '0',
  pds_ext1 varchar(255) default '',
  pds_ext2 varchar(255) default '',
  use_homelink char(1) NOT NULL default '0',
  use_filelink char(1) NOT NULL default '0',
  use_cart char(1) NOT NULL default '0',
  use_autolink char(1) NOT NULL default '1',
  use_showip char(1) NOT NULL default '0',
  use_comment char(1) NOT NULL default '1',
  use_formmail char(1) NOT NULL default '1',
  use_showreply char(1) NOT NULL default '1',
  use_secret char(1) NOT NULL default '1',
  use_alllist char(1) NOT NULL default '0',
  grant_html int(2) NOT NULL default '2',
  grant_list int(2) NOT NULL default '10',
  grant_view int(2) NOT NULL default '10',
  grant_comment int(2) NOT NULL default '10',
  grant_write int(2) NOT NULL default '10',
  grant_reply int(2) NOT NULL default '10',
  grant_delete int(2) NOT NULL default '1',
  grant_notice int(2) NOT NULL default '1',
  grant_view_secret int(2) NOT NULL default '1',
  filter text,
  avoid_tag text,
  avoid_ip text,
  PRIMARY KEY  (no),
  KEY group_no (group_no),
  KEY total_article (total_article),
  KEY name (name)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_admin_table'
--


INSERT INTO zetyx_admin_table VALUES (1,1,'freeboard',0,'nzeo_ver3','<div align=center>','</div>','','','','','white',95,20,10,'1',0,'','1','1','',2097152,'','','','','','','1','','1','1','1','1','',2,10,10,10,10,10,1,1,1,'8��,����,������,�һ���,����,����,����,����,�ϱ��,���,����,�ֳ�,�ֳ�,����,����,�ϱ��,��������,���,������,�ٺ�����,�û���,����,����,�ù�,����,���׶�,����,��õ��,��õid,��õ���̵�,��õid,��õ���̵�,��/õ/��,����,���,�ΰ���,��ģ��,��ģ��,���,�׽��ϴ�,�Ծ�,�Ե��,�����\r\n','a,img,embed,font,b,div,center,p,br\r\n','');
INSERT INTO zetyx_admin_table VALUES (2,1,'datacenter',18,'nzeo_ver3','<div align=center>','</div>','','','','','white',100,20,10,'1',0,'','1','1','',2097152,'1','','','','','','1','','1','1','1','1','',2,10,10,10,10,10,1,1,1,'8��,����,������,�һ���,����,����,����,����,�ϱ��,���,����,�ֳ�,�ֳ�,����,����,�ϱ��,��������,���,������,�ٺ�����,�û���,����,����,�ù�,����,���׶�,����,��õ��,��õid,��õ���̵�,��õid,��õ���̵�,��/õ/��,����,���,�ΰ���,��ģ��,��ģ��,���,�׽��ϴ�,�Ծ�,�Ե��,�����\r\n','a,img,embed,font,b,div,center,p,br\r\n','');

--
-- Table structure for table 'zetyx_board_category_datacenter'
--

CREATE TABLE zetyx_board_category_datacenter (
  no int(11) NOT NULL auto_increment,
  num int(11) NOT NULL default '0',
  name char(100) NOT NULL default '',
  PRIMARY KEY  (no),
  KEY name (name)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_board_category_datacenter'
--


INSERT INTO zetyx_board_category_datacenter VALUES (1,18,'�Ϲ�');
INSERT INTO zetyx_board_category_datacenter VALUES (2,0,'����');
INSERT INTO zetyx_board_category_datacenter VALUES (3,0,'�亯');

--
-- Table structure for table 'zetyx_board_category_freeboard'
--

CREATE TABLE zetyx_board_category_freeboard (
  no int(11) NOT NULL auto_increment,
  num int(11) NOT NULL default '0',
  name char(100) NOT NULL default '',
  PRIMARY KEY  (no),
  KEY name (name)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_board_category_freeboard'
--


INSERT INTO zetyx_board_category_freeboard VALUES (1,0,'�Ϲ�');
INSERT INTO zetyx_board_category_freeboard VALUES (2,0,'����');
INSERT INTO zetyx_board_category_freeboard VALUES (3,0,'�亯');

--
-- Table structure for table 'zetyx_board_comment_datacenter'
--

CREATE TABLE zetyx_board_comment_datacenter (
  no int(11) NOT NULL auto_increment,
  parent int(11) NOT NULL default '0',
  ismember int(20) NOT NULL default '0',
  name varchar(20) default NULL,
  password varchar(20) default NULL,
  memo text,
  ip varchar(15) default NULL,
  reg_date int(13) default NULL,
  PRIMARY KEY  (no),
  KEY parent (parent)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_board_comment_datacenter'
--


INSERT INTO zetyx_board_comment_datacenter VALUES (2,36,0,'���°�','442976bd222853a1','  �ȳ��Ͻʴϱ� ? \r\n��õ��û ü��������� �ٹ��ϴ� ���°� �Դϴ� \r\n\r\n������ �⸧���Ϸ��� Ȱ�� ������ �ϰ� �ֽ��ϴ�\r\n\r\n�̹�����  �¼��� ������������  �޼��ϰ� ��ȯ�Ͽ� �׿µ��� 80 ������ �����ϰ� �ͽ��ϴ� \r\n\r\n������������  �����Ͽ� ����ϰ����  ������  ������������  �Һ������� �ܻ� 220v   m�� 20w  +/- 5%  2ȸ�� �� �����  100m ���� �����ϰ� �ͽ��ϴ� \r\n\r\n��������  ���θ�  �˷� �ֽñ� �ٶ��ϴ�  \r\n\r\n�����ϴٸ�  ������  ��������  �˷� �ּ��� \r\n','210.179.205.235',1117693010);

--
-- Table structure for table 'zetyx_board_comment_freeboard'
--

CREATE TABLE zetyx_board_comment_freeboard (
  no int(11) NOT NULL auto_increment,
  parent int(11) NOT NULL default '0',
  ismember int(20) NOT NULL default '0',
  name varchar(20) default NULL,
  password varchar(20) default NULL,
  memo text,
  ip varchar(15) default NULL,
  reg_date int(13) default NULL,
  PRIMARY KEY  (no),
  KEY parent (parent)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_board_comment_freeboard'
--



--
-- Table structure for table 'zetyx_board_datacenter'
--

CREATE TABLE zetyx_board_datacenter (
  no int(20) unsigned NOT NULL auto_increment,
  division int(10) NOT NULL default '1',
  headnum int(20) NOT NULL default '0',
  arrangenum int(20) NOT NULL default '0',
  depth int(10) unsigned NOT NULL default '0',
  prev_no int(20) NOT NULL default '0',
  next_no int(20) NOT NULL default '0',
  father int(20) NOT NULL default '0',
  child int(20) NOT NULL default '0',
  ismember int(20) NOT NULL default '0',
  islevel int(2) NOT NULL default '10',
  memo text,
  ip varchar(15) default NULL,
  password varchar(20) default NULL,
  name varchar(20) NOT NULL default '',
  homepage varchar(255) default NULL,
  email varchar(255) default NULL,
  subject varchar(250) NOT NULL default '',
  use_html char(1) default '0',
  reply_mail char(1) default '0',
  category int(11) NOT NULL default '1',
  is_secret char(1) NOT NULL default '0',
  sitelink1 varchar(255) default NULL,
  sitelink2 varchar(255) default NULL,
  file_name1 varchar(255) default NULL,
  file_name2 varchar(255) default NULL,
  s_file_name1 varchar(255) default NULL,
  s_file_name2 varchar(255) default NULL,
  download1 int(11) NOT NULL default '0',
  download2 int(11) NOT NULL default '0',
  reg_date int(13) NOT NULL default '0',
  hit int(11) NOT NULL default '0',
  vote int(11) NOT NULL default '0',
  total_comment int(11) NOT NULL default '0',
  x varchar(255) default NULL,
  y varchar(255) default NULL,
  PRIMARY KEY  (no),
  KEY headnum (division,headnum,arrangenum),
  KEY depth (depth),
  KEY father (father),
  KEY prev_no (prev_no),
  KEY next_no (next_no),
  KEY name (name),
  KEY reg_date (reg_date),
  KEY hit (hit),
  KEY vote (vote),
  KEY download1 (download1),
  KEY download2 (download2),
  KEY category (category)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_board_datacenter'
--


INSERT INTO zetyx_board_datacenter VALUES (46,1,-15,0,0,47,45,0,0,0,0,'����Ʈ�� ��ȭ�� ���Ĺ����� �������̺� ���� ��Ź�մϴ�. 19������Ʈ �Դϴ�.','221.148.158.15','197a9667200fac1f','������','','hmlim921@paran.com','��ȭ�� ���Ĺ���','','1',1,'','','','','','','',0,0,1136897742,51,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (47,1,-16,0,0,48,46,0,0,0,0,'&nbsp;&nbsp; [���̵�� ����ǰ�� ��Ż��ũ ���߿뿪��ü ��ũ�� �Ұ�]\r\n\r\n ��ũ�δ� �ű��, ���̵��, �߸�� ��üȭ���� ���� ����ǰ������ \r\n���� ���, Ư��, �������� �м� �� ��ǰ��ȹ�� ���� ��ǰ �����ΰ�\r\n�ⱸ����� S/W �� ȸ�μ���, ��������, ������ �ϰ� ���������ν� \r\n���ߺ� ������ ���Ҿ� ������������� �ִ� â������ ���߷� ��ǰȭ��\r\n���������� �̲���帮�� �ű�� ��Ż��ũ ���� ���߿뿪��ü�Դϴ�.\r\n\r\n1. ���� �� �м�\r\n&nbsp;&nbsp;- ��ǰ��ȹ(���, Ư��, �������� �м� �� Idea���� ��� ��üȭ)\r\n2. ��ǰ ������\r\n&nbsp;&nbsp;- ��ǰ ������(3D MAX, ���伥, �Ϸ���Ʈ������)\r\n3. �ⱸ����(CAD, 3D Modeling ��)\r\n&nbsp;&nbsp;- �������⹰, ��������, �����ɽ���, �ݼӰ���, ���� ��������\r\n&nbsp;&nbsp;&nbsp;&nbsp;���� ���� ��ǰ �ⱸ���� �� 3D �𵨸�\r\n&nbsp;&nbsp;- ������� ����, ������, �����м���, �Ϲ� ��ü��� ���� \r\n4. ȸ�� ����\r\n&nbsp;&nbsp;- �Ƴ��α�, ������, R/F ȸ�μ��� �� MICOM ����\r\n&nbsp;&nbsp;- ����(�Ẹ, ����, ���Ͼ�, BLDC), ����, ��������, �ַ����̵�\r\n&nbsp;&nbsp;- ��������(�˰�,����,��,����,����,�½���,�з�,����,���ӵ�,3��)\r\n&nbsp;&nbsp;- Win �� Linux�� Device ����S/W ����(C++, VC, VB, JAVA��) \r\n5. Working Mock up ����\r\n&nbsp;&nbsp;- ���� ��ġ�� ���� ���� ���� �� ��ɼ� ���� ����\r\n&nbsp;&nbsp;- ���� Working Sample ���� ���� ����\r\n6. �������� ����\r\n&nbsp;&nbsp;- ������� : �̻�����, ��ο�, ��Ÿ�� ����\r\n&nbsp;&nbsp;- �ݼӷ� ���� : ������, �����ɽ���, ����, ����, �ι߱��� ��\r\n&nbsp;&nbsp;- ��Ÿ ���� : ��, ����, ����, �и��߱� ��&nbsp;&nbsp;\r\n7. ��� ���� \r\n&nbsp;&nbsp;- ������ǰ�� �����ñ�� ����(���� �� �׽�Ʈ ���� �� ����)\r\n&nbsp;&nbsp;- ���� �ڵ�ȭ �� ��� �����, ���� ����� ����\r\n\r\n����� ��õ�� ���굿 371-28 �������Ż������� �츲���̿½��븮\r\n B�� 1204ȣ\r\nTEL: (02)2026-3337, 2026-3321&nbsp;&nbsp;FAX:(02)2026-3320\r\nHome page : http://www.techro.co.kr\r\n���ѹ� ���� ��� �����Ρ�\r\n','210.113.104.101','776659496e98b35f','��ũ��','http://www.techro.co.kr','master@techro.co.kr','\\\\\\\\����ǰ ��Ż��ũ ���� ����(������+�ⱸȸ�μ���+��������)\\\\\\\\','','1',1,'','','','','','','',0,0,1138668218,11,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (44,1,-13,0,0,45,43,0,0,0,0,'�ȳ��ϼ���. \r\n�ͻ��� ������ ����մϴ�.&nbsp;&nbsp;\r\n����� �� �λ�(����)��� ���մϴ�.&nbsp;&nbsp;�׸�ŭ ����� ������ �η°�����\r\n������� ���������� �ٽ����� ����Դϴ�.&nbsp;&nbsp;\r\n������ �λ�빫�� �����Ͽ� ���� �繫�ҿ����� �������� �ǽ��մϴ�.\r\n� ����� ������ ������ ����ϵ��� �ϰڽ��ϴ�.&nbsp;&nbsp;\r\n\r\n��㳻��&nbsp;&nbsp;\r\n�� �ӱ�, ����, �ذ� �� ������� ���\r\n�� �����Ģ, �������ȸ���� �� ���� ���� ����\r\n�� ��ü����, �ӱݱ��� ���� ���\r\n�� ������ ���, �ٷΰ�� ���� ���\r\n�� �λ� ���� ��������\r\n�� ��Ÿ �λ�빫 ���\r\n\r\n����ó (������ �빫��,���ϳ빫����)\r\n��ȭ��� : 02)865-8696(��), 011-494-8696\r\n�ѽ���� : 02)859-5022\r\n���ϻ�� : hermes11 @ nate.com \r\n\r\n�����մϴ�.&nbsp;&nbsp;\r\n\r\n(������� ������ ���� �˼��մϴ�.&nbsp;&nbsp;�����ֽø� �ٷ� ��ġ�ϰڽ��ϴ�.)\r\n','220.70.55.47','45271aba0b765d95','����','','','�λ�빫 ���� ���','','',1,'','','','','','','',0,0,1130217636,36,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (45,1,-14,0,0,46,44,0,0,0,0,'�������ں�ǰ��޾�ü�� ���´� ���� ������θ� �Ұ��մϴ�\r\n\r\n�� �ѹ� �湮�Ͻþ� ����� �ٿ�޾� ����غ�����\r\n\r\n����� ������ �� ��ǰ��Դϴ�\r\n\r\n<a href=\\\"http://www.itopseed.com/?pt=1\\\">����ž�õ�Ȩ�ǹٷΰ���\r\nwww.itopseed.com</a>\r\n\r\n<a href=\\\"http://www.itopseed.com/download/download.asp\\\">����\r\n��� ����ٿ�ε�ޱ�</a>\r\n\r\n�����մϴ�\r\n\r\n','210.223.190.158','446a12100c856ce9','������','','','�������ں�ǰ��޾�ü ����������������','1','',1,'','','','','','','',0,0,1134529470,15,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (43,1,-12,0,0,44,40,0,0,0,0,'http://boilermart.cafe24.com/front/php/product.php?product_no=81&main_cate_no=1&display_group=2\r\n\r\n�̽��� ����� \r\n\r\n����ǰ�� 30���� �¼��⿡ �������̺��� ��ġ �ϰ��� �մϴ�\r\n\r\n�԰���(30����) : 44(����) X 44(��) X 36(�β�) �Դϴ�\r\n\r\n��ġ ���ɿ��θ� �˷� �ּ���','210.179.205.235','442976bd222853a1','���°�','http://boilermart.cafe24.com/front/php/product.php?product_no=81&main_cate_no=1&display_group=2','','�̽��� ����� ������ �ּ���','','',1,'','','','','','','',0,0,1125460040,113,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (24,1,-1,0,0,30,0,0,0,0,0,'�ȳ��ϼ���~&nbsp;&nbsp;�¾�ȭ�� EHT ���� ����� �������(��) �ν±� �Դϴ�.\r\nSELF-CABLE�� ���ؼ� �ñ��Ѱ��� ��� �־� ������ �ø��ϴ�. \r\n�̷��� ������ �ø��� ������ ���� �ų� SELF-CABLE �� ��ü�ϰ� �ֱ⶧���Դϴ�.\r\n�� ������ ���� �ʹ� ���� (�������۾�����) �ų� ����� ���� �ʰ� ��� �ؾ� ������ ������� ������\r\n�ؼ� �Դϴ�.&nbsp;&nbsp;\r\n�ϴ� ������ ���� ���� ����� ������ SLP��� �ؼ� (�ٴ幰�� ����ø��� ����)������ü�� \r\n���а� ������ �������� �ų� ��û�� ���� CABLE �� ��ü�ϰ� �ֽ��ϴ�.\r\n�̴� END KIT �� POWER KIT �� ������ ���� �������ܱⰡ �������� �����Դϴ�.\r\n\r\n\\\\\\\\\\\\ ��κ��� ������ ����\\\\\\\\\\\\\r\n\r\n1.&nbsp;&nbsp;END KIT �� POWER KIT �� ���Ⱑ ���̱� �����ϰ� ���ܿ� ������ �ȴ�.\r\n2.&nbsp;&nbsp;����� �÷��� �κ��� �ǳʶٴ� CABLE�� ��� ���� ������ �������� ���´� �߿��� �ȵǾ�� ����\r\n&nbsp;&nbsp;&nbsp;&nbsp;�ε�, �߿��� ���ϰ� �Ǿ� CABLE �� ���ǰ� ź��. \r\n&nbsp;&nbsp;&nbsp;&nbsp;(������ CABLE�� ����Դϴ�. ������ ������ ��Ȱ�ϰ� �̷������ �ʴ°� �����ϴ�.)\r\n\r\n�Դϴ�. \r\n\r\n\\\\\\\\\\\\����ñ��Ѱ���\\\\\\\\\\\\\r\n\r\n1. �ѹ� ������ Ÿ�� ������ ���� �߶��� ������ ���Ÿ��������ϴµ� ���ڰ� �ջ�Ǿ� �׷���\r\n&nbsp;&nbsp; �̶� ������ ��ϴ�.\r\n&nbsp;&nbsp; �׷��ٸ� ��cm ������ �׿����� �ִ°����� �ñ��ϰ� ��cm������ �߶󳻾��ϴ����� �ñ��մϴ�.\r\n\r\n2. �µ��� ���� ����ö�� ��������� ������ ���ѳ����ٸ� cable �� ������ ���ϵ��� ������ ����\r\n&nbsp;&nbsp;&nbsp;&nbsp;�Ǵµ�, �̰��� �����ı��� ������ �ִ� ������ �ñ��մϴ�.\r\n\r\n3. THERMERSTATE ���� ����� ��ġ������ ����ä ��� CABLE �� ���н��� ���´ٸ� ������ \r\n&nbsp;&nbsp;&nbsp;&nbsp;�󸶳� ���ӵǴ��� �ñ��մϴ�..\r\n\r\n4. CONTROL PANEL �� ������ 3��4���� ���б⸦ ����Ͽ� 110V �� 220V �� ���� ����ϰ� \r\n&nbsp;&nbsp;&nbsp;&nbsp;CABLE ���� 110V �� 220V �� ���� ����ϴµ� �������� ���� ���Ͽ� \r\n&nbsp;&nbsp;&nbsp;&nbsp;������ �Ҿ��� �Ѱ� �����ϴ�.&nbsp;&nbsp;\r\n&nbsp;&nbsp;&nbsp;&nbsp;���� 110V CABLE�� 100V �Ǵ� 120V �� �ΰ��ȴٸ� CABLE�� �����ı������� ������ ��ĥ�� \r\n&nbsp;&nbsp;&nbsp;&nbsp;�ִ� ������ �ñ��մϴ�..\r\n\r\n\r\n\r\n�ٻڽ�����, �о��ּż� ����帮��� �亯�� �� ��Ź�帳�ϴ�. \r\n��ȭ�� �ֽø� ����� ����帳�ϴ�.&nbsp;&nbsp;&nbsp;&nbsp;\r\nTEL&nbsp;&nbsp; : �ν±�[016-9306-4529]\r\n MAIL : dieo1825@hanmail.net\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','218.150.209.197','446a12100c856ce9','�ν±�','','dieo1825@hanmail.net','�¾�ȭ�¹����� ������ EHT ���� ���� ����� �Դϴ�.','','1',1,'','','','data/datacenter/���ἳ������1129_010.jpg','data/datacenter/���ἳ������1129_006.jpg','���ἳ������1129_010.jpg','���ἳ������1129_006.jpg',32,21,1101568049,328,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (40,1,-9,1,1,43,37,39,0,0,0,'\r\n&gt; �ȳ��ϼ���&nbsp;&nbsp;\r\n&gt;\r\n&gt; ������ �������̺� ���Ͽ� �����Ͽ���&nbsp;&nbsp;���°� �Դϴ�\r\n&gt;\r\n&gt; �������̺���&nbsp;&nbsp;������������ �����Ҽ� �ִ� ������&nbsp;&nbsp;������ ��������&nbsp;&nbsp;�ñ��մϴ� \r\n&gt;\r\n&gt; �������̺���&nbsp;&nbsp;Ȱ���Ѵٸ�&nbsp;&nbsp;���� ���� �������� ������ �� ������ ������&nbsp;&nbsp;\r\n&gt;\r\n&gt; ���� �Ϸ� �ǽñ�&nbsp;&nbsp;��� �մϴ�. \r\n&gt;\r\n&gt; �;�ü��&nbsp;&nbsp;������ ����մϴ� \r\n&gt;\r\n&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����ó : 033-250-3255&nbsp;&nbsp; ���°�&nbsp;&nbsp;k000@chuncheon.go.kr&nbsp;&nbsp;\r\n&gt;\r\n\r\n\r\n��ǰ ���� ����� �����Ͽ� �����ϱ�����&nbsp;&nbsp;gland �� �����Ǿ� �߼۵˴ϴ�.\r\n\r\n','61.97.115.4','19225735263cd3c5','�ѱ�  EHT','','k000@chuncheon.go.kr','[re]  �������̺��� ������������ �����ϴ� ������ ���԰���������','','',1,'','','','','','','',0,0,1121309207,169,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (30,1,-4,0,0,35,24,0,0,0,0,'����������Ÿ(����:1700mm*����:1100mm)�� �ܿ��̸� ���� �Ǿ\r\n�̰��� �������� ������ �ؾ� �ϴµ� ������ ����� ã�� �ֽ��ϴ�.\r\n�ϴ� ����2C �̻��϶��� �������� �ʾҴٰ� �� ���Ϸ� ����� ��������\r\n���� �ǵ����ϴ� ��� �� �������?\r\n���߿� ���� �ִ� ������ �����δ� �����ϱ� ������� �̷��� ���� �帳�ϴ�.\r\n�̷��� ������ ����?\r\n���� �մϴ�.','211.202.84.115','6e81a53671ba0304','�ڿ���','','to4044@yahoo.co.kr','���� �帳�ϴ�.','','',1,'','','','','','','',0,0,1103688293,194,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (35,1,-5,0,0,36,30,0,0,0,0,'�ȳ��Ͻʴϱ�\r\n\r\n���� ��)����Ʈ�δн���� ������� ���� ���� ��ü���� �������� ����ϰ� �ִ� �� �� �� �̻��Դϴ�\r\n�켱 ����� ���� ������ �ϰ� �Ǿ� ����� �۱��������� ���⵵�� �ѱ��ٽ����� ��ġ �Ǿ��ִ� Heating cable�� ��������� ��Ʈ�� ���ܼ� �� ������ ����� ��ǰ���α� ��Ȯ�� ������ &#52287;�� ���־����� ���� �־ �ͻ�ó�� Heating cable�� ��ġ �� �����Ͻôµ� �� �ʿ��� ����� ��� �Ұ��Ϸ��� ������ ����ϴ�\r\n\r\n�� ��ǰ�� ��ȭ��,���¼�,UTP,�������̺� Ȥ�� Heating cable�� �ݼ����� �̷���� �ְ� 2���� �̻���\r\n��� ���̺��� ������ ��� �� �� �ִ� ��ǰ���μ� ���̺���� Open(�ܶ�) Short(�ܼ�) Ȥ�� ���̺�\r\n�߰��� �������� � ���� ���� �� �� ���������� �Ÿ��� ��Ȯ�ϰ� �� �� �־\r\n���̺��� �ִ� ����������� �� �ʿ��� ���̺� ���� �� ��������Դϴ�\r\n\r\n���������� KT,�ϳ������,�Ŀ���,ȭ�¹�����,ö��û,����ö ����,������,LAN��ġ���� ��\r\n�ѱ��ٽ��� ���� ������ ���� ���̺��� ���¸� ����,Ȥ�� �������� �Ǵ� ���̺� �ż��� ������\r\n���� �Ǿ����� ���� ���¸� Ȯ���ϴµ� ���� ��� �ϰ� �ֽ��ϴ�\r\n\r\n������ ���� �̷�� �����ϰǵ� ���ϲ����� ������ ���� ���̺��� �����ϴ� ����� �̽� �� \r\n���� �Ƿʸ� �������� ���̺� ������ ���ʿ��� ����� ��ǰ�� �Ұ����� �帱���� ������ �����ϴ�\r\n�Ƿʰ� �Ǿ��ٸ� ���� �ٶ��ϴ�\r\n\r\n�� �ڼ��� ������ �˰� �����ø� ����� Ȩ�������� �湮�Ͻðų� ��ȭ�� ���� �ٶ��ϴ�\r\n\r\n�����մϴ�\r\n\r\n��)����Ʈ�δн� �Կ��� �帲 / ������ �̻�\r\n\r\n\r\nT : 02 873 9522\r\nF : 02 873 9511\r\nMobile : 010 7767 7390\r\ne-mail : tony@nano-tronix.com\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.nano-tronix.com\r\n\r\n\r\n* ��ǰ���ó\r\n\r\n�� ���� �ݼ� Cable�� ������ ��� ���̺��� �ܼ�, �ܶ�, ���Ǵ��� �̻� ���� ���̺��� ������ �ս��� \r\n�����ϰ�, ������ ���̺��� ������ ���� LCDȭ�鿡 ���÷��� ���������ν� ����ڰ� ���̺��� \r\n���¸� ���� ���� �� �̺�Ʈ ���������� �Ÿ��� ���� ������ �� ������, ���оߴ� �Ʒ��� �����ϴ�\r\n\r\no ��ȭ�� ���� �� ��ȭ�� ��û ����\r\no ���� ��� ���̺��� �̻����� ����\r\no CATV ��Ʈ��ũ�� ��ġ �� ��������\r\no ���� ���¼��� ��������\r\no ���� ���ڳ��� ���� ���̺� ��������\r\no ���� �����̺��� �̻����� �Ǵ� �� �Ÿ�����\r\no ���� ��ż� �� ���̴� ���� ���̺� ��������\r\no ����ȭ�� ȸ�系�� ���� ���̺� ��������\r\no ���� ö�� ����, ������ �� �����ҳ��� ���� ���̺� ��������\r\no ����ö���� ��ö�� ������ ���� ���̺� ��������\r\no �����̳� �����峻�� ���� ���̺� ��������\r\no ��Ÿ �ΰ��� �̻��� �ݼ� ���̺�� �̷���� ���̺��� �ִ� �� ��𼭳� ��밡��\r\n\r\n\r\n\r\n\r\n\r\n\r\n&nbsp;&nbsp; \r\n\r\n','147.46.76.155','1c343c685cb5eb23','�Կ���','http://www.nano-tronix.com','tony@nano-tronix.com','�������̺� ������ ���ʿ��� ���̺� ������ �������','','1',1,'','','','data/datacenter/070_��ǰ����_2_16.jpg','','070_��ǰ����_2_16.jpg','',3,0,1116640390,116,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (36,1,-6,0,0,37,35,0,0,0,0,'\r\n������ ���� �ϼ���','61.97.115.4','45271aba0b765d95','�ѱ� EHT','','','���','','',1,'','','','data/datacenter/QUOTATION.xls','','QUOTATION.xls','',17,0,1117680119,112,0,1,'','');
INSERT INTO zetyx_board_datacenter VALUES (37,1,-7,0,0,39,36,0,0,0,0,'�¼��� ���� �̿��Ͽ� ������&nbsp;&nbsp;�����&nbsp;&nbsp;����������&nbsp;&nbsp;���ο�&nbsp;&nbsp;&nbsp;&nbsp;MI&nbsp;&nbsp;heating&nbsp;&nbsp;Cable ��&nbsp;&nbsp;�����Ͽ� \r\n\r\n���� �ϱ⸦ ���մϴ� \r\n\r\n�����&nbsp;&nbsp;80����&nbsp;&nbsp;����������&nbsp;&nbsp;20w +/- 5%&nbsp;&nbsp;2ȸ��&nbsp;&nbsp;&nbsp;&nbsp;������� 0.02kw/m&nbsp;&nbsp;������&nbsp;&nbsp;&nbsp;&nbsp; MI&nbsp;&nbsp;heating&nbsp;&nbsp;Cable \r\n\r\n��&nbsp;&nbsp;100m ���� �����Ҽ� �ִ�����&nbsp;&nbsp;\r\n\r\n�׸��� ������&nbsp;&nbsp;������&nbsp;&nbsp;�˰� �ͽ��ϴ�. \r\n','210.179.205.235','442976bd222853a1','���°�','http://www.j1234.net','k000@chuncheon.go.kr','MI  heating  Cable  ���� ����','','',1,'','','','','','','',0,0,1117695227,222,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (39,1,-9,0,0,43,37,0,40,0,0,' �ȳ��ϼ���&nbsp;&nbsp;\r\n\r\n ������ �������̺� ���Ͽ� �����Ͽ���&nbsp;&nbsp;���°� �Դϴ�\r\n\r\n �������̺���&nbsp;&nbsp;������������ �����Ҽ� �ִ� ������&nbsp;&nbsp;������ ��������&nbsp;&nbsp;�ñ��մϴ� \r\n\r\n �������̺���&nbsp;&nbsp;Ȱ���Ѵٸ�&nbsp;&nbsp;���� ���� �������� ������ �� ������ ������&nbsp;&nbsp;\r\n\r\n ���� �Ϸ� �ǽñ�&nbsp;&nbsp;��� �մϴ�. \r\n\r\n �;�ü��&nbsp;&nbsp;������ ����մϴ� \r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����ó : 033-250-3255&nbsp;&nbsp; ���°�&nbsp;&nbsp;k000@chuncheon.go.kr&nbsp;&nbsp;\r\n','210.179.205.235','442976bd222853a1','���°�','http://www.j1234.net','k000@chuncheon.go.kr',' �������̺��� ������������ �����ϴ� ������ ���԰���������','','',1,'','','','','','','',0,0,1121063179,109,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (48,1,-17,0,0,49,47,0,0,0,0,'�ȳ��Ͻʴϱ�~ \r\n\r\n����ȸ��( http://www.newsbid.co.kr )�Դϴ�. \r\n\r\n�ٸ��� �ƴϿ���~ �ͻ翡 ������ �� �� ����, ���� �ø��ϴ�. \r\n\r\n\r\n21���� ����ȭ�ô� ���ο� ������ �ż�,��Ȯ�ϰ� �Լ��ؾ߸� ������ �� �ֽ��ϴ�. \r\n����ȸ���� �̿� ���� ���ο� ȯ��ӿ��� �������� ��ȭ�� â���Ͽ�, ��Ÿ� ������ �����п��� ������ ���� ���������� �ż�,��Ȯ�ϰ� �����ڷḦ �����Ͽ�, ���ϸ��� ������Ʈ�ϰ� �ֽ��ϴ�. \r\n\r\n\r\n���� ����ȸ���� ��������(G2b)�Ӿƴ϶�, ������ ��.�������б�, �縳�� �� �������б��� ���� �������ڱ��, �ֿ���, ������Ʈ ��� �����ϴ� ������ ���������� �żӡ���Ȯ�ϰ� �ٷ��� ������ �����Ͽ� �帮�� ���� ��ǥ�� �����ϰ� �ֽ��ϴ�. \r\n\r\n\r\n����濵�� �־� �����̳��� ���� �Ǿ�帮���� �մϴ�. \r\n\r\n�ͻ��� ������ ���ÿ� ������ �켱���� �ϴ� �ְ��� ��Ʈ�ʰ� �ǰڽ��ϴ�. �����մϴ�. \r\n\r\n�Ѱ��������� : 02-324-4138 \r\n�ѻ� �� Ʈ �ּ� : http://www.newsbid.co.kr \r\n\r\n\r\n�� 1���� ����ȸ��&nbsp;&nbsp;��10�� ���Ἥ�񽺡�\r\n�� 3���� ����ȸ��&nbsp;&nbsp;��1���� ���Ἥ�񽺡� \r\n�� 6���� ����ȸ��&nbsp;&nbsp;��2���� ���Ἥ�񽺡�\r\n\r\n�� 12���� ����ȸ�� ��3���� ���Ἥ�񽺡�\r\n','221.147.78.244','0a3a3abb3dd9a5cd','����ȸ��','http://www.newsbid.co.kr','','��������','','',1,'','','','','','','',0,0,1142485352,11,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (49,1,-18,0,0,50,48,0,0,0,0,'�ͻ��� ������ ������ ����մϴ�.\r\n�ͻ翡�� �߻��ϴ� ��ũ���� \r\n���������Ͽ���\r\n�����ֽʽÿ�.\r\n�ּ��� ���ϰ����ϴ�.019-553-5972','219.250.138.79','45271aba0b765d95','ȫ����','http://fe4989.wo.to','fe4989@naver.com','��ũ��...','','',1,'','','','','','','',0,0,1143119151,3,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (50,1,-19,0,0,51,49,0,0,0,0,'&lt;body bgcolor=\\\"white\\\" text=\\\"black\\\" link=\\\"blue\\\" vlink=\\\"purple\\\" alink=\\\"red\\\" oncontextmenu=\\\"return false\\\"> \r\n<p><a href=\\\"http://www.dy09.co.kr\\\"><img src=\\\"http://www.dy09.co.kr/ds-tel/dongyang_1.gif\\\" width=\\\"450\\\" height=\\\"540\\\" border=\\\"0\\\"></a></p> \r\n<p><font size=\\\"2\\\">������û�� 02-2103-0220���� ��ȭ�ֽø� ������ �帮�ڽ��ϴ�.</font></p> \r\n</body>','211.193.54.193','00ac7d971a48d059','�������','','dy09@dy09.co.kr','(����) ���ڰ��� �Ǹ� �� A/S ������ü-�������','1','',1,'','','','','','','',0,0,1143597041,4,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (51,1,-20,0,0,52,50,0,0,0,0,'���� �������� �׸��� ����� �� �������� ���Ϸ� �뺸�Ͽ� �ֽʽÿ� \r\n \r\n�ʿ��� ���̴� 40cm ���� �Դϴ� \r\n \r\n�ϰ��� �ϴ� ���迡�� �����ϸ� ���Ŀ� ���, ���� ���� ������ �� �Դϴ� \r\n \r\n������ �ֽʽÿ� \r\n','168.154.100.199','3f537b5f5945a537','�����','','kghoon@skcorp.com','��ǰ����','','1',1,'','','','data/datacenter/��ǰ����.xls','','��ǰ����.xls','',3,0,1145850618,15,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (52,1,-21,0,0,53,51,0,0,0,0,'\r\n***���߿�ü �����÷�Ʈ ���񳻿� ***\r\n1. �ʸ����� �� 70cm~100cm���� ���갡���� �μ���� 1��Ʈ\r\n2. ��ǳ��ȯ��� �������� (���� 10m~20m, �� 70cm~120cm)\r\n\r\n\r\n\r\n*** ����������� ***\r\n1. 110v, 220v�� �ʸ������μ��� ����\r\n2. 200w ~ 3000w ��ǰ������ ����\r\n3. �ʸ����� ����(����)���� ��� ����\r\n4. ��ǰ��������� �˼���� ��� ����\r\n5. ��ǰ�ð���� ��� ����\r\n\r\n-���߿�ü ���꼳�� �� ������� ��� : ��� �� ����\r\n-ī����ũ �� �ǹ���ũ ���� ������� ��� :��� �� ����\r\n\r\n*** ������ ����ȸ�� ���� ***\r\n1. PET�ʸ�, ���������ʸ�, ī����ũ, �ǹ���ũ, ��������\r\n2. ���ñ��, �ܿ���, �µ�������, ����������, �ð�����\r\n3. ����Ŀ����(���͹̳�), ������, �ڽ�, ��ƼĿ, ī�ٷα�\r\n-- 2~3�� ������ ����ȸ����� �Ұ��� �帳�ϴ�.--\r\n\r\n*** ȸ�� �������� ***\r\n1. �ʸ����� ��ǰ���� ���� ����\r\n2. Ȩ������ ���� ��������\r\n3. ����, �븮��, OEM��ü ���ü������� ��ü\r\n4. ī�ٷα� �����ξ�ü �Ұ�\r\n5. Ư��û Ư��� ���ǽñ� ������\r\n6. ����������� �� UL �� CE����ȹ�� ���� ���»� �Ұ�\r\n7. �����ܼ����輺����, ���̿½��輺���� ���þ�������\r\n\r\n÷�ܱ�� ���� ������� KLK\r\n�����ȭ : 1544-7418\r\n','125.133.52.52','79f99a08751af464','KLK','http:// www.oklk.co.kr','','�ʸ����� �����÷�Ʈ �� ������� �޾ư�����','','',1,'','','','','','','',0,0,1147887626,7,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (53,1,-22,0,0,0,52,0,0,0,0,'�ȳ��ϼ���~!\r\nȨ������ ���� ������ü ���� �Դϴ�.\r\n�ͻ��� ������ ������ ������ ����ϸ�, Ȩ������ ���ۿ� ���� �ȳ��� �帮���� �մϴ�. \r\n\r\n<a href=\\\"http://www.ma-ha.com\\\" target=\\\"_blank\\\"><img src=\\\"http://www.ma-ha.com/BOARD-BANNER3.jpg\\\" border=\\\"0\\\"></a>\r\n\r\nhttp://www.ma-ha.com \r\n\r\n�� ���� ������ ö���ϰ� �м��ؼ�, ������ ���⿡ �°Բ� Ȩ�������� ����� �帳�ϴ�.\r\n�� Ȩ�������� ����� ���� �˻������� ����� �ؾ� �ϴµ�, �˻����� �� ������ ����ǵ��� ������ �帳�ϴ�.\r\n�� ������ ���ݿ� ����� ���������� ������ �帳�ϴ�.\r\n�� Ȩ�������� �ý����� �ſ� �߿��մϴ�. \r\n\r\n- ���� �ڷ�� : Ȩ������ ����ڲ��� �������� �����ϰ� �ڷḦ �ø� �� �ֽ�.\r\n- ������ �ս��� �ø� �� �ִ� ���� �ַ��� �Խ���(���� ������ �ø� �� �ֽ��ϴ�)\r\n- �����ڸ� �� �� �ִ� �Խ���(��������, FAQ, ���� ���)\r\n- �ƹ��� �� �� �ִ� �Խ��� ���(�����Խ���, ����, �������� �Խ���)\r\n- ���� ��.��.���� �ս��� �ø� �� �ִ� �Խ���\r\n- ī����(�湮�� ���� üũ)\r\n- ���� ���հ˻� ���(Ȩ�������� ��� ���� �˻�)\r\n- ����ǥ(��¥�� ��� ���ǥ)\r\n- ��� ����(����� ��� �Խ���)\r\n- ��������\r\n- ���հ˻� ��� : Ȩ������ �� ��� ���� �˻�\r\n- ������ ���\r\n- ������ ��� : ���ڸ��� �߼��� ���� ����\r\n- ȸ������ : ȸ�� �������� �������� ���޻����� ���Ϸ� ���� �� �ֽ�.\r\n- ����Ʈ�޽��� : ���� ������ ��Ȳ, �ǽð� ä��, �ڷ�����, ���� ��� ���\r\n- �ð���ʳ� ��������� ���÷� �ø��� �ְԲ� ������ �帳�ϴ�.(������ �ø��� �ֽ�) \r\n\r\n------------------------------------ \r\n\r\n�� ���� Ȩ�������� ���ø�, Ȩ������ ���۽� �� �˾Ƶνø� ���� ���װ�, \r\n�� ��� Ȩ�������� �����ؾ� ���� �Ǵ°�, Ȩ������ ���� ����� ������ ������ ���� ���� �� �ֽ��ϴ�.\r\n�� ���ϴ� �� ��������� ���� �ʽ��ϴ�. \r\n�� ���� ����(����/������Ʈ)�� ö���ϰ�, �ż��ϰ� ó���� �帳�ϴ�.\r\n\r\n0. �� ������� ����\r\n1. ������ ��� ��� 1�� ����\r\n2. ��ȣ���� ��� 1�⹫��\r\n3. ȸ�� �ΰ�(CI) ���� ���� ����\r\n4. �˻����� ��� ����� ����\r\n5. �˻����� ����Ʈ ���� ��� \r\n\r\n-------------------------------------\r\n\r\n�� Ȩ�������� �׳� ����°� �߿��Ѱ� �ƴ϶�, ����� �ǰԲ� ����� ����°� �߿��մϴ�.\r\n�� ����� Ȩ������ �������� ���⵵ ���̽ð�, ȸ�� �̹����� ���̼���.\r\n�� ���ͳݿ��� Ȩ�������� ȸ���� �� �Դϴ�.\r\n�� Ȩ�������� ����� �ô� �Դϴ�.\r\n�� �߸���� �� ������� ����� �� �ȴٰ� �� �� �ֽ��ϴ�.\r\n\r\nhttp://www.ma-ha.com \r\n\r\nȨ������ ���� �� ��� �����̳��� ������ �Ǿ����� �ϰ� �ٶ��ϴ�.\r\n�� �ʿ��� �����̿��ٸ� ������ ����� ������ ���ϸ�, �ͻ��� ������ ����մϴ�.\r\n\r\n\r\n\r\n\r\n','211.216.237.11','7ba9081e5db5bc2f','������','http://www.ma-ha.com','','��ǰ�� Ȩ������ ��������','1','',1,'','','','','','','',0,0,1149988362,0,0,0,'','');

--
-- Table structure for table 'zetyx_board_freeboard'
--

CREATE TABLE zetyx_board_freeboard (
  no int(20) unsigned NOT NULL auto_increment,
  division int(10) NOT NULL default '1',
  headnum int(20) NOT NULL default '0',
  arrangenum int(20) NOT NULL default '0',
  depth int(10) unsigned NOT NULL default '0',
  prev_no int(20) NOT NULL default '0',
  next_no int(20) NOT NULL default '0',
  father int(20) NOT NULL default '0',
  child int(20) NOT NULL default '0',
  ismember int(20) NOT NULL default '0',
  islevel int(2) NOT NULL default '10',
  memo text,
  ip varchar(15) default NULL,
  password varchar(20) default NULL,
  name varchar(20) NOT NULL default '',
  homepage varchar(255) default NULL,
  email varchar(255) default NULL,
  subject varchar(250) NOT NULL default '',
  use_html char(1) default '0',
  reply_mail char(1) default '0',
  category int(11) NOT NULL default '1',
  is_secret char(1) NOT NULL default '0',
  sitelink1 varchar(255) default NULL,
  sitelink2 varchar(255) default NULL,
  file_name1 varchar(255) default NULL,
  file_name2 varchar(255) default NULL,
  s_file_name1 varchar(255) default NULL,
  s_file_name2 varchar(255) default NULL,
  download1 int(11) NOT NULL default '0',
  download2 int(11) NOT NULL default '0',
  reg_date int(13) NOT NULL default '0',
  hit int(11) NOT NULL default '0',
  vote int(11) NOT NULL default '0',
  total_comment int(11) NOT NULL default '0',
  x varchar(255) default NULL,
  y varchar(255) default NULL,
  PRIMARY KEY  (no),
  KEY headnum (division,headnum,arrangenum),
  KEY depth (depth),
  KEY father (father),
  KEY prev_no (prev_no),
  KEY next_no (next_no),
  KEY name (name),
  KEY reg_date (reg_date),
  KEY hit (hit),
  KEY vote (vote),
  KEY download1 (download1),
  KEY download2 (download2),
  KEY category (category)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_board_freeboard'
--



--
-- Table structure for table 'zetyx_division_datacenter'
--

CREATE TABLE zetyx_division_datacenter (
  no int(10) NOT NULL auto_increment,
  division int(10) NOT NULL default '1',
  num int(10) NOT NULL default '0',
  PRIMARY KEY  (no),
  KEY division (division,num)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_division_datacenter'
--


INSERT INTO zetyx_division_datacenter VALUES (1,1,18);

--
-- Table structure for table 'zetyx_division_freeboard'
--

CREATE TABLE zetyx_division_freeboard (
  no int(10) NOT NULL auto_increment,
  division int(10) NOT NULL default '1',
  num int(10) NOT NULL default '0',
  PRIMARY KEY  (no),
  KEY division (division,num)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_division_freeboard'
--


INSERT INTO zetyx_division_freeboard VALUES (1,1,0);

--
-- Table structure for table 'zetyx_get_memo'
--

CREATE TABLE zetyx_get_memo (
  no int(20) NOT NULL auto_increment,
  member_no int(13) NOT NULL default '0',
  member_from int(13) NOT NULL default '0',
  subject varchar(200) NOT NULL default '',
  memo text NOT NULL,
  readed char(1) NOT NULL default '0',
  reg_date int(13) NOT NULL default '0',
  PRIMARY KEY  (no),
  KEY user_id (member_no),
  KEY member_from (member_from),
  KEY readed (readed),
  KEY reg_date (reg_date)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_get_memo'
--



--
-- Table structure for table 'zetyx_group_table'
--

CREATE TABLE zetyx_group_table (
  no int(20) NOT NULL auto_increment,
  name varchar(20) NOT NULL default '',
  header_url varchar(255) default NULL,
  header text,
  footer_url varchar(255) default NULL,
  footer text,
  is_open char(1) NOT NULL default '1',
  icon varchar(255) default NULL,
  use_join char(1) NOT NULL default '1',
  use_icon char(1) NOT NULL default '0',
  join_return_url varchar(255) default NULL,
  member_num int(20) NOT NULL default '0',
  board_num int(20) NOT NULL default '0',
  join_level char(2) default '9',
  use_icq char(1) default '1',
  use_aol char(1) default '0',
  use_msn char(1) default '0',
  use_jumin char(1) default '0',
  use_comment char(1) default '1',
  use_job char(1) default '0',
  use_hobby char(1) default '0',
  use_home_address char(1) default '0',
  use_home_tel char(1) default '0',
  use_office_address char(1) default '0',
  use_office_tel char(1) default '0',
  use_handphone char(1) default '0',
  use_mailing char(1) default '1',
  use_birth char(1) default '0',
  use_picture char(1) default '0',
  PRIMARY KEY  (no),
  KEY name (name),
  KEY member_num (member_num),
  KEY board_num (board_num),
  KEY is_open (is_open)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_group_table'
--


INSERT INTO zetyx_group_table VALUES (1,'koreaeht','','','','','1','','0','1','',1,2,'9','1','0','0','0','1','0','0','0','0','0','0','0','1','0','0');

--
-- Table structure for table 'zetyx_member_table'
--

CREATE TABLE zetyx_member_table (
  no int(20) NOT NULL auto_increment,
  group_no int(20) NOT NULL default '0',
  user_id varchar(20) NOT NULL default '',
  password varchar(20) NOT NULL default '',
  board_name varchar(255) default '',
  name varchar(20) NOT NULL default '',
  level int(2) NOT NULL default '10',
  email varchar(255) default NULL,
  homepage varchar(255) default NULL,
  icq varchar(20) default NULL,
  aol varchar(20) default NULL,
  msn varchar(20) default NULL,
  jumin varchar(18) default NULL,
  comment text,
  point1 int(20) default '0',
  point2 int(20) default '0',
  job varchar(50) default NULL,
  hobby varchar(50) default NULL,
  home_address varchar(255) default NULL,
  home_tel varchar(20) default NULL,
  office_address varchar(255) default NULL,
  office_tel varchar(20) default NULL,
  handphone varchar(20) default NULL,
  mailing char(1) default '0',
  birth int(13) default NULL,
  picture varchar(255) default NULL,
  reg_date int(13) default NULL,
  openinfo char(1) default '1',
  is_admin char(1) default '3',
  new_memo char(1) default '0',
  open_email char(1) default '1',
  open_homepage char(1) default '1',
  open_icq char(1) default '1',
  open_aol char(1) default '1',
  open_msn char(1) default '1',
  open_comment char(1) default '1',
  open_job char(1) default '1',
  open_hobby char(1) default '1',
  open_home_address char(1) default '1',
  open_home_tel char(1) default '1',
  open_office_address char(1) default '1',
  open_office_tel char(1) default '1',
  open_handphone char(1) default '1',
  open_birth char(1) default '1',
  open_picture char(1) default '1',
  PRIMARY KEY  (no),
  KEY group_no (group_no),
  KEY user_id (user_id),
  KEY password (password),
  KEY name (name)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_member_table'
--


INSERT INTO zetyx_member_table VALUES (1,0,'koreaeht','046ca4c5076aeebc','','������',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,1057805768,'1','1','0','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1');
INSERT INTO zetyx_member_table VALUES (2,1,'ehtadmin','59bb9c7377c79a04','1,','�ѱ�EHT',1,'koreaeht@koreaeht.com','','','','','','',5,0,'','','','','','','','1',-1,'',1066009870,'1','1','0','1','1','1','','','1','','','','','','','','','');

--
-- Table structure for table 'zetyx_send_memo'
--

CREATE TABLE zetyx_send_memo (
  no int(20) NOT NULL auto_increment,
  member_no int(13) NOT NULL default '0',
  member_to int(13) NOT NULL default '0',
  subject varchar(200) NOT NULL default '',
  memo text NOT NULL,
  readed char(1) NOT NULL default '0',
  reg_date int(13) NOT NULL default '0',
  PRIMARY KEY  (no),
  KEY user_id (member_no),
  KEY readed (readed),
  KEY reg_date (reg_date)
) TYPE=MyISAM;

--
-- Dumping data for table 'zetyx_send_memo'
--



 
