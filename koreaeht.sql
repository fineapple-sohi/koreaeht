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


INSERT INTO zetyx_admin_table VALUES (1,1,'freeboard',0,'nzeo_ver3','<div align=center>','</div>','','','','','white',95,20,10,'1',0,'','1','1','',2097152,'','','','','','','1','','1','1','1','1','',2,10,10,10,10,10,1,1,1,'8억,새끼,개새끼,소새끼,병신,지랄,씨팔,십팔,니기미,찌랄,지랄,쌍년,쌍놈,빙신,좆까,니기미,좆같은게,잡놈,벼엉신,바보새끼,씹새끼,씨발,씨팔,시벌,씨벌,떠그랄,좆밥,추천인,추천id,추천아이디,추천id,추천아이디,추/천/인,쉐이,등신,싸가지,미친놈,미친넘,찌랄,죽습니다,님아,님들아,씨밸넘\r\n','a,img,embed,font,b,div,center,p,br\r\n','');
INSERT INTO zetyx_admin_table VALUES (2,1,'datacenter',18,'nzeo_ver3','<div align=center>','</div>','','','','','white',100,20,10,'1',0,'','1','1','',2097152,'1','','','','','','1','','1','1','1','1','',2,10,10,10,10,10,1,1,1,'8억,새끼,개새끼,소새끼,병신,지랄,씨팔,십팔,니기미,찌랄,지랄,쌍년,쌍놈,빙신,좆까,니기미,좆같은게,잡놈,벼엉신,바보새끼,씹새끼,씨발,씨팔,시벌,씨벌,떠그랄,좆밥,추천인,추천id,추천아이디,추천id,추천아이디,추/천/인,쉐이,등신,싸가지,미친놈,미친넘,찌랄,죽습니다,님아,님들아,씨밸넘\r\n','a,img,embed,font,b,div,center,p,br\r\n','');

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


INSERT INTO zetyx_board_category_datacenter VALUES (1,18,'일반');
INSERT INTO zetyx_board_category_datacenter VALUES (2,0,'질문');
INSERT INTO zetyx_board_category_datacenter VALUES (3,0,'답변');

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


INSERT INTO zetyx_board_category_freeboard VALUES (1,0,'일반');
INSERT INTO zetyx_board_category_freeboard VALUES (2,0,'질문');
INSERT INTO zetyx_board_category_freeboard VALUES (3,0,'답변');

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


INSERT INTO zetyx_board_comment_datacenter VALUES (2,36,0,'김태경','442976bd222853a1','  안녕하십니까 ? \r\n춘천시청 체육진흥과에 근무하는 김태경 입니다 \r\n\r\n집에서 기름보일러로 활용 난방을 하고 있습니다\r\n\r\n이번에는  온수를 엑셀파이프에  급수하고 순환하여 그온도를 80 도씨로 유지하고 싶습니다 \r\n\r\n엑셀파이프에  내장하여 사용하고싶은  사항은  정온전선으로  소비전력이 단상 220v   m당 20w  +/- 5%  2회로 된 사양을  100m 가량 구입하고 싶습니다 \r\n\r\n가능한지  여부를  알려 주시기 바랍니다  \r\n\r\n가능하다면  가격은  얼마인지도  알려 주세요 \r\n','210.179.205.235',1117693010);

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


