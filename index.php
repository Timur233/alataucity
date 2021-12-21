<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/get_data.php';

$loader = new \Twig\Loader\FilesystemLoader('views/');
$twig = new \Twig\Environment($loader, [
	'cache' => 'cache/',
	'auto_reload' => true //true что бы автоматически чистить кэш
]);

if ($_GET['form'] == 'send_form') {
	include  __DIR__ . '/app/send_form.php';
} else {
	$template = $twig->load('index.html');
	echo $template->render(getData('ru'));
}

?>