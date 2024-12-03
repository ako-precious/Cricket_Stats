<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class PredictionController extends Controller
{
    public function index()
    {
        // dd(Players::all());
        // dd(($routeName));
        return inertia('Predictions/RunPrediction');
    }

    // public function predictRuns(Request $request)
    // {
    //     // Get input data from the request
    //     $input = $request->input('data');

    //     // Send POST request to Flask API
    //     $client = new Client();
    //     $response = $client->post('http://localhost:5000/predict', [
    //         'json' => ['input' => $input]
    //     ]);

    //     // Get the response
    //     $prediction = json_decode($response->getBody()->getContents(), true);

    //     return response()->json($prediction);
    
        //    }

        public function predict(Request $request)
{
    // Log input data from Vue
    Log::info('Received data:', ['data' => $request->input('data')]); 

    $input = $request->input('data');
    $client = new Client();

    try {
        // Send input data to Flask API
        $response = $client->post('http://localhost:5000/predict', [
            'json' => ['input' => array_values($input)]
        ]);

        // Log response from Flask API
        $prediction = json_decode($response->getBody()->getContents(), true);
        Log::info('Flask response:', ['response' => $prediction]); 

        return response()->json($prediction);
    } catch (\Exception $e) {
        // Log any errors encountered
        Log::error('Error calling Flask API', ['message' => $e->getMessage()]);
        return response()->json(['error' => 'Prediction failed'], 500);
    }
}


}
