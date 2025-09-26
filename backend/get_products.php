<?php
$url = "https://seudominio.strapiapp.com/api/products";
$response = file_get_contents($url);
$data = json_decode($response, true);

// Exemplo de exibição
foreach ($data['data'] as $produto) {
    echo "Produto: " . $produto['attributes']['name'] . "<br>";
    echo "Preço: R$ " . $produto['attributes']['price'] . "<br><br>";
}
?>