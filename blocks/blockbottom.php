<?php
// $Id: blockbottom.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site				  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //


include("../../../mainfile.php");
include(XOOPS_ROOT_PATH."/header.php");
include(XOOPS_ROOT_PATH."/modules/xoopschat/include/xoopsuser.php");
include_once(XOOPS_ROOT_PATH."/modules/xoopschat/class/timestamp.php");
include(XOOPS_ROOT_PATH."/modules/xoopschat/include/functions.php");
include XOOPS_ROOT_PATH."/class/xoopsformloader.php";

if ( file_exists("../language/".$xoopsConfig['language']."/blocks.php") ) {
	include("../language/".$xoopsConfig['language']."/blocks.php");
} else {
	include("../language/english/blocks.php");
}

global $user;

//CheckIfBanned();
//$pchat = "false";
//if ($pchat == "false") {
		//if ($room == "") {
$room = getDefaultRoom();
		//}
//}

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
echo "<base target='_self'>\r\n";
echo "<form name='msgform' action='blockbottom.php?op=insertmessage&room=".$room."&pchat=".$pchat."&user=".$user."' method='POST'>";
echo "<table width=\"93%\">";
echo "<tr><td valign='top'>";
echo "<input type='text' id='msgtextbox' name='msg' size='".$xoopsModuleConfig["blockinputlength"]."' maxlength='".$xoopsModuleConfig["blockmaxlength"]."' ></td></tr>";
echo "<tr><td><input type='submit' name='msg_submit' value='"._BL_XCHAT_MSGSEND."'></td></tr>";

echo "<tr><td><input type='checkbox' name='msg_bold'><b>"._BL_XCHAT_FONTBOLD."</b></input>&nbsp;
	<input type='checkbox' name='msg_italic'><i>"._BL_XCHAT_FONTITALIC."</i></input>&nbsp;
	<input type='checkbox' name='msg_underlined'><u>"._BL_XCHAT_FONTUNDERL."</u></input></td></tr>";

echo "<tr><td style='width: 150;'><br><br>";

xoopsSmilies("msgtextbox");
echo "</td></tr><tr><td>";

$thecolorarr = array(_BL_XCHAT_COLOR1,_BL_XCHAT_COLOR2,_BL_XCHAT_COLOR3,_BL_XCHAT_COLOR4,
						 _BL_XCHAT_COLOR5,_BL_XCHAT_COLOR6,_BL_XCHAT_COLOR7,_BL_XCHAT_COLOR8,
						   _BL_XCHAT_COLOR9,_BL_XCHAT_COLOR10,_BL_XCHAT_COLOR11);

$thecolornames = array(_BL_XCHAT_BLACK,_BL_XCHAT_DARKBLUE,_BL_XCHAT_BLUE,_BL_XCHAT_LGREEN,
							 _BL_XCHAT_GREEN,_BL_XCHAT_DARKRED,_BL_XCHAT_RED,_BL_XCHAT_ORANGE,
							 _BL_XCHAT_GOLD,_BL_XCHAT_SILVER,_BL_XCHAT_WHITE);

echo "</td></tr>";

echo "<tr><td>";
echo ""._BL_XCHAT_SELECTCOLOR."";
echo "&nbsp;";
echo "<select name='colors'>";
echo "<option>"._BL_XCHAT_AUTO."</option>";

$countcolor = 0;
$currentcolor = _BL_XCHAT_AUTO;
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

echo "</select></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
echo "</body>";

if (isset($op)) {
	if (!$HTTP_POST_VARS['msg'] == "")		{
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

		if ($mcolor == _BL_XCHAT_AUTO) {
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
	}
}
echo "<script language='JavaScript'>\r\n";
echo "<!--\r\n";
echo "		top.ChatFrame.location.reload();\r\n";
echo "//-->\r\n";
echo "</script>\r\n";
echo "</html>";
include(XOOPS_ROOT_PATH."/footer.php");

?>