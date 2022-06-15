<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $primarykey='id';
    public $incrementing = true;
    protected $id;
    protected $topic;
    protected $post;
   
}
