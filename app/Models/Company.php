<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
    /**
     * Set table name
     *
     * @var String $table 
     */
    protected $table = 'companies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'avatar',
        'category_id',
        'subcategory_id',
        'country_id',
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
