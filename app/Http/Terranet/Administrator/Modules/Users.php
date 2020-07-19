<?php

namespace App\Http\Terranet\Administrator\Modules;

use Terranet\Administrator\Collection\Mutable as MutableCollection;
use Terranet\Administrator\Field\HasMany;
use Terranet\Administrator\Modules\Users as CoreUsersModule;

/**
 * Administrator Users Module.
 */
class Users extends CoreUsersModule
{

    public function linkAttributes()
    {
        return ['icon' => 'fa fa-user', 'id' => $this->url()];

    }

    public function columns(): MutableCollection
    {
        return $this
            ->scaffoldColumns()
            ->push(HasMany::make( 'posts')->sortable(null));
    }

}
