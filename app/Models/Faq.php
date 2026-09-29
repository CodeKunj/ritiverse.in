<?php
namespace App\Models;
use App\Config\Database;
use PDO;

class Faq {
    public static function all() {
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("SELECT * FROM faqs WHERE is_published = 1 ORDER BY sort_order ASC");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            return [];
        }
    }
}
