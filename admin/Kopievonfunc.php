<?php
// $Id: func.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

include_once("../class/timestamp.php");

$timestamp = new XchatTime();

$qc = "";
$rc = "";

// For webserver with register_globals off //
if (!empty($HTTP_GET_VARS)) {
	extract($HTTP_GET_VARS);
}
if (!empty($HTTP_POST_VARS)) {
	extract($HTTP_POST_VARS);
}
if (!empty($HTTP_SERVER_VARS)) {
	extract($HTTP_SERVER_VARS);
}

// The following functions build dinamically the code that is necessary to fill //
// html forms for creating/editing rooms. //

function make_rooms_form() {
	global $xoopsDB,$qc,$rc;

	$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")."";
	$rc = $xoopsDB->query($qc);

	echo "<form name='roomedit' method='GET' action='rooms.php'>\n";
	echo "<select name='roomname'>\n";
	while ( $room = $xoopsDB->fetchRow($rc) ) {
		echo "<option>".$room[1]."</option>\n";
	}
	echo "</select>\n";

	echo "<select name='do'>\n";
	echo "<option selected>"._AM_XCHAT_REDIT."</option>\n";
	echo "<option>"._AM_XCHAT_RERASE."</option>\n";
	echo "</select>\n";

	echo "<br><br>\n";
	echo "<input name='exec' type='submit' value='"._AM_XCHAT_PROCEED."'>\n";
	echo "</form>\n";
}

function make_editroom_form($room) {
	global $xoopsDB,$qc,$rc;

	$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")." ";
	$qc .= "WHERE room_name = '".$room."'";

	$rc = $xoopsDB->query($qc);
	$eroom = $xoopsDB->fetchRow($rc);

	echo "<form name='editroom' method='POST' action='rooms.php?do="._AM_XCHAT_RSAVE."'>\n";
	echo "<input name='oldname' type='hidden' value='".$eroom[1]."'>\n";
	echo "<table border='0' cellpadding='0' cellspacing='0' align='center' width='100%'>\n";
	echo "<tr><td class='bg2'>\n";
		echo "<table border='0' cellpadding='4' cellspacing='1' align='center' width='100%'>\n";
	echo "<tr><td align='left' valign='middle' width='20%' class='bg3'>\n";
	echo "<b>"._AM_XCHAT_CHAT_ID."</b>";
	echo "</td>\n";
	echo "<td align='left' valign='middle' width='80%' class='bg1'>\n";
	echo "<input name='room_id' type='text' style='width: 20;' value='".$eroom[0]."'>\n";
	echo "</td></tr>\n";

	echo "<tr><td align='left' valign='middle' width='20%' class='bg3'>\n";
	echo "<b>"._AM_XCHAT_ROOMNAME."</b>";
	echo "</td>\n";
	echo "<td align='left' valign='middle' width='80%' class='bg1'>\n";
	echo "<input name='room_name' type='text' value='".$eroom[1]."'>\n";
	echo "</td></tr>\n";

	if ( $eroom[2] == 1 ) {
		echo "</table>\n";
		echo "</td></tr></table>\n";
		echo "<br><br><input name='go' type='submit' value='"._AM_XCHAT_CHATGO."'>\n";
		echo "</form>\n";

		exit();
	}

	echo "<tr><td align='left' valign='middle' width='20%' class='bg3'>\n";
	echo "<b>"._AM_XCHAT_ROOM_TYPE."</b>\n";
	echo "</td>\n";
	echo "<td align='left' valign='middle' width='80%' class='bg1'>\n";
	echo "<input name='room_type' type='text' style='width: 20;' value='".$eroom[2]."'>\n";
	echo "</td></tr>\n";

	echo "<tr><td align='left' valign='middle' width='20%' class='bg3'>\n";
	echo "<b>"._AM_XCHAT_ROOM_GROUP."</b>\n";
	echo "</td>\n";
	echo "<td align='left' valign='middle' width='80%' class='bg1'>\n";
	print_exoops_groups($eroom[0]);
	echo "</td></tr>\n";
	echo "</table>\n";

	echo "</td></tr>\n";
	echo "</table>\n";
	echo "<br><br><input name='go' type='submit' value='"._AM_XCHAT_CHATGO."'>\n";
	echo "</form>\n";
}

