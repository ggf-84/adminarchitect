<?php

namespace App\Http\Terranet\Administrator\Modules;

use App\Traits\Columns\UsersColumns;
use App\User;
use Terranet\Administrator\Collection\Mutable as MutableCollection;
use Terranet\Administrator\Field\HasMany;
use Terranet\Administrator\Modules\Users as CoreUsersModule;
use App\Services\UserStats;

/**
 * Administrator Users Module.
 */
class Users extends CoreUsersModule
{
    use UsersColumns;

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

    public function viewColumns(): MutableCollection
    {
        return $this->scaffoldColumns()
            ->push(HasMany::make( 'posts statistic', 'posts'), function($element){
                $element->renderAs(function ($user) {
                    $stats = new UserStats($user);
                    return $stats->render();
                });
                return $element;
            });
    }

//    public function widgets()
//    {
//        $user = app('scaffold.model');
//
//        return $this->scaffoldWidgets()->push(
//            new UserStats($user)
//        );
//    }

}
