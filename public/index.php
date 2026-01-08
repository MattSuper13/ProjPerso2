<?php
$route = $_GET['page'] ?? 'home';

switch ($route) {
    case 'contact':
        require '../app/controllers/ContactController.php';
        (new ContactController())->index();
        break;

    case 'search':
        require '../app/controllers/SearchController.php';
        (new SearchController())->index();
        break;

    default:
        require '../app/controllers/HomeController.php';
        (new HomeController())->index();
        break;
}
