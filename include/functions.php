<?php
// $Id: functions.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

//include("../../../mainfile.php");
//include("../../header.php");
include(XOOPS_ROOT_PATH."/modules/xoopschat/include/xoopsuser.php");
include_once(XOOPS_ROOT_PATH."/modules/xoopschat/class/timestamp.php");

global $sql;	   //Contains sql queries.
global $res;	   //Contains db queries results.

if (!empty($HTTP_GET_VARS)) {
	extract($HTTP_GET_VARS);
}
	
if (!empty($HTTP_POST_VARS)) {
	extract($HTTP_POST_VARS);
}
	
if (!empty($HTTP_SERVER_VARS)) {
	extract($HTTP_SERVER_VARS);
} 

function DeleteOldMessages() {
	$thedate = new XchatTime();
	global $xoopsDB, $sql, $res, $xoopsModuleConfig;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_messages")."";
	$res = $xoopsDB->query($sql);
	while ($msg = $xoopsDB->fetchRow($res)) {
		$msgd = $thedate->GetTime("d", $msg[4]);
		$todaydate = $thedate->GetTime(date("d"), $thedate->MakeTimeStamp());

	   if (($todaydate - $msgd) >= $xoopsModuleConfig['autodelmsg']) {
			$sql = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE post_time = $msg[4]";
			$xoopsDB->queryF($sql);
		}
	}
}

//function RemoveOldUsers() {
//	global $xoopsDB, $sql, $res, $userarray;
//	$now = time();

 //   $sql = "SELECT nick, timeout_time FROM ".$xoopsDB->prefix("myxoopschat_whosonline")."";

 //   $res = $xoopsDB->queryF($sql);

 //   while ($row = $xoopsDB->fetchRow($res)) {
 //	   if ($row[1] < $now) RemoveUser($row[0]);
 //   }
//}

function CheckIfBanned() {
	$ts = new XchatTime();
	global $xoopsDB, $sql, $res, $userarray;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_banned")." WHERE user = '".$userarray['nick']."'";
	$res = $xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($res) > 0) {
		$userban = $xoopsDB->fetchRow($res);
		$currentTS = $ts->MakeTimeStamp();
		$date = $ts->GetTime("d.m.Y", $userban[3]);
		$time = $ts->GetTime("H:i:s", $userban[3]);

		if ($currentTS < $userban[3]) {
			redirect_header(XOOPS_URL."/",3,sprintf(_MA_XCHAT_YOUWASBANNED, $date) . sprintf(_MA_XCHAT_YOUWASBANNED2, $time));
			include (XOOPS_ROOT_PATH."/footer.php");
			exit();
		} else {
			$sql = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_banned")." WHERE user = '".$userarray['nick']."'";
			$xoopsDB->queryF($sql);
		}
	}
}

function getGroupName() {
	global $xoopsDB,$sql,$userarray,$xoopsUser;

	$grps = $xoopsUser->groups();
	$sql = "SELECT groupid,name FROM ".$xoopsDB->prefix("groups")."";
	$gl = $xoopsDB->query($sql);
	while ($res = $xoopsDB->fetchRow($gl)) {
		foreach ($grps as $g) {
			if ($g == $res[0]) {
				$groupname = $res[1];
			}
		}
	}
	return $groupname;
}

function getUserRooms() {
	global $xoopsDB, $xoopsUser, $xoopsModule;

	if (is_object($xoopsUser)){
		$uid = $xoopsUser->uid();
	}else{
		$uid=0;
	}
	if (is_object($xoopsUser) and $xoopsUser->isAdmin($xoopsModule->mid())){
		$sql = "SELECT rid FROM ".$xoopsDB->prefix("myxoopschat_rooms");
	}elseif(is_object($xoopsUser)) {
		$sql = "SELECT DISTINCT r.rid FROM ".$xoopsDB->prefix("groups_users_link")." as gu, ".$xoopsDB->prefix("myxoopschat_visibility")." as v, ".$xoopsDB->prefix("myxoopschat_rooms")." as r WHERE (r.room_type = 1) OR (r.room_type = 2) OR (r.room_type = 3 AND gu.uid = $uid AND gu.groupid = v.groupid AND v.rid = r.rid)";
	}else {
	   $sql = "SELECT r.rid FROM ".$xoopsDB->prefix("myxoopschat_visibility")." as v, ".$xoopsDB->prefix("myxoopschat_rooms")." as r WHERE (r.room_type = 1) OR (r.room_type = 2) OR (r.room_type = 3 AND v.groupid = 3 AND v.rid = r.rid)";
	}

	$res = $xoopsDB->queryF($sql);
	$rooms = array();
	while ($row = $xoopsDB->fetchRow($res)) {
		$rooms[]=$row[0];
	}
	return $rooms;
}


