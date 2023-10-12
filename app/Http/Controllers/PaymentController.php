<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    //
    protected $gateway;
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->initialize([
            'clientId' => env('PAYPAL_CLIENT_ID'),
            'secret'   => env('PAYPAL_CLIENT_SECRET'),
            'testMode' => env('PAYPAL_MODE') === 'sandbox',
        ]);

    }

    public function pay(Request $request)
    {
        try {
            $response = $this->gateway->purchase([
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error'),
            ])->send();
    
            // Check if the response requires a redirect
            if ($response->isSuccessful()) {
                // Get the approval URL from the response
                $approvalUrl = $response->getApprovalLink();
    
                // Redirect the user to the PayPal approval URL
                return new RedirectResponse($approvalUrl);
            } else {
                // Handle non-redirect responses
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    


}
