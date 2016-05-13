<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class StatusReply extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    /**
     * Set table name
     *
     * @var String $table
     */
    protected $table = 'status_replies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'text',
        'user_id',
        'status_id',
        'parent_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}