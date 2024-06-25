<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LandingController extends Controller
{
    //
    public function index()
    {

        // Create a new Guzzle client instance
        $client = new Client();
        $apiUrl='https://www.century21ollier.com/api/articales';

        try {
            // Make a GET request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);
            // Handle the retrieved weather data as needed (e.g., pass it to a view)
            return view('landing', ['articles' => $data[0]]);

        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return  $e->getMessage();
        }

    }
}