function make_newroom_form() {
	echo "<form name='editroom' method='POST' action='rooms.php?do="._AM_XCHAT_RCREATE."'>\n";
	echo "<table border='0' cellpadding='0' cellspacing='0' align='center' width='100%'>\n";
	echo "<tr><td class='bg2'>\n";
	echo "<table border='0' cellpadding='4' cellspacing='1' align='center' width='100%'>\n";
	echo "<tr><td align='left' valign='middle' width='20%' class='bg3'>\n";
	echo "<b>"._AM_XCHAT_ROOMNAME."</b>\n";
	echo "</td>\n";
	echo "<td align='left' valign='middle' width='80%' class='bg1'>\n";
	echo "<input name='room_name' type='text'>\n";
	echo "</td></tr>\n";

	echo "<tr><td align='left' valign='middle' width='20%' class='bg3'>\n";
	echo "<b>"._AM_XCHAT_ROOM_TYPE."</b>";
	echo "</td>\n";
	echo "<td align='left' valign='middle' width='80%' class='bg1'>\n";
	echo "<input name='room_type' type='text' style='width: 20;'>\n";
	echo "</td></tr>\n";

	echo "<tr><td align='left' valign='middle' width='20%' class='bg3'>\n";
	echo "<b>"._AM_XCHAT_ROOM_GROUP."</b>";
	echo "</td>\n";
	echo "<td align='left' valign='middle' width='80%' class='bg1'>\n";
	print_exoops_groups();
	echo "</td></tr>\n";
	echo "</table>\n";

	echo "</td></tr>\n";
	echo "</table>\n";
	echo "<br><br><input name='go' type='submit' value='"._AM_XCHAT_CHATGO."'>\n";
	echo "</form>\n";
}

function save_room($id,$name,$type,$group,$oldroom) {
	global $xoopsDB,$qc,$rc;

	$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")." WHERE rid = ".$id."";

	$rc = $xoopsDB->query($qc);
	if ( $xoopsDB->getRowsNum($rc) == 0 ) {
		echo _AM_XCHAT_WARNING._AM_XCHAT_NOTFOUND;
		echo "<br><br>\r\n";
		echo "<center><a href='rooms.php'>"._AM_XCHAT_RINIT."</a></center>";
		exit();
	}
	$room = $xoopsDB->fetchRow($rc);

	if ( $room[2] == 1 ) {
		$qc = "UPDATE ".$xoopsDB->prefix("myxoopschat_rooms")." SET room_name = '$name' WHERE rid = '$id'";
	}

	if ( $room[2] == 2 ) {
		$qc  = "UPDATE ".$xoopsDB->prefix("myxoopschat_rooms")." SET room_name = '$name', room_type = $type WHERE rid = '$id'";
		if ( $type == "1" ) {
			echo _AM_XCHAT_WARNING._AM_XCHAT_TYPEMISMATCH;
			echo "<br><br>\r\n";
			echo "<center><a href='rooms.php'>"._AM_XCHAT_RINIT."</a></center>";
			exit();
		}
	}

	if ( $room[2] == 3 ) {
		$qc = "UPDATE ".$xoopsDB->prefix("myxoopschat_rooms")." SET room_name = '$name', room_type = $type WHERE rid = '$id'";
		if ( $type == "1" ) {
			echo _AM_XCHAT_WARNING._AM_XCHAT_TYPEMISMATCH;
			echo "<br><br>";
			echo "<center><a href='rooms.php'>"._AM_XCHAT_RINIT."</a></center>";
			exit();
		}
	}
	$xoopsDB->query($qc);

	if ( $type == "3" ) {
		$err = update_room_groups($id,$group);
		if ($err != 0) {
			echo _CHAT_GRPUPDATE;
		}
	}

	$qc = "UPDATE ".$xoopsDB->prefix("myxoopschat_messages")." SET chatroom = '$name' WHERE chatroom = '$oldroom'";
	$xoopsDB->query($qc);
	$err = $xoopsDB->error();
	if ( $err == 0 ) {
		echo sprintf(_AM_XCHAT_RUPDATED, $name);
	} else {
		echo _AM_XCHAT_RDBERR."<br><br><b>.$err.</b>";
	}
}

