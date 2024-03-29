<?php
class HomeController {
    // Include header view
    public function index() {
        include 'app/views/layouts/header.php';

        // Include home index view
        include 'app/views/home/index.php';

        // Include footer view
        include 'app/views/layouts/footer.php';
    }
}
?>