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
    case '/Helma':
        $redirect = '\OtherSites\JednotliveKarty\Brneni\Helma.php';
        break;
    case '/Torzo':
        $redirect = '\OtherSites\JednotliveKarty\Brneni\Torzo.php';
        break;
    case '/Boty':
        $redirect = '\OtherSites\JednotliveKarty\Brneni\Boty.php';
        break;
    case '/Luk':
        $redirect = '\OtherSites\JednotliveKarty\Zbrane\Luk.php';
        break;  
    case '/Mec':
        $redirect = '\OtherSites\JednotliveKarty\Zbrane\Mec.php';
        break;  
    case '/Staff':
        $redirect = '\OtherSites\JednotliveKarty\Zbrane\Staff.php';
        break;
    case '/Rasy':
        $redirect = '\OtherSites\JednotliveKarty\Rasy.php';
        break;      
        
        
    default:
        http_response_code(404);
        require __DIR__ . '\OtherSites\404.php';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/OtherSites/SameForAll/Header.php';
require_once __DIR__ . '/OtherSites/SameForAll/Style.php';
require_once __DIR__ . '/OtherSites/SameForAll/Navbar.php';
require_once __DIR__ . $redirect ?? __DIR__ . '/OtherSites/index.php';
require_once __DIR__ . '/OtherSites/SameForAll/Footer.php';


