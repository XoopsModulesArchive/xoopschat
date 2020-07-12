 <?php
// $Id: pchat.php,v 1.2 2003/09/03 coded by frankblack
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
include("include/xoopsuser.php");
include_once("class/timestamp.php");

CheckIfBanned();

echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>";
echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"content-type\" content=\"text/html; charset="._CHARSET."\" />";

// line below disabled to stop who page refreshing and loosing what is being typed into the input box
// echo "<meta http-equiv='refresh' content=".$xoopsModuleConfig["chatrefresh"].">";
echo "<link rel='stylesheet' type='text/css' media='all' href='".xoops_getcss($xoopsConfig['theme_set'])."' />";
echo "</head>";
echo "<body style='background-color: #".$xoopsModuleConfig["chatframebgcol"].";'>";

if ( isset($op) ) {
	switch ($op) {
		case "sendrequest":
			OpenTable();
			if ($user != "") {
				SendChatRequest($user);
				echo sprintf(_MA_XCHAT_FORWARDED, "<b>".$user."</b>");
			} else {
				echo ""._MA_XCHAT_WARNING."";
				echo "&nbsp;"._MA_XCHAT_NOUSERSELECTED."";
				echo "<script language='JavaScript'>";
				echo "<!--";
				echo "		window.setTimeout('history.go(-1)', 2000);";
				echo "//-->";
				echo "</script>";
			}
			CloseTable();
			break;
	}
} else {
	$profile = getUserProfile($user);
	if ( $profile == 0 ) {
		redirect_header(XOOPS_URL."/modules/xoopschat/index.php",3,_MA_XCHAT_WARNING ._MA_XCHAT_ISNOTONLINE);
		exit();
	}

	echo "<table width=100%>";
	echo "<tr>";
	echo "<td width=75%><div align='center'>
		<iframe width='100%' name='ChatFrame' src='chat.php?pchat=true&user=".$profile['nick']."' frameborder='0' framespacing='0' border='0' marginwidth='0' marginheight='0' height=".$xoopsModuleConfig["chatframe"]."></iframe></div></td>";
	echo "<td rowspan=2 align=center valign=top class=\"odd\">";
	echo sprintf(_MA_XCHAT_CHATTINGWITH, $profile['nick']);
	echo "<br><br>";
	echo sprintf(_MA_XCHAT_SOMEUSERINFO, $profile['nick']);

	//Other ways to contact the user.
	echo "<center>";

	if (!empty($profile['user_mail'])) {
		echo "<a href='mailto:".$profile['user_mail']."'>";
		echo "<img src='".XOOPS_URL."/images/icons/email.gif' border='0' alt='"._MA_XCHAT_MAIL."'>";
		echo "</a>\n";
		echo "&nbsp;\n";
	}

	if (!empty($profile['user_icq'])) {
		echo "<a href='http://wwp.icq.com/scripts/search.dll?to=".$profile['user_icq']."' target='_blank'>";
		echo "<img src='".XOOPS_URL."/images/icons/icq_add.gif' border='0' alt='"._MA_XCHAT_ICQNUM."'>";
		echo "</a>";
		echo "&nbsp;";
	}

	if (!empty($profile['user_aim'])) {
		echo "<a href='aim:goim?screenname=".$profile['user_aim']."&message=Hi+".$profile['user_aim']."+Are+you+there?' target='_blank'>";
		echo "<img src='".XOOPS_URL."/images/icons/aim.gif' border='0' alt='"._MA_XCHAT_AIM."'>";
		echo "</a>";
		echo "&nbsp;";
	}

	if (!empty($profile['user_yim'])) {
	//echo "<a href='http://edit.yahoo.com/config/send_webmesg?.target=".$profile['user_yim']."&.src=pg' target='_blank'>";
		echo "<a href='http://edit.yahoo.co.jp/config/send_webmesg?.target=".$profile['user_yim']."&.src=pg' target='_blank'>";
		echo "<img src='".XOOPS_URL."/images/icons/yim.gif' border='0' alt='"._MA_XCHAT_YIM."'>";
		echo "</a>";
		echo "&nbsp;";
	}

	if (!empty($profile['user_msnm'])) {
		echo "<a href='".XOOPS_URL."/userinfo.php?uid=".$profile['uid']."'target='_blank'>";
		echo "<img src='".XOOPS_URL."/images/icons/msnm.gif' border='0' alt='"._MA_XCHAT_MSNM."'>";
		echo "</a>";
		echo "&nbsp;";
	}
	echo "<br><br><a href='index.php'>"._MA_XCHAT_RETURN."</a></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><div align='center'>
		<iframe width='100%' name='MsgFrame' src='bottom.php?pchat=true&user=".$profile['nick']."' frameborder='0' framespacing='0' border='0' marginwidth='0' marginheight='0' height=".$xoopsModuleConfig["msgframe"]." scrolling=\"no\"></iframe></div></td>";
	echo "</tr>";
	echo "</table>";
}

include(XOOPS_ROOT_PATH."/footer.php");

?>