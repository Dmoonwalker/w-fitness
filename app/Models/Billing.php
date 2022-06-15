<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $table = 'billing';
    protected $primarykey='id';
    public $incrementing = true;
    protected $id;
    protected $plan;
    protected $duration;
    protected $price;
    protected $fillable=['price','duration','plan'];
    protected	$guarded=['id'];	
    
}
