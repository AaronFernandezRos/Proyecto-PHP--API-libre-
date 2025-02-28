<?php
class Personaje {
    private string $name;
    private string $status;
    private string $species;
    private string $gender;
    private string $origin;
    private string $image;

    public function __construct(array $data) {
        $this->name = $data["name"] ?? "Nombre no especificado";
        $this->status = $data["status"] ?? "Estado no especificado";
        $this->species = $data["species"] ?? "Especie no especificada";
        $this->gender = $data["gender"] ?? "Género no especificado";
        $this->origin = $data["origin"] ?? "Origen no especificado";
        $this->image = $data["image"] ?? "Imagen no especificada";
    }

    public function getData(): array {
        return [
            "name" => $this->name,
            "status" => $this->status,
            "species" => $this->species,
            "gender" => $this->gender,
            "origin" => $this->origin,
            "image" => $this->image
        ];
    }
}

$characterData = [
    ["name" => "Rick Sanchez", "status" => "Vivo", "species" => "Humano", "gender" => "Masculino", "origin" => "Tierra (C-137)", "image" => "https://rickandmortyapi.com/api/character/avatar/1.jpeg"],
    ["name" => "Morty Smith", "status" => "Vivo", "species" => "Humano", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/2.jpeg"],
    ["name" => "Summer Smith", "status" => "Vivo", "species" => "Humano", "gender" => "Femenino", "origin" => "Tierra (Dimensión de reemplazo)", "image" => "https://rickandmortyapi.com/api/character/avatar/3.jpeg"],
    ["name" => "Beth Smith", "status" => "Vivo", "species" => "Humano", "gender" => "Femenino", "origin" => "Tierra (Dimensión de reemplazo)", "image" => "https://rickandmortyapi.com/api/character/avatar/4.jpeg"],
    ["name" => "Jerry Smith", "status" => "Vivo", "species" => "Humano", "gender" => "Masculino", "origin" => "Tierra (Dimensión de reemplazo)", "image" => "https://rickandmortyapi.com/api/character/avatar/5.jpeg"],
    ["name" => "Abadango Cluster Princess", "status" => "Vivo", "species" => "Alien", "gender" => "Femenino", "origin" => "Abadango", "image" => "https://rickandmortyapi.com/api/character/avatar/6.jpeg"],
    ["name" => "Abradolf Lincler", "status" => "Desconocido", "species" => "Humano", "gender" => "Masculino", "origin" => "Tierra (Dimensión de reemplazo)", "image" => "https://rickandmortyapi.com/api/character/avatar/7.jpeg"],
    ["name" => "Adjudicator Rick", "status" => "Muerto", "species" => "Humano", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/8.jpeg"],
    ["name" => "Agency Director", "status" => "Muerto", "species" => "Humano", "gender" => "Masculino", "origin" => "Tierra (Dimensión de reemplazo)", "image" => "https://rickandmortyapi.com/api/character/avatar/9.jpeg"],
    ["name" => "Alan Rails", "status" => "Muerto", "species" => "Humano", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/10.jpeg"],
    ["name" => "Albert Einstein", "status" => "Muerto", "species" => "Humano", "gender" => "Masculino", "origin" => "Tierra (C-137)", "image" => "https://rickandmortyapi.com/api/character/avatar/11.jpeg"],
    ["name" => "Alexander", "status" => "Muerto", "species" => "Humano", "gender" => "Masculino", "origin" => "Tierra (C-137)", "image" => "https://rickandmortyapi.com/api/character/avatar/12.jpeg"],
    ["name" => "Alien Googah", "status" => "Desconocido", "species" => "Alien", "gender" => "Desconocido", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/13.jpeg"],
    ["name" => "Alien Morty", "status" => "Desconocido", "species" => "Alien", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/14.jpeg"],
    ["name" => "Alien Rick", "status" => "Desconocido", "species" => "Alien", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/15.jpeg"],
    ["name" => "Amish Cyborg", "status" => "Muerto", "species" => "Alien", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/16.jpeg"],
    ["name" => "Annie", "status" => "Vivo", "species" => "Humano", "gender" => "Femenino", "origin" => "Tierra (C-137)", "image" => "https://rickandmortyapi.com/api/character/avatar/17.jpeg"],
    ["name" => "Antenna Morty", "status" => "Vivo", "species" => "Humano", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/18.jpeg"],
    ["name" => "Antenna Rick", "status" => "Desconocido", "species" => "Humano", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/19.jpeg"],
    ["name" => "Ants in my Eyes Johnson", "status" => "Desconocido", "species" => "Humano", "gender" => "Masculino", "origin" => "Desconocido", "image" => "https://rickandmortyapi.com/api/character/avatar/20.jpeg"],
];

$characters = [];
foreach ($characterData as $data) {
    $characters[] = new Personaje($data);
}


// Ahora $characters es un array de objetos Personaje
// Puedes acceder a los datos de cada personaje usando el método getData()
foreach ($characters as $character) {
    $characterData = $character->getData();
    echo "<p>Nombre: " . $characterData['name'] . "</p>";
    echo "<p>Estado: " . $characterData['status'] . "</p>";
    echo "<p>Especie: " . $characterData['species'] . "</p>";
    echo "<p>Género: " . $characterData['gender'] . "</p>";
    echo "<p>Origen: " . $characterData['origin'] . "</p>";
    echo "<img src='" . $characterData['image'] . "' alt='" . $characterData['name'] . "'><br><br>";
}
?>

