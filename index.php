<?php

    include 'config.php';
    include 'functions.php';

    $data = explode('*', $text);

    $level = 1;
    $level = count($data);

    $user_response=trim(end($data));

    echo 'Level: ', $level, 'User Response: ', $user_response;

    if ($user_response == 0 || $user_response == 00) {
        main_menu();
    }

    if ($user_response == 1) {
        buy_minutes();
    }

    if ($user_response == 2) {
        buy_airtime();
    }

    if ($user_response == 3) {
        buy_internet_bundles();
    }

    if ($user_response == 4) {
        buy_sms();
    }

    if ($user_response == 5) {
        hot_deals();
    }

    if ($user_response == 6) {
        register();
    }

    if ($user_response == 7) {
        check_balances();
    }

    if ($user_response == 98) {
        more_menu_items();
    }
