<?php
$json_text = file_get_contents('./dischi.json');

$dischi = json_decode($json_text, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Ottengo i dati dal form
    $titolo = $_POST['titolo'];
    $artista = $_POST['artista'];
    $anno = $_POST['anno'];
    $genere = $_POST['genere'];
    $cover = $_POST['cover'];
    
    // Crea un nuovo disco da aggiungere all'array
    $nuovo_disco = [
        'titolo' => $titolo,
        'artista' => $artista,
        'cover' => $cover,
        'anno' => $anno,
        'genere' => $genere
    ];
    
    // Aggiungio il nuovo disco all'array
    $dischi[] = $nuovo_disco;

    $json_text_update = json_encode($dischi, JSON_PRETTY_PRINT);
    
    file_put_contents('./dischi.json', $json_text_update);

    header('Location: ./index.php');
}
?>