function print_exoops_groups($rid=-1) {
	global $xoopsDB;

	$qc = "SELECT g.groupid, g.name, v.rid FROM ".$xoopsDB->prefix("groups")." as g LEFT OUTER JOIN ".$xoopsDB->prefix("myxoopschat_visibility")." as v ON g.groupid = v.groupid and v.rid = $rid";

	$rc = $xoopsDB->queryF($qc);

	echo "<select name='room_group[]' multiple='yes'>";
	while ( $gn = $xoopsDB->fetchRow($rc) ) {
		echo "<option";
		if ($gn[2]==$rid) {
			echo " selected";
		}
		echo " value='{$gn[0]}'>".$gn[1]."</option>";
	}
	echo "</select>";
}

function update_room_groups($rid,$rmgroup=array()) {
	global $xoopsDB, $qc, $rc;

	//remove old room-group associations
	$qc = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_visibility")." WHERE rid = $rid";

	$xoopsDB->queryF($qc);
	if ($err = $xoopsDB->error()) return $err;

	// add new room-group associations
	if (count($rmgroup) > 0) {
		$valueslist = '';
		foreach ($rmgroup as $groupid) {
			$valueslist .= "(null,$rid,$groupid),";
		}
		$valueslist = substr($valueslist,0,-1);
		$qc = "INSERT INTO ".$xoopsDB->prefix("myxoopschat_visibility")." VALUES $valueslist";
		$err = $xoopsDB->query($qc);
		if ($err = $xoopsDB->error()) return $err;
	}
	return 0;  // no error!
}

function delete_room($rname,$rcancel) {
	global $xoopsDB,$qc,$rc;

	$qc = "SELECT room_type, rid FROM ".$xoopsDB->prefix("myxoopschat_rooms")." WHERE room_name = '$rname'";

	$rc = $xoopsDB->query($qc);
	$isprinc = $xoopsDB->fetchRow($rc);
	$id = $isprinc[1];

	if ( $isprinc[0] == 1 ) {
		echo _AM_XCHAT_WARNING._AM_XCHAT_UNABLETOERASE;
		echo "<br><br>\r\n";
		echo "<center><a href='rooms.php'>"._AM_XCHAT_RINIT."</a></center>\r\n";
		exit();
	}

	if ( $rcancel == 0 ) {
		echo sprintf(_AM_XCHAT_SURETODELETE, $rname);
		echo "<br><br>\r\n";
		echo "<a href='rooms.php?do="._AM_XCHAT_RERASE."&cancel=1&roomname=".$rname."'>[ "._AM_XCHAT_DELCONFIRM." ]</a> ";
		echo "<a href='rooms.php'>[ "._AM_XCHAT_RINIT." ]</a>";
	} else {
		if ( $isprinc[0] == "3" ) {
			$err = update_room_groups($id);
			if ($err != 0) {
				echo _CHAT_GRPUPDATE;
			}
		}
		$qc  = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_rooms")." WHERE room_name = '$rname'";
		$xoopsDB->queryF($qc);

		$qc = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE chatroom = '$rname'";
		$xoopsDB->queryF($qc);
		$err = $xoopsDB->error();
		if ( $err == 0 ) {
			echo sprintf(_AM_XCHAT_RDELETED, $rname);
			echo "<br><br>";
			echo "<a href='rooms.php'>"._AM_XCHAT_RINIT."</a>";
		} else {
			echo _AM_XCHAT_RDBERR."<br><br><b>.$err.</b>";
		}
	}
}

function create_room($rmname,$rmtype,$rmgroup) {
	global $xoopsDB,$qc,$rc;

	$proceed = true;
	if ( $rmtype == "1" ) {
		$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")." WHERE room_type = 1";
		$rc = $xoopsDB->query($qc);
		if ( $xoopsDB->getRowsNum($rc) == 0 ) {
			$proceed = true;
		} else {
			$proceed = false;
		}
	}

	$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_rooms")." WHERE room_name = '$rmname'";
	$rc = $xoopsDB->query($qc);
	if ( $xoopsDB->getRowsNum($rc) != 0 ) {
		$proceed = false;
	}

	if ( empty($rmname) ) {
		$proceed = false;
	}

	if ( empty($rmtype) ) {
		$proceed = false;
	}

	if ( $proceed == true ) {
		if (empty($rmgroup) || is_array($rmgroup)) {
			$qc = "INSERT INTO ".$xoopsDB->prefix("myxoopschat_rooms")." VALUES ('', '$rmname', '$rmtype')";
			$xoopsDB->query($qc);
			$err = $xoopsDB->error();
			if ( $err != 0 ) {
				echo _AM_XCHAT_RDBERR."<br><br><b>.$err.</b>";
			} elseif ($rmtype == "3") {
				$rmid = $xoopsDB->getInsertId();
				$err = update_room_groups($rmid,$rmgroup);
				if ($err != 0) {
				   echo _CHAT_GRPUPDATE;
				}
			}
			if ($err == 0) echo sprintf(_AM_XCHAT_RCREATED, $rmname);
		}else {
		echo _CHAT_GRPARRAY;
		}
	} else {
		echo "<b>"._AM_XCHAT_WARNING."</b>"._AM_XCHAT_DEFECTION;
	}
}

