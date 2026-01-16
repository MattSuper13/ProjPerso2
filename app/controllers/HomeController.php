<?php
class HomeController {
    public function index() {
        require '../app/views/home.php';
        require_once __DIR__ . '/../../config/database.php';
    }
}
