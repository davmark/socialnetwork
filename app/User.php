<?php
namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    /**
     * Set table name
     *
     * @var String $table 
     */
     protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'username',
        'first_name',
        'last_name',
        'occupation',
        'country_id',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * Get the country record associated with the user.
     * 
     * @return Country
     */
    public function country()
    {
        return $this->hasOne('App\Models\Country', 'id', 'country_id');
    }

    /**
     * Get user friends list
     * 
     * @return array
     */
    public function firendsList()
    {
        $friendsList = [
                'friends'   => [],
                'from' => [],
                'to' => [],
            ];
        $from = \App\Models\Friend::where('user_id', $this->id)->where('accept',1)->lists('friend_id')->toArray();
        $fromArr = self::whereIn('id',$from)->get()->toArray();
        $to = \App\Models\Friend::where('friend_id', $this->id)->where('accept',1)->lists('user_id')->toArray();
        $toArr = self::whereIn('id',$to)->get()->toArray();
        $friends = $toArr+$fromArr;
        $friendsList['friends'] = $friends;

        $from = \App\Models\Friend::where('user_id', $this->id)->where('accept',0)->lists('friend_id')->toArray();
        $fromArr = self::whereIn('id',$from)->get()->toArray();
        $friendsList['from'] = $fromArr;

        $to = \App\Models\Friend::where('friend_id', $this->id)->where('accept',0)->lists('user_id')->toArray();
        $toArr = self::whereIn('id',$to)->get()->toArray();
        $friendsList['to'] = $toArr;

        return $friendsList;
    }

    /**
     * Get auth user relationship
     * 
     * @param type $auth_user_id
     * @param type $user_id
     * @return type
     */
    public function getRequest($auth_user_id, $user_id)
    {
        $request = false;

        if($friendModel = \App\Models\Friend::where('user_id', $this->id)
                ->where('friend_id',$auth_user_id)
                ->first())
        {
            $request['from']   = false;
            $request['to']     = true;
            $request['accept'] = $friendModel->accept;
        }

        if($friendModel = \App\Models\Friend::where('friend_id', $this->id)
                ->where('user_id',$auth_user_id)
                ->first())
        {
            $request['from']   = true;
            $request['to']     = false;
            $request['accept'] = $friendModel->accept;
        }
        return $request;
    }
}
