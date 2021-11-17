<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
<<<<<<< HEAD
     protected $table = 'event';
=======
    protected $table = 'event';
>>>>>>> e3341f64dabb5e94454ff0e9362396ea9fdf2b03
    protected $primaryKey = 'eventId';
    public $timestamps = false;

    function tagList1() {
        return $this->hasOne('App\Models\TagList', 'tagId','eventTag');
    }    

    function tagList2() {
        return $this->hasOne('App\Models\TagList', 'tagId','eventTag2');
    }    

    function user() {
        return $this->hasOne('App\Models\User', 'userId','userId');
    }

    function userRecord(){
        return $this->hasMany('App\Models\UserRecord', 'eventId', 'eventId');
    }
}
