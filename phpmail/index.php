<?php 
ob_start();
session_start();


//1 hafta falan bu mail açık denemelerinizi yapın...
//Eğitimleri sonra izlerseniz kendi hostunuzda deneyin
//localde çalışması için çok çok şey lazım localle uğraşmayın....
$smtpuser="test@emrahyuksel.com.tr";
$smtphost="mail.emrahyuksel.com.tr";
$smtpport="25";
$smtppass="a1234";



if (isset($_POST['contact_form'])) {
	
	
	$contact_name = htmlspecialchars(trim($_POST['contact_name']));
	$contact_phone = htmlspecialchars(trim($_POST['contact_phone']));
	$contact_mail = htmlspecialchars(trim($_POST['contact_mail']));
	$contact_message= htmlspecialchars(trim($_POST['contact_message']));
	$ip = htmlspecialchars(trim($_POST['iletisim_ip'])); 


	include 'class.phpmailer.php';
	$contact_mails=$smtpuser;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = false;
	$mail->Host = $smtphost;
	$mail->Port = $smtpport;
	$mail->SMTPSecure = 'tls';
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SetFrom($mail->Username, $contact_name);
	$mail->AddAddress($contact_mails, $contact_name);
	$mail->AddAddress($contact_mail, $contact_name);
	$mail->CharSet = 'UTF-8';

	$content = '
	<b>-----------------------</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

		<tr>
			<td class="tg-031e">Full Name</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$contact_name.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Telephone</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$contact_phone.'</td>
		</tr>
		<tr>
			<td class="tg-031e">E-Mail</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$contact_mail.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Message</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$contact_message.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Ip Address</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$ip.'</td>
		</tr>
	</table>';




	$mail->MsgHTML($content);
	if($mail->Send()) {

		header("Location:../contact.php?case=ok");
	} 
	else {

		header("Location:../contact.php?case=no");
	}



}

exit;

?>

