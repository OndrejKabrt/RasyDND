<!-- použito, z kodu pana učitele Pavláta -->

<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        $redirect = '\OtherSites\index.php';
        break;
    case '/ONas':
        $redirect = '\OtherSites\ONas.php';
        break;
    case '/Register':
        $redirect = '\OtherSites\RegisterForm.php';
        break;
    case '/Login':
        $redirect = '\OtherSites\LoginForm.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '\OtherSites\404.php';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/OtherSites/SameForAll/Head.php';
require_once __DIR__ . $redirect ?? __DIR__ . '/OtherSites/index.php';
require_once __DIR__ . '/OtherSites/SameForAll/Footer.php';


