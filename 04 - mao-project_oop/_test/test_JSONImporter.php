<?php
require "../autoload.php";
$files = [
    "./json/file_vuoto.json",
    "./json/file_manca_valore.json",
    "./json/file_non_valido_immagine.json",
    "./json/file_non_valido_virgola.json",
    "./json/file_valido.json"
];



$ji = new JSONImporter();


foreach ($files as $file) {

    $ji->open($file);
}
