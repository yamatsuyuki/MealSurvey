<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model{
    use HasFactory;
    protected $table = 'meal';
    protected $fillable = ['date','timezone','user','menu','image'];

    public $timestamps = false;
}
