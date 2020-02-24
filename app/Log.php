<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        "type",
        "data",
        "notification",
        "ip",
        "user_id"
    ];
    
    protected $casts = [
        'type'         => 'string',
        'data'         => 'json',
        'notification' => 'boolean',
        'ip'           => 'string',
        'user_id'      => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
