<?php
namespace App\Models;

use App\Config\Database;
use PDO;

class Page {
    public static function findBySlug($slug) {
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("SELECT * FROM pages WHERE slug = :slug AND is_published = 1 LIMIT 1");
            $stmt->execute(['slug' => $slug]);
            $page = $stmt->fetch();
            
            if ($page) {
                $stmt = $db->prepare("SELECT * FROM page_sections WHERE page_id = :page_id AND is_enabled = 1 ORDER BY sort_order ASC");
                $stmt->execute(['page_id' => $page['id']]);
                $page['sections'] = $stmt->fetchAll();
                
                // Decode JSON content
                foreach ($page['sections'] as &$section) {
                    if ($section['content']) {
                        $section['content'] = json_decode($section['content'], true);
                    }
                }
            }
            
            return $page;
        } catch (\Exception $e) {
            return null;
        }
    }
}
