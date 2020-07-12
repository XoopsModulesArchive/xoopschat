<?php
// $Id: xoops_version.php,v 1.2 2003/09/03 coded by frankblack
// Addition bug fixes 28/06/2005 by Stuie2k
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

$modversion['name'] = _MI_XCHAT_NAME;
$modversion['version'] = 1.5;
$modversion['description'] = _MI_XCHAT_DESC;
$modversion['credits'] = "Pietro Caponecchia<br>Alberto Amitrani<br>Michelangelo Alasso<br>Matteo De Simone<br>Pietro Lascari<br>Redesign frankblack und Marko Schmuck";
$modversion['author'] = "Pietro Lascari/frankblack/Marko Schmuck";
$modversion['license'] = "GNU/GPL";
$modversion['official'] = 1;
$modversion['image'] = "xoopschat_slogo.png";
$modversion['dirname'] = "xoopschat";

// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "myxoopschat_messages";
$modversion['tables'][1] = "myxoopschat_pmsgs";
$modversion['tables'][2] = "myxoopschat_requests";
$modversion['tables'][3] = "myxoopschat_rooms";
$modversion['tables'][4] = "myxoopschat_whosonline";
$modversion['tables'][5] = "myxoopschat_banned";
$modversion['tables'][6] = "myxoopschat_visibility";

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Main contents
$modversion['hasMain'] = 1;

// Search
//$modversion['hasSearch'] = 1;
//$modversion['search']['file'] = "include/search.inc.php";
//$modversion['search']['func'] = "khat_search";

// Templates
//$modversion['templates'][1]['file'] = 'xchat_index.html';
//$modversion['templates'][1]['description'] = 'Die Framesdatei';
//$modversion['templates'][2]['file'] = 'xchat_chat.html';
//$modversion['templates'][2]['description'] = 'Die Nachrichtenanzeige';
//$modversion['templates'][3]['file'] = 'xchat_bottom.html';
//$modversion['templates'][3]['description'] = 'Der Eingabebereich';
//$modversion['templates'][4]['file'] = 'xchat_stats.html';
//$modversion['templates'][4]['description'] = 'Der Statistikbereich';
//$modversion['templates'][5]['file'] = 'xchat_pchat.html';
//$modversion['templates'][5]['description'] = 'Der private Chat';

// Blocks
$modversion['blocks'][1]['file'] = "xchatblock.php";
$modversion['blocks'][1]['name'] = _MI_XCHATBLOCKNAME;
$modversion['blocks'][1]['description'] = _MI_XCHATBLOCKDESC;
$modversion['blocks'][1]['show_func'] = "xchat_show";
$modversion['blocks'][1]['edit_func'] = "xchat_edit";
$modversion['blocks'][1]['options'] = "16|150|170";

$modversion['blocks'][2]['file'] = "whoschatting.php";
$modversion['blocks'][2]['name'] = _MI_XCHATWHOSCHATTING;
$modversion['blocks'][2]['description'] = _MI_XCHATWHOSCHATTINGDESC;
$modversion['blocks'][2]['show_func'] = "xchat_showchatting";
$modversion['blocks'][2]['template'] = 'xchat_block_whochat.html';

// Configsettings
$modversion['config'][1]['name'] = 'msgframe';
$modversion['config'][1]['title'] = '_MI_XCHATMSGFRAME';
$modversion['config'][1]['description'] = '_MI_XCHATMSGFRAMEDESC';
$modversion['config'][1]['formtype'] = 'textbox';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 120;

$modversion['config'][2]['name'] = 'textarea';
$modversion['config'][2]['title'] = '_MI_XCHAT_TEXTAREA';
$modversion['config'][2]['description'] = '_MI_XCHAT_TEXTAREADESC';
$modversion['config'][2]['formtype'] = 'yesno';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = 0;

$modversion['config'][3]['name'] = 'textareacols';
$modversion['config'][3]['title'] = '_MI_XCHAT_TXTAREACOLS';
$modversion['config'][3]['description'] = '_MI_XCHAT_TXTAREACOLSDESC';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 200;

