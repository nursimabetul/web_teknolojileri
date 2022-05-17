<?php


if (isset($_POST['name'], $_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	// show the $name and $email
	echo "Sayın $name mesajın için teşekkür ederim <br>";
	echo "Lütfen $email adresinizi doğruların.";
} else {
	echo 'E-posta adresiniz ve mailinizi yazmalısınız.';
}
