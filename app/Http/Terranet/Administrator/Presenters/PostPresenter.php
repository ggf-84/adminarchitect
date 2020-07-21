<?php

namespace App\Http\Terranet\Administrator\Presenters;

use Terranet\Presentable\Presenter;

class PostPresenter extends Presenter
{
    public function title()
    {
        return link_to_route('cms', $this->presentable->title, [
            'module' => 'posts',
            'id' => $this->presentable
        ]);
    }

    public function body()
    {
        return '<p class="text-muted">' . $this->presentable->body . '</p>';
    }

}
