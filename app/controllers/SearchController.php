<?php
class SearchController {
    public function index() {
        $data = $_GET;
        require '../app/views/results.php';
    }
}
