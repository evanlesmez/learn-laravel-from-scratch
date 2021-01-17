<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Events\ProductPurchased;

class PaymentsController extends Controller
{
    public function create () {
        return view('create-payment');
    }

    public function store(){
        // Notification::send(request()->user(),new PaymentReceived());
        
        // Event
        ProductPurchased::dispatch('toy');

        //Listeners
        //awardachievements
        
        request()->user()->notify(new PaymentReceived(900));
        // return redirect('/payments/create');
    }
}
