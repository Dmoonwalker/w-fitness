<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;
use App\Models\Subscriptions;

class DashboardController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
   }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function root()
    {
        //
        $subscriptions = Subscriptions::all()->take(5); 
        $customers = Subscribers::count(); 
        $revenue = Subscriptions::sum('total');
        
           return View('dashboard')->with('subscriptions', $subscriptions)->with('customers',$customers)->with('revenue',$revenue); 
    
        }

}
