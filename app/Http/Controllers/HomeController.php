<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $stripe = new \Stripe\StripeClient(
            'sk_test_51LNtnzJLylOKVKmNeXAqBAHW9uFvb7lEOBvx9hQ5grQhmy8fmxr6wsWzQFIBXqFZFY5x3OnJz7DNO6fzMg8RtnMD00HY203PXK'
          );
          $stripe->checkout->sessions->create([
            'success_url' => 'http://127.0.0.1/success',
            'cancel_url' => 'http://127.0.0.1/cancel',
            'line_items' => [
              [
                'price' => 'price_1LO0YbJLylOKVKmNrfHvQwt3',
                'quantity' => 1,
              ],
            ],
            'mode' => 'payment',
          ]);
    }
}
