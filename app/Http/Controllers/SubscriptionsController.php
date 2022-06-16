<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriptions;
use	Illuminate\Support\facades\Input;
use App\Models\Billing;
use Illuminate\Support\Facades\Validator;
use DateTime;
use DateInterval;

class SubscriptionsController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Returns all Subscribers ordered by Id
        $subscriptions = Subscriptions::orderBy('id')->cursorPaginate(4);  
        
        
           return View('subscriptions')->with('subscriptions', $subscriptions); 
    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        ///cancels subscription
        $messages;
        try{
        $status = Subscriptions::where('id',	'=',	$id)
        ->update(['status'	=>	'cancelled']);
        return Redirect('subscriptions');
        $messages = 'successfully cancelled';
    }
    catch(Illuminate\Database\QueryException $exception){
        $errors = $exception->errorinfo;
        $messages = 'could not successfully cancel';
    return redirect('/subscriptions')->with('errors', $errors);
    }
    
      echo $messages;  
    return redirect('/subscriptions')->with('messages', $messages);
           
}
   
    /**-
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

               
    }
    
    public function activate(Request $request)
    {
        
        $messages;
        $errors = array('plan' => 'wrong plan should be a number');
        $rules = array('user_id' => 'required|numeric|max:10',
                      'plan' => 'required|string|max:255'
    );

       $validator	=	Validator::make($request->all(),$rules,$errors);
    if	($validator->fails())	{			
                        return	redirect('/subscriptions')			
                        ->withErrors($validator)				
                        ->withInput('errors',$errors);		
                        }
                       try{
        $billing = new Billing;
        $plan = $request->input('plan');
        $billing = Billing::where('plan', '=', $plan)->first();
        $date= date("Y-m-d", strtotime(str_replace('/', '-', $request->input('issue_date'))));
        $status = Subscriptions::find($request->input('user_id')); 
         $status->plan = $request->input('plan');
         $status ->issue_date = $date;
        
         $due = new DateTime($request->input('issue_date'));
         $val;
          if($plan == 'Gold Subscription Plan'){
              $val = "P3M";
          }
            elseif($plan == 'Diamond Subscription Plan')
           {    $val = "P1Y";}
               elseif($plan == 'Platinum Subscription Plan')
               {$val = "P1M";}
                  elseif($plan == 'Flexible Subscription Plan')
                   {  $val = "P1D";}
                       else
                      {   $val = "PT10M";}
      
      
              $interval = new DateInterval($val);
       $due->add($interval);
       $status->due_date= $due;      
         $status->status = 'active';
         $status->total = $status->total + $billing->price;
        $status->amount_paid = $billing->price;
        $status->save();
        $messages = 'Successfully activated';
                        }
                        catch(Illuminate\Database\QueryException $exception){
                            $errors = $exception->errorinfo;
                            //
      return redirect('/subscriptions')->with('errors', $errors);
                        }
                        
      return redirect('/subscriptions')->with('messages', $messages);
           
             
    }

    
    public function search(Request $request)
    {
        $messages = array('field' => 'wrong input');
        $rules = array('field' => 'required|alpha|max:40');

       $validator	=	Validator::make($request->only('field'),$rules,$messages);
    if	($validator->fails())	{			
                        return	redirect('/error')			
                        ->withErrors($validator)				
                        ->withInput();		
                        }

        $result = $request->input('field');
        $query = '%'.$result.'%';
        $subscriptions = Subscriptions::where('name', 'like', $query)->orderBy('id')->cursorPaginate(5);

        return view('subscriptions')->with ('subscriptions',$subscriptions);
        
        
    }
    
    
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
