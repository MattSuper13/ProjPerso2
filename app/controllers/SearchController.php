<?php
class SearchController {
    public function index() {
        $data = $_GET;
        require '../app/views/results.php';
        require_once __DIR__ . '/../../config/database.php';
    }
}