$modversion['config'][4]['name'] = 'textarearows';
$modversion['config'][4]['title'] = '_MI_XCHAT_TXTAREAROWS';
$modversion['config'][4]['description'] = '_MI_XCHAT_TXTAREAROWSDESC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = 5;

$modversion['config'][5]['name'] = 'inputlength';
$modversion['config'][5]['title'] = '_MI_XCHAT_INPLENGTH';
$modversion['config'][5]['description'] = '_MI_XCHAT_INPLENGTHDESC';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'int';
$modversion['config'][5]['default'] = 20;

$modversion['config'][6]['name'] = 'maxlength';
$modversion['config'][6]['title'] = '_MI_XCHAT_MAXLENGTH';
$modversion['config'][6]['description'] = '_MI_XCHAT_MAXLENGTHDESC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'int';
$modversion['config'][6]['default'] = 70;

$modversion['config'][7]['name'] = 'msgframebgcol';
$modversion['config'][7]['title'] = '_MI_XCHATMSGFRAMEBGCOL';
$modversion['config'][7]['description'] = '_MI_XCHATMSGFRAMEBGCOLDESC';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'text';
$modversion['config'][7]['default'] = 'e6e6e6';

$modversion['config'][8]['name'] = 'chatframe';
$modversion['config'][8]['title'] = '_MI_XCHATCHATFRAME';
$modversion['config'][8]['description'] = '_MI_XCHATCHATFRAMEDESC';
$modversion['config'][8]['formtype'] = 'textbox';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = 250;

$modversion['config'][9]['name'] = 'chatframebgcol';
$modversion['config'][9]['title'] = '_MI_XCHATCHATFRAMEBGCOL';
$modversion['config'][9]['description'] = '_MI_XCHATCHATFRAMEBGCOLDESC';
$modversion['config'][9]['formtype'] = 'textbox';
$modversion['config'][9]['valuetype'] = 'text';
$modversion['config'][9]['default'] = 'e0e0e2';

$modversion['config'][10]['name'] = 'statframe';
$modversion['config'][10]['title'] = '_MI_XCHATSTATFRAME';
$modversion['config'][10]['description'] = '_MI_XCHATSTATFRAMEDESC';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'int';
$modversion['config'][10]['default'] = 315;

$modversion['config'][11]['name'] = 'statframebgcol';
$modversion['config'][11]['title'] = '_MI_XCHATSTATFRAMEBGCOL';
$modversion['config'][11]['description'] = '_MI_XCHATSTATFRAMEBGCOLDESC';
$modversion['config'][11]['formtype'] = 'textbox';
$modversion['config'][11]['valuetype'] = 'text';
$modversion['config'][11]['default'] = 'e0e0e2';

$modversion['config'][12]['name'] = 'statrefresh';
$modversion['config'][12]['title'] = '_MI_XCHATSTATREFRESH';
$modversion['config'][12]['description'] = '_MI_XCHATSTATREFRESHDESC';
$modversion['config'][12]['formtype'] = 'textbox';
$modversion['config'][12]['valuetype'] = 'int';
$modversion['config'][12]['default'] = 30;

$modversion['config'][13]['name'] = 'chatrefresh';
$modversion['config'][13]['title'] = '_MI_XCHATCHATREFRESH';
$modversion['config'][13]['description'] = '_MI_XCHATCHATREFRESHDESC';
$modversion['config'][13]['formtype'] = 'textbox';
$modversion['config'][13]['valuetype'] = 'int';
$modversion['config'][13]['default'] = 10;

$modversion['config'][14]['name'] = 'html';
$modversion['config'][14]['title'] = '_MI_XCHAT_HTML';
$modversion['config'][14]['description'] = '_MI_XCHAT_HTMLDESC';
$modversion['config'][14]['formtype'] = 'yesno';
$modversion['config'][14]['valuetype'] = 'text';
$modversion['config'][14]['default'] = 0;

