<?php
return [

    'version' => '0.2.0-beta',

    // логин для HTTPS-протокола
    'https_login' => '',

    // логин для HTTPS-протокола
    'https_password' => '',

    // HTTP-Адрес, к которому будут обращаться скрипты. Со слэшем на конце.
    'https_address' => 'https://lcab.smsint.ru/',

    // HTTP-Адрес, к которому будут обращаться скрипты. Со слэшем на конце.
    'http_address' => 'http://lcab.smsint.ru/',

    // метод, которым отправляется запрос (curl или file_get_contents)
    'https_method' => 'curl',

    // использовать HTTPS-адрес
    'use_https' => true,

    // кодировка ваших скриптов. cp1251 - для Windows-1251, либо же utf-8 для, сообственно - utf-8 :)
    'https_charser' => 'utf-8',

];