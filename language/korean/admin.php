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
define("_AM_XCHAT_CHAT_ADMINPAGE", "이 페이지에서는 Xoops Chat module을 관리하실 수 있습니다.");
define("_AM_XCHAT_D1", "채팅방을 신규개설/수정 합니다.");
define("_AM_XCHAT_D2", "메세지를 검색/삭제 합니다.");
define("_AM_XCHAT_D3", "일정시간동안 특정 사용자의 액세스를 제한합니다");
define("_AM_XCHATCONFIG","설정");
define("_AM_XCHAT_AD1", "rooms.php");
define("_AM_XCHAT_AD2", "messages.php");
define("_AM_XCHAT_AD3", "banusers.php");
define("_AM_XCHAT_ADMENU1","채팅방 관리");
define("_AM_XCHAT_ADMENU2","메세지 관리");
define("_AM_XCHAT_ADMENU3","사용자 추방");
define("_AM_XCHAT_CHAT_ROOM", "채팅방 처리:");
define("_AM_XCHAT_REDIT", "edit");
define("_AM_XCHAT_RERASE", "erase");
define("_AM_XCHAT_PROCEED", "계속함");
define("_AM_XCHAT_ADDROOM", "채팅방 추가");
define('_AM_XCHAT_ROOM_TYPE', '채팅방 종류:');
define("_AM_XCHAT_TYPEDESCR", "<b>"._AM_XCHAT_ROOM_TYPE."</b> 모든 사용자에게 보여질 채팅방을 만드시려면 '<b>2</b>' 를,  선택된 사용자그룹에게만 보여질 채팅방을 만드시려면'<b>3</b>' 을 입력해 주세요.");
define("_AM_XCHAT_RCREATE", "create");
define("_AM_XCHAT_ROOMNAME", "이름:");
define("_AM_XCHAT_ROOM_GROUP", "채팅방에서 채팅을 할 권한을 가진 사용자그룹");
define("_AM_XCHAT_CHATGO", "보내기");
define("_AM_XCHAT_ADMININIT", "관리 인덱스");
define("_AM_XCHAT_MSRC", "search");
define("_AM_XCHAT_MSGSEARCH", "메세지 검색");
define("_AM_XCHAT_MERASEALL", "reset");
define("_AM_XCHAT_MSGTRASH", "모든 메세지 삭제");
define("_AM_XCHAT_BSELECT", "select");
define("_AM_XCHAT_BANUSER", "확인");
define("_AM_XCHAT_BANAUSER", "금지된 사용자:");
define("_AM_XCHAT_BDELDESCR", "금지된 사용자: 다시 채팅참가를 허가하시려면 사용자를 선택한후 버튼을 클릭해 주세요!");
define("_AM_XCHAT_NOUSERSBANNED", "금지된 사용자는 없습니다");
define("_AM_XCHAT_BBAN", "You've chosen to ban the user <b>%s</b>, now specify for how many days he will not be able to access the chat.");
define("_AM_XCHAT_BDAYS", "일");
define("_AM_XCHAT_BFOR", "For");
define("_AM_XCHAT_BSET", "Set");
define("_AM_XCHAT_BBANNED", "사용자 <b>%s</b> 는 금지된 상태입니다 ");
define("_AM_XCHAT_BBANNEDTIME", "for <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT", "금지된 사용자 관리인덱스롤 돌아감");
define("_AM_XCHAT_BDEL", "delete");
define("_AM_XCHAT_BREM", "선택된 사용자는 다시 채팅에 참가할 수 있게됩니다");
define("_AM_XCHAT_MLIST", "list");
define("_AM_XCHAT_SEARCHCRITERIA", "이하 기간의 메세지를 표시");
define("_AM_XCHAT_DFROM", "from");
define("_AM_XCHAT_DTO", "to");
define("_AM_XCHAT_MLISTALL", "모든 메세지를 표시");
define("_AM_XCHAT_MLISTTODAY", "오늘 보내어진 메세지를 모두 표시");
define("_AM_XCHAT_MSRCRES", "검색결과");
define("_AM_XCHAT_MLISTDESCR", "메세지를 삭제하시려면 텍스트필드(field)의 내용을 클릭해 주십시오");
define("_AM_XCHAT_MID", "Id");
define("_AM_XCHAT_MROOM", "채팅방");
define("_AM_XCHAT_MMSG", "text");
define("_AM_XCHAT_MERASE", "erase");
define("_AM_XCHAT_MPOSTEDBY", "아바타");
define("_AM_XCHAT_MDATE", "일시");
define("_AM_XCHAT_WARNING", "경고:");
define("_AM_XCHAT_MSURETODELETEALL", "데이타베이스내의 모든 메세지를 정말로 삭제하실 건가요?<br> 완전삭제되오니 신중히 선택해 주시기 바랍니다!");
define("_AM_XCHAT_MDELOK", "확인");
define("_AM_XCHAT_MINIT", "메세지 관리 인덱스로 돌아감"); 
define("_AM_XCHAT_MNOMESSAGES", "선택한 기간동안의 메세지는 존재하지 않습니다.");
define("_AM_XCHAT_REPEATSEARCH", "재실행");
define("_AM_XCHAT_EDITROOM", "채팅방 편집");
define("_AM_XCHAT_MDALL", "모든 메세지가 삭제되어졌습니다!");
define("_AM_XCHAT_SURETODELETE", "채팅방 <b>%s</b> 를 정말로 삭제하시겠습니까?");
define("_AM_XCHAT_DELCONFIRM", "확인");
define("_AM_XCHAT_RINIT", "채팅방 관리 인덱스로 돌아감");
define("_AM_XCHAT_RDELETED", "채팅방 <b>%s</b> 을 삭제하였습니다!");
define("_AM_XCHAT_TYPEDEDIT", "<b>"._AM_XCHAT_ROOM_TYPE."</b> 모든 사용자에게 보여질 채팅방을 만드시려면 '<b>2</b>' 를, 선택된 사용자그룹에게만 보여질 채팅방을 만드시려면  '<b>3</b>' 을 입력해 주세요.");
define("_AM_XCHAT_RSAVE","save");
define("_AM_XCHAT_CHAT_ID","Room Id:");
define("_AM_XCHAT_RUPDATED", "채팅방 <b>%s</b> 의 설정이 갱신되었습니다.");
define("_AM_XCHAT_RCREATED", "채팅방 <b>%s</b> 을 신규작성하였습니다!");
define("_AM_XCHAT_DEFECTION", " 채팅방 작성중에 에러가 발생하였습니다.<br>정보를 정확히 지정하셨는지 다시한번 확인해 주십시오.");
define("_AM_XCHAT_UNABLETOEDITTYPE", "<b>기본(default)채팅방의 타입을 변경할 수 없습니다</b>.");
define("_AM_XCHAT_TYPEMISMATCH", "<b>이 채팅방을 기본채팅방으로 지정할 수 없습니다</b>.");
define("_AM_XCHAT_UNABLETOERASE", "<b>기본채팅방은 삭제하실 수 없습니다</b>.");
define("_AM_XCHAT_RDBERR", "데이타베이스 관련 실패:");
define("_AM_XCHAT_NOTFOUND", "<b>채팅방을 발견할 수 없습니다</b>.");
define("_AM_XCHAT_MCLOSEWIN", "메세지 관리로 돌아감");
define("_AM_XCHAT_MERASEMSG", "메세지 삭제");
define("_AM_XCHAT_MERASECONFIRMATION", "선택한 메세지를 정말로 취소하시겠습니까?<br> 완전 취소되므로 신중히 선택해 주십시오!");
define("_AM_XCHAT_ERASEDEFINIT", "삭제");
define("_AM_XCHAT_MDELETED", "선택된 메세지가 삭제되어졌습니다");

?>