function getChatRooms($selectedroom) {
    global $xoopsDB, $sql, $res, $userarray, $xoopsUser, $xoopsModule, $xoopsConfig;
    global $archive, $pause;

    $userrooms = getUserRooms();

    $sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")."";
    $roomslist = $xoopsDB->query($sql);

    echo "<br><form name='chatroom' action='index.php?op=changeroom' method='POST'><select name='room'><option>"._MA_XCHATSELROOM."</option>";

    while($res = $xoopsDB->fetchRow($roomslist)) {
        $rid = $res[0];
        if ( in_array($rid,$userrooms) ) {
            echo "<option";
            if ($res[1] == $selectedroom) {
                echo " selected";
            }
            echo ">".$res[1]."</option>\r\n";
        }
    }

   
    echo "</select><input type='submit' value='"._MA_XCHAT_MSGSEND."'></form>";
}

function getDefaultRoom() {
	global $xoopsDB, $sql, $res;

	$sql = "SELECT room_name FROM ".$xoopsDB->prefix("myxoopschat_rooms")." WHERE room_type = 1";
	$cr = $xoopsDB->query($sql);
	$res = $xoopsDB->fetchRow($cr);
	$defroom = $res[0];
	return $defroom;
}

function getMessages($chatroom) {
	global $xoopsDB, $sql, $res, $xoopsModuleConfig;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")." WHERE room_name = '".$chatroom."'";
	$res = $xoopsDB->query($sql);
	$numthisroom = $xoopsDB->getRowsNum($res);
	if ($numthisroom == 0) {
		echo ""._MA_XCHAT_WARNING."&nbsp;"._MA_XCHAT_ROOMNOTEXISTS."\n";
		exit();
	}
	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE chatroom = '".$chatroom."' ORDER BY post_time ".$xoopsModuleConfig['orderascdesc']."";
	$res = $xoopsDB->query($sql);
}

function getPrivatesMessages($userto) {
	global $xoopsDB, $sql, $res, $userarray, $xoopsModuleConfig;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_pmsgs")." WHERE msg_from = '".$userarray['nick']."' AND msg_to = '".$userto."' OR msg_from = '".$userto."' AND msg_to = '".$userarray['nick']."' ORDER BY post_time ".$xoopsModuleConfig['orderascdesc']."";
	$res = $xoopsDB->query($sql);
}

function insertMessage($roomname,$msg,$unick,$ts,$ip) {
	global $xoopsDB, $sql;

	$sql = "INSERT INTO ".$xoopsDB->prefix("myxoopschat_messages")." VALUES ('','".$roomname."','".$msg."','".$unick."',$ts,'".$ip."')";
	$xoopsDB->queryF($sql);
}

function insertPrivateMessage($to,$pmsg,$tsp,$ipaddr) {
	global $xoopsDB, $sql, $userarray;

	$sql = "INSERT INTO ".$xoopsDB->prefix("myxoopschat_pmsgs")." VALUES ('','".$userarray['nick']."','".$to."','".$pmsg."',$tsp,'".$ipaddr."')";
	$xoopsDB->queryF($sql);
}

function AddUser() {
	global $xoopsDB, $sql, $res, $userarray;

	$insert = false;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_whosonline")." WHERE nick = '".$userarray['nick']."'";
	$res = $xoopsDB->query($sql);
	$n = $xoopsDB->getRowsNum($res);
	if ($n == 0) {
		$insert = true;
	}
	$sql = "INSERT INTO ".$xoopsDB->prefix("myxoopschat_whosonline")." VALUES('',".$userarray['uid'].",'".$userarray['nick']."','".$userarray['name']."','".$userarray['mail']."','".$userarray['icqprofile']."','".$userarray['aimprofile']."','".$userarray['yimprofile']."','".$userarray['msnmprofile']."','".$userarray['ipaddress']."')";

	if ($insert == true) {
		$xoopsDB->queryF($sql);
	}
}

