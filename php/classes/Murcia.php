<?php

class Murcia {
    private string $title;
    private string $today;
    private string $tomorrow;
    // private array $cities;
    
    public function __construct(array $data) {
        $this->title = $data["title"] ?? "No hay título";
        $this->today = $data["today"]["p"] ?? "No tenemos información";
        $this->tomorrow = $data["tomorrow"]["p"] ?? "No tenemos información";
    }

    public function getData(): array {
        return [
            "title" => $this->title,
            "today" => $this->today,
            "tomorrow" => $this->tomorrow,
        ];
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getToday(): string {
        return $this->today;
    }

    public function getTomorrow(): string {
        return $this->tomorrow;
    }
}

?>