function reset_messages($confirm) {
	global $xoopsDB,$qc,$rc;

	if ( $confirm == 0 ) {
		echo _AM_XCHAT_MSURETODELETEALL;
		echo "<br><br>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MERASEALL."&ok=1'>"._AM_XCHAT_MDELOK."</a> ]\n";
		echo " [ <a href='messages.php'>"._AM_XCHAT_MINIT."</a> ]\n";
	}

	if ( $confirm == 1 ) {
		$xoopsDB->queryF("DELETE FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE mid");
		$err = $xoopsDB->error();
		if ( $err == 0 ) {
			echo _AM_XCHAT_MDALL."\n";
			echo "<br><br>\n";
			echo "[ <a href='messages.php'>"._AM_XCHAT_MINIT."</a> ]\n";
		} else {
			echo _AM_XCHAT_RDBERR."<br><br><b>.$err.</b>\n";
		}
	}
}

function make_searchmessages_form() {
	echo "<form name='searchform' action='messages.php' method='GET'>\n";
	echo "<input name='do' type='hidden' value='"._AM_XCHAT_MLIST."'>\n";
	echo "<input name='mode' type='hidden' value='date'>\n";
	echo _AM_XCHAT_SEARCHCRITERIA."\n";
	echo "<br><br>"._AM_XCHAT_DFROM."&nbsp;\n";
	echo "<input name='datedfrom' type='text' maxlength='2' size='2'>\n";
	echo "<input name='datemfrom' type='text' maxlength='2' size='2'>\n";
	echo "<input name='dateyfrom' type='text' maxlength='4' size='4'>\n";
	echo "&nbsp;"._AM_XCHAT_DTO."&nbsp;\n";
	echo "<input name='datedto' type='text' maxlength='2' size='2'>\n";
	echo "<input name='datemto' type='text' maxlength='2' size='2'>\n";
	echo "<input name='dateyto' type='text' maxlength='4' size='4'>\n";
	echo "<br><br><input name='datego' type='submit' value='"._AM_XCHAT_MLIST."'>\n";
	echo "</form>\n";
}

