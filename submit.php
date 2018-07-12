<?php
require_once 'core/config.php';
require_once 'core/dbClass.php';
$db = new database($pdo);
$rows = $db->getData();

// skip quotes

$remove[] = "'";
$remove[] = '"';
$remove[] = "-";

$name = $_POST['name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

$content = $_POST['content'];
$content_db = str_replace($remove, "&#39", $content);

$subject = $_POST['subject'];
$subject_db = str_replace($remove, "&#39", $subject);

$date = date('Y-m-d H:i:s');

if (empty($telephone)) {
	$telephone = "(no phone number)";
}
if (empty($subject)) {
	$subject = "(no subject)";
	$subject_db = $subject;
}

if (empty($name) || empty($email) || empty($telephone) || empty($subject) || empty($content)) {
	echo '<div class="alert alert-danger">
		  	Fill all fields!
		  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		</div>';
	
} else {
	$query = $db->pdo->prepare("INSERT INTO `messages` (`name`, `email`, `telephone`, `subject`, `content`, `date`) VALUES ('$name', '$email', '$telephone', '$subject_db', '$content_db', '$date')");
	$result = $query->execute();

	$to = "information@fJ-properties.com";
	// $to = "colombe@cube.rw";
	// $to = "claudette@cube.rw";
	$body = $content . "\n\nName: " . $name . "\n\nTelephone: " . $telephone . "\n\n";
	$headers = "From: " . $email . "\r\n" . "X-Mailer: php";

	if (mail($to, $subject, $body, $headers)) {
		echo '<div class="alert alert-success">
			    <strong>Success!</strong> Message Sent
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  </div>';
	}
}
?>
