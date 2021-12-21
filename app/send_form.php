<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    $data = json_decode(file_get_contents("php://input"),true);
    $body = array( 'form' => array() );

    foreach ($data as $input) {
        $body['form'][$input['name']] = $input['data'];
    }

    $ch = curl_init('https://cms.abpx.kz/api/forms/submit/tamarixform?token=account-'.SING_TOKEN);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

    $responce = curl_exec($ch);
    curl_close($ch);

    $responce = json_decode($responce, true);

    $loader = new \Twig\Loader\FilesystemLoader('views/');
    $twig = new \Twig\Environment($loader, [
        'cache' => 'cache/',
        'auto_reload' => true
    ]);
    
    $viewData = array(
        'userName'    => $responce['Имя'],
        'isPresent'   => true,
        'presentLink' => 'https://t.me/Exclusive_q_bot?start=komfort',
        'presentName' => 'Необходимые документы для одобрения ипотеки'
    );
    
    $template = $twig->load('widgets/thanks-msg.html');
    echo $template->render($viewData);

    exit;
?>