function PrintStats() {
	global $xoopsDB, $sql, $res, $userarray, $xoopsConfig, $xoopsLogger, $xoopsModuleConfig;

	$gd = new XchatTime();
	$today = date("d/m/Y");

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_whosonline")." ";
	$whosonline = $xoopsDB->query($sql);
	$nonline = $xoopsDB->getRowsNum($whosonline);
	echo "<b>".$nonline."</b> "._MA_XCHAT_USERINCHAT."<br>\n";

	//Messages sent today.
	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_messages")."";
	$res = $xoopsDB->query($sql);
	$mcount = 0;
	while($mres = $xoopsDB->fetchRow($res)) {
		$dt = $gd->GetTime("d/m/Y", $mres[4]);
		if ($dt == $today) {
			$mcount++;
		}
	}
	echo "<b>".$mcount."</b> "._MA_XCHAT_SENTTODAY."<br>\n";

	//Messages sent from this user.
	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE poster = '".$userarray['nick']."'";
	$res = $xoopsDB->query($sql);
	$countym = 0;
	while($themsg = $xoopsDB->fetchRow($res)) {
		$msdate = $gd->GetTime("d", $themsg[4]);
		$nowdate = $gd->MakeTimeStamp();
		if ($msdate == $gd->GetTime("d", $nowdate)) {
			$countym++;
		}
	}
	echo "<b>".$countym."</b> "._MA_XCHAT_SENTFROMYOU."\n";
	echo "<br><br>\n";

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_whosonline")."";
	$res = $xoopsDB->query($sql);

	if ($xoopsModuleConfig['allopriv'] == 0) {
	echo "";
	}else {
		if ($nonline > 1) {
			echo "<form name='pchatuser' action='request.php' method='GET' target='_parent'>\n";
			echo ""._MA_XCHAT_USERSCHATP."&nbsp;\n";
			echo "<select name='user' style='height:20px'>\n";
			while($un = $xoopsDB->fetchRow($res)) {
				if ($un[2] != $userarray['nick']) {
					echo "<option>".$un[2]."</option>\n";
				}
			}
			echo "</select>\n";
			echo "&nbsp;<input type='submit' value='"._MA_XCHAT_USERLIST."'></input>\n";
			echo "</form>\n";
		} else {
				echo "<b>"._MA_XCHAT_NOUSERSINCHAT."</b></center>\n";
		}
	}
}

function RemoveUser($nick=null) {
	global $xoopsDB, $sql, $userarray;
	if ($nick==null) $nick = $userarray['nick'];

	$sql = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_whosonline")." ";
	$sql .= "WHERE nick = '".$nick."'";
	$xoopsDB->queryF($sql);

	$sql = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_requests")." ";
	$sql .= "WHERE req_from OR req_to = '".$nick."'";
	$xoopsDB->queryF($sql);

	$sql = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_pmsgs")." ";
	$sql .= "WHERE msg_from = '".$nick."'";
	$sql .= "OR msg_to = '".$nick."'";
	$xoopsDB->queryF($sql);
}

function hasPermissions($room) {
	global $xoopsDB, $sql, $res, $userarray, $xoopsUser, $xoopsModule;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")." ";
	$sql .= "WHERE room_name = '".$room."'";

	$rl = $xoopsDB->query($sql);
	$res = $xoopsDB->fetchRow($rl);
	$rid = $res[0];

	$userrooms = getUserRooms();
	if ( $res[2] == 3 ) {
		if ( (is_object($xoopsUser) and !$xoopsUser->isAdmin($xoopsModule->mid()) or ($userarray['uid']==0)) ) {
			if ( !in_array($rid,$userrooms) ) {
				echo "<center>[ "._CHAT_NOPERMISSIONS." ]</center>";
				exit();
			}
		}
	}
}

