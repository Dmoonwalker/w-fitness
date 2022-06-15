<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
        $billing = Billing::OrderBy('id','asc')->get();  
        
           return View('settings')->with('billings', $billing); 
    
        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array('price' => 'price should be a number');
        $rules = array('price' => 'required|numeric|max:10');

       $validator	=	Validator::make($request->all(),$rules,$messages);
    if	($validator->fails())	{			
                        return	redirect('/error')			
                        ->withErrors($validator)				
                        ->withInput();		
                        }

        Billing::where('plan',	'=', 'Gold Subscription Plan' )
        ->update(['price'	=>		$request->input('price-Gold_Subscription_Plan')]);
        Billing::where('plan',	'=', 'Diamond Subscription Plan' )
        ->update(['price'	=>		$request->input('price-Diamond_Subscription_Plan')]);
        Billing::where('plan',	'=', 'Platinum Subscription Plan' )
        ->update(['price'	=>	$request->input('price-Platinum_Subscription_Plan')]);
        Billing::where('plan',	'=', 'Flexible Subscription Plan' )
        ->update(['price'	=>	$request->input('price-Flexible_Subscription_Plan')]); 
        return redirect()->to('/settings');  

        
    }

    


}