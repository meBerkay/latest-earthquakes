<?php
$url = "https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&limit=10";

// API verilerini al
$data = file_get_contents($url);

// JSON verilerini dizi halinde ayrıştır
$data = json_decode($data, true);

// Her deprem için işlem yap
foreach ($data["features"] as $feature) {
    // Deprem bilgileri
    $properties = $feature["properties"];
    
    // Tarih ve saat
    $time = date("Y-m-d H:i:s", $properties["time"] / 1000);
    
    // Enlem
    $latitude = $feature["geometry"]["coordinates"][1];
    
    // Boylam
    $longitude = $feature["geometry"]["coordinates"][0];
    
    // Derinlik (km)
    $depth = $feature["geometry"]["coordinates"][2];
    
    // Büyüklük
    $magnitude = $properties["mag"];
    
    // Yer
    $place = $properties["place"];
    
    // Verileri ekrana yazdır
    echo "$time, $latitude, $longitude, $depth km, $magnitude, $place\n";
    echo "\n <br>";
}
?>