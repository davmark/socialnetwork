<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatusReply;
use App\Http\Services\User\StatusService;

class Status extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
    /**
     * Set table name
     *
     * @var String $table 
     */
    protected $table = 'statuses';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'text',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get the country record associated with the user.
     * 
     * @return StatusReply
     */
    public function replies()
    {
        return $this->hasMany('App\Models\StatusReply', 'status_id', 'id');
    }
    
    /**
     * Get the country record associated with the user.
     *
     * @return StatusReply
     */
    public function getRepliesTree($replies, $parent_id = 0, $tab = '')
    {
        $tree = [];
        $span = '';
        if( !$parent_id )
            $span = '<span class="reply__text">['.self::find($this->id)->text.' ...]</span><br/>';
        foreach ( $replies as $reply )
        {
            if($parent_id == $reply->parent_id)
            {
                if( $parent_id )
                   $span = '<span class="reply__text">['.StatusReply::find($reply->parent_id)->text.' ...]</span><br/>';
                 
                $tree[$reply->id]['id'] = $reply->id;
                $tree[$reply->id]['text'] = $span.$reply->text;
                $tree+= $this->getRepliesTree($replies, $reply->id, $tab);
            }
        }
        return $tree;
    }
}
