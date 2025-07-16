<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonalityController extends Controller
{
      public function showForm()
    {
        return view('Pages.Home.index');
    }
     public function predict(Request $request)
    {
        // Validation rules
        $rules = [
            'timeAlone' => 'required|numeric|min:0',
            'socialEvents' => 'required|numeric|min:0',
            'goingOutside' => 'required|numeric|min:0',
            'friendsCircle' => 'required|integer|min:0',
            'postFrequency' => 'required|numeric|min:0',
            'stageFear' => 'required|in:Yes,No',
            'drainedSocializing' => 'required|in:Yes,No',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Map the frontend field names to backend field names
            $data = [
                'Time_spent_Alone' => $request->timeAlone,
                'Social_event_attendance' => $request->socialEvents,
                'Going_outside' => $request->goingOutside,
                'Friends_circle_size' => $request->friendsCircle,
                'Post_frequency' => $request->postFrequency,
                'Stage_fear' => $request->stageFear,
                'Drained_after_socializing' => $request->drainedSocializing
            ];

            $client = new Client([
                'timeout' => 30,
                'verify' => false // Remove in production
            ]);

            $response = $client->post('http://localhost:5000/predict', [
                'json' => $data
            ]);

            $result = json_decode($response->getBody(), true);

            if (isset($result['error'])) {
                return response()->json([
                    'success' => false,
                    'message' => $result['error']
                ], 400);
            }

            return response()->json([
                'success' => true,
                'prediction' => [
                    'type' => $result['personality'] ?? 'Unknown',
                    'confidence' => $result['confidence'] ?? 0
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Prediction failed: ' . $e->getMessage()
            ], 500);
        }
    }
}
