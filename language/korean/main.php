<?php
// $Id: main.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

define("_MA_XCHAT_YOUWASBANNED", "액세스 권한이 없습니다. You will be able to access the chat on <b>%s</b> ");
define("_MA_XCHAT_YOUWASBANNED2", "at <b>%s</b>.");
define("_MA_XCHAT_RETURN","Chat 메인페이지로 돌아감");
define("_MA_XCHAT_WARNING", "경고:");
define("_MA_XCHATSELROOM","** 채팅방 리스트 **");
define("_MA_XCHAT_MSGSEND", "보내기");
define("_MA_XCHAT_MAKEUSER", "등록회원이 아니시거나 로그인을 하지 않은 상태입니다.");
define("_MA_XCHAT_CONNECTEDAVATAR", "이것은 님의 아바타입니다");
define("_MA_XCHAT_USERLIST", "비밀 채팅방");
define("_MA_XCHAT_CURRENTROOM", "채팅방:");
define("_MA_XCHAT_NOMESSAGES", "이 채팅방에는 메세지가 없습니다");
define("_MA_XCHAT_NOMSGSTODAY", "이 채팅방엔 오늘 보내진 메세지가 없습니다");
define("_MA_XCHAT_USERINCHAT", "채팅중인 사용자");
define("_MA_XCHAT_SENTTODAY", "오늘 보내어진 (모든 채팅방에서) 메세지");
define("_MA_XCHAT_SENTFROMYOU", "오늘 님이 보내신 메세지");
define("_MA_XCHAT_USERSCHATP", "비밀방에 초대");
define("_MA_XCHAT_NOUSERSINCHAT", "지금 채팅중인 사용자는 님 혼자입니다");
define("_MA_XCHAT_FONTBOLD", "B");
define("_MA_XCHAT_FONTITALIC", "I");
define("_MA_XCHAT_FONTUNDERL", "U");
define("_MA_XCHAT_SELECTCOLOR", "Color:");
define("_MA_XCHAT_YOUAREDISCONNECTED", "채팅방을 떠났습니다.<br>이제 채팅방의 현황에서 님은 지워질것입니다.");
define("_MA_XCHAT_AUTO", "자동");
define("_MA_XCHAT_BLACK", "검은색");
define("_MA_XCHAT_DARKBLUE", "다크블루");
define("_MA_XCHAT_BLUE", "파란색");
define("_MA_XCHAT_LGREEN", "황록색");
define("_MA_XCHAT_GREEN", "녹색");
define("_MA_XCHAT_DARKRED", "다크레드");
define("_MA_XCHAT_RED", "빨간색");
define("_MA_XCHAT_ORANGE", "오렌지색");
define("_MA_XCHAT_GOLD", "금색");
define("_MA_XCHAT_SILVER", "은색");
define("_MA_XCHAT_WHITE", "흰색");
define("_MA_XCHAT_COLOR1", "#000000");
define("_MA_XCHAT_COLOR2", "#000080");
define("_MA_XCHAT_COLOR3", "#0000FF");
define("_MA_XCHAT_COLOR4", "#00FF00");
define("_MA_XCHAT_COLOR5", "#008000");
define("_MA_XCHAT_COLOR6", "#800000");
define("_MA_XCHAT_COLOR7", "#FF0000");
define("_MA_XCHAT_COLOR8", "#FA6302");
define("_MA_XCHAT_COLOR9", "gold");
define("_MA_XCHAT_COLOR10", "silver");
define("_MA_XCHAT_COLOR11", "#FFFFFF");
define("_MA_XCHAT_NOPERMISSIONS", "이 채팅방에선 메세지를 읽거나 보내실 수 없습니다");
define("_MA_XCHAT_PCHATDESCR", "비밀 채팅방으로의 초대:");
define("_MA_XCHAT_PCHATINV", "%s 님이 채팅방으로 초대하셨습니다");
define("_MA_XCHAT_PCHATNOINV", "님에게 비밀방으로의 초대는 없었습니다");
define("_MA_XCHAT_ACCEPTPCHAT", "수락");
define("_MA_XCHAT_NOUSERSELECTED", "사용자를 선택해 주십시오");
define("_MA_XCHAT_FORWARDED", "%s 님이 초대를 수락하셨습니다");
define("_MA_XCHAT_ACCEPTED", " %s 님의 초대를 수락하였습니다");
define("_MA_XCHAT_KICKED","초대를 거부하였습니다");
define("_MA_XCHAT_REQUESTSENTYET", "이 사용자에 대한 초대는 벌써 등록되어져 있습니다.");
define("_MA_XCHAT_REQUESTEXPIRED", "이 초대는 님에의해 벌써 수락되어졌거나 혹은 기간종료처리되었습니다");
define("_MA_XCHAT_USERISNOTONLINE", "선택한 사용자는 현재 온라인중이 아닙니다");
define("_MA_XCHAT_YOUCANTDOTHIS", "자기자신은 초대할 수 없습니다!");
define("_MA_XCHAT_ROOMNOTEXISTS", "선택한 채팅방은 존재하지 않습니다.");
define("_MA_XCHAT_CHATTINGWITH", "<b>%s</b> 님과 채팅중입니다.");
define("_MA_XCHAT_SOMEUSERINFO", "<b>%s</b> 님과 연락하실 수 있습니다.");
define("_MA_XCHAT_MAIL", "E-mail");
define("_MA_XCHAT_ICQNUM", "ICQ Profile");
define("_MA_XCHAT_AIM", "AIM Profile");
define("_MA_XCHAT_YIM", "Yahoo! Profile");
define("_MA_XCHAT_MSNM", "Microsoft MSN Messenger Profile");
define("_MA_XCHAT_ISNOTONLINE", "선택한 사용자는 채팅을 그만둔 상태입니다!");
define("_MA_XCHAT_REFRESH", "갱신");
define("_MA_XCHAT_ENTERCHAT","채팅 참가");
define("_MA_XCHAT_LEAVECHAT","채팅 종료");
define("_MA_XCHAT_DENYPCHAT","거부");
define("_MA_XCHAT_PLZLEAVE","<br><br><font color='red'>채팅을 종료하시려면 채팅종료 를 클릭해 주십시오</font>");

?>