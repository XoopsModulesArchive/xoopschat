<?php
// $Id: admin.php,v 1.2 2003/09/03 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.de >
// ------------------------------------------------------------------------- //
// Original Author : Pietro Lascari - http://www.cmq.it
// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

define("_AM_XCHAT_CHAT", "Xoops Chat");
define("_AM_XCHAT_CHAT_ADMINPAGE", "このページではXoopsチャットモジュールを管理することができます。");
define("_AM_XCHAT_D1", "部屋を新規作成・修正します。");
define("_AM_XCHAT_D2", "メッセージを検索・削除します。");
define("_AM_XCHAT_D3", "一時的に特定のユーザにアクセス制限をかけます。");
define("_AM_XCHATCONFIG","設定");
define("_AM_XCHAT_AD1", "rooms.php");
define("_AM_XCHAT_AD2", "messages.php");
define("_AM_XCHAT_AD3", "banusers.php");
define("_AM_XCHAT_ADMENU1","部屋管理");
define("_AM_XCHAT_ADMENU2","メッセージ管理");
define("_AM_XCHAT_ADMENU3","ユーザ追放");
define("_AM_XCHAT_CHAT_ROOM", "部屋と行動:");
define("_AM_XCHAT_REDIT", "edit");	//日本語はマズイ
define("_AM_XCHAT_RERASE", "erase");	//日本語はマズイ
define("_AM_XCHAT_PROCEED", "続ける");
define("_AM_XCHAT_ADDROOM", "部屋追加");
define('_AM_XCHAT_ROOM_TYPE', '部屋タイプ:');
define("_AM_XCHAT_TYPEDESCR", "<b>"._AM_XCHAT_ROOM_TYPE."</b> すべてのユーザに見えるチャット・ルームを作るには<b>2</b>を、選択されたユーザーズグループにのみ見えるチャット・ルームのを作るには<b>3</b>を入力します。");
define("_AM_XCHAT_RCREATE", "create");	//日本語はマズイ
define("_AM_XCHAT_ROOMNAME", "名前:");
define("_AM_XCHAT_ROOM_GROUP", "部屋でチャットする許可を行っているユーザーズグループ");
define("_AM_XCHAT_CHATGO", "送信");
define("_AM_XCHAT_ADMININIT", "管理インデックス");
define("_AM_XCHAT_MSRC", "search");	//日本語はマズイ
define("_AM_XCHAT_MSGSEARCH", "メッセージ検索");
define("_AM_XCHAT_MERASEALL", "reset");	//日本語はマズイ
define("_AM_XCHAT_MSGTRASH", "全メッセージ消去");
define("_AM_XCHAT_BSELECT", "select");	//日本語はマズイ
define("_AM_XCHAT_BANUSER", "確認");
define("_AM_XCHAT_BANAUSER", "禁止ユーザ:");
define("_AM_XCHAT_BDELDESCR", "禁止されたユーザ:ユーザを選んで、ユーザが雑談に再びアクセスすることを可能にするためにボタンをクリックしてください。");
define("_AM_XCHAT_NOUSERSBANNED", "禁止されたユーザはいません。");
define("_AM_XCHAT_BBAN", "You've chosen to ban the user <b>%s</b>, now specify for how many days he will not be able to access the chat.");
define("_AM_XCHAT_BDAYS", "日");
define("_AM_XCHAT_BFOR", "For");
define("_AM_XCHAT_BSET", "Set");	//日本語はマズイ
define("_AM_XCHAT_BBANNED", "ユーザ<b>%s</b>が禁止されています。");
define("_AM_XCHAT_BBANNEDTIME", "for <b>%s</b> "._AM_XCHAT_BDAYS.".");
define("_AM_XCHAT_BINIT", "禁止ユーザ管理インデックスに戻る");
define("_AM_XCHAT_BDEL", "delete");	//日本語はマズイ
define("_AM_XCHAT_BREM", "選択されたユーザは再びチャットにアクセスすることができます。");
define("_AM_XCHAT_MLIST", "list");	//日本語はマズイ
define("_AM_XCHAT_SEARCHCRITERIA", "下記期間のメッセージを");
define("_AM_XCHAT_DFROM", "from");
define("_AM_XCHAT_DTO", "to");
define("_AM_XCHAT_MLISTALL", "全てのメッセージを表示");
define("_AM_XCHAT_MLISTTODAY", "今日送られたメッセージをすべて表示します。");
define("_AM_XCHAT_MSRCRES", "検索結果");
define("_AM_XCHAT_MLISTDESCR", "メッセージを削除するためには、フィールドの内容をクリックしてください。");
define("_AM_XCHAT_MID", "Id");
define("_AM_XCHAT_MROOM", "部屋");
define("_AM_XCHAT_MMSG", "テキスト");
define("_AM_XCHAT_MERASE", "erase");	//日本語はマズイ
define("_AM_XCHAT_MPOSTEDBY", "アバター");
define("_AM_XCHAT_MDATE", "日付");
define("_AM_XCHAT_WARNING", "警告:");
define("_AM_XCHAT_MSURETODELETEALL", "データベース中のメッセージをすべて削除してもよいですか？<br><b>この操作は取り消しできません。</b>");
define("_AM_XCHAT_MDELOK", "確認");
define("_AM_XCHAT_MINIT", "メッセージ管理インデックスに戻る"); 
define("_AM_XCHAT_MNOMESSAGES", "選択された期間のメッセージはありません。");
define("_AM_XCHAT_REPEATSEARCH", "再試行");
define("_AM_XCHAT_EDITROOM", "部屋編集");
define("_AM_XCHAT_MDALL", "メッセージがすべて削除されました。");
define("_AM_XCHAT_SURETODELETE", "部屋<b>%s</b>を削除しても良いですか？");
define("_AM_XCHAT_DELCONFIRM", "確認");
define("_AM_XCHAT_RINIT", "部屋管理インデックスに戻る");
define("_AM_XCHAT_RDELETED", "チャット部屋 <b>%s</b> を削除しました。");
define("_AM_XCHAT_TYPEDEDIT", "<b>"._AM_XCHAT_ROOM_TYPE."</b> すべてのユーザに見えるチャット・ルームを作るには<b>2</b>を、選択されたユーザーズグループにのみ見えるチャット・ルームのを作るには<b>3</b>を入力します。");
define("_AM_XCHAT_RSAVE","save");	//日本語はマズイ
define("_AM_XCHAT_CHAT_ID","Room Id:");
define("_AM_XCHAT_RUPDATED", "チャット部屋 <b>%s</b> が設定されました。");
define("_AM_XCHAT_RCREATED", "チャット部屋 <b>%s</b> を新規作成しました。");
define("_AM_XCHAT_DEFECTION", "チャット部屋作成中にエラーが生じました。<br>正確な情報を指定したか確認してください。");
define("_AM_XCHAT_UNABLETOEDITTYPE", "<b>デフォルト室と部屋タイプを交換できません。</b>.");
define("_AM_XCHAT_TYPEMISMATCH", "<b>デフォルトとしてこの部屋を指定できません。</b>.");
define("_AM_XCHAT_UNABLETOERASE", "<b>デフォルト室は削除できません。</b>.");
define("_AM_XCHAT_RDBERR", "データベース失敗:");
define("_AM_XCHAT_NOTFOUND", "<b>部屋は見つかりませんでした。</b>.");
define("_AM_XCHAT_MCLOSEWIN", "メッセージ管理に戻る");
define("_AM_XCHAT_MERASEMSG", "メッセージ削除");
define("_AM_XCHAT_MERASECONFIRMATION", "選択されたメッセージの取り消しを確認してください。<br><b>この操作は取り消しできません。</b>");
define("_AM_XCHAT_ERASEDEFINIT", "削除");
define("_AM_XCHAT_MDELETED", "選択されたメッセージが削除されました。");

?>