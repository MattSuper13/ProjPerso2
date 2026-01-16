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
    $rider = $_GET['rider'] ?? '';
    $nationality = $_GET['nationality'] ?? '';
    $birthyear = $_GET['birthyear'] ?? '';
    $rider_class = $_GET['rider_class'] ?? '';
    $races = $_GET['races'] ?? '';

    // Requête SQL dynamique
    $sql = "SELECT * FROM riders WHERE 1=1";
    $params = [];

    if ($rider !== '') {
        $sql .= " AND rider LIKE :rider";
        $params['rider'] = "%$rider%";
    }
}