<?php

namespace App\Http\Terranet\Administrator\Actions;

use App\Http\Terranet\Administrator\Actions\Handlers\PublisheSelected;
use App\Http\Terranet\Administrator\Actions\Handlers\UnpublisheSelected;
use Terranet\Administrator\Services\CrudActions;
use App\Http\Terranet\Administrator\Actions\Handlers\TogglePublished;

class Posts extends CrudActions
{
    public function actions()
    {
        return [
            TogglePublished::class
        ];
    }

    public function batchActions()
    {
        return array_merge(parent::batchActions(), [
            PublisheSelected::class,
            UnpublisheSelected::class
        ]);
    }
}
