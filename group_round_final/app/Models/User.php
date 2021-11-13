<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "user";
    protected $primaryKey = 'userId';
    public $timestamps = false;

    function citylist()
    {
        return $this->belongsTo(CityList::class, 'cityId');
    }
    function usercomment()
    {
        return $this->hasMany(UserComment::class, 'userId');
    }

    function department() {
        return $this->belongsTo(Citylist::class, 'cityList');
    }

}
