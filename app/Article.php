<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    //protected $table = 'articles';
    //protected $primaryKey = 'someId';
    //public $incrementing = FALSE; // no autoincrement
    //public $timestamps = FALSE;

    protected $fillable = ['name', 'text'];
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

//    protected $casts = [
//        'name' => 'boolean',
//        'text' => 'array'
//    ];

    /*public function getNameAttribute($value)
    {
        return '# ' . $value . ' #';
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ' | ' . $value . ' | ';
    }*/
}
