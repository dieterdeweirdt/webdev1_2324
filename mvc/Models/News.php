<?php

class News {

    public string $slug;
    public string $title;
    public string $content;

    protected array $news = [
        'mijn-eerste-artikel' => [
            'slug' => 'mijn-eerste-artikel',
            'title' => 'Wow mijn eerste artikel staat online',
            'content' => 'Jaja u leest het goed'
        ],
        'mijn-tweede-artikel' => [
            'slug' => 'mijn-tweede-artikel',
            'title' => 'Wow mijn tweede artikel staat online',
            'content' => 'Jaja u leest het opnieuw goed'
        ]
    ];

    public function getAll() {
        return $this->news;
    }

    public function getBySlug(string $slug) {
        return $this->news[$slug];
    }
}