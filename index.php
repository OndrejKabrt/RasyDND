<!-- použito, z kodu pana učitele Pavláta -->

<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        $redirect = '\othersites\index.php';
        break;
    case '/othersites/onas':
        $redirect = '\othersites\ONas.php';
        break;
    case '/othersites/registerf':
        $redirect = '\othersites\RegisterForm.php';
        break;
    case'/database/register':
        $redirect = '\othersites\databases\register.php';
        break;
    case '/database/logout':
        $redirect = '\othersites\databases\logout.php';
        break;
    case '/othersites/loginf':
        $redirect = '\othersites\LoginForm.php';
        break;
    case '/database/login':
        $redirect = '\othersites\databases\login.php';
        break;
    case '/othersites/helma':
        $redirect = '\othersites\jednotlivekarty\brneni\Helma.php';
        break;
    case '/othersites/torzo':
        $redirect = '\othersites\jednotlivekarty\brneni\Torzo.php';
        break;
    case '/othersites/boty':
        $redirect = '\othersites\jednotlivekarty\brneni\Boty.php';
        break;
    case '/othersites/luk':
        $redirect = '\othersites\jednotlivekarty\zbrane\Luk.php';
        break;  
    case '/othersites/mec':
        $redirect = '\othersites\jednotlivekarty\zbrane\Mec.php';
        break;  
    case '/othersites/staff':
        $redirect = '\othersites\jednotlivekarty\zbrane\Staff.php';
        break;
    case '/othersites/rasy':
        $redirect = '\othersites\jednotlivekarty\Rasy.php';
        break;
          
    default:
        http_response_code(404);
        require __DIR__ . '\othersites\404.php';
        exit();
        
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '\othersites\sameforall\Header.php';
require_once __DIR__ . $redirect ?? __DIR__ . '\othersites\index.php';
require_once __DIR__ . '\othersites\sameforall\Footer.php';

