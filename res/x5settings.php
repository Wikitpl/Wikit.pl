<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://wikit.pl/',
	'homepage_url' => 'http://wikit.pl/index.html',
	'icon' => 'http://wikit.pl/favImage.png',
	'version' => '17.1.2.0',
	'sitename' => 'WikIT Informatyk Działdowo Kompleksowe Usługi informatyczne',
	'lang_code' => 'pl-PL',
	'public_folder' => '',
	'salt' => '7tgl0vzbgelvvzpf859vgnl6i3q3xyqsyuohqp3ukmu',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false,
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Sekwencja znaków:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'notification_public_key' => 'f79303e58cc4e66c',
	'notification_private_key' => '2898bcd8ff8b5127',
	'enable_manager_notifications' => false,
	'theme' => 'ice',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Szanowny Kliencie!<br /><br />Dziękujemy za dokonanie zakupu w naszym sklepie.<br /><br />Poniżej podajemy szczegóły zamówienia. Oto podsumowanie zamówienia wraz z listą zamówionych produktów, danymi do faktury, terminem dostawy i wybranym sposobem płatności.',
	'email_closing' => 'Prosimy o kontakt, jeśli potrzebne są dodatkowe informacje.<br /><br />Z poważaniem.<br />      Sprzedawca.',
	'email_digital_shipment_opening' => 'Szanowny Kliencie!<br />Dziękujemy za dokonanie zakupu w naszym sklepie.<br />Oto lista łączy do pobrania zamówionych produktów:',
	'email_digital_shipment_closing' => 'Prosimy o kontakt, jeśli potrzebne są dodatkowe informacje.<br /><br />Z poważaniem. Sprzedawca.',
	'email_physical_shipment_opening' => 'Szanowny Kliencie!<br />Dziękujemy za dokonanie zakupu w naszym sklepie.<br />Oto lista produktów, które zostaną przesłane:',
	'email_physical_shipment_closing' => 'Prosimy o kontakt, jeśli potrzebne są dodatkowe informacje.<br /><br />Z poważaniem. Sprzedawca.',
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => '',
	'vat_type' => 'included'
));

$ecommerce->setDigitalProductsData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
	'template' => array(
),
	'pages' => array(

	)
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = false;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '</head>' . "\n" . '<body bgcolor="#FFBF00" style="background-color: #FFBF00;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 10pt \'Oswald\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: transparent; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 10pt \'Oswald\'; color: #FFFFFF; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Ta wiadomość e-mail zawiera informacje przeznaczone wyłącznie dla wymienionych powyżej adresatów.<br>Jeśli ta wiadomość e-mail została wysłana omyłkowo, prosimy powiadomić o tym nadawcę i usunąć wiadomość bez zachowywania kopii.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#FFBF00';
$ImMailer->emailContentStyle = 'font: normal normal normal 10pt \'Oswald\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Oswald;';

// End of file x5settings.php