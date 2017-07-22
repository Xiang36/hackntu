<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carddata extends Model
{
    //
    //
    //
    protected $table = 'carddata';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid', 'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    public function User(){
        return $this->hasOne('App\user', 'id' , 'userid');
    }
}
