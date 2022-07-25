<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Luigel\Paymongo\Facades\Paymongo;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function courses()
    {   
        return view('courses');


    }
    public function payments()
    {
        return view('payments');


    }

    public function payment(){
        $paymentIntent = Paymongo::paymentIntent()
        ->create([
            'amount' => 100,
            'payment_method_allowed' => [
                'paymaya', 'card'  // <--- Make sure to add paymaya here.
            ],
            'payment_method_options' => [
                'card' => [
                    'request_three_d_secure' => 'automatic',
                ],
            ],
            'description' => 'This is a test payment intent',
            'statement_descriptor' => 'LUIGEL STORE',
            'currency' => 'PHP',
        ]);
    
    $paymentMethod = Paymongo::paymentMethod()
        ->create([
            'type' => 'paymaya',  // <--- and payment method type should be paymaya
            'billing' => [
                'address' => [
                    'line1' => 'Somewhere there',
                    'city' => 'Cebu City',
                    'state' => 'Cebu',
                    'country' => 'PH',
                    'postal_code' => '6000',
                ],
                'name' => 'Hello',
                'email' => 'hello@gmail.com',
                'phone' => '09993999399',
            ],
        ]);
    
    $attachedPaymentIntent = $paymentIntent->attach($paymentMethod->id, 'http://127.0.0.1.com/success'); // <--- And the second parameter should be the return_url.
    return redirect($attachedPaymentIntent->next_action['redirect']['url']);
    
    }
    public function success(){
        
        return view('success');
        }

    public function buy(){
        $paymentIntent = Paymongo::paymentIntent()
        ->create([
            'amount' => 100,
            'payment_method_allowed' => [
                'paymaya', 'card'  // <--- Make sure to add paymaya here.
            ],
            'payment_method_options' => [
                'card' => [
                    'request_three_d_secure' => 'automatic',
                ],
            ],
            'description' => 'This is a test payment intent',
            'statement_descriptor' => 'LUIGEL STORE',
            'currency' => 'PHP',
        ]);
    
    $paymentMethod = Paymongo::paymentMethod()
        ->create([
            'type' => 'paymaya',  // <--- and payment method type should be paymaya
            'billing' => [
                'address' => [
                    'line1' => 'Somewhere there',
                    'city' => 'Cebu City',
                    'state' => 'Cebu',
                    'country' => 'PH',
                    'postal_code' => '6000',
                ],
                'name' => 'Hello',
                'email' => 'hello@gmail.com',
                'phone' => '09993999399',
            ],
        ]);
    
    $attachedPaymentIntent = $paymentIntent->attach($paymentMethod->id, 'http://127.0.0.1.com/success'); // <--- And the second parameter should be the return_url.
    return redirect($attachedPaymentIntent->next_action['redirect']['url']);
    
    }


    }  

