<?php
header("Access-Control-Allow-Origin: *");

$cep = $_GET['cep'];

if (preg_match('/^\d{5}-\d{3}$/', $cep)) {
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erro ao buscar endereço. Verifique o CEP e tente novamente.';
    } else {
        echo $response;
    }

    curl_close($ch);
} else {
    echo 'Formato de CEP inválido. Insira um CEP válido.';
}
?>