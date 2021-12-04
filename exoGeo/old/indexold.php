

<?php
require __DIR__ . '/vendor/autoload.php';




if(isset($_POST['field'])){
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://api-adresse.data.gouv.fr/search/?q='.$_POST['field']);

    echo $response->getBody();
}
?>

<form method='POST'>
    <input name='field' type='text' placeholder='Numéro' />
    <input id='send' type='submit' value='Trouve moi ça !'/>
</form>