<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
   
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = ['content', 'status']; // Apne database wale columns yahan add karo

}
