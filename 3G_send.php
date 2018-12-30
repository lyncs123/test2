<?php

// php の　テストでやっている。
//
//
//


print "";
print "";

fwefwef

print "asdasd";

print


ygygygyy


oprint "ssss";




print "dasdasdasda";

print "1";
print "2";

print "3";
print "4";

print "5";

priont "6";

print "7";
print "8";

print "9";


mb_language("Japanese");

$pCoco = $_GET['coco'];

if ($pCoco == "1") {

	$now = date('Y/m/d H:i:s');

	if (mb_send_mail("shimizu@lyncs.jp", "「異常」防犯カメラ通知　".$now, "「異常」只今防犯カメラに異常を感知しました。\n" . "異常通知時間:" . $now .

 "\n\n
 このメールは防犯カメラ異常感知システムより自動送信しております。
------------------------------------
防犯カメラ異常感知システム
株式会社セブネット
------------------------------------", "From: info@sevnet.jp")) {
	  echo "メールが送信されました。";
	} else {
	  echo "メールの送信に失敗しました。";
	}
}


if ($pCoco == "2") {

	$now = date('Y/m/d H:i:s');

	if (mb_send_mail("shimizu@lyncs.jp", "「正常」防犯カメラ通知　".$now, "「正常」防犯カメラ通知　正常動作しております。\n" . "通知時間:" . $now .

 "\n\n
 このメールは防犯カメラ異常感知システムより自動送信しております。
------------------------------------
防犯カメラ異常感知システム
株式会社セブネット
------------------------------------", "From: info@sevnet.jp")) {
	  echo "メールが送信されました。";
	} else {
	  echo "メールの送信に失敗しました。";
	}
}

if ($pCoco == "3") {

	$now = date('Y/m/d H:i:s');

	if (mb_send_mail("shimizu@lyncs.jp", "「稼働」防犯カメラ通知　".$now, "「稼働」防犯カメラ通知　監視機器が動作しました\n" . "通知時間:" . $now .

 "\n\n
 このメールは防犯カメラ異常感知システムより自動送信しております。
------------------------------------
防犯カメラ異常感知システム
株式会社セブネット
------------------------------------", "From: info@sevnet.jp")) {
	  echo "メールが送信されました。";
	} else {
	  echo "メールの送信に失敗しました。";
	}
}



//sevnet1@ezweb.ne.jp
// shimizu@lyncs.jp


?>
