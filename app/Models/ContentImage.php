<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentImage extends Model
{
    use HasFactory;
    protected $table = 'content_images';
    protected $fillable = ['id','content_id','file_path','file_name','created_at','update_at'];

    public $timestamps = false;
}
