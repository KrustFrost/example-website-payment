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
    public function bsit(){
        $payment = Paymongo::payment()
        ->create([
            'amount' => 10000.00,
            'currency' => 'PHP',
            'description' => 'Testing payment',
            'statement_descriptor' => 'Test Paymongo',
            'source' => [
                'id' => 'src_BV7dAcCpDncYu6n8zN5dfXxP',
                'type' => 'source'
            ]
        ]);
    }
}
