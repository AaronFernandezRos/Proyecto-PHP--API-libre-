<body>
    <div class="container">
        <h1 class="mt-4">Título: <?= isset($data["title"]) ? $data["title"] : "Título no especificado" ?></h1><br>
        <h2 class="mt-4 text">Hoy: <?= isset($data["today"]) ? $data["today"] : "Hoy no hay descripción" ?></h2><br>
        <h2 class="mt-4 text">Mañana: <?= isset($data["tomorrow"]) ? $data["tomorrow"] : "Todavía no hay descripción de mañana" ?></h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>