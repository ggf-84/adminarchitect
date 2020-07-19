<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Terranet\Presentable\PresentableInterface;
use \Terranet\Presentable\PresentableTrait;
use App\Http\Terranet\Administrator\Presenters\PostPresenter;

class Post extends Model implements PresentableInterface
{
    use PresentableTrait;

    protected $fillable = ['title', 'body', 'published', 'user_id'];

    protected $presenter = PostPresenter::class;

    /**
     * Has many Relationship
     *
     * @editable
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Comment relationship
     *
     * @widget
     * @placement main-bottom
     */
    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
