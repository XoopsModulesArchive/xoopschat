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
define("_AM_XCHAT_CHAT_ADMINPAGE", "�� ������������ Xoops Chat module�� �����Ͻ� �� �ֽ��ϴ�.");
define("_AM_XCHAT_D1", "ä�ù��� �ű԰���/���� �մϴ�.");
define("_AM_XCHAT_D2", "�޼����� �˻�/���� �մϴ�.");
define("_AM_XCHAT_D3", "�����ð����� Ư�� ������� �׼����� �����մϴ�");
define("_AM_XCHATCONFIG","����");
define("_AM_XCHAT_AD1", "rooms.php");
define("_AM_XCHAT_AD2", "messages.php");
define("_AM_XCHAT_AD3", "banusers.php");
define("_AM_XCHAT_ADMENU1","ä�ù� ����");
define("_AM_XCHAT_ADMENU2","�޼��� ����");
define("_AM_XCHAT_ADMENU3","����� �߹�");
define("_AM_XCHAT_CHAT_ROOM", "ä�ù� ó��:");
define("_AM_XCHAT_REDIT", "edit");
define("_AM_XCHAT_RERASE", "erase");
define("_AM_XCHAT_PROCEED", "�����");
define("_AM_XCHAT_ADDROOM", "ä�ù� �߰�");
define('_AM_XCHAT_ROOM_TYPE', 'ä�ù� ����:');
define("_AM_XCHAT_TYPEDESCR", "<b>"._AM_XCHAT_ROOM_TYPE."</b> ��� ����ڿ��� ������ ä�ù��� ����÷��� '<b>2</b>' ��,  ���õ� ����ڱ׷쿡�Ը� ������ ä�ù��� ����÷���'<b>3</b>' �� �Է��� �ּ���.");
define("_AM_XCHAT_RCREATE", "create");
define("_AM_XCHAT_ROOMNAME", "�̸�:");
define("_AM_XCHAT_ROOM_GROUP", "ä�ù濡�� ä���� �� ������ ���� ����ڱ׷�");
define("_AM_XCHAT_CHATGO", "������");
define("_AM_XCHAT_ADMININIT", "���� �ε���");
define("_AM_XCHAT_MSRC", "search");
define("_AM_XCHAT_MSGSEARCH", "�޼��� �˻�");
define("_AM_XCHAT_MERASEALL", "reset");
define("_AM_XCHAT_MSGTRASH", "��� �޼��� ����");
define("_AM_XCHAT_BSELECT", "select");
define("_AM_XCHAT_BANUSER", "Ȯ��");
define("_AM_XCHAT_BANAUSER", "������ �����:");
define("_AM_XCHAT_BDELDESCR", "������ �����: �ٽ� ä�������� �㰡�Ͻ÷��� ����ڸ� �������� ��ư�� Ŭ���� �ּ���!");
define("_AM_XCHAT_NOUSERSBANNED", "������ ����ڴ� �����ϴ�");
define("_AM_XCHAT_BBAN", "You've chosen to ban the user <b>%s</b>, now specify for how many days he will not be able to access the chat.");
define("_AM_XCHAT_BDAYS", "��");
define("_AM_XCHAT_BFOR", "For");
define("_AM_XCHAT_BSET", "Set");
define("_AM_XCHAT_BBANNED", "����� <b>%s</b> �� ������ �����Դϴ� ");
define("_AM_XCHAT_BBANNEDTIME", "for <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT", "������ ����� �����ε����� ���ư�");
define("_AM_XCHAT_BDEL", "delete");
define("_AM_XCHAT_BREM", "���õ� ����ڴ� �ٽ� ä�ÿ� ������ �� �ְԵ˴ϴ�");
define("_AM_XCHAT_MLIST", "list");
define("_AM_XCHAT_SEARCHCRITERIA", "���� �Ⱓ�� �޼����� ǥ��");
define("_AM_XCHAT_DFROM", "from");
define("_AM_XCHAT_DTO", "to");
define("_AM_XCHAT_MLISTALL", "��� �޼����� ǥ��");
define("_AM_XCHAT_MLISTTODAY", "���� �������� �޼����� ��� ǥ��");
define("_AM_XCHAT_MSRCRES", "�˻����");
define("_AM_XCHAT_MLISTDESCR", "�޼����� �����Ͻ÷��� �ؽ�Ʈ�ʵ�(field)�� ������ Ŭ���� �ֽʽÿ�");
define("_AM_XCHAT_MID", "Id");
define("_AM_XCHAT_MROOM", "ä�ù�");
define("_AM_XCHAT_MMSG", "text");
define("_AM_XCHAT_MERASE", "erase");
define("_AM_XCHAT_MPOSTEDBY", "�ƹ�Ÿ");
define("_AM_XCHAT_MDATE", "�Ͻ�");
define("_AM_XCHAT_WARNING", "���:");
define("_AM_XCHAT_MSURETODELETEALL", "����Ÿ���̽����� ��� �޼����� ������ �����Ͻ� �ǰ���?<br> ���������ǿ��� ������ ������ �ֽñ� �ٶ��ϴ�!");
define("_AM_XCHAT_MDELOK", "Ȯ��");
define("_AM_XCHAT_MINIT", "�޼��� ���� �ε����� ���ư�"); 
define("_AM_XCHAT_MNOMESSAGES", "������ �Ⱓ������ �޼����� �������� �ʽ��ϴ�.");
define("_AM_XCHAT_REPEATSEARCH", "�����");
define("_AM_XCHAT_EDITROOM", "ä�ù� ����");
define("_AM_XCHAT_MDALL", "��� �޼����� �����Ǿ������ϴ�!");
define("_AM_XCHAT_SURETODELETE", "ä�ù� <b>%s</b> �� ������ �����Ͻðڽ��ϱ�?");
define("_AM_XCHAT_DELCONFIRM", "Ȯ��");
define("_AM_XCHAT_RINIT", "ä�ù� ���� �ε����� ���ư�");
define("_AM_XCHAT_RDELETED", "ä�ù� <b>%s</b> �� �����Ͽ����ϴ�!");
define("_AM_XCHAT_TYPEDEDIT", "<b>"._AM_XCHAT_ROOM_TYPE."</b> ��� ����ڿ��� ������ ä�ù��� ����÷��� '<b>2</b>' ��, ���õ� ����ڱ׷쿡�Ը� ������ ä�ù��� ����÷���  '<b>3</b>' �� �Է��� �ּ���.");
define("_AM_XCHAT_RSAVE","save");
define("_AM_XCHAT_CHAT_ID","Room Id:");
define("_AM_XCHAT_RUPDATED", "ä�ù� <b>%s</b> �� ������ ���ŵǾ����ϴ�.");
define("_AM_XCHAT_RCREATED", "ä�ù� <b>%s</b> �� �ű��ۼ��Ͽ����ϴ�!");
define("_AM_XCHAT_DEFECTION", " ä�ù� �ۼ��߿� ������ �߻��Ͽ����ϴ�.<br>������ ��Ȯ�� �����ϼ̴��� �ٽ��ѹ� Ȯ���� �ֽʽÿ�.");
define("_AM_XCHAT_UNABLETOEDITTYPE", "<b>�⺻(default)ä�ù��� Ÿ���� ������ �� �����ϴ�</b>.");
define("_AM_XCHAT_TYPEMISMATCH", "<b>�� ä�ù��� �⺻ä�ù����� ������ �� �����ϴ�</b>.");
define("_AM_XCHAT_UNABLETOERASE", "<b>�⺻ä�ù��� �����Ͻ� �� �����ϴ�</b>.");
define("_AM_XCHAT_RDBERR", "����Ÿ���̽� ���� ����:");
define("_AM_XCHAT_NOTFOUND", "<b>ä�ù��� �߰��� �� �����ϴ�</b>.");
define("_AM_XCHAT_MCLOSEWIN", "�޼��� ������ ���ư�");
define("_AM_XCHAT_MERASEMSG", "�޼��� ����");
define("_AM_XCHAT_MERASECONFIRMATION", "������ �޼����� ������ ����Ͻðڽ��ϱ�?<br> ���� ��ҵǹǷ� ������ ������ �ֽʽÿ�!");
define("_AM_XCHAT_ERASEDEFINIT", "����");
define("_AM_XCHAT_MDELETED", "���õ� �޼����� �����Ǿ������ϴ�");

?>
