<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    //
    protected $table = 'userdata';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid', 'taskid', 'score',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function User(){
        return $this->hasOne('App\User', 'id' , 'userid');
    }
    public function Task(){
        return $this->hasOne('App\Task', 'id' , 'taskid');
    }
}
