<?php
    function collect_data_about_user() {

        $user_data = [];
        $user_data['utm_source'] = $_GET['utm_source'];
        if (isset($_GET['utm_source']) && !empty($_GET['utm_source'])) {
            $user_data['utm_source'] = $_GET['utm_source'];
        }
        if ($_GET['utm_medium']) {
            $user_data['utm_medium'] = $_GET['utm_medium'];
        }
        if ($_GET['utm_campaign']) {
            $user_data['utm_campaign'] = $_GET['utm_campaign'];
        }
        if ($_GET['utm_term']) {
            $user_data['utm_term'] = $_GET['utm_term'];
        }
        if ($_GET['utm_content']) {
            $user_data['utm_term'] = $_GET['utm_term'];
        }

        $mess = implode(',', $user_data);
        $mess .= 'test';
        date_default_timezone_set('Asia/Dacca');
        $token='575889929:AAHx0Um6lHbpu52dgnP0Mpwf-4qGnno_HKQ';//575889929:AAHx0Um6lHbpu52dgnP0Mpwf-4qGnno_HKQ
        $query = [
            'chat_id' => 420047281,//id чата -248040821
            'parse_mode' => 'HTML',
            'text' => $mess
        ];


        file_get_contents(sprintf(
            'https://api.telegram.org/bot%s/sendMessage?%s',
            $token, http_build_query($query)
        ));

    }
?>