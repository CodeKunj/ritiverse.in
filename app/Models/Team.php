<?php
namespace App\Models;
use App\Config\Database;
use PDO;

class Team {
    public static function all() {
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("SELECT * FROM team_members ORDER BY sort_order ASC");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            return [];
        }
    }
}
