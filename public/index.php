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

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    require __DIR__ . '/../app/views/home.php';
    exit;
}

if ($page === 'results') {

    // Récupération des critères
    $rider = $_GET['RIDER'] ?? '';
    $nationality = $_GET['NATIONALITY'] ?? '';
    $birthyear = $_GET['BIRTHYEAR'] ?? '';
    $rider_class = $_GET['CLASS'] ?? '';
    $races = $_GET['RACES'] ?? '';

    // Requête SQL dynamique
    $sql = "SELECT * FROM RIDERS WHERE 1=1";
    $params = [];

    if ($rider !== '') {
        $sql .= " AND RIDER LIKE :RIDER";
        $params['RIDER'] = "%$rider%";
    }
}