<?php
// $Id: index.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

include("../../mainfile.php");
include(XOOPS_ROOT_PATH."/header.php");
include("include/functions.php");

global $xoopsDB, $xoopsUser;

$result = $xoopsDB->query("SELECT uid FROM ".$xoopsDB->prefix("myxoopschat_whosonline")."");
while ($userline = $xoopsDB->fetchArray($result)) {
	$user = new XoopsUser($userline['uid']);
	if (!$user->isOnline()) {
		$xoopsDB->queryF("DELETE FROM ".$xoopsDB->prefix("myxoopschat_whosonline")." WHERE uid = ".$userline['uid']."");
	}
}

$xoopsOption['show_rblock'] = 0;
//Uncomment this to make the home page blocks appear before the chat page
// make_cblock();

DeleteOldMessages();
CheckIfBanned();

//Inserts user information into db so it will be possible to know how many users are in chat.
AddUser();

//Gets the default ChatRoom.
$theroom = getDefaultRoom();

if (isset($op)){
	if ($op == "changeroom") {
		$theroom = $HTTP_POST_VARS['room'];
	}
}
if (is_object($xoopsUser)){
	$uname = $xoopsUser->getVar('uname');
	$useravatar = $xoopsUser->getVar('user_avatar');
} else {
	$uname= $xoopsConfig['anonymous'];
}
echo "<table width=100%><tr><td width=75%>";
echo "<div align='center'>
	<iframe width='100%' scrolling=yes name='ChatFrame' src='chat.php?pchat=false&room=".$theroom."' frameborder='0' framespacing='0' border='0' marginwidth='0' marginheight='0' height='".$xoopsModuleConfig["chatframe"]."'></iframe></div>";
echo "</td><td with=25% rowspan=\"3\" class=\"odd\" valign=\"top\">";
getChatRooms($theroom);
echo "<p>&nbsp;</p><div align=\"center\"><p><strong>".$uname."</strong></p>";

if ($useravatar){
	echo "<img src='".XOOPS_URL."/uploads/".$useravatar."' border=0 alt='"._MA_XCHAT_CONNECTEDAVATAR."'>";
}
echo "<p>&nbsp;</p><a href='endsession.php' target='_parent'>"._MA_XCHAT_LEAVECHAT."</a>"._MA_XCHAT_PLZLEAVE."</div></td></tr>";

echo "<tr><td><div align='center'>
	<iframe width='100%' name='MsgFrame' src='bottom.php?pchat=false&room=".$theroom."' frameborder='0' framespacing='0' border='0' marginwidth='0' marginheight='0' height='".$xoopsModuleConfig["msgframe"]."' scrolling=\"no\"></iframe></div>";
echo "</td></tr>";

echo "<tr><td>
	<div align='center'><iframe width='100%' name='StatsFrame' src='stats.php' frameborder='0' framespacing='0' border='0' marginwidth='0' marginheight='0' height=".$xoopsModuleConfig["statframe"].">Hello</iframe></div>";
echo "</td></tr></table>";


include_once(XOOPS_ROOT_PATH.'/footer.php');
?>