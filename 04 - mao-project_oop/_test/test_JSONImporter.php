<?php
require "../autoload.php"; // custom autoload
// require "../vendor/autoload"; // composer autoload
$files = [
    "./json/file_inesistente.json",
    "./json/file_vuoto.json",
    "./json/file_manca_valore.json",
    "./json/file_non_valido_immagine.json",
    "./json/file_non_valido_virgola.json",
    "./json/file_valido.json"
];



$ji = new JSONImporter();


foreach ($files as $file) {

    try {
        echo "valuto: $file \n";
        $ji->open($file);
        $dataset = $ji->getDataset();
    } catch (\Throwable $th) {
        echo $th->getMessage() . "\n\n";
    }
}
