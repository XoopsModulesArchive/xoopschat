<?php
// $Id: xchatblock.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

function xchat_showchatting() {
        global $xoopsDB, $res, $result, $online;
        $block = array();
        
        $result = $xoopsDB->query("SELECT nick FROM ".$xoopsDB->prefix("myxoopschat_whosonline")." ");

  while($res = $xoopsDB->fetchArray($result)) {

  $online['nick'] = $res['nick'];
  $block['onlines'][] = $online;
  $block['title'] = _MI_XCHATWHOSCHATTINGDESC;

        }

        return $block;
		
}




?>