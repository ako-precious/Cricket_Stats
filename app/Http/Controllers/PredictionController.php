<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class PredictionController extends Controller
{
    public function index()
    {
        // dd(Players::all());
        // dd(($routeName));
        return inertia('Predictions/runprediction.vue');
    }

    public function predictRuns(Request $request)
    {
        // Get input data from the request
        $input = $request->input('data');

        // Send POST request to Flask API
        $client = new Client();
        $response = $client->post('http://localhost:5000/predict', [
            'json' => ['input' => $input]
        ]);

        // Get the response
        $prediction = json_decode($response->getBody()->getContents(), true);

        return response()->json($prediction);
    }
}
