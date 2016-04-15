<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
    /**
     * Set table name
     *
     * @var String $table 
     */
    protected $table = 'countries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
