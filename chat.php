<?php
// $Id: chat.php,v 1.2 2003/09/03 coded by frankblack
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
include_once("class/timestamp.php");
include("include/xoopsuser.php");

global $xoopsDB,$xoopsConfig,$xoopsTheme, $xoopsModuleConfig;

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

$formatdate = new XchatTime();

echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>";
echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"content-type\" content=\"text/html; charset="._CHARSET."\" />";
echo "<meta http-equiv='refresh' content=".$xoopsModuleConfig["chatrefresh"].">";
echo "<link rel='stylesheet' type='text/css' media='all' href='".xoops_getcss($xoopsConfig['theme_set'])."' />";
echo "</head>";
echo "<body style='background-color: #".$xoopsModuleConfig["chatframebgcol"].";'>";

if ($pchat == "false") {
	getMessages($room);
} else {
	getPrivatesMessages($user);
}

include(XOOPS_ROOT_PATH."/include/xoopscodes.php");

echo "<table style='width: 98%;'>";

if ( $pchat == "false" ) {
	$countmessages = 1;
	if (!$xoopsDB->getRowsNum($res) == 0) {
		$countmessages = 0;
		$messages_array = array();
		while($r = $xoopsDB->fetchRow($res)) {
			$msgdate = $formatdate->GetTime("d.m. - H:i:s",$r[4]);
			$myts =& MyTextSanitizer::getInstance();
			$messaggio = $myts->smiley($r[2]);

			if ($xoopsModuleConfig['html'] == 0) {
				$messaggio = strip_tags($messaggio, '<font><img><b><i><u>');
			}
			$messages_array[] .= "<tr><td align='left' valign='bottom'><i>".$msgdate."</i> <b>[".$r[3]."] : </b>".$messaggio."<hr noshade></td></tr>";

			// if ($xoopsModuleConfig['soundfile'] != NULL) {
			// echo "<bgsound src=\"".XOOPS_URL."/".$xoopsModuleConfig["soundfile"]."\">";
			// }

			$countmessages++;
		}
		for($x=$countmessages; $x>=0; $x--) {
			echo $messages_array[$x];
		}
	} else {
		echo "<tr><td align='center' valign='middle'>";
		echo "<b>[ "._MA_XCHAT_NOMESSAGES." ]</b>";
		echo "</td></tr>";
	}
	if($countmessages == 0) {
		echo "<tr><td align='center' valign='middle'>";
		echo "<b>[ "._MA_XCHAT_NOMSGSTODAY." ]</b>";
		echo "</td></tr>";
	}
}

if ( $pchat == "true" ) {
	$countmessages = 1;
	if (!$xoopsDB->getRowsNum($res) == 0) {
		$countmessages = 0;
		$messages_array = array();
		while($r = $xoopsDB->fetchRow($res)) {
			$msgdate = $formatdate->GetTime("d.m. - H:i:s",$r[4]);
			$myts =& MyTextSanitizer::getInstance();
			$messaggio = $myts->smiley($r[3]);

			if ($xoopsModuleConfig['html'] == 0) {
				$messaggio = strip_tags($messaggio, '<font><img>');
			}
			$messages_array[] .= "<tr><td align='left' valign='bottom' width='25%'><i>".$msgdate."</i> <b>[".$r[1]."] : </b>".$messaggio."<hr noshade></td></tr>";
			$countmessages++;
		}
		for($x=$countmessages;$x>=0;$x--) {
			echo $messages_array[$x];
		}
	} else {
		echo "<tr><td align='center' valign='middle'>";
		echo "<b>[ "._MA_XCHAT_NOMESSAGES." ]</b>";
		echo "</td></tr>";
	}
	if($countmessages == 0) {
		echo "<tr><td align='center' valign='middle'>";
		echo "<b>[ "._MA_XCHAT_NOMSGSTODAY." ]</b>";
		echo "</td></tr>";
	}
}

echo "</table>";
echo "</body>";
if ($xoopsModuleConfig['orderascdesc'] == 'DESC') {
	echo "<script language='JavaScript'>\n";
	echo "<!--\n";
	echo "		window.scrollBy(0,900000);\n";
	echo "//-->\n";
	echo "</script>\n";
}
echo "</html>";

?>