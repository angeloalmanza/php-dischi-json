<?php
require_once('./server.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
            background-color: #10202f;
        }
        .card-body {
            flex-grow: 1;
            color: white;
        }
        body {
            background-color: #1c2d3c;
        }
        i {
            color: white;
            padding: 10px 0 5px 20px;
        }
    </style>

</head>

<body>
    <header class="bg-dark mb-5">
        <i class="fa-brands fa-spotify fa-3x"></i>
    </header>
        
    <div class="container">
         <!-- Modulo per aggiungere un nuovo disco -->
         <h2 class="text-center mb-3 text-white">Aggiungi un Disco</h2>
        <form action="server.php" method="POST" class="bg-white mb-5 rounded p-3">
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" name="titolo" required>
            </div>
            <div class="mb-3">
                <label for="artista" class="form-label">Artista</label>
                <input type="text" class="form-control" id="artista" name="artista" required>
            </div>
            <div class="mb-3">
                <label for="anno" class="form-label">Anno</label>
                <input type="number" class="form-control" id="anno" name="anno" min="1950" max="2025" required>
            </div>
            <div class="mb-3">
                <label for="genere" class="form-label">Genere</label>
                <input type="text" class="form-control" id="genere" name="genere" required>
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">URL Copertina Disco</label>
                <input type="text" class="form-control" id="cover" name="cover" required>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi Disco</button>
        </form>
        
        <!-- Card dischi -->
        <div class="row">
            <?php foreach ($dischi as $disco) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-5">
                        <img src="<?= $disco['cover'] ?>" class="card-img-top h-50" alt="<?= $disco['titolo'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $disco['titolo'] ?></h5>
                            <p class="card-text"><strong>Artista:</strong> <?= $disco['artista'] ?></p>
                            <p class="card-text"><strong>Anno:</strong> <?= $disco['anno'] ?></p>
                            <p class="card-text"><strong>Genere:</strong> <?= $disco['genere'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>