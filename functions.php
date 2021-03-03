<?php

    function main_menu() {
        $text = "Welcome to USSD menu, please reply with\n1. Buy Minutes\n2. Buy Airtime\n3. Buy Internet Bundles\n4. Buy SMS\n5. Hot Deals\n98. More";
        ussd_proceed($text);
    }

    function more_menu_items() {
        $text = "6. Register\n7. Check Balances\n00. Back";
        ussd_proceed($text);
    }

    // buy minutes
    function buy_minutes() {
        $text = "Buy Minutes here";
        ussd_stop($text);
    }

    // buy airtime
    function buy_airtime() {
        $text = "Buy airtime here";
        ussd_stop($text);
    }

    // buy internet bundles
    function buy_internet_bundles() {
        $text = "Buy internet bundles here";
        ussd_stop($text);
    }

    // buy sms
    function buy_sms() {
        $text = "Buy SMSes here";
        ussd_stop($text);
    }

    // hot deals
    function hot_deals() {
        $text = "Hot deals here";
        ussd_stop($text);
    }

    // register
    function register() {
        $text = "Register here";
        ussd_stop($text);
    }

    // check balances
    function check_balances() {
        $text = "Your balances will show here";
        ussd_stop($text);
    }

    function ussd_proceed($text) {
        echo "CON ".$text;
    }

    function ussd_stop($text) {
        echo "END ".$text;
        die;
    }