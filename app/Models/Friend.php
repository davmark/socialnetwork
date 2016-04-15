<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //use \Illuminate\Auth\Authenticatable;
    
    /**
     * Set table name
     *
     * @var String $table 
     */
    protected $table = 'friends';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'friend_id',
        'accept'
    ];

}
