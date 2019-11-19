<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'text',
        'description',
        'img',
        'user_id',
        'active',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
