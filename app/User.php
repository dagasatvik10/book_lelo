<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use Messagable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','college_id', 'branch_id', 'batch', 'address', 'contact', 'details'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany('App\Book')->where('need','=','sell');
    }

    public function suggestions()
    {
        return $this->hasMany('App\Book')->where('need','=','buy');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch()
    {
       return $this->belongsTo('App\Branch');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function college()
    {
        return $this->belongsTo('App\College');
    }

    public static function checkOrCreateUser($user){
      $u = User::where('email',$user->email)->first();
      if(!is_null($u)){
        return $u;
      }
        return User::create([
            'name'=>$user->name,
            'email'=>$user->email,
            'details'=>0,
        ]);
    }

}
