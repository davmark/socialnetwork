<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
    /**
     * Set table name
     *
     * @var String $table 
     */
    protected $table = 'festivals';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'country_id',
        'start_time',
        'end_time',
        'email',
        'password',
    ];

    /**
     * Get the country record associated with the user.
     */
    public function country()
    {
        return $this->hasOne('App\Models\Country','id','country_id');
    }
}
