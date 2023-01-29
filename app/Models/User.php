<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $table = 'users';
    protected $fillable = ['name','email','password',];

    public $timestamps = false;

    public function favorites(){
      return $this->belongsToMany(Post::class, 'favorites', 'user_id', 'meal_id')->withTimestamps();
      }
      public function favorite($mealId)
      {
      $exist = $this->is_favorite($mealId);
      if($exist){
      return false;
      }else{
      $this->favorites()->attach($mealId);
      return true;
      }
      }
      public function unfavorite($mealId)
         {
             $exist = $this->is_favorite($mealId);

             if($exist){
                 $this->favorites()->detach($mealId);
                 return true;
             }else{
                 return false;
             }
         }

         public function is_favorite($mealId)
         {
             return $this->favorites()->where('pmeal_id',$mealId)->exists();
         }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
  //  protected $casts = [
  //    'email_verified_at' => 'datetime',
  //];
}
