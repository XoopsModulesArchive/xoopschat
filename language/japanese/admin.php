<?php
// $Id: admin.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

define("_AM_XCHAT_CHAT", "Xoops Chat");
define("_AM_XCHAT_CHAT_ADMINPAGE", "���Υڡ����Ǥ�Xoops����åȥ⥸�塼���������뤳�Ȥ��Ǥ��ޤ���");
define("_AM_XCHAT_D1", "�����򿷵��������������ޤ���");
define("_AM_XCHAT_D2", "��å������򸡺���������ޤ���");
define("_AM_XCHAT_D3", "���Ū������Υ桼���˥����������¤򤫤��ޤ���");
define("_AM_XCHATCONFIG","����");
define("_AM_XCHAT_AD1", "rooms.php");
define("_AM_XCHAT_AD2", "messages.php");
define("_AM_XCHAT_AD3", "banusers.php");
define("_AM_XCHAT_ADMENU1","��������");
define("_AM_XCHAT_ADMENU2","��å���������");
define("_AM_XCHAT_ADMENU3","�桼������");
define("_AM_XCHAT_CHAT_ROOM", "�����ȹ�ư:");
define("_AM_XCHAT_REDIT", "edit");	//���ܸ�ϥޥ���
define("_AM_XCHAT_RERASE", "erase");	//���ܸ�ϥޥ���
define("_AM_XCHAT_PROCEED", "³����");
define("_AM_XCHAT_ADDROOM", "�����ɲ�");
define('_AM_XCHAT_ROOM_TYPE', '����������:');
define("_AM_XCHAT_TYPEDESCR", "<b>"._AM_XCHAT_ROOM_TYPE."</b> ���٤ƤΥ桼���˸��������åȡ��롼�����ˤ�<b>2</b>�����򤵤줿�桼���������롼�פˤΤ߸��������åȡ��롼��Τ���ˤ�<b>3</b>�����Ϥ��ޤ���");
define("_AM_XCHAT_RCREATE", "create");	//���ܸ�ϥޥ���
define("_AM_XCHAT_ROOMNAME", "̾��:");
define("_AM_XCHAT_ROOM_GROUP", "�����ǥ���åȤ�����Ĥ�ԤäƤ���桼���������롼��");
define("_AM_XCHAT_CHATGO", "����");
define("_AM_XCHAT_ADMININIT", "��������ǥå���");
define("_AM_XCHAT_MSRC", "search");	//���ܸ�ϥޥ���
define("_AM_XCHAT_MSGSEARCH", "��å���������");
define("_AM_XCHAT_MERASEALL", "reset");	//���ܸ�ϥޥ���
define("_AM_XCHAT_MSGTRASH", "����å������õ�");
define("_AM_XCHAT_BSELECT", "select");	//���ܸ�ϥޥ���
define("_AM_XCHAT_BANUSER", "��ǧ");
define("_AM_XCHAT_BANAUSER", "�ػߥ桼��:");
define("_AM_XCHAT_BDELDESCR", "�ػߤ��줿�桼��:�桼��������ǡ��桼�������̤˺Ƥӥ����������뤳�Ȥ��ǽ�ˤ��뤿��˥ܥ���򥯥�å����Ƥ���������");
define("_AM_XCHAT_NOUSERSBANNED", "�ػߤ��줿�桼���Ϥ��ޤ���");
define("_AM_XCHAT_BBAN", "You've chosen to ban the user <b>%s</b>, now specify for how many days he will not be able to access the chat.");
define("_AM_XCHAT_BDAYS", "��");
define("_AM_XCHAT_BFOR", "For");
define("_AM_XCHAT_BSET", "Set");	//���ܸ�ϥޥ���
define("_AM_XCHAT_BBANNED", "�桼��<b>%s</b>���ػߤ���Ƥ��ޤ���");
define("_AM_XCHAT_BBANNEDTIME", "for <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT", "�ػߥ桼����������ǥå��������");
define("_AM_XCHAT_BDEL", "delete");	//���ܸ�ϥޥ���
define("_AM_XCHAT_BREM", "���򤵤줿�桼���ϺƤӥ���åȤ˥����������뤳�Ȥ��Ǥ��ޤ���");
define("_AM_XCHAT_MLIST", "list");	//���ܸ�ϥޥ���
define("_AM_XCHAT_SEARCHCRITERIA", "�������֤Υ�å�������");
define("_AM_XCHAT_DFROM", "from");
define("_AM_XCHAT_DTO", "to");
define("_AM_XCHAT_MLISTALL", "���ƤΥ�å�������ɽ��");
define("_AM_XCHAT_MLISTTODAY", "��������줿��å������򤹤٤�ɽ�����ޤ���");
define("_AM_XCHAT_MSRCRES", "�������");
define("_AM_XCHAT_MLISTDESCR", "��å������������뤿��ˤϡ��ե�����ɤ����Ƥ򥯥�å����Ƥ���������");
define("_AM_XCHAT_MID", "Id");
define("_AM_XCHAT_MROOM", "����");
define("_AM_XCHAT_MMSG", "�ƥ�����");
define("_AM_XCHAT_MERASE", "erase");	//���ܸ�ϥޥ���
define("_AM_XCHAT_MPOSTEDBY", "���Х���");
define("_AM_XCHAT_MDATE", "����");
define("_AM_XCHAT_WARNING", "�ٹ�:");
define("_AM_XCHAT_MSURETODELETEALL", "�ǡ����١�����Υ�å������򤹤٤ƺ�����Ƥ�褤�Ǥ�����<br><b>�������ϼ��ä��Ǥ��ޤ���</b>");
define("_AM_XCHAT_MDELOK", "��ǧ");
define("_AM_XCHAT_MINIT", "��å�������������ǥå��������"); 
define("_AM_XCHAT_MNOMESSAGES", "���򤵤줿���֤Υ�å������Ϥ���ޤ���");
define("_AM_XCHAT_REPEATSEARCH", "�ƻ��");
define("_AM_XCHAT_EDITROOM", "�����Խ�");
define("_AM_XCHAT_MDALL", "��å����������٤ƺ������ޤ�����");
define("_AM_XCHAT_SURETODELETE", "����<b>%s</b>�������Ƥ��ɤ��Ǥ�����");
define("_AM_XCHAT_DELCONFIRM", "��ǧ");
define("_AM_XCHAT_RINIT", "������������ǥå��������");
define("_AM_XCHAT_RDELETED", "����å����� <b>%s</b> �������ޤ�����");
define("_AM_XCHAT_TYPEDEDIT", "<b>"._AM_XCHAT_ROOM_TYPE."</b> ���٤ƤΥ桼���˸��������åȡ��롼�����ˤ�<b>2</b>�����򤵤줿�桼���������롼�פˤΤ߸��������åȡ��롼��Τ���ˤ�<b>3</b>�����Ϥ��ޤ���");
define("_AM_XCHAT_RSAVE","save");	//���ܸ�ϥޥ���
define("_AM_XCHAT_CHAT_ID","Room Id:");
define("_AM_XCHAT_RUPDATED", "����å����� <b>%s</b> �����ꤵ��ޤ�����");
define("_AM_XCHAT_RCREATED", "����å����� <b>%s</b> �򿷵��������ޤ�����");
define("_AM_XCHAT_DEFECTION", "����å�����������˥��顼�������ޤ�����<br>���Τʾ������ꤷ������ǧ���Ƥ���������");
define("_AM_XCHAT_UNABLETOEDITTYPE", "<b>�ǥե���ȼ������������פ�򴹤Ǥ��ޤ���</b>.");
define("_AM_XCHAT_TYPEMISMATCH", "<b>�ǥե���ȤȤ��Ƥ������������Ǥ��ޤ���</b>.");
define("_AM_XCHAT_UNABLETOERASE", "<b>�ǥե���ȼ��Ϻ���Ǥ��ޤ���</b>.");
define("_AM_XCHAT_RDBERR", "�ǡ����١�������:");
define("_AM_XCHAT_NOTFOUND", "<b>�����ϸ��Ĥ���ޤ���Ǥ�����</b>.");
define("_AM_XCHAT_MCLOSEWIN", "��å��������������");
define("_AM_XCHAT_MERASEMSG", "��å��������");
define("_AM_XCHAT_MERASECONFIRMATION", "���򤵤줿��å������μ��ä����ǧ���Ƥ���������<br><b>�������ϼ��ä��Ǥ��ޤ���</b>");
define("_AM_XCHAT_ERASEDEFINIT", "���");
define("_AM_XCHAT_MDELETED", "���򤵤줿��å��������������ޤ�����");

?>