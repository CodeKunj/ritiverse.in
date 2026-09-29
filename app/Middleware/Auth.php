<?php
namespace App\Middleware;

class Auth {
    public static function check() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['user_id'])) {
            header('Location: /admin/login');
            exit;
        }
    }
}
