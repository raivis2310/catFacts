<?php

$response = file_get_contents("https://cat-fact.herokuapp.com/facts/random?animal_type=cat&amount=1");
$data = json_decode($response, true);

echo $data['text'] . "\n";

if (!isset($data['text'])) {
    echo "Fact wasn't found\n.";
}