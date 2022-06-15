<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    use HasFactory;
    protected $table= 'subscribers';
      
   protected $id;
   protected $name;
   protected $dob;
   protected  $email;
  
   protected $phone;
   public $incrementing = true;
   public $timestamps = true;
   protected $primarykey='id';
  

    protected $fillable=['id','name','dob','gender','email','phone','subscribers_id'];
public function status(){
    return $this->hasOne(Subscriptions::class);

}
public function getname(){
return $this->name;
}
}
