<?php
// $Id: xoopsuser.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

//include("../../header.php");
include_once(XOOPS_ROOT_PATH."/modules/xoopschat/class/user.php");	//Retrieve user information.
global $xoopsModuleConfig;
$Xu = new XchatUser();

//Evaluate if the user is logged in.
$check = $Xu->isXchatUser();
$userarray = array();
//If yes, put the user information into an array.
if ($check == 1) {

	$userarray = $Xu->GetUserInfo();
} else {
    $userarray['nick']= $xoopsModuleConfig['guestname'];
    $userarray['uid'] = 0;
    $userarray['group'] = 3;
    $userarray['ipaddress'] = $_SERVER['REMOTE_ADDR'];
}

?>