<?php

class Page extends baseModel {
    public string $name;
    public string $title;
    public string $slug;
    public string $content;
    public string $template;

    

    public static function getBySlug(string $slug) {
        global $db;
        
        $sql = 'SELECT * FROM pages WHERE slug = :p_slug';
        $page_statement = $db->prepare($sql);
        $page_statement->execute([':p_slug' => $slug]);
        $current_page = $page_statement->fetchObject();

        return $current_page;
    }
}