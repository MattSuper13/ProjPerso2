<?php
$route = $_GET['page'] ?? 'home';

switch ($route) {
    case 'contact':
        require __DIR__ . '/../app/controllers/ContactController.php';
        (new ContactController())->index();
        break;

    case 'search':
        require __DIR__ . '/../app/controllers/SearchController.php';
        (new SearchController())->index();
        break;

    default:
        require __DIR__ . '/../app/controllers/HomeController.php';
        (new HomeController())->index();
        break;
}
