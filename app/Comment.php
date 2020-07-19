<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment','user_id', 'post_id' ];

    protected $hidden = ['id'];

    /**
     * Has many Relationship
     *
     * @editable
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Has many Relationship
     *
     * @editable
     */
    public function user()
    {
//        return $this->hasOne(User::class, 'id', 'user_id');
        return $this->belongsTo(User::class );
    }
}
