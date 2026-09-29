<?php
namespace App\Models;

use App\Config\Database;
use PDO;

class Setting {
    public static function get($key, $default = null) {
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("SELECT value FROM settings WHERE key_name = :key LIMIT 1");
            $stmt->execute(['key' => $key]);
            $result = $stmt->fetch();
            return $result ? $result['value'] : $default;
        } catch (\Exception $e) {
            return $default; // Fallback if DB not ready
        }
    }

    public static function set($key, $value) {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO settings (key_name, value) VALUES (:key, :value) ON DUPLICATE KEY UPDATE value = :value2");
        $stmt->execute(['key' => $key, 'value' => $value, 'value2' => $value]);
    }
}
