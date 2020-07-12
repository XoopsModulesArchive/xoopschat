<?php
// $Id: modinfo.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

// The name of this module
define("_MI_XCHAT_NAME","채팅");

// A brief description of this module
define("_MI_XCHAT_DESC","XOOPS용 채팅 모듈");

// Names of admin menu items
define("_MI_XCHAT_ADMENU1","채팅방");
define("_MI_XCHAT_ADMENU2","메세지");
define("_MI_XCHAT_ADMENU3","사용자 추방");
define("_MI_XCHATMSGFRAME","메세지 프레임 높이");
define("_MI_XCHATMSGFRAMEDESC","입력 프레임의 높이를 설정합니다.");
define("_MI_XCHATCHATFRAME","채팅 프레임의 높이");
define("_MI_XCHATCHATFRAMEDESC","채팅 프레임의 높이를 설정합니다.");
define("_MI_XCHATSTATFRAME","상황 프레임의 높이");
define("_MI_XCHATSTATFRAMEDESC","상황(Status) 프레임의 높이를 설정합니다.");
define("_MI_XCHATSTATREFRESH","상황 새로고침 ");
define("_MI_XCHATSTATREFRESHDESC","상황 프레임을 새로고침할 간격(초)을 설정해 주세요");
define("_MI_XCHATCHATREFRESH","채팅 새로고침");
define("_MI_XCHATCHATREFRESHDESC","채팅 프레임을 새로고침할 간격(초)을 설정해 주세요");

define("_MI_XCHATMSGFRAMEBGCOL","입력 프레임의 배경색");
define("_MI_XCHATMSGFRAMEBGCOLDESC","입력 프레임의 배경색(16진법)을 설정해 주세요");
define("_MI_XCHATCHATFRAMEBGCOL","채팅 프레임의 배경색");
define("_MI_XCHATCHATFRAMEBGCOLDESC","채팅 프레임의 배경색(16진법)을 설정해 주세요");
define("_MI_XCHATSTATFRAMEBGCOL","상황 프레임의 배경색");
define("_MI_XCHATSTATFRAMEBGCOLDESC","입력 프레임의 배경색(16진법)을 설정해 주세요");
define("_MI_XCHAT_HTML","HTML허용");
define("_MI_XCHAT_HTMLDESC","채팅메세지내 HTML태그 사용을 허가할지를 정합니다.");
define("_MI_XCHATBLOCKNAME","Xoops채팅 블록");
define("_MI_XCHATBLOCKDESC","Xoops채팅 입력필드");
define("_MI_XCHAT_ALLOPRIV","비밀채팅을 허가");
define("_MI_XCHAT_ALLOPRIVDESC","비밀채팅을 허가할지를 정합니다.");
define("_MI_XCHATCONFIG","설정");
define("_MI_XCHAT_ORDER","채팅 메세지 표시순");
define("_MI_XCHAT_ORDERDESC","채팅 메세지의 표시순서를 오름차순으로 할지 내림차순으로 할지 정합니다.");
define("_MI_XCHAT_AUTODEL","채팅메세지의 자동삭제");
define("_MI_XCHAT_AUTODELDESC","체팅메세지가 자동적으로 삭제될 간격을 설정합니다.");
define("_MI_XCHAT_BLMESHEIGHT","입력필드의 메세지 프레임 높이");
define("_MI_XCHAT_BLMESHEIGHTDESC","입력필드의 메세지 프레임 높이를 설정합니다.");
define("_MI_XCHAT_BLINPHEIGHT","입력필드의 입력 프레임 높이");
define("_MI_XCHAT_BLINPHEIGHTDESC","입력필드의 입력 프레임 높이를 설정합니다");
define("_MI_XCHAT_BLWORDWRAP","Wordwrap 입력필드");
define("_MI_XCHAT_BLWORDWRAPDESC","긴 단어에 의해 수평스크롤바가 생기는 것을 방지할 수 있습니다");
define("_MI_XCHAT_BLINPLENGTH","입력필드의 길이");
define("_MI_XCHAT_BLINPLENGTHDESC","입력필드의 길이를 정할수 있습니다");
define("_MI_XCHAT_BLMAXLENGTH","입력필드의 최대 문자수");
define("_MI_XCHAT_BLMAXLENGTHDESC","입력필드의 메세지 최대문자수를 정합니다.");
define("_MI_XCHAT_INPLENGTH","입력필드의 길이");
define("_MI_XCHAT_INPLENGTHDESC","입력필드의 길이를 정할 수 있습니다.");
define("_MI_XCHAT_MAXLENGTH","입력필드의 최대 문자수");
define("_MI_XCHAT_MAXLENGTHDESC","입력필드의 메세지 최대문자수를 정합니다");

//added2709
define("_MI_XCHAT_GUESTNAME","손님명");
define("_MI_XCHAT_GUESTNAMEDESC","손님(게스트)의 표시명을 정합니다");
define("_MI_XCHAT_ANONAME","손님");
define("_MI_XCHAT_TEXTAREA","복수행의 입력필드를 사용");
define("_MI_XCHAT_TEXTAREADESC","입력필드의 종류(단일행,복수행)를 설정하실 수 있습니다");
define("_MI_XCHAT_TXTAREACOLS","복수행 입력필드의 길이");
define("_MI_XCHAT_TXTAREACOLSDESC","복수행 입력필드의 길이(Column수)를 정합니다.");
define("_MI_XCHAT_TXTAREAROWS","복수행 입력필드의 높이");
define("_MI_XCHAT_TXTAREAROWSDESC","복수행 입력필드의 높이(행수)를 정합니다.");

//added071003
define("_MI_XCHATWHOSCHATTING","입실 상황");
define("_MI_XCHATWHOSCHATTINGDESC","입실 상황을 표시합니다.");
?>