function searchmessages_list($smode,$dfrom,$mfrom,$yfrom,$dto,$mto,$yto,$orderby) {
	global $xoopsDB,$qc,$rc,$timestamp;

	if (empty($orderby)) {
		$orderby = "chatroom";
	}

	$tsfrom = $timestamp->evalDate($dfrom,$mfrom,$yfrom);
	$tsto = $timestamp->evalDate($dto,$mto,$yto);

	if ($smode == "") {
		$smode = "all";
	}

	if ($smode == "date") {
		$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE post_time BETWEEN $tsfrom AND $tsto";
	} else if ($smode == "today") {
		$mins = $timestamp->evalStamp(0,0,0,date("d"),date("m"),date("Y"));
		$maxs = $timestamp->evalStamp(23,59,59,date("d"),date("m"),date("Y"));

		$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE post_time BETWEEN $mins AND $maxs";
	} else {
		if ($smode == "all") {
			$qc = "SELECT * FROM ".$xoopsDB->prefix("myxoopschat_messages")."";
		}
	}
	$qc .= " ORDER BY $orderby ASC";
	$rc = $xoopsDB->query($qc);

	if ( !$xoopsDB->getRowsNum($rc) == 0 ) {
		echo "<script language='JavaScript'>\n";
		echo "<!--\n";
		echo "	function doDelete(link) {\n";
		echo "		window.open(link,'_self');\n";
		echo "		opener = self;\n";
		echo "	}\n";
		echo "//-->\n";
		echo "</script>\n";

		echo "<table border=0 cellpadding=0 cellspacing=0 align='center' width='100%'>\n";
		echo "<tr><td class='bg2'>\n";
		echo "<table border=0 cellpadding=4 cellspacing=1 align='center' width='100%'>\n";
		echo "<tr>\n";
		echo "<td align='center' class='bg1' width='5%'>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MLIST."&datedfrom=".$dfrom."&datemfrom=".		$mfrom."&dateyfrom=".$yfrom."&datedto=".$dto."&datemto=".$mto."&dateyto=".			$yto."&sort=mid&mode=".$smode."'>"._AM_XCHAT_MID."</a> ]\n";
		echo "</td>\n";
		echo "<td align='center' class='bg3' width='15%'>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MLIST."&datedfrom=".$dfrom."&datemfrom=".		$mfrom."&dateyfrom=".$yfrom."&datedto=".$dto."&datemto=".$mto."&dateyto=".			$yto."&sort=chatroom&mode=".$smode."'>"._AM_XCHAT_MROOM."</a> ]\n";
		echo "</td>\n";
		echo "<td align='center' class='bg1' width='60%'>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MLIST."&datedfrom=".$dfrom."&datemfrom=".		$mfrom."&dateyfrom=".$yfrom."&datedto=".$dto."&datemto=".$mto."&dateyto=".			$yto."&sort=message&mode=".$smode."'>"._AM_XCHAT_MMSG."</a> ]\n";
		echo "</td>\n";
		echo "<td align='center' class='bg3' width='11%'>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MLIST."&datedfrom=".$dfrom."&datemfrom=".		$mfrom."&dateyfrom=".$yfrom."&datedto=".$dto."&datemto=".$mto."&dateyto=".			$yto."&sort=poster&mode=".$smode."'>"._AM_XCHAT_MPOSTEDBY."</a> ]\n";
		echo "</td>\n";
		echo "<td align='center' class='bg1' width='9%'>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MLIST."&datedfrom=".$dfrom."&datemfrom=".		$mfrom."&dateyfrom=".$yfrom."&datedto=".$dto."&datemto=".$mto."&dateyto=".			$yto."&sort=post_time&mode=".$smode."'>"._AM_XCHAT_MDATE."</a> ]\n";
		echo "</td>\n";
		echo "</tr>\n";

		while ( $msg = $xoopsDB->fetchRow($rc) ) {
			echo "<tr>\n";
			echo "<td align='center' class='bg3' width'5%'>\n";
			echo $msg[0];
			echo "</td>\n";
			echo "<td align='left' class='bg1' width='15%'>\n";
			echo $msg[1];
			echo "</td>\n";
			echo "<td align='center' class='bg3' OnMouseover=this.className='bg1'\n";
			echo " OnMouseout=this.className='bg3' width='60%' style='cursor: hand;'\n";
			echo " OnClick=javascript:doDelete('messages.php?do="._AM_XCHAT_MERASE."&id=".$msg[0]."&canc=0')>\n";
			echo $msg[2];
			echo "</td>\n";
			echo "<td align='center' class='bg1' width='11%'>\n";
			echo $msg[3];
			echo "</td>\n";
			echo "<td align='center' class='bg3' width='9%'>\n";
			echo $timestamp->GetTime("d/m/Y", $msg[4])."<br>\n";
			echo $timestamp->GetTime("H:i:s", $msg[4]);
			echo "</td>\n";
			echo "</tr>\n";
		}

		echo "</table>\n";
		echo "</td></tr>\n";
		echo "</table>\n";
	} else {
		echo _AM_XCHAT_MNOMESSAGES;
		echo "<br><br>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MSRC."'>"._AM_XCHAT_REPEATSEARCH."</a> ]\n";
		echo " [ <a href='messages.php'>"._AM_XCHAT_MINIT."</a> ]\n";
	}
}

