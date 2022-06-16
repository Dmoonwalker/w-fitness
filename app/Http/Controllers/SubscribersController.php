<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Subscribers;
use App\Models\Billing;
use App\Models\Subscriptions;
use DateTime;
use DateInterval;

class SubscribersController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers =Subscribers::orderBy('id')->cursorPaginate(4);

         $count = Subscribers::count();						
          return View('allusers')->with('subscribers', $subscribers); 
      

        //
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
        $messages;
        $error = array('phone' => '');
        
        $rules = array('first_name' => 'required|alpha|max:30',
                        'last_name' => 'required|alpha|max:30',
                        'dob' => 'required|date',
                        'gender' => 'required|alpha',
                        'email' => 'required|email|min:5',
                        'phone' => 'required|numeric'
    );

       $validator	=	Validator::make($request->all(),$rules,$error);
    if	($validator->fails())	{			
                        return	redirect('/allusers')			
                        ->withErrors($validator)				
                        ->withInput();		
                        }
              try{
            $fname=$request->input('first_name');
            
            $lname=$request->input('last_name');
            $gender=$request->input('gender');
            $dob=$request->input('dob');
            $email=$request->input('email');
            $phone=$request->input('phone');
            
            $subscriber = new Subscribers;
            $subscriber->name = $fname . ' ' . $lname;
            $subscriber->dob = $dob;
            $subscriber->gender = $gender;
            $subscriber->email = $email;
            $subscriber->phone = $phone;
            $subscriber->save();
            
            $messages = 'successfully created';
        }
        catch(Illuminate\Database\QueryException $exception){
            $errors = $exception->errorinfo;
            $messages = 'could not add user';
          return redirect('/allusers')->with('errors', $messages);
        }
        return redirect('/allusers')->with('messages', $messages);
                       

            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = Subscribers::find($id);
       return view('profile')->with('user',$user);
        
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
        $subscribers = Subscribers::where('name', 'like', $query)->orderBy('id')->cursorPaginate(5);;

        return view('allusers')->with ('subscribers',$subscribers);
       // echo($result->name);
        
        
    }

    // adds new subscription created by user
    // created by new user who has never subscribed to the system
    
    public function addsubscription(Request $request)
    {
        $messages;

        ///validate
        $errors = array('plan' => 'wrong plan should be a number');
        $rules = array('user_id' => 'required|numeric|max:10',
                      'plan' => 'required|string|max:255',
                     
    );

       $validator	=	Validator::make($request->all(),$rules,$errors);
    if	($validator->fails())	{			
                        return	redirect('/allusers')			
                        ->withErrors($validator)				
                        ->withInput($errors);		
                        }
                        $user =  Subscriptions::where('subscribers_id','=',$request->input('user_id'))->first();
                        if(isset($user->status)){
                           
                            if($user->status = 'active'){
                                return redirect()->to('/allusers');
                            }


    
                        }
        ///create the object and store it in database
              try{
        $billing = new Billing;
        $plan = $request->input('plan');
        $billing = Billing::where('plan', '=', $plan)->first();
        $date= date("Y-m-d", strtotime(str_replace('/', '-', $request->input('issue_date'))));
       $subscription = new Subscriptions ;
      $subscriber = new Subscribers;
      $user_id = $request->input('user_id');
        $subscriber = Subscribers::where('id','=',$user_id)->first();
        $subscription->name = $subscriber->name;
         $subscription->plan = $plan;
         
         $subscription ->issue_date = $date;
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

         $subscription->due_date = $due->format('Y-m-d');
 
         $subscription->status = 'active';
        $subscription->amount_paid =$billing->price;
        $subscription->total = $subscription->total + $billing->price;
        
        $subscription->subscribers_id = $subscriber->id;
        $subscription->save();
        $messages = 'Successfully activated';
                        }
                        catch(Illuminate\Database\QueryException $exception){
                            $errors = $exception->errorinfo;
                            //
      return redirect('/allusers')->with('errors', $errors);
                        }
                        
      return redirect('/allusers')->with('messages', $messages);
           
             
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
