<?php
$routes = [
    '/' => 'home.php',
    '/services' => 'services.php',
    '/contact' => 'contact.php',
    '/quote' => 'quote.php',
    // Добавьте другие пути по мере необходимости
];

$requested_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requested_page = isset($routes[$requested_path]) ? $routes[$requested_path] : 'home.php';

$page_path = ROOT_PATH . 'pages/' . $requested_page;

if (file_exists($page_path)) {
    include $page_path;
} else {
    include ROOT_PATH . 'pages/home.php';
}
?>