function searchmessages_delete($id,$confirmed) {
	global $xoopsDB,$qc,$rc;

	if ( $confirmed == 1 ) {
		$xoopsDB->queryF("DELETE FROM ".$xoopsDB->prefix("myxoopschat_messages")." WHERE mid='$id'");

		echo _AM_XCHAT_MDELETED;
		echo "<br><br>\n";
		echo "[ <a href='messages.php'>"._AM_XCHAT_MCLOSEWIN."</a> ]\n";
	} else {
		echo _AM_XCHAT_MERASECONFIRMATION;
		echo "<br><br>\n";
		echo "[ <a href='messages.php?do="._AM_XCHAT_MERASE."&id=".$id."&canc=1'>\n";
		echo _AM_XCHAT_ERASEDEFINIT."</a> ]\n";
		echo " [ <a href='messages.php'>"._AM_XCHAT_MCLOSEWIN."</a> ]\n";
	}
}

function ban_make_userslist() {
	global $xoopsDB,$qc,$rc;

	$qc = "SELECT rank_id FROM ".$xoopsDB->prefix("ranks")." WHERE rank_title = 'Webmaster'";
	$rc = $xoopsDB->query($qc);
	$cat = $xoopsDB->fetchArray($rc);

	$qc = "SELECT * FROM ".$xoopsDB->prefix("users")."";
	$rc = $xoopsDB->query($qc);

	echo "<center>\n";
	echo "<form name='banuser' action='banusers.php?do="._AM_XCHAT_BSELECT."' method='POST'>\n";
	echo _AM_XCHAT_BANAUSER."&nbsp;";
	echo "<select name='nick'>\n";
	while ( $user = $xoopsDB->fetchArray($rc) ) {
		if ( $user["rank"] != $cat["rank_id"] ) {
			echo "<option>".$user['uname']."</option>\n";
		}
	}
	echo "</select>\n";
	echo "<br><br><input name='goban' type='submit' value='"._AM_XCHAT_CHATGO."'>\n";
	echo "</form>\n";
	echo "</center>\n";
}

function make_ban_form($user) {
	echo sprintf(_AM_XCHAT_BBAN, $user);
	echo "<form name='ban' action='banusers.php?do="._AM_XCHAT_BSET."&user=".$user."' method='POST'>\n";
	echo _AM_XCHAT_BFOR."&nbsp;";
	echo "<input name='bandays' type='text' maxlength='2' size='2' value='1'>\n";
	echo _AM_XCHAT_BDAYS."<br><br>\n";
	echo "<input name='gobset' type='submit' value='"._AM_XCHAT_BANUSER."'>\n";
	echo "</form>\n";
}

function set_ban($user,$days) {
	global $xoopsDB,$qc,$rc,$timestamp;

	$today = $timestamp->evalDate(date("d"),date("m"),date("Y"));
	$expires = $timestamp->evalDate(date("d") + $days,date("m"),date("Y"));
	$qc = "INSERT INTO ".$xoopsDB->prefix("myxoopschat_banned")." VALUES ('', '$user', $today, $expires)";

	$xoopsDB->queryF($qc);

	echo sprintf(_AM_XCHAT_BBANNED, $user).sprintf(_AM_XCHAT_BBANNEDTIME, $days);
	echo "<br><br>[ <a href='banusers.php'>"._AM_XCHAT_BINIT."</a> ]\n";
}

function ban_make_bannedusers() {
	global $xoopsDB,$qc,$rc;

	$qc = "SELECT DISTINCT bid,user FROM ".$xoopsDB->prefix("myxoopschat_banned")."";
	$rc = $xoopsDB->queryF($qc);

	if ($xoopsDB->getRowsNum($rc) > 0) {
		echo "<center>\n";
		echo "<form name='unban' action='banusers.php?do="._AM_XCHAT_BDEL."' method='POST'>\n";
		echo "<select name='unbanuser'>\n";

		while ($banned = $xoopsDB->fetchRow($rc)) {
			echo "<option>".$banned[1]."</option>\n";
		}

		echo "</select>\n";
		echo "<br><br><input name='gounban' type='submit' value='"._AM_XCHAT_CHATGO."'>\n";
		echo "</form>\n";
		echo "</center>\n";
	} else {
		echo _AM_XCHAT_NOUSERSBANNED;
	}
}

function rmv_ban($user) {
	global $xoopsDB,$qc,$rc;

	$qc = "DELETE FROM ".$xoopsDB->prefix("myxoopschat_banned")." ";
	$qc .= "WHERE user = '$user'";

	$xoopsDB->queryF($qc);

	echo _AM_XCHAT_BREM."<br><br>\n";
	echo "[ <a href='banusers.php'>"._AM_XCHAT_BINIT."</a> ]\n";
}

?>