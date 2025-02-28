<?php
// Aquí va el código php
require_once 'php/templates/head.php';
require_once 'php/script/render.php';
require_once 'php/classes/ApiClient.php';
require_once 'php/classes/Murcia.php'; // Asegúrate de incluir el archivo que define Murcia

$ApiClient = new ApiClient('https://www.el-tiempo.net/api/json/v2/provincias/30');
$data1 = $ApiClient->fetchData();

$murcia = new Murcia($data1);
$data = $murcia->getData();

?>
<!doctype html>
<html lang="en">
<?php render_template("body", $data) ?>
</html>