INSERT INTO zetyx_board_datacenter VALUES (46,1,-15,0,0,47,45,0,0,0,0,'아파트의 소화전 동파방지용 히팅케이블 견적 부탁합니다. 19층아파트 입니다.','221.148.158.15','197a9667200fac1f','임형묵','','hmlim921@paran.com','소화전 동파방지','','1',1,'','','','','','','',0,0,1136897742,51,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (47,1,-16,0,0,48,46,0,0,0,0,'&nbsp;&nbsp; [아이디어 시제품의 토탈테크 개발용역업체 테크로 소개]\r\n\r\n 테크로는 신기술, 아이디어, 발명등 구체화되지 않은 시제품개발을 \r\n위해 기술, 특허, 시장조사 분석 및 상품기획에 의한 제품 디자인과\r\n기구설계와 S/W 및 회로설계, 쌤플제작, 금형을 일괄 개발함으로써 \r\n개발비 절감과 더불어 국제수상실적이 있는 창의적인 개발로 상품화를\r\n성공적으로 이끌어드리는 신기술 토탈테크 전문 개발용역업체입니다.\r\n\r\n1. 조사 및 분석\r\n&nbsp;&nbsp;- 상품기획(기술, 특허, 시장조사 분석 및 Idea개선 기술 구체화)\r\n2. 제품 디자인\r\n&nbsp;&nbsp;- 제품 디자인(3D MAX, 포토샵, 일러스트레이터)\r\n3. 기구설계(CAD, 3D Modeling 등)\r\n&nbsp;&nbsp;- 수지사출물, 프레스물, 다이케스팅, 금속가공, 고무류 발포물의\r\n&nbsp;&nbsp;&nbsp;&nbsp;복합 소재 제품 기구설계 및 3D 모델링\r\n&nbsp;&nbsp;- 구동기계 설계, 운수기계, 유공압설계, 일반 유체기계 설계 \r\n4. 회로 설계\r\n&nbsp;&nbsp;- 아나로그, 디지털, R/F 회로설계 및 MICOM 개발\r\n&nbsp;&nbsp;- 모터(써보, 스텝, 리니어, BLDC), 펌프, 액츄레이터, 솔레노이드\r\n&nbsp;&nbsp;- 센서응용(촉각,개스,광,레벨,근접,온습도,압력,유량,각속도,3축)\r\n&nbsp;&nbsp;- Win 및 Linux용 Device 응용S/W 개발(C++, VC, VB, JAVA등) \r\n5. Working Mock up 제작\r\n&nbsp;&nbsp;- 투자 유치를 위한 대모용 쌤플 및 기능성 쌤플 제작\r\n&nbsp;&nbsp;- 양산용 Working Sample 가공 조립 제작\r\n6. 금형설계 제작\r\n&nbsp;&nbsp;- 사출금형 : 이색사출, 블로우, 로타리 금형\r\n&nbsp;&nbsp;- 금속류 금형 : 프레스, 다이케스팅, 주조, 단조, 인발금형 등\r\n&nbsp;&nbsp;- 기타 금형 : 고무, 발포, 유리, 분말야금 등&nbsp;&nbsp;\r\n7. 양산 지원 \r\n&nbsp;&nbsp;- 개발제품의 양산관련기술 지원(생산 및 테스트 지그 등 제작)\r\n&nbsp;&nbsp;- 간이 자동화 및 양산 전용기, 시험 전용기 개발\r\n\r\n서울시 금천구 가산동 371-28 서울디지탈산업단지 우림라이온스밸리\r\n B동 1204호\r\nTEL: (02)2026-3337, 2026-3321&nbsp;&nbsp;FAX:(02)2026-3320\r\nHome page : http://www.techro.co.kr\r\n“한번 고객을 평생 고객으로”\r\n','210.113.104.101','776659496e98b35f','테크로','http://www.techro.co.kr','master@techro.co.kr','\\\\\\\\신제품 토탈테크 개발 대행(디자인+기구회로설계+쌤플제작)\\\\\\\\','','1',1,'','','','','','','',0,0,1138668218,11,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (44,1,-13,0,0,45,43,0,0,0,0,'안녕하세요. \r\n귀사의 발전을 기원합니다.&nbsp;&nbsp;\r\n기업은 곧 인사(人事)라고 말합니다.&nbsp;&nbsp;그만큼 사업의 발전과 인력관리는\r\n기업내부 구성원에게 핵심적인 사안입니다.&nbsp;&nbsp;\r\n귀하의 인사노무와 관련하여 저희 사무소에서는 무료상담을 실시합니다.\r\n어떤 사소한 문제든 성실히 상담하도록 하겠습니다.&nbsp;&nbsp;\r\n\r\n상담내용&nbsp;&nbsp;\r\n● 임금, 산재, 해고 등 유관기관 사건\r\n● 취업규칙, 노사협의회규정 등 관련 규정 정비\r\n● 단체교섭, 임금교섭 관련 상담\r\n● 연봉제 계약, 근로계약 관련 상담\r\n● 인사 관련 행정심판\r\n● 기타 인사노무 상담\r\n\r\n연락처 (김종우 노무사,삼일노무법인)\r\n전화상담 : 02)865-8696(직), 011-494-8696\r\n팩스상담 : 02)859-5022\r\n메일상담 : hermes11 @ nate.com \r\n\r\n감사합니다.&nbsp;&nbsp;\r\n\r\n(허락없이 메일을 보내 죄송합니다.&nbsp;&nbsp;연락주시면 바로 조치하겠습니다.)\r\n','220.70.55.47','45271aba0b765d95','삼일','','','인사노무 관련 상담','','',1,'','','','','','','',0,0,1130217636,36,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (45,1,-14,0,0,46,44,0,0,0,0,'전기전자부품취급업체에 딱맞는 무료 전산장부를 소개합니다\r\n\r\n꼭 한번 방문하시어 무료로 다운받아 사용해보세요\r\n\r\n절대로 마음에 꼭 드실것입니다\r\n\r\n<a href=\\\"http://www.itopseed.com/?pt=1\\\">아이탑시드홈피바로가기\r\nwww.itopseed.com</a>\r\n\r\n<a href=\\\"http://www.itopseed.com/download/download.asp\\\">전산\r\n장부 무료다운로드받기</a>\r\n\r\n감사합니다\r\n\r\n','210.223.190.158','446a12100c856ce9','김태형','','','전기전자부품취급업체 무료맞춤형전산장부','1','',1,'','','','','','','',0,0,1134529470,15,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (43,1,-12,0,0,44,40,0,0,0,0,'http://boilermart.cafe24.com/front/php/product.php?product_no=81&main_cate_no=1&display_group=2\r\n\r\n이승희 과장님 \r\n\r\n위상품중 30리터 온수기에 히딩케이블을 설치 하고자 합니다\r\n\r\n규격은(30리터) : 44(높이) X 44(폭) X 36(두께) 입니다\r\n\r\n설치 가능여부를 알려 주세요','210.179.205.235','442976bd222853a1','김태경','http://boilermart.cafe24.com/front/php/product.php?product_no=81&main_cate_no=1&display_group=2','','이승희 과장님 검토해 주세요','','',1,'','','','','','','',0,0,1125460040,113,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (24,1,-1,0,0,30,0,0,0,0,0,'안녕하세요~&nbsp;&nbsp;태안화력 EHT 설비 담당자 한전기공(주) 민승기 입니다.\r\nSELF-CABLE에 대해서 궁금한것이 몇가지 있어 질문을 올립니다. \r\n이렇게 질문을 올리는 이유는 유독 매년 SELF-CABLE 을 교체하고 있기때문입니다.\r\n그 업무의 양이 너무 많아 (보온재작업때문) 매년 고생을 하지 않고 어떻게 해야 문제가 덜생길수 있을까\r\n해서 입니다.&nbsp;&nbsp;\r\n일단 문제가 가장 많이 생기는 지역은 SLP라고 해서 (바닷물을 끌어올리는 설비)지역전체가 \r\n염분과 습분의 영향으로 매년 엄청난 양의 CABLE 을 교체하고 있습니다.\r\n이는 END KIT 및 POWER KIT 의 누전에 의해 누전차단기가 떨어지기 때문입니다.\r\n\r\n\\\\\\\\\\\\ 대부분의 증상을 보면\\\\\\\\\\\\\r\n\r\n1.&nbsp;&nbsp;END KIT 및 POWER KIT 에 염기가 쌓이기 시작하고 끝단에 누전이 된다.\r\n2.&nbsp;&nbsp;배관의 플랜지 부분을 건너뛰는 CABLE의 경우 면의 접촉이 되지않은 상태는 발열이 안되어야 정상\r\n&nbsp;&nbsp;&nbsp;&nbsp;인데, 발열이 심하게 되어 CABLE 의 외피가 탄다. \r\n&nbsp;&nbsp;&nbsp;&nbsp;(오래된 CABLE의 경우입니다. 분자의 응동이 원활하게 이루어지지 않는것 같습니다.)\r\n\r\n입니다. \r\n\r\n\\\\\\\\\\\\더욱궁금한것은\\\\\\\\\\\\\r\n\r\n1. 한번 끝단이 타기 시작한 것은 잘라내지 않으면 계속타들어가기시작하는데 분자가 손상되어 그런것\r\n&nbsp;&nbsp; 이라 생각이 듭니다.\r\n&nbsp;&nbsp; 그렇다면 몇cm 정도나 그영향이 있는것인지 궁금하고 몇cm정도를 잘라내야하는지가 궁금합니다.\r\n\r\n2. 온도가 높은 여름철에 계속적으로 가압을 시켜놓은다면 cable 의 성능이 저하되진 않을까 생각\r\n&nbsp;&nbsp;&nbsp;&nbsp;되는데, 이것이 절연파괴와 관련이 있는 것인지 궁금합니다.\r\n\r\n3. THERMERSTATE 없이 배관에 설치하지도 않은채 계속 CABLE 을 가압시켜 놓는다면 수명은 \r\n&nbsp;&nbsp;&nbsp;&nbsp;얼마나 지속되는지 궁금합니다..\r\n\r\n4. CONTROL PANEL 의 전원은 3상4선식 변압기를 사용하여 110V 와 220V 를 각각 사용하고 \r\n&nbsp;&nbsp;&nbsp;&nbsp;CABLE 또한 110V 와 220V 를 각각 사용하는데 부하율이 고르지 못하여 \r\n&nbsp;&nbsp;&nbsp;&nbsp;전압이 불안정 한것 같습니다.&nbsp;&nbsp;\r\n&nbsp;&nbsp;&nbsp;&nbsp;만약 110V CABLE에 100V 또는 120V 가 인가된다면 CABLE의 절연파괴정도에 영향을 미칠수 \r\n&nbsp;&nbsp;&nbsp;&nbsp;있는 것인지 궁금합니다..\r\n\r\n\r\n\r\n바쁘시지만, 읽어주셔셔 감사드리고요 답변을 꼭 부탁드립니다. \r\n전화로 주시면 더욱더 감사드립니다.&nbsp;&nbsp;&nbsp;&nbsp;\r\nTEL&nbsp;&nbsp; : 민승기[016-9306-4529]\r\n MAIL : dieo1825@hanmail.net\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','218.150.209.197','446a12100c856ce9','민승기','','dieo1825@hanmail.net','태안화력발전소 전기팀 EHT 설비 보수 담당자 입니다.','','1',1,'','','','data/datacenter/동결설비정비1129_010.jpg','data/datacenter/동결설비정비1129_006.jpg','동결설비정비1129_010.jpg','동결설비정비1129_006.jpg',32,21,1101568049,328,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (40,1,-9,1,1,43,37,39,0,0,0,'\r\n&gt; 안녕하세요&nbsp;&nbsp;\r\n&gt;\r\n&gt; 일전에 히팅케이블에 관하여 질문하였던&nbsp;&nbsp;김태경 입니다\r\n&gt;\r\n&gt; 히팅케이블을&nbsp;&nbsp;엘셀파이프에 삽입할수 있는 도구는&nbsp;&nbsp;구입이 가능한지&nbsp;&nbsp;궁금합니다 \r\n&gt;\r\n&gt; 히팅케이블을&nbsp;&nbsp;활용한다면&nbsp;&nbsp;향후 많은 에너지를 절약할 수 있을것 같군요&nbsp;&nbsp;\r\n&gt;\r\n&gt; 좋은 하루 되시길&nbsp;&nbsp;기원 합니다. \r\n&gt;\r\n&gt; 귀업체의&nbsp;&nbsp;발전을 기원합니다 \r\n&gt;\r\n&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;연락처 : 033-250-3255&nbsp;&nbsp; 김태경&nbsp;&nbsp;k000@chuncheon.go.kr&nbsp;&nbsp;\r\n&gt;\r\n\r\n\r\n제품 출고시 배관에 삽입하여 고정하기위한&nbsp;&nbsp;gland 가 조립되어 발송됩니다.\r\n\r\n','61.97.115.4','19225735263cd3c5','한국  EHT','','k000@chuncheon.go.kr','[re]  히팅케이블을 엘셀파이프에 삽이하는 도구를 구입가능한지됴','','',1,'','','','','','','',0,0,1121309207,169,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (30,1,-4,0,0,35,24,0,0,0,0,'대형라지에타(가로:1700mm*세로:1100mm)가 겨울이면 동파 되어서\r\n이것을 막기위해 히팅을 해야 하는데 적당한 방법을 찾고 있습니다.\r\n일단 영상2C 이상일때는 동작하지 않았다가 그 이하루 기온이 내려가면\r\n힝팅 되도록하는 방방 법 없을까요?\r\n시중에 나와 있는 열선과 센서로는 적용하기 어려워서 이렇게 문의 드립니다.\r\n이런것 가능한 가요?\r\n감사 합니다.','211.202.84.115','6e81a53671ba0304','박영주','','to4044@yahoo.co.kr','문의 드립니다.','','',1,'','','','','','','',0,0,1103688293,194,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (35,1,-5,0,0,36,30,0,0,0,0,'안녕하십니까\r\n\r\n저는 주)나노트로닉스라는 계측기기 전문 개발 업체에서 마케팅을 담당하고 있는 함 용 학 이사입니다\r\n우선 허락도 없이 연락을 하게 되어 대단히 송구스럽지만 전년도에 한국바스프의 설치 되어있는 Heating cable의 어느지점이 쇼트가 생겨서 그 지점을 당사의 제품으로그 정확한 지점을 &#52287;게 해주었었던 적이 있어서 귀사처럼 Heating cable을 설치 및 관리하시는데 꼭 필요한 당사의 장비를 소개하려고 메일을 남깁니다\r\n\r\n이 제품은 전화선,전력선,UTP,동축케이블 혹은 Heating cable등 금속으로 이루어져 있고 2가닥 이상인\r\n어떠한 케이블에도 적용이 사용 할 수 있는 제품으로서 케이블상의 Open(단락) Short(단선) 혹은 케이블\r\n중간에 연결지점 등에 대한 정보 및 이 지점꺼지의 거리를 정확하게 볼 수 있어서\r\n케이블이 있는 어느곳에서나 꼭 필요한 케이블 진단 및 관리장비입니다\r\n\r\n국내에서는 KT,하나로통신,파워콤,화력발전소,철도청,지하철 역사,포스코,LAN설치업자 및\r\n한국바스프 같은 곳에서 각종 케이블의 상태를 관리,혹은 유지보수 또는 케이블 신설시 제데로\r\n가설 되었는지 등의 상태를 확인하는데 많이 사용 하고 있습니다\r\n\r\n귀하의 글을 미루어 짐작하건데 귀하께서는 발전소 내의 케이블을 관리하는 담당자 이신 것 \r\n같아 실례를 무릅쓰고 케이블 관리에 꼭필요한 당사의 제품을 소개시켜 드릴려고 메일을 보냅니다\r\n실례가 되었다면 양해 바랍니다\r\n\r\n더 자세한 사항을 알고 싶으시면 당사의 홈페이지를 방문하시거나 전화로 문의 바랍니다\r\n\r\n감사합니다\r\n\r\n주)나노트로닉스 함용학 드림 / 마케팅 이사\r\n\r\n\r\nT : 02 873 9522\r\nF : 02 873 9511\r\nMobile : 010 7767 7390\r\ne-mail : tony@nano-tronix.com\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.nano-tronix.com\r\n\r\n\r\n* 제품사용처\r\n\r\n본 기기는 금속 Cable로 구성된 모든 케이블에서 단선, 단락, 임피던스 이상 등의 케이블의 결함을 손쉽게 \r\n진단하고, 측정된 케이블의 정보를 대형 LCD화면에 디스플레이 시켜줌으로써 사용자가 케이블의 \r\n상태를 정밀 진단 및 이벤트 지점까지의 거리를 정밀 측정할 수 있으며, 사용분야는 아래와 같습니다\r\n\r\no 전화선 관리 및 전화망 도청 감시\r\no 각종 통신 케이블의 이상유무 진단\r\no CATV 네트워크의 설치 및 유지관리\r\no 각종 전력선의 유지관리\r\no 대형 선박내의 각종 케이블 유지관리\r\no 해저 광케이블의 이상유무 판단 및 거리측정\r\no 군용 통신선 및 레이더 기지 케이블 유지관리\r\no 석유화학 회사내의 각종 케이블 유지관리\r\no 대형 철강 공장, 발전소 및 조선소내의 각종 케이블 유지관리\r\no 지하철역등 전철역 구내의 각종 케이블 유지관리\r\no 광산이나 정수장내의 각종 케이블 유지관리\r\no 기타 두가닥 이상의 금속 케이블로 이루어진 케이블이 있는 곳 어디서나 사용가능\r\n\r\n\r\n\r\n\r\n\r\n\r\n&nbsp;&nbsp; \r\n\r\n','147.46.76.155','1c343c685cb5eb23','함용학','http://www.nano-tronix.com','tony@nano-tronix.com','각종케이블 관리에 꼭필요한 케이블 고장점 측정기기','','1',1,'','','','data/datacenter/070_제품사진_2_16.jpg','','070_제품사진_2_16.jpg','',3,0,1116640390,116,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (36,1,-6,0,0,37,35,0,0,0,0,'\r\n업무에 참고 하세요','61.97.115.4','45271aba0b765d95','한국 EHT','','','양식','','',1,'','','','data/datacenter/QUOTATION.xls','','QUOTATION.xls','',17,0,1117680119,112,0,1,'','');
INSERT INTO zetyx_board_datacenter VALUES (37,1,-7,0,0,39,36,0,0,0,0,'온수기 물을 이용하여 기존의&nbsp;&nbsp;난방용&nbsp;&nbsp;엑셀파이프&nbsp;&nbsp;내부에&nbsp;&nbsp;&nbsp;&nbsp;MI&nbsp;&nbsp;heating&nbsp;&nbsp;Cable 을&nbsp;&nbsp;삽입하여 \r\n\r\n난방 하기를 원합니다 \r\n\r\n사양은&nbsp;&nbsp;80도씨&nbsp;&nbsp;정온전열선&nbsp;&nbsp;20w +/- 5%&nbsp;&nbsp;2회로&nbsp;&nbsp;&nbsp;&nbsp;상시전력 0.02kw/m&nbsp;&nbsp;정도의&nbsp;&nbsp;&nbsp;&nbsp; MI&nbsp;&nbsp;heating&nbsp;&nbsp;Cable \r\n\r\n을&nbsp;&nbsp;100m 정도 구입할수 있는지요&nbsp;&nbsp;\r\n\r\n그리고 가격은&nbsp;&nbsp;얼마인지&nbsp;&nbsp;알고 싶습니다. \r\n','210.179.205.235','442976bd222853a1','김태경','http://www.j1234.net','k000@chuncheon.go.kr','MI  heating  Cable  관련 문의','','',1,'','','','','','','',0,0,1117695227,222,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (39,1,-9,0,0,43,37,0,40,0,0,' 안녕하세요&nbsp;&nbsp;\r\n\r\n 일전에 히팅케이블에 관하여 질문하였던&nbsp;&nbsp;김태경 입니다\r\n\r\n 히팅케이블을&nbsp;&nbsp;엘셀파이프에 삽입할수 있는 도구는&nbsp;&nbsp;구입이 가능한지&nbsp;&nbsp;궁금합니다 \r\n\r\n 히팅케이블을&nbsp;&nbsp;활용한다면&nbsp;&nbsp;향후 많은 에너지를 절약할 수 있을것 같군요&nbsp;&nbsp;\r\n\r\n 좋은 하루 되시길&nbsp;&nbsp;기원 합니다. \r\n\r\n 귀업체의&nbsp;&nbsp;발전을 기원합니다 \r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;연락처 : 033-250-3255&nbsp;&nbsp; 김태경&nbsp;&nbsp;k000@chuncheon.go.kr&nbsp;&nbsp;\r\n','210.179.205.235','442976bd222853a1','김태경','http://www.j1234.net','k000@chuncheon.go.kr',' 히팅케이블을 엘셀파이프에 삽이하는 도구를 구입가능한지됴','','',1,'','','','','','','',0,0,1121063179,109,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (48,1,-17,0,0,49,47,0,0,0,0,'안녕하십니까~ \r\n\r\n입찰회보( http://www.newsbid.co.kr )입니다. \r\n\r\n다름이 아니오라~ 귀사에 도움이 될 것 같아, 글을 올립니다. \r\n\r\n\r\n21세기 정보화시대 새로운 정보를 신속,정확하게 입수해야만 성공할 수 있습니다. \r\n입찰회보는 이와 같은 새로운 환경속에서 입찰정보 문화를 창달하여, 통신망 가입자 여러분에게 입찰에 관한 종합정보를 신속,정확하게 많은자료를 수집하여, 매일매일 업데이트하고 있습니다. \r\n\r\n\r\n저희 입찰회보는 나라장터(G2b)뿐아니라, 전국의 국.공립대학교, 사립대 및 전문대학교는 물론 정부투자기관, 주요기관, 각아파트 등에서 발주하는 전국의 입찰정보를 신속·정확하게 다량의 정보를 제공하여 드리는 것을 목표로 정진하고 있습니다. \r\n\r\n\r\n기업경영에 있어 조금이나마 힘이 되어드리고자 합니다. \r\n\r\n귀사의 현명한 선택에 도움을 우선으로 하는 최고의 파트너가 되겠습니다. 감사합니다. \r\n\r\n☞고객지원센터 : 02-324-4138 \r\n☞사 이 트 주소 : http://www.newsbid.co.kr \r\n\r\n\r\n◈ 1개월 유료회원&nbsp;&nbsp;【10일 무료서비스】\r\n◈ 3개월 유료회원&nbsp;&nbsp;【1개월 무료서비스】 \r\n◈ 6개월 유료회원&nbsp;&nbsp;【2개월 무료서비스】\r\n\r\n◈ 12개월 유료회원 【3개월 무료서비스】\r\n','221.147.78.244','0a3a3abb3dd9a5cd','입찰회보','http://www.newsbid.co.kr','','입찰정보','','',1,'','','','','','','',0,0,1142485352,11,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (49,1,-18,0,0,50,48,0,0,0,0,'귀사의 무궁한 발전을 기원합니다.\r\n귀사에서 발생하는 폐스크랩을 \r\n구매코자하오니\r\n연락주십시요.\r\n최선을 다하겠읍니다.019-553-5972','219.250.138.79','45271aba0b765d95','홍석원','http://fe4989.wo.to','fe4989@naver.com','폐스크랩...','','',1,'','','','','','','',0,0,1143119151,3,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (50,1,-19,0,0,51,49,0,0,0,0,'&lt;body bgcolor=\\\"white\\\" text=\\\"black\\\" link=\\\"blue\\\" vlink=\\\"purple\\\" alink=\\\"red\\\" oncontextmenu=\\\"return false\\\"> \r\n<p><a href=\\\"http://www.dy09.co.kr\\\"><img src=\\\"http://www.dy09.co.kr/ds-tel/dongyang_1.gif\\\" width=\\\"450\\\" height=\\\"540\\\" border=\\\"0\\\"></a></p> \r\n<p><font size=\\\"2\\\">삭제요청은 02-2103-0220으로 전화주시면 삭제해 드리겠습니다.</font></p> \r\n</body>','211.193.54.193','00ac7d971a48d059','동양공구','','dy09@dy09.co.kr','(정보) 전자공구 판매 및 A/S 전문업체-동양공구','1','',1,'','','','','','','',0,0,1143597041,4,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (51,1,-20,0,0,52,50,0,0,0,0,'제작 가능한지 그리고 비용이 얼마 들어가는지를 메일로 통보하여 주십시요 \r\n \r\n필요한 길이는 40cm 정도 입니다 \r\n \r\n하고자 하는 실험에서 성공하면 향후에 계속, 많은 양을 구매할 것 입니다 \r\n \r\n연락을 주십시요 \r\n','168.154.100.199','3f537b5f5945a537','김기훈','','kghoon@skcorp.com','제품문의','','1',1,'','','','data/datacenter/제품문의.xls','','제품문의.xls','',3,0,1145850618,15,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (52,1,-21,0,0,53,51,0,0,0,0,'\r\n***면상발열체 생산플랜트 설비내역 ***\r\n1. 필름히터 폭 70cm~100cm까지 생산가능한 인쇄라인 1세트\r\n2. 열풍순환방식 건조라인 (길이 10m~20m, 폭 70cm~120cm)\r\n\r\n\r\n\r\n*** 기술이전내역 ***\r\n1. 110v, 220v용 필름히터인쇄기술 이전\r\n2. 200w ~ 3000w 제품설계기술 이전\r\n3. 필름히터 동박(전극)코팅 기술 이전\r\n4. 제품생산과정의 검수방법 기술 이전\r\n5. 제품시공방법 기술 이전\r\n\r\n-면상발열체 생산설비 및 기술이전 비용 : 상담 후 결정\r\n-카본잉크 및 실버잉크 제조 기술이전 비용 :상담 후 결정\r\n\r\n*** 원자재 공급회사 공개 ***\r\n1. PET필름, 절연코팅필름, 카본잉크, 실버잉크, 동박전극\r\n2. 코팅기계, 단열재, 온도조절기, 절연테이프, 시공공구\r\n3. 전선커넥터(링터미널), 마감재, 박스, 스티커, 카다로그\r\n-- 2~3개 원자재 공급회사들을 소개해 드립니다.--\r\n\r\n*** 회사운영 업무지원 ***\r\n1. 필름히터 제품관련 설명 파일\r\n2. 홈페이지 구축 업무지원\r\n3. 총판, 대리점, OEM업체 관련서류서식 일체\r\n4. 카다로그 디자인업체 소개\r\n5. 특허청 특허권 통상실시권 무상등록\r\n6. 전기안정인증 및 UL 및 CE인증획득 관련 협력사 소개\r\n7. 원적외선시험성적서, 음이온시험성적서 관련업무지원\r\n\r\n첨단기술 이전 전문기업 KLK\r\n상담전화 : 1544-7418\r\n','125.133.52.52','79f99a08751af464','KLK','http:// www.oklk.co.kr','','필름난방 생산플랜트 및 기술이전 받아가세요','','',1,'','','','','','','',0,0,1147887626,7,0,0,'','');
INSERT INTO zetyx_board_datacenter VALUES (53,1,-22,0,0,0,52,0,0,0,0,'안녕하세요~!\r\n홈페이지 제작 전문업체 마하 입니다.\r\n귀사의 무궁한 발전과 번영을 기원하며, 홈페이지 제작에 대한 안내를 드리고자 합니다. \r\n\r\n<a href=\\\"http://www.ma-ha.com\\\" target=\\\"_blank\\\"><img src=\\\"http://www.ma-ha.com/BOARD-BANNER3.jpg\\\" border=\\\"0\\\"></a>\r\n\r\nhttp://www.ma-ha.com \r\n\r\n▶ 고객의 취향을 철저하게 분석해서, 고객님의 취향에 맞게끔 홈페이지를 만들어 드립니다.\r\n▶ 홈페이지를 만들고 나서 검색엔진에 등록을 해야 하는데, 검색했을 때 상위에 노출되도록 제작해 드립니다.\r\n▶ 저렴한 가격에 산뜻한 디자인으로 제작해 드립니다.\r\n▶ 홈페이지는 시스템이 매우 중요합니다. \r\n\r\n- 각종 자료실 : 홈페이지 담당자께서 언제든지 간단하게 자료를 올릴 수 있슴.\r\n- 사진을 손쉽게 올릴 수 있는 포토 겔러리 게시판(맘껏 사진을 올릴 수 있습니다)\r\n- 관리자만 쓸 수 있는 게시판(공지사항, FAQ, 뉴스 등등)\r\n- 아무나 쓸 수 있는 게시판 기능(자유게시판, 방명록, 질문응답 게시판)\r\n- 각종 동.영.상을 손쉽게 올릴 수 있는 게시판\r\n- 카운터(방문자 숫자 체크)\r\n- 편리한 통합검색 기능(홈페이지내 모든 문서 검색)\r\n- 일정표(날짜별 행사 기록표)\r\n- 비밀 상담실(비공개 상담 게시판)\r\n- 설문조사\r\n- 통합검색 기능 : 홈페이지 내 모든 문서 검색\r\n- 관리자 기능\r\n- 폼메일 사용 : 전자메일 발송의 편리성 도모\r\n- 회원가입 : 회원 전원에게 집단으로 전달사항을 메일로 보낼 수 있슴.\r\n- 싸이트메신져 : 현재 접속자 현황, 실시간 채팅, 자료전달, 쪽지 기능 등등\r\n- 시공사례나 공사실적을 수시로 올릴수 있게끔 제작해 드립니다.(사진도 올릴수 있슴) \r\n\r\n------------------------------------ \r\n\r\n▶ 마하 홈페이지에 오시면, 홈페이지 제작시 꼭 알아두시면 좋을 사항과, \r\n▶ 어떻게 홈페이지를 제작해야 돈이 되는가, 홈페이지 운영방법 등등의 유용한 정보를 많이 보실 수 있습니다.\r\n▶ 마하는 월 관리비용을 받지 않습니다. \r\n▶ 사후 관리(수정/업데이트)를 철저하고, 신속하게 처리해 드립니다.\r\n\r\n0. 월 관리비용 없음\r\n1. 도메인 등록 비용 1년 무료\r\n2. 웹호스팅 비용 1년무료\r\n3. 회사 로고(CI) 무료 제작 지원\r\n4. 검색엔진 등록 대행료 무료\r\n5. 검색엔진 네이트 무료 등록 \r\n\r\n-------------------------------------\r\n\r\n▶ 홈페이지는 그냥 만드는게 중요한게 아니라, 사업이 되게끔 제대로 만드는게 중요합니다.\r\n▶ 깔끔한 홈페이지 제작으로 매출도 높이시고, 회사 이미지도 높이세요.\r\n▶ 인터넷에서 홈페이지는 회사의 얼굴 입니다.\r\n▶ 홈페이지도 경쟁력 시대 입니다.\r\n▶ 잘만들면 잘 만들수록 사업이 잘 된다고 할 수 있습니다.\r\n\r\nhttp://www.ma-ha.com \r\n\r\n홈페이지 제작 및 운영에 조금이나마 도움이 되었으면 하고 바랍니다.\r\n불 필요한 사항이였다면 정중한 사과의 말씀을 전하며, 귀사의 발전을 기원합니다.\r\n\r\n\r\n\r\n\r\n','211.216.237.11','7ba9081e5db5bc2f','조하은','http://www.ma-ha.com','','고품격 홈페이지 저렴제작','1','',1,'','','','','','','',0,0,1149988362,0,0,0,'','');

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


INSERT INTO zetyx_member_table VALUES (1,0,'koreaeht','046ca4c5076aeebc','','관리자',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,1057805768,'1','1','0','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1');
INSERT INTO zetyx_member_table VALUES (2,1,'ehtadmin','59bb9c7377c79a04','1,','한국EHT',1,'koreaeht@koreaeht.com','','','','','','',5,0,'','','','','','','','1',-1,'',1066009870,'1','1','0','1','1','1','','','1','','','','','','','','','');

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



 
