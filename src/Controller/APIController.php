<?php 

namespace Drupal\my_api_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Component\Serialization\Json;

class APIController extends ControllerBase {

    public function getFact() {
        $client = \Drupal::httpClient();
        $request = $client->get(
            "https://catfact.ninja/fact"
        );
        $response = $request->getBody()->getContents();
        $result = json::decode($response);
        echo "<pre>";
        print_r($result);          
        exit;
    }

}