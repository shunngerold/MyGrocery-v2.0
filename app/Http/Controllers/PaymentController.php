<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class PaymentController extends Controller
{   
    // Cashout Payment
    public function cashoutPay() {
        $data = [
            'data' => [
                'attributes' => [
                    'line_items' => [
                        [
                            'currency' => 'PHP',
                            'amount' => 100000,
                            'description' => 'text',
                            'name' => 'Test Product',
                            'quantity' => 1,
                        ]
                    ],
                    'payment_method_types' => [
                        'gcash',
                        'card',
                    ],
                    'success_url' => 'http://127.0.0.1:8000/cashout-success',
                    'cancel_url' => 'http://127.0.0.1:8000/cancel',
                    'description' => 'text'
                ],
            ]
        ];
        $response = Curl::to('https://api.paymongo.com/v1/checkout_sessions')
                    ->withHeader('Content-Type: application/json')
                    ->withHeader('accept: application/json')
                    ->withHeader('Authorization: Basic '. env('AUTH_PAY'))
                    ->withData($data)
                    ->asJson()
                    ->post();
        \Session::put('session_id', $response->data->id);
        return redirect()->to($response->data->attributes->checkout_url);
    }
    // Cashout Success
    public function cashoutSuccess() {
        $sessionId = Session::get('session_id');

        $response = Curl::to('https://api.paymongo.com/v1/checkout_sessions/'.$sessionId)
                    ->withHeader('accept: application/json')
                    ->withHeader('Authorization: Basic '. env('AUTH_PAY'))
                    ->asJson()
                    ->get();
        return redirect(route('index'))->with('message','Successfully paid!');
    }
}
