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
define("_AM_XCHAT_CHAT_ADMINPAGE", "This section is used to configure the general setting for your Xoopschat module");
define("_AM_XCHAT_D1", "To create or modify an existing room.");
define("_AM_XCHAT_D2", "To search, delete one or all messages in the database.");
define("_AM_XCHAT_D3", "To ban a user from the chat for the selected time period.");
define("_AM_XCHATCONFIG","Settings");
define("_AM_XCHAT_AD1", "rooms.php");
define("_AM_XCHAT_AD2", "messages.php");
define("_AM_XCHAT_AD3", "banusers.php");
define("_AM_XCHAT_ADMENU1","Rooms manager");
define("_AM_XCHAT_ADMENU2","Messages manager");
define("_AM_XCHAT_ADMENU3","Users banishment");
define("_AM_XCHAT_CHAT_ROOM", "Room and action:");
define("_AM_XCHAT_REDIT", "Modify");
define("_AM_XCHAT_RERASE", "Delete");
define("_AM_XCHAT_PROCEED", "Proceed");
define("_AM_XCHAT_ADDROOM", "Add a room");
define('_AM_XCHAT_ROOM_TYPE', 'Room Type:');
define("_AM_XCHAT_TYPEDESCR", "<b>"._AM_XCHAT_ROOM_TYPE."</b> Type '<b>2</b>' to create a chat room that is visible to all users, type '<b>3</b>' for a chat room that is visible only to the selected users group.");
define("_AM_XCHAT_RCREATE", "Add");
define("_AM_XCHAT_ROOMNAME", "Name:");
define("_AM_XCHAT_ROOM_GROUP", "Users group that has the permission to chat in the room");
define("_AM_XCHAT_CHATGO", "Select");
define("_AM_XCHAT_ADMININIT", "Admin Index");
define("_AM_XCHAT_MSRC", "Search");
define("_AM_XCHAT_MSGSEARCH", "Messages Search");
define("_AM_XCHAT_MERASEALL", "Reset");
define("_AM_XCHAT_MSGTRASH", "Delete all the messages");
define("_AM_XCHAT_BSELECT", "Select");
define("_AM_XCHAT_BANUSER", "Confirm");
define("_AM_XCHAT_BANAUSER", "Banish user:");
define("_AM_XCHAT_BDELDESCR", "Banned users: please, select a user and click on the button to allow the user to access the chat again.");
define("_AM_XCHAT_NOUSERSBANNED", "No banned users.");
define("_AM_XCHAT_BBAN", "You've have chosen to ban the user <b>%s</b>, now specify for how many days he/she will not be able to access the chatrooms.");
define("_AM_XCHAT_BDAYS", "day(s)");
define("_AM_XCHAT_BFOR", "For");
define("_AM_XCHAT_BSET", "Set");
define("_AM_XCHAT_BBANNED", "The user <b>%s</b> has been banned ");
define("_AM_XCHAT_BBANNEDTIME", "for <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT", "Return to the users banishment administration index");
define("_AM_XCHAT_BDEL", "Remove");
define("_AM_XCHAT_BREM", "Selected user now can again access the chat!");
define("_AM_XCHAT_MLIST", "List");
define("_AM_XCHAT_SEARCHCRITERIA", "List all messages dated");
define("_AM_XCHAT_DFROM", "from");
define("_AM_XCHAT_DTO", "to");
define("_AM_XCHAT_MLISTALL", "List all messages");
define("_AM_XCHAT_MLISTTODAY", "List all messages sent today");
define("_AM_XCHAT_MSRCRES", "Search Results");
define("_AM_XCHAT_MLISTDESCR", "To delete a message, click on the text field's content.");
define("_AM_XCHAT_MID", "Id");
define("_AM_XCHAT_MROOM", "Room");
define("_AM_XCHAT_MMSG", "Text");
define("_AM_XCHAT_MERASE", "Cancel");
define("_AM_XCHAT_MPOSTEDBY", "Author");
define("_AM_XCHAT_MDATE", "Date");
define("_AM_XCHAT_WARNING", "WARNING:");
define("_AM_XCHAT_MSURETODELETEALL", "Are you sure you want to delete all messages in the database?<br><b>"._AM_XCHAT_WARNING."</b> This operation cannot be aborted!");
define("_AM_XCHAT_MDELOK", "Confirm");
define("_AM_XCHAT_MINIT", "Return to the messages administration index"); 
define("_AM_XCHAT_MNOMESSAGES", "No messages for the selected interval.");
define("_AM_XCHAT_REPEATSEARCH", "Retry");
define("_AM_XCHAT_EDITROOM", "Edit Room");
define("_AM_XCHAT_MDALL", "All messages have been deleted!");
define("_AM_XCHAT_SURETODELETE", "Are you sure you want to delete the room <b>%s</b>?");
define("_AM_XCHAT_DELCONFIRM", "Confirm");
define("_AM_XCHAT_RINIT", "Go back to the rooms administration index");
define("_AM_XCHAT_RDELETED", "The system has deleted the chat room called <b>%s</b>!");
define("_AM_XCHAT_TYPEDEDIT", "<b>"._AM_XCHAT_ROOM_TYPE."</b> Type '<b>2</b>' to make the room visible to all users, type '<b>3</b>' to make the room accessible only to the selected users group.");
define("_AM_XCHAT_RSAVE","Save");
define("_AM_XCHAT_CHAT_ID","Room Id:");
define("_AM_XCHAT_RUPDATED", "The configuration for the room named <b>%s</b> has been updated!");
define("_AM_XCHAT_RCREATED", "The system has created a new chat room called <b>%s</b>!");
define("_AM_XCHAT_DEFECTION", " An error has occurred during room creation.<br>Please check that you have specified correct information.");
define("_AM_XCHAT_UNABLETOEDITTYPE", "<b>Cannot change the room type for the default room</b>.");
define("_AM_XCHAT_TYPEMISMATCH", "<b>Cannot set this room as default</b>.");
define("_AM_XCHAT_UNABLETOERASE", "<b>Cannot delete the default room</b>.");
define("_AM_XCHAT_RDBERR", "Database failure:");
define("_AM_XCHAT_NOTFOUND", "<b>Room not found</b>.");
define("_AM_XCHAT_MCLOSEWIN", "Back to message manager");
define("_AM_XCHAT_MERASEMSG", "Delete message");
define("_AM_XCHAT_MERASECONFIRMATION", "Please, confirm the selected messages' cancellation.<br><b>"._AM_XCHAT_WARNING."</b> this can't be aborted!");
define("_AM_XCHAT_ERASEDEFINIT", "Delete");
define("_AM_XCHAT_MDELETED", "The selected messages have been deleted.");
?>
