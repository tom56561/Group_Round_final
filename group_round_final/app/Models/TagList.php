<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagList extends Model
{
    use HasFactory;
    protected $table = "taglist";
    protected $primaryKey = 'tagId';
    public $timestamps = false;

    function user() {
        return $this->belongsToMany(User_1::class, 'tagList_user');
    }
}