$modversion['config'][15]['name'] = 'allopriv';
$modversion['config'][15]['title'] = '_MI_XCHAT_ALLOPRIV';
$modversion['config'][15]['description'] = '_MI_XCHAT_ALLOPRIVDESC';
$modversion['config'][15]['formtype'] = 'yesno';
$modversion['config'][15]['valuetype'] = 'text';
$modversion['config'][15]['default'] = 0;

$modversion['config'][16]['name'] = 'orderascdesc';
$modversion['config'][16]['title'] = '_MI_XCHAT_ORDER';
$modversion['config'][16]['description'] = '_MI_XCHAT_ORDERDESC';
$modversion['config'][16]['formtype'] = 'textbox';
$modversion['config'][16]['valuetype'] = 'text';
$modversion['config'][16]['default'] = 'DESC';

$modversion['config'][17]['name'] = 'autodelmsg';
$modversion['config'][17]['title'] = '_MI_XCHAT_AUTODEL';
$modversion['config'][17]['description'] = '_MI_XCHAT_AUTODELDESC';
$modversion['config'][17]['formtype'] = 'textbox';
$modversion['config'][17]['valuetype'] = 'int';
$modversion['config'][17]['default'] = 2;

$modversion['config'][18]['name'] = 'blockchatheight';
$modversion['config'][18]['title'] = '_MI_XCHAT_BLMESHEIGHT';
$modversion['config'][18]['description'] = '_MI_XCHAT_BLMESHEIGHTDESC';
$modversion['config'][18]['formtype'] = 'textbox';
$modversion['config'][18]['valuetype'] = 'int';
$modversion['config'][18]['default'] = 150;

$modversion['config'][19]['name'] = 'blockinputheight';
$modversion['config'][19]['title'] = '_MI_XCHAT_BLINPHEIGHT';
$modversion['config'][19]['description'] = '_MI_XCHAT_BLINPHEIGHTDESC';
$modversion['config'][19]['formtype'] = 'textbox';
$modversion['config'][19]['valuetype'] = 'int';
$modversion['config'][19]['default'] = 150;

$modversion['config'][20]['name'] = 'blockwordwrap';
$modversion['config'][20]['title'] = '_MI_XCHAT_BLWORDWRAP';
$modversion['config'][20]['description'] = '_MI_XCHAT_BLWORDWRAPDESC';
$modversion['config'][20]['formtype'] = 'textbox';
$modversion['config'][20]['valuetype'] = 'int';
$modversion['config'][20]['default'] = 16;

$modversion['config'][21]['name'] = 'blockinputlength';
$modversion['config'][21]['title'] = '_MI_XCHAT_BLINPLENGTH';
$modversion['config'][21]['description'] = '_MI_XCHAT_BLINPLENGTHDESC';
$modversion['config'][21]['formtype'] = 'textbox';
$modversion['config'][21]['valuetype'] = 'int';
$modversion['config'][21]['default'] = 20;

$modversion['config'][22]['name'] = 'blockmaxlength';
$modversion['config'][22]['title'] = '_MI_XCHAT_BLMAXLENGTH';
$modversion['config'][22]['description'] = '_MI_XCHAT_BLMAXLENGTHDESC';
$modversion['config'][22]['formtype'] = 'textbox';
$modversion['config'][22]['valuetype'] = 'int';
$modversion['config'][22]['default'] = 70;

$modversion['config'][23]['name'] = 'guestname';
$modversion['config'][23]['title'] = '_MI_XCHAT_GUESTNAME';
$modversion['config'][23]['description'] = '_MI_XCHAT_GUESTNAMEDESC';
$modversion['config'][23]['formtype'] = 'textbox';
$modversion['config'][23]['valuetype'] = 'text';
$modversion['config'][23]['default'] = 'Guest User';

//$modversion['config'][24]['name'] = 'soundfile';
//$modversion['config'][24]['title'] = '_MI_XCHAT_SOUNDFILE';
//$modversion['config'][24]['description'] = '_MI_XCHAT_SOUNDFILEDESC';
//$modversion['config'][24]['formtype'] = 'textbox';
//$modversion['config'][24]['valuetype'] = 'text';
//$modversion['config'][24]['default'] = "modules/xoopschat/msg.wav";
?>