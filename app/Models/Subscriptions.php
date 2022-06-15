<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;


    protected $table = 'subscriptions';

    public $timestamps = true;
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $foreignKey='subscribers_id';
  
    protected $fillable=['id','name','plan','issue_date','due_date','amount_paid','total','status','subscribers_id'];
}
