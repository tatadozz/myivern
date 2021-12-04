<?php
require __DIR__ . '/vendor/autoload.php';

if(isset($_POST['num'])){
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://api-adresse.data.gouv.fr/search', [
        'query' => ['q' => sprinttf('%s %s %s %s', $_POST['num'], $_POST['rue'], $_POST['ville'], $_POST['cp'])]
    ]);

    echo $response->getBody();
    var_dump($response);
}
?>

<form method='POST'>
    <input name='num' type='text' placeholder='Numéro' />
    <input name='rue' type='text' placeholder='Rue' />
    <input name='ville' type='text' placeholder='Ville' />
    <input name='cp' type='text' placeholder='CP' />
    
    <input id='send' type='submit' value='Trouve moi ça !'/>
</form>