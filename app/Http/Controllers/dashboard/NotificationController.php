<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class NotificationController extends Controller
{
    public function index()
    {
        return view('dashboard.notifications');
    }

    public function saveToken(Request $request)
    {
        auth()->user()->update(['device_token' => $request->token]);
        return response()->json(['token saved successfully.']);
    }

    public function sendNotification(Request $request)
    {
        // return response()->json(['token saved successfully.']);
        dd(User::all());
        $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();

        $SERVER_API_KEY = 'AAAAM3kucuE:APA91bGDK7CkPEs3WuY5jHdI9vEPKvpmpyjE7wg1POKvweri6ERX973mjrvHliJPHdr-aTJG-UzAJ9PAggC96oBWpkTOsH0gpqr18gqcNSvY82ZWzdkkcB0Dp8FALsUbMDc0vLwKz9oA';

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,
            ],
            "priority" => "high",
            "data" => [
                "clickaction" => "FLUTTERNOTIFICATIONCLICK",
                "id" => "1",
                "status" => "done"
            ],
            // "to" => "/topics/all"
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);
        dd($response());
        return $response;
//         return redirect()->back()->with('success', __('message.add_success'));
    }
}
