<?php
class SearchController {
    public function index() {
        require_once __DIR__ . '/../../config/database.php';

        // Récupérer les critères depuis le formulaire
        $rider = $_GET['RIDER'] ?? '';
        $nationality = $_GET['NATIONALITY'] ?? '';
        $birthyear = $_GET['BIRTHYEAR'] ?? '';
        $rider_class = $_GET['RIDER_CLASS'] ?? '';
        $races = $_GET['RACES'] ?? '';

        // Construire la requête SQL dynamiquement
        $sql = "SELECT * FROM RIDERS WHERE 1=1";
        $params = [];

        if (!empty($rider)) {
            $sql .= " AND RIDER LIKE :RIDER";
            $params['RIDER'] = "%$rider%";
        }
        if (!empty($nationality)) {
            $sql .= " AND NATIONALITY LIKE :NATIONALITY";
            $params['NATIONALITY'] = "%$nationality%";
        }
        if (!empty($birthyear)) {
            $sql .= " AND BIRTHYEAR = :BIRTHYEAR";
            $params['BIRTHYEAR'] = $birthyear;
        }
        if (!empty($rider_class)) {
            $sql .= " AND RIDER_CLASS LIKE :RIDER_CLASS";
            $params['RIDER_CLASS'] = "%$rider_class%";
        }
        if (!empty($races)) {
            $sql .= " AND RACES = :RACES";
            $params['RACES'] = $races;
        }

        // Préparer et exécuter la requête
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Passer les résultats à la vue
        require __DIR__ . '/../views/results.php';
    }
}
