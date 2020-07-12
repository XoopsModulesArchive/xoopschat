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
define("_MI_XCHAT_NAME","Xoops Chat");

// A brief description of this module
define("_MI_XCHAT_DESC","A chat module for XOOPS 2.0.x");

// Names of admin menu items
define("_MI_XCHAT_ADMENU1","Rooms");
define("_MI_XCHAT_ADMENU2","Messages");
define("_MI_XCHAT_ADMENU3","Users banishment");
define("_MI_XCHATMSGFRAME","Height message frame");
define("_MI_XCHATMSGFRAMEDESC","Here you can set the height of the input frame");
define("_MI_XCHATCHATFRAME","Height chat frame");
define("_MI_XCHATCHATFRAMEDESC","Here you can set the height of the chat frame");
define("_MI_XCHATSTATFRAME","Height stats frame");
define("_MI_XCHATSTATFRAMEDESC","Here you can set the height of the stats frame");
define("_MI_XCHATSTATREFRESH","Stats refreshment");
define("_MI_XCHATSTATREFRESHDESC","Here you can set the interval (sec.) in which the stats frame will be refreshed");
define("_MI_XCHATCHATREFRESH","Chat refreshment");
define("_MI_XCHATCHATREFRESHDESC","Here you can set the interval (sec.) in which the chat frame will be refreshed");

define("_MI_XCHATMSGFRAMEBGCOL","Background color message frame");
define("_MI_XCHATMSGFRAMEBGCOLDESC","Here you can set the background color of the input frame (hexadecimal)");
define("_MI_XCHATCHATFRAMEBGCOL","Background color chat frame");
define("_MI_XCHATCHATFRAMEBGCOLDESC","Here you can set the background color of the chat frame (hexadecimal)");
define("_MI_XCHATSTATFRAMEBGCOL","Background color stats frame");
define("_MI_XCHATSTATFRAMEBGCOLDESC","Here you can set the background color of the stats frame (hexadecimal)");
define("_MI_XCHAT_HTML","Allow HTML");
define("_MI_XCHAT_HTMLDESC","Here you can set whether HTML-Tags should be allowed in chat messages");
define("_MI_XCHATBLOCKNAME","Xoops Chat-Block");
define("_MI_XCHATBLOCKDESC","Xoops Chat as Shoutbox");
define("_MI_XCHAT_ALLOPRIV","Allow private chat");
define("_MI_XCHAT_ALLOPRIVDESC","Here you can set whether private chats should be allowed");
define("_MI_XCHATCONFIG","Settings");
define("_MI_XCHAT_ORDER","Order chat messages");
define("_MI_XCHAT_ORDERDESC","Here you can set if the newest chat message will be displayed at bottom (DESC) or at top (ASC)");
define("_MI_XCHAT_AUTODEL","Automatic deletion of chat messages");
define("_MI_XCHAT_AUTODELDESC","Here you can set the interval after which all messages will be automatically erased");
define("_MI_XCHAT_BLMESHEIGHT","Frameheight shoutbox Message");
define("_MI_XCHAT_BLMESHEIGHTDESC","Here you can set the message frameheight of the shoutbox");
define("_MI_XCHAT_BLINPHEIGHT","Frameheight shoutbox input");
define("_MI_XCHAT_BLINPHEIGHTDESC","Here you can set the input frameheight of the shoutbox");
define("_MI_XCHAT_BLWORDWRAP","Wordwrap shoutbox");
define("_MI_XCHAT_BLWORDWRAPDESC","Here you can set the wordwrap of a word to avoid horizontal scrolling due to long words");
define("_MI_XCHAT_BLINPLENGTH","Length input field shoutbox");
define("_MI_XCHAT_BLINPLENGTHDESC","Here you can set the length of the input field for the shoutbox");
define("_MI_XCHAT_BLMAXLENGTH","Max. characters shoutbox");
define("_MI_XCHAT_BLMAXLENGTHDESC","Here you can set the length of the chat message for the shoutbox");
define("_MI_XCHAT_INPLENGTH","Length input field chat");
define("_MI_XCHAT_INPLENGTHDESC","Here you can set the length of the input field for the shoutbox");
define("_MI_XCHAT_MAXLENGTH","Max. characters chat");
define("_MI_XCHAT_MAXLENGTHDESC","Here you can set the length of the input field for the shoutbox");
// define("_MA_XCHATSELROOM","Select a room");

//added2709
define("_MI_XCHAT_GUESTNAME","Default name for a guest visitor");
define("_MI_XCHAT_GUESTNAMEDESC","Here you can set the deafult name for a guest visitor");
define("_MI_XCHAT_ANONAME","Guest");
define("_MI_XCHAT_TEXTAREA","Message input on multiple lines");
define("_MI_XCHAT_TEXTAREADESC","Select here to enable/disable the multi line input box");
define("_MI_XCHAT_TXTAREACOLS","Number of characters for the message input over several lines");
define("_MI_XCHAT_TXTAREACOLSDESC","Specified here is the approximate width the input box will be when several line input is enabled");
define("_MI_XCHAT_TXTAREAROWS","Number of rows the input message box has");
define("_MI_XCHAT_TXTAREAROWSDESC","Set this number to the desired number of rows you want in the input message box");

//added071003
define("_MI_XCHATWHOSCHATTING","Members chatting now");
define("_MI_XCHATWHOSCHATTINGDESC","Who is chatting now");
define("_MI_CHAT_WARNING","Warning: ");
define("_MI_XCHAT_NOMESSAGES","There are currently no messages");


?>