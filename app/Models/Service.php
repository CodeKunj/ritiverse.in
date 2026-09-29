<?php
namespace App\Models;
use App\Config\Database;
use PDO;

class Service {
    public static function all() {
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("SELECT * FROM services ORDER BY sort_order ASC");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            return []; // Fallback empty if table doesn't exist yet
        }
    }
}
