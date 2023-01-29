<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normaluser extends Model{
    use HasFactory;
    protected $table = 'normalusers';
    protected $fillable = ['id','name','userid','password'];

    public $timestamps = false;
}
