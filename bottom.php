<?php
// $Id: bottom.php,v 1.2 2003/09/03 coded by frankblack
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
include XOOPS_ROOT_PATH."/class/xoopsformloader.php";

global $user;

CheckIfBanned();

if (!isset($pchat)) {
		$pchat = "false";
}

if ($pchat == "false") {
	if ($room == "") {
		$room = getDefaultRoom();
	}
	hasPermissions($room);
}

$iclass = new XchatTime();
$tstamp = $iclass->MakeTimeStamp();

echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>";
echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"content-type\" content=\"text/html; charset="._CHARSET."\" />";
echo "<link rel='stylesheet' type='text/css' media='all' href='".xoops_getcss($xoopsConfig['theme_set'])."' />";
echo "</head>";
echo "<script language='JavaScript'>\r\n";
echo "<!--\n";
echo "function setfocus() {\n";
echo "document.msgform.msgtextbox.focus();\n";
echo "}\n";

//include(XOOPS_ROOT_PATH."/include/xoopsjs.php");
include(XOOPS_ROOT_PATH."/include/xoops.js");

echo "//-->\r\n";
echo "</script>\r\n";

include(XOOPS_ROOT_PATH."/include/xoopscodes.php");

echo "<body onLoad='setfocus()' style='background-color: #".$xoopsModuleConfig["msgframebgcol"]."'>\r\n";
//echo "<base target='_self'>\r\n";//removed 13.09.03
echo "<form name='msgform' action='bottom.php?op=insertmessage&room=".$room."&pchat=".$pchat."&user=".$user."' method='POST'>";
echo "<table>";
echo "<tr>";
if ($xoopsModuleConfig['textarea'] == 0) {
	echo "<td valign=\"top\" colspan=\"2\">
		<input type='text' size='".$xoopsModuleConfig["inputlength"]."' maxlength='".$xoopsModuleConfig["maxlength"]."' id='msgtextbox' name='msg'>&nbsp;
		<input type='submit' name='msg_submit' value='"._MA_XCHAT_MSGSEND."'>
		</td>";
} else{
	echo "<td valign=\"top\" colspan=\"2\">
		<textarea cols='".$xoopsModuleConfig["textareacols"]."' rows='".$xoopsModuleConfig["textarearows"]."' id='msgtextbox' name='msg'></textarea>&nbsp;
		<input type='submit' name='msg_submit' value='"._MA_XCHAT_MSGSEND."'>
		</td>";  
}
echo "</tr>";
echo "<tr>";
echo "<td><br>";
echo "<input type='checkbox' name='msg_bold'><b>"._MA_XCHAT_FONTBOLD."</b></input>&nbsp;
	<input type='checkbox' name='msg_italic'><i>"._MA_XCHAT_FONTITALIC."</i></input>&nbsp;
	<input type='checkbox' name='msg_underlined'><u>"._MA_XCHAT_FONTUNDERL."</u></input>&nbsp;&nbsp;<br>";

$thecolorarr = array(_MA_XCHAT_COLOR1,_MA_XCHAT_COLOR2,_MA_XCHAT_COLOR3,_MA_XCHAT_COLOR4,
						 _MA_XCHAT_COLOR5,_MA_XCHAT_COLOR6,_MA_XCHAT_COLOR7,_MA_XCHAT_COLOR8,
						   _MA_XCHAT_COLOR9,_MA_XCHAT_COLOR10,_MA_XCHAT_COLOR11);

$thecolornames = array(_MA_XCHAT_BLACK,_MA_XCHAT_DARKBLUE,_MA_XCHAT_BLUE,_MA_XCHAT_LGREEN,
							 _MA_XCHAT_GREEN,_MA_XCHAT_DARKRED,_MA_XCHAT_RED,_MA_XCHAT_ORANGE,
							 _MA_XCHAT_GOLD,_MA_XCHAT_SILVER,_MA_XCHAT_WHITE);

echo "<b>"._MA_XCHAT_SELECTCOLOR."</b>&nbsp;";
echo "<select name='colors'>";
echo "<option>"._MA_XCHAT_AUTO."</option>";

$countcolor = 0;
$currentcolor = _MA_XCHAT_AUTO;
if ($HTTP_POST_VARS['colors'] != "") {
	$currentcolor = $HTTP_POST_VARS['colors'];
}

foreach ($thecolornames as $c) {
		echo "<option";
		if ($currentcolor == $c) {
				echo " selected";
		}
		echo " style='color: ".$thecolorarr[$countcolor].";'>";
		echo $c;
		echo "</option>";

		$countcolor++;
}

echo "</select>";
echo "</td>";
//echo "<td align=\"left\" width=60%><br>";
echo "<td align=\"left\"><br>";
xoopsSmilies("msgtextbox");
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</form>";
echo "</body>";

if (isset($op)) {
	if (!$HTTP_POST_VARS['msg'] == "") {
		$message = $HTTP_POST_VARS['msg'];

		if ($HTTP_POST_VARS['msg_underlined'] == "on") {
			$message = "<u>".$message."</u>";
		}

		if ($HTTP_POST_VARS['msg_italic'] == "on") {
			$message = "<i>".$message."</i>";
		}

		if ($HTTP_POST_VARS['msg_bold'] == "on") {
			$message = "<b>".$message."</b>";
		}

		$mcolor = $HTTP_POST_VARS['colors'];

		if ($mcolor == _MA_XCHAT_AUTO) {
			$noformat = true;
		} else {
			$noformat = false;
			$list = 0;
			while($mcolor != $thecolornames[$list]) {
				$list++;
			}
		}
		$myts =& MyTextSanitizer::getInstance();
		$messaggio_censurato = $myts->censorString($message);
		if ($noformat == true) {
			$messaggio = $messaggio_censurato;
		} else {
			$messaggio = '<font color="'.$thecolorarr[$list].'">'.$messaggio_censurato.'</font>';
		}
	} else {
		exit();
	}

	switch ($pchat) {
		case "false":
			insertMessage($room, $messaggio, $userarray['nick'], $tstamp, $userarray['ipaddress']);
			break;

		case "true":
			insertPrivateMessage($user, $messaggio, $tstamp, $userarray['ipaddress']);
			break;
	}

}
echo "<script language='JavaScript'>\r\n";
echo "<!--\r\n";
echo "		top.ChatFrame.location.reload();\r\n";
echo "//-->\r\n";
echo "</script>\r\n";
echo "</html>";

?>