<?php
// Activamos tipos estrictos
declare(strict_types=1);

function render_template(string $template, array $data = []){
//Extraer los datos
    extract($data);

//Devolver el contenido 
    return require "php/templates/$template.php";
}




?>