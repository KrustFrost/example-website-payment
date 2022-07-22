<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Luigel\Paymongo\Facades\Paymongo;
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
    public function bsit(){
        $gcashSource = Paymongo::source()->create([
            'type' => 'gcash',
            'amount' => 10000.00,
            'currency' => 'PHP',
            'redirect' => [
                'success' => 'https://example-website-payment.herokuapp.com/success',
                'failed' => 'https://example-website-payment.herokuapp.com/failed'
            ]
        ]);
        $gcashSourceURL = $gcashSource->redirect['checkout_url']; 
        return header('Location: '.$gcashSourceURL);
    }
}