function getChatRequests($username) {
	global $xoopsDB, $sql, $res, $xoopsUser;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_requests")." WHERE req_to = '".$username."'";
	$retmsgs = $xoopsDB->query($sql);
	$num = $xoopsDB->getRowsNum($retmsgs);

	if ($num == 0) {
		echo _MA_XCHAT_PCHATNOINV;
	} else {
		while ($res = $xoopsDB->fetchRow($retmsgs)) {
			echo sprintf(_MA_XCHAT_PCHATINV, "<b>".$res[1]."</b>");
			echo "&nbsp;[ <a href='accept.php?user=".$res[1]."' target='_parent'>"._MA_XCHAT_ACCEPTPCHAT."</a> ]";
			echo "&nbsp;[ <a onClick='location.reload' href='kick.php?user=".$res[1]."'>"._MA_XCHAT_DENYPCHAT."</a> ]";
		}
	}
}

function SendChatRequest($touser) {
	global $xoopsDB, $sql, $res, $userarray, $xoopsUser, $xoopsLogger;

	if ($touser == $userarray['nick']) {
		redirect_header("index.php",3,_MA_XCHAT_YOUCANTDOTHIS);
		exit();
	}

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_requests")." WHERE req_from = '".$userarray['nick']."' AND req_to = '".$touser."'";
	$res = $xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($res) > 0) {
		redirect_header("pchat.php?user=".$touser."",2,_MA_XCHAT_REQUESTSENTYET);
		exit();
	}

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_whosonline")." WHERE nick = '".$touser."'";
	$res = $xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($res) == 0) {
		redirect_header("index.php",3,_MA_XCHAT_USERISNOTONLINE);
		exit();
	}

	$sql = "INSERT INTO ".$xoopsDB->prefix("myxoopschat_requests")." VALUES ('','".$userarray['nick']."','".$touser."')";
	$xoopsDB->queryF($sql);
}

function KickRequest($userfrom) {
	global $xoopsDB, $sql, $res, $userarray;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_requests")." WHERE req_from = '".$userfrom."' AND req_to = '".$userarray['nick']."'";
	$res = $xoopsDB->query($sql);

	$sql = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_requests")." WHERE req_from = '".$userfrom."' AND req_to = '".$userarray['nick']."'";
	$xoopsDB->queryF($sql);
}

function AcceptChatRequest($userfrom) {
	global $xoopsDB, $sql, $res, $userarray;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_requests")." WHERE req_from = '".$userfrom."' AND req_to = '".$userarray['nick']."'";
	$res = $xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($res) == NULL) {
		echo _MA_XCHAT_REQUESTEXPIRED;
		echo "<script language='JavaScript'>\n";
		echo "<!--\n";
		echo "		window.setTimeout('history.go(-1)', 2000);\n";
		echo "//-->\n";
		echo "</script>\n";
		exit();
	}
	$sql = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_requests")." WHERE req_from = '".$userfrom."' AND req_to = '".$userarray['nick']."'";
	$xoopsDB->queryF($sql);
}

function getUserProfile($usern) {
	global $xoopsDB, $sql, $res;

	$sql = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_whosonline")." WHERE nick = '".$usern."'";
	$res = $xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($res) == 0) {
		return 0;
		exit();
	} else {
		$userprofile = array();
		$userprofile = $xoopsDB->fetchArray($res);
		return $userprofile;
	}
}

//wordwrap-function
function even_better_wordwrap($messaggio,$cols,$cut) {
	$tag_open = '<';
	$tag_close = '>';
	$count = 0;
	$in_tag = 0;
	$str_len = strlen($messaggio);
	$segment_width = 0;
	for ($i=0 ; $i<=$str_len ; $i++){
		if ($messaggio[$i] == $tag_open) {
			$in_tag++;
		} elseif ($messaggio[$i] == $tag_close) {
			if ($in_tag > 0) {
				$in_tag--;
			}
		} else {
			if ($in_tag == 0) {
				$segment_width++;
				if (($segment_width > $cols) && ($messaggio[$i] != " ")) {
					$messaggio = substr($messaggio,0,$i+1).$cut.substr($messaggio,$i+1,$str_len-1);
					$i += strlen($cut);
					$str_len = strlen($messaggio);
					$segment_width = 0;
				}
			}
		}
	}
	return $messaggio;
} 

?>