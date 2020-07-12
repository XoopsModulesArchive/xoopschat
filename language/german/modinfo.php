<?php
// $Id: modinfo.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

// The name of this module
define("_MI_XCHAT_NAME","XoopsChat");

// A brief description of this module
define("_MI_XCHAT_DESC","Ein Chatmodul für XOOPS 2.0.x");

// Names of admin menu items
define("_MI_XCHAT_ADMENU1","Räume");
define("_MI_XCHAT_ADMENU2","Nachrichten");
define("_MI_XCHAT_ADMENU3","Mitglieder ausschließen");
define("_MI_XCHATMSGFRAME","H&ouml;he Messageframe");
define("_MI_XCHATMSGFRAMEDESC","Hier wird die H&ouml;he des Frames in Pixeln festgelegt, in dem die Nachrichten eingegeben werden");
define("_MI_XCHATCHATFRAME","H&ouml;he Chatframe");
define("_MI_XCHATCHATFRAMEDESC","Hier wird die H&ouml;he des Frames in Pixeln festgelegt, in dem die Nachrichten angezeigt werden");
define("_MI_XCHATSTATFRAME","H&ouml;he Statistikframe");
define("_MI_XCHATSTATFRAMEDESC","Hier wird die H&ouml;he des Frames in Pixeln festgelegt, in dem die Statistiken angezeigt werden");
define("_MI_XCHATSTATREFRESH","Statistik-Aktualisierung");
define("_MI_XCHATSTATREFRESHDESC","Hier wird der Wert (in Sekunden) festgelegt, nach welchem Zeitraum die Statistiken aktualisiert werden");
define("_MI_XCHATCHATREFRESH","Chat-Aktualisierung");
define("_MI_XCHATCHATREFRESHDESC","Hier wird der Wert (in Sekunden) festgelegt, nach welchem Zeitraum die Chatnachrichten aktualisiert werden");

define("_MI_XCHATMSGFRAMEBGCOL","Hintergrundfarbe Messageframe");
define("_MI_XCHATMSGFRAMEBGCOLDESC","Hier wird die Hintergrundfarbe des Messageframes in hexadezimaler Form festgelegt");
define("_MI_XCHATCHATFRAMEBGCOL","Hintergrundfarbe Chatframe");
define("_MI_XCHATCHATFRAMEBGCOLDESC","Hier wird die Hintergrundfarbe des Chatframes in hexadezimaler Form festgelegt");
define("_MI_XCHATSTATFRAMEBGCOL","Hintergrundfarbe Statistikframe");
define("_MI_XCHATSTATFRAMEBGCOLDESC","Hier wird die Hintergrundfarbe des Statistikframes in hexadezimaler Form festgelegt");
define("_MI_XCHAT_HTML","HTML erlauben");
define("_MI_XCHAT_HTMLDESC","Hier wird festgelegt, ob HTML-Tags in den Chatnachrichten erlaubt sind");
define("_MI_XCHATBLOCKNAME","XoopsChat-Block");
define("_MI_XCHATBLOCKDESC","XoopsChat als Shoutbox");
define("_MI_XCHAT_ALLOPRIV","Privatchat erlauben");
define("_MI_XCHAT_ALLOPRIVDESC","Hier wird festgelegt, ob private Chats erlaubt werden sollen");
define("_MI_XCHATCONFIG","Einstellungen");
define("_MI_XCHAT_ORDER","Reihenfolge Chatnachrichten");
define("_MI_XCHAT_ORDERDESC","Hier wird festgelegt, ob die neueste Chatnachricht unten (DESC) oder oben (ASC) angezeigt wird");
define("_MI_XCHAT_AUTODEL","Löschung Chatnachrichten");
define("_MI_XCHAT_AUTODELDESC","Hier wird festgelegt, nach wievielen Tagen die Chatnachrichten automatisch gelöscht werden sollen");
define("_MI_XCHAT_BLMESHEIGHT","Frameh&ouml;he Shoutbox Message");
define("_MI_XCHAT_BLMESHEIGHTDESC","Hier wird die Frameh&ouml;he des Nachrichtenframes in der Shoutbox festgelegt");
define("_MI_XCHAT_BLINPHEIGHT","Frameh&ouml;he Shoutbox Eingabe");
define("_MI_XCHAT_BLINPHEIGHTDESC","Hier wird die Frameh&ouml;he des Eingabeframes in der Shoutbox festgelegt");
define("_MI_XCHAT_BLWORDWRAP","Textumbruch Shoutbox");
define("_MI_XCHAT_BLWORDWRAPDESC","Hier wird festgelegt, nach wie vielen Zeichen W&ouml;rter getrennt werden sollen, um horizontales Scrollen bei &uuml;berlangen Zeichenketten zu vermeiden");
define("_MI_XCHAT_BLINPLENGTH","L&auml;nge Eingabefeld Shoutbox");
define("_MI_XCHAT_BLINPLENGTHDESC","Hier wird die L&auml;nge des Eingabefelds f&uuml;r die Shoutbox festgelegt");
define("_MI_XCHAT_BLMAXLENGTH","Max. Zeichen Shoutbox");
define("_MI_XCHAT_BLMAXLENGTHDESC","Hier wird festgelegt wie lang (in Zeichen) die Shoutbox-Nachricht sein darf");
define("_MI_XCHAT_INPLENGTH","L&auml;nge Eingabefeld Chat");
define("_MI_XCHAT_INPLENGTHDESC","Hier wird die L&auml;nge des Eingabefelds f&uuml;r den Chat festgelegt");
define("_MI_XCHAT_MAXLENGTH","Max. Zeichen Chat");
define("_MI_XCHAT_MAXLENGTHDESC","Hier wird festgelegt wie lang (in Zeichen) die Chatnachricht sein darf");

//added2709
define("_MI_XCHAT_GUESTNAME","Namen des Gastes festlegen");
define("_MI_XCHAT_GUESTNAMEDESC","Hier wird festgelegt, wie Gäste im Chat genannt werden sollen");
define("_MI_XCHAT_ANONAME","Gast");
define("_MI_XCHAT_TEXTAREA","Mehrzeilige Nachrichteneingabe");
define("_MI_XCHAT_TEXTAREADESC","Hier wird festgelegt, ob die Nachrichteneingabe in ein mehrzeiliges Eingabefeld erfolgen soll");
define("_MI_XCHAT_TXTAREACOLS","Zeichenanzahl mehrzeilige Nachrichteneingabe");
define("_MI_XCHAT_TXTAREACOLSDESC","Hier wird festgelegt wieviele Zeichen breit das mehrzeilige Eingabefeld sein soll");
define("_MI_XCHAT_TXTAREAROWS","Reihenanzahl mehrzeilige Nachrichteneingabe");
define("_MI_XCHAT_TXTAREAROWSDESC","Hier wird festgelegt wieviele Reihen das mehrzeilige Eingabefeld haben soll");

//added071003
define("_MI_XCHATWHOSCHATTING","Wer chattet?");
define("_MI_XCHATWHOSCHATTINGDESC","Anzeige wer momentan chattet");
?>
