<?php

class NextMovie {
    private int $days_until;
    private string $type;
    private string $title;
    private string $overview;
    private string $poster_url;
    private string $release_date;
    private ?array $following_production; //Following tiene varios parámetros


    public function __construct(array $data){
        $this->days_until = $data["days_until"] ?? 0;
        $this->type = $data["type"] ?? "Tipo Desconocido";
        $this->title = $data["title"] ?? "Título Desconocido";
        $this->overview = $data["overview"] ?? "No tiene descripción";
        $this->poster_url = $data["poster_url"] ?? "https://placehold.co/400x600?text=No+image";
        $this->release_date = $data["release_date"] ?? "No tiene fecha de lanzamiento"; 
        $this->following_production = $data["following_production"] ?? null;
    }

    public function getData(): array{
        return[
            "days_until" => $this->days_until,
            "title" => $this->title,
            "type" => $this->type,
            "overview" => $this->overview,
            "poster_url" => $this->poster_url,
            "release_date" => $this->release_date,
            "following_production" => $this->following_production
        ];
        return $array;
    }

    public function getDaysUntil(): int{
        return $this->days_until;
    }
    
    public function getTitle(): string{
        return $this->title;
    }

    public function getType(): string{
        return $this->type;
    }

    public function getOverview(): string{
        return $this->overview;
    }

    public function getPosterUrl(): string{
        return $this->poster_url;
    }

    public function getReleaseDate(): string{
        return $this->release_date;
    }

}
?>